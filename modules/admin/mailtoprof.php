<?php
$langFiles = array('gunet','registration','admin');
include '../../include/baseTheme.php';
@include('check_admin.inc');
include('../../include/sendMail.inc.php');

$nameTools=$sendinfomail;
$tool_content = "";

$conn = mysql_connect("$mysqlServer", "$mysqlUser", "$mysqlPassword");
if (!mysql_select_db("$mysqlMainDb", $conn)) {
	die("Cannot select database $mysqlMainDb.\n");
}

$tool_content .= "<table width=\"99%\"><tbody><tr><td>";


if (isset($submit) && ($body_mail!="")) {
	
	if ($sendTo=="0") {
		$sql=mysql_query("SELECT DISTINCT email FROM user");
	} elseif ($sendTo=="1") {
		$sql=mysql_query("SELECT DISTINCT email FROM user where statut='1'");
	}
	while ($m = mysql_fetch_array($sql)) {
		$to = $m[0];
		$emailsubject = $infoabouteclass;
		$emailbody = "$body_mail 

$langManager $siteName
$administratorName $administratorSurname
���. $telephone
$langEmail : $emailAdministrator
";
		if (!send_mail($siteName, $emailAdministrator, '', $to,
			$emailsubject, $emailbody, $charset)) {
				$tool_content .= "<h4>������ ���� ��� �������� e-mail ��� ��������� '$to'!</h4>";
		}
	}
	$tool_content .= "<h4>$emailsuccess</h4></td></tr><tbody></table>";
} else {

	$tool_content .= "<h5>".$typeyourmessage."</h5>";
	$tool_content .= "<form action=\"".$_SERVER[PHP_SELF]."\" method=\"post\">
<textarea name=\"body_mail\" rows=\"10\" cols=\"60\"></textarea>
<br><br>
�������� ��������� ���� <select name=\"sendTo\">
<option value=\"0\">����� ���� �������</option>
<option value=\"1\">���� ����� �����������</option></select><br><br><input type=\"submit\" name=\"submit\" value=\"��������\"></input>
</form></td></tr></tbody></table>";

}

$tool_content .= "<br><center><p><a href=\"index.php\">���������</a></p></center>";	

draw($tool_content,3,'admin');
?>