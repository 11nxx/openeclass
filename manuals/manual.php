<? 
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
 * e-Class manuals Component
 * 
 * @author Evelthon Prodromou <eprodromou@upnet.gr>
 * @version $Id$
 * 
 * @abstract This component offers  the platform's manuals.
 *
 */

$path2add=2;
include '../include/baseTheme.php';
$nameTools = "��������� ����������";

$tool_content = "";
$urlServerTemp = strrev(substr(strrev($urlServer),1));

$tool_content .= <<<tCont
<p>��� ������ ���� �� ������ ������� ���������� ��� ������� ��� ��������� e-Class.</p>
<ul class="listBullet">

<li><a href="$urlServerTemp/manuals/e-Class.pdf" target=_blank>��������� ��������� e-Class</a></li>
<li><a href="$urlServerTemp/manuals/e-Class_short.pdf" target=_blank>������� ��������� e-Class</a></li>



<li>���������� ������ (������/�������): �� ����� <a href="$urlServerTemp/manuals/manS/ManS.pdf" target=_blank>PDF</a>
� <a href="$urlServerTemp/manuals/manS/ManS.htm" target=_blank>HTML</a></li>
<li>���������� ��������: �� ����� <a href="$urlServerTemp/manuals/manT/ManT.pdf" target=_blank>PDF</a>
� <a href="$urlServerTemp/manuals/manT/ManT.htm" target=_blank>HTML</a></li>


<li><a href="$urlServerTemp/manuals/Teleteaching_Std.pdf" target=_blank>������� ���������� �����������</a></li>

</ul>


<p>��� �� ��������� �� ������ PDF �������� �� ��������������� �� ���������
Acrobat Reader ��� �� ������ <a href="http://www.adobe.com/products/acrobat/readstep2.html" 
target=_blank>���</a>.</p>

tCont;

draw($tool_content, 0);
?>