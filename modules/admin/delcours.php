<?
$langFiles = array('gunet','admin');
include '../../include/init.php';
@include "check_admin.inc";

$nameTools = "�������� ���������";
$navigation[]= array ("url"=>"index.php", "name"=> $langAdmin);
begin_page();

if (!isset($doit) or $doit != "yes") {
        echo "<h4>����������� ��������� ���������</h4>
              <p>������ ������� �� ���������� �� ������ �� ������ <em>$c</em>;</p>
              <ul><li>���:<a href=\"delcours.php?c=$c&doit=yes\">��������!</a><br>&nbsp;</li>
              <li>���: <a href=\"index.php\">��������� ��� ������ �����������</a></li></ul>";
} else {
	mysql_query("DROP DATABASE '$c'");
	mysql_query("DELETE FROM cours WHERE code='$c'");
	mysql_query("DELETE FROM cours_user WHERE code_cours='$c'");
	mysql_query("DELETE FROM cours_faculte WHERE code='$c'");
	mysql_query("DELETE FROM annonces WHERE code_cours='$c'");
	@mkdir("../../courses/garbage");			
	rename("../../courses/$c","../../courses/garbage/$c");
	echo "<br>";
	echo "�� ������ $c ����������� �� �������� !";
	echo "<br>";
	echo "<br>";	
	echo "<a href=\"index.php\">��������� ��� ������ �����������</a>";
}
end_page();
?>
