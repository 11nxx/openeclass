<?
$langFiles = 'admin';
include '../../include/baseTheme.php';
@include "check_admin.inc";
$nameTools = "����������� ���������";

// Initialise $tool_content
$tool_content = "";
// Main body

if (isset($search) && ($search=="yes")) {
	$searchurl = "&search=yes";
}

if (isset($submit))  {
	$dq = $dq * 1000000;
        $vq = $vq * 1000000;
        $gq = $gq * 1000000;
        $drq = $drq * 1000000;
	$sql = mysql_query("UPDATE cours SET faculte='$faculte', titulaires='$titulaires', intitule='$intitule' WHERE code='$c'");
	if (mysql_affected_rows() > 0) {
		$tool_content .= "<p>�� �������� ��� ��������� ������� �� ��������!</p>";
	} else {
		$tool_content .= "<p>��� ���������������� ����� ������!</p>";
	}

} else {
	$row = mysql_fetch_array(mysql_query("SELECT * FROM cours WHERE code='$c'"));

	$tool_content .= "<form action=".$_SERVER[PHP_SELF]."?c=".$c."".$searchurl." method=\"post\">";	
	$tool_content .= "<table width=\"99%\"><caption>������ ��������� ���������</caption><tbody>";
	$tool_content .= "  <tr>
    <td colspan=\"2\"><b><u>�������� ���������</u></b><br><br></td>
  </tr>";
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap><b>�����:</b></td>
    <td><select name=\"faculte\">\n";
  
$resultFac=mysql_query("SELECT name FROM faculte ORDER BY number");

	while ($myfac = mysql_fetch_array($resultFac)) {	
		if($myfac['name'] == $row['faculte']) 
			$tool_content .= "      <option selected>$myfac[name]</option>";
		else 
			$tool_content .= "      <option>$myfac[name]</option>";
	}
	$tool_content .= "</select>
    </td>
  </tr>";  
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap><b>�������:</b></td>
    <td><i>".$row['code']."</i></td>
  </tr>";
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap><b>������:</b></td>
    <td><input type=\"text\" name=\"intitule\" value=\"".$row['intitule']."\" size=\"60\"></td>
  </tr>";
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap><b>��������:</b></td>
    <td><input type=\"text\" name=\"titulaires\" value=\"".$row['titulaires']."\" size=\"60\"></td>
  </tr>";
	$tool_content .= "  <tr>
    <td colspan=\"2\"><br><input type='submit' name='submit' value='$langModify'></td>
  </tr>";
	$tool_content .= "</tbody></table></form>\n";
}

if (isset($c)) {
	$tool_content .= "<center><p><a href=\"editcours.php?c=".$c."".$searchurl."\">���������</a></p></center>";
} else {
	$tool_content .= "<center><p><a href=\"index.php\">".$langBackAdmin."</a></p></center>";
}

draw($tool_content,3,'admin');

?>
