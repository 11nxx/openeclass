<?
$langFiles = 'registration';
$path2add=2;
include '../include/baseTheme.php';

$nameTools = '���������� ��� ������ ��������� ��� eClass';

$max_execution_time = trim(ini_get('max_execution_time'));

// Initialise $tool_content
$tool_content = "";

// Main body
$tool_content .= "
<div class='warntitle'>�������!</div>
<p>�� ��������� ����������� �� ������������ �� ������ ��������� <em>config.php</em>. 
   �������� ���� ����������� ���� ���������� ����������� ��� � web server
   ������ �� ���� �������� ��� <em>config.php</em>. ��� ������ ���������, ��
   ������� ��������� ��� <em>config.php</em> �� ��������� ��� ������
   <em>config_backup.php</em>.</p>
<p>������ ��� ������ ��������� ����������� ��� ����� �������� ��������� ��������� ��� ������ ���������.</p>";
if (intval($max_execution_time) < 300) {
	$tool_content .= "<hr><p>�������! ��� �� ����������� � ���������� ��� ����������� ����������� ��� � ��������� <em>max_execution_time</em> ��� �������� ��� <em>php.ini</em> ����� ���������� ��� 300 (= 5 �����). ������� ��� ���� ��� ��� ������������� ��� ���������� �����������<hr>";
	draw($tool_content, 0);
}
$tool_content .= "<p>��� �� ����� ��� �������-���������� ��� ���������� ������� ��� eClass �����
   ���� <a href='CHANGES.txt'>���</a>. �� ��� �� ����� ����� ���, �����������
   ��������� ��� ����������� ��� <a href='upgrade.html'>������� �����������</a>
   ���� ����������� ��� �������� ����.</p>
<p>��� �� ����������� ���� ���������� ��� ����� ���������, ����� �� �����
   ������ ��� �� ����������� ��� ����������� ��� ����������:</p>
<form method='post' action='upgrade.php'>
<table width='70%' align='center'>
<tr><td style='border: 1px solid #FFFFFF;'>
<fieldset><legend><b>�������� �������</b></legend>
<table cellpadding='1' cellspacing='2' width='99%'>
<tr><th style='text-align: left; background: #E6EDF5; color: #4F76A3; font-size: 90%'>$langUsername :</th>
    <td style=\"border: 1px solid #FFFFFF;\">&nbsp;<input class='auth_input_admin' style='width:150px; heigth:20px;' type='text' name='login' size='20'></td>
</tr>
<tr><th style='text-align: left; background: #E6EDF5; color: #4F76A3; font-size: 90%'>$langPass :</th>
    <td style=\"border: 1px solid #FFFFFF;\">&nbsp;<input class='auth_input_admin' type='password' style='width:150px; heigth:20px;' name='password' size='20'></td>
</tr>
<tr><td colspan='2' style=\"border: 1px solid #FFFFFF;\" align='center'>
    <input type='submit' name='submit_upgrade' value='���������� ����� ���������'></td>
</tr>
</table>
</fieldset>
</td></tr></table>";

if (isset($from_admin)) {
        $tool_content .= "<input type='hidden' name='from_admin' value='$from_admin'>";
}

$tool_content .= "</form></td></tr><tr><td style=\"border: 1px solid #FFFFFF;\" colspan=2>";

if (isset($from_admin)) {
        $tool_content .= "<p align=right><a href='../modules/admin/index.php' class=mainpage>��������� ��� ������ �����������</a></p>";
} else {
        $tool_content .= "&nbsp;";
}
 

draw($tool_content, 0);
?>
