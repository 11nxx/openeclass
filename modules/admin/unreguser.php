<?
$langFiles = array('gunet','admin');
include '../../include/init.php';
@include("check_admin.inc");

$nameTools = $langUnregUser;
$navigation[]= array ("url"=>"index.php", "name"=> $langAdmin);
begin_page();

if (!isset($doit) or $doit != "yes") {

	echo "
		<h3>����������� ���������</h3>
		<p>������ ������� �� ���������� ��� ������ <em>$un</em>";
	if (isset($c) and $c != "") echo " ��� �� ������ �� ������ <em>$c</em>";
	echo ";</p>
		<ul><li>���: 
			<a href=\"unreguser.php?u=$u&c=$c&doit=yes\">��������!</a>
			<br>&nbsp;</li>
		<li>���: <a href=\"index.php\">
			��������� ��� ������ �����������</a></li></ul>
	";	


} else {

	$conn = mysql_connect($mysqlServer, $mysqlUser, $mysqlPassword);
        if (!mysql_select_db($mysqlMainDb, $conn))
                die("Cannot select database \"claroline\".\n");

	if ($c==""  and isset($u)) {
		if ($u == 1) {
			echo "������! ������������ �� ���������� ��� ������ �� user id = 1!";
			exit;
		}
		$sql = mysql_query("DELETE from user WHERE user_id = '$u'");

		if (mysql_affected_rows($conn) > 0) {
        		echo "<p>� ������� �� id $u �����������.</p>\n";
		} else {
        		echo "������ ���� �� �������� ��� ������";
		}
		mysql_query("DELETE from admin WHERE idUser = '$u'");
		if (mysql_affected_rows($conn) > 0) {
        		echo "<p>� ������� �� id $u ���� ������������.</p>\n";
		}
	} elseif (isset($c) and isset($u)) 
		{
		$sql = mysql_query("DELETE from cours_user WHERE user_id = '$u' and code_cours='$c'");
		if (mysql_affected_rows($conn) > 0)  
			echo "<p>� ������� �� id $u ����������� ��� �� ������ $c.</p>\n";
		else
			echo "������ ���� �� �������� ��� ������";
		}
	echo "<br>&nbsp;<br><a href=\"index.php\">��������� ��� ������ �����������</a>\n";
}	
?>
</body></html>
