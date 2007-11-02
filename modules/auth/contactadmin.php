<?php
/**=============================================================================
       	GUnet e-Class 2.0 
        E-learning and Course Management Program  
================================================================================
       	Copyright(c) 2003-2006  Greek Universities Network - GUnet
        A full copyright notice can be read in "/info/copyright.txt".
        
       	Authors:    Costas Tsibanis <k.tsibanis@noc.uoa.gr>
        	    Yannis Exidaridis <jexi@noc.uoa.gr> 
      		    Alexandros Diamantidis <adia@noc.uoa.gr> 

        For a full list of contributors, see "credits.txt".  
     
        This program is a free software under the terms of the GNU 
        (General Public License) as published by the Free Software 
        Foundation. See the GNU License for more details. 
        The full license can be read in "license.txt".
     
       	Contact address: GUnet Asynchronous Teleteaching Group, 
        Network Operations Center, University of Athens, 
        Panepistimiopolis Ilissia, 15784, Athens, Greece
        eMail: eclassadmin@gunet.gr
==============================================================================*/

/**===========================================================================
	contactadmin.php
	@last update: 27-05-2006 by Karatzidis Stratos
	@authors list: Karatzidis Stratos <kstratos@uom.gr>
		       Vagelis Pitsioygas <vagpits@uom.gr>
==============================================================================        
  @Description: Contact the admin with an e-mail message
  when an account has been deactivated

 	This script:
 	allows a user the send an e-mail to the admin, requesting
 	the re-activation of his/her account
	
	
==============================================================================
*/

//LANGFILES, BASETHEME, OTHER INCLUDES AND NAMETOOLS
//$require_login = TRUE;
$langFiles = array('registration', 'admin','gunet');

include '../../include/baseTheme.php';
include('../../include/sendMail.inc.php');
$nameTools = $langContactAdmin;
$tool_content = "";


// MAIN BODY

// get the incoming values and initialize them
$userid = isset($_GET['userid'])?$_GET['userid']:(isset($_POST['id'])?$_POST['id']:'');
$submit = isset($_POST['submit'])?$_POST['submit']:'';
if(!empty($userid))
{
	$sql=mysql_query("SELECT * FROM user WHERE user_id='".$userid."'");
	while ($m = mysql_fetch_array($sql)) 
	{
		$sirname = $m["nom"];
		$firstname = $m["prenom"];
		$email = $m["email"];
	}
	
	if(!empty($_POST["submit"])) 
	{
		$body = isset($_POST['body'])?$_POST['body']:'';
		$tool_content .= "<table width=\"99%\"><tbody><tr><td>";
		//$to = $email;
		$to = $GLOBALS['emailAdministrator'];
		$emailsubject = "������������ ����������� ������";
		$emailbody = "� �������� �� �� �������� �������� �������� ��� 
		���������������� ��� ����������� ���:
		$sirname $firstname
		Email: $email
		������: $body";
		if (!send_mail($siteName, $emailAdministrator, '', $to,	$emailsubject, $emailbody, $charset)) 
		{
				$tool_content .= "<h4>������ ���� ��� �������� e-mail ��� ��������� '$to'!</h4>";
		}
		else
		{
		$tool_content .= "<h4>$emailsuccess</h4>";
		}
		$tool_content .= "</td></tr><tbody></table><br />";
	}
	else
	{
		$tool_content .= "<form action=\"./contactadmin.php?userid=".$userid."\" method=\"post\">
	<table width=\"99%\"><caption>���������� ������</caption><tbody>";
		$tool_content .= "<tr><td width=\"3%\" nowrap valign=\"top\"><b>$langName:</b></td><td>".$firstname."</td></tr>";	
		$tool_content .= "<tr><td width=\"3%\" nowrap valign=\"top\"><b>$langSurname:</b></td><td>".$sirname."</td></tr>";	
		$tool_content .= "<tr><td width=\"3%\" nowrap valign=\"top\"><b>Email:</b></td><td>".$email."</td></tr>";
		$tool_content .= "<tr><td width=\"3%\" nowrap valign=\"top\"><b>$langComments:</b></td><td><textarea rows=\"6\" cols=\"40\" name=\"body\">
		$langActivateAccount
		</textarea></td></tr>";
		$tool_content .= "<tr><td width=\"3%\" nowrap valign=\"top\">&nbsp;</td><td>
		<input type=\"submit\" name=\"submit\" value=\"��������\">
		<input type=\"hidden\" name=\"userid\" value=\"".$userid."\"</td></tr>";
		$tool_content .= "</tbody></table></form>";
	}

	
}

$tool_content .= "<center><p><a href=\"../../index.php\">$langBackHome</a></p></center>";
draw($tool_content,0);
?>
