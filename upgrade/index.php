<?
$langFiles = 'registration';
include('../include/init.php');

$nameTools = '����������';

begin_page();
?>
	<table cellpadding="8" cellspacing="0" border="0" width="100%">
	<form method="post" action="upgrade.php">
	<tr><td colspan="2" bgcolor=<?= $color2 ?>>
	��� �� ����� ��� �������-���������� ��� ���������� ������� ��� e-Class ����� ���� <a href="CHANGES.txt" target=_blank>���</a>.</td></tr>
	<tr><td colspan="2" bgcolor=<?= $color2 ?>>��� �� ����������� ���� ���������� ��� ����� ���������,
	����� �� ����� ������ ��� �� ����������� ��� ����������� ��� ����������:</td></tr>
	<tr><td bgcolor=<?= $color2 ?>><?= $langUsername ?>:</td><td bgcolor=<?= $color2 ?>>
	<input type="text" name="login" size="20"></td></tr>
	<tr><td bgcolor=<?= $color2 ?>><?= $langPass ?>:</td>
	<td bgcolor=<?= $color2 ?>><input type="password" name="password" size="20"></td></tr>
	<tr><td align="center" colspan="2" bgcolor=<?= $color2 ?>><input type="submit" name="submit" value="���������� ����� ���������"></td></tr>
	</table>
<?
end_page();
?>
