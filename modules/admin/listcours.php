<?
$langFiles = array('admin','gunet');
include '../../include/init.php';
@include "check_admin.inc";

$nameTools = "����� ��������� / ���������";
$navigation[]= array ("url"=>"index.php", "name"=> $langAdmin);
begin_page();

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

if (!isset($c) or mysql_num_rows($sql) == 0) {

	$a=mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM cours"));
	echo "<p><i>�������� $a[0] ��������</i></p>";
	echo "<table border=\"1\">\n<tr><th>�����</th><th>�������</th>".
	     "<th>������ (��������)</th><th>��������� ���������</th><th>�������</th><th>���� ������. �����<th>�������� 
���������</th></tr>";

	$sql = mysql_query(
		"SELECT faculte, code, intitule,titulaires,visible FROM cours ORDER BY faculte");
	for ($j = 0; $j < mysql_num_rows($sql); $j++) {
		$logs = mysql_fetch_array($sql);
		echo("<tr>");
		 for ($i = 0; $i < 2; $i++) {
			echo("<td width='500'>".htmlspecialchars($logs[$i])."</td>");
		}
		echo "<td width='500'>".htmlspecialchars($logs[2])." ($logs[3])</td>";
		switch ($logs[4]) {
		case 2:
			echo "<td>�������</td>"; break;
		case 1:
			echo "<td>���������� �������</td>"; break;
		case 0:
			echo "<td>�������</td>"; break;
		}	
		echo "<td><a href=\"listcours.php?c=$logs[1]\">�������</a></td>";
		echo "<td><a href=\"quotacours.php?c=$logs[1]\">������</a></td>";
		echo "<td><a href=\"delcours.php?c=$logs[1]\">��������</a></td>\n";
  }
	echo "</table>\n";

echo "<center><p><a href=\"index.php\">���������</a></p></center>";

} else {

// �� ���� ������� ������ ������ �� ��� ������ c, ��� �������� �������,
// ����������� � ������ �� ���� �������:


	echo "<table border=\"1\">\n<tr><th>".
	     "<a href=\"listcours.php?c=$c&ord=n\">�������</a></th><th>".
			 "<a href=\"listcours.php?c=$c&ord=p\">�����</a></th><th>".
			 "<a href=\"listcours.php?c=$c&ord=u\">Username</a></th><th>".
			 "Password</th><th>".
			 "<a href=\"listcours.php?c=$c&ord=s\">��������</a></th>".
			 "<th>�����������</th></tr>";

	for ($j = 0; $j < mysql_num_rows($sql); $j++) {
		$logs = mysql_fetch_array($sql);
		echo("<tr>");
		for ($i = 0; $i < 4; $i++) {	
			echo("<td>".htmlspecialchars($logs[$i])."</td>");
		}
		switch ($logs[4]) {
			case 1:
				echo "<td>���������</td>"; break;
			case 5:
				echo "<td>��������</td>"; break;
			default:
				echo "<td>���� ($logs[4])</td>"; break;
		}
		echo "<td><a href=\"edituser.php?u=$logs[5]\">�����������</a></td></tr>\n";
  }
	echo "</table>
		<p><a href=\"listcours.php\">��������� ��� ����� ���������</a></p>\n";

}

?>
</body></html>
