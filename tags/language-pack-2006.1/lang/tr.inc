<?php
/*
 Cyrocom Wikepage 2005.4 Turkish Language File
 by Sefer Bora LISESIVDIN
*/
$encoding = "windows-1254";
$data_dir = "data/tr";
$page_default = "Ana_sayfa";
$page_admin = "Y�netim";
$lang['searchpage'] = "Sayfa ismi ile arama";
$lang['orsearchcontent'] = "yada i�erikte arama yap";
$lang['search'] = "Ara";
$lang['searchingpage'] = "Aranan sayfa:";
$lang['searchingcontent'] = "Sayfalarda aranan terim:";
$lang['oldadminpass'] ="�ifrenizi giriniz";
$lang['adminpass'] = "Yeni �ifre";
$lang['password'] = "�ifre";
$lang['changepass'] = "�ifre de�i�tir";
$lang['othersett'] = "Di�er ayarlar";
$lang['setpass'] = "�ifre olu�tur";
$lang['againadminpass'] = "Bir daha yeni �ifre (kontrol ama�l�)";
$lang['passless'] = "�ifresiz sayfa d�zenleme";
$lang['delfile'] = "Sayfa sil (sormadan ve gerid�n���ms�z!)";
$lang['delpage'] = "Dosya sil (sormadan ve gerid�n���ms�z!)";
$lang['change'] = "De�i�tir";
$lang['abbrev_findpage'] = "sayfabul";
$lang['abbrev_admin'] = "y�netim";
$lang['abbrev_allpages'] = "t�msayfalar";
$lang['abbrev_recentchanges'] = "sonde�i�iklikler";
$lang['filenotfound'] = " : dosya bulunamad�!";
$lang['sorrypagelocked'] = "�zg�n�m, sayfa kilitli!";
$lang['cantwriteinpage'] = "Hata: $name i�ine yaz�lam�yor ( $data_perm haklar�na sahip ve $data_owner:$data_group taraf�ndan sahiplenilmi�) !";
$lang['passmodeerror'] = "Hata: �ifreli yazma modundas�n�z ve girdi�iniz �ifre hatal�";
$lang['returnhomepage'] = "Ana Sayfaya D�n";
$lang['passsuccess'] = "�ifreniz ba�ar�yla olu�turuldu.";
$lang['twononemptypassmustequal'] = "Ba�lang�� i�in mutlaka �ifre girmelisiniz ve her iki sifre alan�da ayn� olmak zorundad�r.";
$lang['oldpasswrong'] = "Eski �ifrenizi yanl�� girdiniz.";
$lang['processesok'] = "��lemleriniz yap�ld�";
$lang['filloldpass'] = "Eski �ifre bolumunu doldurunuz!";
$lang['twopassmustequal'] = "Her iki �ifre alan�da ayn� olmak zorundad�r.";
$lang['uploadexists'] = "- Dosya zaten var";
$lang['uploadempty'] = "- Dosya boyutu s�f�r.<br>";
$lang['uploadbig'] = "- Dosya boyutu �ok b�y�k.<br>";
$lang['uploadnotallowed'] = "- Dosya t�r� kabul edilmiyor.<br>";
$lang['uploaderror'] = "Dosya y�klenirken hata olu�tu:<br>";
$lang['uploadsuccess'] = "Ba�ar�l�! Dosya y�klendi.";
$lang['uploadlimit'] = "Hata! Dosya boyutu sunucu taraf�ndan verilen izini ge�iyor. Bir daha deneyin.";
$lang['edit'] = "D�zenle ";
$lang['recent'] = "De�i�iklikler";
$lang['advsearch'] = "Geli�mi� Arama ";
$lang['all'] = "T�m Sayfalar";
$lang['admin'] = "Y�netim ";
$lang['index'] = "�ndeks ";
$lang['lastupdate'] = "Son g�ncelleme: ";
$lang['editing'] = "d�zenleniyor ";
$lang['pass'] = "�ifrenizi giriniz: ";
$lang['mainmenu'] = "Ana Men� ";
$lang['pagecontents'] = "Sayfa ��eri�i ";
$lang['navi'] = "Navigasyon";
$lang['ok'] = "Tamam";
$lang['clickoktoedit'] = "Sayfay� d�zenlemek i�in Tamam tu�una bas�n�z";
$lang['backtopage'] = "�nceki sayfaya d�n";
$lang['copyleft'] = "<p>Bu wiki sitesinde yay�nlanan t�m i�eri�in kopyalanmas�, da��t�lmas� veya de�i�tirilmesi 
�zerinde GNU-FDL S�r�m 1.1 yada <a href=\"http://www.fsf.org/\">FSF</a> taraf�ndan ��kar�lan daha sonraki lisans 
haklar� ge�erlidir. Kabul etmiyorsan�z l�tfen i�erik eklemeyiniz.
 <small>PHP wiki site/ki�isel site motoru: <a href=\"http://www.wikepage.org\">Wikepage!</a> taraf�ndan g��lendirilmi�tir.</small><br/><p></p>";
$lang['writingrules'] = "<ul id=\"footer\" style=\"text-align: left;\"> <small><small>
                        <li>Sat�r �ncesi bir * i�areti maddeleme yapar</li>
                        <li>Linkler: [Link_t�r�], [http://siteismi.com|t�klay�n] yada [http://siteismi.com|resim.gif] yada URL girin
                        <li>Bir yada daha fazla ! i�areti ba�l�k yapar</li>
                        <li>** i�aret aras�na yaz�lanlar <b> koyu </b>olur</li>
                        <li>__ i�areti aras�na yaz�lanlar <u>alt� �izgili</u> olur</li>
                        <li>'' i�areti aras�na yaz�lanlar <i>yat�k</i> olur</li>
                        <li>:: :: i�areti <span style=\"box\">kutu</span> i�ene konulmas�na yarar</li>
                        <li> Bir sat�r ba��na bo�lukla ba�laman�z �nbi�emli olmas�na yarar</li>
                        <li>Tablo olu�turmak i�in her sat�rda ||||s�tun1||s�tun22|||| stilini uygulay�n </li>
						<li>Renklendirme i�in ##renk## yaz� buraya ## stilini uygulay�n. Girilen renk de�eri direkt font tag'�nda yaz�ld���ndan ingilizce kar��l���n� kullan�n.
						Renkler <font color=\"Black\">Black</font>,<font color=\"Silver\"> Silver</font>, <font color=\"Gray\">Gray</font>, 
						<font color=\"Maroon\">Maroon</font>, <font color=\"Red\">Red</font>, <font color=\"Purple\">Purple</font>, 
						<font color=\"Fuchsia\">Fuchsia</font>, <font color=\"Green\">Green</font>, <font color=\"Lime\">Lime</font>, 
						<font color=\"Olive\">Olive</font>, <font color=\"Yellow\">Yellow</font>, <font color=\"Navy\">Navy</font>, 
						<font color=\"Blue\">Blue</font>, <font color=\"Teal\">Teal</font>, <font color=\"Aqua\">Aqua</font> 
						ve <font color=\"White\">White</font>. Yada RGB kodlar�n� kullanabilirsiniz: <font color=\"#FF9900\">#FF9900</font> yada <a href=\"http://www.yourhtmlsource.com/stylesheets/namedcolours.html\" target=\"_blank\">dahas�na bak�n</a>.</li></small></small>
                      </ul>";


?>