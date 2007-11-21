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

/*********************************************
* about.inc.php
*********************************************/

$langIntro = "� ��������� <b>$siteName</b> ����� ��� ������������ ������� ����������� ������������ ��������� ��� ����������� ��� �������� ���������� �������������� ��� <a href=\"$InstitutionUrl\" target=\"_blank\" class=mainpage>$Institution</a>.";
$langVersion="������ ��� $siteName";
$langAboutText="� ������ ��� ���������� �����";
$langEclassVersion="2.0";
$langHostName="� ����������� ���� ����� ��������� � ��������� ����� � ";
$langWebVersion="X����������� ";
$langMySqlVersion="��� MySql  ";
$langNoMysql="� MySql ��� ���������� !";
$langUptime = "���������� ��� ���";
$langTotalHits = "��������� ����������";
$langLast30daysLogins = "��������� ���������� ���� ��������� ��� ���������� 30 �����";
$langTotalCourses = "������� ���������";
$langInfo = "��������� ����������";
$langAboutCourses = "� ��������� ����������� ��������";
$langAboutUsers = "H ��������� ��������";

#For the logged-out user:
$langAboutCourses1 = "���� �� ������, � ��������� �������� ��������";
$langAboutUsers1 = "�� ������������ ������� ����� ";
$langLast30daysLogins1 = "��� �� ��������� ���������� ���� ��������� ��� ���������� 30 ����� ����� ";
$langAnd = "���";
$langCourses = "��������";
$langClosed = "�������";
$langOpen = "�������";
$langSemiopen = "�������� �������";
$langUsers = "�������";
$langUser = "�������";
$langSupportUser = "��������� �����������:";

/********************************************
* addadmin.inc.php
*********************************************/

$langNomPageAddHtPass = "�������� �����������";
$langPassword = "�����������";
$langAdd = "��������";
$langNotFound = "��� �������";
$langWith = "��";
$langDone = "����� ������������.";
$langErrorAddaAdmin = "������: � ������� ��� ���������� ����� ������������. ������� �� ����� ��� ������������.";
$langInsertUserInfo = "�������� ��������� ������";

/****************************************************
* admin.inc.php
****************************************************/
// index
$langComments = "������";
$langAdmin = "�������� ����������� ����������";
$langAdminBy = "���������� ��� ";
$langState = "���������� �����������";
$langDevAdmin ="���������� ����� ���������";
$langNomPageAdmin 		= "����������";
$langSysInfo  			= "����������� ����������";
$langCheckDatabase  	= "������� ������ ����� ���������";
$langStatOf 			= "���������� ��� ";
$langSpeeSubscribe 		= "������� ��� ������������ ���������";
$langLogIdentLogout 	= "��������� ��� ������� ��� ������ ��� �� �������";
$langPlatformStats 		= "���������� ����������";
$langPlatformGenStats   = "������ ����������";
$langVisitsStats        = "���������� ����������";
$langMonthlyReport      = "�������� ��������";
$langReport             = "������� ��� �� ���� ";
$langNoReport           = "��� �������� ��������� �������� ��� �� ���� ";
$langEmailNotSend = "������ ���� ��� �������� e-mail ��� ���������";
$langFound = "��������";

$langListCours = "����� ��������� / ���������";
$langListUsersActions = "����� ������� / ���������";
$langSearchUser = "��������� ������";
$langInfoMail = "����������� email";
$langProfReg = "������� $langOfTeacher";
$langProfOpen = "�������� $langOfTeachers";
$langUserOpen = "�������� $langOfStudents";
$langPHPInfo = "����������� ��� ��� PHP";
$langManuals = "��������� ����������";
$langAdminManual = "���������� �����������";
$langConfigFile = "������ ���������";
$langDBaseAdmin = "���������� �.�. (phpMyAdmin)";
$langActions = "���������";
$langAdminProf = "���������� $langOfTeachers";
$langAdminUsers = "���������� �������";
$langAdminCours = "���������� ���������";

$langGenAdmin="���� ��������";
$langBackAdmin = "��������� ��� ������ �����������";

$langPlatformIdentity = "��������� ����������";
$langStoixeia = "�������� ����������";
$langThereAre = "��������";
$langOpenRequests = "�������� �������� ".$langsOfTeachers;
$langNoOpenRequests = "��� �������� �������� �������� ".$langsOfTeachers;
$langInfoAdmin  = "����������� �������� ��� ��� �����������";
$langLastLesson = "��������� ������ ��� �������������:";
$langLastProf = "��������� ������� ".$langsOfTeacher.":";
$langLastStud = "��������� ������� ".$langsOfStudent.":";
$langAfterLastLogin = "���� ��� ��������� ��� ������ ����� �������� ���� ���������:";
$langOtherActions = "����� ���������";

// Stat
$langStat4eClass = "���������� ����������";
$langNbProf = "������� ".$langsOfTeachers;
$langNbStudents = "������� ��������";
$langNbLogin = "������� �������";
$langNbCourses = "������� ���������";
$langNbVisitors = "������� ����������";
$langToday   ="������";
$langLast7Days ="���������� 7 �����";
$langLast30Days ="���������� 30 �����";
$langNbAnnoucement = "������� ������������";
$langNbUsers = "������� �������";
$langCoursVisible = "���������";
$langCoursType = "�����";
$langOthers = "������� ������";
$langCoursesPerDept = "������� ��������� ��� �����";
$langCoursesPerLang = "������� ��������� ��� ������";
$langCoursesPerVis= "������� ��������� ��� ��������� ����������";
$langCoursesPerType= "������� ��������� ��� ���� ���������";
$langUsersPerCourse= "������� ������� ��� ������";
$langErrors = "��������:";
$langMultEnrol = "��������� �������� �������";
$langMultEmail= "��������� ���������� ����������� e-mail";
$langMultLoginPass = "�������� ����� LOGIN - PASS";
$langOk = "�������";
$langNumUsers = "������� ������������� ���� ���������";
$langNumGuest = "������� ����������";
$langAddAdminInApache ="�������� �����������";
$langRestoreCourse = "�������� ���������";
$langStatCour = "�������� �������� ���������";
$langNumCourses = "������� ���������";
$langNumEachCourse = "������� ��������� ��� �����";
$langNumEachLang = "������� ��������� ��� ������";
$langNunEachAccess = "������� ��������� ��� ���� ���������";
$langNumEachCat = "������� ��������� ��� ���� ���������";
$langAnnouncements = "������������";
$langNumEachRec = "������� �������� ��� ������";
$langFrom = "���";
$langNotExist = "��� ��������!";
$langExist = "��������!";
$langResult =" ����������";
$langMultiplePairs = "�������� �����";
$langMultipleAddr = "��������� ���������� �����������";
$langMultipleUsers = "��������� �������� �������";
$langAlert = "������ ��������";
$langServerStatus ="��������� ��� ��������� Mysql : ";
$langDataBase = "���� ��������� ";
$langLanguage ="������";
$langUpgradeBase = "���������� ����� ���������";
$langCleanUp = "�������� ������ �������";

// listusers
$langBegin="����";
$langEnd = "�����";
$langPreced50 = "������������ 50";
$langFollow50 = "�������� 50";
$langAll="����";
$langNoSuchUsers = "��� �������� ������� ������� �� �� �������� ��� �������";

// listcours
$langOpenCourse = "�������";
$langClosedCourse = "�������";
$langRegCourse = "���������� �������";

// quotacours
$langQuotaAdmin = "���������� ������������� ����� ���������";
$langQuotaSuccess = "� ������ ����� �� ��������";
$langQuotaFail = "� ������ ��� �����!";
$langMaxQuota = "���� ������� ��������� ������������ ����";
$langLegend = "��� �� ����������";
$langDropbox = "����� ���������� �������";
$langVideo = "������";
$langGroup = "������ �������";

// Added by vagpits
// General
$langReturn = "���������";
$langReturnToSearch = "��������� ��� ������������ ����������";
$langReturnSearch = "��������� ���� ���������";
$langNoChangeHappened = "��� ���������������� ����� ������!";

// addfaculte
$langFaculteCatalog = "��������� ������";
$langFaculteDepartment = "����� / �����";
$langFaculteDepartments = "������ / �������";
$langManyExist = "��������";
$langReturnToAddFaculte = "��������� ���� �������� ��������";
$langReturnToEditFaculte = "��������� ���� ����������� ��������";
$langFaculteAdd = "�������� ��������";
$langFaculteDel = "�������� ��������";
$langFaculteEdit = "����������� ��������� ��������";
$langFaculteIns = "�������� ��������� ��������";
$langAcceptChanges = "��������� �������";
$langEditFacSucces = "� ����������� ��� ��������� ������������ �� ��������!";

// addusertocours
$langQuickAddDelUserToCours = "������� ������� - �������� ".$langsOfStudents." - ".$langsOfTeachers;
$langQuickAddDelUserToCoursSuccess = "� ���������� ������� ������������ �� ��������!";
$langFormUserManage = "����� ����������� �������";
$langListNotRegisteredUsers = "����� �� ������������� �������";
$langListRegisteredStudents = "����� ������������� ".$langOfStudents;
$langListRegisteredProfessors = "����� ������������� ".$langOfTeachers;

// delcours
$langCourseDel = "�������� ���������";
$langCourseDelSuccess = "�� ������ ���������� �� ��������!";
$langCourseDelConfirm = "����������� ��������� ���������";
$langCourseDelConfirm2 = "������ ������� �� ���������� �� ������ �� ������";
$langNoticeDel = " � �������� ��� ��������� �� ��������� ������ ���� �������������� �������� ��� �� ������, ��� ����������� ��� ��������� ��� �����, ����� ��� ��� �� ����� ��� ���������.";

// editcours
$langCourseEdit = "����������� ���������";
$langCourseInfo = "�������� ���������";
$langQuota = "���� ������������� �����";
$langCourseStatus = "��������� ���������";
$langCurrentStatus = "�������� ���������";
$langListUsers = "����� �������";
$langCourseDelFull = "�������� ���������";
$langTakeBackup = "���� ���������� ���������";
$langStatsCourse = "���������� ���������";

// infocours.php
$langCourseEditSuccess = "�� �������� ��� ��������� ������� �� ��������!";
$langCourseInfoEdit = "������ ��������� ���������";

// listreq.php
$langOpenProfessorRequests = "�������� �������� ".$langOfTeachers;
$langProfessorRequestClosed = "� ������ ��� ".$langsOfTeacher." �������!";
$langReqHaveClosed = "�������� ��� ����� �������";
$langReqHaveBlocked = "�������� ��� ����� ����������";
$langReqHaveFinished = "�������� ��� ����� �����������";
$langemailsubjectBlocked = "�������� ������� �������� ���� ��������� ���������� ��������������";
$langemailbodyBlocked = "� ������ ��� ��� ������� ���� ��������� ".$siteName." �����������.";
$langCloseConf = "����������� ����������� �������";

// mailtoprof.php
$langSendMessageTo = "�������� ���������";
$langToAllUsers = "�� ����� ���� �������";
$langProfOnly = "���� ����� �����������";

// searchcours.php
$langSearchCourse = "��������� ���������";
$langNewSearch = "��� ���������";
$langSearchCriteria = "�������� ����������";
$langSearch = "���������";

// statuscours.php
$langCourseStatusChangedSuccess = "� ����� ��������� ��� ��������� ������ �� ��������!";
$langCourseStatusChange = "������ ����� ��������� ���������";

// authentication
$langMethods = "������� ������ ������������:";
$langAuthActivate = "������������";
$langAuthDeactivate = "��������������";
$langChooseAuthMethod = "�������� ��� ����� ������������ ������� ��� ��������� ��� ��������� ���";
$langConnYes = "�������� �������";
$langConnNo = "H ������� ��� ����������";
$langAuthNoValidUser = "�� ������� �������.������� � �������";
$langConnTest = "������� ������ ��� ������ ������������...";
$langAuthMethod = "������ ������������ �������";
$langdbhost = "����������� Database";
$langdbname = "����� Database";
$langdbuser = "������� Database";
$langdbpass = "����������� ������ Database";
$langdbtable = "����� ������ Database";
$langdbfielduser = "����� ������ ������ ���� ������";
$langdbfieldpass = "����� ������ ������������ ������ ���� ������";
$langInstructions = "������� ����������� ��� ������";
$langTestAccount = "��� �� ������������� � ������ ������������ ����� ���������� �� ������ ��� ����������� ����� �� ��� ���������� ��� ������� ��� ���������";
$langpop3host = "����������� POP3";
$langpop3port = "����� ��������� POP3";
$langimaphost = "����������� IMAP";
$langimapport = "����� ��������� IMAP";
$langldap_host_url = "����������� LDAP";
$langldap_bind_dn = "�������� ��� LDAP binding";
$langldap_bind_user = "Username ��� LDAP binding";
$langldap_bind_pw = "Password ��� LDAP binding";
$langUserAuthentication = "����������� �������";
$langSearchCourses = "��������� ���������";
$langActSuccess = "����� �������������� ��� ";
$langDeactSuccess = "����� ���������������� ��� ";
$langThe = "� ";
$langActFailure = "��� ������ �� �������������, ����� ��� ����� ��������� ��� ��������� ��� ������ ������������";
$langLdapNotWork = "������������: � php ��� ����������� ldap. ����������� ��� � ldap ���������� ����� ������������� ��� ��������������.";

// other
$langVisitors = "����������";
$langVisitor = "����������";
$langOther = "����";
$langTotal = "������";
$langProperty = "��������";
$langStat = "����������";
$langNoUserList = "��� �������� ������������ ���� ��������";
$langContactAdmin = "�������� ������������ email ���� �����������";
$langActivateAccount = "�������� �� �������������� �� ���������� ���";
$langLessonCode = "������� ���������";

// unregister
$langConfirmDelete = "����������� ���������";
$langConfirmDeleteQuestion1 = "������ ������� �� ���������� ��� ������";
$langConfirmDeleteQuestion2 = "��� �� ������ �� ������";
$langTryDeleteAdmin = "������������ �� ���������� ��� ������ �� user id = 1(Admin)!";
$langUserWithId = "� ������� �� id";
$langWasDeleted = "����������";
$langWasAdmin = "���� ������������";
$langWasCourseDeleted = "���������� ��� �� ������";
$langErrorDelete = "������ ���� �� �������� ��� ������";
$langAfter = "���� ���";
$langBefore = "���� ���";
$langUserType = "����� ������";

// search
$langSearchUsers = "��������� �������";
$langInactiveUsers = "�� ������� �������";
$langAddSixMonths = "�������� ������:6 �����";

// eclassconf
$langRestoredValues = "��������� ������������ �����";
$langEclassConf = "������ ��������� ��� $siteName";
$langFileUpdatedSuccess = "�� ������ ��������� ������������� �� ��������!";
$langFileEdit = "����������� �������";
$langFileError = "�� ������ config.php ��� ������� �� ���������! ������� �� ���������� ���������.";
$langReplaceBackupFile = "������������� ��� config_backup.php.";
$langencryptedPasswd = "����������� ������������� ��� ������������";

// admin announcements
$langAdminAn = "������������ �����������";
$langAdminAddAnn = "�������� ����������� �����������";
$langAdminModifAnn = "����������� ����������� �����������";
$langAdminAnnModify = "� ���������� ����������� �������������";
$langAdminAnVis = "�����";
$langAdminAnnAdd = "� ���������� ����������� ����������";
$langAdminAnnDel = "� ���������� ����������� �����������";
$langAdminAnnMes = "������������ ���";

$langAdminAnnTitleEn = "������ (�������)";
$langAdminAnnBodyEn = "���������� (�������)";
$langAdminAnnCommEn = "������ (�������)";

// cleanup.php
$langCleanupOldFiles = '���������� ������� �������';
$langCleaningUp = '���������� ������� ����������� ��� %s %s ���� ����������� %s';
$langDaySing = '�����';
$langDayPlur = '������';
$langCleanupInfo = '� ���������� ���� �� ��������� �� ����� ������ ��� ���� ������������� "temp", "archive", "garbage", ���"tmpUnzipping". ����� �������?';
$langCleanup = '����������';

/**********************************************************
* agenda.inc.php
**********************************************************/

$langModify="������";
$langAddModify="�������� / ������";
$langAddIntro="�������� ����������� ��������";
$langBackList="��������� ���� ��������";
$langEvents="��������";
$langAgenda="�������";
$langDay="����";
$langMonth="�����";
$langYear="����";
$langHour="���";
$langHours = "����";
$langMinute ="�����";
$langLasting="��������";
$langDateNow = "�������� ����������:";
$langCalendar = "����������";
$langAddEvent="�������� ���� ���������";
$langDetail="������������";
$langChooseDate = "�������� ����������";
$langOldToNew = "���������� ������ �����������";
$langStoredOK="�� ������� ������������";
$langDeleteOK="�� ������� ����������";
$langNoEvents = "��� �������� ��������";
$langSureToDel = "����� �������� ��� ������ �� ���������� �� ������� �� �����";
$langDelete = "��������";

// week days
$langDay_of_weekNames = array();
$langDay_of_weekNames['init'] = array('�', '�', '�', '�', '�', '�', '�');
$langDay_of_weekNames['short'] = array('���', '���', '���', '���', '���', '���', '���');
$langDay_of_weekNames['long'] = array('�������', '�������', '�����', '�������', '������', '���������', '�������');

// month names
$langMonthNames = array();
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

/***********************************************************
* announcements.inc.php
************************************************************/

$langOn="��";
$langRegUser="�������������� ������� ��� ���������";
$langUnvalid="����� ����� ��������� email � ��� ����� �������";
$langModifAnn="������ ��� �����������";
$langAnnouncement = "����������";
$langMove = "����������";
$langAnnEmpty="�� ����������� ��� ��������� ������������ ������������";
$langAnnModify="� ���������� ������";
$langAnnAdd="� ���������� ����������";
$langAnnDel="� ���������� ����������";
$langPubl="���������� ���";
$langAddAnn="�������� �����������";
$langContent="�����������";
$langAnnTitle = "������ �����������";
$langAnnBody = "���� �����������";
$langEmptyAnn="�������� ��������� ������������";
$professorMessage="������ $langsOfTeacher";
$langEmailSent=" ��� �������� ����� �������������� �������";
$langEmailOption="�������� (�� email) ��� ����������� ����� �������������� �������";
$langUp = "�����";
$langDown = "����";
$langNoAnnounce = "��� �������� ������������";
$langSureToDelAnnounce = "����� �������� ��� ������ �� ���������� ��� ����������";
$langSureToDelAnnounceAll = "����� �������� ��� ������ �� ���������� ���� ��� ������������";

// my announcements
$langAnn = "������������ ���";

/*******************************************
* archive_course.inc.php
*******************************************/

$langArchiveCourse = "��������� ���������";
$langCreatedIn = "������������� ���";
$langCreateMissingDirectories ="���������� ��� ��������� ��� �������";
$langCopyDirectoryCourse = "��������� ��� ������� ��� ���������";
$langDisk_free_space = "��������� �����";
$langBuildTheCompressedFile ="2� - ���������� ��� ������� ���������� ���������";
$langFileCopied = "������ �������������";
$langArchiveLocation="���������";
$langSizeOf ="������� ���";
$langArchiveName ="�����";
$langBackupSuccesfull = "������������� �� �������� �� ��������� ���������!";
$langBUCourseDataOfMainBase = "��������� ��������� ��� ��������� ��� ���������";
$langBUUsersInMainBase = "��������� ��������� ��� ������� ��� ���������";
$langBUAnnounceInMainBase="��������� ��������� ��� ������������ ��� ���������";
$langBackupOfDataBase="��������� ��������� ��� ����� ��������� ��� ���������";
$langDownloadIt = "��������� �� ";
$langBackupEnd = "������������ �� ��������� ��������� �� �����";

