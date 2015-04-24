Redovisning
====================================
 
Kmom01: PHP-baserade och MVC-inspirerade ramverk
------------------------------------
 
####Allmänt
Det här kursmomentet har flutit på bra och har inte stött på några större problem. Det har dock varit en hel del nya saker att sätta sig in i som bland annat en del nya begrepp och hur Anax-MVC är uppbyggt. Om jag ska nämna en svårighet så har det varit i att förstå hur dom olika delarna hänger ihop i ramverket. Jag har även haft lite svårigheter att förstå hur anonyma funktioner och callbacks fungerar. Det känns som att det var bra att man fick känna på lite ifrån förra kursen hur ett lite enklare ramverk (struktur) kan vara uppbyggt. Det skulle nog har blivit ett ganska stort hopp om man hade hoppat ifrån första kursen direkt till den här kursen. Det jag vill komma fram till är att jag tycker att det har trappats upp på ett bra sätt.

####Utvecklingsmiljö
Operativsystem: Windows 7
webbmiljö: XAMPP
FTP-program: Filezilla
Text-editor: Notepad++
webbläsare: Firefox (oftast)

####Tidigare erfarenheter av ramverk
Jag har inga tidigare erfarenheter av något ramverk. Om man kan räkna Anax som vi använde oss av i den förra kursen OOPHP så är de det närmaste jag har kommit ett ramverk.

####Mer avancerade begrepp
Jag kände igen en del begrepp sedan tidigare men många av dom hade man bara snuddat vid sen förut. Jag fick dock en ganska bra genomgång ifrån boken ”PHP Objects, Patterns, and Practice” och dom sakerna som jag tyckte var lite svårare fick jag leta rätt på lite fler exempel genom nätet. En av dom sakerna som jag speciellt tyckte var svårt var ”callbacks”. Jag tror att jag har fått lite bättre grepp om det nu men det kan fortfarande vara lite klurigt beroende på vilket sammanhang det används i. Sen så var begrepp som exempelvis MVC också helt nya men vet inte om det räknas in i mer avancerade begrepp.

####Anax och Anax-MVC
Min uppfattning av Anax sedan tidigare var att jag tyckte att det kändes kämpigt i början men att när man hade vant sig så blev det ett väldigt fördelaktigt verktyg för att strukturera upp koden. Jag tror att det kommer bli lite samma sak med MVC-anax. När man väl har lärt sig använda ramverket så kommer man inte vilja vara utan det eller iallafall vilja fortsätta jobba med samma typ av strukturering. Min uppfattning hittills så tycker jag att det verkar smidigt men är som sagt fortfarande rätt ovan men det kommer nog ge sig under kursens gång.



Kmom02: Kontroller och modeller
------------------------------------

####Allmänt
Som likt förra kursmomentet så var det mycket att sätta sig in i. Jag stötte på en del problem under vägen när jag skulle lösa uppgiften. Dels så var det svårt att veta hur man skulle börja med uppgiften så det blev en del funderingar och ”detektivarbete”. Efter att jag hade kommit igång med uppgiften så det emellanåt bra och ibland kändes det tungt. Det blev en del felsökning när jag skulle göra krav 5 på uppgiften. Eftersom att man ville dela upp kommentarsflödet så blev man tvungen att ändra en del i koden för att kunna skicka med en ”pageType” för att avgöra vilken sida man skulle ändra kommentarerna på. Det ledde till att ibland så fungerade vissa saker och ibland andra saker men efter en del felsökning som sagt så fungerade allt som det skulle. Det blev en ganska enkel design på kommentarerna på grund av brist på tid. 
Jag missade att man skulle kunna klicka på id:t för att man skulle kunna editera länken och hade då redan implementerat så att man gjorde detta via en formulärknapp men beslutade mig för att lägga till så att man kan klicka på id:t för att editera också.
Efter en del slit och stress så har jag nog iallafall lärt ganska mycket nytt om ramverket vilket såklart känns bra.

####Composer
Jag använde inte Composer så mycket det var egentligen bara när jag skulle lägga till paketet Comment. Men jag tycker att det verkar som ett smidigt verktyg och kommer nog säkerligen att använda det mer. 

