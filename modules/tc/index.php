<?php

/* ========================================================================
 * Open eClass
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
 * ========================================================================
 */


$require_current_course = TRUE;
$require_login = TRUE;
$require_help = TRUE;
$helpTopic = 'bbb';

require_once '../../include/baseTheme.php';
require_once 'include/sendMail.inc.php';
// For creating bbb urls & params
require_once 'bbb-api.php';
require_once 'om-api.php';
require_once 'webconf-api.php';
require_once 'functions.php';

require_once 'include/lib/modalboxhelper.class.php';
ModalBoxHelper::loadModalBox();

/* * ** The following is added for statistics purposes ** */
require_once 'include/action.php';
$action = new action();
$action->record(MODULE_ID_TC);
/* * *********************************** */

$toolName = $langBBB;

//Here we check if we use BBB,OpenMeetings or WebConf
//Algo to be implemented later
if(is_active_om_server()) {
    $server_type='om';
}
if(is_active_bbb_server()) {
    $server_type='bbb';
}
if(is_active_webconf_server()) {
    $server_type='webconf';
}

// guest user not allowed
if (check_guest()) {
    $tool_content .= "<div class='alert alert-danger'>$langNoGuest</div>";
    draw($tool_content, 2);
}
load_js('tools.js');
load_js('bootstrap-datetimepicker');
load_js('validation.js');

$head_content .= "
<script type='text/javascript'>

// Bootstrap datetimepicker Initialization
$(function() {
$('input#start_session').datetimepicker({
        format: 'dd-mm-yyyy hh:ii',
        pickerPosition: 'bottom-right',
        language: '".$language."',
        autoclose: true
    });
});

</script>";

$head_content .= "<script type='text/javascript'>
        $(function() {
            $('#BBBEndDate').datetimepicker({
                format: 'dd-mm-yyyy hh:ii', 
                pickerPosition: 'bottom-right', 
                language: '".$language."',
                autoclose: true    
            }).on('changeDate', function(ev){
                if($(this).attr('id') === 'BBBEndDate') {
                    $('#answersDispEndDate, #scoreDispEndDate').removeClass('hidden');
                }
            }).on('blur', function(ev){
                if($(this).attr('id') === 'BBBEndDate') {
                    var end_date = $(this).val();
                    if (end_date === '') {
                        if ($('input[name=\"dispresults\"]:checked').val() == 4) {
                            $('input[name=\"dispresults\"][value=\"1\"]').prop('checked', true);
                        }                          
                        $('#answersDispEndDate, #scoreDispEndDate').addClass('hidden');
                    }
                }
            });
            $('#enableEndDate').change(function() {
                var dateType = $(this).prop('id').replace('enable', '');
                if($(this).prop('checked')) {
                    $('input#BBB'+dateType).prop('disabled', false);
                    if (dateType === 'EndDate' && $('input#BBBEndDate').val() !== '') {
                        $('#answersDispEndDate, #scoreDispEndDate').removeClass('hidden');
                    }
                } else {
                    $('input#BBB'+dateType).prop('disabled', true);
                    if ($('input[name=\"dispresults\"]:checked').val() == 4) {
                        $('input[name=\"dispresults\"][value=\"1\"]').prop('checked', true);
                    }                    
                    $('#answersDispEndDate, #scoreDispEndDate').addClass('hidden');
                }
            });
        });
    </script>";

load_js('select2');

$head_content .= "<script type='text/javascript'>
    $(document).ready(function () {
        $('#select-groups').select2();
        $('#selectAll').click(function(e) {
            e.preventDefault();
            var stringVal = [];
            $('#select-groups').find('option').each(function(){
                stringVal.push($(this).val());
            });
            $('#select-groups').val(stringVal).trigger('change');
        });
        $('#removeAll').click(function(e) {
            e.preventDefault();
            var stringVal = [];
            $('#select-groups').val(stringVal).trigger('change');
        });
    });

    function onAddTag(tag) {
        alert('Added a tag: ' + tag);
    }
    function onRemoveTag(tag) {
        alert('Removed a tag: ' + tag);
    }

    function onChangeTag(input,tag) {
        alert('Changed a tag: ' + tag);
    }

    $(function() {
        $('#tags_1').select2({tags:[], formatNoMatches: ''});
    });
</script>
";

