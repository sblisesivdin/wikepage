<?php

/*		Cyrocom Wikepage Wiki/Personal Site Engine
		Copyright (C) 2005 Cyrocom.com, Ankara, Turkey. All rights reserved.(R)
        http://www.cyrocom.com/

        This program is free software; you can redistribute it and/or modify it under the terms of the GNU
        General Public License as published by the Free Software Foundation; either version 2 of the License,
        or (at your option) any later version.
        This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even
        the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public
        License for more details.
        You should have received a copy of the GNU General Public License along with this library.
        

/*
Cyrocom WikSis (Wiki Sistemi)
Copyright (C) 2004 CyrocomGPL'ed, GPL
*/

/*
Tikiwiki2 : Copyright (C) 2003
Andreas Zwinkau, andi@buxach.de, GPL
*/

// ----------------------------------
// Site Information
// ----------------------------------
// 
$sitename="Wikepage 2005.2";
$siteheader="Your site's slogan here.";
$author="CyrocomWikepage";

error_reporting(1);
session_start();


// ----------------------------------
// Default Language
// ----------------------------------
// en: English, tr: T�rk�e
$lang_def="en";


// ----------------------------------
// Options
// ----------------------------------

// Timezone according to Greenwich. For US EST:-6, CST:-7, MST:-8, PST:-9, Alaskan Time:-10, Hawaiian Time:-11
// T�rkiye i�in 2 olmal�
$timezone = -6;

// Wiki get, don't change. Change will need changes in lang files

$wiki_get = "wiki";

// ++++++++ DON'T MAKE CHANGES BELOW HERE ! (unless you're a developer) ++++++++ 

// PHP5 ise SCRIPT_FILENAME DE���KEN� kullan
if ($version_info[0] < 5 ) {
$servpath = $HTTP_SERVER_VARS['PATH_TRANSLATED'];

}else{
	$servpath = $HTTP_SERVER_VARS['SCRIPT_FILENAME'];
}

$info = pathinfo( $servpath );
$path = $info[ 'dirname' ];

// e�er ( PHP s�r�m < 4.1 ) $_GET �al��maz!
if ($version_info[0] < 4 || ($version_info[0] > 3 && $version_info[1] < 1)) {
        $_POST = $HTTP_POST_VARS;
        $_GET = $HTTP_GET_VARS;
}

if( isset( $_GET["lng"] ) ){
$lang=$_GET["lng"];
session_register("lang");
	}

if(!session_is_registered("lang")){
$lang=$lang_def;
session_register("lang");
}

$lang=$HTTP_SESSION_VARS["lang"];

//e�er biri lng'yi hatal� d�nd�r�rse default dile d�n
@ $fp = fopen("lang/$lang/$lang.inc","a", 1);
if (!$fp){
	 $lang=$lang_def;
}
fclose($fp);
               
include('passwd.php');
include('lang/'.$lang.'/'.$lang.'.inc');
$version_info = explode('.', phpversion());
$template_show_langed='lang/'.$lang.'/'.$template_show;
$template_edit_langed='lang/'.$lang.'/'.$template_edit;



// baz� �zeller

function htmlchars ($string) {

$string= str_replace("&", "&amp;", $string);
$string= str_replace("\"", "&quot;", $string);
$string= str_replace("<", "&lt;", $string);
$string= str_replace(">", "&gt;", $string);

return $string;
}

