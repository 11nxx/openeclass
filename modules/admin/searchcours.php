<?php
$langFiles = array('gunet','admin','registration');
include '../../include/baseTheme.php';
@include "check_admin.inc";
$nameTools = "��������� ���������";

// Initialise $tool_content
$tool_content = "";
// Main body


if (isset($new) && ($new=="yes")) {
	session_unregister('searchtitle');
	session_unregister('searchcode');
	session_unregister('searchtype');
	session_unregister('searchfaculte');
	unset($searchtitle);
	unset($searchcode);
	unset($searchtype);
	unset($searchfaculte);
}

if (isset($searchtitle) && isset($searchcode) && isset($searchtype) && isset($searchfaculte)) {
	$newsearch = "(<a href=\"searchcours.php?new=yes\">��� ���������</a>)";
}
	
	
	$tool_content .= "<form action=\"listcours.php?search=yes\" method=\"post\">";
	$tool_content .= "<table width=\"99%\"><caption>�������� ���������� ".$newsearch."</caption><tbody>";
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap><b>������:</b></td>
    <td><input type=\"text\" name=\"formsearchtitle\" size=\"40\" value=\"".$searchtitle."\"></td>
</tr>";
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap><b>�������:</b></td>
    <td><input type=\"text\" name=\"formsearchcode\" size=\"40\" value=\"".$searchcode."\"></td>
</tr>";
	switch ($searchcode) {
		case "2":
			$typeSel[2] = "selected";
			break;
		case "1":
			$typeSel[1] = "selected";
			break;
		case "0":
			$typeSel[0] = "selected";
			break;
		default:
			$typeSel[-1] = "selected";
			break;
	}
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap><b>����� ���������:</b></td>
    <td>
      <select name=\"formsearchtype\">
      	<option value=\"-1\" ".$typeSel[-1].">���</option>
        <option value=\"2\" ".$typeSel[2].">�������</option>
        <option value=\"1\" ".$typeSel[1].">������� �� �������</option>
        <option value=\"0\" ".$typeSel[0].">�������</option>
      </select>
    </td>
</tr>";
	$tool_content .= "  <tr>
    <td width=\"3%\" nowrap><b>�����:</b></td>
    <td><select name=\"formsearchfaculte\">
    	<option value=\"0\">���</option>\n";
  
$resultFac=mysql_query("SELECT name FROM faculte ORDER BY number");

	while ($myfac = mysql_fetch_array($resultFac)) {	
		if($myfac['name'] == $searchfaculte) 
			$tool_content .= "      <option selected>$myfac[name]</option>";
		else 
			$tool_content .= "      <option>$myfac[name]</option>";
	}
	$tool_content .= "</select>
    </td>
  </tr>";  
	$tool_content .= "  <tr>
    <td colspan=\"2\"><br><input type='submit' name='search_submit' value='���������'></td>
  </tr>";
	$tool_content .= "</tbody></table></form>";

	$tool_content .= "<center><p><a href=\"index.php\">���������</a></p></center>";


draw($tool_content,3,'admin');
?>