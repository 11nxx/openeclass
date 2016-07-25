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

$require_login = false;
$guest_allowed = true;

include '../../include/baseTheme.php';

if (!get_config('eportfolio_enable')) {
    $tool_content = "<div class='alert alert-danger'>$langePortfolioDisabled</div>";
    draw($tool_content, 1);
    exit;
}

$userdata = array();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $toolName = $langUserePortfolio;
} else {
    $id = $uid;
    $toolName = $langMyePortfolio;
}

$userdata = Database::get()->querySingle("SELECT surname, givenname, eportfolio_enable
                                          FROM user WHERE id = ?d", $id);

if ($userdata) {
    if ($uid == $id) {
        
        if ($userdata->eportfolio_enable == 0) {
            $tool_content .= "<div class='alert alert-warning'>$langePortfolioDisableWarning</div>";
        }
        
        $tool_content .= action_bar(array(
                array('title' => $langBio,
                      'url' => "{$urlAppend}courses/userbios/$id"."_bio.pdf",
                      'icon' => 'fa-download',
                      'level' => 'primary-label',
                      'show' => file_exists("$webDir/courses/userbios/$id"."_bio.pdf")),
                array('title' => $langResume,
                      'url' => "index.php?id=$id",
                      'level' => 'primary-label'),
                array('title' => $langResourcesCollection,
                      'url' => "resources.php?id=$id",
                      'level' => 'primary-label',
                      'button-class' => 'btn-info'),
                array('title' => $langEditResume,
                      'url' => "edit_eportfolio.php",
                      'icon' => 'fa-edit'),
                array('title' => $langUploadBio,
                      'url' => "bio_upload.php",
                      'icon' => 'fa-upload')
            ));
        
        if (isset($_GET['action']) && $_GET['action'] == 'add') {
            if (isset($_GET['type']) && isset($_GET['rid'])) {
                $rtype = $_GET['type'];
                $rid = $_GET['rid'];
                
                if ($rtype == 'blog') {
                    $post = Database::get()->querySingle("SELECT * FROM blog_post WHERE id = ?d", $rid);
                    if ($post) {
                        if ($post->user_id == $uid){
                            if ($post->course_id == 0) { //personal blog post
                                $course_title = '';
                            } else {
                                $course_title = Database::get()->querySingle("SELECT title FROM course WHERE id = ?d", $post->course_id)->title;
                            }
                        }
                        $data = array($post->title,$post->content,$post->time);
                        
                        Database::get()->query("INSERT INTO eportfolio_resource (user_id,resource_id,resource_type,course_id,course_title,data)
                                VALUES (?d,?d,?s,?d,?s,?s)", $uid,$rid,'blog',$post->course_id,$course_title,serialize($data));
                        Session::Messages($langePortfolioResourceAdded, 'alert-success');
                        redirect_to_home_page("main/eportfolio/resources.php");
                    }
                } elseif ($rtype == 'work') {
                    
                }
            }
        } elseif (isset($_GET['action']) && $_GET['action'] == 'remove') {
            if (isset($_GET['type']) && isset($_GET['rid'])) {
                $rtype = $_GET['type'];
                $rid = $_GET['rid'];
                Database::get()->query("DELETE FROM eportfolio_resource WHERE user_id = ?d AND resource_id = ?d AND resource_type = ?d", $uid, $rid, $rtype);
                Session::Messages($langePortfolioResourceRemoved, 'alert-success');
                redirect_to_home_page("main/eportfolio/resources.php");
            }
        }
        
    } else {
        if ($userdata->eportfolio_enable == 0) {
            $tool_content = "<div class='alert alert-danger'>$langUserePortfolioDisabled</div>";
            draw($tool_content, 1);
            exit;
        }
        
        $tool_content .= action_bar(array(
                array('title' => $langBio,
                      'url' => "{$urlAppend}courses/userbios/$id"."_bio.pdf",
                      'icon' => 'fa-download',
                      'level' => 'primary-label',
                      'show' => file_exists("$webDir/courses/userbios/$id"."_bio.pdf")),
                array('title' => $langResume,
                      'url' => "index.php?id=$id",
                      'level' => 'primary-label'),
                array('title' => $langResourcesCollection,
                      'url' => "resources.php?id=$id",
                      'level' => 'primary-label',
                      'button-class' => 'btn-info'),
            ));
    }
}

//$blog_posts = Database::get()->queryArray("SELECT * FROM ");

if ($uid == $id) {
    draw($tool_content, 1);
} else {
    draw($tool_content, 2);
}