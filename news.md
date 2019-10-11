# News

## Wikepage 2008.1 Opus 14 Hertzsprung-Russel is released!
*Tue, 14 Oct 2008 - 22:32:13 CEST*

As we announced before, last version of the Wikepage is ready now. This version is called 2008.1 Opus 14 "Hertzsprung-Russel" and it is the first release after 17 months (2007.2). After this release, new development team (Mr Jose N Medeiros and Mr Del Rudolph)will start to study a new wikepage engine. Please do not forget to visit us again. At least do not forget to control your admin Pages. Your wikepage will warn you for the new release at the admin page. The recent version of wikepage is more stable than ever. Three important bugs are fixed. And now, you can view flash files and youtube in your site. Here is the changelog for the 2008.1.

* Flash files are now supported,
* YouTube video support,
* Simple Banner feature is removed,
* New 2008.1 theme.
* Solved wrong fclose call. SF BUG: 1703523
* Created default option to $type param on filter function. SF BUG: 1703529.
* Solved XSS-Cross-Site Scripting bug. SF BUG: 1938445

You can download the Opus 14 from here.

## New developers and wikepage's future
*Tue, 07 Oct 2008 - 20:19:40 CEST*

I am happy to announce that Wikepage has a new developer. Jose N. Medeiros will be the new lead programmer of the project. Welcome Jose. Of course, with a two active developers, we have some plans for the future of wikepage. Firstly, we plan the release the 2008.1 as soon as possible. This release will be the last classic Wikepage. It will have YouTube support and some bugfixes. As you know, wikepage is a small single-file php script. After 2008.1, new wikepage will be completely rewritten. It planned to be a plugin supported microcode. SQLite and MySQL support, simple user authorization, a new administration, wikipedia type wiki-syntax and some other features are planned to be included in the new Wikepage. We will change the roadmap section at the Development page with including TODOs. Please visit us later for more information about the roadmap and new features of the future wikepage. And lastly.. with a microcode style index.php, previous prime directive* can not be logical any more. New wikepage will have its own new prime directive :) *:"index.php and zipped version of wikepage can not exceed a file size of 38911 bytes." Thanks for your interest, S. B. Lisesivdin

## Developers wanted.
*Sun, 15 Jun 2008 - 20:39:21 CEST*

For a while, I am so busy and I can't pay attention to wike. And I think from now on I will not. Personally, wikepage was like a home for me. It was my last connection to my old formation "Cyrocom". For a 30Kb script, it worked well! A homepage, a work page, a blog... In every scenario, I used it. With over 17000 downloads, it is used in many sites. In Fig.1, download number versus date is shown. 

