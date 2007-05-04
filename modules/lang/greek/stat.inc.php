<?
/*
      +----------------------------------------------------------------------+
      | GUnet eClass 2.0                                                     |
      | Asychronous Teleteaching Platform                                    |
      +----------------------------------------------------------------------+
      | Copyright (c) 2003-2007  GUnet                                       |
      +----------------------------------------------------------------------+
      |                                                                      |
      | GUnet eClass 2.0 is an open platform distributed in the hope that    |
      | it will be useful (without any warranty), under the terms of the     |
      | GNU License (General Public License) as published by the Free        |
      | Software Foundation. The full license can be read in "license.txt".  |
      |                                                                      |
      | Main Developers Group: Costas Tsibanis <k.tsibanis@noc.uoa.gr>       |
      |                        Yannis Exidaridis <jexi@noc.uoa.gr>           |
      |                        Alexandros Diamantidis <adia@noc.uoa.gr>      |
      |                        Tilemachos Raptis <traptis@noc.uoa.gr>        |
      |                                                                      |
      | For a full list of contributors, see "credits.txt".                  |
      |                                                                      |
      +----------------------------------------------------------------------+
      | Contact address: Asynchronous Teleteaching Group (eclass@gunet.gr),  |
      |                  Network Operations Center, University of Athens,    |
      |                  Panepistimiopolis Ilissia, 15784, Athens, Greece    |
      +----------------------------------------------------------------------+
*/

 $msgAdminPanel = "������� �����������";
 $msgStats = "����������";
 $msgStatsBy = "���������� ������� ��";
 $msgHours = "����";
 $msgDay = "����";
 $msgWeek = "��������";
 $msgMonth = "����";
 $msgYear = "������";
 $msgFrom = "��� ";
 $msgTo = "��� ";
 $msgPreviousDay = "����������� ����";
 $msgNextDay = "������� ����";
 $msgPreviousWeek = "����������� ��������";
 $msgNextWeek = "������� ��������";
 $msgCalendar = "����������";
 $msgShowRowLogs = "show row logs";
 $msgRowLogs = "row logs";
 $msgRecords = "��������";
 $msgDaySort = "���������� ������� �� ��� �����";
 $msgMonthSort = "���������� ������� �� �� ����";
 $msgCountrySort = "���������� ������� �� �� ����";
 $msgOsSort = "���������� ������� �� �� ����������� �������";
 $msgBrowserSort = "���������� ������� �� �� Browser";
 $msgProviderSort = "���������� ������� �� �� ������� ���������";
 $msgTotal = "��������";
 $msgBaseConnectImpossible = "��� ����� ������ � ������� ����� ���������";
 $msgSqlConnectImpossible = "��� ����� ������ � ������� �� ��� ��������� SQL";
 $msgSqlQuerryError = "��� ����� ������ �� ������� SQL";
 $msgBaseCreateError = "������������� ������ ���� ��� �������� ��� ����������� ezboo";
 $msgMonthsArray = array("����������",
			"�����������",
			"�������",
			"��������",
			"�����",
			"�������",
			"�������",
			"���������",
			"�����������",
			"���������",
			"���������",
			"����������");
 $msgDaysArray = array("�������","�������","�����","�������","������","���������","�������");
 $msgDaysShortArray=array("�","�","�","�","�","�","�");
 $msgToday = "������";
 $msgOther = "����";
 $msgUnknown = "�������";
 $msgServerInfo = "����������� ��� ��� ��������� ��� php";
 $msgStatBy = "���������� ��";
 $msgVersion = "Webstats 1.30";
 $msgCreateCook = "<b>������������:</b> ��� cookie ���� ������������ ���� ���������� ���,<BR>
     ��� �� ����������� ����� ��� logs ���.<br><br><br><br>";
 $msgCreateCookError = "<b>������������:</b>�� cookie ��� ���� ������� �� ����������� ���� ���������� ���<br>
     ������� ��� ��������� ��� browser ��� ��������� ���� �� ������.<br><br><br><br>";
 $msgInstalComments = "<p>� �������� ���������� ������������ �� ����������� ��:</p>
       <ul>
         <li>������������ ��� ������ ��� ���������� <b>liste_domaines</b> ���� ���� ���������<br>
           </b>� ������� �������� �� ����������� �� ������� ����� �� ���� ���� �������� ��� �� InterNIC</li>
         <li>���������� ���� ������ ��� ���������� <b>logezboo</b><br>
           ����� � ������� �� ���������� �� logs</li>
       </ul>
       <font color=\"#FF3333\">������ �� ����� ������������ ��������� �� ������<ul><li><b>config_sql.php3</b> �� ��
<b>����� ������</b>, <b>�����������</b> ��� ��<b>���� ��������� </b> ��� �� ������� �� ��� SQL ���������.</li><br><li>�� ������
<b>config.inc.php3</b>
������ �� ���� ������������ ��� ��� ������� ���������� �������.</font></li></ul><br>�������� �� ��������������� ��� ����� �� �����
����������� ����������� �������� (�.�. Notepad).";
 $msgInstallAbort = "����������� ��� SETUP";
 $msgInstall1 = "�� ��� ������� ������ ������ ��������, � ����������� ����� �����������.";
 $msgInstall2 = "����� ������������ 2 ������� ��� ���� ���������";
 $msgInstall3 = "�������� ���� �� �������� �� ����� interface";
 $msgInstall4 = "��� �� ������������ �� ������ ��� ���� �� ������� ���������, ������ �� ������������ ��� ������� ���� ������� ��� ������ �� ��������������.";

 $msgUpgradeComments ="� ��� ������ ��� ezBOO WebStats ������������ ��� ���� ������ <b>logezboo</b> ���� �� ������������ ��������.<br>
  						�� �� ����� ��� ����� ��� �������, ������ �� ���������� ��� ������ <b>liste_domaine</b>
  						��� �� ���������� ��� �����������.<br>
  						���� ��� �� ���� ���������� ���� ������ <b>logezboo</b> .<br>
  						�� ������ ������ ����� �����������. :-)";
$langStats="����������";
?>