/*********************************************
* auth_methods.inc.php
**********************************************/
$langViaeClass = "���� ����������";
$langViaPop = "�� ����������� ���� POP3";
$langViaImap = "�� ����������� ���� IMAP";
$langViaLdap = "�� ����������� ���� LDAP";
$langViaDB = "�� ����������� ���� ����� ����� ���������";
$langHasActivate = "O ������ ������������ ��� ���������, ���� �������������";
$langAlreadyActiv = "O ������ ������������ ��� ���������, ����� ��� ���������������";
$langErrActiv ="������! � ������ ������������ ��� ������ �� �������������";
$langAuthSettings = "��������� ������������";
$langWrongAuth = "��������������� ����� ����� ������ / �����������";

/************************************************************
 * conference.inc.php
 *
 * @author Dimitris Tsachalis <ditsa@ccf.auth.gr>
 * @version $Id$
 *
 * @abstract
 ******************************************************************/

 $langConference = "��������������";
 $langWash = "���������";
 $langWashFrom = "� �������� �������� ���";
 $langSave = "����������";
 $langClearedBy = "���������� ���";
 $langChatError = "��� ����� ������� �� ��������� � ������� ��������������";
 $langsetvideo="��������� ����������� ������";
 $langButtonVideo="��������";
 $langButtonPresantation="��������";
 $langconference="������������ �������������";
 $langpresantation="��������� ����������� �����������";
 $langVideo_content="<p align='justify'>��� �� ������������ �� ������ ���� �� ������������� � $langsTeacher.</p>";
 $langTeleconference_content1 = "<p align='justify'>��� �� ������������ � ������������ ���� ��� ������������� � $langsTeacher.</p>";
 $langTeleconference_content_noIE="<p align='justify'>� ������������ �������������� ���� �� ����� IE �� ������.</p>";
 $langWashVideo="����� ���������";
 $langPresantation_content="<p align='center'>��� �� ������������ ��� ���������� ��� �� �������� � $langsTeacher.</p>";
 $langWashPresanation="����� ���������";
 $langSaveChat="���������� ���������";
 $langSaveMessage="� �������� ������������ ��� �������";
 $langSaveErrorMessage="� �������� ��� ������� �� ����������";

/*****************************************************************
* copyright.inc.php
******************************************************************/

$langCopyright = "����������� ����������� �����������";
$langCopyrightNotice = '
eClass � 2003 - 2007 <a href="http://www.gunet.gr/" target=_blank>���������� ��������� GUnet</a>.<br>&nbsp;<br>
� <a href="http://portal.eclass.gunet.gr" target=_blank>��������� eClass</a>
����� ��� ������������ ������� ����������� ������������ ��������� ��� ��������
��� ������� ��� ����������� ���������� GUnet ��� ��� ���������� ��� ���������
���������� ��������������. A���������� ��� ������������� ������ ��� ��� �����
���������� �������������� ��� GUnet ��� <a
href="http://download.eclass.gunet.gr" target="_blank">���������� ��������</a>
�� ��������� �������� ������ ������� �� �� ������ ������� ����� GNU General
Public License (GNU GPL).<br><br>
�� ����������� ��� ������������ ��������� ��� ��������� � ��������� eClass, ����� ��� �� ���������� ���������� ��� ������ �����, ������� ����� ���������� ���� ��� �� GUnet ��� ��������� ���������� �� ����. ��� ����������� ����� � ������������� ��� ������������ ����������� ������������� �� ���� ���������� ��� ����������� M��������.
';

/*******************************************************
* course_description.inc.php
*******************************************************/
$langCourseProgram = "��������� ���������";
$langThisCourseDescriptionIsEmpty = "�� ������ ��� �������� ���������";
$langEditCourseProgram = "���������� ��� ��������";
$langQuestionPlan = "������� ���� ����������";
$langInfo2Say = "���������� ��� ���� ��������";
$langAddCat = "���������";
$langBackAndForget ="������� ��� ���������";
$langBlockDeleted = "� �������� ��������� ����������!";

/********************************************************
* course_home.inc.php
*********************************************************/
$langAdminOnly="���� ��� ������������";
$langInLnk="����������������� ���������";
$langDelLk="������ ���������� �� ���������� ����� ��� �������� ?";
$langRemove="��������";
$langEnter ="�������";
$langUpdate = "������ ������";
$langIcon = "���������";
$langNameOfTheLink ="����� ���������";
$langRegistered = "�������������";
$langIdentity = "��������� ���������";

/*********************************************
* course_info.inc.php
*********************************************/
$langCourseIden = "��������� ���������";
$langBackupCourse="��������� ��������� ��� ���������";
$langModifInfo="���������� ���������";
$langModifDone="� ���������� ���� �������";
$langHome="��������� ���� ������ ������";
$langCode="�������";
$langDelCourse="�������� ��� ���������";
$langDelUsers="�������� ������� ��� �� ������";
$langCourseTitle="������ ���������";
$langFaculty="�����";
$langDescription="���������";
$langConfidentiality="�������� ��� ������";
$langPrivOpen="������� �� ������� (���������� �������� �� ������� �������)";
$langForbidden="�� ��������� ��������";
$langConfTip="�������� ��� ���� ��������� ��� ��������� ��� ���� �������.";
$langOptPassword = "����������� �����������: ";

// delete_course.php
$langModifGroups="������ ��������";
$langTheCourse="T� ������";
$langHasDel="���� ���������";
$langByDel="������������ �� ������ �� ���������� ������ ��� �� ����������� ��� ��� ���� �� �������� ��� ����� ��������� �� ���� (��� �� ���������� ��� �� ���� ��������).<p>������ �������� �� ���������� ��";
$langTipLang="�������� ��� ������ ���� ����� �� ������������ �� �������� ��� ���������.";

// deluser_course.php
$langConfirmDel = "����������� ��������� ���������";
$langUserDel="��������� �� ���������� ����� ���� �������� ��� �� ������ (��� �� ���������� ��� �� ���� ��������).<p>������ �������� �� ����������� ��� �������� ���� ��� �� ������";

// refresh course.php
$langRefreshCourse = "�������� ���������";
$langRefreshInfo="����������� �� ������������� �� ������ ��� ��� ��� ����� �������� �������� �� ���������� �� ����� �����������. �������� ����� ��������� ������ �� ����������������.";
$langUserDelCourse="�������� ������� ��� �� ������";
$langUserDelNotice = "���.: �� ������� ��� �� ���������� ��� ���� ��������";
$langAnnouncesDel = "�������� ������������ ��� ���������";
$langAgendaDel = "�������� �������� ��� ��� ������� ��� ���������";
$langHideDocuments = "�������� ��� �������� ��� ���������";
$langHideWork = "�������� ��� �������� ��� ���������";
$langSubmitActions = "�������� ���������";
$langOptions = "��������";
$langRefreshSuccess = "� �������� ��� ��������� ���� ��������. ������������ �� ��������� ���������:";
$langUsersDeleted="�� ������� ����������� ��� �� ������";
$langAnnDeleted="�� ������������ ����������� ��� �� ������";
$langAgendaDeleted="�� �������� ��� �������� ����������� ��� �� ������";
$langWorksDeleted="�� �������� �����������������";
$langDocsDeleted="�� ������� �����������������";


/****************************************************
* create_course.inc.php
*****************************************************/
$langDescrInfo="������� ��������� ��� ���������";
$langCreateSite="���������� ���� ���������";
$langFieldsRequ="��� �� ����� ����� �����������!";
$langFieldsOptional = "����������� �����";
$langFieldsOptionalNote = "���. �������� �� �������� ������������ ��� ��� �������� ����������� ��������";
$langEx="�.�. <i>������� ��� ������</i>";
$langFac="����� / �����";
$langDivision = "������";
$langTargetFac="� ����� � �� ����� ��� �������� �� ������";
$langDoubt="�� ��� ������ �� ������ ��� ��������� ��������������";
$langExFac = "* �� ���������� �� ������������� ������, �� ���� ����� ��� ���� ��� �������, ���� ������������� ��
��� ����� ���������� ��������������";
$langEmpty="������� ������ ����� ����.<br>������� �� ������� ���������޻ ��� browser ��� �������������.";
$langCodeTaken="����� � ������� ��������� ��������������� ���. ����������� �������� ������� ����.";
$langCreate="����������";
$langCourseKeywords = "������ �������:";
$langCourseKeywordsNote = "�.�. <i>������ �������</i>";
$langCourseAddon = "�������������� ��������:";
$langErrorDir = "� ������������ ��� ��������� ��� ������������� ��� �� ������ ��� �� ������������! <br><br>������� �� ���������� ��������� ��� ��������� <em>courses</em>.";
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

$langDoc="�������";
$langVideoLinks="��������������� ��������";
$langWorks="��������";
$langForums="������� ����������";
$langExercices="��������";
$langAddPageHome="�������� �����������";
$langLinkSite="�������� ��������� ���� ������ ������";
$langModifyInfo= "���������� ���������";
$langDropBox = "��������� �������";
$langLearnPath = "������ �������";
$langWiki = "������� Wiki";
$langToolManagement = "������������ ���������";
$langUsage = "���������� ������";
$langStats="����������";
$langVideoText="���������� ���� ������� RealVideo. �������� �� ��������� ����������� ���� ������� ������ (.mov, .rm, .mpeg...), ������ �� �������� ����� �� ���������� plug-in ��� �� �� ����";
$langGoogle="������� ��� ��������� ������� ����������";
$langIntroductionText="���������� ������� ��� ���������. ������������� �� �� �� ���� ���, �������� ���� ���� <b>������</b>.";
$langIntroductionTwo="���� � ������ ��������� ����������� ������� �� �������� ��� ������ ��� ������. �������� �� �������� ������ HTML, ���� �� ��� ����� �������.";
$langProfessor="���������";
$langJustCreated="����� ������������� �� �������� �� ������ �� ����� ";

 // Groups
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
$langcourse_references="�������������� ��������";
$langcourse_keywords="������ �������";
$langNextStep="������� ����";
$langPreviousStep="����������� ����";
$langFinalize="���������� ���������!";
$langCourseCategory="� ��������� ���� ����� ������ �� ������";
$langProfessorsInfo="������������� $langsOfTeachers ��� ��������� ��������� �� ������� (�.�.<i>����� �����������, ������ �����������</i>)";
$langPublic="������� (�������� �������� ��� �� ������ ������ ����� �����������)";
$langPrivate="������� (�������� ��� ������ ����� ���� �� ������� ��� ���������� ��� ����� �������)";
$langAlertTitle = "�������� ����������� ��� ����� ��� ���������!";
$langAlertProf = "�������� ����������� ��� ���������� ��� ���������!";

/******************************************************
* document.inc.php
******************************************************/
$langUpload = "��������";
$langDownloadFile= "�������� ������� ���� ���������";
$langCreateDir="���������� ���������";
$langName="�����";
$langNameDir="����� ��� ���������� ���������";
$langSize="�������";
$langDate="����������";
$langMoveFrom = "���������� ��� �������";
$langRename="�����������";
$langOkComment="��������� �������"; 
$langVisible="����� / ������";
$langCopy="���������";
$langNoSpace="� �������� ��� ������� �������. ����� ������� �� ������� ���������
	����. ��� ������������ �����������, ������������� �� �� ����������� ��� ����������.";
$langUnwantedFiletype='�� ��������� ����� �������';
$langDownloadEnd="�� �������� ������������";
$langFileExists="��� ����� ������ � ����������.<br>������� ��� ��� ������ �� �� ���� �����.";
$langDocCopied="T� ������� �����������";
$langDocDeleted="�� ������� ����������";
$langElRen="� ����������� �����";
$langDirCr="� ��������� �������������";
$langDirMv="� ���������� ������������";
$langComMod="�� ������ ��������������";
$langIn="���";
$langNewDir="����� ��� ���������� ���������";
$langImpossible="��� ����� ������ � ����������";
$langViMod="� ��������� ��� �������� ������";
$langMoveOK="�������� ��������!";
$langMoveNotOK="�������� ����������";

// Special for group documents
$langGroupSpace="������� ������ �������";
$langGroupSpaceLink="����� �������";
$langGroupForumLink="������� ���������� ������ �������";
$langZipNoPhp="�� ������ zip ��� ������ �� �������� ������ .php";
$langUncompress="����������� ��� ������� (.zip) ���� ��������� <small>(*)</small>";
$langDownloadAndZipEnd="�� ������ .zip ������� ��� ��������������";
$langPublish = "����������";
$langParentDir = "������ ��������";
$langNoticeGreek = "(*) �������! �� ����� ��� ������� ��� ������ �� �������� ���������� ����������";
$langInvalidDir = "����� � �� ������� ����� ���������";

//prosthikes gia v2 - metadata
$langCategory="���������";
$langCreatorEmail="��. ��������� ���������";
$langFormat="�����-���������";
$langSubject="����";
$langAuthor="����������";
$langCopyrighted="���������� ����������";
$langCopyrightedFree="��������";
$langCopyrightedNotFree="�������������";
$langCopyrightedUnknown="�������";
$langChangeMetadata="������ ����������� ��������";
$langEditMeta="�����������<br>�����������";
$langCategoryExcercise="������";
$langCategoryEssay="�������";
$langCategoryDescription="��������� ���������";
$langCategoryExample="����������";
$langCategoryTheory="������";
$langCategoryLecture="�������";
$langCategoryNotes="����������";
$langCategoryOther="����";
$langNotRequired = "� ���������� ��� ������ ����� �����������";
$langCommands = "���������";
$langQuotaBar = "���������� ������������� �����";
$langQuotaUsed = "����������������� �����";
$langQuotaTotal = "��������� ���������� �����";
$langQuotaPercentage = "������� ������";

$langEnglish = "�������";
$langFrench = "�������";
$langGerman = "���������";
$langGreek = "��������";
$langItalian = "�������";
$langSpanish = "��������";
$langDirectory = "���������";


/*************************************************
* dropbox.inc.php
*************************************************/
$dropbox_lang["dropbox"] = '����� ���������� �������';
$dropbox_lang["help"] = '�������';
$dropbox_lang['aliensNotAllowed'] = "���� �� ������������� ������� ���� ��������� ������� �� ������������� �� dropbox. ��� ����� ������������� ������� ���� ���������.";
$dropbox_lang['queryError'] = "Error in database query. �������� ������������� �� ��� ����������� ��� ����������.";
$dropbox_lang['generalError'] = "������������� ������. ����������� ������������� �� ��� ����������� ��� ����������.";
$dropbox_lang['badFormData'] = "� �������� ��� ������� �������: �� �������� ���� �� ����� �����. ����������� ������������� �� ��� ����������� ��� ����������.";
$dropbox_lang['noUserSelected'] = "����������� �������� �� ������ ���� ����� ������ �� ������ �� ������.";
$dropbox_lang['noFileSpecified'] = "��� ����� �������� ������ ������ ��� �� ���������.";
$dropbox_lang['tooBig'] = "��� ����� �������� ������ ������ �� ��������� � �� ������ ���������� �� ��������� ���� �� �������.";
$dropbox_lang['uploadError'] = "������������� ������ ���� �� �������� ��� �������. ����������� ������������� �� ��� ����������� ��� ����������.";
$dropbox_lang['errorCreatingDir'] = "������������� ������ ���� �� ���������� ���������. ����������� ������������� �� ��� ����������� ��� ����������.";
$dropbox_lang['installError'] = "Can't install the necessary tables for the dropbox module. �������� ������������� �� ��� ����������� ����������.";
$dropbox_lang['quotaError'] = "����� ��������� �� ������� �������� ��������� ������� �������! �� �������� ��� ������� ��� ����������������.";
$dropbox_lang['uploadFile'] = "�������� �������";
$dropbox_lang['authors'] = "����������";
$dropbox_lang['description'] = "��������� �������";
$dropbox_lang['sendTo'] = "�������� ����/����";
$dropbox_lang['receivedTitle'] = "����������� ������";
$dropbox_lang['sentTitle'] = "����������� ������";
$dropbox_lang['confirmDelete1'] = "��������: �� ������ ";
$dropbox_lang['confirmDelete2'] = " �� ���������� ���� ��� ��� �������� ���";
$dropbox_lang['all'] = "��������: �� ������ �� ����������� ���� ��� ��� �������� ���";
$dropbox_lang['workDelete'] = "�������� ��� ��� ��������";
$dropbox_lang['sentBy'] = "�������� ��� ���/���";
$dropbox_lang['sentTo'] = "�������� ����/����";
$dropbox_lang['sentOn'] = "���";
$dropbox_lang['anonymous'] = "��������";
$dropbox_lang['ok'] = "��������";
$dropbox_lang['lastUpdated'] = "��������� ��������� ���";
$dropbox_lang['lastResent'] = "Last resent on";
$dropbox_lang['tableEmpty'] = "� ��������� ����� �����.";
$dropbox_lang['overwriteFile'] = "������ �� ��������������� �� ����������� ������ ��� ��������;";
$dropbox_lang['orderBy'] = "���������� �� ����";
$dropbox_lang['lastDate'] = "��� ��������� ���������� ���������";
$dropbox_lang['firstDate'] = "��� ����� ���������� ���������";
$dropbox_lang['title'] = "��� �����";
$dropbox_lang['size'] = "�� ������� ��� �������";
$dropbox_lang['author'] = "��� ����������";
$dropbox_lang['sender'] = "��� ���������";
$dropbox_lang['file'] = "������";
$dropbox_lang['fileSize'] = "�������";
$dropbox_lang['date'] = "����������";
$dropbox_lang['col_recipient'] = "����������";
$dropbox_lang['recipient'] = "��� ���������";
$dropbox_lang['docAdd'] = "�� ������ �������� �� ��������";
$dropbox_lang['fileDeleted'] = "�� ���������� ������ ���� ��������� ��� �� ���� ���������� �������.";
$dropbox_lang['backList'] = "��������� ��� ���� ���������� �������";
$dropbox_lang["mailingAsUsername"] = "Mailing ";
$dropbox_lang["mailingInSelect"] = "---Mailing---";
$dropbox_lang["mailingSelectNoOther"] = "� �������� ��������� ��� ������ �� ���������� �� �������� �� ������ ����������";
$dropbox_lang["mailingNonMailingError"] = "Mailing cannot be overwritten by non-mailing and vice-versa";
$dropbox_lang["mailingExamine"] = "Examine mailing zip-file";
$dropbox_lang["mailingNotYetSent"] = "Mailing content files have not yet been sent out...";
$dropbox_lang["mailingSend"] = "Send content files";
$dropbox_lang["mailingConfirmSend"] = "Send content files to individual destinations ?";
$dropbox_lang["mailingBackToDropbox"] = "(back to Dropbox main window)";
$dropbox_lang["mailingWrongZipfile"] = "Mailing must be zipfile with STUDENTID or LOGINNAME";
$dropbox_lang["mailingZipEmptyOrCorrupt"] = "Mailing zipfile is empty or not a valid zipfile";
$dropbox_lang["mailingZipPhp"] = "Mailing zipfile must not contain php files - it will not be sent";
$dropbox_lang["mailingZipDups"] = "Mailing zipfile must not contain duplicate files - it will not be sent";
$dropbox_lang["mailingFileFunny"] = "no name, or extension not 1-4 letters or digits";
$dropbox_lang["mailingFileNoPrefix"] = "name does not start with ";
$dropbox_lang["mailingFileNoPostfix"] = "name does not end with ";
$dropbox_lang["mailingFileNoRecip"] = "name does not contain any recipient-id";
$dropbox_lang["mailingFileRecipNotFound"] = "no such student with ";
$dropbox_lang["mailingFileRecipDup"] = "multiple users have ";
$dropbox_lang["mailingFileIsFor"] = "is for ";
$dropbox_lang["mailingFileSentTo"] = "sent to ";
$dropbox_lang["mailingFileNotRegistered"] = " (not registered for this course)";
$dropbox_lang["mailingNothingFor"] = "Nothing for";
$dropbox_lang['justUploadInSelect'] = "--- �������� ������� ---";
$dropbox_lang['justUploadInList'] = "�������� ������� ��� ���/���";
$dropbox_lang['mailingJustUploadNoOther'] = "�� �������� ������� ��� ������ �� ���������� �� �������� �� ������ ����������";

