<?php
/*
 Cyrocom Wikepage 2006-2 Czech Language File
 by Sefer Bora LISESIVDIN
*/
$encoding = "iso-8859-2";
$data_dir = "data/cs";
$page_default = "Index";
$page_admin = "Admin";
$lang['searchpage'] = "Hled�n� str�nky";
$lang['orsearchcontent'] = "nebo hled�n� obsahu";
$lang['search'] = "Hledat";
$lang['searchingpage'] = "Hledan� str�nka ";
$lang['searchingcontent'] = "Hledan� obsah ";
$lang['oldadminpass'] ="Mus�te vlo�it sv� p�vodn� heslo ";
$lang['adminpass'] = "Nov� heslo";
$lang['password'] = "Heslo";
$lang['changepass'] = "Zm�na hesla";
$lang['othersett'] = "Ostatn� nastaven�";
$lang['setpass'] = "Nastavit heslo";
$lang['againadminpass'] = "Nov� heslo znovu (pro kontrolu) ";
$lang['passless'] = "Editace str�nek bez hesla";
$lang['delfile'] = "Vymazat soubor (bez varov�n� a potvrzen�!)";
$lang['delpage'] = "Vymazat str�nku (bez varov�n� a potvrzen�!)";
$lang['change'] = "Zm�nit";
$lang['abbrev_findpage'] = "findpage";
$lang['abbrev_admin'] = "admin";
$lang['abbrev_allpages'] = "allpages";
$lang['abbrev_recentchanges'] = "recentchanges";
$lang['filenotfound'] = " soubor nenalezen!";
$lang['sorrypagelocked'] = "Str�nka je blokovan�!";
$lang['cantwriteinpage'] = "Chyba: nelze zapisovat do $name (m� $data_perm opr�vn�n� pro $data_owner:$data_group owner:group.) !";
$lang['passmodeerror'] = "Chyba: Str�nky jsou v osobn�m m�du. Zm�ny obsahu lze prov�d�t po vlo�en� spr�vn�ho hesla. Vlo�en� heslo je nespr�vn�";
$lang['returnhomepage'] = "Zp�t na hlavn� str�nku";
$lang['passsuccess'] = "Va�e heslo bylo �sp�n� zaps�no.";
$lang['twononemptypassmustequal'] = "Mus�te vlo�it nejprve heslo, ob� pole mus� b�t shodn�.";
$lang['oldpasswrong'] = "V�mi vlo�en� p�vodn� heslo je nespr�vn�.";
$lang['processesok'] = "Zpracov�no OK.";
$lang['filloldpass'] = "Vlo�te pros�m p�vodn� heslo!";
$lang['twopassmustequal'] = "Ob� hesla mus� b�t shodn�.";
$lang['uploadnote'] = "Vyberte soubor pro nahr�n�:";
$lang['uploadexists'] = "- soubor u� existuje";
$lang['uploadempty'] = "- soubor je pr�zdn�.<br />";
$lang['uploadbig'] = "- soubor je p��li� velk�.<br />";
$lang['uploadnotallowed'] = "- typ souboru nen� povolen.<br />";
$lang['uploaderror'] = "Chyba p�i pokusu nahr�t soubor:<br />";
$lang['uploadsuccess'] = "�sp�ch! Soubor byl nahr�n.";
$lang['uploadlimit'] = "Chyba! Velikost souboru z�ejm� p�ekro�ila limit serveru. Zkuste znovu.";
$lang['edit'] = "Editace ";
$lang['recent'] = "Posledn� zm�ny";
$lang['advsearch'] = "Roz���en� hled�n� ";
$lang['all'] = "V�echny str�nky";
$lang['admin'] = "Administrace ";
$lang['index'] = "Index ";
$lang['page_recent'] = "Posledn�_zm�ny";
$lang['page_advsearch'] = "Hled�n�";
$lang['page_all'] = "V�echny_str�nky";
$lang['page_admin'] = "Admin";
$lang['page_index'] = "Index";
$lang['lastupdate'] = "Aktualizov�no: ";
$lang['editing'] = "editace ";
$lang['pass'] = "Vlo�te heslo: ";
$lang['submit'] = "Odeslat";
$lang['mainmenu'] = "Hlavn� menu ";
$lang['pagecontents'] = "Obsah str�nky ";
$lang['navi'] = "Navigace";
$lang['blogsubject']="V�c";
$lang['blogpage']="Text";
$lang['blog_out']="blog_view";
$lang['blog_input_page']="Z�znam_blogu";
$lang['copyleft'] = "<p>Je povoleno kop�rovat, p�ed�vat a/nebo upravovat tento dokument ve shod� s GNU Free Documentation License, verze 1.1 nebo s kteroukoliv dal�� verz�, publikovanou <a href=\"http://www.fsf.org/\">
 Free Software Foundation</a>. Nesouhlas�te-li, nem��te obsah dokumentu. <br />
 <small>Vytvo�eno pomoc� bezdatab�zov� verze php wiki syst�mu: <a href=\"http://www.cyrocom.com/\">Wikepage</a></small><br />";
$lang['writingrules'] = "<ul id=\"footer\" style=\"text-align: left;\"> <small>
						<li>Jedna * p�ed ��dkem vlo�� odr�ku </li>
						<li>Odkazy: [Link_type], [http://externallink.com|kliknut�] nebo [http://externallink.com|image.gif], nebo vlo�te URL </li>
						<li>Jeden nebo v�ce ! ozna�� nadpis </li>
						<li>** ozna�� tu�n� text </li>
						<li>__ vlo�� podtr�en� </li>
						<li>'' ozna�� �ikm� text </li>
						<li>:: :: vlo�� text do boxu </li>
						<li> Mezera na za��tku ��dku znamen� p�edform�tovan� text </li>
						<li>Tabulka se tvo�� vlo�en�m ||||sloupec1||sloupec2|||| do ka�d�ho ��dku </li>
						<li>Pro obarven� textu pou�ijte ##color##...text...##. Vkl�dejte n�zvy barev pou��van� v tagu font. Barvy jsou <font color=\"Black\">Black</font>,<font color=\"Silver\"> Silver</font>, <font color=\"Gray\">Gray</font>, 
						<font color=\"Maroon\">Maroon</font>, <font color=\"Red\">Red</font>, <font color=\"Purple\">Purple</font>, 
						<font color=\"Fuchsia\">Fuchsia</font>, <font color=\"Green\">Green</font>, <font color=\"Lime\">Lime</font>, 
						<font color=\"Olive\">Olive</font>, <font color=\"Yellow\">Yellow</font>, <font color=\"Navy\">Navy</font>, 
						<font color=\"Blue\">Blue</font>, <font color=\"Teal\">Teal</font>, <font color=\"Aqua\">Aqua</font> 
						a ov�em <font color=\"Black\">White</font>. M��et pou��t RGB k�dy jako <font color=\"#FF9900\">#FF9900</font> nebo <a href=\"http://www.yourhtmlsource.com/stylesheets/namedcolours.html\" target=\"_blank\">zkuste dal��</a></li></small>
                      </ul>";

 ?>
