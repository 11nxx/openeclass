<? 
/*
      +----------------------------------------------------------------------+
      | e-Class version 1.2                                                  |
      | based on CLAROLINE version 1.3.0 $Revision$                   |
      +----------------------------------------------------------------------+
      | Copyright (c) 2001, 2002 Universite catholique de Louvain (UCL)      |
      | Copyright (c) 2003 GUNet                                             |
      +----------------------------------------------------------------------+
      |   This program is free software; you can redistribute it and/or      |
      |   modify it under the terms of the GNU General Public License        |
      |   as published by the Free Software Foundation; either version 2     |
      |   of the License, or (at your option) any later version.             |
      |                                                                      |
      |   This program is distributed in the hope that it will be useful,    |
      |   but WITHOUT ANY WARRANTY; without even the implied warranty of     |
      |   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the      |
      |   GNU General Public License for more details.                       |
      |                                                                      |
      |   You should have received a copy of the GNU General Public License  |
      |   along with this program; if not, write to the Free Software        |
      |   Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA          |
      |   02111-1307, USA. The GNU GPL license is also available through     |
      |   the world-wide-web at http://www.gnu.org/copyleft/gpl.html         |
      +----------------------------------------------------------------------+
      | e-Class Authors:    Costas Tsibanis <costas@noc.uoa.gr>              |
      |                     Yannis Exidaridis <jexi@noc.uoa.gr>              |
      |                     Alexandros Diamantidis <adia@noc.uoa.gr>         |
      |                                                                      |
      | Claroline Authors:  Thomas Depraetere <depraetere@ipm.ucl.ac.be>     |
      |                     Hugues Peeters    <peeters@ipm.ucl.ac.be>        |
      |                     Christophe Gesch� <gesche@ipm.ucl.ac.be>         |
      |                                                                      |
      +----------------------------------------------------------------------+
*/


//include ('../include/init.php');
$path2add=2;
include '../include/baseTheme.php';
$nameTools = "��������� ����������";
//begin_page();

//$um="$urlServer/modules/manuals/";
$tool_content = "";
$tool_content .= <<<tCont
<p>��� ������ ���� �� ������ ������� ���������� ��� ������� ��� ��������� e-Class.</p>
<ul>

<li><a href="$urlServer/modules/manuals/e-Class.pdf" target=_blank>��������� ��������� e-Class</a></li>
<li><a href="$urlServer/modules/manuals/e-Class_short.pdf" target=_blank>������� ��������� e-Class</a></li>

</ul>
<ul>

<li>���������� ������ (������/�������): �� ����� <a href="$urlServer/modules/manuals/manS/ManS.pdf" target=_blank>PDF</a>
� <a href="$urlServer/modules/manuals/manS/ManS.htm" target=_blank>HTML</a></li>
<li>���������� ��������: �� ����� <a href="$urlServer/modules/manuals/manT/ManT.pdf" target=_blank>PDF</a>
� <a href="$urlServer/modules/manuals/manT/ManT.htm" target=_blank>HTML</a></li>
</ul>

<ul>

<li><a href="$urlServer/modules/manuals/Teleteaching_Std.pdf" target=_blank>������� ���������� �����������</a></li>

</ul>


<p>��� �� ��������� �� ������ PDF �������� �� ��������������� �� ���������
Acrobat Reader ��� �� ������ <a href="http://www.adobe.com/products/acrobat/readstep2.html" 
target=_blank>���</a>.</p>

tCont;

draw($tool_content, 0);
?>