/**********************************************************
* exercice.inc.php
**********************************************************/

$langQuestion="�������";
$langQuestions="���������";
$langAnswer="��������";
$langAnswers="����������";
$langComment="������";
$langMaj="���������";
$langEvalSet="��������� �����������";
$langExercice="������";
$langActive="������";
$langInactive="�� ������";
$langActivate="������������";
$langDeactivate="��������������";
$langNoEx="���� �� ������ ��� ������� ������";
$langNewEx="��������� ������";
$langExerciseType="����� ��������";
$langExerciseName="'����� �������";
$langExerciseDescription="��������� �������";
$langSimpleExercise="�� ��� ���� ������";
$langSequentialExercise="�� ��� ������� ��� ������ (��� �����)";
$langRandomQuestions="������� ���������";
$langGiveExerciseName="����� �� ����� ��� �������";
$langGiveExerciseInts="�� ����� �������� ����������� & ������������� ����������� ������ �� ����� �������� (0, 1, 2, ..,�)";
$langQuestCreate="���������� ���������";
$langExRecord="� ������ ��� ������������";
$langBackModif="��������� ���� �������� ��� �������";
$langDoEx="����� ��� ������";
$langDefScor="��������� ��� ��������� ������";
$langCreateModif="���������� / ������ ��� ���������";
$langSub="���������";
$langNewQu="��������� �������";
$langTrue="�����";
$langMoreAnswers="+�����.";
$langLessAnswers="-�����.";
$langMoreElements="��������";
$langLessElements="��������";
$langRecEx="���������� �������";
$langRecQu="���������� ��������";
$langRecAns="���������� ����������";
$langIntroduction="��������";
$langTitleAssistant="������ ����������� ��������";
$langQuesList="��������� ���������";
$langSaveEx="���������� ���������";
$langClose="��������";
$langFinish="�����";
$langCancel="�������";
$langQImage="�������-������";
$langAddQ="�������� ��������";
$langAmong = "������";
$langTake = "�������";

// admin.php
$langExerciseManagement="���������� ��������";
$langQuestionManagement="���������� ��������� / ����������";
$langQuestionNotFound="��� ������� � �������";

// question_admin.inc.php
$langNoAnswer="��� ������� �������� ���� ��� ������";
$langGoBackToQuestionPool="��������� ���� ���������� ���������";
$langGoBackToQuestionList="��������� ��� ����� ���������";
$langQuestionAnswers="���������� ���� �������";
$langUsedInSeveralExercises="�������! H ������� ��� �� ���������� ��� ���������������� �� ������� ��������. ������ �� ��� ��������;";
$langModifyInAllExercises="�� ���� ��� ��������";
$langModifyInThisExercise="���� ���� �������� ������";

// statement_admin.inc.php
$langAnswerType="����� ���������";
$langUniqueSelect="��������� �������� (�������� ��������)";
$langMultipleSelect="��������� �������� (��������� ����������)";
$langFillBlanks="���������� �����";
$langMatching="���������";
$langAddPicture="�������� �������";
$langReplacePicture="������������� ��� �������";
$langDeletePicture="�������� ��� �������";
$langQuestionDescription="����������� ������";
$langGiveQuestion="����� ��� �������";

// answer_admin.inc.php
$langWeightingForEachBlank="����� ��� ����� �� ���� ����";
$langUseTagForBlank="�������������� ������� [...] ��� �� ������� ��� � ����������� ����";
$langQuestionWeighting="�����";
$langTypeTextBelow="�������������� �� ������� ��� ��������";
$langDefaultTextInBlanks="���������� ��� ������� ����� � [�����].";
$langDefaultMatchingOptA="�����";
$langDefaultMatchingOptB="������";
$langDefaultMakeCorrespond1="� ������� ��� �����";
$langDefaultMakeCorrespond2="� ������ ��� �����";
$langDefineOptions="��������� ��� ��������";
$langMakeCorrespond="����� ��� �����������";
$langFillLists="����������� ��� ��� ������ ��� ����������";
$langGiveText="�������������� �� �������";
$langDefineBlanks="������ ����������� ��� ���� �� ������� [...]";
$langGiveAnswers="����� ��� ���������� ���� ���������";
$langChooseGoodAnswer="�������� ��� ���� ��������";
$langChooseGoodAnswers="�������� ��� � ������������ ����� ����������";

// question_list_admin.inc.php
$langQuestionList="��������� ��������� ��� �������";
$langMoveUp="���������� ���� �� ����";
$langMoveDown="���������� ���� �� ����";
$langGetExistingQuestion="������� ��� ���� ������";

// question_pool.php
$langQuestionPool="���������� ���������";
$langOrphanQuestions="��������� ����� ��������";
$langNoQuestion="��� ������� ������� ���� ��� ������";
$langAllExercises="���� �� ��������";
$langFilter="�����������";
$langGoBackToEx="��������� ���� ������";
$langReuse="������������������";

// exercise_result.php
$langElementList="�� ��������";
$langScore="����������";
$langCorrespondsTo="����������� ��";
$langExpectedChoice="����������� ��������";
$langYourTotalScore="� �������� ��� ���������� �����";

// exercice_submit.php
$langDoAnEx="����� ��� ������";
$langCorrect="�����";
$langExerciseNotFound="� �������� ��� �������";
$langAlreadyAnswered="���������� ��� ���� �������";

// scoring.php & scoring_student.php

$langExerciseStart="������";
$langExerciseEnd="����";
$langExerciseConstrain="�������� �����������";
$langExerciseEg="�.�.";
$langExerciseConstrainUnit="�����";
$langExerciseConstrainExplanation="0 ��� ������� ����������";
$langExerciseAttemptsAllowedExplanation="0 ��� ����������� ������ �����������";
$langExerciseAttemptsAllowed="������������� �����������";
$langExerciseAttemptsAllowedUnit="�����";
$langExerciseExpired="����� ��������� �� ��������� ������� ���� � ����� ��� ������ ��� ������� ��������� ������ ����������� ��� �������.";
$langExerciseLis="����� ��������";
$langResults="������������";
$langResultsFailed="��������";
$langYourTotalScore2="�������� ����������";
$langExerciseScores1="����������";
$langExerciseScores2="����������";
$langExerciseScores3="CSV";
$langExerciseSurname="�������";

/***********************************************
* external_module.inc.php
***********************************************/

$langSubTitle="<br><strong>��������:</strong> �� ������ �� ���������� ��� �������� �� ��� ������,
	��������� �� ���� �� ������, ����� ������� ��� ���������� �� ��������� ��� ��� ����� ��� URL
	��� ���� ����� ��� browser ��� �������� �� ��� ����� \"���������\" ��������.<br><br>";
$langLink="���������";
$langInvalidLink = "� ��������� ����� ����� ��� ��� ����������!";
$langNotAllowed = "�� ��������� ��������";


/***********************************************
* faculte.inc.php
***********************************************/
$langListFaculteActions="��������� ������ / �������� - ���������";
$langCodeFaculte1="������� ������ / ��������";
$langCodeFaculte2="(�� ���������� ���������� ����, �.�. MATH)";
$langAddFaculte="�������� ������ / ��������";
$langFaculte1="����� / �����";
$langFaculte2="(�.�. ����������)";
$langAddYes="��������";
$langAddSuccess="� �������� ���������������� �� �������� !";
$langNoSuccess="�������� ���� ��� �������� ��� ��������� !";
$langProErase="�������� ����������� �������� ��� ����� ���� !";
$langNoErase="� �������� ��� �������� ��� ����� ������.";
$langErase="�� ����� ����������!";
$langFCodeExists= "� ������� ��� ������ ������� ���! ��������� ���� ����������� �����������";
$langFaculteExists="� ����� / ����� ��� ������ ������� ���! ��������� ���� ����������� �����������";
$langEmptyFaculte="������� ������ ��� �� ����� ����! ��������� ����";
$langGreekCode="� ������� ��� ������ �������� �� ���������� ����������!. ��������� ���� ����������� �����������";

/******************************************************
* forum_admin.inc.php
*******************************************************/
$langOrganisation="���������� ��� �������� ����������";
$langForCat="�������� ���������� ��� ����������";
$langBackCat="��������� ���� ����������";
$langForName="����� �������� ����������";
$langFunctions="�����������";
$langAddForCat="�������� �������� ���������� ���� ���������";
$langChangeCat="������ ��� ����������";
$langModCatName="������ �������� ����������";
$langCat="���������";
$langNameCatMod="�� ����� ��� ���������� ���� �������";
$langBack="���������";
$langCatAdded="���������� ���������";
$langForCategories="���������� �������� ����������";
$langAddForums="��� �� ���������� �������� ����������, ����� ���� ��� ��������� ���������� ���� ��������� ��� �������� ���. ��� ���� ��������� (����� ��������) ��� �� �������� ����� ��������";
$langCategories="����������";
$langNbFor="������� �������� ����������";
$langAddCategory="�������� ����������";
$langForumDataChanged = "�� �������� ��� ������ ����� �������";
$langForumCategoryAdded = "���������� ��� ������ ���� ��������� ��� ���������";
$langForumDelete = "� ������� ���������� ���� ���������";


/***************************************************************
* grades.inc.php
****************************************************************/
$m['grades'] = "����������";

/*************************************************************
* group.inc.php
*************************************************************/
$langGroupManagement="���������� ������ �������";
$langNewGroupCreate="���������� ���������� ������ �������";
$langNewGroups="������� ������ �������";
$langMax="���.";
$langPlaces="������������� ���� ����� ������� (�����������)";
$langGroupPlacesThis="������������� (�����������)";
$langDeleteGroups="�������� ���� ��� ������ �������";
$langGroupsAdded="������ ������� ����� ���������";
$langGroupAdded = "����� ������� ���� ���������";
$langGroupsDeleted="���� �� ������ ������� ����� ���������";
$langGroupDel="� ����� ������� ����������";
$langGroupsEmptied="���� �� ������ ������� ����� ������";
$langEmtpyGroups="���������� ���� ��� ������ �������";
$langGroupsFilled="���� �� ������ ������� ����� �����������";
$langFillGroups="���������� ��� ������ �������";
$langGroupsProperties="��������� ������ �������";
$langStudentRegAllowed="�� ������� ����������� �� �������� ���� ������";
$langStudentRegNotAllowed="�� ������� ��� ����������� �� �������� ���� ������";
$langTools="��������";
$langExistingGroups="���������� ������ �������";
$langEdit="��������";
$langDeleteGroupWarn = "����������� ��������� ��� ������ �������";
$langDeleteGroupAllWarn = "����������� ��������� ���� ��� ������ �������";

// Group Properties
$langGroupProperties="��������� ������ �������";
$langGroupAllowStudentRegistration="�� �������� ������������ �� ��������� ���� ������ �������";
$langGroupPrivatise="�������� �������� ���������� ������ �������";
$langGroupForum="������� ����������";
$langGroupPropertiesModified="���������� �� ��������� ��� ������ �������";

// Group space
$langGroupThisSpace="������� ��� ��� ����� �������";
$langGroupName="����� ������ �������";
$langEditGroup="�������� ��� ������ �������";
$langUncompulsory="(�����������)";
$langNoGroupStudents="�� ������������� ��������";
$langGroupMembers="���� ������ �������";
$langGroupValidate="���������";
$langGroupCancel="�������";
$langGroupSettingsModified="�� ��������� ��� ������ ������� ����� �������";
$langNameSurname="����� �������";
$langAM="������ �������";
$langEmail="email";

$langGroupStudentsInGroup="�������� ������������� �� ������ �������";
$langGroupStudentsRegistered="�������� ������������� ��� ������";
$langGroupNoGroup="�� ������������� ��������";
$langGroupUsersList="����� <a href=../user/user.php>�������</a>";
$langGroupTooMuchMembers="� ������� ��� ��������� ���������� �� ������� ������������ (�������� �� �� �������� ��������).
	� ������� ��� ������ ��� ������";
$langGroupTutor="�����������";
$langGroupNoTutor="�������";
$langGroupNone="��� �������";
$langGroupNoneMasc="�������";
$langGroupUManagement="���������� �������";
$langAddTutors="���������� ��������� �������";
$langForumGroup="������� ���������� ��� ������";
$langMyGroup="� ����� ���";
$langOneMyGroups="� ���������";
$langRegIntoGroup="��������� �� ���� �����";
$langGroupNowMember="����� ���� ����� ��� ������";
$langPublicAccess="�������";
$langForumType="����� �������� ����������";
$langPropModify="������ ���������";
$langGroupAccess="��������";
$langGroupFilledGroups="�� ������ ������� ����� ����������� ��� �������� ��� ���������� ���� �������� ��������.";

// group - email
$langEmailGroup = "�������� e-mail ���� �����";
$langTypeMessage = "�������������� �� ������ ��� ��������";
$langSend = "��������";
$langEmailSuccess = "�� e-mail ��� �������� �� �������� !";
$langMailError = "������ ���� ��� �������� e-mail !";
$langGroupMail = "Mail ���� ����� �������";
$langMailSubject = "����: ";
$langMailBody = "������: ";
$langProfLesson = "�������� ��� ���������";

/*****************************************************
* guest.inc.php
*****************************************************/

$langAskGuest="�������������� �� ����������� ��� ����������� ���������";

$langAddGuest="�������� ������ ���������";
$langGuestName="����������";
$langGuestSurname="���������";
$langGuestUserName="guest";

$langGuestExist="������� ��� � ����������� ���������! �������� ���� �� ������ �� �������� �� ����������� ���.";
$langGuestSuccess="� ����������� ��������� (guest account) ������������� �� �������� !";
$langGuestFail="�������� ���� ��� ���������� ����������� ���������";
$langGuestChange="� ������ ������������ ��������� ����� �� ��������!";

/********************************************************
* gunet.inc.php
********************************************************/

$infoprof="������� �� ��� ������ e-mail ��� ��� ����� ����������� ��� ���������� ���������� �������������� eClass, �� �� �������� ��� ����������� ���.";
$profinfo="� ����������� ���������� GUNET eClass �������� 2 ������������� ������� �������� �����������";
$userinfo="� ����������� ��������� GUNET eClass �������� 2 ������������� ������� �������� �������:";
$regprofldap="������� ����������� ��� ����� ���������� ���� �������� ��������� (LDAP Directory Service) ��� ��������� ��� �������";
$regldap="������� ������� ��� ����� ���������� ���� �������� ��������� (LDAP Directory Service) ��� ��������� ��� �������";
$regprofnoldap="������� ����������� ��� ��� ����� ���������� ���� �������� ��������� ��� ��������� ��� �������";
$regnoldap="������� ������� ��� ��� ����� ���������� ���� �������� ��������� ��� ��������� ��� �������";

$mailbody1="\n���������� ���������� ������ GUNet\n\n";
$mailbody2="� �������\n\n";
$mailbody3="�������� �� ���� �������� ";
$mailbody4="���� �������� ���������� �������������� ";
$mailbody5="��� GUNet ";
$mailbody6="��� ".$langsTeacher.".";
$mailbody7="����� / �����:";
$mailbody8="�� ".$langsStudent.".";

$logo= "eClass ��������� ���������� �������������� GUNet";
$gunet="����� ���������� �������������� GUNet";
$sendinfomail="�������� ������������ e-mail ����� $langsTeachers ��� $siteName";
$infoabouteclass="����������� ������ ���������� $siteName";

// contact.php
$introcontact = "�������� �� ������������� �� ��� ����� ����������� ��� ���������� <b>".$siteName."</b> �� ���� ��������
 �������:";
$langPostMail="<b>����������� ���������:</b>";
$langPhone = "<b>���:</b>";
$langFax = "<b>Fax:</b>";

/************************************************************
* import.inc.php
************************************************************/
$langAddPage="�������� ���� �������";
$langPageAdded="� ������ ����������";
$langPageTitleModified="� ������ ��� ������� ������";
$langSendPage="����� ������� ��� �������";
$langCouldNotSendPage="�� ������ ��� ����� �� ����� HTML ��� ��� ���� ������� �� ������. �� ������ �� �������� ������ ���
��� ����� �� ����� HTML (�.�. PDF, Word, Power Point, Video, �.��.)
�������������� �� <a href=../document/document.php>�������</a>";
$langAddPageToSite="�������� ���� ������� �� ��� site";
$langCouldNot="�� ������ ��� ���� ������� �� ������";
$langOkSent="<p><b>� ������ ��� ��������</b><br/><br/>������������� ��������� ���� ����� ��� �������� �����</p>";
$langTooBig="��� ��������� ������ ������ ��� �� ��������,� ����� ���� ������";
$langExplanation="� ������ ������ �� ����� �� ����� HTML (�.�. \"my_page.htm\"). �� ������������ ��������� ���� ������
������ ���� �����. �� ������ �� �������� ������ ��� ��� ����� �� ����� HTML (�.�. PDF, Word, Power Point, Video, �.��.)
�������������� �� <a href=../document/document.php>�������</a>";
$langPgTitle="������ �������";

/***************************************************************
* index.inc.php
***************************************************************/
$langHomePage = "������ ������";
$langInvalidId = "<font color='red'>
        ����� ��������.<br>�� ��� ����� ���������, ����������� ��
        <a href='modules/auth/registration.php'>����� ��������</a>.
        </font><br>&nbsp;<br>";
$langAccountInactive1 = "�� ������� �����������.";
$langAccountInactive2 = "�������� ������������� �� ��� ����������� ��� ��� ������������ ��� ����������� ���";
$langMyCoursesProf="�� �������� ��� ���������� (".$langTeacher.")";
$langMyCoursesUser="�� �������� ��� ����������� (".$langStudent.")";
$langNoCourses="��� �������� ��������";
$langCourseCreate="���������� ���������";
$langMyAgenda = "�� ���������� ���";
$langMyStats = "���������� ������";   #ophelia 1-8-2006
$langMyAnnouncements = "�� ������������ ���";
$langWelcome="�� �������� ����� ��������� ��������. ���� �������� ��������
����� ������ ��� �����������, �� ����� �������� �� �� ���������� �������� ���� ���� '�������'. �� ���������
������� �� ������������� �������� �������� ���� ���� ������� ������, ���� ����������� ������
'���������� ��������� (���������)'.";
$langAdminTool = "���������� ����������";
$langUserName="����� ������ (username)";
$langPass="����������� (password)";
$langHelp="�������";
$langSelection="�������";
$langManagement="����������";
$langMenu ="�����";
$langLogout="������";
$langSupportForum="������� �����������";
$langInvalidAuth = "����� ������ ������������";
$langContact = '�����������';
$langInfoPlat = '��������� ����������';
$lang_forgot_pass = "�������� �� ����������� ���;";
$langNewAnnounce = "��� !";
$langUnregUser = "�������� �����������";
$langListFaculte = "��������� ��������";
$langListCourses = "K�������� ���������";
$langAsynchronous = "����� ���������� ��������������";
$langUserLogin = "������� ������";
$langWelcomeToEclass = "������������ ��� ".$siteName."!";
$langUnregCourse = "��������� ��� ������";
$langUnCourse = "���������";
$langCourseCode = "������ (�������)";
$langInfoAbout = "� ��������� <strong>GUnet eClass</strong> �������� ��� ������������ ������� ����������� ������������ ���������. ���� ���������� �� �������������� ��� �������� ��� ���������� ����������� ������������ ��� ��� �� ����� ����� ����������� ��� ���� ��� ����������� ����������� ����������. ��������� �� ��������� ��� ���������� �������� ������ ��� ����������� ��� �������� ���������� �������������� ����� ������������ ��� ����������. � �������� ���� �������� ������� �� �� ����� ���� ����� ������������ (web browser) ����� ��� �������� �������������� �������� �������.<br><br>
������ ����� � �������� ��� ������������� �����������, ������������ ����� ������������� ��� �������� ���������� �������������� ��� �������� ������������ ���������� ��������������. ����������, ��������� ���� ���������� ��� ����������� ��������, ���������� ��� ���������� ��� ������������� ������ ��� ������� ���� ������������� ��� ����������� ������ ��������������� ������� ���������� ��� ������������ ����������.";