![Download Statistics](https://github.com/sblisesivdin/wikepage/blob/gh-pages/wikepage-download.png)

Fig. 1 Wikepage download statistics

## Spanish Translation
*Sun, 16 Dec 2007 - 22:02:40 CEST*

Thanks to Mr. Hector Fiel Martin for the spanish translation for Opus 13.

## German translation for Opus 13
*Tue, 09 Oct 2007 - 18:17:45 CEST*

Thanks to Dr. Detlef Steuer for the new translation for Opus 13.

## Indonesian Translation
*Mon, 17 Sep 2007 - 1:26:48 CEST*

Thanks to Mr. Wuri Nugrahadi for translation in Bahasa Indonesian. This translation can also be used for Malay language.

## Thai translation
*Sun, 03 Jun 2007 - 13:57:26 CEST*

Our 11th translation came from Thailand. Thanks to Asst. Prof. Prachid Tinnabutr for his great efforts.

## Italian translation
*Fri, 25 May 2007 - 11:12:51 CEST*

Thanks to Mr. Giancomo Margarito for the Italian translation of Wikepage 2007.2 Opus 13. Now wikepage is in ten languages.

## Wikepage 2007.2 Opus 13 Landauer-Büttiker is released!
*Fri, 18 May 2007 - 17:02:32 CEST*

Nearly 4 months passed over since the Opus 12 was released. After Opus 12, wikepage is changed a lot. Thanks will go to Mr. Tim Davis. As you remember he is the owner of http://www.binarymethod.com . You can find many modules at that site written for wikepage. Ok.. In opus 13, he optimized the code, and add new features. There are other minor changes by me and others listed below:

* Major optimization of code all over the script, wikepage is nearly 2kb shrinked with this optimization. thanks Mr. Tim Davis
* < blog_archive > command is added for list view of blog entries, thanks Mr. Tim Davis
* Images for blog entry titles, thanks Mr. Tim Davis
* From now, RSS imports won't die under error, thanks Mr. Jose Carlos Medeiros
* Small corrections that make Wikepage more Valid XHTML 1.0 Transitional are done, thanks Igor Rjabinin
* Google Edit pages problem is solved,
* In Admin page, new version warning and RSS import warning features are added.

You can download Opus 13, from here.

## Arabic language
*Tue, 10 Apr 2007 - 10:46:16 CEST*

Wikepage is now in Arabic. We got recently the arabic translation for Opus 12. Thanks a lot to Mr. Salam Aljehni from the Syrian Arab Repuclic for translation and support.

## Brazilian Portuguese translation
*Tue, 06 Mar 2007 - 1:26:00 CEST*

Thanks very much to Jose Carlos Medeiros who is the translator of the Brazilian Portuguese translation of Wikepage Opus 12. Yes, Wikepage is now in eight languages.

## Dutch language support.
*Mon, 26 Feb 2007 - 0:08:38 CEST*

Yos Tea has been translate Wikepage to Dutch. Thanks a lot for your help and support... and Wikepage is now in seven languages. PS: Also Mr. Bart Derudder worked on another translation to Dutch. But he is not finished yet. Thanks to him also, we will wait his other contributions in next releases.

## Opus 12, 2007.1 released! ... Modules? what is that?
*Tue, 13 Feb 2007 - 0:52:20 CEST*

Ok..I accept. Late releases are traditional. But I know you like Opus 12. I already make a site with Opus 12, take a look: http://www.threefives.org outlink. New features/fixes of 2007.1 (codename: Aharonov - Bohm) are:

* Heading problem in IE browsers is fixed,
* RSS import feature is added (One feed per page for now).

And, I want to introduce something new from Tim Davis: I have written and tested a small app to modify Wikepages' index.php file based on a set of instructions you give it. The command line app is working and I'm currently writing a Windows based app to preform the same task. Once that is complete I'm going to recompile the command line app with Mono so it will be cross platform (Windows/OS X/Linux), and then I'll put the files up for testing. It is so simple and effective. Module is a kind of function addition to system which has a simple text commands like FIND, ADD, REPLACE. Modules modify the main index.php, so it makes your own wikepage. You can share your modules with the community or find new ones for your own project. Please visit the homepage of the Wikepage Modder at http://www.binarymethod.com/ outlink for more information. Thanks Tim. And I add up some information to Development page. Simply, Wikepage needs your help. Wikepage needs new developers, new theme writers, document writers ...etc... If you want to be a developer, then write an email to Sefer Bora Lisesivdin (sblisesivdin-AT-gmail.com) and introduce yourself. Our development will have only one rule. We will call it "prime directive": index.php and zipped version of wikepage can not exceed a file size of 38911 bytes. Thanks, Enjoy.

## Info for downloaders of 2006.3 before October 30th
*Mon, 30 Oct 2006 - 11:51:30 CEST*

I forgot to erase data/passwd.php file in the recent version. So it asks password. To correct the situation, please erase data/passwd.php or you can redownload file now.

## Wikepage 2005.3 Opus 11 Released!
*Fri, 27 Oct 2006 - 19:28:11 CEST*

Ok.. It's just a late release again. But wikepage is more reliable and XHTML friendly and optimized. Even with new features, it's smaller than Opus 10. New features of 2006.3 (codename: Shubnikov - de Hass) are:

* Upload problem is solved, (1)
* Blog time bug is solved, (2)
* Table of Content of pages, (2)
* Boxed image support, (2)
* New timing schema, (3)
* Many improvements on Filtering function, (2-4)
* Fixes in English, (5)
* More friendly code,
* Email bug is fixed (6)

Thanks to: 
    (1) Rudi Perkins,
    (2) Jib,
    (3) Adam Piatyszek,
    (4) Tomasz Milewski,
    (5) Matthew Stack,
    (6) Yildirim Karslioglu.

And thanks to many others who send bug informations, wishes and congratulations. There some wishes about blog pagination, UTF-8 and Comment support. Not yet but I want to implement them into wikepage too, but only 6362 bytes free!

## Czech language files added and about Opus 11
*Sun, 17 Sep 2006 - 18:14:48 CEST*

Thanks to Mr. Josef Klimosz, wikepage has now Czech language support. By the time, i want to talk about Opus 11. There are many improvements and bugfixes come across the world, thanks to everyone. But i'm a physics Ph.D. student, and i have an important preliminary core exam, maybe the important thing in my life. Exam will be at October. I want but i can't look up wikepage issues while i have this exam and other many things. Sorry to everyone for Opus 11. As a summary, i'm still not change a line in Opus 10, and don't know when i am. Please continue with Opus 10 for now. Thanks

## Long waited Opus 10 is now available!
*Mon, 10 Jul 2006 - 12:59:56 CEST*

As i said before, Opus 10 is mostly a bugfix version. Thanks to Mr. Tomasz Milewski and Mr. Tim Davis, many bug's and improvements are done. Detailed improvements and bugfixes are listed below:

* Missing translations and variables fixed. thanks Mr. Tomasz Milewski
* Blog entry page is corrected.
* Nearly 30 fixes in index.html and in filter function is done for a better XHTML validation. thanks Mr. Tomasz Milewski
* New variable system.
* New template system. thanks Mr. Tim Davis
* Improved links, static page link with an explanation is now possible.
* More detailed wiki_style page which includes new systems, and new link types.
* Date problem of blog is solved.

## Hosting problem...
*Tue, 30 May 2006 - 0:56:15 CEST*

For a nearly day long hosting problem, wikepage.org was out of reach. Sorry for this problem.

## Danish translation is now online
*Wed, 10 May 2006 - 21:34:32 CEST*

Mr. Helmuth Mikkelsen has been translate Wike to Danish! I want to thank Mr. Mikkelsen for his help and support... and Wikepage is now in five languages.

## Translation issues
*Thu, 04 May 2006 - 13:07:24 CEST*

With the kind helps of Mr. Daniel Schmidt and Mr. Tomasz Milewski, german and polish translations of wikepage are available. You can visit new i18n_files page to track all translation files for versions. Wikepage is now in four languages. If you want to translate wikepage to your language, please download english files from sourceforge outlink, translate and sent it to sblisesivdin-at-gmail-dot-com.

## Opus 9, An Experiment: Blog.
*Wed, 26 Apr 2006 - 0:01:03 CEST*

So i can finish opus 9. It's pack of new features and bugfixes like:

* i18n errors fixed in theme files, new variables included in lang file. thanks Mr. Daniel Schmidt
* An upload problem is fixed. thanks Mr. Martin Mazur
* Recent changes RSS output.
* Blog with a wiki typo.
* Blog RSS output.
* Filter problems fixed. thanks Mr. Daniel Schmidt
* 2006.1 theme is improved.
* .inc file creation problem fixed.

Yes, wikepage is now a 34Kb of wiki - blog hybrid. It's not yet mature, but i think it's quite fun having a wiki and blog site with rss output and without a need of database in 34Kb. I have still 4407 bytes free! Opus 10 will be a optimization - bugfix edition. So i need your feedbacks. Please send any feedback, thoughts or anything to sblisesivdin-AT-gmail.com. Thanks everybody!

## Wikepage downloads exceed 5000 and about Opus 9
*Sun, 23 Apr 2006 - 21:57:01 CEST*

Wikepage download counter exceed 5000! Thanks everybody. For a year, except little bugfixes, i have tried to develop wikepage. I know, it has still some bugs, but you may forgive too :) Development of Opus 9 is still in progress. I am quite busy in these days, so i can't bothered with wikepage. I wished to release Opus 9 in the day of 5000th download but, it'll take a little time more. It's mostly ready but i want release at the end of this month, so i can test and fix the bugs more.

