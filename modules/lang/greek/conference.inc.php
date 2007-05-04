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

/**
 * conference
 *
 * @author Dimitris Tsachalis <ditsa@ccf.auth.gr>
 * @version $Id$
 *
 * @abstract
 *
 */
 $langConference = "��������������";
 $langWash = "���������";
 $langWashFrom = "� �������� �������� ���";
 $langSave = "����������";
 $langRefresh = "��������";
 $langClearedBy = "���������� ���";
 $langChatError = "��� ����� ������� �� ��������� � ������� ��������������";
 $langsetvideo="��������� ����������� ������";
 $langButtonVideo="��������";
 $langButtonPresantation="��������";
 $langconference="������������ �������������";
 $langpresantation="��������� ����������� �����������";
 $langVideo_content="<p align='justify'>��� �� ������������ �� ������ ���� ��� ������������� � ���������.</p>";
 $langTeleconference_content="<p align='justify'>��� �� ������������ � ������������ ���� ��� ������������� � ���������.</p>";
 $browser = get_browser(null, true);
 if($browser['browser']!="IE")
 	$langTeleconference_content.="<p  align='justify'>� ������������ �������������� ���� �� ����� IE �� ������.</p>";

 $langWashVideo="����� ���������";
 $langPresantation_content="<p align='center'>��� �� ������������ ��� ���������� ��� �� �������� � ���������.</p>";
 $langWashPresanation="����� ���������";
 $langSaveChat="���������� ���������";
 $langSaveMessage="� �������� ������������ ��� �������.";
 $langSaveErrorMessage="� �������� ��� ������� �� ����������";
?>
