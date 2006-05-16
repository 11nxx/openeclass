<?php
/**
 * Dropbox module for Dokeos/Claroline
 * language file in English language. 
 * To make a version in your own language, you have 2 options:
 * 		- if you want to make use of the multilanguage tool in Claroline (this way you
 * 		can make 2 seperate courses in 2 different languages and Claroline will take
 * 		care of the translations) this file must be placed in the .../claroline/lang/English/
 * 		directory and the copy of this file that contains the translations must be placed in 
 * 		the .../claroline/lang/YourLang/ directory. Be sure to give the translated version the same 
 * 		name as this one.
 * 		- if you're sure you will only need the dropbox module in 1 language, you can just leave this
 * 		file in the current directory (.../claroline/plugin/dropbox/) and translate each variable into
 * 		the correct language.
 * 
 * @version 1.20
 * @copyright 2004
 * @author Jan Bols <jan@ivpv.UGent.be>
 * with contributions by Ren� Haentjens <rene.haentjens@UGent.be> (see RH)
 */
/**
 * +----------------------------------------------------------------------+
 * |   This program is free software; you can redistribute it and/or      |
 * |   modify it under the terms of the GNU General Public License        |
 * |   as published by the Free Software Foundation; either version 2     |
 * |   of the License, or (at your option) any later version.             |
 * |                                                                      |
 * |   This program is distributed in the hope that it will be useful,    |
 * |   but WITHOUT ANY WARRANTY; without even the implied warranty of     |
 * |   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the      |
 * |   GNU General Public License for more details.                       |
 * |                                                                      |
 * |   You should have received a copy of the GNU General Public License  |
 * |   along with this program; if not, write to the Free Software        |
 * |   Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA          |
 * |   02111-1307, USA. The GNU GPL license is also available through     |
 * |   the world-wide-web at http://www.gnu.org/copyleft/gpl.html         |
 * +----------------------------------------------------------------------+
 * |   Authors: Jan Bols          <jan@ivpv.UGent.be>              	      |
 * +----------------------------------------------------------------------+
 */

/*
* General variables
*/
$dropbox_lang["dropbox"] = '����� ���������� �������';
$dropbox_lang["help"] = '�������';

/**
 * error variables
 */
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
/**
 * upload file variables
 */
$dropbox_lang['uploadFile'] = "�������� �������";
$dropbox_lang['authors'] = "����������";
$dropbox_lang['description'] = "��������� �������";
$dropbox_lang['sendTo'] = "�������� ����/����";

/**
 * Sent/Received list variables
 */
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

/**
 * Feedback variables
 */
$dropbox_lang['docAdd'] = "�� ������ �������� �� ��������";
$dropbox_lang['fileDeleted'] = "�� ���������� ������ ���� ��������� ��� �� ���� ���������� �������.";
$dropbox_lang['backList'] = "��������� ��� ���� ���������� �������";

/**
 * RH: Mailing variables
 */
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

/**
 * RH: Just Upload
 */
$dropbox_lang['justUploadInSelect'] = "--- �������� ������� ---";
$dropbox_lang['justUploadInList'] = "�������� ������� ��� ���/���";
$dropbox_lang['mailingJustUploadNoOther'] = "�� �������� ������� ��� ������ �� ���������� �� �������� �� ������ ����������";
?>
