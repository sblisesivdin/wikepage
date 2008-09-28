Wikepage - program do tworzenia wiki i stron osobistych opartych na wiki
Wersja 2006.2a Opus 10 (nazwa kodowa: Maxwell-Boltzmann)
-----------------------------------------------------------------------------------------
Wikepage to zgodny ze standardem wiki, �atwy w u�yciu, niedu�y program wywodz�cy si� z 
Tipiwiki2 (http://tipiwiki.sourceforge.net/). Wikepage ma zabezpieczenia, kt�rych Tipiwiki
nie mia�o (ochron� has�em i za�atane 4 wa�ne luki), obs�uguje tabele i wysy�anie plik�w
na serwer, pozwala zmienia� j�zyk interfejsu i umo�liwia obs�ug� wielu witryn...


Wikepage mo�e pracowa� w jednym z dw�ch tryb�w:

- tryb wiki: strony i wpisy w blogu mo�na tworzy� bez podawania has�a,
- tryb strony domowej: nale�y poda� has�o, by m�c zmienia� strony i wpisy.

*INSTALACJA:
- Nale�y otworzy� plik index.php w edytorze tekstowym (np. w Notatniku) i ustawi� 
  prawid�owo informacje opisuj�ce witryn�, j�zyk i inne dost�pne opcje;
- Wgra� wszystkie pliki do odpowiedniego katalogu na serwerze, np. z u�yciem klienta FTP;
- Programem chmod nada� prawa 777 (a przynajmniej 755, ale nie zawsze takie wystarczaj�) 
  plikom w katalogu data i jego podkatalogach.
- Sprawdzi�, czy interpreter PHP nie ma w��czonego trybu safe_mode. W tym trybie Wikepage 
  nie jest w stanie tworzy� stron.
- Aby nasza witryna obs�ugiwa�a inny j�zyk, pobra� odpowiednie pliki ze strony
  http://www.wikepage.org/ i rozpakowa� je w katalogu, w kt�rym zainstalowali�my Wikepage. 
  B�dzie mo�na wtedy zmieni� warto�� zmiennej okre�laj�cej domy�lny j�zyk w pliku
  index.php. Na witrynie wieloj�zycznej mo�liwo�� wyboru j�zyka dadz� u�ytkownikowi 
  odno�niki postaci np. [index.php?lng=en|English], [index.php?lng=pl|Polski] itp.;
- Odwiedzi� nasz� witryn�. Zostaniemy automatycznie przekierowani na stron� Administracji. 
  MUSIMY za�o�y� has�o.
- Witryna ju� dzia�a w trybie wiki!
- Tryb dzia�ania witryny zmienia si� na stronie administracyjnej po podaniu has�a.
- Wpisy do bloga dodaje si� ze strony "Administracja" lub z pomoc� strony, 
  na kt�r� trafimy [index.php?Pisz_Blog|pod tym adresem].
- Zobaczy� sw�j blog mo�na po umieszczeniu s�owa kluczowego "<zobacz_blog>" w tre�ci 
  strony wiki.

Dok�adniejsz� dokumentacj� znajdziemy na swojej witrynie po jej zainstalowaniu.

*LICENCJA
Wikepage jest otwartym programem na licencji GNU/GPL. Wi�cej informacji udost�pniono
pod adresem: [ www.gnu.org/copyleft/gpl.html ]

*UWAGI
- Je�li prawa dost�pu do katalog�w s� ustawione poprawnie, Wikepage powinno dzia�a�.
- Tworzenie, wysy�anie i kasowanie plik�w mo�e nie funkcjonowa� przy ustawieniu 
  safe_mode na "on".