####Packagist
Jag kollade inte runt så mycket eftersom jag kände mig stressad med att komma igång med uppgiften. Men som jag nämnde innan så kommer jag nog säkerligen att använda mig av Packagist i framtiden.

####Klasser som kontroller
Det kändes lite ovant att ha klasser som kontroller men det kommer man nog in i mer och mer. Det kändes dock lite klurigare med hur dispatchern fungerade så jag var tvungen att kolla lite extra just på den delen. Jag hoppas att jag ska få mer ordning på alla nya begrepp allt eftersom kursen går.

####phpmvc/comment
Vet inte om jag förbättrade som himla mycket men jag la däremot dit en del extra funktioner. Jag byggde exempelvis ut bland annat metoden för att ta bort kommentarer. Jag valde att göra så att den metoden hade ansvar för att både ta bort alla kommentarer och kunna ta bort enskilda kommentarer. Har även gjort liknande saker för andra metoder där jag kände att jag kunde slå ihop vissa saker.

####Övrigt
Det går att testa kommentarerna på startsidan och på kommentarsidan.



Kmom03: Bygg ett eget tema
------------------------------------

####Allmänt
Även om det har varit en del felsökning under det här kursmomentet så har det varit otroligt lärorikt. Eftersom att design än något som intresserar mig mycket så har jag lärt mig väldigt många användbara saker. Jag var tvungen att ändra ganska mycket med stylen för att alla saker skulle lägga sig på rätt plats enligt bakgrundsbilden (gridlayouten). Men det var väl det lite uppgiften gick ut på förmodar jag. Kort och gott så var det ett väldigt lärorikt kursmoment.

####CSS-ramverk
Har aldrig använt mig av ett CSS-ramverk tidigare men måste säga att nu efter att man har känt på lite av området så känns det som ett nödvändigt verktyg för att designa hemsidor. Inte bara för att det blir bra utan även för att det går mycket snabbare också när man väl har kommit in i det.

####Less, lessphp och Semantic.gs
Tycker att alla tre kändes bra att jobba med. Först när jag skulle läsa texten så tyckte jag att det kändes jobbigt att det även skulle komma något nytt för hur man skrev CSS. Men kände ganska snabbt att Less var att bra komplement till CSS för att jobba lite mer flexibelt och det blev ännu smidigare när man började använda Semantic.gs. Vill lära mig mer om dom här verktygen senare när jag får mer tid över.

####gridbaserad layout, vertikalt och horisontellt 
Jag tycker att det är ett väldigt bra verktyg när det kommer till designbiten. Har tidigare använt mig av liknande verktyg när jag har använt mig av andra designprogram som exempelvis Indesign.

####Font Awesome, Bootsrap, Normalize
Jag tycker att både Font Awesome och Normalize var väldigt användbara. Tycker att det är otroligt smidigt att kunna ta del av ikoner i olika storlekar så enkelt. Har tidigare aldrig använt mig av det men det kommer spara mig en otrolig massa tid och dessutom så ser ikonerna väldigt bra ut. Kollade igenom Bootstrap också och kommer nog villa testa att använda det lite mer senare. Har själv aldrig använt det tidigare men har hört positiva saker från andra och har nu även läst lite om det också och måste instämma. Kommer som sagt säkerligen att fördjupa mig ännu mer i Bootstrap när jag får lite mer tid över.

####Temat
Jag följde guiden och tog direkt inte ut några speciellt stora svängar. Fokuserade främst på att få allt att fungera. Det tog lite tid att få så att temat låg rätt enligt bakgrunden (grid). Visste inte vart jag skulle ändra först men det slutade med att jag ändrade i variables.less eftersom att det kändes mest logiskt.

####Extrauppgift
Jag gjorde inte extrauppgiften.



Kmom04: Databasdrivna modeller
------------------------------------

