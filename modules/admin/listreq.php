<?

$langFiles = array('gunet','registration','admin');
include "../../include/init.php";
@include("check_admin.inc");
include('../../include/sendMail.inc.php');

$nameTools= "�������� �������� ���������";
$navigation[]= array ("url"=>"index.php", "name"=> $langAdmin);
begin_page();

echo "<tr><td><br>";

$conn = mysql_connect("$mysqlServer", "$mysqlUser", "$mysqlPassword");
if (!mysql_select_db("$mysqlMainDb", $conn)) {
        die("Cannot select database $mysqlMainDb.\n");
	}
if (isset($close) && $close == 1) {
	$sql = db_query("UPDATE prof_request set status='2', date_closed=NOW() WHERE rid='$id'");

	echo "<br><br><center>� ������ ��� �������� ������� !</center>";
} elseif (isset($close) && $close == 2) {
	if (!empty($comment)) {
		if (db_query("UPDATE prof_request set status = '2',
					    date_closed = NOW(),
					    comment = '".mysql_escape_string($comment)."'
					    WHERE rid = '$id'")) {
			if ($sendmail == 1) {
        $emailsubject = "�������� ������� �������� ���� ��������� ���������� ��������������";
				$emailbody = "
� ������ ��� ��� ������� ���� ��������� e-Class �����������.
������:

> $comment

$langManager $siteName
$administratorName $administratorSurname
���. $telephone
$langEmail : $emailAdministrator

";
				send_mail($siteName, $emailAdministrator, "$prof_name $prof_surname",
					$prof_email, $emailsubject, $emailbody, $charset);
			}
			echo "<br><br><center>� ������ ��� �������� �����������";
			if ($sendmail == 1) echo " ��� �������� ����������� ������ ���".
				" ��������� $prof_email";
			echo ". <br><br>������:<br><pre>$comment</pre></center>\n";
		}
	} else {
		$r = db_query("SELECT comment, profname, profsurname, profemail
					     FROM prof_request WHERE rid = '$id'");
		$d = mysql_fetch_assoc($r);
?>
		<br><br>
		<center>��������� �� ���������� ��� ������ �������� ��
		��������:<br><br><? echo "$d[profname] $d[profsurname] &lt;$d[profemail]&gt;" ?>
		<br><br>������:
		<form action="listreq.php" method="post">
			<input type="hidden" name="id" value="<? echo $id ?>">
			<input type="hidden" name="close" value="2">
			<input type="hidden" name="prof_name" value="<? echo $d['profname'] ?>">
			<input type="hidden" name="prof_surname" value="<? echo $d['profsurname'] ?>">
			<textarea name="comment" rows="5" cols="40"><?
				echo $d['comment'] ?></textarea>
			<br><input type="checkbox" name="sendmail" value="1"
				checked="yes">&nbsp;�������� ��������� ��� ������, ���
				���������:
			<input type="text" name="prof_email" value="<? echo $d['profemail'] ?>">
			<br><br>(��� ������ �� ���������� ��� �� �������� ������)
			<br><br><input type="submit" name="submit" value="��������">
		</form>
<?

	}
}

else {

 echo "<table border=\"1\">\n<tr><th>�����</th><th>�������</th>".
             "<th>Username</th>
		<th>E-mail</th>
		<th>�����</th>
		<th>���.</th>
		<th>����. ���.</th>
		<th>������</th>
		<th>���������</th>
		</tr>";

	$sql = db_query("SELECT rid,profname,profsurname,profuname,profemail,proftmima,profcomm,date_open,comment 
		FROM prof_request WHERE status='1'");

	for ($j = 0; $j < mysql_num_rows($sql); $j++) {
		$req = mysql_fetch_array($sql);
		echo("<tr>");
		for ($i = 1; $i < mysql_num_fields($sql); $i++) {
			if ($i == 4 and $req[$i] != "") {
				echo("<td><a href=\"mailto:".
				htmlspecialchars($req[$i])."\">".
				htmlspecialchars($req[$i])."</a></td>");
			} else {
				echo("<td>".
				htmlspecialchars($req[$i])."</td>");
			}
		}
		echo("<td align=center><font size=\"2\"><a href=\"listreq.php?id=$req[rid]&"."close=1\">��������</a>
			<br><a href=\"listreq.php?id=$req[rid]&"."close=2\">��������</a>
			<br><a href=\"../auth/newprof.php?".
			"id=".urlencode($req['rid']).
			"&pn=".urlencode($req['profname']).
			"&ps=".urlencode($req['profsurname']).
			"&pu=".urlencode($req['profuname']).
			"&pe=".urlencode($req['profemail']).
			"&pt=".urlencode($req['proftmima']).
			"\">�������</a>
			<br><a href=\"../auth/ldapnewprof.php?"."id=$req[rid]&m=$req[profemail]\">������� (���� LDAP)</a>
			</td>");	
		echo ("</tr>");
	}
	echo "</table>";
}
?>
<center><p><a href="index.php">���������</a></p></center>
</body></html>
