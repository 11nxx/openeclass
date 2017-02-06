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
 * @brief Main script for mindmap module
 */
$require_current_course = TRUE;
$require_login = TRUE;
$require_help = TRUE;
$helpTopic = 'Mindmap';

require_once '../../include/baseTheme.php';

/* * ** The following is added for statistics purposes ** */
require_once 'include/action.php';
$action = new action();
$action->record(MODULE_ID_MINDMAP);
/* * *********************************** */

////////////////////////////
    $json = file_get_contents('php://input');
    if($json != "") {
        function outputJSON($msg, $status = 'error'){
        header('Content-Type: application/json');
        die(json_encode(array(
                'data' => $msg,
                'status' => $status
        )));
        }

        $json_decode = json_decode($json, true); 
        $mind_s1r=$_POST["mind_str"];

        $file_path=$mind_s1r+".jm";
        $fileName="jsmind.jm";
        $file_format = get_file_extension($fileName);

        echo '<script language="javascript">';
        echo 'alert("message successfully sent")';
        echo '</script>';
    }
	
    if(isset($_GET["jmpath"])) {
        $path = json_decode( base64_decode( $_GET['jmpath'] ) );
        $myfile = fopen($path, "r") or die("Unable to open file!");
        $arr = fread($myfile,filesize($path));
        fclose($myfile);
    } else $arr = "{}";
		
$toolName = $langMindmap;
// guest user not allowed
if (check_guest()) {
    $tool_content .= "<div class='alert alert-danger'>$langNoGuest</div>";
    draw($tool_content, 2, 'mindmap');
}

$head_content .= '

<link type="text/css" rel="stylesheet" href="jsmind.css" />

    <style type="text/css">
        li{margin-top:2px; margin-bottom:2px;}
        button.jsmind{width:140px;}
        select{width:140px;}
        #layout{width:1230px;}
        #jsmind_nav{width:240px;height:600px;border:solid 1px #ccc;overflow:auto;float:left; margin-left:10px;}
        .file_input{width:100px;}
        button.sub{width:100px;}

        #jsmind_container{
            float:left;
            width:700px;
            height:600px;
            border:solid 1px #ccc;
            background:#f4f4f4;
        }
    </style>';

$tool_content .= "
<div id='layout'>
    <div id='jsmind_nav'>
        <div>1. $langOpenMind</div>
        <ol type='Α'>
            <li><button class='jsmind' onclick='open_json();'>$langOpenEx</button></li>            
        </ol>
        </ol>
        <div>2. $langEditMind</div>
        <ol type='Α'>
            <li><button class='jsmind' onclick='toggle_editable(this);'>$langEditDis</button></li>
            <li><button class='jsmind' onclick='add_node();'>$langAddNode</button></li>
            <li><button class='jsmind' onclick='remove_node();'>$langRemoveNode</button></li>
            <li><button class='jsmind' onclick='reset();'>$langResetMap</button></li>
        </ol>
        <div>3. $langThemes</div>
        <ol type='Α'>
        <li>
        <select onchange='set_theme(this.value);'>
            <option value=''>default</option>
            <option value='primary'>primary</option>
            <option value='warning'>warning</option>
            <option value='danger'>danger</option>
            <option value='success'>success</option>
            <option value='info'>info</option>
            <option value='greensea' selected='selected'>greensea</option>
            <option value='nephrite'>nephrite</option>
            <option value='belizehole'>belizehole</option>
            <option value='wisteria'>wisteria</option>
            <option value='asphalt'>asphalt</option>
            <option value='orange'>orange</option>
            <option value='pumpkin'>pumpkin</option>
            <option value='pomegranate'>pomegranate</option>
            <option value='clouds'>clouds</option>
            <option value='asbestos'>asbestos</option>
        </select>
        </li>
        </ol>
        <div>4. $langSave</div>
        <ol type='Α'>
            <li><button class='sub' onclick='screen_shot();'>$langScreenshot</button></li>
            <li><button class='sub' onclick='save_file();'>$langSaveFile</button></li>";
            //<li><button class='sub' onclick='show_data();'>show data</button></li>
				
if($is_editor)	{
    $tool_content .="<li><button class='sub' onclick='save_file_in_doc();'>$langSaveInDoc</button></li>";							
}
								
$tool_content .="<li><input id='file_input' class='sub' type='file' onchange='open_file();'/></li>                
        </ol>
    </div>
    <div id='jsmind_container'></div>
</div>";
   