####Allmänt
Det var som sagt ett väldigt stort kursmoment. Man skulle nästan kunna ha delat upp det till två stycken uppgifter. Det har varit lärorikt men ett svårt kursmoment. Allt verkar nu fungera som det ska iallafall. Jag stötte på en del problem på vägen och det var mycket felsökning men om jag ska nämna några saker som jag kommer på just nu så var det till exempel att jag precis som många andra hade problem med composer. Men fick hjälp ifrån forumet, där jag fick veta att man skulle skriva ”composer update --lock” och det visade sig att det fungerade. Hade även lite problem med att få igång så att man kunde använda sig av Font Awesome men det löstes efter ett tag när jag väl hade börjat kolla på deras hemsida hur man gjorde. Har tyckt att det känts lite svårt med hur man anropar och använder sig av kontroller som klasser men börjar känna att jag har fått bättre koll på den delen.

####Formulärhantering i kursmomentet
Det känns som att det är många saker som sker i bakgrunden och det kan vara lite svårt att säga vad precis som händer i bland. Men tror som sagt att det är lite av en vanesak och det kommer nog spara en hel del tid när man börjar känna sig bekväm med det.

####Databashantering i kursmomentet
Precis som formulärhanteringen kändes det här också lite ovant men tror som sagt att även här att man måste ta sig över en liten tröskel för att kunna uppskatta det mer. Men tycker att tillvägagångssättet är smidigt.

####Basklassen för modeller
Följde guiden och la även till alla saker som togs upp. När jag kom fram till uppgifterna som man skulle lösa så la jag till några extra metoder. Jag la exempelvis till en metod hjälpte till med att ta bort flera kommentarer och en metod som skapade en ny tabell.

####Kommentarer i databasen
Jag byggde upp kommentarklassen på liknande sätt som userklassen. Jag hade en grund där som jag kunde utgå ifrån. Den största skillnaden mellan dom olika klasserna var att man behövde skicka med en identifierare ($pageType) så att man visste vilken sida man befann sig på. Jag tycker att kommentarerna fick en mycket bättre struktur rent kodmässigt om man jämför med kursmomentet då man skulle lagra kommentarerna i en session. 

####Extrauppgiften
Nej jag gjorde inte extrauppgiften

####Övrigt
Kommentartrådarna ligger på me-sidan och kommentar-sidan 




Kmom05: Bygg ut ramverket
------------------------------------

####Allmänt
Det här kursmomentet har gått bra och har varit lärorikt. Det var bra att man fick ett tillfälle för att lära sig hur git och github fungerar. Har länge känt att jag borde tagit tag i det men det har inte blivit av förrän nu. Det största problemet eller iallafall det som tog längst tid var att integrera modulen i ramverket men mer om det senare.

####Inspiration och kodbas till modulen
Jag tyckte att Flash-meddelanden var det som lät mest intressant av dom sakerna som fanns med i artikeln ”Bygg ut ditt Anax MVC med en egen modul och publicera via Packagist”. Jag har även tänkt förut att det skulle vara bra att ha en sådan typ av modul/tjänst i ramverket. 
Inspirationen fick jag från artikeln som jag nämnde ovan och från tidigare kursmedlemmar. När det kom till själva kodbasen och strukturen så använde jag mig av cdatabase, cform, comment och klassen CommentsInSession samt så studerade jag även Phalcons version av flash-meddelanden. 

####Utveckla och integrera modulen i ramverket
Det som tog längst tid var att få till så att den nya modulen hittades och gick att använda. Först när jag började jobba så tänkte jag att jag skulle få själva modulen att fungerar men efter att jag hade gjort klart den så hittades klassen inte när jag väl skulle börja testa den i front-controllern. Det som jag inte visste var att man var tvungen att installera paketet med hjälp av packagist trots att alla filer låg på sin plats. Jag antar att det har med autoloadern att göra. Jag såg att autoloadern inkluderade den nya modulen efter att jag installerat den via composer.
Det tog lite tid innan jag förstod att man var tvungen att skriva ”composer update --no-dev” för att paketet skulle uppdateras när man installerade det. Först så tog jag bara bort paketet och installerade om det med hjälp av kommandot ”composer install”. Tänkte först att synkningen mellan Github och Packagist inte fungerade men efter ett tag så förstod jag att man var tvungen att uppdatera som jag skrev ovan.