function findpage() {
        global $wiki_get;
        global $name;
        global $data_dir;
        global $lang_searchpage;
		global $lang_orsearchcontent;
		global $lang_search;
		global $lang_searchingpage;
		global $lang_searchingcontent;

        $name = basename($name);
        $content = "";
        $formular = "<form method=\"get\" action=\"index.php\">\n<input type=\"hidden\" name=\"$wiki_get\" value=\"$name\" /><table id=\"find\">\n<tr>\n<td>".$lang_searchpage."</td>\n<td><input type=\"text\" name=\"PageName\" /></td>\n</tr><tr>\n<td>".$lang_orsearchcontent."</td>\n<td><input type=\"text\" name=\"PageContent\" /></td>\n</tr><tr>\n<td colspan=\"2\"><input type=\"submit\" value=\"".$lang_search."\" /></td>\n</tr>\n</table>\n</form>\n";
        // dizindeki t�m sayfalar� al
        $handle = opendir("$data_dir");
        while( $newdir = readdir($handle) )
//WikiKelimeli
//                if(preg_match("/([A-Z][a-z0-9]+){2,}/",$newdir) )
//[Kelime_grublu]
                if(preg_match("/([\w]+)/",$newdir) )
                        $allpages[] = $newdir;
        // uyu�an sayfa isimlerine bak
        if( $_GET["PageName"] != "" ) {
                $pagename = $_GET["PageName"];
                $content .= "<h3>".$lang_searchingpage." $pagename </h3>\n<ul>\n";
                foreach ($allpages as $page)
                        if (preg_match("/$pagename/i",$page) )
                                $content .= "<li><a href=\"index.php?$wiki_get=$page\">$page</a></li>\n";
                        $content .= "</ul>\n";
        }
        // Uyu�an sayfa i�eri�ine bak
        if ( $_GET["PageContent"] != "" ) {
                $pagecontent = $_GET["PageContent"];
                $content .= "<h3>".$lang_searchingcontent." $pagecontent </h3>\n<ul>\n";
                foreach ($allpages as $page) {
                        $current = implode( "", file("$data_dir/$page") );
                        if (preg_match("/$pagecontent/i",$current) )
                                $content .= "<li><a href=\"index.php?$wiki_get=$page\">$page</a></li>\n";
                }
                $content .= "</ul>\n";
        }
        if( $content == "" )
                $content = $formular;
        return $content;
}

function recentchanges() {
        global $data_dir;
        global $timezone;
        global $wiki_get;
        $content = "";
        $handle = opendir($data_dir);
        $allpages = array();
        while( $newfile = readdir($handle) )
//WikiKelimeli
//                if(preg_match("/([A-Z][a-z0-9]+){2,}/",$newfile) )
//[Kelime_grublu]
                if(preg_match("/([\w]+)/",$newfile) )
                        $allpages[] = $newfile;
        $max_pages = sizeof($allpages) / 3;
        if( $max_pages < 30 )
                $max_pages = 30;
        $counter = 0;
        $date = mktime(12,0,0,date('m'),date('d'));
        $day = 0;
        while( $counter < $max_pages && $day < 40 ) {
                $today = array();
                foreach( $allpages as $page ) {
                        $filetime = filemtime("$data_dir/$page");
                        if( (($filetime + 43199) > $date) && (($filetime - 43200) < $date) )
                                $today[] = $page;
                }
                if( sizeof($today) > 0 ) {
                        $content .= "<h3>".date("d.m.Y",$date)."</h3>\n<ul>\n";
                        foreach( $today as $page )
                                $content .= "<li><a href=\"index.php?$wiki_get=$page\">$page</a> (".date("G:i", filemtime("$data_dir/$page")+(3600*$timezone) ).")</li>";
                        $content .= "</ul>\n";
                }
                $counter += sizeof($today);
                $date -= 86400;
                $day += 1;
        }
        $content .= "</ul>\n";
        return $content;
}

function allpages() {
        global $data_dir;
        global $wiki_get;
        // t�m sayfalar� listele
        $content = "<ul>\n";
        $handle = opendir($data_dir);
        while( $newfile = readdir($handle) )
//WikiKelimeli
//                if(preg_match("/([A-Z][a-z0-9]+){2,}/",$newfile) )
//[Kelime_grublu]
                if(preg_match("/([\w]+)/",$newfile) )
                        $allpages[] = $newfile;
        sort($allpages);
        foreach( $allpages as $page )
                $content .= "<li><a href=\"index.php?$wiki_get=$page\">$page</a></li>\n";
        $content .= "</ul>\n";
        return $content;
}