if ($is_editor) {
    if (isset($_GET['add']) or isset($_GET['choice'])) {
        if (isset($_GET['add'])) {
            $pageName = $langNewBBBSession;
        } elseif ((isset($_GET['choice'])) and $_GET['choice'] == 'edit') {
            $pageName = $langModify;
        }
        $tool_content .= action_bar(array(
            array('title' => $langBack,
                  'url' => "$_SERVER[SCRIPT_NAME]?course=$course_code",
                  'icon' => 'fa-reply',
                  'level' => 'primary-label')));
    } else {
        if (isset($_GET['id'])) {
            $tool_content .= action_bar(array(
                array('title' => $langBack,
                      'url' => "$_SERVER[SCRIPT_NAME]?course=$course_code",
                      'icon' => 'fa-reply',
                      'level' => 'primary-label')));
        } else {
            $tool_content .= action_bar(array(
                array('title' => $langNewBBBSession,
                      'url' => "$_SERVER[SCRIPT_NAME]?course=$course_code&amp;add=1",
                      'icon' => 'fa-plus-circle',
                      'button-class' => 'btn-success',
                      'level' => 'primary-label',
                      'show' => (is_active_bbb_server() or is_active_om_server() or is_active_webconf_server()))));
        }
    }
}

if (isset($_GET['add'])) {
    $navigation[] = array('url' => "$_SERVER[SCRIPT_NAME]?course=$course_code", 'name' => $langBBB);    
    new_bbb_session();
}
elseif(isset($_POST['update_bbb_session'])) {
    if (!isset($_POST['token']) || !validate_csrf_token($_POST['token'])) csrf_token_error();
    if (isset($_POST['enableEndDate']) and ($_POST['enableEndDate'])) {
        $endDate_obj = DateTime::createFromFormat('d-m-Y H:i', $_POST['BBBEndDate']);
        $end = $endDate_obj->format('Y-m-d H:i:s');
    } else {
        $end = NULL;
    }
    $startDate_obj = DateTime::createFromFormat('d-m-Y H:i', $_POST['start_session']);
    $start = $startDate_obj->format('Y-m-d H:i:s');
    $notifyUsers = 0;
    if (isset($_POST['notifyUsers']) and $_POST['notifyUsers']) {
        $notifyUsers = 1;
    }
    $record = 'false';
    if (isset($_POST['record'])) {
        $record = $_POST['record'];
    }    
    add_update_bbb_session($_POST['title'], $_POST['desc'], $start, $end ,$_POST['status'], $notifyUsers, $_POST['minutes_before'], $_POST['external_users'], $record, $_POST['sessionUsers'], true, getDirectReference($_GET['id']));
    Session::Messages($langBBBAddSuccessful, 'alert-success');
    redirect("index.php?course=$course_code");
}
elseif(isset($_GET['choice']))
{
    $navigation[] = array('url' => "$_SERVER[SCRIPT_NAME]?course=$course_code", 'name' => $langBBB);
    switch($_GET['choice'])
    {
        case 'edit':
            edit_bbb_session(getDirectReference($_GET['id']));
            break;
        case 'do_delete':
            delete_bbb_session(getDirectReference($_GET['id']));
            break;
        case 'do_disable':
            disable_bbb_session(getDirectReference($_GET['id']));
            break;
        case 'do_enable':
            enable_bbb_session(getDirectReference($_GET['id']));
            break;
        case 'do_join':
            #check if there is any record-capable bbb server. Otherwise notify users
            if (isset($_GET['record'])) {
                if($_GET['record']=='true' && Database::get()->querySingle("SELECT COUNT(*) AS count FROM bbb_servers WHERE enabled='true' AND enable_recordings='true'")->count == 0)
                {
                    $tool_content .= "<div class='alert alert-warning'>$langBBBNoServerForRecording</div>";
                    break;
                }                         
                switch($server_type)
                {
                    case 'bbb':
                        if (bbb_session_running($_GET['meeting_id']) == false)                        
                        {
                            $mod_pw = Database::get()->querySingle("SELECT * FROM bbb_session WHERE meeting_id=?s",$_GET['meeting_id'])->mod_pw;                
                            create_meeting($_GET['title'],$_GET['meeting_id'],$mod_pw,$_GET['att_pw'],$_GET['record']);
                        }
                        break;
                    case 'om':
                        if (om_session_running($_GET['meeting_id']) == false)                        
                        {
                            create_om_meeting($_GET['title'],$_GET['meeting_id'],$_GET['record']);
                        }
                        break;
                    case 'webconf':                        
                        create_webconf_jnlp_file($_GET['meeting_id']);                        
                        break;                        
                }
                //TO BE BETTER IMPLEMENTED
                $webconf_server = Database::get()->querySingle("SELECT * FROM wc_servers WHERE enabled='true' ORDER BY id DESC LIMIT 1")->hostname;                         
                $screenshare_server = Database::get()->querySingle("SELECT * FROM wc_servers WHERE enabled='true' ORDER BY id DESC LIMIT 1")->screenshare;
                //
                
            }
            if(isset($_GET['mod_pw'])) {
                switch($server_type)
                {
                    case 'bbb':
                        header('Location: ' . bbb_join_moderator($_GET['meeting_id'],$_GET['mod_pw'],$_GET['att_pw'],$_SESSION['surname'],$_SESSION['givenname']));
                        break;
                    case 'om':
                        header('Location: ' . om_join_user($_GET['meeting_id'],$_SESSION['uname'], $_SESSION['uid'], $_SESSION['email'], $_SESSION['surname'], $_SESSION['givenname'], 1) );
                        break;
                    case 'webconf':
                        header('Location: ' . get_config('base_url') . '/modules/tc/webconf/webconf.php?user=' . $_SESSION['surname'] . ' ' . $_SESSION['givenname'].'&meeting_id='.$_GET['meeting_id'].'&base_url='. base64_encode(get_config('base_url')).'&webconf_server='. base64_encode($webconf_server).'&screenshare_server='. base64_encode($screenshare_server));
                        break;                    
                }
            } else {                
                if ($server_type=='bbb') { # Get session capacity                
                    $sess = Database::get()->querySingle("SELECT * FROM bbb_session WHERE meeting_id=?s",$_GET['meeting_id']);
                    $serv = Database::get()->querySingle("SELECT * FROM bbb_servers WHERE id=?d", $sess->running_at);
                    $ssUsers = get_meeting_users($serv->server_key, $serv->api_url, $_GET['meeting_id'], $sess->mod_pw);
                    if(($sess->sessionUsers > 0) && ($sess->sessionUsers < get_meeting_users($serv->server_key, $serv->api_url, $_GET['meeting_id'], $sess->mod_pw))) {
                        $tool_content .= "<div class='alert alert-warning'>$langBBBMaxUsersJoinError</div>";
                        break;
                    } else {
                        header('Location: ' . bbb_join_user($_GET['meeting_id'],$_GET['att_pw'],$_SESSION['surname'],$_SESSION['givenname']));
                    }
                }
                if($server_type == 'om') { 
                    header('Location: ' . om_join_user($_GET['meeting_id'],$_SESSION['uname'], $_SESSION['uid'], $_SESSION['email'], $_SESSION['surname'], $_SESSION['givenname'], 0) );
                }
                if ($server_type == 'webconf') {
                    header('Location: '. get_config('base_url') . 'modules/tc/webconf/webconf.php?user=' . $_SESSION['surname'] . ' ' . $_SESSION['givenname'].'&meeting_id='.$_GET['meeting_id'].'&base_url='. base64_encode(get_config('base_url')).'&webconf_server='. base64_encode($webconf_server).'&screenshare_server='. base64_encode($screenshare_server));
                }
            }
            break;
        case 'import_video':
            publish_video_recordings($course_code,getDirectReference($_GET['id']));
            break;
    }

} elseif (isset($_POST['new_bbb_session'])) { // new BBB session
    if (!isset($_POST['token']) || !validate_csrf_token($_POST['token'])) csrf_token_error();
    $startDate_obj = DateTime::createFromFormat('d-m-Y H:i', $_POST['start_session']);
    $start = $startDate_obj->format('Y-m-d H:i:s');
    if (isset($_POST['enableEndDate']) and ($_POST['enableEndDate'])) {
        $endDate_obj = DateTime::createFromFormat('d-m-Y H:i', $_POST['BBBEndDate']);
        $end = $endDate_obj->format('Y-m-d H:i:s');
    } else {
        $end = NULL;
    }
    $notifyUsers = 0;
    if (isset($_POST['notifyUsers']) and $_POST['notifyUsers']) {
        $notifyUsers = 1;
    }
    $record = 'true';
    if (isset($_POST['record'])) {
        $record = $_POST['record'];
    }
    add_update_bbb_session($_POST['title'], $_POST['desc'], $start, $end, $_POST['status'], $notifyUsers, $_POST['minutes_before'], $_POST['external_users'], $record, $_POST['sessionUsers'], false);
    Session::Messages($langBBBAddSuccessful, 'alert-success');
    redirect_to_home_page("modules/tc/index.php?course=$course_code");
}
else { // display list of conferences
    bbb_session_details();
}

add_units_navigation(TRUE);
draw($tool_content, 2, null, $head_content);