####Publicera paketet på Packagist
Jag tycker att publiceringen av paketet gick bra. Först så följde jag stegen som fanns i slutet av artikeln ”Bygg ut ditt Anax MVC med en egen modul och publicera via Packagist”. Jag blev tvungen att kolla upp lite extra hur Git och Github fungerade och det gjorde jag genom att kolla lite guider på youtube. Efter att jag pushat upp paketet på Github så synkade jag Packagist med Github repot. Det var lite osäkert om autosynkningen fungerade i början för jag visste inte om jag hade gjort helt rätt men det visade sig att det fungerade.

####Dokumentation och testande av modulen tillsammans med Anax MVC
Efter att jag hade testat så att modulen fungerade tillsammans med Anax MVC (både nuvarande och standard versionen) så skrev jag klart dokumentationen. Det var inga svårigheter där utan det var bara att försöka skriva på ett tydligt och övergripande sätt på hur modulen fungerade och hur man använde den tillsammans med ramverket.

####Extrauppgiften
Nej jag gjorde inte extrauppgiften

####Länkar
* me-flash: http://www.student.bth.se/~chja15/phpmvc/kmom05/Anax-MVC/webroot/cfmessage
* Packagist: https://packagist.org/packages/chja/cfmessage
* Github: https://github.com/DigitalGrid/cfmessage




Kmom06: Verktyg och CI
------------------------------------

####Allmänt
Tycker att det här kursmomentet var intressant och att man fick lära sig nya användbara verktyg. Jag tycker att uppgiften har flutit på bra förutom en grej som jag hade lite problem med och som jag vet att många andra också har haft var att det var lite klurigt att installera PHPUnit på windows. Efter en del letande så hittade jag en väldigt bra beskrivning av hur man kunde installera PHPUnit med hjälp av composer. Det är tur ibland att forumet finns.

####Bekant med dessa tekniker sedan innan?
Jag har skrivit testkod tidigare i Java men aldrig i PHP. Det som var helt nytt det var Travis, Scrutinizer och code coverage.

####Testfall PHPUnit
Det gick bra att skriva testkoden. Det var inga svårigheter men det kanske beror på att jag har skrivit testkod tidigare. Efter att jag hade skrivit klart testkoden så kollade jag först på Scrutinizer för att jag skulle få en översikt på hur bra testerna var. Jag såg att min code coverage låg någonstans på 80% så jag bestämde mig för att försöka se om jag kunde bättra på den. Jag tog hjälp av verktyget Xdebug och fick då en överblick på vad som kunde ändras. Efter att jag hade ändrat dom saker som rekommenderades så kände jag mig nöjd.

####Integrera med Travis
Det gick bra. Det var väldigt smidigt eftersom att allt gick via github så om man väl hade fått github att fungera så flöt resten på väldigt bra.

####Integrera med Scrutinizer
Samma sak med Scrutinizer så var det egentligen bara att följa guiden som fanns på sidan. Det var inte så mycket som behövde göras så det gick snabbt och enkelt att integrera.

####Hur känns det att jobba med dessa verktyg
Det är väldigt smidigt att allt synkas med github. Efter man hade synkat allt så sker det mesta automatiskt så det är egentligen bara att gå in på dom olika sidorna och suga in informationen. Det är skönt att dom här verktygen finns som samlar upp alla funktioner som är bra att ha så att man själv slipper inkludera alla dessa själv. Jag kommer nog att fortsätta att använda dessa verktyg nu när jag väl har lärt mig dom. Tyckte att det var en liten tröskel att ta sig över när det kom till git/github eller egentligen bara att man skulle ta initiativet till att lära sig dom. Känns bra nu iallafall när man börjar få lite bättre koll på leksakerna.

####Extrauppgiften
Nej jag gjorde inte extrauppgiften.

####Länkar
* Redovisning: www.student.bth.se/~chja15/phpmvc/kmom06/Anax-MVC/webroot/redovisning
* Github: https://github.com/DigitalGrid
* Scrutnizer: https://scrutinizer-ci.com/g/DigitalGrid/cfmessage/
* Travis:  https://travis-ci.org/DigitalGrid/cfmessage

