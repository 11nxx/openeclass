<?php

/* ========================================================================
 * Open eClass 
 * E-learning and Course Management System
 * ========================================================================
 * Copyright 2003-2016  Greek Universities Network - GUnet
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

$require_admin = true;
require_once '../../include/baseTheme.php';

$toolName = $langCertBadgeAdmin;
$navigation[] = array('url' => 'index.php', 'name' => $langAdmin);


$tool_content .= action_bar(array(
        array('title' => "$langAddNewCertTemplate",
              'url' => "$_SERVER[SCRIPT_NAME]?action=add_cert",
              'icon' => 'fa-plus-circle',
              'level' => 'primary-label',
              'button-class' => 'btn-success'),
        array('title' => "$langAddNewBadgeTemplate",
              'url' => "$_SERVER[SCRIPT_NAME]?action=add_badge",
              'icon' => 'fa-plus-circle',
              'level' => 'primary-label',
              'button-class' => 'btn-success'),
        array('title' => $langBack,
              'url' => 'index.php',
              'icon' => 'fa-reply',
              'level' => 'primary-label')));

if (isset($_GET['del_badge'])) { // delete badge icon
    $badge_icon = Database::get()->querySingle("SELECT filename FROM badge_icon WHERE id = ?d", $_GET['del_badge'])->filename;
    if (unlink($webDir . BADGE_TEMPLATE_PATH . $badge_icon)) {
        Database::get()->query("DELETE FROM badge_icon WHERE id = ?d", $_GET['del_badge']);
        Session::Messages($langDelWithSuccess, 'alert-success');
    }    
}

if (isset($_GET['del_cert'])) { // delete certificate template
    $cert_template = Database::get()->querySingle("SELECT filename FROM certificate_template WHERE id = ?d", $_GET['del_cert'])->filename;
    if (unlink($webDir . CERT_TEMPLATE_PATH . $cert_template)) {
        Database::get()->query("DELETE FROM certificate_template WHERE id = ?d", $_GET['del_cert']);
        Session::Messages($langDelWithSuccess, 'alert-success');
    }    
}

if (isset($_POST['submit_cert_template'])) { // insert certificate template
    $filename = $_FILES['filename']['name'];
    if (move_uploaded_file($_FILES['filename']['tmp_name'], "$webDir" . CERT_TEMPLATE_PATH . "$filename")) {
        Database::get()->querySingle("INSERT INTO certificate_template SET 
                                        name = ?s, 
                                        description = ?s,
                                        filename = ?s", $_POST['name'], $_POST['description'], $filename);
        Session::Messages($langDownloadEnd, 'alert-success');
    }
} elseif (isset($_POST['submit_badge_icon'])) { // insert / update badge icon
    if (isset($_POST['badge_id'])) {        
        if ($_FILES['icon']['size'] > 0) { // replace file if needed
            $filename = $_FILES['icon']['name'];
            if (move_uploaded_file($_FILES['icon']['tmp_name'], "$webDir" . BADGE_TEMPLATE_PATH . "$filename")) {
                $old_icon = Database::get()->querySingle("SELECT filename FROM badge_icon WHERE id = ?d", $_POST['badge_id'])->filename;
                unlink($webDir . BADGE_TEMPLATE_PATH . $old_icon); // delete old icon
                Database::get()->querySingle("UPDATE badge_icon SET
                                        name = ?s,
                                        description = ?s,
                                        filename = ?s
                                       WHERE id = ?d", $_POST['name'], $_POST['description'], $filename, $_POST['badge_id']);
            }
        } else {
            Database::get()->querySingle("UPDATE badge_icon SET
                                        name = ?s,
                                        description = ?s
                                       WHERE id = ?d", $_POST['name'], $_POST['description'], $_POST['badge_id']);
        }
    } else {
        $filename = $_FILES['icon']['name'];
        if (move_uploaded_file($_FILES['icon']['tmp_name'], "$webDir" . BADGE_TEMPLATE_PATH . "$filename")) {
            Database::get()->querySingle("INSERT INTO badge_icon SET 
                                            name = ?s, 
                                            description = ?s,
                                            filename = ?s", $_POST['name'], $_POST['description'], $filename);
            Session::Messages($langDownloadEnd, 'alert-success');
        }
    }
}

// display forms
if (isset($_GET['action'])) {
    if (($_GET['action'] == 'add_cert') or ($_GET['action'] == 'edit_cert')) { // add certificate template
        $tool_content .= "<div class='row'>
                        <div class='col-md-12'>
                        <div class='form-wrapper'>
                        <form class='form-horizontal' role='form' action='$_SERVER[SCRIPT_NAME]' method='post' enctype='multipart/form-data'>
                            <div class='form-group'>
                                <label class='col-sm-2 control-label'>$langFileName:</label>
                                <div class='col-sm-10'>
                                    <input type='file' name='filename' value=''>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-sm-2 control-label'>$langTemplateName:</label>
                                <div class='col-sm-10'>
                                    <input type='text' class='form-control' name='name' value=''>
                                </div>
                            </div>
                            <div class='form-group'>
                            <label for='description' class='col-sm-2 control-label'>$langDescription: </label>
                                <div class='col-sm-10'>
                                    " . rich_text_editor('description', 2, 60,'') . "
                                </div>
                            </div>
                            <div class='form-group'>
                                <div class='col-xs-offset-2 col-xs-10'>
                                    <button class='btn btn-primary' type ='submit' name='submit_cert_template'>$langUpload</button>
                                    <a class='btn btn-default' href='index.php'>$langCancel</a>
                                </div>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>";
    } elseif (($_GET['action'] == 'add_badge') or  ($_GET['action'] == 'edit_badge')) { // add badge icons
        $badge_name = $badge_description = $badge_hidden_id = '';
        if (isset($_GET['bid'])) {
            $badge_id = $_GET['bid'];
            $badge_data = Database::get()->querySingle("SELECT * FROM badge_icon WHERE id = ?d", $badge_id);
            $badge_name = $badge_data->name;
            $badge_description = $badge_data->description;
            $badge_hidden_id = "<input type='hidden' name='badge_id' value='$badge_id'>";
        }
 
        $tool_content .= "<div class='row'>
                        <div class='col-md-12'>
                        <div class='form-wrapper'>
                        <form class='form-horizontal' role='form' action='$_SERVER[SCRIPT_NAME]' method='post' enctype='multipart/form-data'>";
                        if (isset($_GET['bid'])) {
                            $icon_link = $urlServer . BADGE_TEMPLATE_PATH . "$badge_data->filename";
                            $tool_content .= "<div class='form-group'>
                                <label class='col-sm-2 control-label'>$langReplace:</label>
                                <div class='col-sm-10'>
                                    <img src='$icon_link' width='60' height='60'>
                                    <input type='file' name='icon' value=''>
                                </div>
                            </div>";
                        } else {
                            $tool_content .= "<div class='form-group'>
                                <label class='col-sm-2 control-label'>$langIcon:</label>
                                <div class='col-sm-10'>
                                    <input type='file' name='icon' value=''>
                                </div>
                            </div>";
                        }
                        $tool_content .= "<div class='form-group'>
                                <label class='col-sm-2 control-label'>$langName:</label>
                                <div class='col-sm-10'>
                                    <input type='text' class='form-control' name='name' value='$badge_name'>
                                </div>
                            </div>
                            <div class='form-group'>
                            <label for='description' class='col-sm-2 control-label'>$langDescription: </label>
                                <div class='col-sm-10'>
                                    " . rich_text_editor('description', 2, 60, $badge_description) . "
                                </div>
                            </div>
                            $badge_hidden_id
                            <div class='form-group'>
                                <div class='col-xs-offset-2 col-xs-10'>
                                    <button class='btn btn-primary' type ='submit' name='submit_badge_icon'>$langUpload</button>
                                    <a class='btn btn-default' href='index.php'>$langCancel</a>
                                </div>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>";
    }
} else { // display available certificates / badges
    $sql1 = Database::get()->queryArray("SELECT * FROM certificate_template");
    $tool_content .= "<div class='row'><div class='col-sm-12'><div class='table-responsive'>
                        <table class='table-default'>
                        <tr class='list-header'><th class='text-center' colspan='5'>$langAvailableCertTemplates</th></tr>
                        <tr class='list-header'>
                            <th>$langTitle</th>
                            <th>$langDescription</th>                            
                            <th class='text-center'><i class='fa fa-cogs'></i></th>
                        </tr>";
                foreach ($sql1 as $cert_data) {
                    $template_link = $urlServer . CERT_TEMPLATE_PATH ."$cert_data->filename";
                    $tool_content .= "<tr><td width='100'><a href='$template_link' target=_blank>$cert_data->name</a></td>
                                      <td>" . ellipsize_html($cert_data->description, 100) . "</td>";
                    $tool_content .= "<td class='text-center option-btn-cell'>".
                            action_button(array(
                                array('title' => $langDelete,
                                    'icon' => 'fa-times',
                                    'url' => "$_SERVER[SCRIPT_NAME]?del_cert=$cert_data->id",
                                    'confirm' => $langConfirmDelete,
                                    'class' => 'delete'),
                                array('title' => $langEdit,
                                    'icon' => 'fa-edit',
                                    'url' => "$_SERVER[SCRIPT_NAME]?action=edit_cert&amp;cid=$cert_data->id"
                                    ))).
                            "</td></tr>";
                }
    $tool_content .= "</table>";
    $tool_content .= "</div></div></div>";
    
    $sql2 = Database::get()->queryArray("SELECT * FROM badge_icon");
    
    $tool_content .= "<div class='row'><div class='col-sm-12'><div class='table-responsive'>
                        <table class='table-default'>
                        <tr class='list-header'><th class='text-center' colspan='5'>$langAvailableBadges</th></tr>
                        <tr class='list-header'>
                            <th>$langTitle</th>
                            <th>$langDescription</th>
                            <th width='70' class='text-center'>$langIcon</th>
                            <th class='text-center'><i class='fa fa-cogs'></i></th>
                        </tr>";
                foreach ($sql2 as $badge_data) {
                    $icon_link = $urlServer . BADGE_TEMPLATE_PATH ."$badge_data->filename";
                    $tool_content .= "<tr><td width='100'>$badge_data->name</td>
                                      <td>" . ellipsize_html($badge_data->description, 100) . "</td>
                                      <td class='text-center'><img src='$icon_link' width='50' height='50'></td>";
                    $tool_content .= "<td class='text-center option-btn-cell'>".
                            action_button(array(                                
                                array('title' => $langEdit,
                                    'icon' => 'fa-edit',
                                    'url' => "$_SERVER[SCRIPT_NAME]?action=edit_badge&amp;bid=$badge_data->id"
                                    ),
                                array('title' => $langDelete,
                                    'icon' => 'fa-times',
                                    'url' => "$_SERVER[SCRIPT_NAME]?del_badge=$badge_data->id",
                                    'confirm' => $langConfirmDelete,
                                    'class' => 'delete'))).
                            "</td></tr>";
                }
    $tool_content .= "</table>";
    $tool_content .= "</div></div></div>";
}

draw($tool_content, 3);