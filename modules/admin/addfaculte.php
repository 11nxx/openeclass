<?php
$langFiles = array('admin','gunet','faculte');
include '../../include/baseTheme.php';
@include "check_admin.inc";
$nameTools=$langListFaculte;

// Initialise $tool_content
$tool_content = "";
// Main body

// ����� �� ���� ��� ������
if (!isset($a)) {
	$a=mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM faculte"));

	$tool_content .= "<table width=\"99%\"><caption>��������� ������</caption><thead>
	<tr><th scope=\"col\">$langCodeF</th><th scope=\"col\">����� / �����</th scope=\"col\"><th>���������</th></tr></thead></tbody>";
	$tool_content .= "<tr><td colspan=\"3\"><i>�������� $a[0] ������ / �������</i></td</tr>";
	$sql=mysql_query("SELECT code,name FROM faculte");
	for ($j = 0; $j < mysql_num_rows($sql); $j++) {
		$logs = mysql_fetch_array($sql);
		$tool_content .= "<tr>";
		for ($i = 0; $i < 2; $i++) {
			$tool_content .= "<td width='500'>".htmlspecialchars($logs[$i])."</td>";
		}
       $tool_content .= "<td><a href=\"addfaculte.php?a=2&c=$logs[1]\">��������</a></td></tr>\n";
	}
	$tool_content .= "</tbody></table><br>";
	$tool_content .= "<table width=\"99%\"><caption>����� ���������</caption><tbody>
	<tr><td><a href=\"addfaculte.php?a=1\">��������</a></td></tr></tbody</table>";
	$tool_content .= "<br><center><p><a href=\"index.php\">".$langBackToIndex."</a></p></center>";
}

// �������� ������ / ��������

elseif ($a == 1)  {
	if (isset($add)) {
		// ����� ����
		if (empty($codefaculte) or empty($faculte)) {
			$tool_content .= "<p>".$langEmptyFaculte."</p><br>";
			$tool_content .= "<center><p><a href=\"addfaculte.php?a=1\">��������� ���� �������� ��������</a></p></center>";
			}
		// ��� ��������
		elseif (!preg_match("/^[A-Z0-9a-z_-]+$/", $codefaculte)) {
			$tool_content .= "<p>".$langGreekCode."</p><br>";
			$tool_content .= "<center><p><a href=\"addfaculte.php?a=1\">��������� ���� �������� ��������</a></p></center>";
			}
		// M���� ������� ��� � ����� / ������� 
		elseif (mysql_num_rows(mysql_query("SELECT * from faculte WHERE code='$codefaculte'")) > 0) {
			$tool_content .= "<p>".$langFCodeExists."</p><br>";
			$tool_content .= "<center><p><a href=\"addfaculte.php?a=1\">��������� ���� �������� ��������</a></p></center>";
			} 
			elseif (mysql_num_rows(mysql_query("SELECT * from faculte WHERE name='$faculte'")) > 0) {
			$tool_content .= "<p>".$langFaculteExists."</p><br>";
			$tool_content .= "<center><p><a href=\"addfaculte.php?a=1\">��������� ���� �������� ��������</a></p></center>";
			} else {
		// �� ����������� ��� 
			mysql_query("INSERT into faculte(code,name,generator,number) VALUES('$codefaculte','$faculte','100','1000')") 
				or die ($langNoSuccess);
			$tool_content .= "<p>".$langAddSuccess."</p><br>";
			}
	}  else {
		$tool_content .= "<form method=\"post\" action=\"".$_SERVER['PHP_SELF']."?a=1\">";
		$tool_content .= "<table width=\"99%\"><caption>�������� ��������</caption><tbody>";
		$tool_content .= "		<tr><td width=\"3%\" nowrap>".$langCodeFaculte1.":</td><td><input type=\"text\" name=\"codefaculte\" value=\"".@$codefaculte."\"></td></tr>
		<tr><td>&nbsp;</td><td><i>".$langCodeFaculte2."</i></td></tr>
		<tr><td width=\"3%\" nowrap>".$langFaculte1.":</td><td><input type=\"text\" name=\"faculte\" value=\"".@$faculte."\"></td></tr>
		<tr><td>&nbsp;</td><td><i>".$langFaculte2."</i></td></tr>
		<tr><td colspan=\"2\"><input type=\"submit\" name=\"add\" value=\"".$langAddYes."\"></td</tr>
		</tbody></table></form>";
		}
		$tool_content .= "<br><center><p><a href=\"addfaculte.php\">".$langBackToIndex."</a></p></center>";
	}

// ��������
 
elseif ($a == 2) {
	$s=mysql_query("SELECT * from cours WHERE faculte='$c'"); 
	if (mysql_num_rows($s) > 0)  {
		$tool_content .= "<p>".$langProErase."</p><br>";
		$tool_content .= "<p>".$langNoErase."</p><br>";
	} else {
		mysql_query("DELETE from faculte WHERE name='$c'");
		$tool_content .= "<p>".$langErase."</p><br>";
	}	
	$tool_content .= "<br><center><p><a href=\"addfaculte.php\">".$langBackToIndex."</a></p></center>";
}

draw($tool_content,3,'admin');
?>