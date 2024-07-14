<?php include("header.php"); ?>
<div class="container-c">
    <div class="sidebar">
    <a href="index.php?category=kola" class="<?php echo ($cat === 'kola') ? 'active' : ''; ?>">Jízdní kola</a>
        <ul class="<?php echo ($cat === 'kola') ? 'active' : ''; ?>
                    <?php echo ($cat === 'detska') ? 'active' : ''; ?>
                    <?php echo ($cat === 'horska') ? 'active' : ''; ?>
                    <?php echo ($cat === 'celo') ? 'active' : ''; ?>
                    <?php echo ($cat === 'silnicni') ? 'active' : ''; ?>
                    <?php echo ($cat === 'gravel') ? 'active' : ''; ?>
                    <?php echo ($cat === 'treking') ? 'active' : ''; ?>">
            <li><a href="index.php?category=detska"
                    class="<?php echo ($cat === 'detska') ? 'active' : ''; ?>">Dětská</a></li>
            <li><a href="index.php?category=horska" class="<?php echo ($cat === 'horska') ? 'active' : ''; ?>">Horská
                    kola</a></li>
            <li><a href="index.php?category=celo"
                    class="<?php echo ($cat === 'celo') ? 'active' : ''; ?>">Celoodpružená</a></li>
            <li><a href="index.php?category=silnicni"
                    class="<?php echo ($cat === 'silnicni') ? 'active' : ''; ?>">Silniční</a></li>
            <li><a href="index.php?category=gravel"
                    class="<?php echo ($cat === 'gravel') ? 'active' : ''; ?>">Gravel</a></li>
            <li><a href="index.php?category=treking"
                    class="<?php echo ($cat === 'treking') ? 'active' : ''; ?>">Trekingová</a></li>
        </ul>
        <a href="index.php?category=ekola" class="<?php echo ($cat === 'ekola') ? 'active' : ''; ?>">Elektrokola</a>
        <ul class="<?php echo ($cat === 'ekola') ? 'active' : ''; ?>
                    <?php echo ($cat === 'ehorska') ? 'active' : ''; ?>
                    <?php echo ($cat === 'ecelo') ? 'active' : ''; ?>
                    <?php echo ($cat === 'ecestovni') ? 'active' : ''; ?>">
            <li><a href="index.php?category=ehorska" class="<?php echo ($cat === 'ehorska') ? 'active' : ''; ?>">Horská
                    e-kola</a></li>
            <li><a href="index.php?category=ecelo"
                    class="<?php echo ($cat === 'ecelo') ? 'active' : ''; ?>">Celoodpružená e-kola</a></li>
            <li><a href="index.php?category=ecestovni"
                    class="<?php echo ($cat === 'ecestovni') ? 'active' : ''; ?>">Cestovní e-kola</a></li>
        </ul>
        <a href="index.php?category=helmy" class="<?php echo ($cat === 'helmy') ? 'active' : ''; ?>">Cyklistické
            helmy</a>
        <a href="index.php?category=bryle" class="<?php echo ($cat === 'bryle') ? 'active' : ''; ?>">Cyklistické
            brýle</a>
        <a href="index.php?category=batohy" class="<?php echo ($cat === 'batohy') ? 'active' : ''; ?>">Cyklistické
            batohy</a>
        <ul class="<?php echo ($cat === 'batohy') ? 'active' : ''; ?>
                    <?php echo ($cat === 'subbatohy') ? 'active' : ''; ?>
                    <?php echo ($cat === 'ledvinky') ? 'active' : ''; ?>
                    <?php echo ($cat === 'camelbak') ? 'active' : ''; ?>">
            <li><a href="index.php?category=subbatohy"
                    class="<?php echo ($cat === 'subbatohy') ? 'active' : ''; ?>">Batohy</a></li>
            <li><a href="index.php?category=ledvinky"
                    class="<?php echo ($cat === 'ledvinky') ? 'active' : ''; ?>">Ledvinky</a></li>
            <li><a href="index.php?category=camelbak"
                    class="<?php echo ($cat === 'camelbak') ? 'active' : ''; ?>">Camelbak</a></li>
        </ul>
        <a href="index.php?category=obleceni" class="<?php echo ($cat === 'obleceni') ? 'active' : ''; ?>">Oblečení</a>
        <ul class="<?php echo ($cat === 'obleceni') ? 'active' : ''; ?>
                    <?php echo ($cat === 'dresy') ? 'active' : ''; ?>
                    <?php echo ($cat === 'kalhoty') ? 'active' : ''; ?>
                    <?php echo ($cat === 'rukavice') ? 'active' : ''; ?>
                    <?php echo ($cat === 'bundy') ? 'active' : ''; ?>
                    <?php echo ($cat === 'navleky') ? 'active' : ''; ?>
                    <?php echo ($cat === 'ponozky') ? 'active' : ''; ?>
                    <?php echo ($cat === 'hlava') ? 'active' : ''; ?>">
            <li><a href="index.php?category=dresy" class="<?php echo ($cat === 'dresy') ? 'active' : ''; ?>">Dresy</a>
            </li>
            <li><a href="index.php?category=kalhoty"
                    class="<?php echo ($cat === 'kalhoty') ? 'active' : ''; ?>">Kalhoty</a></li>
            <li><a href="index.php?category=rukavice"
                    class="<?php echo ($cat === 'rukavice') ? 'active' : ''; ?>">Rukavice</a></li>
            <li><a href="index.php?category=bundy" class="<?php echo ($cat === 'bundy') ? 'active' : ''; ?>">Bundy</a>
            </li>
            <li><a href="index.php?category=navleky"
                    class="<?php echo ($cat === 'navleky') ? 'active' : ''; ?>">Návleky</a></li>
            <li><a href="index.php?category=ponozky"
                    class="<?php echo ($cat === 'ponozky') ? 'active' : ''; ?>">Ponožky</a></li>
            <li><a href="index.php?category=hlava" class="<?php echo ($cat === 'hlava') ? 'active' : ''; ?>">Čelenky,
                    šátky, čepice a kukly</a></li>
        </ul>
        <a href="index.php?category=boty" class="<?php echo ($cat === 'boty') ? 'active' : ''; ?>">Cyklistické boty</a>
        <a href="index.php?category=chranice" class="<?php echo ($cat === 'chranice') ? 'active' : ''; ?>">Chrániče</a>
        <a href="index.php?category=bikepacking"
            class="<?php echo ($cat === 'bikepacking') ? 'active' : ''; ?>">Bikepacking</a>
        <ul class="<?php echo ($cat === 'bikepacking') ? 'active' : ''; ?>
                    <?php echo ($cat === 'brasny') ? 'active' : ''; ?>
                    <?php echo ($cat === 'nosice') ? 'active' : ''; ?>">
            <li><a href="index.php?category=brasny"
                    class="<?php echo ($cat === 'brasny') ? 'active' : ''; ?>">Brašny</a></li>
            <li><a href="index.php?category=nosice"
                    class="<?php echo ($cat === 'nosice') ? 'active' : ''; ?>">Nosiče</a></li>
        </ul>
        <a href="index.php?category=svetla" class="<?php echo ($cat === 'svetla') ? 'active' : ''; ?>">Osvětlení</a>
        <ul class="<?php echo ($cat === 'svetla') ? 'active' : ''; ?>
                    <?php echo ($cat === 'subsvetla') ? 'active' : ''; ?>
                    <?php echo ($cat === 'reflexe') ? 'active' : ''; ?>
                    <?php echo ($cat === 'svetlodoplnky') ? 'active' : ''; ?>">
            <li><a href="index.php?category=subsvetla"
                    class="<?php echo ($cat === 'subsvetla') ? 'active' : ''; ?>">Světla</a></li>
            <li><a href="index.php?category=reflexe"
                    class="<?php echo ($cat === 'reflexe') ? 'active' : ''; ?>">Reflexní prvky</a></li>
            <li><a href="index.php?category=svetlodoplnky"
                    class="<?php echo ($cat === 'svetlodoplnky') ? 'active' : ''; ?>">Doplňky k osvětlení</a></li>
        </ul>
        <a href="index.php?category=extra" class="<?php echo ($cat === 'extra') ? 'active' : ''; ?>">Příslušenství</a>
        <ul class="<?php echo ($cat === 'extra') ? 'active' : ''; ?>
                    <?php echo ($cat === 'kolecka') ? 'active' : ''; ?>
                    <?php echo ($cat === 'blatniky') ? 'active' : ''; ?>
                    <?php echo ($cat === 'pc') ? 'active' : ''; ?>
                    <?php echo ($cat === 'deti') ? 'active' : ''; ?>
                    <?php echo ($cat === 'uklid') ? 'active' : ''; ?>
                    <?php echo ($cat === 'storage') ? 'active' : ''; ?>
                    <?php echo ($cat === 'drzakylahve') ? 'active' : ''; ?>
                    <?php echo ($cat === 'lahve') ? 'active' : ''; ?>
                    <?php echo ($cat === 'lepeniduse') ? 'active' : ''; ?>
                    <?php echo ($cat === 'mazani') ? 'active' : ''; ?>
                    <?php echo ($cat === 'naradi') ? 'active' : ''; ?>
                    <?php echo ($cat === 'ochrana') ? 'active' : ''; ?>
                    <?php echo ($cat === 'mobily') ? 'active' : ''; ?>
                    <?php echo ($cat === 'pumpy') ? 'active' : ''; ?>
                    <?php echo ($cat === 'rohy') ? 'active' : ''; ?>
                    <?php echo ($cat === 'zamky') ? 'active' : ''; ?>
                    <?php echo ($cat === 'zrcatka') ? 'active' : ''; ?>
                    <?php echo ($cat === 'zvonky') ? 'active' : ''; ?>">
            <li><a href="index.php?category=kolecka"
                    class="<?php echo ($cat === 'kolecka') ? 'active' : ''; ?>">Balanční kolečka</a></li>
            <li><a href="index.php?category=blatniky"
                    class="<?php echo ($cat === 'blatniky') ? 'active' : ''; ?>">Blatníky</a></li>
            <li><a href="index.php?category=pc" class="<?php echo ($cat === 'pc') ? 'active' : ''; ?>">Cyklopočítače</a>
            </li>
            <li><a href="index.php?category=deti" class="<?php echo ($cat === 'deti') ? 'active' : ''; ?>">Sedačky a
                    táhla</a></li>
            <li><a href="index.php?category=uklid" class="<?php echo ($cat === 'uklid') ? 'active' : ''; ?>">Čistící
                    prostředky</a></li>
            <li><a href="index.php?category=storage" class="<?php echo ($cat === 'storage') ? 'active' : ''; ?>">Držáky
                    a stojany</a></li>
            <li><a href="index.php?category=drzakylahve"
                    class="<?php echo ($cat === 'drzakylahve') ? 'active' : ''; ?>">Košíky na lahve</a></li>
            <li><a href="index.php?category=lahve" class="<?php echo ($cat === 'lahve') ? 'active' : ''; ?>">Lahve</a>
            </li>
            <li><a href="index.php?category=lepeniduse"
                    class="<?php echo ($cat === 'lepeniduse') ? 'active' : ''; ?>">Lepení na duše</a></li>
            <li><a href="index.php?category=mazani" class="<?php echo ($cat === 'mazani') ? 'active' : ''; ?>">Mazací
                    prostředky</a></li>
            <li><a href="index.php?category=naradi"
                    class="<?php echo ($cat === 'naradi') ? 'active' : ''; ?>">Nářadí</a></li>
            <li><a href="index.php?category=ochrana" class="<?php echo ($cat === 'ochrana') ? 'active' : ''; ?>">Ochrana
                    rámu</a></li>
            <li><a href="index.php?category=mobily" class="<?php echo ($cat === 'mobily') ? 'active' : ''; ?>">Pouzdra
                    na mobily</a></li>
            <li><a href="index.php?category=pumpy" class="<?php echo ($cat === 'pumpy') ? 'active' : ''; ?>">Pumpy</a>
            </li>
            <li><a href="index.php?category=rohy" class="<?php echo ($cat === 'rohy') ? 'active' : ''; ?>">Rohy</a></li>
            <li><a href="index.php?category=zamky" class="<?php echo ($cat === 'zamky') ? 'active' : ''; ?>">Zámky</a>
            </li>
            <li><a href="index.php?category=zrcatka"
                    class="<?php echo ($cat === 'zrcatka') ? 'active' : ''; ?>">Zrcátka</a></li>
            <li><a href="index.php?category=zvonky" class="<?php echo ($cat === 'zvonky') ? 'active' : ''; ?>">Zvonky a
                    doplňky</a></li>
        </ul>
        <a href="index.php?category=komponenty"
            class="<?php echo ($cat === 'komponenty') ? 'active' : ''; ?>">Komponenty</a>
        <ul class="<?php echo ($cat === 'komponenty') ? 'active' : ''; ?>
                    <?php echo ($cat === 'bezduse') ? 'active' : ''; ?>
                    <?php echo ($cat === 'desticky') ? 'active' : ''; ?>
                    <?php echo ($cat === 'brzdypris') ? 'active' : ''; ?>
                    <?php echo ($cat === 'kotouce') ? 'active' : ''; ?>
                    <?php echo ($cat === 'kotoucovebrzdy') ? 'active' : ''; ?>
                    <?php echo ($cat === 'botky') ? 'active' : ''; ?>
                    <?php echo ($cat === 'duse') ? 'active' : ''; ?>
                    <?php echo ($cat === 'gripy') ? 'active' : ''; ?>
                    <?php echo ($cat === 'pedaly') ? 'active' : ''; ?>
                    <?php echo ($cat === 'plaste') ? 'active' : ''; ?>
                    <?php echo ($cat === 'predstavce') ? 'active' : ''; ?>
                    <?php echo ($cat === 'retezy') ? 'active' : ''; ?>
                    <?php echo ($cat === 'sedla') ? 'active' : ''; ?>
                    <?php echo ($cat === 'sedlovky') ? 'active' : ''; ?>
                    <?php echo ($cat === 'riditka') ? 'active' : ''; ?>
                    <?php echo ($cat === 'kazety') ? 'active' : ''; ?>
                    <?php echo ($cat === 'prehazovacky') ? 'active' : ''; ?>
                    <?php echo ($cat === 'stojanky') ? 'active' : ''; ?>
                    <?php echo ($cat === 'prevodniky') ? 'active' : ''; ?>">
            <li><a href="index.php?category=bezduse"
                    class="<?php echo ($cat === 'bezduse') ? 'active' : ''; ?>">Bezdušový systém</a></li>
            <li><a href="index.php?category=desticky"
                    class="<?php echo ($cat === 'desticky') ? 'active' : ''; ?>">Brzdové destičky</a></li>
            <li><a href="index.php?category=brzdypris"
                    class="<?php echo ($cat === 'brzdypris') ? 'active' : ''; ?>">Brzdové příslušenství</a></li>
            <li><a href="index.php?category=kotouce" class="<?php echo ($cat === 'kotouce') ? 'active' : ''; ?>">Brzdové
                    kotouče</a></li>
            <li><a href="index.php?category=kotoucovebrzdy"
                    class="<?php echo ($cat === 'kotoucovebrzdy') ? 'active' : ''; ?>">Kotoučové brzdy</a></li>
            <li><a href="index.php?category=botky" class="<?php echo ($cat === 'botky') ? 'active' : ''; ?>">Brzdové
                    botky</a></li>
            <li><a href="index.php?category=duse" class="<?php echo ($cat === 'duse') ? 'active' : ''; ?>">Duše</a></li>
            <li><a href="index.php?category=gripy" class="<?php echo ($cat === 'gripy') ? 'active' : ''; ?>">Gripy a
                    omotávky</a></li>
            <li><a href="index.php?category=pedaly"
                    class="<?php echo ($cat === 'pedaly') ? 'active' : ''; ?>">Pedály</a></li>
            <li><a href="index.php?category=plaste"
                    class="<?php echo ($cat === 'plaste') ? 'active' : ''; ?>">Pláště</a></li>
            <li><a href="index.php?category=predstavce"
                    class="<?php echo ($cat === 'predstavce') ? 'active' : ''; ?>">Představce</a></li>
            <li><a href="index.php?category=retezy"
                    class="<?php echo ($cat === 'retezy') ? 'active' : ''; ?>">Řetězy</a></li>
            <li><a href="index.php?category=sedla" class="<?php echo ($cat === 'sedla') ? 'active' : ''; ?>">Sedla</a>
            </li>
            <li><a href="index.php?category=sedlovky"
                    class="<?php echo ($cat === 'sedlovky') ? 'active' : ''; ?>">Sedlovky a objímky</a></li>
            <li><a href="index.php?category=riditka"
                    class="<?php echo ($cat === 'riditka') ? 'active' : ''; ?>">Řídítka</a></li>
            <li><a href="index.php?category=kazety"
                    class="<?php echo ($cat === 'kazety') ? 'active' : ''; ?>">Kazety</a></li>
            <li><a href="index.php?category=prehazovacky"
                    class="<?php echo ($cat === 'prehazovacky') ? 'active' : ''; ?>">Přehazovačky</a></li>
            <li><a href="index.php?category=stojanky"
                    class="<?php echo ($cat === 'stojanky') ? 'active' : ''; ?>">Stojánky</a></li>
            <li><a href="index.php?category=prevodniky"
                    class="<?php echo ($cat === 'prevodniky') ? 'active' : ''; ?>">Převodníky</a></li>
        </ul>
        <a href="index.php?category=jidlo" class="<?php echo ($cat === 'jidlo') ? 'active' : ''; ?>">Sportovní
            výživa</a>
        <ul class="<?php echo ($cat === 'jidlo') ? 'active' : ''; ?>
                    <?php echo ($cat === 'energie') ? 'active' : ''; ?>
                    <?php echo ($cat === 'krece') ? 'active' : ''; ?>
                    <?php echo ($cat === 'piticko') ? 'active' : ''; ?>
                    <?php echo ($cat === 'regenerace') ? 'active' : ''; ?>">
            <li><a href="index.php?category=energie"
                    class="<?php echo ($cat === 'energie') ? 'active' : ''; ?>">Doplnění energie</a></li>
            <li><a href="index.php?category=krece" class="<?php echo ($cat === 'krece') ? 'active' : ''; ?>">Proti
                    křečím</a></li>
            <li><a href="index.php?category=piticko" class="<?php echo ($cat === 'piticko') ? 'active' : ''; ?>">Pitný
                    režim</a></li>
            <li><a href="index.php?category=regenerace"
                    class="<?php echo ($cat === 'regenerace') ? 'active' : ''; ?>">Regenerace</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="text">
            <h2>Reklamační řád</h2>

            <p>Tento reklamační řád byl vypracován v souladu se zákonem č. 89/2012 Sb., Občanský zákoník (dále jen OZ) a
                zákonem č. 634/1992 Sb., o ochraně spotřebitele, vše v účinném znění a vztahuje se na zboží zakoupené na
                našem e-shopu kupujícím, který je spotřebitelem, kterým je každý člověk, který mimo rámec své
                podnikatelské činnosti nebo mimo rámec samostatného výkonu svého povolání uzavírá smlouvu s podnikatelem
                nebo s ním jinak jedná. Prodávajícím je obchodní společnosti Cykloobchod se sídlem Choceradská 3362/2,
                Praha - Záběhlice 141 00, zapsané v obchodním rejstříku vedeném Městským soudem v Praze, oddíl C, vložka
                251436,
                IČ: 74589632, DIČ: CZ74589632 pro prodej zboží prostřednictvím on-line obchodu na internetových
                adresách: cykloobchod.cz (dále jen Prodávající). Kupující převzetím zboží od
                Prodávajícího, nebo převzetím zboží na poště či od přepravce souhlasí s tímto reklamačním řádem, který v
                souladu s čl. 7.6. Obchodních podmínek upravuje práva z vadného plnění a postup jejich uplatnění, tedy
                reklamaci zboží.</p>

            <h3>I. ZÁKLADNÍ PODMÍNKY REKLAMACE</h3>

            <ol>
                <li>Vyskytne-li se u zakoupeného zboží ve lhůtě pro uplatnění práv z vadného plnění vada (viz čl. 7.2.
                    Obchodních podmínek), má kupující právo tuto vadu reklamovat.</li>
                <li>Za vadu nelze považovat změnu (vlastnosti) zboží, která vznikla v průběhu lhůty k uplatnění práv z
                    vadného plnění v důsledku jeho opotřebení, nesprávného používání, nedostatečné nebo nevhodné údržby,
                    v důsledku přirozených změn materiálů, z nichž je zboží vyrobeno, v důsledku jakéhokoliv poškození
                    kupujícím či třetí osobou nebo jiného nesprávného zásahu.</li>
                <li>Práva z vadného plnění zanikají uplynutím lhůty k uplatnění práv z vadného plnění.</li>
                <li>Je-li na zboží, na jeho obalu, v návodu připojenému ke zboží nebo v reklamě v souladu s jinými
                    právními předpisy uvedena doba, po kterou lze zboží použít, použijí se ustanovení OZ o záruce za
                    jakost.</li>
            </ol>

            <h3>II. LHŮTA K UPLATNĚNÍ PRÁV Z VADNÉHO PLNĚNÍ</h3>

            <ol>
                <li>Práva z vadného plnění lze uplatnit ve lhůtě 24 měsíců od převzetí zboží kupujícím, pokud není v
                    záručním listu uvedena lhůta delší; v případě použitého zboží platí lhůta 12 měsíců. Po dobu od
                    uplatnění práva z vadného plnění až do okamžiku, kdy kupující po skončení reklamačního řízení byl
                    povinen věc převzít, lhůta k uplatnění práv z vadného lnění neběží. Lhůtu k uplatnění práv z vadného
                    plnění nelze zaměňovat s životností zboží, tj. dobou, po kterou při správném užívání a ošetřování
                    může zboží vzhledem ke svým vlastnostem, danému účelu a rozdílnosti v intenzitě jeho užívání
                    vydržet.</li>
                <li>Lhůta k uplatnění práv z vadného plnění běží od okamžiku, kdy je zboží kupujícímu odevzdáno, příp.
                    doručeno. Má-li koupené zboží uvést do provozu někdo jiný než Prodávající, běží lhůta k uplatnění
                    práv z vadného plnění až ode dne uvedení zboží do provozu, pokud kupující objednal uvedení do
                    provozu nejpozději do tří týdnů od převzetí zboží a řádně a včas poskytl k provedení služby
                    potřebnou součinnost.</li>
            </ol>

            <h3>III. PRÁVA Z VADNÉHO PLNĚNÍ</h3>

            <ol>
                <li>Záruka za jakost ani práva z vadného plnění se nevztahují ve smyslu ust. § 2167 OZ na běžné
                    opotřebení zboží nebo jeho částí způsobené jeho obvyklým užíváním, na vady vzniklé nesprávným
                    použitím, nepřiměřeným zacházením, mechanickým poškozením zboží, nesprávnou obsluhou zboží nebo
                    nedovolenými pokusy o opravu zboží. U věcí prodávaných za nižší cenu Prodávající neodpovídá za vadu,
                    pro kterou byla nižší cena sjednána. Jde-li o zboží použité, neodpovídá Prodávající za vady
                    odpovídající míře používání nebo opotřebení, které mělo zboží při převzetí ze strany kupujícího.
                </li>
                <li>Prodávající neodpovídá za vady, které po přechodu nebezpečí škody na zboží na kupujícího způsobila
                    vnější událost.</li>
                <li>V případě vadného plnění, které je podstatným porušením smlouvy (bez ohledu na odstranitelnost vady)
                    dle ust. § 2106 OZ, má kupující právo na odstranění vady dodáním nového zboží bez vady nebo dodáním
                    chybějící věci; na odstranění vady opravou věci; na přiměřenou slevu z kupní ceny nebo na odstoupení
                    od smlouvy.</li>
            </ol>

            <h3>IV. UPLATNĚNÍ REKLAMACE</h3>

            <ol>
                <li>Místem pro uplatnění reklamace je sídlo Prodávajícího, u kterého bylo zboží zakoupeno. Kupující může
                    uplatnit reklamaci osobně, nebo zasláním zboží k reklamaci přepravní službou na adresu: Choceradská
                    3362/2 Praha - Záběhlice 141 00.
                    Reklamaci je povinen kupující uplatnit bez zbytečného odkladu
                    po zjištění vady, aby mohla být reklamace správně posouzena a vyřízena.</li>
                <li>Dále je kupující povinen specifikovat, jakým způsobem se vada projevuje, a uvést volbu práva z
                    vadného plnění, které uplatňuje. Jakmile kupující uplatní některé z práv z vadného plnění, např.
                    právo na odstranění vady či slevu, je tímto projevem vázán a nemůže volbu uplatněného práva měnit,
                    pokud se nedohodne s Prodávajícím jinak.</li>
                <li>Kupující je povinen prokázat, že jeho nárok na vyřízení reklamace je oprávněný, zejména že věc
                    zakoupil u Prodávajícího a kdy ji zakoupil. V případě zaslání zboží přepravní službou je vhodné
                    zejména zaslání kopie nákupního dokladu, popřípadě platný záruční list.</li>
            </ol>

            <h3>V. VYŘÍZENÍ REKLAMACE</h3>

            <ol>
                <li>Reklamace, včetně odstranění vady, musí být vyřízena bez zbytečného odkladu, nejpozději do 30 dnů
                    ode dne uplatnění reklamace, pokud se Prodávající s kupujícím nedohodnou na delší lhůtě. Pokud
                    nedojde k vyřízení reklamace v této lhůtě, má kupující stejná práva, jako by se jednalo o podstatné
                    porušení smlouvy.</li>
                <li>O tom, kdy bylo právo z vadného plnění uplatněno, co je obsahem reklamace a jaký způsob vyřízení
                    reklamace kupující požaduje, jakož i o provedení opravy a době jejího trvání, případně o způsobu
                    vyřízení reklamace (včetně případného písemného odůvodnění zamítnutí reklamace), vydá Prodávající
                    kupujícímu písemné potvrzení.</li>
            </ol>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>