## Wikepage Tutorial
*Sun, 23 Apr 2006 - 21:56:33 CEST*

My old friend Mehmet Tahir Sandikkaya writes a great tutorial outlink titled: "Host a totally free wiki site in ten minutes!" about 'alpha to omega' installing Wikepage to a Windows-based system. Tutorial is enriched with visuals of installing PHP, downloading Wikepage, installing IIS, installing and configuring PHP for IIS 4, extracting Wikepage, configuring IIS, initiating Wikepage, privatize Wikepage, edit a page, create a page, deleting a page. I appreciate to my friend for his great effort and support. Thanks Ricco.. You can reach tutorial from this link outlink.

## Wikepage is on opensourcecms.com!
*Sun, 23 Apr 2006 - 21:55:53 CEST*

And.. Wikepage is listed on opensourcecms.com. After today, demo page will be on opensourcecms.com. They do it better! Every two hours they reset demo, and re-install.. This is an amazing work.. Congrulations opensourcecms.com for your work, and thanks for listing wike!

## Sourceforge forum is open for free discussions
*Sun, 23 Apr 2006 - 21:55:31 CEST*

Wikepage is sourceforge supported program, and they serve amazing services. And forum support is one of those services. Before asking me questions with email please ask it on forum outlink. Thanks.

## Wikepage Opus 8 2006.1b released!
*Sun, 23 Apr 2006 - 21:55:03 CEST*

