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

$require_login = TRUE;
$require_help = TRUE;
$helpTopic = 'CreateCourse';

require_once '../../include/baseTheme.php';

if ($session->status !== USER_TEACHER && !$is_departmentmanage_user) { // if we are not teachers or department managers
 //   redirect_to_home_page();
}

require_once 'include/log.class.php';
require_once 'include/lib/course.class.php';
require_once 'include/lib/user.class.php';
require_once 'include/lib/hierarchy.class.php';
require_once 'functions.php';

$tree = new Hierarchy();
$course = new Course();
$user = new User();

$toolName = $langCourseCreate;

load_js('jstree3');
load_js('pwstrength.js');

//Datepicker
load_js('tools.js');
load_js('bootstrap-datepicker');

$head_content .= <<<hContent
<script type="text/javascript">
/* <![CDATA[ */

function deactivate_input_password () {
        $('#coursepassword').attr('disabled', 'disabled');
        $('#coursepassword').closest('div.form-group').addClass('invisible');
}

function activate_input_password () {
        $('#coursepassword').removeAttr('disabled', 'disabled');
        $('#coursepassword').closest('div.form-group').removeClass('invisible');
}

function displayCoursePassword() {

        if ($('#courseclose,#courseiactive').is(":checked")) {
                deactivate_input_password ();
        } else {
                activate_input_password ();
        }
}

function checkrequired(which, entry, entry2) {
	var pass=true;
	if (document.images) {
		for (i=0;i<which.length;i++) {
			var tempobj=which.elements[i];
			if ((tempobj.name == entry) || (tempobj.name == entry2)) {
				if (tempobj.type=="text"&&tempobj.value=='') {
					pass=false;
					break;
		  		}
	  		}
		}
	}
	if (!pass) {
		alert("$langFieldsMissing");
		return false;
	} else {
		return true;
	}
}

    var lang = {
hContent;
$head_content .= "pwStrengthTooShort: '" . js_escape($langPwStrengthTooShort) . "', ";
$head_content .= "pwStrengthWeak: '" . js_escape($langPwStrengthWeak) . "', ";
$head_content .= "pwStrengthGood: '" . js_escape($langPwStrengthGood) . "', ";
$head_content .= "pwStrengthStrong: '" . js_escape($langPwStrengthStrong) . "'";
$head_content .= <<<hContent
    };

    function showCCFields() {
        $('#cc').show();
    }
    function hideCCFields() {
        $('#cc').hide();
    }

    $(document).ready(function() {

        $('input[name=start_date]').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        }).on('changeDate', function(e){
            var date2 = $('input[name=start_date]').datepicker('getDate');
            if($('input[name=start_date]').datepicker('getDate')>$('input[name=finish_date]').datepicker('getDate')){
                date2.setDate(date2.getDate() + 7);
                $('input[name=finish_date]').datepicker('setDate', date2);
                $('input[name=finish_date]').datepicker('setStartDate', date2);
            }else{
                $('input[name=finish_date]').datepicker('setStartDate', date2);
            }
        });

        $('input[name=finish_date]').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        }).on('changeDate', function(e){
            var dt1 = $('input[name=start_date]').datepicker('getDate');
            var dt2 = $('input[name=finish_date]').datepicker('getDate');
            if (dt2 <= dt1) {
                var minDate = $('input[name=finish_date]').datepicker('startDate');
                $('input[name=finish_date]').datepicker('setDate', minDate);
            }            
        });
        if($('input[name=start_date]').datepicker("getDate") == 'Invalid Date'){
            $('input[name=start_date]').datepicker('setDate', new Date());
            var date2 = $('input[name=start_date]').datepicker('getDate');
            date2.setDate(date2.getDate() + 7);
            $('input[name=finish_date]').datepicker('setDate', date2);
            $('input[name=finish_date]').datepicker('setStartDate', date2);
        }else{
            var date2 = $('input[name=finish_date]').datepicker('getDate');
            $('input[name=finish_date]').datepicker('setStartDate', date2);
        }
        
        if($('input[name=finish_date]').datepicker("getDate") == 'Invalid Date'){
            $('input[name=finish_date]').datepicker("setDate", 7);
        }
        
        $('#weeklyDates').hide();
        
        $('input[name=view_type]').change(function () {
            if ($('#weekly').is(":checked")) {
                $('#weeklyDates').show();
            } else {
                $('#weeklyDates').hide();
            }
        }).change();    
        
        $('#password').keyup(function() {
            $('#result').html(checkStrength($('#password').val()))
        });

        displayCoursePassword();

        $('#courseopen').click(function(event) {
                activate_input_password();
        });
        $('#coursewithregistration').click(function(event) {
                activate_input_password();
        });
        $('#courseclose').click(function(event) {
                deactivate_input_password();
        });
        $('#courseinactive').click(function(event) {
                deactivate_input_password();
        });

        $('input[name=l_radio]').change(function () {
            if ($('#cc_license').is(":checked")) {
                showCCFields();
            } else {
                hideCCFields();
            }
        }).change();

    });

