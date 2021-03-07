CREATE TABLE IF NOT EXISTS `book` (
  `b_id` int(4) NOT NULL AUTO_INCREMENT,
  `b_nm` varchar(60) NOT NULL,
  `b_subcat` varchar(25) NOT NULL,
  `b_desc` longtext NOT NULL,
  `b_publisher` varchar(40) NOT NULL,
  `b_edition` varchar(20) NOT NULL,
  `b_isbn` varchar(10) NOT NULL,
  `b_page` int(5) NOT NULL,
  `b_price` int(5) NOT NULL,
  `b_img` longtext NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

INSERT INTO `book` (`b_id`, `b_nm`, `b_subcat`, `b_desc`, `b_publisher`, `b_edition`, `b_isbn`, `b_page`, `b_price`, `b_img`) VALUES
(1, 'Ilon Mask: Tesla, SpaceX i potraga za fantasticnom buducnoscu ', '1', 'U knjizi Ilon Mask: Tesla, SpaceX i potraga za fantasticnom buducnoscu, tehnoloski novinar Esli Vens daje prvi insajderski pogled na izuzetan zivot i doba najneustrasivijeg preduzetnika iz Silicijumske doline - danasnjeg amalgama legendarnih pronalazaca i industrijalaca poput Tomasa Edisona, Henrija Forda, Hauarda Hjuza i Stiva Dzobsa. Ekskluzivnim pristupom Maskovom privatnom zivotu, porodici i prijateljima, knjiga opisuje preduzetnikovo putovanje od teskog detinjstva u Juznoj Africi do samog vrha globalnog poslovnog sveta. Vens je u razgovorima sa Maskom proveo vise od 30 sati i intervjuisao gotovo 300 ljudi kako bi predocio istoriju njegovih kompanija koje su promenile svet - Pejpal, Tesla motors, SpaceX, Solarsiti - i opisao coveka koji je obnovio americku industriju, podstakao uspon do visih nivoa inovacija, i pritom stekao mnogo neprijatelja.', 'Laguna', 'oktobar 2017.', '978-86-521-2788-7', 448, 1000, 'upload_image/pic1.jpg'),
(2, 'Nauci da programiras - Maks Vejrajt ', '1', 'Sve sto treba da znas o skracu, logou, pajtonu, HTML-u i javaskriptu.

Dobro dosli u svet kompjuterskog programiranja.

Pocecemo s osnovnim pojmovima programiranja i ici korak po korak, i dok budemo pratili uputstva, naucicemo mnogo o petljama, promenljivama i biranju ‒ i tako sve dok ne usavrsis vestinu programiranja toliko da ces moci da napravis svoj sajt... i jos mnogo toga!

Roboti ce nam pomagati i pobrinuti se da nam sve bude jasno. Nauci kako da koristis logo, da pravis igre u skracu, da pravis programe u pajtonu, da eksperimentises s HTML-om i koristis javaskript kako bi napravio interaktivne internet stranice.

Pomeraj animirane likove po ekranu, napravi program za igru s lavirintom, spremi mi sendvic i nauci kako da napravis svoj sajt! ', 'Vulkan', 'mart 2017.', '978-86-521-2390-2 ', 128, 699, 'upload_image/pic2.jpg'),
(3, 'Digitalno zlato - Natanijel Poper ', '1', 'Bitkoin, revolucionarna digitalna valuta i finansijska tehnologija, predstavlja zacetak jednog globalnog drustvenog pokreta utopijskih stremljenja. Ideja nove valute, koju odrzavaju personalni racunari sirom sveta, bila je predmet brojnih sala, ali to je nije sprecilo da preraste u tehnologiju vrednu vise milijardi dolara, tehnologiju s mnostvom sledbenika, koji je smatraju najvaznijim novim izumom jos od stvaranja interneta. 
 „Sjajna prica. Bitkoin ce preobraziti i finansijski svet i nasu upotrebu interneta, a ova izuzetno zanimljiva knjiga predstavlja hroniku njegovog neverovatnog nastanka. Poperova prica se ne ispusta iz ruke, puna je zivopisnih izumitelja, i predstavlja kljucno stivo za svakoga ko zeli da razume buducnost.“ Volter Ajzakson, autor knjige Stiv Dzobs', 'Laguna', 'januar 2018.', '978-86-521-2849-5 ', 289, 799, 'upload_image/pic3.jpg'),
(4, 'Darknet - U digitalnom podzemlju - Dzejmi Bartlet ', '2', 'Knjiga Darknet vodi nas duboko u digitalno podzemlje i pruza nam izuzetan uvid u internet kakav ne poznajemo. Dzejmi Bartlet prelazi s one strane ekrana i iz digitalnog mraka izvlaci hakere, dilere drogom, trolove, kam-devojke, politicke ekstremiste i daje ljudsko lice onima koji imaju mnogo razloga da budu anonimni.

Darknet je prosvetljujuce i zivopisno istrazivanje interneta i njegovih najinovativnijih i najbizarnijih supkultura. Ono se prostire od popularnih drustvenih mreza i tajnih grupa na Fejsbuku do kriptovanih delova mreze Tor i najzabacenijih odaja Deep Weba.

To je svet koji se cesto pominje u medijskim izvestajima, ali je ipak nedovoljno poznat. Svet gotovo neistrazen i nama blizi nego sto mislimo. Svet bitkoina i Silk rouda, terorista i pornografije. To je darknet.', 'Mikro-knjiga', 'septembar 2016.', '978-86-521-2326-1 ',189 , 599, 'upload_image/pic4.jpg'),
(5, 'Silicijumska dolina – Digitalna revolucija iz prve ruke - Kristof Keze', '2', 'Kako su nastale i na kojim tehnoloskim i ekonomskim principima pocivaju najvece savremene korporacije – Fejsbuk, Gugl, Amazon, ili Epl – i kako da se sa njima izborimo?

Hoce li Gugl prerasti u problem sa kojim necemo moci da izadjemo na kraj? Da li ce posledica razvoja interneta biti ukidanje novca, banaka, maloprodaje, novina, knjiga i semafora? sta svaka zemlja mora da uradi da bi svoj razvoj usaglasila sa svetskim tehnoloskim razvojem?

Novinar i strucnjak za ekonomske nauke Kristof Keze proveo je pola godine u Silicijumskoj dolini. On iz prve ruke izvestava o inovacijama, predstavlja razne oblike digitalne revolucije i povezuje ih u celovitu sliku. Razgovarao je sa osnivacima preduzeca, finansijerima, inovatorima i profesorima sa Stanforda i Berklija. Trazio je recepte za uspeh i ideje koje pokrecu ekonomsku stranu interneta.', 'Vulkan', 'oktobar 2016.', '978-86-521-2106-9 ', 391, 699, 'upload_image/pic5.jpg'),
(6, 'Velika knjiga o roditeljstvu - Klaus Koh', '5', 'Vise od pedeset vrhunskih strucnjaka savetuje i odgovara na pitanja koja svakodnevno muce roditelje, a odnose se na period od zaceca deteta do punoletstva. 

Ova knjiga ohrabruje odgovorne roditelje da se sa samopouzdanjem nose sa svakodnevnim nedoumicama i vaznim odlukama koje se odnose na vaspitanje i obrazovanje dece. Autori knjige priznati su pedagozi, psiholozi, pedijatri, biolozi, neurolozi, nutricionisti, naucnici iz oblasti medicine i strucnjaci za bolesti zavisnosti.

Izuzetno korisna knjiga koja je bazirana na naucno zasnovanim cinjenicama i pomaze nam u tome da se sa svakodnevnim decjim radosnim i tuznim trenucima nosimo na pravi nacin.', 'Mikro-knjiga', 'avgust 2017.', '978-86-521-1220-3 ', 456, 1000, 'upload_image/pic6.jpg'),
(7, 'Samostalna deca su srecnija - pedagoski metod Marije Montesori ', '5', 'Zadatak ove knjige je da roditeljima, pedagozima i vaspitacima priblizi oprobani pedagoski metod Marije Montesori, kojim je detetu u njegovom vaspitanju dato da razvija stvaralacke snage. 

Hajdi Majer-Hauzer nam u ovom dragocenom prirucniku u vidu dijaloga izmedju roditelja i dece opisuje primere iz svakodnevice jednog obdanista Montesori. Za pravilno vaspitanje dece najvaznije je okruzenje puno ljubavi. Medjutim, vodjeni zeljom da decu zastite od svih zivotnih neprijatnosti, mnogi roditelji misle da i najmanju prepreku moraju da im uklone s puta. Deca tako postaju nesamostalna. Da bismo deci pomogli da razviju samopouzdanje i osecaj samopostovanja, moramo da budemo odlucni i da postavimo zdrave granice u decjem ponasanju. Takodje je vazno i da se odreknemo nepotrebnih kritika i brige. Zbog toga je ova knjiga koristan savetnik za situacije na koje nailazimo kako kod kuce, tako i u obdanistu i skoli.
', 'Mikro-knjiga', 'godinaizdanja-2007', '978-86-521-0860-2 ', 241, 499, 'upload_image/pic7.jpg'),
(8, 'Jungova mapa duse - Marej Stajn ', '6', '„Jungova mapa duse iznedrila se iz kurseva koje sam godinama drzao na Institutu K. G. Jung u cikagu. Za mene je bio izazov da dam pregled najvaznijih aspekata Jungove teorije psihe, i to bez pojednostavljivanja, ali i bez dodatnog usloznjavanja. Knjiga je namenjena pocetnicima, da ih uvede u analiticku psihologiju, kao i onima koji su sa njom vec upoznati, ali nemaju jasnu sliku. Danas se ova knjiga nasiroko koristi kao prirucnik. Nadam se da je ljudi mogu citati i samo cistog zadovoljstva radi.

Jungovi radovi promenili su moj zivot i zivote mnogih ljudi sa kojima sam bio u dodiru poslednjih cetrdeset godina. Ukoliko sam kadar da ohrabrim druge da zadju dublje u Jungova pisanija, smatracu svoja nastojanja znacajnim. Jungovo delo je izdasno, od velike je vaznosti i zaokupice mnoge narastaje da u potpunosti prociste i zaokruze njegovo znacenje, kako za svakog coveka ponaosob, tako i za razlicite kulture sirom sveta.“

– iz intervjua koji je autor dao povodom izlaska ove knjige na srpskom jeziku', 'Vulkan', 'septembar 2007.', '89-2652856 ', 177, 1000, 'upload_image/pic8.jpg'),
(9, 'Vodic kroz ljubavnu istoriju Beograda - Nenad Stefanovic ', '8', 'Vodic o zatajnim vezama nobelovca Ive Andrica, naucnika Milutina Milankovica, kraljevskih parova iz dinastija Obrenovica i Karadjordjevica, o dvorskoj romansi Josipa Broza i o desetinama znacajnih licnosti opisanih u ambijentu palata i kuca sa utisnutim pecatom vremena. 

Sve adrese opisanih kuca i danas postoje, tako da je citanje ove knjige istovremeno i poziv u setnju kroz dva poslednja veka nase novije istorije, od kneza Milosa do danasnjih dana, od Ite Rine do Jelene Dimitrijevic, Branka copica, Riste i Bete Vukanovic, Vaska Pope... 
citanje ove knjige je ulazak u avanturu u kojoj pratimo kako grad raste sa svojim zdanjima i ljubavnim pricama.', 'Delfi', 'jul 2017.', '978-86-521-2484-8 ', 192, 699, 'upload_image/pic9.jpg'),
(10, 'Tajna istorija Miloseve Srbije - Vuk S. Karadzic ', '6', '„Milos je u gospodstvu i u besposlici malo po malo dotle doterao, da mu se sad nista tako ne mili, kao sprdnja. Sa sprdnjom se vreme besposleno provodi, sa sprdnjom se briga razbija, sa sprdnjom se ruca i vecera, sa sprdnjom se sva drzavna dela svrsuju, sa sprdnjom se i Bogu u crkvi moli. Koji najbolje zna sa sobom i s drugim ljudma sprdnju zbijati, onaj je najsposobniji da se primi u dvor za ministra...“

Kad je na poziv kneza Milosa boravio na sluzbi u Srbiji 1829. i 1830, Vuk Karadzic je bio svedok Milosevog despotskog vladanja i svakodnevnog izmotavanja sa njegovom okolinom i narodom koji je dolazio knezu da se pozali ili zatrazi pravdu. Po obavljenom poslu napustice Beograd i u zemunskom karantinu napisati poduzi tekst sa primerima Miloseve tiranije pod nazivom Osobita gradja za srpsku istoriju nasega vremena.', 'Delfi', 'decembar 2017.', '978-86-521-2620-0 ', 250, 799, 'upload_image/pic10.jpg'),
(11, 'Istorija starog sveta – III tom: Prvi preobrazaji - Suzan Bauer ', '5', 'Istorija starog sveta u tri toma prikazuje razvoj prvih civilizacija na potezu od Mediterana, preko Bliskog istoka i Indije sve do istocne Azije i obala danasnje Kine, zadrzavajuci se na posebnostima svake od njih, prateci ih kroz vreme od zacetka ljudskih drustava sve do cara Konstantina. 

Bogato opremljena mapama i vremenskim trakama, knjiga citaocu pruza jedinstvenu priliku da stekne jasan uvid o prostoru o kome se govori, protoku vremena i kulturnoj povezanosti, a pre svega ona pripoveda o ljudima i njihovim zivotima, sto ovoj istoriji daje posebnu punocu i zivost ali i mogucnost da citalac shvati vreme, obicaje i licnosti starog sveta. ', 'Vulkan', 'februar 2018.', '978-86-521-2837-2 ',311 , 850, 'upload_image/pic11.jpg'),
(12, 'Istorija sveta - Timoti Hol ', '5', 'Kljucni istorijski dogadjaji 
koji su oblikovali svet

Pristupacno, jednostavno, razumljivo.

Od antickih vremena do danas.

Sve sto vam je potrebno da saznate o istoriji sveta.

Za neke je istorija uciteljica zivota, uzbudljivo stivo puno drame i intriga. Drugima je to jos jedna vrsta znanja koju moraju da usvoje. Ovaj dinamican, razumljiv i lako citljiv vodic upoznace vas sa prekretnicama koje su odredile smer kretanja citavog covecanstva, kao i sa revolucijama, promenama i kljucnim dogadjajima koji su oblikovali danasnji svet od osvita civilizacije do danasnjeg dana. ', 'Delfi', 'decembar 2017.', '978-86-521-2362-9 ', 352, 1000, 'upload_image/pic12.jpg'),
(13, 'Kralj Milutin - Luka Miceta ', '7', 'Biografija svetog srpskog kralja.

U srpskom narodnom pamcenju kralj Stefan Uros II Milutin ostao je donekle u senci svog slavnog pradede Stefana Nemanje i unuka cara Dusana. Luka Miceta knjigom Kralj Milutin – biografija svetog srpskog kralja podseca na ovog izuzetnog vladara koji je na prestolu srpske srednjovekovne drzave proveo gotovo pune cetiri decenije (1282–1321), duze od bilo kog Nemanjica. Oslikavajuci presudne dogadjaje, licnosti i istorijske procese balkanske i mediteranske istorije toga vremena, autor podseca i da je u velikoj meri, upravo zahvaljujuci Milutinovim drzavnickim sposobostima, Srbija tada izrasla u najmocniju drzavu na Balkanu.

Na tragu svojih prethodnih naslova posvecenih nemanjickim vladarima, Luka Miceta oprobanim publicistickim pristupom i sa vec prepoznatljivom akribijom u ovoj knjizi osvetljava slozenu licnost kralja Milutina, njegovu politiku, mnogobrojne brakove, ktitorsku delatnost, sudbinu njegovih mostiju, kao i spomene na ovog svetog kralja medju savremenicima ali i kasnijim pokolenjima.', 'Vulkan', 'decembar 2016.', '978-86-521-2456-5 ', 623, 850, 'upload_image/pic13.jpg'),
(14, 'Dzez basket - Aleksandar Miletic ', '10', 'Kako je nastajala slavna skola jugoslovenske kosarke.

Svedocanstvo o tome kako su pametni i hrabri ljudi iz ciste, mladalacke ljubavi poceli da igraju kosarku, bez namere da promene lice svetske kosarke. A to su na kraju ucinili. 

Ova prica pocinje u vreme kada je i prva kosarkaska lopta stigla kod nas, a zavrsava se kosarkaskim trijumfom koji je od ovog sporta napravio svojevrsni jugo-brend. Neki i danas, bilo da su u Beogradu, Zagrebu ili Ljubljani, uporno tvrde da je „kosarka najbolji drzavni proizvod“, a u to je izrasla najvise zahvaljujuci Nebojsi Popovicu, Bori Stankovicu, Radomiru saperu, Aleksandru Nikolicu, zatim svim njihovim saradnicima, igracima prvih generacija i njihovim uzorima. Masta, dovitljivost, sloboda u igri, spektakl ocaravali su planetu s obe strane Okeana. Sve bi ostalo u domenu kosarkaskog eksperimenta da nisu osvojili zlato u ljubljanskom Tivoliju 1970. Tada su porazeni svi kosarkaski uzori i ucitelji, a naslednicima je zavestan putokaz do bogate riznice pehara i medalja u vremenima koja ce doci. ', 'Mikro-knjiga', 'septembar 2013.', '978-86-521-1302-6 ', 145, 699, 'upload_image/pic19.jpg'),
(15, 'Partizan – Moj fudbalski klub-Bojan Ljubenovic', '8', 'Za druge se navija, Partizan se voli!

Da bi nekoga voleo, najpre moras da ga upoznas. Uz ovu knjigu tvoja ljubav prema Partizanu postace jos jaca jer ces iz nje saznati sve o slavnoj proslosti svog voljenog kluba.

Saznaces kako je nastao, koje su njegove najvece utakmice, ko su njegovi najbolji igraci i zasto se za druge navija, a Partizan se voli. Ako dobro naculjis usi, cuces huk sa Partizanovog juga i pobednicke pesme navijaca.', 'Laguna', 'mart 2016.', '978-86-521-2169-4 ', 844, 799, 'upload_image/pic15.jpg'),
(16, 'Montevideo, Bog te video! - Vladimir Stankovic ', '1', 'A onda, u petom minutu, stadionom se razlegao – muk! Jedan od najvecih u istoriji fudbala. Onako uspaljenu atmosferu mogao je da ohladi samo gol Jugoslovena – i bas to se i dogodilo.

Jedinstvena prica o okolnostima pod kojima su srpski fudbaleri u jugoslovenskim dresovima 1930. godine ucestvovali na Svetskom prvenstvu u Urugvaju. Ova knjiga ozivljava legendarne igrace Mosu i Tirketa, prekookeansko putovanje brodom „Florida“, senzacionalnu pobedu protiv Brazila, ali i jednu od najneverovatnijih sportskih nepravdi, i najzad odusevljenje Beogradjana koji su docekali svoje heroje. 

Vladimir Stankovic napisao je svedocanstvo o zaboravljenim dogadjajima koji su legendarni podvig srpskih fudbalera ucinili velikim jugoslovenskim fudbalskim uspehom, o entuzijazmu i istrajnosti, casti i odlucnosti, prijateljstvu i veri, o vremenu i okolnostima u kojima se fudbal igrao sa strascu prve ljubavi.', 'Delfi', 'januar 2017.', '978-86-521-1456-6 ', 182, 850, 'upload_image/pic16.jpg'),
(17, 'Sve ili nista - Loter Mateus', '1', 'Lotar Mateus je legenda. Mnogi njegovi golovi usli su u istoriju fudbala. I pored velikih uspeha, morao je da trpi i poraze – ne samo na terenu vec i u privatnom zivotu. Tokom svoje fudbalske karijere Mateus je bio omiljena tema bulevarskih listova i televizijskih emisija. Zbog svoje velike iskrenosti, cesto je bio meta surovih kritika. 

U ovoj knjizi Mateus prvi put govori o sebi, iskreno i bez zadrske, ali i samokriticki, svodeci bilans svog zivota ispunjenog ne samo zvezdanim trenucima vec i otkricima tamnih strana danasnjeg fudbala. 

„Bespostedno iskrena i autenticna knjiga.“ Taz', 'Laguna', 'februar 2014.', '978-86-521-1308-8 ', 321, 799, 'upload_image/pic17.jpg'),
(18, 'Moritati i legende - Bohumil Hrabal', '11', 'Dvanaest prica, prvi put prevedenih na srpski, inspirisane su „krvavim“ poemama i legendama koje su se nekad pripovedale na vasarima pred odusevljenom masom. Osluskujuci anegdote ispricane u galami pivnice i brbljanja u berbernici gde se resavaju „svetska pitanja“, koristeci nadrealisticke rasprave i pisma koja su mu slali citaoci da bi euforicno hvalili ili najvulgarnije vredjali njegova dela, Hrabal pretvara glas naroda u groteske i balade u kojima velica obicnog coveka. Iako usredsredjen na moderne teme, on uspesno cuva ono dirljivo-smesno i ono zastrasujuce-jezivo koje potice iz folklora.

Moritati i legende donose sve vrline proze velikog ceskog pisca – crni humor, paradoks egzistencije, apsurd, tragicno i komicno. Medju pripovetkama se posebno istice Legenda o Kainu, iz koje ce nastati novela Strogo kontrolisani vozovi i istoimeni film Jirzija Mencela, nagradjen Oskarom.', 'Vulkan', 'februar 2018', '978-86-521-2806-8 ', 284, 699, 'upload_image/pic18.jpg'),
(19, 'Crvena zvezda – Moj fudbalski klub - Bojan Ljubenovic ', '11', 'Zvezda je zivot, sve ostalo su sitnice!

Da bi nekoga voleo, najpre moras da ga upoznas. Tako je u zivotu, a tako je i u sportu. Ova knjiga pomoci ce ti da saznas najvaznije podatke iz prebogate istorije fudbalskog kluba Crvena zvezda.

Hiljade utakmica odigrao je tvoj voljeni klub. Crveno-beli dres nosili su neki od najboljih igraca koje je svet video. Pobedjivali su i gubili, radovali se i tugovali. Sa njima i milioni navijaca. Kroz pobede i poraze isli su dostojanstveno, postujuci sebe i protivnike. Tako su stvorili Crvenu zvezdu, evropskog i svetskog sampiona.', 'Mikro-knjiga', 'mart 2016.', '978-86-521-2168-7 ', 375, 499, 'upload_image/pic14.jpg'),
(20, 'Jedna Svanova ljubav - Marsel Prust', '1', 'Opis', 'Laguna', 'januar 2018.', '978-86-521-2799-3 ', 463, 699, 'upload_image/pic20.jpg'),
(21, 'Naziv ', '1', 'sarl Svan je plejboj i dendi; covek istancanog ukusa i ljubitelj umetnosti koji se fatalno zaljubljuje u Odetu de Kresi, „zenu na losem glasu“, uz to prostu, zlu i glupu. Za Svana, ljubav je neodvojiva od ljubomore i strepnje. Da li ce uspeti da odrzi idealizovanu sliku o Odeti, i hoce li ta zanesenost sacuvati njihovu ljubav od propasti?

Prust je pricu o Svanu zasnovao na cinjenicama iz sopstvenog zivota. Pripovedajuci o Svanovoj i Odetinoj romansi, on je ispricao istoriju svoje ljubavi ‒ od flerta, preko strasne erotske zudnje i agonije izazvane sumnjom u vernost voljenog bica, pracene mucnim ljubomornim scenama, do „izlecenja“ koje dojucerasnje ljubavnike cini gotovo ravnodusnim jedno prema drugom.', 'Vulkan', 'godinaizdanja-2007', 'sifra ',520 , 850, 'upload_image/pic21.jpg'),
(22, 'Blago cara Radovana - Jovan Ducic', '1', 'Klasici srpske knjizevnosti.

Knjiga o sudbini.

Svi ljudi znaju da ima u zivotu jos uvek jedno zakopano blago za svakog od njih. Svi ljudi kopaju: svi ljudi od akcije, od poleta, od sile, od vere u zivot i u cilj, i od vere u neverovatno i u nemogucno. Svi traze i vape za carem tog vecnog nespokojstva i vecnog traganja. Svet bi nestao da nema tog cara, i oslepio bi da ne sija u pomrcini njegovo nasluceno blago...

Knjiga mudrosti i lepote velikog srpskog pesnika, jedno od najcitanijih dela srpske knjizevnosti. Riznica poeticnih filozofskih razmatranja o sudbinskim temama koje zaokupljaju svakog coveka. Izvor znanja i zivotnog nadahnuca. Knjiga koja generacije citalaca podstice na razmisljanje, pruza podrsku u teskim trenucima i pomaze svakome ko uroni u njene redove da lakse pronadje svoj put. ', 'Vulkan', 'februar 2018.', '978-86-521-2665-1 ', 281, 850, 'upload_image/pic21.jpg'),
(23, 'Srpske narodne pripovijetke - Vuk S. Karadzic', '1', 'Sve Vukove narodne price u jednoj knjizi. 

Zasto u narodnim pripovetkama najmladji sin uvek pobedjuje azdaju i osvaja princezu; kako nadmudriti djavola; otkud to da nekome sve polazi za rukom a neko nikad nema srece; zbog cega ljudi nemaju ravan taban; zasto su prostaci siromasni; koji su lekovi od magija – odgovori na ovakva pitanja i druga cudesa iz narodne maste kriju se u ovoj knjizi. 

Prevedene na mnoge svetske jezike jos u Vukovo doba, pripovetke Medjedovic, cardak ni na nebu ni na zemlji, Nemusti jezik, Zlatna jabuka i devet paunica, Bas-celik, Usud, Pepeljuga, Biberce, U cara Trojana kozje usi, Jarac zivoderac, Sveti Sava i djavo, Krepao kotao i mnoge druge – pravi su biseri usmenog narodnog blaga. Posto im je formu i stilski pecat dao sâm Vuk, one su istovremeno i „istocnik autenticne srpske proze sa sredine XIX veka“ (Miodrag Maticki). 

Obelezavajuci jubilej Vukovog rodjenja, Vukova zaduzbina i „Laguna“ objavljuju sve narodne pripovetke koje je Vuk licno sakupio i zapisao, ukupno sto trinaest, a koje su do danas samo nekoliko puta objavljene u celini i u svom neizmenjenom obliku. ', 'Delfi', 'avgust 2017.', '978-86-521-2618-7 ', 751, 850, 'upload_image/pic22.jpg');
/*
(24, 'Naziv ', '1', 'Opis', 'Laguna', 'godinaizdanja-2007', 'sifra ', 482, 1000, 'upload_image/pic24.jpg'),
(25, 'Naziv ', '1', 'Opis', 'Mikro-knjiga', 'godinaizdanja-2007', 'sifra ', 812, 699, 'upload_image/pic25.jpg'),
(26, 'Naziv ', '1', 'Opis', 'Laguna', 'godinaizdanja-2007', 'sifra ', 512, 1000, 'upload_image/pic22.jpg'),
(27, 'Naziv ', '1', 'Opis', 'Delfi', 'godinaizdanja-2007', 'sifra ', 891, 1000, 'upload_image/pic27.jpg'),
(28, 'Naziv ', '1', 'Opis', 'Vulkan', 'godinaizdanja-2007', 'sifra ', 345, 799, 'upload_image/pic28.jpg'),
(29, 'Naziv ', '1', 'Opis', 'Laguna', 'godinaizdanja-2007', 'sifra ', 248, 799, 'upload_image/pic29.jpg'),
(30, 'Naziv ', '1', 'Opis', 'Mikro-knjiga', 'godinaizdanja-2007', 'sifra ',392 , 850, 'upload_image/pic30.jpg'),
(31, 'Naziv ', '1', 'Opis', 'Laguna', 'godinaizdanja-2007', 'sifra ',571 , 699, 'upload_image/pic31.jpg'),
(32, 'Naziv ', '1', 'Opis', 'Vulkan', 'godinaizdanja-2007', 'sifra ', 873, 1000, 'upload_image/pic32.jpg'),
(33, 'Naziv ', '1', 'Opis', 'Mikro-knjiga', 'godinaizdanja-2007', 'sifra ',710 , 850, 'upload_image/pic33.jpg'),
(34, 'Naziv ', '1', 'Opis', 'Vulkan', 'godinaizdanja-2007', 'sifra ',457 , 799, 'upload_image/pic34.jpg');*/


CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(4) NOT NULL AUTO_INCREMENT,
  `cat_nm` varchar(30) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;


INSERT INTO `category` (`cat_id`, `cat_nm`) VALUES
(1, 'IT'),
(2, 'Psihologija'),
(3, 'Istorija'),
(4, 'Sport'),
(5, 'Knjizevnost');

CREATE TABLE IF NOT EXISTS `contact` (
  `con_id` int(4) NOT NULL AUTO_INCREMENT,
  `con_nm` varchar(25) NOT NULL,
  `con_email` varchar(35) NOT NULL,
  `con_query` longtext NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `contact` (`con_id`, `con_nm`, `con_email`, `con_query`) VALUES
(1, 'mare1', 'mare1@gmail.com', 'Molim vas uvedite naucnu fantastiku...'),
(2, 'Marija', 'maki700@yahoo.com', 'Da li imate knjige Agate Kristi?'),
(3, 'Ivana', 'ivanica89@yahoo.com', 'Koju bi mi knjigu preporucili za Java programiranje?'),
(4, 'Milos', 'misaa@gmail.com', 'Svaka cast, samo nastavite tako!!!!');

CREATE TABLE IF NOT EXISTS `shipping_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `address` text NOT NULL,
  `postal_code` bigint(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `f_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;


INSERT INTO `shipping_details` (`id`, `name`, `address`, `postal_code`, `city`, `state`, `phone`, `f_id`) VALUES
(1, 'Sanja Milosevic', ' Sremska 18', 18000, 'Nis', 'Srbija', 065289452, 'sanja'),
(2, 'Miroslav Ilic', ' Visegradska 33', 18000, 'Nis', 'Srbija', 062389210, 'miki');


CREATE TABLE IF NOT EXISTS `subcat` (
  `subcat_id` int(4) NOT NULL AUTO_INCREMENT,
  `parent_id` int(4) NOT NULL,
  `subcat_nm` varchar(35) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;


INSERT INTO `subcat` (`subcat_id`, `parent_id`, `subcat_nm`) VALUES
(1, 1, 'Programiranje'),
(2, 1, 'Kriptografija'),
(3, 1, 'Internet'),
(6, 2, 'Savremena pshilogija'),
(7, 2, 'Pravilno odrastanje'),
(8, 3, 'I i II svetski rat'),
(9, 3, 'Stara Grcka'),
(10, 3, 'Velika otkrica'),
(11, 4, 'Kosarka'),
(12, 4, 'Fudbal'),
(13, 4, 'Trileri'),
(14, 4, 'Ljubavni romani'),
(15, 5, 'Klasici'),
(16, 5, 'Biografije');



CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(4) NOT NULL AUTO_INCREMENT,
  `u_fnm` varchar(35) NOT NULL,
  `u_unm` varchar(25) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_gender` varchar(7) NOT NULL,
  `u_email` varchar(35) NOT NULL,
  `u_contact` varchar(12) NOT NULL,
  `u_city` varchar(20) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;


INSERT INTO `user` (`u_id`, `u_fnm`, `u_unm`, `u_pwd`, `u_gender`, `u_email`, `u_contact`, `u_city`) VALUES
(1, 'Ivica Tasic', 'ivica', 'ivica', 'Male', 'ivica@gmail.com', '061136522', 'Lebane'),
(2, 'Nikola Golubovic', 'golub', 'golub', 'Male', 'nikola@yahoo.com', '06689856', 'Zajecar'),
(3, 'Miki Mikic', 'miki', '123', 'Male', 'miki@gmail.com', '06325663', 'Beograd'),
(4, 'admin', 'admin', 'admin', 'Female', 'admin@gmail.com', '0659632561', 'Kragujevac');

ALTER TABLE book ADD COLUMN b_number int;
UPDATE book set b_number=5;
ALTER TABLE shipping_details CHANGE state book_name varchar(50);

create TABLE old_contact( 
id int not null PRIMARY KEY, 
name varchar(25), 
email varchar(25), 
qvr longtext 
) ENGINE=INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=5;

