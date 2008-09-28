Wikisite/Personal/Blog Site Builder
WIKEPAGE Version 2006.2 Opus 9 (Code: Maxwell-Boltzmann)
-----------------------------------------------------------------------------------------
Wikepage er en wiki-standard, nem at anvende og lille wiki software udsprunget fra Tipiwiki2
(http://tipiwiki.sourceforge.net/). Wikepage indeholder nogle sikkerheds features som Tipiwiki ikke
har, s�som kodeordsbeskyttet struktur, og 4 vigtige sikkerhedsniveauer, tabel
support, upload support, multisprog og multihjemmeside support ... osv. ...

Wikepage har to tilstande:

-Wiki tilstand: Sider og Blogindl�g kan �ndres uden at indtaste kodeord.
-Personlig tilstand: Sider og Blogindl�g kan kun �ndres med kodeord.

*INSTALLATION:
-�bn index.php med notesblok eller et andet teksprogram og udskift hjemmeside-informationen, sprog
 og andre indstillinger til din side.
-Upload alle filerne til din server med en FTP-klient.
-Chmod filerne til 777, (mindst til 755, men nogle gange virker det ikke) i data og
 ogs� filerne i underfolderne til data-folderen.
-V�r sikker p�, at PHP ikke er i safe_mode. I safe_mode kan wikepage ikke oprette sider.
-Hvis du vil tilf�je et andet sprog til din side, s� download fra http://www.wikepage.org/
 og udpak til rod-folderen i wikepage. Derefter kan du skifte standard-sprog
 variabel i kildekoden p� index.php. �nsker du en multisprogs side kan
 du nemt �ndre sprog med disse link-typer [index.php?lng=en|English]
 [index.php?lng=tr|Turkce].
-Bes�g vores hjemmeside. Du vil automatisk blive sendt til administrationssiden. Du SKAL oprette et kodeord.
-Din side arbejder nu i Wiki tilstand!
-Du kan skifte tilstand fra administrationssiden ved at indtaste dit kodeord.
-I wiki tilstand skal du indtastekodeord "hver gang" for at redigere en side.
-Hvis du vil benytte Blog, kan du oprette indl�g fra administrationssiden eller
 [index.php?Blog_Entry|Opret nyt  link].
- Du kan se din blog ved at tilf�je "<blog_view>" til dine sider.

Du finder mere information p� din oprettede side.

*LICENS
Wikepage er open source software licenseret via GNU/GPL. For yderligere information:
[ www.gnu.org/copyleft/gpl.html ]

*TILF�JELSE
-Hvis du chmod'er folderne true, vil wikepage arbejde 90%.
-Opret fil, upload og slet support vil muligvis ikke fungere med safe_mode=on

