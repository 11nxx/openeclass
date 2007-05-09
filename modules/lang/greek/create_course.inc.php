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

// create_course.php
$langLn="������";
$langLogin = "�������";
$langDescription="���������";
$langDescrInfo="������� ��������� ��� ���������";
$langCreateSite="���������� ���� ���������";
$langFieldsRequ="��� �� ����� ����� �����������!";
$langFieldsOptional = "����������� �����";
$langFieldsOptionalNote = "���. �������� �� �������� ������������ ��� ��� �������� ����������� ��������";
$langTitle="������ ���������";
$langEx="�.�. <i>������� ��� ������</i>";
$langFac="����� / �����";
$langDivision = "������";
$langTargetFac="� ����� � �� ����� ��� �������� �� ������";
$langCode="������� ���������";
$langMax="�� �������� �������� ����� 12 ����������, �.�. <i>FYS1234</i>";
$langDoubt="�� ��� ������ �� ������ ��� ��������� ��������������";
$langProfessors="�����������(��)";
$langExplanation="���� �������� �����������, �� ������������ � ���������� ��� ��������� �� ������� ����������,
�������, �.��. ��� ����� �������� �� ������������� �������� ������� �� ��� ���������� ���.";
$langExFac = "* �� ���������� �� ������������� ������, �� ���� ����� ��� ���� ��� �������, ���� ������������� ��
��� ����� ���������� ��������������";
$langEmpty="������� ������ ����� ����.<br>������� �� ������� ���������޻ ��� browser ��� �������������.";
$langCodeTaken="����� � ������� ��������� ��������������� ���. ����������� �������� ������� ����.";
$langCreate="����������";
$langCourseKeywords = "������ �������:";
$langCourseKeywordsNote = "�.�. <i>������ �������</i>";
$langCourseAddon = "�������������� ��������:";

$langAccessType="�������� ���� ��� ���� 3 ������ ���������";
$langSubsystems="�������� ���� ��� �� ������������ ������ �� �������������� ��� ���� ���";
$langLanguageTip="�������� �� ���� ������ �� ������������ �� ������� ��� ���������";

$langAccess = "����� ���������:";
$langAvailableTypes = "���������� ����� ���������";
$langModules = "������������:";

// tables MySQL
$langForumLanguage="english";
$langTestForum="����������� ������� ����������";
$langDelAdmin="��������� ��� ���� ��� ��������� ����������� ��� ��������";
$langMessage="���� ���������� �� ����������� ������� ����������, �� ���������� ��� �� ����� ������.";
$langExMessage="���������� ���������";
$langAnonymous="��������";
$langExerciceEx="��������� �������";
$langAntique="������� ��� ������� ����������";
$langSocraticIrony="� ��������� �������� �����...";
$langManyAnswers="(������������ ��� ��� ���������� ������ �� ����� ������)";
$langRidiculise="������������ ��� ���������� ��� ����������� �� ���������� ��� ����� �����.";
$langNoPsychology="���, � ��������� �������� ��� ����� ���� ����������, ���� ���������� �� ��� �����������������.";
$langAdmitError="�������� ��� ����� ��� ��������� ���� �� ����������� �� ���������� ��� �� ����� �� ����.";
$langNoSeduction="���, � ��������� �������� ��� ����� ������� �����������, ���� ��������� ��� ����������.";
$langForce="������� ��� ���������� ���, �� ��� ����� ��������� ��� ������������, �� ���������� ��� ��� ����� �,�� ����������� ��� �����.";
$langIndeed="��������, � ��������� �������� ����� ��� ������� ����������.";
$langContradiction="����� ��� ����� ��� �������� ���������� ����������� �� ��������� ��� ���������� ��� �� ��������.";
$langNotFalse="� �������� ��� ����� ���������. ����� ������� ��� � ��������� ��� ������� ��� ���������� ��� ����������� �� ���������� ������������ ��� ���������� ��� ��� ������� ��������� ���.";

//  MySQL Table "accueil"
$langAgenda="�������";
$langLinks="���������";
$langDoc="�������";
$langVideo="������";
$langVideoLinks="��������������� ��������";
$langWorks="�������� ��������";
$langCourseProgram="��������� ���������";
$langAnnouncements="������������";
$langUsers="�������";
$langForums="������� ����������";
$langExercices="��������";
$langStatistics="����������";
$langAddPageHome="�������� �����������";
$langLinkSite="�������� ��������� ���� ������ ������";
$langModifyInfo="���������� ���������";
$langConference ="��������������";
$langDropBox = "����� ���������� �������";
$langLearnPath = "������ �������";
$langWiki = "Wiki";
$langToolManagement = "���������� ���������";
$langUsage = "���������� ������";
$langPoll="�����������";
$langSurvey="�������������� ���������� ������";
$langQuestionnaire = "��������������";
$langCourseDesc = "��������� ���������";

// Other SQL tables
$langVideoText="���������� ���� ������� RealVideo. �������� �� ��������� ����������� ���� ������� ������ (.mov, .rm, .mpeg...), ������ �� �������� ����� �� ���������� plug-in ��� �� �� ����";
$langGoogle="������� ��� ��������� ������� ����������";
$langIntroductionText="���������� ������� ��� ���������. ������������� �� �� �� ���� ���, �������� ���� ���� <b>������</b>.";
$langIntroductionTwo="���� � ������ ��������� ����������� ������� �� �������� ��� ������ ��� ������. �������� �� �������� ������ HTML, ���� �� ��� ����� �������.";
$langCourseDescription="������ ��� ��������� � ����� �� ����������� ��� �������� ��������� .";
$langProfessor="���������";
$langAnnouncementEx="���������� �����������. ���� � ��������� ��� ����� ����� ������������ ��� ��������� ������ �� ���������� ������������.";
$langJustCreated="����� ������������� �� �������� �� ������ �� ����� ";
$langEnter="�������";
 // Groups
$langGroups="������ �������";
$langCreateCourseGroups="������ �������";
$langCatagoryMain="����";
$langCatagoryGroup="���������� ������ �������";

//neos odhgos dhmiourgias mathimaton
$langEnterMetadata="(���.) �������� �� �������� �������� ��������� ��� ��������� ���� ��� �� ���������� '���������� ���������'";
$langCreateCourse="������ ����������� ���������";
$langCreateCourseStep="����";
$langCreateCourseStep2="���";
$langCreateCourseStep1Title="������ �������� ��� ����������� ���������";
$langCreateCourseStep2Title="��������������� ����������� ���������";
$langCreateCourseStep3Title="������������ ��� ����� ���������";
$langcourse_objectives="������ ��� ���������";
$langcourse_prerequisites="��������������� �������";
$langcourse_references="������������� ��������";
$langcourse_keywords="������ �������";
$langNextStep="������� ����";
$langPreviousStep="����������� ����";
$langFinalize="���������� ���������!";
$langCourseCategory="� ��������� ���� ����� ������ �� ������";
$langProfessorsInfo="������������� ��������� ��� ��������� ��������� �� ������� (�.�.<i>����� �����������, ������ �����������</i>)";

$langPublic="������� (�������� �������� ��� �� ������ ������ ����� �����������)";
$langPrivOpen="������� �� ������� (���������� �������� �� ������� �������)";
$langPrivate="������� (�������� ��� ������ ����� ���� �� ������� ��� ���������� ��� ����� �������)";
$langAlertTitle = "�������� ����������� ��� ����� ��� ���������!";
$langAlertProf = "�������� ����������� ��� ���������� ��� ���������!";
?>
