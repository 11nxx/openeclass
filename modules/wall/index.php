<?php
/* ========================================================================
 * Open eClass 3.0
* E-learning and Course Management System
* ========================================================================
* Copyright 2003-2014  Greek Universities Network - GUnet
* A full copyright notice can be read in "/info/copyright.txt".
* For a full list of contributors, see "credits.txt".
*
* Open eClass is an open platform distributed in the hope that it will
* be useful (without any warranty), under the terms of the GNU (General
		* Public License) as published by the Free Software Foundation.
* The full license can be read in "/info/license/license_gpl.txt".
*
* Contact address: GUnet Asynchronous eLearning Group,
*                  Network Operations Center, University of Athens,
*                  Panepistimiopolis Ilissia, 15784, Athens, Greece
*                  e-mail: info@openeclass.org
* ======================================================================== */

$require_current_course = TRUE;

require_once '../../include/baseTheme.php';
require_once 'modules/wall/wall_functions.php';
require_once 'include/log.php';

$head_content .= '<link rel="stylesheet" type="text/css" href="css/wall.css">';

load_js('waypoints-infinite');

$posts_per_page = 5;

$navigation[] = array("url" => "index.php?course=$course_code", "name" => $langWall);
$toolName = $langWall;

//handle submit
if (isset($_POST['submit'])) {
    if (allow_to_post($course_id, $uid, $is_editor)) {
        if ($_POST['type'] == 'text') {
            if (!empty($_POST['message'])) {
                $content = links_autodetection($_POST['message']);
                $id = Database::get()->query("INSERT INTO wall_post (course_id, user_id, content, timestamp) VALUES (?d,?d,?s,UNIX_TIMESTAMP())",
                    $course_id, $uid, $content)->lastInsertID;
                Log::record($course_id, MODULE_ID_WALL, LOG_INSERT, 
                    array('id' => $id,
                           'content' => $content));
                Session::Messages($langWallPostSaved, 'alert-success');
            } else {
                Session::Messages($langWallMessageEmpty);
            }
        } elseif ($_POST['type'] == 'video') {
            if (empty($_POST['video'])) {
                if (!empty($_POST['message'])) {
                    Session::flash('content', $_POST['message']);
                }
                Session::flash('type', 'video');
                Session::Messages($langWallVideoLinkEmpty);
            } elseif (validate_youtube_link($_POST['video']) === FALSE) {
                if (!empty($_POST['message'])) {
                    Session::flash('content', $_POST['message']);
                }
                Session::flash('type', 'video');
                Session::flash('video_link', $_POST['video']);
                Session::Messages($langWallVideoLinkNotValid);
            } else {
                if (empty($_POST['message'])) {
                    $content = '';
                } else {
                    $content = links_autodetection($_POST['message']);
                }
                $id = Database::get()->query("INSERT INTO wall_post (course_id, user_id, content, video_link, timestamp) VALUES (?d,?d,?s,?s, UNIX_TIMESTAMP())",
                    $course_id, $uid, $content, $_POST['video'])->lastInsertID;
                Log::record($course_id, MODULE_ID_WALL, LOG_INSERT,
                    array('id' => $id,
                          'content' => $content,
                          'videolink' => $_POST['video']));
                Session::Messages($langWallPostSaved, 'alert-success');
            }
        }
        redirect_to_home_page("modules/wall/index.php?course=$course_code");
    }
} elseif (isset($_GET['delete'])) { //handle delete
    $id = intval($_GET['delete']);
    if (allow_to_edit($id, $uid, $is_editor)) {
        //delete abuse reports for this wall post first and log action
        $res = Database::get()->queryArray("SELECT * FROM abuse_report WHERE `rid` = ?d AND `rtype` = ?s", $id, 'wallpost');
        foreach ($res as $r) {
            Log::record($r->course_id, MODULE_ID_ABUSE_REPORT, LOG_DELETE,
            array('id' => $r->id,
            'user_id' => $r->user_id,
            'reason' => $r->reason,
            'message' => $r->message,
            'rtype' => 'wallpost',
            'rid' => $id,
            'rcontent' => Database::get()->querySingle("SELECT content FROM wall_post WHERE id = ?d", $id)->content,
            'status' => $r->status
            ));
        }
        Database::get()->query("DELETE FROM abuse_report WHERE rid = ?d AND rtype = ?s", $id, 'wallpost');
        
        //delete comments and ratings
        Commenting::deleteComments('wallpost', $id);
        Rating::deleteRatings('wallpost', $id);
        
        $post = Database::get()->querySingle("SELECT content, videolink FROM wall_post WHERE id = ?d", $id);
        $content = $post->content;
        $videolink = $post->videolink;
        
        Log::record($course_id, MODULE_ID_WALL, LOG_DELETE, 
            array('id' => $id,
                  'content' => $content,
                  'videolink' => $videolink));
        
        Database::get()->query("DELETE FROM wall_post WHERE id = ?d", $id);
        Session::Messages($langWallPostDeleted, 'alert-success');
    }
    redirect_to_home_page("modules/wall/index.php?course=$course_code");
} elseif (isset($_POST['edit_submit'])) { //handle edit form submit
    $id = intval($_GET['edit']);
    if (allow_to_edit($id, $uid, $is_editor)) {
        if (isset($_POST['video'])) { //video post
            if (empty($_POST['video'])) {
                if (!empty($_POST['message'])) {
                    Session::flash('content', $_POST['message']);
                }
                Session::Messages($langWallVideoLinkEmpty);
                redirect_to_home_page("modules/wall/index.php?course=$course_code&edit=$id");
            } elseif (validate_youtube_link($_POST['video']) === FALSE) {
                if (!empty($_POST['message'])) {
                    Session::flash('content', $_POST['message']);
                }
                Session::flash('video_link', $_POST['video']);
                Session::Messages($langWallVideoLinkNotValid);
                redirect_to_home_page("modules/wall/index.php?course=$course_code&edit=$id");
            } else {
                if (empty($_POST['message'])) {
                    $content = '';
                } else {
                    $content = links_autodetection($_POST['message']);
                }
                Database::get()->query("UPDATE wall_post SET content = ?s, video_link = ?s WHERE id = ?d AND course_id = ?d",
                    $content, $_POST['video'], $id, $course_id);
                
                Log::record($course_id, MODULE_ID_WALL, LOG_MODIFY,
                array('id' => $id,
                      'content' => $content,
                      'videolink' => $_POST['video']));
                
                Session::Messages($langWallPostSaved, 'alert-success');
                redirect_to_home_page("modules/wall/index.php?course=$course_code");
            }
        } else { //text post
            if (!empty($_POST['message'])) {
                $content = links_autodetection($_POST['message']);
                
                Database::get()->query("UPDATE wall_post SET content = ?s WHERE id = ?d AND course_id = ?d",
                    $content, $id, $course_id);
                
                Log::record($course_id, MODULE_ID_WALL, LOG_MODIFY,
                    array('id' => $id,
                          'content' => $content));
                
                Session::Messages($langWallPostSaved, 'alert-success');
                redirect_to_home_page("modules/wall/index.php?course=$course_code");
            } else {
                Session::Messages($langWallMessageEmpty);
                redirect_to_home_page("modules/wall/index.php?course=$course_code&edit=$id");
            }
        }
    }
} elseif (isset($_GET['pin'])) {
    $id = intval($_GET['pin']);
    if ($is_editor && allow_to_edit($id, $uid, $is_editor)) {
        Database::get()->query("UPDATE wall_post SET pinned = !pinned WHERE id = ?", $id);
        Session::Messages($langWallGeneralSuccess, 'alert-success');
        redirect_to_home_page("modules/wall/index.php?course=$course_code");
    }
}

