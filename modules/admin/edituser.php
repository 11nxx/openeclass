<?
$langFiles = array('admin','gunet');
include '../../include/init.php';
include "check_admin.inc";

$nameTools = $langEditUser;
$navigation[]= array ("url"=>"index.php", "name"=> $langAdmin);
begin_page();

// �� ���� ����� ����� ������ ���� �����������, �����������
// � ������ �� �� �������� ��� ��� ����������� ��� ������
if (isset($u)) {
	$sql = mysql_query("
		SELECT nom, prenom, username, password, email FROM user
		WHERE user_id = '$u'");
	if (!$sql) {
		die("Unable to query database (user_id='$u')!");
	}

	$info = mysql_fetch_array($sql);

	echo "<h4>����������� ������ $info[2]</h4>";

	echo "
	<ul style=\"background: #e5e5e5; padding-top: 1em; padding-bottom: 1em;
			font-size: 12pt;\">
		<li>�������: $info[0]</li>
		<li>�����: $info[1]</li>
		<li>Username: $info[2]</li>
		<li>Password: $info[3]</li>
		<li>E-mail: <a href=\"mailto:$info[4]\">$info[4]</a></li>
		<li>User ID: $u</li>
	</ul>";
	
	$sql = mysql_query("
		SELECT nom, prenom, username FROM user
		WHERE user_id = '$u'");
	if (!$sql) {
		die("Unable to query database (user_id='$u')!");
	}

	$sql = mysql_query("SELECT a.code, a.intitule, b.statut, a.cours_id
		FROM cours AS a LEFT JOIN cours_user AS b ON a.code = b.code_cours
		WHERE b.user_id = '$u' ORDER BY b.statut, a.faculte");

// �� � ������� ���������� �� �������� ���� ���������� �� ����� 

if (mysql_num_rows($sql) > 0) {

 	 echo "<h4>�������� ��� ����� ���������� � �������</h4>\n".
		"<table border=\"1\">\n<tr><th>�������</th><th>������ ���������</th>".
		"<th>��������</th><th>�����������</th></tr>";

	for ($j = 0; $j < mysql_num_rows($sql); $j++) {
		$logs = mysql_fetch_array($sql);
		echo "<tr><td>".htmlspecialchars($logs[0])."</td><td>".
			htmlspecialchars($logs[1])."</td><td align=\"center\">";
		switch ($logs[2]) {
			case 1:
				echo "���������";
				echo "</td><td align=\"center\">---</td></tr>\n";
				break;
			case 5:
				echo "��������";
				echo "</td><td align=\"center\"><a href=\"unreguser.php?u=$u&un=$info[2]&c=$logs[0]\">".
					"��������</a></td></tr>\n";
				break;
			default:
				echo "����������";
				echo "</td><td align=\"center\"><a href=\"unreguser.php?u=$u&un=$info[2]&c=$logs[0]\">".
                       	                "��������</a></td></tr>\n";
				break;
		}
	}
	echo "</table>\n";

} else { 

 	echo "<h2>� ������� ��� ���������� �� ������ ������</h2>";	
	if ($u > 1) {
		if (isset($logs))
			echo "<center><a href=\"unreguser.php?u=$u&un=$info[2]&c=$logs[0]\">��������</a></center>";
		else 
			echo "<center><a href=\"unreguser.php?u=$u&un=$info[2]&c=\">��������</a></center>";
	} else {
		echo "� ������� ����� (�� user id = 1) ����� � ������� ������������ ��� ���������� ��� �� �����������.";
	}
}
} else {

// ������... �� �������;

	echo "<h1>������</h1>\n<p><a href=\"listcours.php\">��������� ���� ��������".
		" ���������</p>\n";
}

?>

<center><p><a href="listusers.php">���������</a></p></center>
</body></html>
