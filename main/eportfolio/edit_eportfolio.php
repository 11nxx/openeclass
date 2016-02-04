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

$require_login = true;
$require_valid_uid = true;

require_once '../../include/baseTheme.php';
require_once 'main/eportfolio/eportfolio_functions.php';

check_uid();
check_guest();

$toolName = $langMyePortfolio;
$pageName = $langEditePortfolio;
$navigation[] = array('url' => 'display_portfolio.php', 'name' => $langMyePortfolio);

load_js('tools.js');

if (isset($_POST['submit'])) {
    if (!isset($_POST['token']) || !validate_csrf_token($_POST['token'])) csrf_token_error();
    /*
    $var_arr = array();
    
    //add custom profile fields required variables
    augment_registered_posted_variables_arr($var_arr);
    
    $all_ok = register_posted_variables($var_arr, 'all');

    // check if there are empty fields
    if (!$all_ok) {
        Session::Messages($langFieldsMissing);
        redirect_to_home_page("main/profile/profile.php");
    }
    */
    //check for validation errors in eportfolio fields
    $epf_check = epf_validate();
    if ($epf_check[0] === false) {
        $epf_error_str = '';
        unset($epf_check[0]);
        foreach ($epf_check as $epf_error) {
            $epf_error_str .= $epf_error;
        }
        Session::Messages($epf_error_str);
        redirect_to_home_page("main/eportfolio/edit_eportfolio.php");
    }

    process_eportfolio_fields_data();

    Session::Messages($langePortfolioChangeSucc, 'alert-success');
    redirect_to_home_page("main/eportfolio/eportfolio.php");
}

$sec = $urlServer . 'main/eportfolio/edit_eportfolio.php';

$tool_content .=
        action_bar(array(
            array('title' => $langBack,
                'url' => "display_portfolio.php",
                'icon' => 'fa-reply',
                'level' => 'primary-label')));
        $tool_content .=
            "<div class='form-wrapper'>
                <form class='form-horizontal' role='form' method='post' enctype='multipart/form-data' action='$sec' onsubmit='return validateNodePickerForm();'>
                <fieldset>";
                    


//add custom profile fields
$tool_content .= render_eportfolio_fields_form();

$tool_content .= "<div class='col-sm-offset-2 col-sm-10'>
          <input class='btn btn-primary' type='submit' name='submit' value='$langSubmit'>
          <a href='display_eportfolio.php' class='btn btn-default'>$langCancel</a>
        </div>
      </fieldset>
      ". generate_csrf_token_form_field() ."  
      </form>
      </div>";

draw($tool_content, 1, null, $head_content);
