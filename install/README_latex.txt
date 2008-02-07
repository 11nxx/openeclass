***********************************
����������� ��������� ��� e-Class
***********************************
��� ��� ������ GUnet eClass 1.4 ������������ ���� ���������
�� ������� Latex. X�������������� �� latex, ��� ������������ 
"������������", "������� ����������" ��� "��������" ���������� 
������� �� �������� ����������� ��������� ��� ����������� 
�������� ��� ������������� ���� ���������.
�� ������� ���� ������������� ��� ����������� �� �������� �� 
�������� �������� ��� Linux (Redhat, Debian �.��.) 
��������������� ��� ������ ��� Latexrender. To Latexrender ����� 
��� ��������� ��� ������� ������� gif ����������� ���������.
� ������� ��� latexrender ���� ����� GNU Lesser General Public License.

*************************
���������� ��� Server
*************************
�� Latex, ImageMagick ��� Ghostscript, ������ �� ������������� 
��� ������� ��� ��������� ��� ��������� GUnet e-Class. ������ ����� 
�� tetex ��������������� �� �� latex �������. ���� �� ����� �� 
������������ �� �������� package.

************
��������� 
************

A) ������� �� ������ ��������� ��� eClass config.php.
(�.�. /var/www/html/eclass/config/config.php)

��������� ��� �������� �������

define('latex_picture_path', "/path-to-eclass/modules/latexrender/pictures");
define('latex_picture_path_httpd',"/path-to-eclass/modules/latexrender/pictures");
define('latex_tmp_dir',"/path-to-eclass/modules/latexrender/tmp"); 
define('latex_path',"/usr/bin/latex");
define('dvips_path',"/usr/bin/dvips");
define('convert_path',"/usr/bin/convert");
define('identify_path',"usr/bin/identify");

�������� ���� path-to-eclass �� ������ �� ������ �� path ��� ������������.
��� ���������� ��� �� ������ �� �����:

define('latex_picture_path', "/var/www/html/eclass/modules/latexrender/pictures");
define('latex_picture_path_httpd',"/path-to-eclass/modules/latexrender/pictures");
define('latex_tmp_dir',"/path-to-eclass/modules/latexrender/tmp"); // ����� ������ slash

������ ������� �� path ��� ������������ latex, dvips, 
convert ��� identify ��� ������� �� ���������, �� ����������.

B) ��������� ���� �������� (�������� ������������ ��� eClass)/modules/latexrender.
(�.�. /var/www/html/eclass/modules/latexrender )

���� �� ������ ��� ������������� �� �� ������� pictures ��� tmp. 
����� �� ��������� ������ �� ����� ����� ���������� (chmod 777) ���� �� ��������� �� ������ �� 
���������� ������ �� ������.

������ �� ������� �������� �� �� ��������� ��� ������� ����� 
�� ImageMagick ������ ��� ������ ��� �� ���������. �� ��� 
������� �� background �� ����� ����� ���� ��� ������ 
class.latexrender.php ��������� �� "png" �� "gif" ��� �� 
������� �� ����� ���������.

� �������� �������� ������� ��� ��� texbox [tex] ��� [/tex]. 
���� [tex]\sqrt{2}[/tex] �� ������� ��� �������� gif ��� 
��������� ��� ����������� ���� ��� 2. 

������������ �������: 

�� � �������� ���� ������ ������� (12pt) �������� �� �� 
����������� ���������� ��� ������ class.latexrender.php ��� 
������: 
var $_font_size = 12;
���� ������:
var $_font_size = 10;

���� �� ������ 10pt, 11pt ��� 12pt ��������������.

��� ������ latex.php ���� ��������� � ������ ��� ������: 

$latex_formula = "\n\n" .$latex_formula; 

��� �������� ��� �������� �� �������� ��������� ��� �������� �� \begin.
���� ���� �������� �������� ��� ����� ��� \frac ���� 
���� ���� ��������. ���� ����� �������� ��:
1. �������� �� ������ $latex_formula = "\n\n" .$latex_formula; 
��� �� ����������� ��� ����� ������� ���� �������������� �� \begin 
���� ���� ��� ��������.
2. ���������������� �� \dfrac ���� ��� \frac �� ����� ����� 
�� ����� ����������.

�������:
[tex]\sqrt{2}[/tex]
[tex]\dfrac {1}{2}[/tex]
[tex]\dfrac{\sin x}{x}=1[/tex]
</div>
