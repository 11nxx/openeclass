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

/**
 * @file index.php
 * @brief Main script for the usage statistics module
 */

$require_help = true;
if(!isset($_REQUEST['t']) || $_REQUEST['t'] == 'c'){
    $require_current_course = true;
}
$helpTopic = 'Usage';
$require_login = true;
require_once '../../include/baseTheme.php';
require_once "statistics_tools_bar.php";

load_js('tools.js');
load_js('bootstrap-datetimepicker');
$head_content .= "
<link rel='stylesheet' type='text/css' href='{$urlAppend}js/c3-0.4.10/c3.css' />";
load_js('d3/d3.min.js');
load_js('c3-0.4.10/c3.min.js');
load_js('bootstrap-datepicker');
$head_content .= "
<script type='text/javascript'>
    var lang = '$language'; 
    var maxintervals = 20;
</script>";
load_js('statistics.js');

$pageName = $langUsage;

ob_start();

if(isset($course_id) && ($is_editor || $is_admin)){
    $stats_type = 'course';
    require_once "course.php";
}
elseif($is_admin){
    $stats_type = 'admin';
    require_once "admin.php";
}
else{
    $stats_type = 'user';
    require_once "user.php";
}

//require_once "form.php";
add_units_navigation(true);

if($stats_type == 'course'){
    draw($tool_content, 2, null, $head_content);
}
else{
    draw($tool_content, 1, null, $head_content);
}