function yonetim() {
        global $data_dir;
        global $wiki_get;
        global $adminpassword;
        global $passworks;
        global $lang_nottochangepass;
		global $lang_oldadminpass;
		global $lang_adminpass;
		global $lang_againadminpass;
		global $lang_change;
		global $page_admin;
		global $lang_passless;
        // yonetim i�eri�i
        $content = $lang_nottochangepass."<br>";       
	    if($adminpassword){
			$content .= "<form method=\"post\" action=\"index.php\">\n<input type=\"hidden\" name=\"wiki\" value=\"".$page_admin."\" /><table id=\"find\">\n<tr>\n<td>".$lang_oldadminpass."</td>\n<td><input type=\"password\" name=\"password0\" /></td>\n</tr><tr>\n<td>".$lang_adminpass."</td>\n<td><input type=\"password\" name=\"password1\" /></td>\n</tr><tr>\n<td>".$lang_againadminpass."</td>\n<td><input type=\"password\" name=\"password2\" /></td>\n</tr><tr>\n<td>".$lang_passless."</td>\n<td><input type=\"checkbox\" name=\"passwrks\" value=\"checkbox\" ";
			if ($passworks == "1"){
			$content .= "checked></td>\n</tr>";
			}else{
			$content .= "></td>\n</tr>";
			}
		
			$content .= "<tr>\n<td colspan=\"2\"><input type=\"submit\" value=\"".$lang_change."\" /></td>\n</tr>\n</table>\n</form>\n";
		}else{
			$content .= "<form method=\"post\" action=\"index.php\">\n<input type=\"hidden\" name=\"wiki\" value=\"".$page_admin."\" /><table id=\"find\">\n<tr>\n<td>".$lang_adminpass."</td>\n<td><input type=\"password\" name=\"password1\" /></td>\n</tr><tr>\n<td>".$lang_againadminpass."</td>\n<td><input type=\"password\" name=\"password2\" /></td>\n</tr><tr>\n<td colspan=\"2\"><input type=\"submit\" value=\"".$lang_change."\" /></td>\n</tr>\n</table>\n</form>\n";
		}
		
        
return $content;
}

