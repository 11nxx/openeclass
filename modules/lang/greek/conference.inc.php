<?php
/**===========================================================================
*              GUnet e-Class 2.0
*       E-learning and Course Management Program
* ===========================================================================
*       Copyright(c) 2003-2006  Greek Universities Network - GUnet
*       � full copyright notice can be read in "/info/copyright.txt".
*
*  Authors:     Dimitris Tsachalis <ditsa@ccf.auth.gr>
*
*       For a full list of contributors, see "credits.txt".
*
*       This program is a free software under the terms of the GNU
*       (General Public License) as published by the Free Software
*       Foundation. See the GNU License for more details.
*       The full license can be read in "license.txt".
*
*       Contact address:        GUnet Asynchronous Teleteaching Group,
*                                               Network Operations Center, University of Athens,
*                                               Panepistimiopolis Ilissia, 15784, Athens, Greece
*                                               eMail: eclassadmin@gunet.gr
============================================================================*/
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
?>