/*$langWelcomeStud = "<br>����������� ��� ���������� ��� ���������� <b>$siteName</b>.<br><br>
                    �������� \"������� �� ������\" ��� �� ��������������� �� ��������� ����������� ��������.";
$langWelcomeProf = "<br>����������� ��� ���������� ��� ���������� <b>$siteName</b>.<br><br>
                    �������� \"���������� ���������\" ��� �� ������������� �� ����������� ��� ��������.";
*/
$langWelcomeStud = "�������� \"������� �� ������\" ��� �� ��������������� �� ��������� ����������� ��������.";
$langWelcomeProf = "�������� \"���������� ���������\" ��� �� ������������� �� ����������� ��� ��������.";


/***********************************************************
* install.inc.php
***********************************************************/

$langEG	= "�. �.";
$langDBHost	= "����� ���������� ��� ����� ���������";
$langDBLogin = "����� ������ ��� �� ���� ���������";
$langDBPassword	= "����������� ��� �� ���� ���������";
$langMainDB	= "����� ���� ��������� ��� eClass";
$langAllFieldsRequired	= "��� �� ����� ����� �����������";
$langPrintVers = "���������� �����";
$langLocalPath	= "Path ��� ������� ��� eClass ���� �����������";
$langAdminEmail	= "Email �����������";
$langAdminName = "����� �����������";
$langAdminSurname	= "������� �����������";
$langAdminLogin	= "����� ������ ��� �����������";
$langAdminPass	= "����������� ��� �����������";
$langHelpDeskPhone = "�������� Helpdesk";
$langHelpDeskFax = "������� Fax Helpdesk";
$langHelpDeskEmail	= "Email Helpdesk";
$langCampusName	= "����� ����������";
$langInstituteShortName  = "����� ��������� - ����������";
$langInstituteName = "Website ��������� - ����������";
$langInstitutePostAddress = "���. ��������� ��������� - ����������";
$langWarnHelpDesk	= "�������: ��� \"Email helpdesk\" ���������� �� �������� ��������� ��� ���������� ���� ���������";
$langDBSettingIntro		= "�� ��������� ������������ �� ������������ ��� ����� ���� ��������� ��� eClass.
				����� ��'���� ��� ��� ���� �� ���������� ��� ���������� �� ��������� ��
				������������� ���� ������ ��������� (��� ��� ���� ������) ";

$langStep1 = "���� 1 ��� 6";
$langStep2 = "���� 2 ��� 6";
$langStep3 = "���� 3 ��� 6";
$langStep4 = "���� 4 ��� 6";
$langStep5  = "���� 5 ��� 6";
$langStep6 = "���� 6 ��� 6";
$langCfgSetting	= "��������� ����������";
$langDBSetting = "��������� ��� MySQL";
$langMainLang	= "����� ������ ������������";
$langLicence = "����� ������";
$langLastCheck = "���������� ������� ���� ��� �����������";
$langRequirements	= "���������� ����������";
$langInstallEnd 	= "���������� ������������";


/********************************************************
* learnpath.inc.php
*********************************************************/
$langAddComment = "�������� / ������ ������� ���";
$langAddModule = "��������";
$langAddModulesButton = "�������� �����������";
$langAddOneModuleButton = "�������� ��������";
$langAlertBlockingMakedInvisible = "���� � ������� ����� ��������. �������� �� ������, �� ��������� ����� ��������������� � ������� ���� ������� ������� ����� �� ���������� �� ������������ ��� �������. ������������ ��� ������� ���";
$langAlertBlockingPathMadeInvisible = "���� � ������ ����� ��������. �������� ��� �� ����� �� ��������� ����� ��������������� � ������� ���� ������� ������ ����� �� ���������� �� ������������ ��� �������. ������������ ��� ������� ���";
$langAlreadyBrowsed = "������������";
$langAltDocument = "�������";
$langAltExercise = "������";
$langAltMakeNotBlocking = "�����������";
$langAltMakeVisible = "����� �� �����";
$langAltMove = "����������";
$langAltMoveUp = "������ ���� �� ����";
$langAltScorm = "Scorm";
$langAreYouSureDeleteModule = " ����� ������� ��� ��� �������� �������� ��� ��������; �� ��������� ������� ��� ��� �������� ���������� ��� ��� ���� ������. ��� �� ����� �� ���� �� �� ���������������. ������������ �� ��������:  ";
$langAreYouSureToDeleteScorm = "H ������ ������� �������� ����� ���� ������� SCORM. �� ���������� ���� �� ������, ���� �� �������� ��� ����������� �� �� SCORM ��� ��� �� ������� ������ �� ���������� ��� ��� ���������. ������� ������ �� ���������� �� ������ ������� ";
$langAreYouSureToRemove = "������� ������ �� ������������/���������� ��� �������� ������� ��� �� ������ �������: ";
$langAreYouSureToRemoveLabel = "������������ ��� ������� �� ���������� ��� ���� �� �������� � �� �������� ��� ��������.";
$langAreYouSureToRemoveSCORM = "�������� �������� �� �� SCORM �� ���������� �������� ��� �� server, ���� ���������� �� ������ �������.";
$langAreYouSureToRemoveStd = "� ������� �� ���������� ��������� ���� ����� ��� ��������.";
$langBackModule = "��������� ��� �����";
$langBackToLPAdmin = "��������� ��� ���������� ��� ������� �������";
$langBlock = "�����";
$langBrowserCannotSeeFrames = "� browser ��� ��� ����������� frames.";
$langChangeRaw = "������ ��� ��������� ������ ������ ��� �� ������� ���� � ������� (�������): ";
$langChat = "�����������";
$langConfirmYourChoice = "�������� ������������ ��� ������� ���";
$langCourseDescription = "��������� ���������";
$langCourseDescriptionAsModule = "����� ���������� ���������";
$langCourseHome = "������ ������ ���������";
$langCreateLabel = "���������� ��������";
$langCreateNewLearningPath = "���������� ���� ������� �������";
$langDOCUMENTTypeDesc = "�������";
$langDefaultLearningPathComment = "���� ����� �� ���������� ������� ����� ��� ������� �������. ��� �� �� ��������������� �� ���� ��� �������, ����� ���� �������� ��� <b>���������</b>.";
$langDefaultModuleAddedComment = "���� ����� �������� ���������� ������� ������� �� ��� �������� ����� ��� �������� ������ �� ���� �� ������ �������. ��� �� �� ��������������� �� ���� ��� �������, ����� ���� �������� ��� <b>���������</b>.";
$langDefaultModuleComment = "���� ����� �� ���������� ������� ����� ��� ��������, �� ����������� �� ���� ������ ������� ��� �� �������� ���� ��� �������. ��� �� �� ��������������� �� ���� ��� �������, ����� ���� �������� ��� <b>���������</b>.";
$langDescriptionCours = "��������� ���������";
$langDocInsertedAsModule = "���� ��������� ��� �������";
$langDocumentAlreadyUsed = "���� �� ������� ���� ��� �������������� ��� ������� �� ���� �� ������ �������";
$langDocumentAsModule = "����� ��������";
$langDocumentInModule = "������� �� �������";
$langEXERCISETypeDesc = "������ Eclass";
$langEndOfSteps = "����� ���� ��� ���� ���� ������������ ���� �� ��������� ����.";
$langErrorAssetNotFound = "�� �������� ��� ������ : ";
$langErrorCopyAttachedFile = "�� ������ � ��������� �������: ";
$langErrorCopyScormFiles = "������ ���� ��� ��������� ��� ��������� ������� SCORM ";
$langErrorCopyingScorm = "������ ���������� ������� ������������ SCORM";
$langErrorCreatingDirectory = "�� ������ � ���������� ���������: ";
$langErrorCreatingFile = "�� ������ � ���������� �������: ";
$langErrorCreatingFrame = "�� ������ � ���������� �� ������� ��� ������� ";
$langErrorCreatingManifest = "�� ������ �  ���������� ��� ���������� SCORM (imsmanifest.xml)";
$langErrorCreatingScormArchive = "�� ������ � ���������� ��� ��������� ������� SCORM ";
$langErrorEmptyName = "�� ����� ������ �� �����������";
$langErrorFileMustBeZip = "�� ������ ������ �� ����� �� ����� ������� zip (.zip)";
$langErrorInvalidParms = "������: �� ������ ���������� (�������������� ���� ��������)";
$langErrorLoadingExercise = "�� ������ � ������� ��� ������� ";
$langErrorLoadingQuestion = "�� ������ � ������� ��� �������� ��� ������� ";
$langErrorNameAlreadyExists = "������: �� ����� ������� ��� ��� ������ ������� � ��� ������ ��� �������� ";
$langErrorNoModuleInPackage = "��� ������� ������� ��� ������";
$langErrorNoZlibExtension = "� �������� Zlib php ���������� ��� �� ����� ����� ��� ���������.  �������� ������������� �� ��� ����������� ��� ���������� ���.";
$langErrorOpeningManifest = "��� ������ �� ������ �� ������ <i>manifest</i> ��� ������.<br /> ������ ��� �� �������: imsmanifest.xml";
$langErrorOpeningXMLFile = "��� ������ �� ������ ���������� ������ ������� ��� ������.<br /> ������ ��� �� �������: ";
$langErrorReadingManifest = "������ ��������� ������� <i>manifest</i>";
$langErrorReadingXMLFile = "������ ��������� ������������� ������� �������� �������: ";
$langErrorReadingZipFile = "������ ��������� ������� zip.";
$langErrorSql = "������ ��� ������ SQL";
$langErrorValuesInDouble = "������: ��� � ��� ����� ����� ������";
$langErrortExtractingManifest = "��� ������ �� ���������� ��������� ��� �� ������ zip.";
$langExAlreadyUsed = "���� � ������ ��� ��������������� ��� ������� �� ���� �� ������ �������";
$langExInsertedAsModule = "���� ��������� ��� ������� ��������� ����� ��� ������� �������";
$langExercise = "��������";
$langExerciseAsModule = "����� �������";
$langExerciseCancelled = "������� �������, �������� ��� ������� ������� ��� �� ����������, �������� ���� ��� ������� ����.";
$langExerciseDone = "���������� �������, �������� ��� ������� ������� ��� �� ����������, �������� ���� ��� ������� ����.";
$langExerciseInModule = "������ ���� �������";
$langExercises = "��������";
$langExport = "�������";
$langExport2004 = "������� �� ������� SCORM 2004";
$langExport12 = "������� �� ������� SCORM 1.2";
$langFailed = "������������ ����������";
$langFileScormError = "�� ������ ��� �� ���������� ��� ����� ������.";
$langFileName = "����� �������";
$langFirstName = "�����";
$langFullScreen = "������/������ ����� ";
$langGlobalProgress = "������� ��� ������� �������: ";
$langImport = "��������";
$langInFrames = "�� �������";
$langInfoProgNameTitle = "����������";
$langInsertMyDescToolName = "�������� ���������� ���������";
$langInsertMyDocToolName = "�������� ��������";
$langInsertMyExerciseToolName = "�������� �������";
$langInsertMyLinkToolName = "�������� ���������";
$langInsertMyModuleToolName = "�������� ��������";
$langInsertMyModulesTitle = "�������� �������� ���������";
$langInsertNewModuleName = "�������� ���� ��������";
$langInstalled = "� ������ ������� ���� �������� �� ��������.";
$langIntroLearningPath = "������������� ���� �� �������� ��� �� �������� ����� ������� ��� ��� ������ ������ ��������, ��������,������� HTML, ���������,...<br /><br />��� ���������� �� ������������ ����� ������� �� ������ ������� ���, ����� ���� ��������.<br />";
$langLINKTypeDesc = "���������";
$langLastName = "�������";
$langLastSessionTimeSpent = "��������� ������� ����������";
$langLearningPath = "������ �������";
$langLearningPathAdmin = "���������� ������� �������";
$langLearningPathEmpty = "� ������ ������� ����� ���� ";
$langLearningPathList = "����� ������� �������";
$langLearningPathName = "��� ����� ������� ������� : ";
$langLearningPathNotFound = "� ������ ������� ��� ������� ";
$langLessonStatus = "��������� ��������";
$langLinkAlreadyUsed = "����� � ��������� ��� ��������������� ��� ������� �� ����� �� ������ �������";
$langLinkAsModule = "����� ���������";
$langLinkInsertedAsModule = "���� ��������� ��� ������� ��������� ����� ��� ������� �������";
$langLogin = "�������";
$langMakeInvisible = "��������� �� ������";
$langMaxFileSize = "������� ������� �������: ";
$langMinuteShort = "����.";
$langModuleMoved = "���������� ��������";
$langModuleOfMyCourse = "����� �������� ����� ��� ���������";
$langModuleStillInPool = "�������� ����� ��� ������� �� ����� ����� ���������� ��� ������ ��� ��������";
$langModulesPoolToolName = "������ ��������";
$langMyCourses = "�� �������� ���";
$langNeverBrowsed = "��� ���� �����������";
$langNewLabel = "���������� ���� ��������";
$langNext = "�������";
$langNextPage = "������� ������";
$langNoEmail = "��� ���� ������� email";
$langNoLearningPath = "����� ������ �������";
$langNoModule = "����� �������";
$langNoMoreModuleToAdd = "���� �� �������� ����� ��� ��������� ��� ���������������� �� ���� �� ������ �������.";
$langNoStartAsset = "��� ������� ������ ��������/�������� ������� ��� �� �������� ��� ���� ��� �������.";
$langNotAttempted = "��� ���� �����������";
$langNotInstalled = "�������� ������.  � �������� ��� ������� ������� �������.";
$langOkChapterHeadAdded = "� ������ ����������: ";
$langOkDefaultCommentUsed = "�������������: � ����������� �� ������ �� ���� ��� ��������� ��� ������� ������� ��� ���� �������������� ��� �������������� ������.  �� ������ �� �� ��������";
$langOkDefaultTitleUsed = "������������� : � ����������� �� ������ �� ���� �� ����� ��� ������� ������� ��� ���� ������ ������ �������������� ����� .  �� ������ �� �� ��������.";
$langOkFileReceived = "�� ������ ������: ";
$langOkManifestFound = "� ���������� ������� �� ������ zip: ";
$langOkManifestRead = "H ���������� ����������.";
$langOkModuleAdded = "�������� ��������: ";
$langOrder = "������ ";
$langOtherCourses = "����� ���������";
$langPassed = "������������ ��������";
$langPathContentTitle = "����������� ������� �������";
$langPathsInCourseProg = "������� ��������� ";
$langPeriodDayShort = "�.";
$langPeriodHourShort = "�.";
$langPersoValue = "����������";
$langPlatformAdministration = "���������� ����������";
$langPrevious = "�����������";
$langPreviousPage = "����������� ������";
$langProgInModuleTitle = "� ������� ��� �� ���� ��� �������";
$langProgress = "�������";
$langQuitViewer = "��������� ��� �����";
$langRawHasBeenChanged = "� ��������� ������ ��� �������� ���� ��������";
$langRoot = "������ ��������";
$langSCORMTypeDesc = "SCORM ������������� �����������";
$langScormIntroTextForDummies = "�� ���������� ������ ������ �� ������������ ��� ��� zip ������ ��� �� ����� ������� �� �� SCORM 2004 � �� �� SCORM 1.2.";
$langSecondShort = "����.";
$langStartModule = "������ ��������";
$langStatsOfLearnPath = "������������� ������� �������";
$langSwitchEditorToTextConfirm = "� ������ �� ��������� �� �������� ������� ��������. ������ �� ����������?";
$langTextEditorDisable = "�������������� ����������� ��������";
$langTextEditorEnable = "������������ ����������� ��������";
$langTimeInLearnPath = "������ ��� ������ �������";
$langTo = "���";
$langTotalTimeSpent = "������ ������";
$langTrackAllPath = "������������� ������� �������";
$langTrackAllPathExplanation = "������� ".$langsOfStudents." �� ���� ��� ��������� �������";
$langTrackUser = "������� ".$langOfStudent;
$langTracking = "�������������";
$langTypeOfModule = "����� ��������";
$langUnamedModule = "������� ����� �����";
$langUnamedPath = "������ ����� �����";
$langUseOfPool = "���� � ������ ��������� �� ���� ���� ��� ���������� �������� �� ���� �� ������. <br /> ����� ������ � ������� ���� ��������� ��� ������ ������� �� ����������� �� ���� �� �����.";
$langUsedInLearningPaths = "������� ��������� ������� ��� ������������� ���� ��� ������� : ";
$langView = "��������";
$langViewMode = "���������� ������";
$langVisibility = "����� / ������";
$langWork = "�������� ".$langOfStudents;
$langWrongOperation = "���������� ����������";
$langYourBestScore = "� �������� ��� ����������";
$lang_enroll = "E������";
$langimportLearningPath = "�������� ������� �������";

/*************************************************
* lessontools.inc.php
**************************************************/
$langActiveTools="������ ��������";
$langAdministrationTools="�������� �����������";
$langAdministratorTools="�������� �����������";
$langCourseTools="�������� ���������";

/**************************************************
* link.inc.php
***************************************************/
$langLinks="���������";
$langListDeleted="� ��������� ���� ���������";
$langLinkMod="� ��������� �������������";
$langLinkModify = "������ ���������";
$langLinkDeleted="� ��������� ����������";
$langLinkName="����� ���������";
$langLinkAdd="�������� ���������";
$langLinkAdded="� ��������� ����������";
$langLinkDelconfirm = "������ �� ���������� ��� ��������;";

// Category language variables
$langCategoryName="����� ����������";
$langCategoryAdd = "�������� ����������";
$langCategoryAdded = "� ��������� ����������";
$langCategoryMod = "������ ����������";
$langCategoryModded = "� ��������� ������";
$langCategoryDel = "�������� ����������";
$langCategoryDeleted = "� ��������� ���������� ���� �� ����� ���� ���������� ���";
$langCatDel = "���� ���������� ��� ���������, �� ���������� ���� �� ��������� ��� ����������.\\n".
"����� ������� ��� ������ �� ���������� ��� ���������; ";
$langAllCategoryDel = "�������� ���� ��� ��������� ��� ���� ��� ���������";
$langAllCategoryDeleted = "���� �� ���������� ��� ���� �� ��������� ����� ���������";
$langGiveURL = "����� �� URL ��� ���������";
$langGiveCategoryName = "����� ����������";
$langNoCategory = "������� ���������";
$langCategorisedLinks = "������������������ ���������";
// Other
$showall = "��������";
$shownone = "��������";
$langProfNoLinksExist = "��� �������� ���������. �������� �� ��������������� ��� ����������� ��� ��������� ��� �� ���������� ����������.";
$langNoLinksExist = "��� ����� ��������� ���������.";