// WikiStil'i HTML'e bi�imle
function filter($raw) {
        global $wiki_get;
        global $lang_abbrev_findpage;
		global $lang_abbrev_admin;
		global $lang_abbrev_allpages;
		global $lang_abbrev_recentchanges;
        $filtered = stripslashes(htmlchars("\n\n".$raw));

        // php-�zel
        $filtered = str_replace("\r\n","\n",$filtered);

        // [ url | link ] d�� linkler
        $filtered = preg_replace("/\[((http|ftp|https|mailto):\/\/[\w\.\:\@\?~\%=\+\-\/]+)\|([\w ]+)\]/i","<a href=\"\\1\">\\3</a>", $filtered);
        $filtered = preg_replace("/\[([\w\.\:\~@\?~\%=\+\-\/]+)\|([\w ]+)\]/i","<a href=\"\\1\">\\2</a>", $filtered);

        // resimler [ url ]
        $filtered = preg_replace("/\[([\w\.:\/~@\,\?\%=\+\-;#&]+\.(png|gif|jpg))\]/","<img src=\"\\1\" class=\"wikiimage\" />",$filtered);

        // sayfa i�indeki d�z URL'ler
        $filtered = preg_replace("/\[((http|ftp|https|mailto):\/\/[\w\.:\/~@\,\?\%=\+\-;#&]+)\|([\w\:\#\- ]+)\]/i","<a href=\"\\1\">\\3</a>", $filtered);

        // Wiki kelimeler (Sadece biri se�ili olacak �ekilde)
        //(1) Bile�ikKelime
        //$filtered = preg_replace("/([A-Z][a-z0-9\;\&]+){2,}/","<a href=\"index.php?$wiki_get=\\0\">\\0</a>", $filtered);
        //(2) []li kelime (ge�erli)
        $filtered = preg_replace("/\[([\w]+)\]/","<a href=\"index.php?$wiki_get=\\1\">\\1</a>", $filtered);

        // Ba�l�klar <h1><h2><h3>
        $filtered = preg_replace("/\n(!!!)(.+)\n/","</p>\n<h5>\\2</h5>\n<p>",$filtered);
        $filtered = preg_replace("/\n(!!)(.+)\n/","</p>\n<h4>\\2</h4>\n<p>",$filtered);
        $filtered = preg_replace("/\n(!)(.+)\n/","</p>\n<h3>\\2</h3>\n<p>",$filtered);

        // yaz� dekorasyonlar�(koyu,yat�k,alt�izgili,kutulu)
        $filtered = preg_replace("/\*\*(.+)\*\*/U","<strong>\\1</strong>", $filtered);
        $filtered = preg_replace("/__(.+)__/U","<u>\\1</u>", $filtered);
        $filtered = preg_replace("/\'\'(.+)\'\'/U","<em>\\1</em>", $filtered);
        $filtered = preg_replace("/\:\:(.+)\:\:/U","<span class=\"box\">\\1</span>", $filtered);
        // yatay �izgiler
        $filtered = preg_replace("/\n---.*\n/","\n<hr class=\"wiki\"/>\n",$filtered);

        // listeler <ul>
        $filtered = preg_replace("/(?<=[\n>])\* (.+)\n/","<li>\\1</li>",$filtered);
        $filtered = preg_replace("/<li>(.+)\<\/li>/","</p><ul>\\0</ul><p>",$filtered);

        // �n ve son sat�r aralar�n� ��kar
        $filtered = preg_replace("/^(\n+)/","",$filtered);
        $filtered = preg_replace("/\n{3,}/","\n\n",$filtered);

        // <pre> bloklar�
        $filtered = preg_replace("/(?<=\n) (.*)(\n)/","<pre>\\1</pre>", $filtered);

        // html sat�r aralar� <br />
        $filtered = str_replace("\n","<br />\n",$filtered);
        $filtered = str_replace("</pre><pre>","\n", $filtered);

        // �zelleri ekle, fonksiyonlar� gereksiz kullan�m�n� �nlemek i�in �nce kontrol et
        if( strpos($filtered, "&lt;".$lang_abbrev_findpage."&gt;") !== FALSE )
                $filtered = str_replace("&lt;".$lang_abbrev_findpage."&gt;", findpage(), $filtered);
        if( strpos($filtered, "&lt;".$lang_abbrev_admin."&gt;") !== FALSE )
                $filtered = str_replace("&lt;".$lang_abbrev_admin."&gt;", yonetim(), $filtered);
        if( strpos($filtered, "&lt;".$lang_abbrev_allpages."&gt;") !== FALSE )
                $filtered = str_replace("&lt;".$lang_abbrev_allpages."&gt;", allpages(), $filtered);
        if( strpos($filtered, "&lt;".$lang_abbrev_recentchanges."&gt;") !== FALSE )
                $filtered = str_replace("&lt;".$lang_abbrev_recentchanges."&gt;", recentchanges(), $filtered);

       //html table
       $filtered = preg_replace("/\|\|\|\|(.+)\|\|\|\|/U","<table><tr><td>\\1</td></tr></table>", $filtered);
       $filtered = preg_replace("/(.+)\|\|/U","\\1</td><td>", $filtered);
       $filtered = preg_replace("/<\/table><br \/>\n<table>/","", $filtered);
       
       //yazi rengi
       $filtered = preg_replace("/\#\#(.+)\#\#/U","<font color=\\1>", $filtered);
       $filtered = preg_replace("/(.+)\#\#/U","\\1</font>", $filtered);


        // html g�zelli�i
        $filtered = str_replace("</li>","</li>\n",$filtered);
        $filtered = str_replace("ul>","ul>\n",$filtered);
        $filtered = str_replace("<br />\n<h","\n<h", $filtered);
        $filtered = preg_replace("/(<\/h[1-3]>)<br \/>\n/","\\1\n", $filtered);
        $filtered = str_replace("<p></p>","",$filtered);

        return $filtered;
}

