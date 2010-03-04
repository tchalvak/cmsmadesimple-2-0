<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
#This project's homepage is: http://cmsmadesimple.sf.net
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

#NLS (National Language System) array.

#The basic idea and values was taken from then Horde Framework (http://horde.org)
#The original filename was horde/config/nls.php.
#The modifications to fit it for Gallery were made by Jens Tkotz
#(http://gallery.meanalto.com) 

#Ideas from Gallery's implementation made to CMS by Ted Kulp

#US English
#Created by: Ted Kulp <tedkulp@users.sf.net>
#Maintained by: Ted Kulp <tedkulp@users.sf.net>
#This is the default language

#Native language name
$cms_nls['language']['zh_CN'] = '&#31616;&#20307;&#20013;&#25991;';
$cms_nls['englishlang']['zh_CN'] = 'Simplified Chinese';

#Possible aliases for language
$cms_nls['alias']['zh_CN.EUC'] = 'zh_CN' ;
$cms_nls['alias']['chinese_gb2312'] = 'zh_CN' ;

#Encoding of the language
$cms_nls['encoding']['zh_CN'] = 'UTF-8';

#Location of the file(s)
$cms_nls['file']['zh_CN'] = array(dirname(__FILE__).'/zh_CN/admin.inc.php');

$cms_nls['htmlarea']['zh_CN'] = 'en';
?>