Ok.. I accept. Edit confirmation box is not a good idea. We remove it with protecting security solution. In Opus 7, file upload support was included for a first time and adjusted to upload max. of 1Mbit files. Uh. It's only 122Kb. Sorry for this restriction. I raised it up to 1Mb. You can adjust it from index.php, 1Megabyte is nearly 8.5Mbits, Or simply 8Mbits. And a little url filtering issue solved which affect from 2006.1.

## Wikepage Opus 7 2006.1a released!
*Sun, 23 Apr 2006 - 21:54:36 CEST*

An issue which results wrong execution of wikepage in PHP5 systems is solved. If you use a hosting with PHP5, you must use Opus 7 2006.1

## Wikepage Opus 6 2006.1 released!
*Sun, 23 Apr 2006 - 21:54:06 CEST*

Wikepage is now more powerful! With new features, corrections and optimizations, new wike released! New features of 2006.1 (codename: Fermi-Dirac) are:

* Upload system,
* Delete file/page and support,
* Edit confirmation page,
* Page creation D.O.S. bug closed,
* Small corrections in code and file system.

## Monobook theme!
*Sun, 23 Apr 2006 - 21:53:39 CEST*

Maybe it's world's best theme for wikis. Big wiki brother MediaWiki's popular theme monobook is now for wikepage! For more information please visit Themes page. For your view, Wikepage Demo outlink is using monobook theme.

## Wikepage Opus 5 2005.4 released!
*Sun, 23 Apr 2006 - 21:53:16 CEST*

With new features and mostly optimization, new wike released! New features of 2005.4 (codename: Bose-Einstein) are:

* Spammer enemy: Nofollow outlinks,
* New theme,
* Optimized code,
* Code comments are english now,
* Redesigned folder structure,
* Single file i18n support,
* Theme support,
* From now on, outlinks are signed with -ICON HERE-,

## http://wikepage.org
*Sun, 23 Apr 2006 - 21:52:47 CEST*

New domain is active. It's easier than cyrocom.com, i think.
