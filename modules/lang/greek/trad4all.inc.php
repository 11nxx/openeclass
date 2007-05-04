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

$langYes = "���";
$langNo = "���";

$iso639_2_code = "el";
$iso639_1_code = "ell";

$langNameOfLang['english']="�������";
$langNameOfLang['french']="��������";
$langNameOfLang['greek']="��������";

$charset = 'iso-8859-7';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$langDay_of_weekNames['init'] = array('�', '�', '�', '�', '�', '�', '�');
$langDay_of_weekNames['short'] = array('���', '���', '���', '���', '���', '���', '���');
$langDay_of_weekNames['long'] = array('�������', '�������', '�����', '�������', '������', '���������', '�������');

$langMonthNames['init']  = array('�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�');
$langMonthNames['short'] = array('���', '���', '���', '���', '���', '����', '����', '���', '���', '���', '���', '���');
$langMonthNames['long'] = array('����������', '�����������', '�������', '��������', '�����', '�������', '�������', '���������', '�����������', '���������', '���������', '����������');
$langMonthNames['fine'] = array('����������',
				'�����������',
				'�������',
				'��������',
				'�����',
				'�������',
				'�������',
				'���������',
				'�����������',
				'���������',
				'���������',
				'����������');


$dateFormatShort =  "%b %d, %y";
$dateFormatLong  = '%A, %d %B %Y';
$dateTimeFormatLong  = '%d %B %Y / ���: %R';
//$timeNoSecFormat = '%I:%M %p';
$timeNoSecFormat = '%R';

$langBack = "���������";
$langModify="������";
$langDelete="��������";
$langTitle="������";
$langHelp="�������";
$langOk="���������";
$langAddIntro="�������� ����������� ��������";
$langBackList="��������� ��� �����";
$langUser = "�������:";
$langProfessor = "���������";
$langLogout = "������";
$langNoAdminAccess = '
		<p><b>� ������
		��� ����������� �� ������ ������� �����
		������ ��� �����������.</b> <br/>�� ������� ��� ������������ �������� ���� ������ ������
		��� �� ���������� ������ ����������� �� ����� ���������. ���� ������ �� ��������
		���� ���������� URL � ���� ����� ��� ������� ��� (time-out).</p>
';

$langLoginRequired = '
		<p><b>��� ����� ������������� ��� ������ ��� ����������� �� ������. </b>
		�� ������� ��� ������������ �������� ���� ������ ������
		��� �� ���������� ��� ������, �� � ������� ����� ��������. </p>
';

$langSessionIsLost = "
		<p><b>� ������� ��� ���� �����. </b><br/>�� ������� ��� ������������ �������� ���� ������ ������
		��� �� ���������� ������ ����������� �� ����� ���������.</p>
			";

$langCheckProf = "
		<p><b>� �������� ��� ������������ �� ���������� ������� ���������� ��������. </b><br/>
		�� ������� ��� ������������ �������� ���� ������ ������
		��� �� ����������, ��� ����� � ��������� ��� �� ���� ���������.</p>
";

$langLessonDoesNotExist = "
	<p><b>�� ������ ��� ������������ �� ������������ ��� �������.</b><br/>
	���� ������ �� ��������� ���� ��� ��� ���������� ��� �� ��������� �������� � ���� �����������
	���� ���������.</p>
";

$langCheckAdmin = "
		<p><b>� �������� ��� ������������ �� ���������� ������� ���������� �����������. </b><br/>
		�� ������� ��� ������������ �������� ���� ������ ������
		��� �� ����������, ��� ����� � ������������ ��� ����������.</p>
";

$langCheckGuest = "
		<p><b>� �������� ��� ������������ �� ���������� ��� ����� ������ �� ���������� ��������� ������. </b><br/>
		��� ������ ��������� �� ������� ��� ������������ �������� ���� ������ ������
		��� �� ���������� ����.</p>
";

$langCheckPublicTools = "
		<p><b>������������ �� ���������� �������� �� ���������������� �������� ���������. </b><br/>
		��� ������ ��������� �� ������� ��� ������������ �������� ���� ������ ������
		��� �� ���������� ����.</p>
";

$langUserBriefcase = "������������ ������";
$langPersonalisedBriefcase = "��������� ������������";
$langEclass = "��������� ���������� �������������� eClass";
$langCopyrightFooter="����������� ����������� �����������";

$langGreek="��������";
$langEnglish="�������";
?>