/*****************************************************************
* lostpass.inc.php
*****************************************************************/
$lang_remind_pass = '��������������� ������������';
$lang_pass_intro = '<p>�� ����� ������� �� �������� ��� ����������� ���, ����������� �� <em>����� ������</em>
��� ��� ��������� ������������ ������������ �� ��� ����� ����� ������������� 
(<em>�������: ���� ��� ����� ������� ���� ���������</em>).</p> <p>��� �������� �� ���������� ��� ������ �� ���� ��
��������� �� ������� ��� �� �������� �� ����������� ���.</p>';
$lang_pass_submit = '��������';
$lang_pass_invalid_mail1 = 'H ��������� ������������ ������������ ��� ������,';
$lang_pass_invalid_mail2 = '��� ����� ������. �� ������ �����, ��������� ����.
	������, ��� �� ����� �������� ��� ����� ��� ���������� ��� �������,
	����������� �� ������������� �� ���� ������������ ��� ���������� ��� ���������';
$lang_pass_invalid_mail3 = '�������� ��� �������� ��� ������� �� ��������� ��� �� ������
		�� ���������� ���, ���� �������������, �����/�����, �.��.';
$langPassResetIntro ="
���� ������� �� ����� ��������������� ��� ������������ ��������� ��� ����
��������� �������������� $siteName. �� ��� �������� ����� ���� ��� ��������,
����� �������� ��� ������� ����� ��� ��������� ��� ��������� �� ������� ����
��� ����������� ��� ����������, ���� ���������: ";


$langHowToResetTitle = "

===============================================================================
			������� ���������������� ������������
===============================================================================
";

$langPassResetGoHere = "
��� �� ����������������� �� ����������� ��� ��������� ���� �������� ���������.
�� ��� �������� �� ��������� �������� ���� ���� ��� ��������� ����, ����������
��� ��� ����� ����������� ��� ������������ ���. � ��������� ���� ���� ����
���� (1) ����. ����� ����� ��� �������� ����� �� ������ �� ������ ��� ��� ����
�� ���������� ���������������� ������������.
";

$langPassEmail1 = "�� ����������� ��� ���� ���������������� ��������. �� ��� ��� ����������� ����� ���� ��� ���������";
			
$langPassEmail2 = "
��� ������ ���������, ����������� ������� �� ����������� �����, �� ����
��� ���� ����� �� ���������, ����� ���������� ���� ���������.
";

$langAccountResetSuccess1="� ��������������� ��� ������������ ��� ���� �����������";
$langAccountResetSuccess2="��� ��������� ������������ ������������ ���";
$langAccountResetSuccess3="���� ������ ��� ������ �� �� ��� ��� ����������� ���������.";
$langAccountEmailError1 = "������������� ������ ���� ��� �������� ��� ��������� ���";
$langAccountEmailError2 = "��� ���� ������ � �������� ��� ������� ���������������� ��� ������������ ��� ��� ���������";
$langAccountEmailError3 = '�� ���������, �������� �� �������������� �� ���� ������������ ��� ���������� ��� ���������';
$lang_pass_email_ok = '�� �������� ��� ����������� ��� �������� ��� ���������
	���� ������������ ������������ ��� ���������';

$langAccountNotFound1 = '�� ������� ����������� ��� ������� �� �� ��������� ������������ ������������ ��� ������'; 
$langAccountNotFound2 = '�� ������ ���� ����� �������� ��� ����� ��� ����������, ����������� ������������� �� ���� ������������ ��� ���������� ��� ��������� ';

$langAccountNotFound3 = '�������� ��� �������� ��� ������� �� ��������� ��� �� ������ �� ���������� ���, ���� �������������, �����/�����, ���.';

$lang_email = 'e-mail';
$lang_send = '��������';
$lang_username="����� ������";
$langPassCannotChange1="�� ����������� ����� ��� ����������� ��� ������ �� ��������";
$langPassCannotChange2="� ����������� ����� ������ �� ��������� ������ ������������. �����������, ������������� �� �� ����������� ���� ���������";
$langPassCannotChange3="��� ������������ �����������";


/******************************************************
* manual.inc.php
*******************************************************/
$langIntroMan = "���� ������� ���� �������� ��������� ������� ���������� ��� ������� ��� ���������, �� ���������� ��� ��� ����������� ��� ���������� eClass";
$langFinalDesc = "��������� ��������� eClass";
$langShortDesc = "������� ��������� eClass";
$langManS = "���������� ������ �������";
$langManT = "���������� ��������";
$langOr = "�";
$langNote = "��������";
$langAcrobat = "��� �� ��������� �� ������ PDF �������� �� ��������������� �� ��������� Acrobat Reader";
$langWhere ="��� �� ������";
$langHere = "���";


/*********************************************************
* opencours.inc.php
*********************************************************/
$listfac="������� ��������";
$listtomeis = "������";
$langDepartmentsList = "��������� � ��������� �������� ��� ���������.
	�������� ����������� ��� ���� ��� �� ����� �� ��������� �� ���� ��������.";
$langWrongPassCourse = "����� ����������� ��� �� ������";
$langAvCourses = "��������� ��������";
$langAvCours = "��������� ������";

$m['begin'] = '����';
$m['department'] = '����� / �����';
$m['lessoncode'] = '����� ��������� (�������)';
$m['tomeis'] = '������';
$m['tomeas'] = '������';
$m['open'] = '������� �������� (�������� ��������)';
$m['restricted'] = '������� �������� �� ������� (���������� ����������� ������)';
$m['closed'] = '������� ��������';
$m['title'] = '������';
$m['description'] = '���������';
$m['professor'] = '���������';
$m['type']  = '��������� ���������';
$m['pre']  = '�����������';
$m['post']  = '������������';
$m['other']  = '����';
$m['pres']  = '�����������';
$m['posts']  = '������������';
$m['others']  = '����';
$m['legend'] = '��������';
$m['legopen'] = '������� ������';
$m['legrestricted'] = '���������� �������';
$m['legclosed'] = '������� ������';
$m['nolessons'] = '��� �������� ��������� ��������!';
$m['type']="�����";
$m['name']="������";
$m['code']="������� ���������";
$m['prof']="���������(��)";
$m['mailprof'] = "��� �� ���������� ��� ������ �� ������ �� �������� mail ���� ���������� ��� ���������
�������� ����";
$m['here'] = " ���.";
$m['unsub'] = "�� ������ ����� ������� ��� ��� �������� �� ������������";

/***************************************************************
* pedasugggest.inc.php
****************************************************************/

/*
unset($titreBloc);
unset($titreBlocNotEditable);
unset($questionPlan);
unset($info2Say);
*/
$titreBloc[] = "���������";
$titreBlocNotEditable[] = FALSE;
$questionPlan[] = "�� �� ���������� �� ������? ����������� ����� �������������� ��������?";
$info2Say[] = "����������� ������� �� �� ������ �� ������ ��� ��� ����������";
$titreBloc[] = "������";
$titreBlocNotEditable[] = TRUE;
$info2Say[] = "�� ������ ��� ��������� �� ������������ �����";
$questionPlan[] = "����� ����� �� ������ ��� ���������?";
$titreBloc[] = "����������� ���������";
$titreBlocNotEditable[] = TRUE;
$questionPlan[] = "���� �� ����� � �������� ��� ��������� ?";
$info2Say[] = "� �������� ��� �� ����������� �������";
$titreBloc[] = "������������� ��������������";
$titreBlocNotEditable[] = TRUE;
$questionPlan[] = "����� ����� ������������� ��������������� �� �������� ��� ��� �������� ��� ��������� ���� ��� ���������?";
$info2Say[] = "�� �������� �������. �� ������������ ���� �������.";
$titreBloc[] =" ���������";
$titreBlocNotEditable[] = TRUE;
$questionPlan[] = "�������� �������� ������������ ��������� ��� �� ������? ����� ������ ���������?";
$info2Say[] = "�������� ������ ������������ ��������� ��� �� ������. �� ������� ������ ��������� ��� ����������� ���������.";
$titreBloc[] = "��������� ��������";
$titreBlocNotEditable[] = TRUE;
$questionPlan[] = "������� ��������� ��������� �������� ��� ������� ��� ���������� ��� ���������?";
$info2Say[] = "������� ��������� ��������� �������� ����� ��� ������������ �������.";
$titreBloc[] = "������ ����������� / ��������";
$titreBlocNotEditable[] = TRUE;
$questionPlan[] = "�� ���� ����� �� ����� � ������� ��� ���������?";
$info2Say[] = "� ������� �� ����� �� ���������� ��� ������� ���������.";
$titreBloc[] ="�������������� ��������";
$titreBlocNotEditable[] = TRUE;


/********************************************************************
* perso.inc.php
*********************************************************************/

$langMyPersoLessons = "�� �������� ���";
$langMyPersoDeadlines = "�� ������� ���";
$langMyPersoAnnouncements = "�� ���������� ��� ������������";
$langMyPersoDocs = "�� ��������� ��� �������";
$langMyPersoAgenda = "� ������� ���";
$langMyPersoForum = "�� ���������� ��������� ���� �������� ���������� ���";

$langAssignment = "�������";
$langDeadline = "����";

$langNoEventsExist="��� �������� ��������";
$langNoAssignmentsExist="��� �������� �������� ���� ��������";
$langNoAnnouncementsExist="��� �������� ������������";
$langNoDocsExist="��� �������� �������";
$langNoPosts="��� �������� ��������� ���� �������� ����������";

$langNotEnrolledToLessons="��� ����� �������������/� �� ��������";
$langCreateLesson="�������� �� ������������� ������ ������������ ��� �������� \"$langCourseCreate\"";
$langEnroll="�������� �� ���������� �� �������� ������������ ��� �������� \"$langOtherCourses\"";

$langMore="...[�����������]";
$langSender="����������";
$langUnknown="�������";
$langDuration="��������";

 
/***********************************************************
* phpbb.inc.php
************************************************************/
$langAdm="����������";
$langQuote="quote";
$langEditDel="������/��������";
$langSeen="�� ����� ���";
$langLastMsg="��������� ���.";

$langLoginBeforePost1 = "��� �� �������� ��������, ";
$langLoginBeforePost2 = "������ ������������ �� ";
$langLoginBeforePost3 = "������ login ���� ����";

// page_header.php

$langNewTopic="��� ����";
$langGroupDocumentsLink="������� ������ ";
$l_forum 	= "������� ����������";
$l_forums	= "�������� ����������";
$l_topic	= "����";
$l_topics 	= "������";
$l_replies	= "����������";
$l_poster	= "����������";
$l_author	= "����������";
$l_views	= "�����";
$l_post 	= "��������";
$l_posts 	= "���������";
$l_message	= "������";
$l_messages	= "��������";
$l_subject	= "����";
$l_body		= "���� ���������";
$l_from		= "���";   // Message from
$l_moderator 	= "�����������";
$l_username 	= "����� ������";
$l_password 	= "�����������";
$l_email 	= "Email";
$l_emailaddress	= "��������� Email";
$l_preferences	= "�����������";

$l_anonymous	= "��������";  // Post
$l_guest	= "��������������"; // Whosonline
$l_noposts	= "��� $l_posts";
$l_joined	= "����������";
$l_gotopage	= "������� �� ������";
$l_nextpage 	= "������� ������";
$l_prevpage     = "����������� ������";
$l_go		= "�������";
$l_selectforum	= "������� $l_forum";

$l_date		= "����������";
$l_number	= "�������";
$l_name		= "�����";
$l_options 	= "��������";
$l_submit	= "�������";
$l_confirm 	= "�����������";
$l_enter 	= "�������";
$l_by		= "���"; 
$l_ondate	= "����"; 
$l_new          = "���";

$l_html		= "HTML";
$l_bbcode	= "BBcode";
$l_smilies	= "Smilies";
$l_on		= "On";
$l_off		= "Off";
$l_yes		= "���";
$l_no		= "���";

$l_click 	= "������";
$l_here 	= "���";
$l_toreturn	= " ��� ���������";
$l_returnindex	= "$l_toreturn ��� ��������� �������� ����������.";
$l_returntopic	= "$l_toreturn ���� �������� ������� ��� �������� ����������.";

$l_error	= "������";
$l_tryagain	= "����������� ���������� ���� ����������� ������ ��� �������������.";
$l_mismatch 	= "�� ����������� ��� ����� ����.";
$l_userremoved 	= "� ������� ����� ���� ��������� ��� ��� �������� �������";
$l_wrongpass	= "������ ����� �����������.";
$l_userpass	= "����������� ����� �� ����� ������ ��� �� ����������� ���.";
$l_banned 	= "��� ���� ����������� � �������� �� ���� ��� �������. �� ����� ������ ������� ������������� �� �� ����������� ��� ����������.";
$l_enterpassword= "������ �� ������ �� ����������� ���";

$l_nopost	= "��� ����� �������� ��������� ��������� �� ���� ��� �������.";
$l_noread	= "��� ����� �������� ��������� ����� ��� ��������.";

$l_lastpost 	= "��������� $l_post";
$l_sincelast	= "��� ��� ����������� �������� ���.";
$l_newposts 	= "�������� ��� $l_posts $l_sincelast";
$l_nonewposts 	= "��� �������� ��� $l_posts $l_sincelast";

// Index page
$l_indextitle	= "��������� �������� ����������";

// Members and profile
$l_profile	= "������";
$l_register	= "����������";
$l_onlyreq 	= "���������� ���� �� �������";
$l_location 	= "���";
$l_viewpostuser	= "�������� ��������� ���� ����� ��� ������";
$l_perday       = "$l_messages ��� �����";
$l_oftotal      = "��� �������";
$l_url 		= "URL";
$l_icq 		= "ICQ";
$l_icqnumber	= "������� ICQ";
$l_icqadd	= "��������";
$l_icqpager	= "Pager";
$l_aim 		= "AIM";
$l_yim 		= "YIM";
$l_yahoo 	= "Yahoo Messenger";
$l_msn 		= "MSN";
$l_messenger 	= "MSN Messenger";
$l_website 	= "��������� �����������";
$l_occupation 	= "���������";
$l_interests 	= "������������";
$l_signature 	= "��������";
$l_sigexplain 	= "��� ������� ��� ������������� ��� ����� ��� ��������� ���.<BR>������� ����� 255 ����������!";
$l_usertaken	= "�� $l_username ��� ��������� ��������������� ���.";
$l_userdisallowed= "�� $l_username ��� ��������� ��� ����������� ��� �� �����������. $l_tryagain";
$l_infoupdated	= "�� ����������� ��� ������������";
$l_publicmail	= "�������� ��� ���������� email ��� ����� ������ �������";
$l_itemsreq	= "�� �������� ��� ������������ �� * ����� �����������";

// Viewforum
$l_viewforum	= "�������� �������� ����������";
$l_notopics	= "��� �������� ������ �� ���� ��� �������. �������� �� ���������� ��� ���.";
$l_hotthres	= "To ���� ��� ��������� �����������";
$l_islocked	= "�� ���� ����� ���������� (��� ������� �� ���������� ��� �������� �� ����)";
$l_moderatedby	= "�����������: ";

// Private forums
$l_privateforum	= "���� � ������� ���������� ����� <b>���������</b>.";
$l_private 	= "$l_privateforum<br>��������: ������ �� ����� �������������� �� cookies ��� �� ��������������� ���������� ��������.";
$l_noprivatepost = "$l_privateforum ��� ����� �������� ��������� ��������� �� ���� ��� �������.";

// Viewtopic
$l_topictitle	= "�������� �������";
$l_unregistered	= "�� ������������� �������";
$l_posted	= "��������";
$l_profileof	= "�������� ������ ���";
$l_viewsite	= "�������� ���� ���������� ���";
$l_icqstatus	= "$l_icq status";  // ICQ status
$l_editdelete	= "��������/�������� ����� ��� ���������";
$l_replyquote	= "�������� �� ��������";
$l_viewip	= "�������� IP ��������� (���� ��� ������������/�����������)";
$l_locktopic	= "�������� ����� ��� �������";
$l_unlocktopic	= "���������� ����� ��� �������";
$l_movetopic	= "�������� ����� ��� �������";
$l_deletetopic	= "�������� ����� ��� �������";

// Functions
$l_loggedinas	= "������������ ��";
$l_notloggedin	= "�� ������������";
$l_logout	= "����������";
$l_login	= "�������";

// Page_header
$l_separator	= "� �";  // Included here because some languages have
		          // problems with high ASCII (Big-5 and the like).
$l_editprofile	= "�������� ������";
$l_editprefs	= "�������� �����������";
$l_search	= "���������";
$l_memberslist	= "����� �����";
$l_faq		= "FAQ";
$l_privmsgs	= "��������� ��������";
$l_sendpmsg	= "�������� ���������� ���������";
$l_statsblock   = '$statsblock = "�� ������� ��� ����� ������� �������� -$total_posts- ��������.<br>
������ -$total_users- �������������� �������.<br>
� �������� ������������� �������: -<a href=\"$profile_url\">$newest_user</a>-.<br>
-$users_online- ". ($users_online==1?"�������":"�������") ." <a href=\"$online_url\">��������� ���� �� ������</a> ��� �������� ����������.<br>";';
$l_privnotify   = '$privnotify = "<br>����� $new_message <a href=\"$privmsg_url\">".($new_message>1?"��� ��������� ��������":"��� ��������� ������")."</a>.";';

// Page_tail
$l_adminpanel	= "������� �����������";
$l_poweredby	= "������������� ��� ��";
$l_version	= "������";

// Register
$l_notfilledin	= "������ - �� ������������ ��� �� ����������� �����";
$l_invalidname	= "�� ����� ������ ��� ���������, ��������������� ���.";
$l_disallowname	= "�� ����� ������ ��� ����������� ��� ��� �����������.";
$l_welcomesubj	= "������������ ���� �������� ����������";
$l_beenadded	= "������������ ��� ���� ���������.";
$l_thankregister= "��� ������������ ��� ��� ������� ���!";
$l_useruniq	= "������ �� ����� ��������. �� ������� ��� ������� �� ����� �� ���� �����.";
$l_storecookie	= "���������� ��� �������� ��� �� ��� �cookie� ��� ��� �����.";

// Prefs
$l_prefupdated	= "�� ����������� ������������. <a href=\"index.php\">������ ��� ��� �� �����������</a> ���� �������� ������";
$l_themecookie	= "��������: ��� �� �������� ��� �������� ��� ������� ������ �� ����� �� cookies ������.";
$l_alwayssig	= "�������� ��������� �� ��� �� ��������";
$l_alwaysdisable= "�������������� ������ "; // Only used for next three strings
$l_alwayssmile = "�������������� ��� $l_smilies ������";
$l_alwayshtml	= "�������������� ��� $l_html ������";
$l_alwaysbbcode	= "�������������� ��� $l_bbcode ������";
$l_boardtheme	= "�������� �������� ����������";
$l_boardlang  = "������ �������� ����������";
$l_nothemes	= "��� �������� ��������� ��������� ��� ����";
$l_saveprefs	= "���������� �����������";

// Search
$l_searchterms	= "������ �������";
$l_searchany	= "��������� ��� ������������ ��� ���� ����� (��������������)";
$l_searchall	= "��������� ��� ����� ���� �����";
$l_searchallfrm	= "��������� �� ���� ��� �������� ����������";
$l_sortby	= "���������� ����";
$l_searchin	= "��������� ��";
$l_titletext	= "����� ��� �������";
$l_nomatches	= "��� �������� �������� ��� �� ����������. �������� ���������� ��� ���������.";

// Whosonline
$l_whosonline	= "����� ����� ������������;";
$l_nousers	= "������ ������� �� �������� ���� �� ������ ��� �������� ����������";

// Editpost
$l_notedit	= "��� ��������� �� �������� ������ ��� ��� ����� ���� ���.";
$l_permdeny	= "��� ������ �� ����� $l_password � ��� ����� �� �������� �� �������� ���� �� ������. $l_tryagain";
$l_editedby	= "�� $l_message ���������� ���:";
$l_stored	= "�� $l_message ������������ ��� ����.";
$l_viewmsg	= " ��� �� ���������� �� $l_message.";
$l_deleted	= "�� ������ �����������.";
$l_nouser	= "�� $l_username ��� �������.";
$l_passwdlost	= "������ �� ����������� ���!";
$l_delete	= "�������� ����� ��� ���������";

