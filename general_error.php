<?PHP
/**===========================================================================
*              GUnet e-Class 2.0
*       E-learning and Course Management Program
* ===========================================================================
*	Copyright(c) 2003-2006  Greek Universities Network - GUnet
*	� full copyright notice can be read in "/info/copyright.txt".
*
*  Authors:	Costas Tsibanis <k.tsibanis@noc.uoa.gr>
*				Yannis Exidaridis <jexi@noc.uoa.gr>
*				Alexandros Diamantidis <adia@noc.uoa.gr>
*
*	For a full list of contributors, see "credits.txt".
*
*	This program is a free software under the terms of the GNU
*	(General Public License) as published by the Free Software
*	Foundation. See the GNU License for more details.
*	The full license can be read in "license.txt".
*
*	Contact address: 	GUnet Asynchronous Teleteaching Group,
*						Network Operations Center, University of Athens,
*						Panepistimiopolis Ilissia, 15784, Athens, Greece
*						eMail: eclassadmin@gunet.gr
============================================================================*/

/**
 * General Error Component
 * 
 * @author Evelthon Prodromou <eprodromou@upnet.gr>
 * @version $Id$
 * 
 * @abstract Outputs a message to the user's browser to inform him/her that an error occured
 *
 */
	$tool_content =  "
	<table cellpadding='6' cellspacing='0' border='0' width='650' bgcolor='#E6E6E6'>
        <tr bgcolor='navy'>
        <td valign='top' align='center'>
        <font color='white' face='arial, helvetica'>��������� ���������� �������������� e-Class</font>
        </td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr bgcolor='#E6E6E6'><td>
        <b>� ��������� ���������� �������������� ��� ���������� !</b>
        <p>������� �����:
        <ul><li>������� �������� �� ��� MySQL (������������� �� �� ����������� ��� ����������).</li>
        <li>������� �������� ���� ��������� ��� ������� <tt>config.php</tt></li></ul></p>
        </td>
        </tr>
        <tr bgcolor='#E6E6E6'>
        <td><p>���� ������� �����, ������, ����� ��� �������������� ��� ��������� ��� ����� ����.</p>
        �� ���� ��� ��������� ����� ���� ���� <a href=\"./install/\">����� ������������</a>
        ��� �� ���������� �� ��������� ������������.
        </td>
        </tr>
	</table>";
	echo $tool_content;
	exit();


?>