if (isset($_GET['showPost'])) { //show comments case
    $id = intval($_GET['showPost']);
    $post = Database::get()->querySingle("SELECT id, user_id, content, video_link, FROM_UNIXTIME(timestamp) as datetime, pinned FROM wall_post WHERE course_id = ?d AND id = ?d", $course_id, $id);
    if ($post) {
        $tool_content .= action_bar(array(
                  array('title' => $langBack,
                        'url' => "$_SERVER[SCRIPT_NAME]?course=$course_code",
                        'icon' => 'fa-reply',
                        'level' => 'primary-label')
        ),false);
        $tool_content .= generate_single_post_html($post);
    } else {
        redirect_to_home_page("modules/wall/index.php?course=$course_code");
    }
} elseif (isset($_GET['edit'])) {
    $id = intval($_GET['edit']);
    if (allow_to_edit($id, $uid, $is_editor)) {
        $tool_content .= action_bar(array(
                             array('title' => $langBack,
                                   'url' => "$_SERVER[SCRIPT_NAME]?course=$course_code",
                                   'icon' => 'fa-reply',
                                   'level' => 'primary-label')
                          ),false);
        
        $post = Database::get()->querySingle("SELECT content, video_link FROM wall_post WHERE course_id = ?d AND id = ?d", $course_id, $id);
        $content = Session::has('content')? Session::get('content') : $post->content;
        $video_link = Session::has('video_link')? Session::get('video_link') : $post->video_link;
        
        if ($video_link != '') {
            $video_input = '<div class="form-group" id="hidden_input">
                                <label for="video_link">'.$langWallVideoLink.'</label>
                                <input class="form-control" type="url" name="video" id="video_link" value="'.$video_link.'">
                            </div>';
        } else {
            $video_input = '';
        }
        
        $tool_content .= '<div class="row">
            <div class="col-sm-12">
                <div class="form-wrapper">
                    <form id="wall_form" method="post" action="" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group">
                                <label for="message_input">'.$langMessage.'</label>
                                <textarea class="form-control" rows="6" name="message" id="message_input">'.$content.'</textarea>
                            </div>
                            '.$video_input.'
                        </fieldset>
                        <div class="form-group">'.
                            form_buttons(array(
                                array(
                                    'text'  =>  $langSubmit,
                                    'name'  =>  'edit_submit',
                                    'value' =>  $langSubmit
                                )
                            ))
                        .'</div>
                    </form>
                </div>
            </div>
        </div>';
    } else {
        redirect_to_home_page("modules/wall/index.php?course=$course_code");
    }
} else {
    //show post form
    if (allow_to_post($course_id, $uid, $is_editor)) {
        if (Session::has('type') && Session::get('type') == 'video') {
            $jquery_string = "$('#type_input').val('video');";
        } else {
            $jquery_string = "$('#hidden_input').hide();";
        }
        
        $head_content .= "<script>
                              $(function() {
                                  $jquery_string
                                  $('#type_input').change(function(){
                                      if($('#type_input').val() == 'video') {
                                          $('#hidden_input').show(); 
                                      } else {
                                          $('#hidden_input').hide(); 
                                      } 
                                  });
                              });
                
                              $(function() {
                                  $('#wall_form').submit(function() {
                                      if($('#type_input').val() != 'video') {
                                          $('#video_link').remove();
                                      }
                                  });
                              })
                          </script>";
        
        $content = Session::has('content')? Session::get('content'): '';
        $video_link = Session::has('video_link')? Session::get('video_link'): '';
        
        $tool_content .= '<div class="row">
            <div class="col-sm-12">
                <div class="form-wrapper">
                    <form id="wall_form" method="post" action="" enctype="multipart/form-data">
                        <fieldset> 
                            <div class="form-group">
                                <label for="message_input">'.$langMessage.'</label>
                                <textarea class="form-control" rows="6" name="message" id="message_input">'.$content.'</textarea>
                            </div>
                            <div class="form-group">
                                <label for="type_input">'.$langType.'</label>
                                <select class="form-control" name="type" id="type_input">
                                    <option value="text">'.$langWallText.'</option>
                                    <option value="video">'.$langWallVideo.'</option>
                                </select>
                            </div>
                            <div class="form-group" id="hidden_input">
                                <label for="video_link">'.$langWallVideoLink.'</label>
                                <input class="form-control" type="url" name="video" id="video_link" value="'.$video_link.'">
                            </div>                
                        </fieldset>
                        <div class="form-group">'.
                            form_buttons(array(
                                array(
                                    'text'  =>  $langSubmit,
                                    'name'  =>  'submit',
                                    'value' =>  $langSubmit
                                )
                            ))
                      .'</div>        
                    </form>
                </div>
            </div>
        </div>';
    }
    
    //show wall posts
    $posts = Database::get()->queryArray("SELECT id, user_id, content, video_link, FROM_UNIXTIME(timestamp) as datetime, pinned  FROM wall_post WHERE course_id = ?d ORDER BY pinned DESC, timestamp DESC LIMIT ?d", $course_id, $posts_per_page);
    if (count($posts) == 0) {
        $tool_content .= '<div class="alert alert-warning">'.$langNoWallPosts.'</div>';
    } else {
        $tool_content .= generate_infinite_container_html($posts, 2);
        
        $tool_content .= '<script>
                              var infinite = new Waypoint.Infinite({
                                  element: $(".infinite-container")[0]
                              })
                          </script>';
    }
}

draw($tool_content, 2, null, $head_content);