$l_disable	= "��������������";
$l_onthispost	= "�� ���� �� ������";

$l_htmlis	= "$l_html ";
$l_bbcodeis	= "$l_bbcode ";

$l_notify	= "���������� ���� email �� ������� ����������";

// Newtopic
$l_emptymsg	= "��� �� �������� ��� ������ ������ �� ������� ������ �������. ��� �������� �� �������� ���� ������.";
$l_aboutpost	= "������� �� ��� �������� ���������";
$l_regusers	= "���� �� <b>�������������</b> �������";
$l_anonusers	= "�� <b>��������</b> �������";
$l_modusers	= "���� �� <b>�����������</b> ��� �� <b>������������</b>";
$l_anonhint	= "<br>(��� �� �������� ������ ������� ����� �� ������ ����� ������ ��� �����������)";
$l_inthisforum	= "������� �� �������� ���������� ��� �� �������� ��� ������ ���";
$l_attachsig	= "�������� ��������� <font size=-2>(������ �� ��������� � �� �������� ��� ������ ���)</font>";
$l_cancelpost	= "������� ���������";

// Reply
$l_nopostlock	= "��� �������� �� �������� ���������� �� ���� �� ����, ���� ���������.";
$l_topicreview  = "���������� �������";
$l_notifysubj	= "�������� ��� �������� ��� ���� ���.";

$l_quotemsg	= '[quote]\n���� $m[post_time], �/� $m[username] ������:\n$text\n[/quote]';

// Sendpmsg
$l_norecipient	= "������ �� �������� �� ����� ������ ���� �� ����� ������ �� �������� �� ������.";
$l_sendothermsg	= "�������� ����� ���������� ���������";
$l_cansend	= "������� �� �������� ��������� ��������";  // All registered users can send PM's
$l_yourname	= "�� ����� ������ ���";
$l_recptname	= "����� ������ ���������";

// Replypmsg
$l_pmposted	= "�������� ��������, ������ <a href=\"viewpmsg.php\">���</a> ��� �� ����� �� ��������� ��� ��������";

// Viewpmsg
$l_nopmsgs	= "��� ����� ��������� ��������.";
$l_reply	= "��������";

// Delpmsg
$l_deletesucces	= "�������� ��������.";

// Smilies
$l_smilesym	= "�� �� �������";
$l_smileemotion	= "����������";
$l_smilepict	= "������";

/*****************************************************************
* questionnaire.inc.php
******************************************************************/
$langQuestionnaire = "�������������o";
$langSurveysActive = "������� ������� ���������� ������";
$langSurveysInactive = "��������� ������� ���������� ������";
$langSurveyName = "�����";
$langSurveyNumAnswers = "����������";
$langSurveyCreation = "����������";
$langSurveyDateCreated = "������������� ���";
$langSurveyStart = "�������� ���";
$langSurveyEnd = "��� �������� ���";
$langSurveyOperations = "�����������";
$langSurveyEdit = "�����������";
$langSurveyRemove = "��������";
$langSurveyQuestion = "�������";
$langSurveyAnswer = "��������";
$langSurveyAddAnswer = "�������� ����������";
$langSurveyType = "�����";
$langSurveyMC = "��������� ��������";
$langSurveyFillText = "����������� �� ����";
$langSurveyContinue = "��������";
$langSurveyMoreAnswers ="+ ����������";
$langSurveyMoreQuestions = "+ ���������";
$langSurveyCreate = "���������� ������� ���������� ������";
$langSurveyCreated ="� ������ ���������� ������ ������������� �� ��������.<br><br><a href=\"questionnaire.php\">���������</a>";
$langSurveyCreator = "����������";
$langSurveyCreationError = "������ ���� ��� ���������� ��� ������������. �������� ����������� ����.";
$langSurveyDeactivate = "��������������";
$langSurveyActivate = "������������";
$langSurveyParticipate = "���������";
$langSurveyDeleted ="� ������ ���������� ������ ���������� �� ��������.<br><br><a href=\"questionnaire.php\">���������</a>.";
$langSurveyDeactivated ="� ������ ���������� ������ ���������������� �� ��������.";
$langSurveyActivated ="� ������ ���������� ������ �������������� �� ��������.";
$langSurveySubmitted ="������������ ��� ��� ��������� ���!<br><br><a href=\"questionnaire.php\">���������</a>.";
$langSurveyUser = "�������";
$langSurveyTotalAnswers = "��������� ������� ����������";
$langSurveyNone = "��� ����� ������������ ������� ���������� ������ ��� �� ������";
$langSurveyInactive = "� ������ ���������� ������ ���� ����� � ��� ���� ������������� �����.";
$langSurveyCharts = "������������ �������";

$langQPref = "�� ���� ��������������� ����������;";
$langQPrefSurvey = "������ ���������� ������";
$langQPrefPoll = "�����������";

$langNamesPoll = "�������������";
$langNamesSurvey = "������� ���������� ������";
$langHasParticipated = "����� ��� �����������";

$langSurveyInfo ="�������� ��� ������ ������� (������� �� �� ������� COLLES/ATTL) � �������� ����� ��� ������� ��� ���� �����.";

$langQQuestionNotGiven ="��� ����� ������� ��� ��������� �������.";
$langQFillInAllQs ="�������� ��������� �� ���� ��� ���������.";

// polls
$langPollsActive = "������� �������������";
$langPollsInactive = "��������� �������������";
$langPollName = "�����";
$langPollCreation = "����������";
$langPollStart = "������";
$langPollStarted = "�������� ���";
$langPollEnd = "����";
$langPollEnded = "��� �������� ���";
$langPollOperations = "�����������";
$langPollEdit = "�����������";
$langPollRemove = "��������";
$langPollQuestion = "�������";
$langPollAnswer = "��������";
$langPollNumAnswers = "����������";
$langPollAddAnswer = "�������� ����������";
$langPollType = "�����";
$langPollMC = "��������� ��������";
$langPollFillText = "����������� �� ����";
$langPollContinue = "��������";
$langPollMoreAnswers ="+ ����������";
$langPollMoreQuestions = "+ ���������";
$langPollCreate = "���������� ������������";
$langPollCreated ="� ����������� ������������� �� ��������.<br><br> <a href=\"questionnaire.php\">���������</a>.";
$langPollCreator = "����������";
$langPollCreateDate = "� ����������� ������������� ���";
$langPollCreationError = "������ ���� ��� ���������� ��� ������������. �������� ����������� ����.";
$langPollDeactivate = "��������������";
$langPollActivate = "������������";
$langPollParticipate = "���������";
$langPollDeleted ="� ����������� ���������� �� ��������. <br><br><a href=\"questionnaire.php\">���������</a>.";
$langPollDeactivated ="� ����������� ���������������� �� ��������!";
$langPollActivated ="� ����������� �������������� �� ��������!";
$langPollSubmitted ="������������ ��� ��� ��������� ���!<br><br><a href=\"questionnaire.php\">���������</a>";
$langPollTotalAnswers = "��������� ������� ����������";
$langPollNone = "��� �������� ���� ��� ������ ���������� �������������.";
$langPollInactive = "� ����������� ���� ����� � ��� ���� ������������� �����.";
$langPollCharts = "������������ ������������";
$langIndividuals = "������������ ��� ������";
$langDelConf = "����������� ���������";
$langCollectiveCharts = "������������� ������������";


/************************************************************
* registration.inc.php
*************************************************************/

$langSee = "�������������";
$langNoSee = "���������� �������";
$langCourseName = "������ ���������";
$langCoursesLabel = '�������';
$langFaculte = "�����";
$langNoCoursesAvailable = "��� �������� ��������� �������� ��� �������";

$langEmptyFields = "������� ������ ����� ����!";
$langRegistration="�������";
$langSurname="�������";
$langUsername="����� ������ (username)";
$langConfirmation="����������� ������������";
$langUserNotice = "(����� 20 ����������)";
$langEmailNotice = "�� e-mail ��� ����� ����������, ���� ����� ���� �� �� �������� �� ���������
������������, ���� �� �������� �� ��������������� �� ���������� ����������� ������������.";
$langAm = "������� �������";
$langDepartment="����� / �����";
$langUserDetails = "�������� ���� ������";
$langSubmitNew = "������� �������";

// newuser_second.php
$langPassTwice="��������������� ��� ����������� �����������. �������������� �� ������� ���������޻ ��� browser ��� ��� �������������.";

$langUserFree="�� ����� ������ ��� ��������� ���������������!";

$langYourReg="� ������� ��� ���";
$langDear="�������";
$langYouAreReg="\n� ����������� ��� ���� ���������";
$langSettings="������������� �� ��������!\n�� ��������� �������� ��� ����������� ��� ����� �� ����:\n\n����� ������:";
$langAddressOf="\n\n� ��������� ���";
$langProblem="\n��� ��������� ��� �������������� ����������, ������������� �� ��� ����� ���������� ��������������";
$langFormula="\n\n������,\n";
$langManager="\n���������";
$langPersonalSettings="�� ���������� ��� ��������� ����� ����������� ��� ��� �������� ��� e-mail ��� �� ������� �� ����� ������ ��� �� ����������� ���.</p>";
$langPersonalSettingsMore="	����� ���� <a href='../../index.php'>���</a> ��� �� ��������� ��� ��������� ��� ������������.<br>
							���� ��������: 
							<ul>
								<li>�� ������������ ��� ���������� ��� ���������� ��� ��� ���������� ��� ��������,</li>
								<li>�� ��������� ���� \"�������� ���������\" �� �������� ��� ���������� �� ���������������.</li>
							<ul>";
$langYourRegTo="� ��������� ��������� ��� ��������";
$langIsReg="���� ����������";
$langCanEnter="������� ���� ������� �������.";
$langChoice="�������";
$langLessonName="����� ���������";
$langProfessors="���������(��)";

// profile.php
$langPassTwo="����� �������������� ��� ����������� ��� �����������";
$langAgain="���������������!";
$langFields="������� ������ ����� ����";
$langUserTaken="�� ����� ������ ��� ��������� ��� ����� ���������";
$langEmailWrong="� ��������� ������������ ������������ ��� ����� ������������ � �������� ������� ����������";
$langPassChanged="�� ����������� ��������� ���� ��������� ���� �������";
$langPassOldWrong="�� ����� ����������� ��������� ��� ������ ����� �����";
$langNewPass1="��� �����������";
$langNewPass2="��� ����������� (����)";
$langInvalidCharsPass="����� �������������� �� ����������� ���������� ��� ����������� ���";
$langInvalidCharsUsername="����� �������������� �� ����������� ���������� ��� ����� ������ ���";
$langProfileReg="�� ������� ��� ������ ��� �������������";
$langOldPass="����� �����������";
$langChangePass="������ ������������ ���������";

// user.php
$langNewUser = "������� ������";
$langModRight="������ ��� ����������� ����������� ���";
$langNone="�������";
$langNoAdmin="��� ����<b>���������� ����������� �� ���� �� site</b>";
$langAllAdmin="���� ����<b>��� �� ���������� ����������� �� ���� �� site</b>";
$langModRole="������ ��� ����� ���";
$langRole="�����";
$langIsNow="����� ����";
$langInC="�� ���� �� ������";
$langFilled="����� ������ ������ ����� ����.";
$langUserNo="�� ����� ������ ��� ���������";
$langTaken="��������������� ���. �������� ����.";
$langRegYou="��� ���� �������� ��� ������";
$langTheU="� �������";
$langAddedU="���� ���������. �������� ��� email �� �����";
$langAndP="��� �� ����������� ����";
$langDereg="���� ��������� ��� ���� �� ������";
$langAddAU="��������� ��� ������";
$langAdmR="���������� �����������";
$langUnreg = "��������";
$langAddHereSomeCourses = "<p>��� �� ���������� / ������������ �� / ��� ��� ������,
����� �������� �� ����� ��� ����� ��������� ��� ��� �������� �������� / ����������� �� ������.<br>
<p>��� �� ������������ �� ����������� ��� ������� '������� �������'</p><br>";
$langDeleteUser = "����� �������� ��� ������ �� ����������� ��� ������";
$langDeleteUser2 = "��� ���� �� ������";

// adduser.php - added by adia 2003-02-21
$langAskUser = "�������������� �� ������� � �� ����� � �� ����� ������ ��� �� ����������� ��� ������ ��� ������ �� ���������.
        <br><br>� ������� �� ������ �� ���� ��� ���������� ���� ��������� ��� �� ������� ��� ������ ���.";
$langAskManyUsers = "�������������� �� ����� ������� ������� � ����� ���� ��� ������� \"Browse\" ��� �� ��
    �����������.<br><br>�� ������� �� ������ �� ����� ��� ���������� ���� ��������� ��� �� �������� ���� ������
���.";
$langAskManyUsers2 = "<strong>��������</strong>: �� ������ ������� ������ �� ����� ���� ������ �������� �� �� �������
        ��� ������� ��� ��� ������. ����������:
    <br><br>
    eleni<br>
    nikos<br>
    spiros<br>
    ";
$langAskSearch = "�������������� �� ������� � �� ����� � �� ����� ������ ��� ������ �� �����������.";
$langAddUser = "�������� ���� ������";
$langAddManyUsers  = "�������� ������ �������";
$langOneUser = "���� ������";
$langManyUsers = "������ �������";
$langGUser = "������ ���������";
$langNoUsersFound = "�� ������� ������� ������� �� �� �������� ��� ������ � � ������� ������� ��� ��� ������ ���.";
$langRegister = "������� ������ ��� ������";
$langAdded = " ���������� ��� ������ ���.";
$langAddError = "������! � ������� ��� ���������� ��� ������. ����������� ����������� ���� � ������������� �� �� ����������� ��� ����������.";
$langAddBack = "��������� ��� ������ �������� �������";
$langAskUserFile = "����� �������";
$langFileNotAllowed = "����� ����� �������! �� ������ ������� ������ �� ����� ���� ������ �������� �� �� �������
��� ������� ��� ������";
$langUserNoExist = "� ������� ��� ����� ��������� ���� ���������";
$langUserAlready = "� ������� ����� ��� ��������� ��� ������ ���";
$langUserFile = "����� ������� �������";

// search_user.php 
$langphone= "��������";
$langUserNoneMasc="-";
$langTutor="��������";
$langTutorDefinition="�������� (�������� �� ��������� ��� ������ �������)";
$langAdminDefinition="������������ (�������� �� ������� �� ����������� ��� ���������)";
$langDeleteUserDefinition="�������� (�������� ��� ��� �������� ������� ��� <b>��������</b> ���������)";
$langNoTutor = "��� ����� �������� �� ���� �� ������";
$langYesTutor = "����� �������� �� ���� �� ������";
$langUserRights="���������� �������";
$langNow="����";
$langOneByOne="�������� ������";
$langUserMany="�������� ��������� ������� ���� ������� ��������";
$langUserAddExplanation="���� ������ ��� ������� ��� �� �������� �� �������� 5 �����:
         <b>�����&nbsp;&nbsp;&nbsp;�������&nbsp;&nbsp;&nbsp;
        ����� ������&nbsp;&nbsp;&nbsp;�����������&nbsp;
        &nbsp;&nbsp;email</b> ��� �� ����� ��������� �� tab.
        �� ������� �� ������ ���������� ���� email �� �� ����� ������ / �����������.";
$langDownloadUserList="�������� ���������";
$langUserNumber="�������";
$langGiveAdmin="�������� �����������";
$langRemoveRight="�������� �����������";
$langGiveTutor="�������� �����������";
$langUserOneByOneExplanation="����� (����) �� ����� ���������� ���� email �� ����� ������ ��� �����������";
$langBackUser="��������� ��� ����� �������";
$langUserAlreadyRegistered="���� ������� �� ���� ����� / ������� ����� ��� ��������� �� ���� �� ������.
                ��� �������� �� ��� (���) �����������.";

$langAddedToCourse="����� ��� ��������� ���� ��������� ���� ��� �� ���� �� ������. ���� �����.";
$langGroupUserManagement="���������� ������ �������";
$langRegDone="�� ������� ��� �������������.";
$langPassTooEasy ="�� ����������� ��� ����� ���� ����. �������������� ��� ����������� ��� ��� ����";
$langChoiceLesson ="������� ���������";
$langRegCourses = "������� �� ������";
$langChoiceDepartment ="������� ��������";
$langCoursesRegistered="� ������� ��� ��� �������� ��� ��������� ����� �� ��������!";
$langNoCoursesRegistered="<p>��� ��������� ������ ��� �������.</p><p> �������� �� ���������� �� ������, ���
������� ���� ��� �� ������ ���� ���������.</p>";
$langIfYouWantToAddManyUsers="�� ������ �� ���������� ��� �������� �� ������� ��� ������ ���, �������� �������������� ��� ����������� ����������.";
$langCourse="������";
$langLastVisits="�� ���������� ��� ����������";
$langLastUserVisits= "�� ���������� ���������� ��� ������ ";
$langDumpUser="��������� �������:";
$langExcel="�) �� ������ Excel";
$langCsv="�) �� ������ csv";
$langFieldsMissing="������� ������(�) ��� �� ����������� ����� ����(�) !";
$langFillAgain="����������� ��������������� ���";
$langFillAgainLink="������";
$langReqRegProf="������ �������� $langOfTeacher";
$langProfUname="��������� ����� ������ (Username)";

$profreason="(��������� ���� ������ ������ ��� ����������)";
$langProfEmail="e-mail ������";
$reguserldap="������� ������ ���� LDAP";

$langByLdap="���� LDAP";
$langNewProf="�������� ��������� ���� ����������� ��������";
$profsuccess="� ���������� ���� ����������� �������� ���������������� �� ��������!";

$langDearProf="������� ����������!";
$success="� �������� ��� ��������� ��� ����� �� ��������!";
$click="����� ����";
$langBackPage="��� �� ����������� ���� ������ ������.";

$emailprompt="����� ��� ��������� e-mail ���:";
$ldapprompt="����� �� ����������� LDAP ���:";
$univprompt="�������� �������������� ������";
$ldapnamesur="�������������:";
$langInstitution='������:';

$ldapuserexists="��� ������� ������� ��� ������� ������� �� �� �������� ��� ������.";
$ldapempty="������� ������ ��� �� ����� ����!";
$ldapfound="������� ���� ��������� LDAP ��� �� �������� ��� ����� ����� �����";
$ldapchoice="����������� �������� �� ������ ��� ����� �������!";
$ldapnorecords="��� �������� ��������. ������� �� ������ ����� ��������.";
$ldapwrongpasswd="�� ����������� ��� ������ ����� ����������. ����������� ��������� ����";
$ldapproblem="������� �������� �� �� �������� ���";
$ldapcontact="����������� ������������� �� ��� ����������� ��� ��������� LDAP.";
$ldaperror="��� ����� ������ � ������� ���� ��������� ��� LDAP.";
$ldapmailpass="�� ����������� ��� ����� �� ���� �� ���� ��� ��������� e-mail.";
$ldapback="��������� ����";
$ldaplastpage="����������� ������";
$mailsubject="������ ".$langOfTeacher." - �������� ���������� ��������������";
$mailsubject2="������ ".$langOfStudent." - �������� ���������� ��������������";
$contactphone="�������� ������������";
$contactpoint="�����������";
$searchuser="��������� ��������� / �������";
$typeyourmessage="�������������� �� ������ ��� ��������";
$emailsuccess="�� e-mail ��������!";
$langBackReq = "��������� ���� �������� �������� ���������";
$langTheTeacher = '� ��������';
$langTheUser = '� �������';
$langDestination = '����������:';
$langAsProf = '�� ���������';
$langTel = '���.';
$langPassSameLDAP = '�� ����������� ��� ����� ���� ��� ��������� ��������� (LDAP).';
$langLdapRequest = '������� ��� ��� ������ ��� ��� ������';
$langLDAPUser = '������� LDAP';
$langLogIn = '�������';
$langLogOut = '����������';
$langAction = '��������';
$langRequiredFields = '�� ����� �� (*) ����� �����������';
$langCourseVisits = "���������� ��� ������";

