<?php
$langFiles = 'registration';
include '../../include/baseTheme.php';
@include "check_admin.inc";
$nameTools = '���������� ����� ���������';

// Initialise $tool_content
$tool_content = "";
// Main body

$tool_content .= "<form method=\"post\" action=\"../../upgrade/upgrade.php\">
<table width=\"99%\"><caption>����������� �����������</caption><tbody>
<tr><td valign=\"top\" width=\"3%\" nowrap><b>���� 1:</b></td>
<td><br>�������� ��� ������� ����������� ��� e-Class �������� ���� <b><a href=\"../../upgrade/UPGRADE.txt\" target=\"blank\">���</a></b>.</td></tr>
<tr><td valign=\"top\" width=\"3%\" nowrap><b>���� 2:</b></td>
<td><br>����� ��� ������� - ���������� ��� ����������� ������� ��� e-Class �������� ���� <b><a href=\"../../upgrade/CHANGES.txt\" target=\"blank\">���</a></b>.</td></tr>
<tr><td valign=\"top\" width=\"3%\" nowrap><b>���� 3:</b></td>
<td><br>���������� ���� ���������� ��� ���������� �������� �� ������<br><br><input type=\"submit\" name=\"submit\" value=\"���������� ����� ���������\"></td></tr>
</tbody></table></form>";

$tool_content .= "<br><center><p><a href=\"index.php\">���������</a></p></center>";

draw($tool_content,3, 'admin');
?>