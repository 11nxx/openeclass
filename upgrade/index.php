<?
$langFiles = 'registration';
$path2add=2;
include '../include/baseTheme.php';

$nameTools = '����������';

// Initialise $tool_content
$tool_content = "";
// Main body
//====================

$tool_content .= "<form method=\"post\" action=\"upgrade.php\">
<table width=\"99%\"><caption>����������� �����������</caption><tbody>
<tr><td valign=\"center\" width=\"15%\" nowrap><b>���� 1:</b></td>
<td valign=\"center\">�������� ��� ������� ����������� ��� e-Class �������� ���� <b><a href=\"UPGRADE.txt\" target=\"blank\">���</a></b>.</td></tr>
<tr><td valign=\"top\" width=\"15%\" nowrap><b>���� 2:</b></td>
<td valign=\"center\">����� ��� ������� - ���������� ��� ����������� ������� ��� e-Class �������� ���� <b><a href=\"CHANGES.txt\" target=\"blank\">���</a></b>.</td></tr>
<tr><td valign=\"top\" width=\"15%\" nowrap><b>���� 3:</b></td>
<td valign=\"center\">��� �� ����������� ���� ���������� ��� ����� ���������,
	����� �� ����� ������ ��� �� ����������� ��� ����������� ��� ����������:
	</td></tr>
	<tr><td valign=\"top\" width=\"15%\">$langUsername : </td><td valign=\"top\"><input type=\"text\" name=\"login\" size=\"20\"></td></tr>
	<tr><td valign=\"top\ width=\"15%\">$langPass : </td><td valign=\"top\"><input type=\"password\" name=\"password\" size=\"20\"></td></tr>
	<tr><td>&nbsp;</td><td valign=\"top\"><input type=\"submit\" name=\"submit_upgrade\" value=\"���������� ����� ���������\"></td></tr>
</tbody></table></form>";

$tool_content .= "<br><center><p><a href=\"../index.php\">���������</a></p></center>";

draw($tool_content,0);

?>