// user registration
$langAuthUserName = "����� �� ����� ������:";
$langAuthPassword = "����� �� ����������� ���:";
$langAuthenticateVia = "����������� ����";
$langAuthenticateVia2 = "���������� ������ ������������ ��� ������";
$langCannotUseAuthMethods = "� ������� ���� ���������, ���� �� ����� ��� �����������. �����������, ���������� �� ����������� ��� ����������";
$langAuthReg = "������� ������";
$langUserData = "�������� ������";
$langUserAccount = "����������� $langOfStudent";
$langProfAccount = "����������� $langOfTeacher";
$langUserAccountInfo1 = '(������)&nbsp;';
$langUserAccountInfo2 = '(����������)&nbsp;';
$langUserAccountInfo3 = '�����������, �������� �� ���������';
$langNewAccount = '���� �����������';
$langNewAccount�ctivation = '������������ �����������';
$langNewUserAccount�ctivation = "������������ ����������� $langOfStudent";
$langNewProfAccount�ctivation = "������������ ����������� $langOfTeacher";
$langNewAccount�ctivation1 = "��� ������������ ����������� ���";
$langUserExistingAccount = "�������� �������";

// list requests
$langDateRequest = "��/��� �������";
$langDateReject = "��/��� ���������";
$langDateClosed = "��/��� �����������";
$langDateCompleted = "��/��� �����������";
$langDeleteRequest = "��������";
$langRejectRequest = "��������";
$langListRequest = "����� ��������";
$langTeacherRequestHasDeleted = "� ������ ��� $langsOfTeacher ����������!";
$langRejectRequestSubject = "�������� ������� �������� ���� ��������� ���������� ��������������";
$langGoingRejectRequest = "��������� �� ���������� ��� ������ $langsOfTeacher �� ��������:";
$langRequestSendMessage = "�������� ��������� ��� ������ ���� ���������:";
$langRequestDisplayMessage = "��� ������ �� ���������� ��� �� �������� ������";
$langNoSuchRequest = "��� ������� ������ ������� ������ �� ���� �� ID. ��� ����� ������ � ����������� ��� �������.";
$langTeacherRequestHasRejected = "� ������ ��� $langsOfTeacher �����������";
$langRequestMessageHasSent = " ��� �������� ����������� ������ ��� ��������� ";
$langRequestHasRejected = "� ������ ��� ��� ������� ���� ��������� $siteName �����������.";
$langRegistrationDate = "��/��� ��������";
$langExpirationDate = "��/��� �����";
$langUserID = "������� ������";
$langStudentParticipation = "�������� ��� ����� ���������� � �������";
$langNoStudentParticipation = "� ������� ��� ���������� �� ������ ������";
$langCannotDeleteAdmin = "� ������� ����� (�� user id = 1) ����� � ������� ������������ ��� ���������� ��� �� �����������.";
$langExpireBeforeRegister = "������: H ��/��� ����� ����� ���� ��� ��/��� ��������";
$langSuccessfulUpdate = "����� ����������� � ���� ��������� ��� ���������� ".$siteName." �� �� ��� �������� ��� ��� ������ �� ID";
$langNoUpdate = "��� ����� ������ � ��������� ��� ��������� ��� �� ������ �� id";
$langUpdateNoChange = "��� �������� ������/������ ��� �� �������� ��� ������.";
$langError = "������";
$langRegistrationError = "����� ��������. ���������� ���� ������ ������ ��� ����������.";
$langUserNoRequests = "��� �������� �������� �������� �������� !";
$langCharactersNotAllowed = "��� ������������ ��� password ��� ��� username, �� ����������: ',\" � \\";
$langStar2 = "��� ����� �� (**) ";
$langEditUser = "����������� ��������� ������";
$langUnregForbidden = "��� ����������� �� ���������� ��� ������:";
$langUnregFirst = "�� ������ �� ���������� ����� ��� ������ ��� �� �������� ��������:";
$langUnregTeacher = "����� ".$langsTeacher." ��� �������� ��������:";
$langPlease = "�����������";
$langOtherDepartments = "������� �� �������� ����� ��������/������";
$langNoLessonsAvailable = "��� �������� ��������� ��������.";

// formuser.php
$langUserRequest = "������ ����������� ����������� $langOfStudent";
$langUserFillData = "���������� ���������";
$langUserOpenRequests = "�������� �������� $langOfStudents";
$langWarnReject = "��������� �� ���������� ��� ������ $langsOfStudent";
$langWithDetails = "�� ��������";
$langNewUserDetails = "�������� ����������� ������-�������";
$langInfoProfReq = "�� ���������� �� ����� ������� ���� ��������� �� ���������� ������ - ��������, �������� ����������� ��� �������� ������. � ������ �� ������ ���� �������� ����������� � ������ �� ������������ �� ���������� ��� �� ��� ������� �� �������� ���� ������������ ������������.";
$langInfoStudReg = "�� ���������� �� ����� �������� ���� ��������� �� ���������� ������ - �������, �������� ����������� �� �������� ��� ���� �������� �����. � ����������� ��� �� ������������ ��������.";
$langReason = "��������� ���� ������ ������ ��� ����������";
$langInfoStudReq = "�� ���������� �� ����� ������� ���� ��������� �� ���������� ������ - �������, �������� ����������� ��� �������� ������. � ������ �� ������ ���� �������� ����������� � ������ �� ������������ �� ���������� ��� �� ��� ������� �� �������� ���� ������������ ������������.";
$langInfoProf = "������� �� ��� ������ mail ��� ��� ����� ����������� ��� ���������� ���������� ��������������, �� �� �������� ��� ����������� ���.";
$langDearUser = "������� ������";
$langMailErrorMessage = "������������� ������ ���� ��� �������� ��� ��������� - � ������ ��� ������������, ���� ��� ��������. ����������� ������������� �� �� ����������� ��� ���������� ��� ���������";
$langUserSuccess = "���� ����������� �������";
$usersuccess="� ���������� ���� ����������� ������� ���������������� �� ��������!";
$langAsUser = "(����������� �������)";
$langChooseReg = "������� ������ ��������";
$langTryAgain = "��������� ����!";


/************************************************************
* restore_course.inc.php
*************************************************************/

// restore_course.php
$langRequest1 = "����� ���� ��� Browse ��� �� ����������� �� ��������� ��������� ��� ��������� ��� ������ �� �����������. ���� ����� ���� ��� '��������'. ";
$langRestore = "���������";

$langRequest2 = "�� �� ��������� ���������, ��� �� ����� �� ���������� �� ������, ����� ������ �� ������� ��� ��� �������� �� �� ���������, ���� �������� �� ��������������� �� ������ �������� (path) ��� ��������� �� ������ ���� server.";
$langRestoreStep1 = "1� �������� ��������� ��� ������ � �����������.";
$langDescribe = "�� ��������� ��������� ������� ��������� ��������� �� ��� ����������� ������ � �����������, ��� ����������� ��� 4 ����";
$langDescribe1 = "��� ����������� ������";
$langDescribe2 = "� ������������ ��� ��������";
$langDescribe3 = "�� ������ SQL ��� ��� ��������������� ��� ����� ��� ���������";
$langDescribe4 = "�� ������ SQL ��� �������� �� �������� ��� ��������� �����.";
$langFileNotFound = "�� ������ ��� �������.";
$langFileSent = "�������� ��� ������";
$langFileSentName = "�����:";
$langFileSentSize = "�������:";
$langFileSentType = "�����:";
$langFileSentTName = "��������� �����:";
$langFileUnzipping = "����������� ��� �������";
$langEndFileUnzip = "����� ������������";
$langLesFound = "�������� ��� �������� ���� ��� ������:";
$langLesFiles = "������ ��� ���������:";

$langInvalidCode = "�� ��������� ������� ���������";
$langCopyFiles = "�� ������ ��� ��������� ������������� ���";
$langCourseExists = "������� ��� ��� ������ �� ����� ��� ������ !";
$langUserExists = "��� ��������� ������� ��� ���� ������� �� username";
$langUserExists2 = "����������";
$langWarning = "<em><font color='red'>�������!</font></em> �� ��������� �� ��� ���������� �� ������� ��� ��������� ��� �� ��������� ��������� ��� ���������, �������� ������������ �� ����������� ��� ����������� �� ���� ������� (�.�. '�������� ��������', '����� ���������� �������' � '������ �������') ���� �� ����������� ����� <b>���</b> �� ����������.";
$langUserWith = "������! � ������� �� userid";
$langAlready = "��� ����������";
$langWithUsername = "� ������� �� username";
$langUserisAdmin = "����� ������������";
$langUsernameSame = "�� username ��� ��������� ����.";
$langUName = "����������";
$langInfo1 = "�� ��������� ��������� ��� ��������, �������� ��� �������� ����������� ��� �� ������.";
$langInfo2 = "�������� �� �������� ��� ������ ��� ��������� ��� ��� ���� ������ (�.�. ���������, ��������� �.��.)";
$langCourseFac = "����� / ����� ";
$langCourseOldFac = "����� ����� / �����";
$langCourseVis = "����� ���������";
$langCourseType = "����������� / ������������";
$langPrevId = "����������� user_id";
$langNewId = "��������� user_id";
$langUsersWillAdd = "�� ������� ��� ��������� �� ����������";
$langUserPrefix = "��� ������� ������� ��� ��������� �� ��������� ��� �������";
$langErrorLang = "��������! ��� �������� ������� ��� �� ������!";

/*****************************************************************
* search.inc.php
*****************************************************************/
$langDoSearch = "�������� ����������";
$langSearch_terms = "���� ����������: ";
$langSearchIn = "��������� ��: ";
$langSearchWith = "��������� �� ��������:";
$langNoResult = "��� �������� ������������";
$langIntroductionNote = "���������� ��������";
$langForum = "������� ����������";
$langOR = "����������� ���� ��� ���� �����";
$langNOT = "������� ��� ���� ���������� �����";
$langKeywords = "������ �������";
$langTitle_Descr = "����� ��� ����� � ����� ��� ��� ����� ��� ���������";
$langKeywords_Descr = "������ ���� � �� ������ ������� ��� ������������� �� �������� ������� ��� ���������";
$langInstructor_Descr = "�� ����� � �� ������� ��� ��������� ��� ���������";
$langCourseCode_Descr = "� ������� ��� ���������";
$langAccessType = "����� ���������";
$langTypeClosed = "�������";
$langTypeOpen = "�������";
$langTypeRegistration = "������� �� �������";
$langTypesRegistration = "������� �� �������";
$langAllTypes = "(���� �� ����� ���������)";
$langAllFacultes = "�� ���� ��� ������/�������";

/*****************************************************
* speedsubsribe.inc.php
******************************************************/
$langSpeedSubscribe = "������� ��� ������������ ���������";
$langPropositions="��������� �� ����������� ��������� ";
$langSuccess = "� ������� ��� ��� ������������ ����� �� ��������";
$lang_subscribe_processing ="���������� ��������";
$langAuthRequest = "���������� ���������� ���������";
$langAlreadySubscribe ="����� ��� �������������";
$langAs = "��";

/*******************************************************
* stat.inc.php
********************************************************/

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

/*******************************************************************
* toolmanagement.inc.php
********************************************************************/

$langTool = "��������";
$langUploadPage = "�������� �����������";
$langAddExtLink = "�������� ���������� ��������� ��� �������� �����";
$deleteSuccess = "� ��������� ����������";
$langDeleteLink = "����� �������/� ��� ������ �� ���������� ���� ��� ��������";
$langOperations="��������� �� ����������� ����������";
$langInactiveTools = "�������� ��������";
$langSubmitChanges = "������� �������";


/********************************************************************
* trad4all.inc.php
*********************************************************************/

$iso639_2_code = "el";
$langNameOfLang['greek']="��������";
$langNameOfLang['english']="�������";
$langNameOfLang['french']="��������";
$charset = 'iso-8859-7';
$dateFormatShort =  "%b %d, %y";
$dateFormatLong  = '%A, %e %B %Y';
$dateTimeFormatLong  = '%d %B %Y / ���: %R';
$timeNoSecFormat = '%R';

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
$langAdvancedSearch="������� ���������";
$langTitle="������";

/***************************************************************
* unreguser.inc.php
****************************************************************/
$langBackHome = "��������� ���� ������ ������";
$langAdminNo = "� ����������� ��� ����������� ��� ���������� ��� ������ �� ���������!";
$langExplain = "��� �� ����������� ��� ��� ���������, ������ ����� �� ������������ ��� �� �������� ��� ����� �������������.";
$langConfirm = "����������� ��������� �����������";
$langDelSuccess = "� ����������� ��� ���� ��������� ���� ���������.";
$langThanks = "������������ ��� �� ����� ��� ����������!";
$langNotice = "��������";
$langModifProfile="������ ��� ������ ���";

//unregcours.php
$langUnregCours = "��������� ��� ������";
$langCoursDelSuccess = "� ��������� ��� ��� �� ������ ����� �� ��������";
$langCoursError = "������ ���� ��� ��������� ��� ������";
$langConfirmUnregCours = "������ ������� �� ������������ ��� �� ������ �� ������";

/*******************************************************************
* usage.inc.php
********************************************************************/
 $langGDRequired = "���������� � ����������� GD!";
 $langPersonalStats="�� ���������� ���";
 $langUserLogins="���������� ������� ��� ������";
 $langStartDate = "���������� �������";
 $langEndDate = "���������� �����";
 $langAllUsers = "���� �� �������";
 $langAllCourses = "��� �� ��������";
 $langSubmit = "�������";
 $langModule = "����������";
 $langAllModules = "��� �� ������������";
 $langValueType = "����� �����������";
 $langQuantity = "��������";
 $langProportion = "����������";
 $langStatsType = "����� �����������";
 $langTotalVisits = "��������� E���������";
 $langVisits = "������� ����������";
 $langFirstLetterUser = "����� ������ ��������";
 $langFirstLetterCourse = "����� ������ ������";
$langFavourite = "��������� �������������";
 $langFavouriteExpl = "������������� � ��������� ���� ������ � ���� ��� ������� ��� ������������ ���� �� ��� ������� ��������.";
 $langOldStats = "�������� ������ �����������";
 $langOldStatsExpl = "�������������� ������������� ������� ���������� �������� ��������� ��� ���� �����.";
 $langOldStatsLoginsExpl = "�������������� ������������� ������� ���������� ������� �� ��� �������� ���� ��������� ��������� ��� ���� �����.";
 $langInterval = "��������";
 $langDaily = "��������";
 $langWeekly = "�����������";
 $langMonthly = "�������";
 $langYearly = "������";
 $langSummary = "�������������";
 $langDurationVisits = "������� �������� ����������";
 $langDurationExpl = "� ������� �������� ��� ���������� �� ���� ���������� ������������ ���� ����������.";
 $langMonths[1] = "���";
 $langMonths[2] = "���";
 $langMonths[3] = "���";
 $langMonths[4] = "���";
 $langMonths[5] = "���";
 $langMonths[6] = "����";
 $langMonths[7] = "����";
 $langMonths[8] = "���";
 $langMonths[9] = "���";
 $langMonths[10] = "���";
 $langMonths[11] = "���";
 $langMonths[12] = "���";

 #for monthly report
 $langMonths['01'] = "���������";
 $langMonths['02'] = "����������";
 $langMonths['03'] = "������";
 $langMonths['04'] = "�������";
 $langMonths['05'] = "����";
 $langMonths['06'] = "������";
 $langMonths['07'] = "������";
 $langMonths['08'] = "��������";
 $langMonths['09'] = "����������";
 $langMonths['10'] = "��������";
 $langMonths['11'] = "��������";
 $langMonths['12'] = "���������";
 $langPre = "�����������";
 $langPost = "������������";
 $langHidden = "�������";
 $langPres = "�����������";
 $langPosts = "������������";
 $langAddress = "���������";
 $langLoginDate = "����/��� �������";
 $langNoLogins = "��� ����� ����� ������� �� ������������ ������� ��������.";
 $langStatAccueil = "��� �� ������� �������� ��� ��������, ���������� ��� � �������� ����������, ��� �� ������ ��� ������� ��� ���������:";
 $langHost = "Host";

 #for platform Statistics
 $langUsersCourse = "������� ��� ������";
 $langVisitsCourseStats = "���������� �� ������� ���������";
 $langUserStats = "���������� ������";
 $langTotalVisitsCourses = "��������� ���������� �� ������� ���������";


/****************************************************************
* video.inc.php
*****************************************************************/

// video
$langFileNot="�� ������ ��� ��������";
$langTitleMod="� ������ ��� �������� �������������";
$langFAdd="�� ������ ����������";
$langDelF="�� ������ ����������";
$langAddV="�������� ������";
$langAddVideoLink="�������� ��������� ������";
$langsendV="�������� ������� ���� � ������";
$langVideoTitle="������ ������";
$langDescr="���������";
$langDelList="�������� ����";

// videolinks
$langVideoAdd = "� ��������� ����������";
$langVideoDel = "� ��������� �����������";
$langVideoMod = "�� �������� ��� ��������� ��������������";
$langVideoDeleted = "���� �� ��������� ������������";
$langURL="���������� ��������� ���� ��� ����������� ���� � ������";
$langcreator="����������";
$langpublisher="�������";
$langdate="����������";
$langAreYouSureToDelete = "����������� ���������";