/* ]]> */
</script>
hContent;

register_posted_variables(array('title' => true, 'password' => true, 'prof_names' => true));
if (empty($prof_names)) {
    $prof_names = "$_SESSION[givenname] $_SESSION[surname]";
}

// departments and validation
$allow_only_defaults = get_config('restrict_teacher_owndep') && !$is_admin;
$allowables = array();
if ($allow_only_defaults) {
    // Method: getDepartmentIdsAllowedForCourseCreation
    // fetches only specific tree nodes, not their sub-children
    //$user->getDepartmentIdsAllowedForCourseCreation($uid);
    // the code below searches for the allow_course flag in the user's department subtrees
    $userdeps = $user->getDepartmentIds($uid);
    $subs = $tree->buildSubtreesFull($userdeps);
    foreach ($subs as $node) {
        if (intval($node->allow_course) === 1) {
            $allowables[] = $node->id;
        }
    }
}
$departments = isset($_POST['department']) ? arrayValuesDirect($_POST['department']) : array();
$deps_valid = true;

foreach ($departments as $dep) {
    if ($allow_only_defaults && !in_array($dep, $allowables)) {
        $deps_valid = false;
        break;
    }
}
$data['deps_valid'] = $deps_valid;

// display form
if (!isset($_POST['create_course'])) {
        // set skip_preloaded_defaults in order to not over-bloat pre-populating nodepicker with defaults in case of multiple allowance
        list($js, $html) = $tree->buildCourseNodePickerIndirect(array('defaults' => $allowables, 'allow_only_defaults' => $allow_only_defaults, 'skip_preloaded_defaults' => true));        
        $head_content .= $js;
        $data['buildusernode'] = $html;
        $public_code = $title = '';
        foreach ($license as $id => $l_info) {
            if ($id and $id < 10) {
                $cc_license[$id] = $l_info['title'];
            }
        }
        $data['license_0'] = $license[0]['title'];
        $data['license_10'] = $license[10]['title'];
        $data['action_bar'] = action_bar(array(
                                array('title' => $langBack,
                                      'url' => $urlServer,
                                      'icon' => 'fa-reply',
                                      'level' => 'primary-label',
                                      'button-class' => 'btn-default')
                            ),false);
        
        $data['icon_course_open'] = $course_access_icons[COURSE_OPEN];
        $data['icon_course_registration'] = $course_access_icons[COURSE_REGISTRATION];
        $data['icon_course_closed'] = $course_access_icons[COURSE_CLOSED];
        $data['icon_course_inactive'] = $course_access_icons[COURSE_INACTIVE];
        $data['lang_select_options'] = lang_select_options('localize', "class='form-control'");
        $data['rich_text_editor'] = rich_text_editor('description', 4, 20, @$description);
        $data['selection_license'] = selection($cc_license, 'cc_use', "",'class="form-control"');
        $data['cancel_link'] = "{$urlServer}main/portfolio.php";
        generate_csrf_token_form_field(); 
        $data['menuTypeID'] = 1;
        view('modules.create_course.index', $data);
        
} else  { // create the course and the course database
    // validation in case it skipped JS validation
    if (!isset($_POST['token']) || !validate_csrf_token($_POST['token'])) csrf_token_error();
    $validationFailed = false;
    if (count($departments) < 1 || empty($departments[0])) {
        Session::Messages($langEmptyAddNode);
        $validationFailed = true;
    }

    if (empty($title) || empty($prof_names)) {
        Session::Messages($langFieldsMissing);
        $validationFailed = true;
    }

    if ($validationFailed) {
        redirect_to_home_page('modules/create_course/create_course.php');
    }
    
    // create new course code: uppercase, no spaces allowed
    $code = strtoupper(new_code($departments[0]));
    $code = str_replace(' ', '', $code);

    // include_messages
    include "lang/$language/common.inc.php";
    $extra_messages = "config/{$language_codes[$language]}.inc.php";
    if (file_exists($extra_messages)) {
        include $extra_messages;
    } else {
        $extra_messages = false;
    }
    include "lang/$language/messages.inc.php";
    if ($extra_messages) {
        include $extra_messages;
    }

    // create course directories
    if (!create_course_dirs($code)) {
        Session::Messages($langGeneralError, 'alert-danger');
        redirect_to_home_page('modules/create_course/create_course.php');
    }

    // get default quota values
    $doc_quota = get_config('doc_quota');
    $group_quota = get_config('group_quota');
    $video_quota = get_config('video_quota');
    $dropbox_quota = get_config('dropbox_quota');

    // get course_license
    if (isset($_POST['l_radio'])) {
        $l = $_POST['l_radio'];
        switch ($l) {
            case 'cc':
                if (isset($_POST['cc_use'])) {
                    $course_license = intval($_POST['cc_use']);
                }
                break;
            case '10':
                $course_license = 10;
                break;
            default:
                $course_license = 0;
                break;
        }
    }

    if (ctype_alnum($_POST['view_type'])) {
        $view_type = $_POST['view_type'];        
    }
    if (empty($_POST['start_date'])) {
        $_POST['start_date'] = NULL;
    }
    if (empty($_POST['finish_date'])) {
        $_POST['finish_date'] = NULL;
    }
    if (empty($_POST['public_code'])) {
        $public_code = $code;
    } else {
        $public_code = $_POST['public_code'];
    }
    $description = purify($_POST['description']);
    $result = Database::get()->query("INSERT INTO course SET
                        code = ?s,
                        lang = ?s,
                        title = ?s,
                        visible = ?d,
                        course_license = ?d,
                        prof_names = ?s,
                        public_code = ?s,
                        doc_quota = ?f,
                        video_quota = ?f,
                        group_quota = ?f,
                        dropbox_quota = ?f,
                        password = ?s,
                        view_type = ?s,
                        start_date = ?t,
                        finish_date = ?t,
                        keywords = '',
                        created = " . DBHelper::timeAfter() . ",
                        glossary_expand = 0,
                        glossary_index = 1,
                        description = ?s",
            $code, $language, $title, $_POST['formvisible'],
            intval($course_license), $prof_names, $public_code, $doc_quota * 1024 * 1024,
            $video_quota * 1024 * 1024, $group_quota * 1024 * 1024,
            $dropbox_quota * 1024 * 1024, $password, $view_type,
            $_POST['start_date'], $_POST['finish_date'], $description);
    $new_course_id = $result->lastInsertID;
    if (!$new_course_id) {
        Session::Messages($langGeneralError);
        redirect_to_home_page('modules/create_course/create_course.php');
    }

    //===================course format and start and finish date===============
    if ($view_type == "weekly") {

        // get the last inserted id as the course id
        $course_id = $new_course_id;

        $begin = new DateTime($_POST['start_date']);

        // check if there is no end date
        if (!isset($_POST['finish_date']) or empty($_POST['finish_date'])) {
            $end = new DateTime($begin->format("Y-m-d"));
            $end->add(new DateInterval('P26W'));
        } else {
            $end = new DateTime($_POST['finish_date']);
        }

        $daterange = new DatePeriod($begin, new DateInterval('P1W'), $end);

        foreach ($daterange as $date) {            
            //new weeks
            //get the end week day
            $endWeek = new DateTime($date->format("Y-m-d"));
            $endWeek->modify('+6 day');
            //value for db
            $startWeekForDB = $date->format("Y-m-d");
            if ($endWeek->format("Y-m-d") < $end->format("Y-m-d")) {
                $endWeekForDB = $endWeek->format("Y-m-d");
            } else {
                $endWeekForDB = $end->format("Y-m-d");
            }
            $q = Database::get()->querySingle("SELECT MAX(`order`) AS maxorder FROM course_weekly_view");
            if ($q) {
                $order =  max(0, $q->maxorder) + 1;                
                Database::get()->query("INSERT INTO course_weekly_view (course_id, start_week, finish_week, `order`) VALUES (?d, ?t, ?t, ?d)", $course_id, $startWeekForDB, $endWeekForDB, $order);
            }
        }
    }
    
    // create course modules
    create_modules($new_course_id);

    Database::get()->query("INSERT INTO course_user SET
                                        course_id = ?d,
                                        user_id = ?d,
                                        status = " . USER_TEACHER . ",
                                        tutor = 1,
                                        reg_date = " . DBHelper::timeAfter() . ",
                                        document_timestamp = " . DBHelper::timeAfter() . "",
                                    $new_course_id, $uid);
    
    $course->refresh($new_course_id, $departments);

    // create courses/<CODE>/index.php
    course_index($code);

    // add a default forum category
    Database::get()->query("INSERT INTO forum_category
                            SET cat_title = ?s,
                            course_id = ?d", $langForumDefaultCat, $new_course_id);

    $_SESSION['courses'][$code] = USER_TEACHER;
       
    $data['action_bar'] = action_bar(array(
        array('title' => $langEnter,
              'url' => $urlAppend . "courses/$code/",
              'icon' => 'fa-arrow-right',
              'level' => 'primary-label',
              'button-class' => 'btn-success')));
    
    // logging
    Log::record(0, 0, LOG_CREATE_COURSE, array('id' => $new_course_id,
                                               'code' => $code,
                                               'title' => $title,
                                               'language' => $language,
                                               'visible' => $_POST['formvisible']));
    $data['title'] = $title;
    $data['menuTypeID'] = 1;
    view('modules.create_course.create_course', $data);
} // end of submit