// bu program�n TEK ��kt�s�!
function output($data, $file) {
	global $sitename;
	global $siteheader;
	global $lang_writingrules;
	global $encoding;
	global $author;
        $pagename = basename($file);
        $modified = "";
        if( file_exists($file) ) {
                $modified = date("H:i:s d/m/Y",filemtime($file));
        }
        $data = str_replace("<!--encoding-->",$encoding,$data);
        $data = str_replace("<!--author-->",$author,$data);
        $data = str_replace("<!--wikiname-->",$pagename,$data);
        $data = str_replace("<!--sitename-->",$sitename,$data);
        $data = str_replace("<!--siteheader-->",$siteheader,$data);
        $data = str_replace("<!--lastupdate-->",$modified,$data);
        $data = str_replace("<!--writingrules-->",$lang_writingrules,$data);
        echo $data;
}

// sayfa i�eri�ini al
function showpage($file) {
        global $template_show_langed;
        global $wiki_get;
        global $lang;
        
        $content = "";
        $menucontent ="";

        // istenen dosyay� al
        $raw = implode("", file($file) );
        // menu dosyas�n� al
        $raw2 = implode("", file('data/'.$lang.'_menu.txt') );
        // filtrele!
        $content = filter( $raw ) . $content;
        $menucontent = filter( $raw2 ) . $menucontent;

        // sayfa �ablonunu al
        $template = implode( "", file($template_show_langed) );
        $whole = str_replace("<!--wikicontent-->",$content,$template);
        $whole = str_replace("<!--menucontent-->",$menucontent,$whole);
        output( $whole, $file );
}

// e�er sayfa d�zenlemek istemi�sek
function editpage($file) {
        global $template_edit_langed;
        global $path;
        global $page_admin;
        global $lang;
        $already = "";
        $mainmenu = "";
        if( file_exists( $file ) )
            $already = implode( "", file( "$file" ) );
        if( !file_exists( $file ) ){
            $namePath = "$path/$file";
            @touch($namePath);
            chmod($file, 0666);
            $already = implode( "", file( "$file" ) );
        }
        
        //menu dosyas�n� a�
        $mainmenu = implode("", file('data/'.$lang.'_menu.txt') );
        
        if( file_exists( $template_edit_langed ) )
                $template = file($template_edit_langed);
        else
                echo " (".$template_edit_langed.") ".$lang_templatenotfound."<br />\n";
        $template = implode( "", $template );
        $whole =str_replace("<!--already-->",stripslashes($already),$template);
        $whole =str_replace("<!--mainmenu-->",stripslashes($mainmenu),$whole);
        // dosya kilitlenecek
        if( !is_writeable($file) )
                // s modifiyesini not et !
                $whole = preg_replace("/<form .*<\/form>/s","<h3>".$lang_sorrypagelocked."</h3>", $whole);
        output($whole, $file );
}

$edit = False;
$name = "$data_dir/$page_default";

if( isset( $_GET[$wiki_get] ) )
        $name = "$data_dir/".$_GET[$wiki_get];
// �imdiki sayfan�n ad�n� art�k biliyoruz

// ufak bir g�venlik d�zeltmesi
        $name = str_replace("..","",$name);
        $name = str_replace("%2E%2E","",$name);
        $name = str_replace(".%2E","",$name);
        $name = str_replace("%2E.","",$name);
        $name = str_replace(".php","_php",$name);
        $name = str_replace(".phtml","_phtml",$name);
        $name = str_replace(".php3","_php3",$name);
