<?php
$langFiles = array('gunet','registration','admin');
include '../../include/baseTheme.php';
@include "check_admin.inc";
include('../../include/sendMail.inc.php');
$nameTools= "�������� �������� ���������";

// Initialise $tool_content
$tool_content = "";
// Main body



$conn = mysql_connect("$mysqlServer", "$mysqlUser", "$mysqlPassword");
if (!mysql_select_db("$mysqlMainDb", $conn)) {
        die("Cannot select database $mysqlMainDb.\n");
	}
if (isset($close) && $close == 1) {
	$sql = db_query("UPDATE prof_request set status='2', date_closed=NOW() WHERE rid='$id'");

	$tool_content .= "<p><center>� ������ ��� �������� ������� !</p>";
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
			$tool_content .= "<p>� ������ ��� �������� �����������";
			if ($sendmail == 1) $tool_content .= " ��� �������� ����������� ������ ���".
				" ��������� $prof_email";
			$tool_content .= ". <br><br>������:<br><pre>$comment</pre></p>\n";
		}
	} else {
		$r = db_query("SELECT comment, profname, profsurname, profemail
					     FROM prof_request WHERE rid = '$id'");
		$d = mysql_fetch_assoc($r);
		
		$tool_content .= "
		<br><br>
		<center><p>��������� �� ���������� ��� ������ �������� ��
		��������:<br><br>".$d[profname]." ".$d[profsurname]." &lt;".$d[profemail]."&gt;
		<br><br>������:
		<form action=\"listreq.php\" method=\"post\">
			<input type=\"hidden\" name=\"id\" value=\"".$id."\">
			<input type=\"hidden\" name=\"close\" value=\"2\">
			<input type=\"hidden\" name=\"prof_name\" value=\"".$d['profname']."\">
			<input type=\"hidden\" name=\"prof_surname\" value=\"".$d['profsurname']."\">
			<textarea name=\"comment\" rows=\"5\" cols=\"40\">".$d['comment']."</textarea>
			<br><input type=\"checkbox\" name=\"sendmail\" value=\"1\"
				checked=\"yes\">&nbsp;�������� ��������� ��� ������, ���
				���������:
			<input type=\"text\" name=\"prof_email\" value=\"".$d['profemail']."\">
			<br><br>(��� ������ �� ���������� ��� �� �������� ������)
			<br><br><input type=\"submit\" name=\"submit\" value=\"��������\">
		</form></p></center>
		";

	}
} else {

	$tool_content .= "<table width=\"99%\"><caption>����� ��������</caption><thead><tr>
		<th scope=\"col\">�����</th>
		<th scope=\"col\">�������</th>
		<th scope=\"col\">Username</th>
		<th scope=\"col\">E-mail</th>
		<th scope=\"col\">�����</th>
		<th scope=\"col\">���.</th>
		<th scope=\"col\">����. ���.</th>
		<th scope=\"col\">������</th>
		<th scope=\"col\">���������</th>
		</tr></thead><tbody>";

 	$sql = db_query("SELECT rid,profname,profsurname,profuname,profemail,proftmima,profcomm,date_open,comment 
		FROM prof_request WHERE status='1'");

	for ($j = 0; $j < mysql_num_rows($sql); $j++) {
		$req = mysql_fetch_array($sql);
		$tool_content .= "<tr>";
		for ($i = 1; $i < mysql_num_fields($sql); $i++) {
			if ($i == 4 and $req[$i] != "") {
				$tool_content .= "<td><a href=\"mailto:".
				htmlspecialchars($req[$i])."\">".
				htmlspecialchars($req[$i])."</a></td>";
			} else {
				$tool_content .= "<td>".
				htmlspecialchars($req[$i])."</td>";
			}
		}
		$tool_content .= "<td align=center><font size=\"2\"><a href=\"listreq.php?id=$req[rid]&"."close=1\">��������</a>
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
			</td></tr>";
	}
	$tool_content .= "</tbody></table>";
}

$tool_content .= "<br><center><p><a href=\"index.php\">���������</a></p></center>";

draw($tool_content,3,'admin');
?>