$tool_content .= '      
	<script type="text/javascript" src="jsmind.js"></script>
	<script type="text/javascript" src="jsmind.draggable.js"></script>
	<script type="text/javascript" src="jsmind.screenshot.js"></script>
	<script type="text/javascript">
    var _jm = null;
	new_node=1;
    function open_empty(){
        var options = {
            container:"jsmind_container",
            theme:"greensea",
            editable:true
        }
        _jm = jsMind.show(options);
        // _jm = jsMind.show(options,mind);
		
		var x = '.$arr.';
		console.log(jQuery.isEmptyObject(x));
		if ( !jQuery.isEmptyObject(x)) {
			_jm.show(x);
		} 		
    }

    function open_json(){
        var mind = {
            "meta":{
              //  "name":"jsMind remote",
              //  "author":"hizzgdev@163.com",
              //  "version":"0.2"
            },
            "format":"node_tree",
            "data":{"id":"root","topic":"Κεντρική ιδέα","children":[
                {"id":"easy","topic":"Κόμβος 1","direction":"left","children":[
                    {"id":"easy1","topic":"Χαρακτηριστικό 1"},
                    {"id":"easy2","topic":"Χαρακτηριστικό 2"},
                    {"id":"easy3","topic":"Χαρακτηριστικό 3"},
                    {"id":"easy4","topic":"Χαρακτηριστικό 4"}
                ]},
                {"id":"open","topic":"Κόμβος 2","direction":"right","children":[
                    {"id":"open1","topic":"Χαρακτηριστικό 1"},
                    {"id":"open2","topic":"Χαρακτηριστικό 2"}
                ]},
                {"id":"other","topic":"Δοκιμαστικός κόμβος","direction":"left","children":[
                    {"id":"other1","topic":"Δοκιμή 1"},
                    {"id":"other2","topic":"Δοκιμή 2"}
                ]}
            ]}
        }
        _jm.show(mind);
    }
	
	function toggle_editable(btn){
        var editable = _jm.get_editable();
        if(editable){
            _jm.disable_edit();
            btn.innerHTML = "'.$langEditEn.'";
        }else{
            _jm.enable_edit();
            btn.innerHTML = "'.$langEditDis.'";
        }
    }

	function reset(){
		var mind = {
			"meta":{
				"name":"jsMind",
				"version":"0.2e"
				},
				"format":"node_tree",
				"data":{"id":"root","topic":"jsMind Example"}
				};
		
		_jm.show(mind);
	}
		
    function screen_shot(){
        _jm.screenshot.shootDownload();
	}

    function show_data(){
        var mind_data = _jm.get_data();
        var mind_string = jsMind.util.json.json2string(mind_data);
        prompt_info(mind_string);
    }

    function save_file(){
        var mind_data = _jm.get_data();
        var mind_name = prompt("'.$langPleaseEnterName.'", "Name");
	if (mind_name!=null){
        var mind_str = jsMind.util.json.json2string(mind_data);
        jsMind.util.file.save(mind_str,"text/jsmind",mind_name+".jm");
	}
    }
    
	function save_file_in_doc(){
	
		var x = prompt("'.$langPleaseEnterName.'", "Name");	
		if (x!=null){
			_jm.screenshot.shootAsDataURL(save_file_as_image);
			_jm.mind.name=x;
		}
		
	}
	
	function save_file_as_image(){
		var urldat = _jm.screenshot.canvas_elem.toDataURL();
		var imagename = _jm.mind.name;
        //var mind_data = _jm.get_data();   
		//console.log(_jm);
		 
		//image post in document in base64 format//
			$.ajax({
			  type: "POST",
			  url: "../document/index.php",
			  data: { 
				 imgBase64: urldat,
				 imgname: imagename
			  }
			})
			.done(function(data, textStatus, jqXHR) {
			    var mind_data = _jm.get_data();
				var data = jsMind.util.json.json2string(mind_data);	
				window.location.href = "../document/index.php?mindmap=" + data +"& mindtitle=" + imagename; 
			});
	}
		
    function open_file(){
        var file_input = document.getElementById("file_input");
        var files = file_input.files;
        if(files.length > 0){
            var file_data = files[0];
            jsMind.util.file.read(file_data,function(jsmind_data, jsmind_name){
                var mind = jsMind.util.json.string2json(jsmind_data);
                if(!!mind){
                    _jm.show(mind);
                }else{
                    prompt_info("can not open this file as mindmap");
                }
            });
        }else{
            prompt_info("'.$langPleaseChooseFile.'")
        }
    }

    function select_node(){
        var nodeid = "other";
        _jm.select_node(nodeid);
    }

    function show_selected(){
        var selected_node = _jm.get_selected_node();
        if(!!selected_node){
            prompt_info(selected_node.topic);
        }else{
            prompt_info("nothing");
        }
    }

    function toggle_node(){
        var selected_id = get_selected_nodeid();
        if(!selected_id){prompt_info("'.$langPleaseSelectNode.'");}

        _jm.toggle_node(selected_id);
    }

    function get_selected_nodeid(){
        var selected_node = _jm.get_selected_node();
        if(!!selected_node){
            return selected_node.id;
        }else{
            return null;
        }
    }
	
    function add_node(){
        var selected_node = _jm.get_selected_node(); // as parent of new node
        if(!selected_node){prompt_info("'.$langPleaseSelectNode.'");}
        var nodeid = jsMind.util.uuid.newid();
		var topic = "Node "+new_node+"";
        var node = _jm.add_node(selected_node, nodeid, topic);
		new_node=new_node+1;
    }


    function remove_node(){
        var selected_id = get_selected_nodeid();
        if(!selected_id){prompt_info("'.$langPleaseSelectNode.'");}

        _jm.remove_node(selected_id);
    }

    function set_theme(theme_name){
        _jm.set_theme(theme_name);
    }
	

    open_empty();
</script>';  
   
   
add_units_navigation(TRUE);
draw($tool_content, 2, null, $head_content);
