<?php
$require_login = TRUE;
$langFiles = array('registration', 'opencours');

include '../../include/baseTheme.php';
include('../../include/sendMail.inc.php');
$nameTools = "�������� ������������ email ���� ADMIN";

check_guest();

$userid = isset($_GET['userid'])?$_GET['userid']:'';

$tool_content = "";

if (isset($_POST["submit"])) {
	$tool_content .= "<table width=\"99%\"><tbody><tr><td>";

	$sql=mysql_query("SELECT * FROM cours_user WHERE code_cours='".$_POST['cc']."'");

	while ($m = mysql_fetch_array($sql)) {
		
		$sql1 = mysql_query("SELECT email FROM user WHERE user_id='".$m["user_id"]."'");
		$m1 = mysql_fetch_array($sql1);
		$to = $m1["email"];
		$emailsubject = "������������ ����������� ������";
		$emailbody = "� �������� �� �� �������� �������� �������� ��� 
		���������������� ��� ����������� ���:

$lastname $firstname
Email: $email

������: $body

";

		if (!send_mail($siteName, $emailAdministrator, '', $to,
			$emailsubject, $emailbody, $charset)) {
				$tool_content .= "<h4>������ ���� ��� �������� e-mail ��� ��������� '$to'!</h4>";
		}
	}
	$tool_content .= "<h4>$emailsuccess</h4></td></tr><tbody></table><br>";
}
else
{
	$sql = "SELECT * FROM user WHERE user_id='".$uid."'";
	$res = mysql_query($sql);
	$row = mysql_fetch_array($res);
	
	$tool_content .= "<form action=\"".$_SERVER[PHP_SELF]."?fc=".$_GET['fc']."\" method=\"post\">
<table width=\"99%\"><caption>���������� ������</caption><tbody>";
	$tool_content .= "<tr><td width=\"3%\" nowrap valign=\"top\"><b>�����:</b></td><td><input type=\"text\" name=\"firstname\" value=\"".$row["nom"]."\" readonly></td></tr>";	
	$tool_content .= "<tr><td width=\"3%\" nowrap valign=\"top\"><b>�������:</b></td><td><input type=\"text\" name=\"lastname\" value=\"".$row["prenom"]."\" readonly></td></tr>";	
	$tool_content .= "<tr><td width=\"3%\" nowrap valign=\"top\"><b>Email:</b></td><td><input type=\"text\" name=\"email\" value=\"".$row["email"]."\" readonly></td></tr>";
	$tool_content .= "<tr><td width=\"3%\" nowrap valign=\"top\"><b>������:</b></td><td><textarea rows=\"6\" cols=\"40\" name=\"body\"></textarea></td></tr>";
	$tool_content .= "<tr><td width=\"3%\" nowrap valign=\"top\">&nbsp;</td><td><input type=\"submit\" name=\"submit\" value=\"��������\"><input type=\"hidden\" name=\"cc\" value=\"".$_GET['cc']."\"</td></tr>";
	$tool_content .= "</tbody></table></form>";
}

$tool_content .= "<center><p><a href=\"courses.php?fc=".$_GET['fc']."\">���������</a></p></center>";

draw($tool_content,0);


?>