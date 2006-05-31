<?
/**=============================================================================
       	GUnet e-Class 2.0 
        E-learning and Course Management Program  
================================================================================
       	Copyright(c) 2003-2006  Greek Universities Network - GUnet
        � full copyright notice can be read in "/info/copyright.txt".
        
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
	unreguser.php
	@last update: 31-05-2006 by Karatzidis Stratos
	@authors list: Karatzidis Stratos <kstratos@uom.gr>
		       Vagelis Pitsioygas <vagpits@uom.gr>
==============================================================================        
        @Description: Edit user info (eclass version)

 	This script allows the admin to :
 	- permanently delete a user account
 	- delete a user from participating into a course
 	
==============================================================================
*/

$langFiles = array('gunet','admin');
include '../../include/baseTheme.php';
@include "check_admin.inc";

$nameTools = $langUnregUser;
$navigation[]= array ("url"=>"index.php", "name"=> $langAdmin);

// get the incoming values and initialize them
$u = isset($_GET['u'])?$_GET['u']:'';
$doit = isset($_GET['doit'])?$_GET['doit']:'';
$c = isset($_GET['c'])?$_GET['c']:'';

if((!empty($doit)) && ($doit != "yes")) 
{
	$tool_content .= "<h4>����������� ���������</h4>
		<p>������ ������� �� ���������� ��� ������ <em>$un</em>";
	if(!empty($c)) 
	{
		$tool_content .= " ��� �� ������ �� ������ <em>".$c."</em>";
	}
	$tool_content .= ";</p>
		<ul>
		<li>���: <a href=\"unreguser.php?u=$u&c=$c&doit=yes\">��������!</a><br>&nbsp;</li>
		<li>���: <a href=\"index.php\">��������� ��� ������ �����������</a></li>
		</ul>";	
} 
else 
{

	$conn = mysql_connect($mysqlServer, $mysqlUser, $mysqlPassword);
        if (!mysql_select_db($mysqlMainDb, $conn))
                die("Cannot select database \"claroline\".\n");

	if(empty($c)) 
	{
		if ($u == 1) 
		{
			$tool_content .= "������! ������������ �� ���������� ��� ������ �� user id = 1!";
		}
		$sql = mysql_query("DELETE from user WHERE user_id = '$u'");
		if (mysql_affected_rows($conn) > 0) 
		{
			$tool_content .= "<p>� ������� �� id $u �����������.</p>\n";
		} 
		else 
		{
			$tool_content .= "������ ���� �� �������� ��� ������";
		}
		mysql_query("DELETE from admin WHERE idUser = '$u'");
		if (mysql_affected_rows($conn) > 0) 
		{
			$tool_content .= "<p>� ������� �� id $u ���� ������������.</p>\n";
		}
	} 
	elseif((!empty($c)) && (!empty($u)))
	{
		$sql = mysql_query("DELETE from cours_user WHERE user_id = '$u' and code_cours='$c'");
		if (mysql_affected_rows($conn) > 0)  
		{
			$tool_content .= "<p>� ������� �� id $u ����������� ��� �� ������ $c.</p>\n";
		}
	}
	else
	{
			$tool_content .= "������ ���� �� �������� ��� ������";
	}
	$tool_content .= "<br>&nbsp;<br><a href=\"./index.php\">��������� ��� ������ �����������</a><br />\n";
}	

$tool_content .= "<br><center><p><a href=\"index.php\">���������</a></p></center>";

draw($tool_content,3,'admin');

?>