// d�zenlemeden sonra olas� �v�rz�v�rlar� yaz
if( isset($_POST["content"]) ) {

// �ifre korumas�
	if ($HTTP_POST_VARS['mypassword'] !=""){
	$testpass= crypt($HTTP_POST_VARS['mypassword'], "CW");
	}else{
		$testpass="0";
	}
	
	if($testpass == $adminpassword || $passworks=="1"){
        $data = rtrim($_POST["content"])."\n";
        $data2 = rtrim($_POST["menucontent"])."\n";
        // �nce dosyay� yaz
        $handle = fopen("$name",'w');
        if( ! fwrite($handle, $data ) ) {
                $data_perm = decoct(fileperms($name)) % 1000;
                $data_owner = (fileowner($name));
                $data_group = (filegroup($name));
                die("$lang_cantwriteinpage");
        }
        fclose($handle);
        // sonra men�y�...
         $menufile = 'data/'.$lang.'_menu.txt';
         $handle = fopen("$menufile",'w');
        if( ! fwrite($handle, $data2 ) ) {
                $data_perm = decoct(fileperms($name)) % 1000;
                $data_owner = (fileowner($name));
                $data_group = (filegroup($name));
                die("$lang_cantwriteinpage");
        }
        fclose($handle);
    }else{
	 die("$lang_passmodeerror <p> <a href=\"index.php\">$lang_returnhomepage</a>");
    }   
}


if( ! file_exists( "$name" ) )
        $edit = True;
if( $_GET["edit"] == "Yes" )
        $edit = True;

    if( $HTTP_POST_VARS['wiki'] == $page_admin ){

	if($HTTP_POST_VARS['password0'] == "" ){
	//�lk defa �ifre de�i�tirme modu.
		if($HTTP_POST_VARS['password1'] != "" && $HTTP_POST_VARS['password2'] != "" ){
		if($HTTP_POST_VARS['password1'] == $HTTP_POST_VARS['password2']){
		$passworks="1";
		$fp = fopen("passwd.php","w+");
           	fwrite ($fp, '<? $adminpassword = "'.crypt($HTTP_POST_VARS['password1'], "CW").'"; $passworks="'.$passworks.'";?>');
           	die("$lang_passsuccess <p> <a href=\"index.php\">$lang_returnhomepage</a>");
		}
		die("$lang_twononemptypassmustequal <p> <a href=\"index.php\">$lang_returnhomepage</a>");
	}else{
	die("$lang_twononemptypassmustequal <p> <a href=\"index.php\">$lang_returnhomepage</a>");
	}
		
	}else{
	
		if($adminpassword)
		$testpass= crypt($HTTP_POST_VARS['password0'], "CW");
		if($HTTP_POST_VARS['passwrks'] == ""){
			$passworks = "0";
		}else{
			$passworks = "1";
		}
		if($testpass != $adminpassword)
		die("$lang_oldpasswrong <p> <a href=\"index.php\">$lang_returnhomepage</a>");
		
	if($HTTP_POST_VARS['password1'] != "" && $HTTP_POST_VARS['password2'] != ""){
		if($HTTP_POST_VARS['password1'] == $HTTP_POST_VARS['password2']){
           	$fp = fopen("passwd.php","w+");
           	fwrite ($fp, '<? $adminpassword = "'.crypt($HTTP_POST_VARS['password1'], "CW").'"; $passworks="'.$passworks.'";?>');
           	die("$lang_processesok <p> <a href=\"index.php\">$lang_returnhomepage</a>");
        }else{
           die(" <p> <a href=\"index.php\">$lang_returnhomepage</a>");
		}
		
		}else{
			$fp = fopen("passwd.php","w+");
           	fwrite ($fp, '<? $adminpassword = "'.$adminpassword.'"; $passworks="'.$passworks.'";?>');           	
			die("$lang_processesok <p> <a href=\"index.php\">$lang_returnhomepage</a>");
		}
			
		
		exit;
}
}

// yeniden y�kleyi zorla [ by hybrid-2k (Fabio Pereira) ]

header ("Expires: Mon, 26 Jul 1990 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-Type: text/html; charset=".$encoding);


// d�zenliyor muyuz yoksa g�steriyor muyuz?
if( $edit )
        editpage( $name );
else
        showpage( $name );
?>