<?
$langFiles = 'registration';
include('../include/init.php');

$nameTools = '����������';

begin_page();
?>
	<form method="post" action="upgrade.php">
	<p align="left">��� �� ����� ��� �������-���������� ��� ���������� ������� 
	��� e-Class ����� ���� <a href="CHANGES.txt" target=_blank>���</a>.</p>
	<p align="left">��� �� ����������� ���� ���������� ��� ����� ���������,
	����� �� ����� ������ ��� �� ����������� ��� ����������� ��� ����������:</p>
	<p align="left">
	<?= $langUsername ?>: <input type="text" name="login" size="20"><br><br>
	<?= $langPass ?>:   <input type="password" name="password" size="20"><br><br>
	<input type="submit" name="submit" value="���������� ����� ���������">
	</p>
<?
end_page();
?>
