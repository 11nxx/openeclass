<?php
$langFiles = array('admin','gunet');
include '../../include/baseTheme.php';
@include "check_admin.inc";
$nameTools = "����������� ���������";

// Initialise $tool_content
$tool_content = "";
// Main body

// Manage order of display list
if (isset($ord)) {
	switch ($ord) {
		case "s":
			$order = "b.statut"; break;
		case "n":
			$order = "a.nom"; break;
		case "p":
			$order = "a.prenom"; break;
		case "u":
			$order = "a.username"; break;
		default:
			$order = "b.statut"; break;
	}
} else {
	$order = "b.statut";
}

if (isset($c)) {
	$sql = mysql_query("
		SELECT a.nom, a.prenom, a.username, a.password, b.statut, a.user_id
		FROM user AS a LEFT JOIN cours_user AS b ON a.user_id = b.user_id
		WHERE b.code_cours='$c' ORDER BY $order");
	if (!$sql) {
		die("Unable to query database!");
	}
}

// �� ��� ����� �������� � ���������� c (c=<������� ���������>),
// � ��� ���������� ������� ��� �� ����� ������ �� ��� ������ �����,
// ����������� � ������ �� �� ��������.

if (isset($c)) {
	if (isset($search) && ($search=="yes")) {
		$searchurl = "&search=yes";
	}
	
	$sql = mysql_query(
		"SELECT * FROM cours WHERE code = '".$c."'");
	$row = mysql_fetch_array($sql);
	$tool_content .= "<table width=\"99%\"><caption>�������� ��������� (<a href=\"infocours.php?c=".$c."".$searchurl."\">������</a>)</caption><tbody>";
	
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap><b>�����:</b></td>
    <td>".$row['faculte']."</td>
</tr>";
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap><b>�������:</b></td>
    <td>".$row['code']."</td>
</tr>";
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap><b>������:</b></td>
    <td>".$row['intitule']."</td>
</tr>";
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap><b>��������:</b></td>
    <td>".$row['titulaires']."</td>
</tr>";
	$tool_content .= "</tbody></table><br>\n";	
	$tool_content .= "<table width=\"99%\"><caption>���� ������������� ����� (<a href=\"quotacours.php?c=$c".$searchurl."\">������</a>)</caption><tbody>";
	$q = mysql_fetch_array(mysql_query("SELECT code,intitule,doc_quota,video_quota,group_quota,dropbox_quota 
			FROM cours WHERE code='$c'"));
	$tool_content .= "  <tr>
    <td colspan=\"2\"><i>$langTheCourse <b>$q[intitule]</b> $langMaxQuota</i><br></td>
  </tr>";			
	$dq = $q['doc_quota'] / 1000000;
	$vq = $q['video_quota'] / 1000000;
	$gq = $q['group_quota'] / 1000000;
	$drq = $q['dropbox_quota'] / 1000000;
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap>$langLegend <b>$langDocument</b>:</td>
    <td>".$dq." Mb.</td>
</tr>";
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap>$langLegend <b>$langVideo</b>:</td>
    <td>".$vq." Mb.</td>
</tr>";
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap>$langLegend <b>$langGroup</b>:</td>
    <td>".$gq." Mb.</td>
</tr>";
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap>$langLegend <b>$langDropbox</b>:</td>
    <td>".$drq." Mb.</td>
</tr>";
	$tool_content .= "</tbody></table><br>\n";	
	$tool_content .= "<table width=\"99%\"><caption>��������� ��������� (<a href=\"statuscours.php?c=".$c."".$searchurl."\">������</a>)</caption><tbody>";
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap><b>�������� ���������:</b></td>
    <td>";
	switch ($row['visible']) {
	case 2:
		$tool_content .= "�������";
		break;
	case 1:
		$tool_content .= "���������� �������";
		break;
	case 0:
		$tool_content .= "�������";
		break;
	}	
    $tool_content .= "</td>
</tr></tbody></table><br>\n";
	$tool_content .= "<table width=\"99%\"><caption>A���� ���������</caption><tbody>";
	$tool_content .= "  <tr>
    <td><a href=\"listusers.php?c=".$c."\">����� �������</a></td>
  </tr>";
	$tool_content .= "  <tr>
    <td><a href=\"addusertocours.php?c=".$c."".$searchurl."\">������� �������/�������� �����������-��������������</a></td>
  </tr>";
	$tool_content .= "  <tr>
    <td>���������� ���������</td>
  </tr>";
	$tool_content .= "  <tr>
    <td><a href=\"../course_info/archive_course.php?c=".$c."".$searchurl."\">���� ���������� ���������<a/></td>
  </tr>";
	$tool_content .= "  <tr>
    <td><a href=\"delcours.php?c=".$c."".$searchurl."\">�������� �������� ���������</a></td>
  </tr>";
	$tool_content .= "</tbody></table>";

	if (isset($search) && ($search=="yes")) {
		$tool_content .= "<br><center><p><a href=\"listcours.php?search=yes\">��������� ��� ������������ ��� ����������</a></p></center>";
	}

	$tool_content .= "<br><center><p><a href=\"listcours.php\">���������</a></p></center>";

} else {

$tool_content .= "<br><center><p>������������� ������ ���� ������� ���������!</p></center>";

$tool_content .= "<br><center><p><a href=\"listcours.php\">���������</a></p></center>";

}

draw($tool_content,3, 'admin');
?>