/*************************************************************
* wiki.inc.php
**************************************************************/
$langAddImage = "������������ ������";
$langAdministrator = "������������";
$langChangePwdexp = "����� ��� ����� ��� ������ (password) ��� �� ����� ������, ������ ���� ��� �� ��������� ��� ����";
$langChooseYourPassword = " ������� ���� ��� ����� ������ ��� ���� ������ ��������� ��� �� ���������� ������. ";
$langCloseWindow = "������� �� ��������";
$langCodeUsed = "����� � �������� ������� ��������������� ��� ��� ���� ������.";
$langContinue = " �������� ";
$langCourseManager = "������������ ���������";
$langDelImage = "�������� �������";
$langFirstname = "�����";
$langGroups = "������ �������";
$langIs = "�����";
$langLastname = "�������";
$langLegendRequiredFields = "<span class=\"required\">*</span> ������� ���������� ����� ";
$langMemorizeYourPassord = "���������� ��, �� �� ���������� ��� ������� ���� ��� �� ����� �� ���� �� ������.";
$langModifyProfile = "������ ��� ������ ���";
$langOfficialCode = "������� �����������";
$langOneResp = "���� ��� ���� ������������ ��� ���������";
$langPersonalCourseList = "��������� ����� ���������";
$langPreview = "����������/�������";
$langSaveChanges = "���������� �������";
$langTheSystemIsCaseSensitive = "(������� �������� ������ ��������� ��� ����� ���������.)";
$langUpdateImage = "������ �������";
$langUserIsPlaformAdmin = "����� ������������ ��� ���������� ";
$langUserid = " ��������� ������";
$langWikiAccessControl = " ���������� ������� ��������� ";
$langWikiAccessControlText = " �������� �� ������ �� ���������� ��������� ��� ���� ������� ��������������� �� �������� ������: ";
$langWikiAllPages = " ���� �� ������� ";
$langWikiBackToPage = " ���� ��� ������ ";
$langWikiConflictHowTo = "<p><strong>������� �� ���������</strong> : � ������ ��� ���������� ������� ��� ���� �������� ��� �� ����� ��� ��� �������.<br /><br />
�� ��� �� ������ ����;<ul>
<li>������� �� �����������/������������ ��� ������� ��� �� ��� ������������ (���� �� notepad) ��� ���� ���� ���  'edit last version' ��� �� ������������ �� ���������� ��� ������� ��� ���� ���������� ������ ��� �������.</li>
<li>������� ������ �� �������� ��� ����� ��� �� ��������� ��� ������� ���.</li>
</ul></p>";
$langWikiContentEmpty = " ���� � ������ ����� ����, ���� ���� ��� 'Edit this page' ��� �� ���������� �����������";
$langWikiCourseMembers = " ���� ��������� ";
$langWikiCreateNewWiki = " ������������ ��� ��� Wiki";
$langWikiCreatePrivilege = " ������������ ������� ";
$langWikiCreationSucceed = "� ���������� ��� Wiki ���� �����������";
$langWikiDefaultDescription = " �������� ��� ��������� ��� ���� ��� wiki ���";
$langWikiDefaultTitle = "���������� Wiki";
$langWikiDeleteWiki = "�������� Wiki";
$langWikiDeleteWikiWarning = " ������������� : ��������� �� ���������� ���� �� wiki ��� ���� ��� ������� ���. ����� ������� ��� ������ �� ����������;";
$langWikiDeletionSucceed = "� �������� ��� Wiki ���� �����������";
$langWikiDescription = "��������� ��� Wiki";
$langWikiDescriptionForm = "��������� Wiki";
$langWikiDescriptionFormText = " �������� �� ��������� ���� ����� ��� �� wiki : ";
$langWikiDiffAddedLine = " ������������ ������ ";
$langWikiDiffDeletedLine = " ����������� ������ ";
$langWikiDiffMovedLine = " ������������ ������ ";
$langWikiDiffUnchangedLine = " ���������� ������ ";
$langWikiDifferenceKeys = " ������� :";
$langWikiDifferencePattern = " �������� ������ ��� ������� %1\$s �������������� ��� %2\$s ��� ��� ������� %3\$s �������������� ��� %4\$s";
$langWikiDifferenceTitle = " �������� :";
$langWikiEditConflict = "������ ����������";
$langWikiEditLastVersion = "������ ���������� �������";
$langWikiEditPage = " ������ ����� ��� �������";
$langWikiEditPrivilege = " ������ �������";
$langWikiEditProperties = " ������ ���������";
$langWikiEditionSucceed = " � ������ Wiki ����� �����������";
$langWikiGroupMembers = "���� ������";
$langWikiHelpAdminContent = "<h3>������� ����������� Wiki</h3>
<dl class=\"������� wiki\">
<dt> ��� �� ������������� ���� ��� Wiki ?</dt>
<dd> ����� ���� ��� ������� 'Create a new Wiki'. ���� �������� ��� ��������� ��� Wiki :
<ul>
<li><b> ������ ��� Wiki</b> : �������� ���� ����� ��� �� Wiki</li>
<li><b> ��������� ���  Wiki</b> : �������� ��� ��������� ��� �� Wiki</li>
<li><b> ���������� ������� ��������� </b> : ����� ��� ������ ��������� ��� ��� Wiki �����������/�������������� �� ����� (����� ��� ����)</li>
</ul>
</dd>
<dt> ��� �� ���������� �� Wiki ?</dt>
<dd> ����� ���� ���� ����� ��� Wiki ���� ��������.</dd>
<dt> ��� �� �������� ��� ��������� ��� Wiki ?</dt>
<dd>����� ���� ��� ��������� 'Properties' ���� ����� ��� Wiki ��� ������� ��� ����� ��������� ��� Wiki.</dd>
<dt> ��� �� �������������� ��� ����������� �������� ������� ���������;</dt>
<dd> �������� �� ������ �� ���������� ��������� ��� ���� ������� �� ��� �������/���������� ��� ������� ��� \"����������\" ����� ������� ��������� ��� ��������� Wiki.
 �������� �� ����������/�� ���������� �������� �� ����� ������ �������:<ul>
<li><b> ���� ��������� </b> : �� ������� ����������� ��� ����� ��������� (����� ��� ���� ���������� ���������)</li>
<li><b> ���� ������ </b> (���� ��������� ���� ��  ��� �����) : ������� ��� ����� ���� ��� ������ (���������� ���� ��������� ������ s)</li>
<li><b>����� ������� </b> : �������� ������� � ������� ��� ��� ����� ���� ������ ��������� </li></ul>
��� ���� ���� �������, �������� �� ���������� ��� ���� ����� ��������� ��� �� Wiki(*) :<ul>
<li><b> �������� ��� ������� </b> : � ������� ��� ��������� ����� ������ �� �������� ��� ������� ��� Wiki</li>
<li><b>������ �������</b> : � ������� ��� ��������� ����� ������ �� ������������ �� ����������� ��� ������� ��� Wiki</li>
<li><b> ������������ ��� ������� </b> : � ������� ��� ��������� ����� ������ �� ������������ ���� ������� ��� Wiki</li>
</ul><small><em>(*) ��������� ��� ��� ���� ������� ��� ������ �� �������� ��� ������� ���  Wiki, ��� ������ �� ��� ������� � �� ��� ������������. ��������� ��� ��� ���� ������� ��� ������ �� ������� ��� ������� ��� Wiki, ��� ������ �� ������������ ���� �������.</em></small></dd>
<dt> ��� �� ��������� �� Wiki ?</dt>
<dd>����� ���� ��� ��������� 'Delete' ��� ����� ��� �� ������� �� Wiki ��� ���� ��� ��� �������.</dd>
<dt> ��� �� ������ ��� �������� ��� ������� �� ��� Wiki ;</dt>
<dd>����� ���� ���� ������ ��� ������� �� ���� �� Wiki ���� ����� ��� Wiki.</dd>
<dt> ��� �� ������ ��� �������� ���  ���������� �������������� ������� �� ��� Wiki;</dt>
<dd>����� ���� ��� ��������� 'Recent changes' ��� ����� ��� ��������� ��� Wiki.</dd>
</dl>";
$langWikiHelpSyntax = "������� ��� Wiki ";
$langWikiHelpSyntaxContent = "<h1>������� Wiki </h1>
<h2>1. ������ ������� </h2>
<dl class=\"������� wiki\">
<dt> ���������� ��� ������� ��� ��� ��������� wiki ������ ���� </dt>
<dd><strong>������ Wiki </strong> : �� ������ Wiki ����� ������ ��� ��������� ���� <em>���� Wiki</em>. �� Wiki2xhtml ���� ������������ ������� �� ��������� ������� Wiki. ��� �� ������������� ��� ������ wiki � ��� �� ������������� ��� ������� �� ��� ������ wiki, ������������ ��� ��� ��������� ��� ��������� �� ����� ���� ������� ��� wiki, ��� ���������� <em>� ������ ���</em>, ��� ���� ������ �� ������. Wiki2xhtml �� �������������� �������� ��� ����<em>� ������ ���</em> �� ��� ������� �� �� ������ Wiki <em>� ������ ���</em>&nbsp;;</dd>
<dd><strong> ���������  Wiki </strong> : �� ��������� Wiki ����� ���� ���� ���������� ����-�������� (��. ��������) ��������� ��� ��� ��������� ����������� ������ ����������� (���� <em>http://</em> � <em>ftp://</em>) ��� ��� �������� ������������ ���������� �� �������  Wiki. ��� �� ������������� ��� ��� ������ � �� ������������� ��� ������� �� ��� ��������� ��� ������������ ��� ��������� Wiki, ������� ��� ������ ��� ��������� <code>[page title]</code> � <code>[name of link|title of page]</code> ��� ����������� ���. �������� ������ �� ��������������� ����� ��� ������� ��� �� �������� �� ������� ���� �������� WikiWord: <code>[����� ���������|WikiWord]</code>.</dd>
<dt> ��������� ����-�������� </dt>
<dd><code>[url]</code>, <code>[name|url]</code>, <code>[name|url|language]</code> or <code>[name|url|language|title]</code>.&nbsp;;</dd>
<dt> �������������� ������� </dt>
<dd><code>((url|alternate text))</code>, <code>((url| ������������� ������� |position))</code> ou <code>((url|alternate text|position|long description))</code>. <br /> �� ���������� ����� ������ �� ����� ��� ��������� ����� : L (��������), R (�����) or C (��������).&nbsp;;</dd>
<dd> �������� �� ��������������� �� ������� �� ���������� ����-��������. ������������� ����� <code>[������|image.gif]</code>. ���� � ������� ����� ��������������, �������� �� �������������� ��� �����������&nbsp;;</dd>
<dt> ������� �� ��� ������ </dt>
<dd> ���� ���� ���������� ����-�������� ���� ��������� 0 ��� ������� ���������� ��� �� ���������� � ���������� ������� ��� �� ������ ���� ��������� ����-�������� �� ��� ������. ������������� ����� <code>[image|image.gif||0]</code> �� ��������� ��� ������� �� ��� image.gif i���� ��� �������� ��� ����� ��� �����������</dd>
<dt> ������������ </dt>
<dd><strong> ������ </strong> : ��������� �� ������� ��� �� ��� ������ ����������� <code>'' ������� ''</code>&nbsp;;</dd>
<dd><strong>������</strong> : ��������� �� ������� ��� �� ���� ������ ����������� ������������ <code>''' ������� '''</code>&nbsp;;</dd>
<dd><strong>�����������</strong> : ��������� �� ������� ��� �� ��� ������������ <code>__ ������� __</code>&nbsp;;</dd>
<dd><strong> ������</strong> : ��������� �� ������� ��� �� ��� �������� ������� <code>-- ������� --</code>&nbsp;;</dd>
<dd><strong> ������ </strong> : <code>!!!</code>, <code>!!</code>, <code>!</code> ���������� ��� ���� �������, ���� ���������� ��� ���� ���-���-������� &nbsp;;</dd>
<dt> ��������� </dt>
<dd> ������ ���������� ��� <code>*</code> (���������� ���������) � <code>#</code> (����������� ���������). �������� �� ��������� ���� ���������� (<code>*#*</code>) ��� �� ������������� ���� - ��������� ��������.&nbsp;;</dd>
<dt> ���������� </dt>
<dd> �������� ���������� �� ��� � ������������ ���� ������� &nbsp;;</dd>
</dl>
<h2>2. ����������� ������� </h2>
<dl class=\"������� wiki\">
<dt> ����������� </dt>
<dd><code>\$\$ ������� ������������� \$\$</code>&nbsp;;</dd>
<dt>������������� ������� </dt>
<dd> ������� ���� ������ ��� ������� �� ��� ���� �������� &nbsp;;</dd>
<dt> ��������� ������� </dt>
<dd><code>&gt;</code> � <code>;:</code> ���� ��� ���� ������ &nbsp;;</dd>
<dt> ��������� ������ </dt>
<dd><code>----</code>&nbsp;;</dd>
<dt> ����������� ������� ������� </dt>
<dd><code>%%%</code>&nbsp;;</dd>
<dt>��������</dt>
<dd><code>??��������??</code> or <code>??��������|�������??</code>&nbsp;;</dd>
<dt>��������������� ������� </dt>
<dd><code>{{�������}}</code>, <code>{{�������|������}}</code> or <code>{{�������|������|url}}</code>&nbsp;;</dd>
<dt>�������</dt>
<dd><code>@@� ������� ��� ���@@</code>&nbsp;;</dd>
<dt>����� �����������</dt>
<dd><code>~��������~</code>&nbsp;;</dd>
</dl>";
$langWikiIdenticalContent = " ���� ����������� <br />����� ������ ��� ������������";
$langWikiInvalidWikiId = "�� ������ Wiki Id";
$langWikiList = "����� ��� Wiki";
$langWikiMainPage = "����� ������";
$langWikiMainPageContent = "���� ����� � ����� ������ ��� Wiki %s. ������� '''Edit''' ��� �� ������������� �� �����������.";
$langWikiNoWiki = "������ Wiki";
$langWikiNotAllowedToCreate = " ��� ����������� �� ������������� ������";
$langWikiNotAllowedToEdit = " ��� ����������� �� �������� ���� �� ������";
$langWikiNotAllowedToRead = "��� ����������� �� ��������� ���� �� ������";
$langWikiNumberOfPages = "������� �������";
$langWikiOtherUsers = "����� ������� (*)";
$langWikiOtherUsersText = "(*) �������� ������� ��� ������� ��� ��� ����� ���� ����� ��� ���������...";
$langWikiPageHistory = "�������� �������";
$langWikiPageSaved = "� ������ ������������";
$langWikiPreviewTitle = "������������� : ";
$langWikiPreviewWarning = " �������������: ���� � ������ �������� �������������.  �� ������������� ��� ��� wiki ��� ����� ����������� ����� ! ��� �� ��� ������������ �� �������� �� ������ ���� ��� ������ 'save' ��� ����� ��� �������.";
$langWikiProperties = "���������";
$langWikiReadPrivilege = "������� �������";
$langWikiRecentChanges = "��������� �������";
$langWikiRecentChangesPattern = "%1\$s ������������� ���� %2\$s ��� %3\$s";
$langWikiShowDifferences = "����� ��� ��������";
$langWikiTitle = "������ ��� wiki";
$langWikiTitleEdit = "Wiki : �������� ��� ���������";
$langWikiTitleNew = "Wiki : ����������� ���������� Wiki";
$langWikiTitlePattern = "Wiki : %s";
$langWikiVersionInfoPattern = "(������ ��� %1\$s ������������� ���%2\$s)";
$langWikiVersionPattern = "%1\$s ��� %2\$s";
$lang_footer_p_CourseManager = "��������� ��� %s";
$lang_p_platformManager = "������������ ��� �� %s";

/*************************************************************
* work.inc.php
**************************************************************/

$langBackAssignment = "��������� ��� ������ ��� ��������";

$m['activate'] = "������������";
$m['deactivate'] = "��������������";
$m['deadline'] = "��������� ��������";
$m['username'] = "����� �������";
$m['filename'] = "����� �������";
$m['sub_date'] = "���������� ���������";
$m['comments'] = "������";
$m['gradecomments'] = "������ �����������";
$m['addgradecomments'] = "�������� ������� �����������";
$m['delete'] = "��������";
$m['edit'] = "������";
$m['start_date'] = "���������� �������";
$m['grade'] = "������";
$m['am'] = "������� �������";
$m['yes'] = "���";
$m['no'] = "���";
$m['in'] = "��";
$m['today'] = "������";
$m['tomorrow'] = "�����";
$m['expired'] = "����&nbsp;�����";
$m['submitted'] = "����&nbsp;���������";
$m['select'] = "�������";
$m['groupsubmit'] = "���������� �� ������ ���";
$m['ofgroup'] = "������";
$m['deleted_work_by_user'] = "����������� � ����������� �����������
	������� ��� ������ ������� ��� ������";
$m['deleted_work_by_group'] = "����������� � ����������� ������� ���
	���� ��������� ��� ������ ����� ��� ������ ��� ��� ��������� ��� ������";
$m['by_groupmate'] = '��� ���� ����� ��� ������ ���';
$m['the_file'] = '�� ������';
$m['was_submitted'] = '���������� ���� �������.';
$m['group_sub'] = '�������� �� ������ �� ��������� �� ������ ����
	�� ������ ��� ������ ���';
$m['group'] = '�����';
$m['already_group_sub'] = '���� ��� ��������� � ������� ���� ��� ������
	����� ��� ������ ���';
$m['group_or_user'] = '����� ��������';
$m['group_work'] = '�������';
$m['user_work'] = '�������';
$m['submitted_by_other_member'] = '�� ������ ���� ���������� ��� ���� ����� ���';
$m['your_group'] = '������ ���';
$m['this_is_group_assignment'] = '� ������� ���� ����� �������. ��� ��
	�������� ������ ������, ��������� ���';
$m['group_documents'] = '���� ������� ��� ������ ���';
$m['select_publish'] = '��� �������� ����������� ��� �� ������ ��� ������.';
$m['noguest'] = '��� �� ����������� ������� ������ �� ����������
	�� ��������� �������.';
$m['one_submission'] = '���� ��������� ��� �������';
$m['more_submissions'] = '����� ��������� %d ��������';
$m['plainview'] = '��������� ����� �������� - �����������';

$langGroupWorkIntro = '
	�������� ������������ �� ���������� �������� ��� ����� ��������
	��� ������� ����� ��� ���������. ����������� �������� ��� ������� ���� ������
	�� ����������� �� ������ �� ������� ��� ������ ���, ��� �����������
	����� ������ ��� ������ �� �������� � �������� ��� ���������. ��������� ���
	�� �������� ��� ������ ��� ������� ��� ���� ��� ��������� ������ ������ ��
	������� �������, ���� ��� ���� ���� ��� ������ ���� ����� ��� ������, ��
	������ ���� �� ����� ��� �� �������������� ��� �� ���. �����,
	��� �������� �� �������� ������ �� ������� ��� ���� ��� ������������
	��� ��� ����������.';

$langEditSuccess = "� �������� ��� ��������� ��� �������� ����� �� ��������!";
$langEditError = "������������� �������� ���� ��� �������� ��� ��������� !";
$langNewAssign = "���������� ��������";
$langDeleted = "� ������� ����������";
$langDelAssign = "�������� ��������";
$langDelWarn1 = "��������� �� ���������� ��� ������� �� �����";
$langDelSure = "����� ��������;";
$langWorkFile = "������";
$langZipDownload = "��������� ���� ��� �������� �� ������ .zip";

$langDelWarn2 = "���� ��������� ��� ������� �������. �� ������ ���� �� ���������!";
$langDelTitle = "�������!";
$langDelMany1 = "����� ���������";
$langDelMany2 = "�������� ��������. �� ������ ���� �� ����������!";
$langSubmissions = "�������� �������� ��� ����� ���������";
$langSubmitted = "� ������� ���� ���� ��� ���������.";
$langNotice2 = "���������� ���������";
$langNotice3 = "�� �������� ������ ���� ������, �� ������ ��� �������
	���� �� ������ �� ������� ��� �� �������������� �� �� ���.";
$langSubmittedAndGraded = "� ������� ���� ���� ��� ��������� ��� ������������.";
$langSubmissionDescr = "� �������� %s, ���� %s, ������� �� ������ �� ����� \"%s\".";
$langEndDeadline = "(� ��������� ���� �����)";
$langWEndDeadline = "(� ��������� ����� �����)";
$langNEndDeadLine = "(� ��������� ����� ������)";
$langDays = "������)";
$langDaysLeft = "(���������";
$langGrades = "H ���������� ��� ������������ �� ��������";
$langUploadSuccess = "�� �������� ��� �������� ��� ������������ �� �������� !";
$langUploadError = "�������� ���� �� �������� ��� ��������!";
$langWorkGrade = "� ������� ���� ������������ �� �����";
$langGradeComments = "�� ������ ��� ����������� ����:";
$langGradeOk = "���������� �������";

$langGroupSubmit = "�������� �������� ��������";
$langGradeWork = "������ �����������";
$langUserOnly="��� �� ���������� ��� ������� ������ �� ������ login ��� ���������.";
$langNoSubmissions = "��� ����� ��������� ��������";
$langNoAssign = "��� �������� ��������";
$langWorkWrongInput = '� ������ ������ �� ����� �������. �������� ���������� ��� ��������������� �� �����.';

$langWarnForSubmissions = "�� ����� ��������� ��������, ����� �� ����������";
$langAssignmentActivated = "� ������� ��������������";
$langAssignmentDeactivated = "� ������� ����������������";
$langSaved = "�� �������� ��� �������� �������������";

?>
