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
<tr><td valign=\"top\" width=\"3%\" nowrap><b>���� 1:</b></td>
<td><br>�������� ��� ������� ����������� ��� e-Class �������� ���� <b><a href=\"UPGRADE.txt\" target=\"blank\">���</a></b>.</td></tr>
<tr><td valign=\"top\" width=\"3%\" nowrap><b>���� 2:</b></td>
<td><br>����� ��� ������� - ���������� ��� ����������� ������� ��� e-Class �������� ���� <b><a href=\"CHANGES.txt\" target=\"blank\">���</a></b>.</td></tr>
<tr><td valign=\"top\" width=\"3%\" nowrap><b>���� 3:</b></td>
<td><br>��� �� ����������� ���� ���������� ��� ����� ���������,
	����� �� ����� ������ ��� �� ����������� ��� ����������� ��� ����������:</p>
	<p align=\"left\">
	$langUsername : <input type=\"text\" name=\"login\" size=\"20\"><br><br>
	$langPass :   <input type=\"password\" name=\"password\" size=\"20\"><br><br>
	<input type=\"submit\" name=\"submit_upgrade\" value=\"���������� ����� ���������\"></td></tr>
</tbody></table></form>";

$tool_content .= "<br><center><p><a href=\"../index.php\">���������</a></p></center>";

draw($tool_content,0);

?>