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
            <h3>VŠEOBECNÉ OBCHODNÍ PODMÍNKY</h3>
            <p>Tyto všeobecné obchodní podmínky (“<b>Podmínky</b>”) společnosti <b>Cykloobchod</b>, se sídlem Praha,
                <b>IČ 74589632</b>, <b>DIČ CZ74589632</b>, zapsané v obchodním rejstříku vedeném <b>Městským soudem v
                    Praze, oddíl C, vložka 251436</b>, e-mail <b>info@cykloobchod.cz</b>, telefonní číslo <b>752 390
                    254</b>, adresa provozovny <b>Praha</b> („<b>My</b>” nebo „<b>Prodávající</b>”) upravují v souladu s
                ustanovením § 1751 odst. 1 zákona č. 89/2012 Sb., občanský zákoník, ve znění pozdějších předpisů
                („<b>Občanský zákoník</b>“) vzájemná práva a povinnosti Vás, jakožto kupujících, a Nás, jakožto
                prodávajících, vzniklá v souvislosti nebo na základě kupní smlouvy („<b>Smlouva</b>“) uzavřené
                prostřednictvím E-shopu na webových stránkách <b>www.cykloobchod.cz</b>. </p>
            <p>Všechny informace o zpracování Vašich osobních údajů jsou obsaženy v Zásadách zpracování osobních údajů,
                která naleznete <a href="gdpr.php">zde</a>.</p>
            <p>Ustanovení těchto Podmínek jsou nedílnou součástí Smlouvy. Smlouva a Podmínky jsou vyhotoveny v českém
                jazyce. Znění Podmínek můžeme jednostranně měnit či doplňovat. Tímto ustanovením nejsou dotčena práva a
                povinnosti vzniklá po dobu účinnosti předchozího znění Podmínek.</p>
            <p>Jak jistě víte, tak komunikujeme primárně na dálku. Proto i pro naši Smlouvu platí, že jsou použity
                prostředky komunikace na dálku, které umožňují, abychom se spolu dohodli bez současné fyzické
                přítomnosti Nás a Vás, a Smlouva je tak uzavřena distančním způsobem v prostředí E-shopu, a to
                prostřednictvím rozhraní webové stránky („<b>webové rozhraní E-shopu</b>“).</p>
            <p>Pokud některá část Podmínek odporuje tomu, co jsme si společně schválili v rámci procesu Vašeho nákupu na
                Našem E-shopu, bude mít tato konkrétní dohoda před Podmínkami přednost.</p>
            <ol>
                <li>
                    <h3>DEFINICE</h3>
                </li>
                <ol>
                    <li><b>Cena</b> je finanční částka, kterou budete hradit za Zboží;</li>
                    <li><b>Cena za dopravu</b> je finanční částka, kterou budete hradit za doručení Zboží, a to včetně
                        ceny za jeho zabalení;</li>
                    <li><b>Celková cena</b> je součet Ceny a Ceny za dopravu;</li>
                    <li><b>DPH</b> je daň z přidané hodnoty dle platných právních předpisů;</li>
                    <li><b>Faktura</b> je daňový doklad vystavený v souladu se zákonem o dani z přidané hodnoty na
                        Celkovou cenu;</li>
                    <li><b>Objednávka</b> je Váš závazný návrh na uzavření Smlouvy o koupi Zboží s Námi;</li>
                    <li><b>Uživatelský účet</b> je účet zřízený na základě Vámi sdělených údajů, jež umožňuje uchování
                        zadaných údajů a uchovávání historie objednaného Zboží a uzavřených Smluv;</li>
                    <li><b>Vy</b> jste osoba nakupující na Našem E-shopu, právními předpisy označovaná jako kupující;
                    </li>
                    <li><b>Zboží</b> je vše, co můžete nakoupit na E-shopu.</li>
                </ol>
                <li>
                    <h3>OBECNÁ USTANOVENÍ A POUČENÍ </h3>
                </li>
                <ol>
                    <li>Koupě Zboží je možná jen přes webové rozhraní E-shopu.</li>
                    <li>Při nákupu Zboží je Vaše povinnost poskytnout Nám všechny informace správně a pravdivě.
                        Informace, které jste Nám poskytli v Objednávce budeme tedy považovat za správné a pravdivé.
                    </li>
                    <li>Na našem E-shopu také poskytujeme přístup k hodnocení Zboží provedenému jinými spotřebiteli.
                        Autenticitu takových recenzí zajišťujeme a kontrolujeme tím, že propojujeme hodnocení s
                        konkrétními objednávkami, tudíž v interním systému u každého hodnocení vidíme i propojené ID
                        objednávky, a tak jsme schopni ověřit a prokázat, že recenze pochází od reálného spotřebitele.
                    </li>
                </ol>
                <li>
                    <h3>UZAVŘENÍ SMLOUVY</h3>
                </li>
                <ol>
                    <li>Smlouvu s Námi je možné uzavřít pouze v českém jazyce.</li>
                    <li>Smlouva je uzavírána na dálku prostřednictvím E-shopu, přičemž náklady na použití komunikačních
                        prostředků na dálku hradíte Vy. Tyto náklady se však nijak neliší od základní sazby, kterou
                        hradíte za používání těchto prostředků (tedy zejména za přístup k internetu), žádné další
                        náklady účtované Námi tedy nad rámec Celkové ceny nemusíte očekávat. Odesláním Objednávky
                        souhlasíte s tím, že prostředky komunikace na dálku využíváme. </li>
                    <li>K tomu, abychom mohli Smlouvu uzavřít, je třeba, abyste na E-shopu vytvořili Objednávku. V tomto
                        návrhu musí být uvedeny následující údaje:</li>
                    <ul>
                        <li>Informace o nakupovaném Zboží (na E-shopu označujete Zboží, o jehož nákup máte zájem,
                            tlačítkem „Přidat do košíku“);</li>
                        <li>Informace o Ceně, Ceně za dopravu, způsobu platby Celkové ceny a požadovaném způsobu
                            doručení Zboží; tyto informace budou zadány v rámci tvorby Objednávky v rámci uživatelského
                            prostředí E-shopu, přičemž informace o Ceně, Ceně za dopravu a Celkové ceně budou uvedeny
                            automaticky na základě Vámi zvolného Zboží, způsobu jeho doručení a platby;</li>
                        <li>Své identifikační a kontaktní údaje sloužící k tomu, abychom mohli doručit Zboží, zejména
                            tedy jméno, příjmení, doručovací adresu, telefonní číslo a e-mailovou adresu.</li>
                    </ul>
                    <li>V průběhu tvorby Objednávky může až do doby jejího dokončení údaje měnit a kontrolovat. Po
                        provedení kontroly prostřednictvím stisku tlačítka „ Objednat s povinností platby“ Objednávku
                        dokončíte. Před stiskem tlačítka musíte ale ještě potvrdit Vaše seznámení se a souhlas s těmito
                        Podmínkami, v opačném případě nebude možné Objednávku dokončit. K potvrzení a souhlasu slouží
                        zatrhávací políčko. Po stisku tlačítka „Objednat s povinností platby“ budou všechny vyplněné
                        informace odeslány přímo Nám. </li>
                    <li>Vaši Objednávku Vám v co nejkratší době poté, kdy Nám bude doručena, potvrdíme zprávou odeslanou
                        na Vaši e-mailovou adresu zadanou v Objednávce. Součástí potvrzení bude shrnutí Objednávky a
                        tyto Podmínky formou přílohy e-mailové zprávy. Podmínky ve znění účinném ke dni Objednávky, tj.
                        ve znění přiloženém jako příloha potvrzující e-mailové zprávy, tvoří nedílnou součást Smlouvy.
                        Potvrzením Objednávky dochází k uzavření Smlouvy mezi Námi a Vámi.</li>
                    <li>Mohou nastat i případy, kdy Vám nebudeme moci Objednávku potvrdit. Jedná se zejména o situace,
                        kdy Zboží není dostupné nebo případy, kdy objednáte větší počet kusů Zboží, než kolik je z naší
                        strany umožněno. Informaci o maximálním počtu Zboží Vám však vždy v rámci E-shopu předem
                        poskytneme a neměla by pro Vás být tedy překvapivá. V případě, že nastane jakýkoli důvod, pro
                        který nemůžeme Objednávku potvrdit, budeme Vás kontaktovat a zašleme Vám nabídku na uzavření
                        Smlouvy v pozměněné podobě oproti Objednávce. Smlouva je v takovém případě uzavřena ve chvíli,
                        kdy Naši nabídku potvrdíte. </li>
                    <li>V případě, že v rámci E-shopu nebo v Objednávce bude uvedena zjevně chybná Cena, nejsme povinni
                        Vám Zboží za tuto Cenu dodat ani v případě, kdy jste obdrželi potvrzení Objednávky, a tedy došlo
                        k uzavření Smlouvy. V takové situaci Vás budeme bezodkladně kontaktovat a zašleme Vám nabídku na
                        uzavření nové Smlouvy v pozměněné podobě oproti Objednávce. Nová Smlouva je v takovém případě
                        uzavřena ve chvíli, kdy Naši nabídku potvrdíte. Za zjevnou chybu v Ceně se považuje například
                        situace, kdy Cena neodpovídá obvyklé ceně u jiných prodejců nebo chybí či přebývá cifra.</li>
                    <li>V případě, kdy dojde k uzavření Smlouvy, Vám vzniká závazek k zaplacení Celkové ceny.</li>
                    <li>V případě, že máte zřízen Uživatelský účet, můžete učinit Objednávku jeho prostřednictvím. I v
                        takovém případě máte ale povinnost zkontrolovat správnost, pravdivost a úplnost předvyplněných
                        údajů. Způsob tvorby Objednávky je však totožný, jako v případě kupujícího bez Uživatelského
                        účtu, výhodou však je, že není třeba opakovaně vyplňovat Vaše identifikační údaje.</li>
                    <li>V některých případech umožňujeme na nákup Zboží využít slevu. Pro poskytnutí slevy je třeba,
                        abyste v rámci návrhu Objednávky vyplnili údaje o této slevě do předem určeného pole. Pokud tak
                        učiníte, bude Vám Zboží poskytnuto se slevou.</li>
                </ol>
                <li>
                    <h3>UŽIVATELSKÝ ÚČET</h3>
                </li>
                <ol>
                    <li>Na základě Vaší registrace v rámci E-shopu můžete přistupovat do svého Uživatelského účtu. </li>
                    <li>Při registraci Uživatelského účtu je Vaše povinnost uvést správně a pravdivě všechny zadávané
                        údaje a v případě změny je aktualizovat. </li>
                    <li>Přístup k Uživatelskému účtu je zabezpečen uživatelským jménem a heslem. Ohledně těchto
                        přístupových je Vaší povinností zachovávat mlčenlivost a nikomu tyto údaje neposkytovat. V
                        případě, že dojde k jejich zneužití, neneseme za to žádnou odpovědnost. </li>
                    <li>Uživatelský účet je osobní, a nejste tedy oprávněni umožnit jeho využívání třetím osobám.</li>
                    <li>Váš Uživatelský účet můžeme zrušit, a to zejména v případě, když jej více, než [BUDE DOPLNĚNO]
                        nevyužíváte, či v případě, kdy porušíte své povinnosti dle Smlouvy.</li>
                    <li>Uživatelský účet nemusí být dostupný nepřetržitě, a to zejména s ohledem na nutnou údržbu
                        hardwarového a softwarového vybavení.</li>
                </ol>
                <li>
                    <h3>CENOVÉ A PLATEBNÍ PODMÍNKY, VÝHRADA VLASTNICKÉHO PRÁVA</h3>
                </li>
                <ol>
                    <li>Cena je vždy uvedena v rámci E-shopu, v návrhu Objednávky a samozřejmě ve Smlouvě. V případě
                        rozporu mezi Cenou uvedenou u Zboží v rámci E-shopu a Cenou uvedenou v návrhu Objednávky se
                        uplatní Cena uvedená v návrhu Objednávky, která bude vždy totožná s cenou ve Smlouvě. V rámci
                        návrhu Objednávky je též uvedena Cena za dopravu, případně podmínky, kdy je doprava zdarma.
                    </li>
                    <li>Celková cena je uvedena včetně DPH včetně veškerých poplatků stanovených zákonem. </li>
                    <li>Platbu Celkové ceny po Vás budeme požadovat po uzavření Smlouvy a před předáním Zboží. Úhradu
                        Celkové ceny můžete provést následujícími způsoby:</li>
                    <ul>
                        <li>Bankovním převodem. Informace pro provedení platby Vám zašleme v rámci potvrzení Objednávky.
                            V případě platby bankovním převodem je Celková cena splatná do [BUDE DOPLNĚNO]</li>
                        <li>Kartou online. V takovém případě probíhá platba přes platební bránu [BUDE DOPLNĚNO], přičemž
                            platba se řídí podmínkami této platební brány, které jsou dostupné na adrese: [BUDE
                            DOPLNĚNO]. V případě platby kartou online je Celková cena splatná do [BUDE DOPLNĚNO]</li>
                        <li>Dobírkou. V takovém případě dojde k platbě při doručení Zboží oproti předání Zboží. V
                            případě platby dobírkou je Celková cena splatná při převzetí Zboží.</li>
                        <li>Hotově při osobním odběru. Hotově lze hradit Zboží v případě převzetí v Naší provozovně. V
                            případě platby hotově při osobním odběru je Celková cena splatná při převzetí Zboží.</li>
                    </ul>
                    <li>Faktura bude vystavena v elektronické podobě po uhrazení Celkové ceny a bude zaslána na Vaši
                        e-mailovou adresu. Faktura bude též fyzicky přiložena ke Zboží a dostupná v Uživatelském úču.
                    </li>
                    <li>Vlastnické právo ke Zboží na Vás přechází až poté, co zaplatíte Celkovou cenu a Zboží
                        převezmete. V případě platby bankovním převodem je Celková cena zaplacena připsáním na Náš účet,
                        v ostatních případech je zaplacena v okamžik provedení platby.</li>
                </ol>
                <li>
                    <h3>DORUČENÍ ZBOŽÍ, PŘECHOD NEBEZPEČÍ ŠKODY NA VĚCI</h3>
                </li>
                <ol>
                    <li>Zboží Vám bude doručeno nejpozději do [BUDE DOPLNĚNO] dní způsobem dle Vaší volby, přičemž
                        můžete vybírat z následujících možností:</li>
                    <ul>
                        <li>Osobní odběr na Naší provozovně uvedené v seznamu provozoven;</li>
                        <li>Osobní odběr na výdejních místech společnosti Zásilkovna, Uloženka;</li>
                        <li>Doručení prostřednictvím dopravních společností Česká pošta, PPL CZ, DHL, Zásilkovna;</li>
                    </ul>
                    <li>Zboží je možné doručit pouze v rámci České republiky.</li>
                    <li>Doba doručení Zboží vždy závisí na jeho dostupnosti a na zvoleném způsobu doručení a platby.
                        Předpokládaná doba doručení Zboží Vám bude sdělena v potvrzení Objednávky. Doba uvedená v těchto
                        Podmínkách je pouze orientační a může se lišit od skutečné doby dodání. V případě osobního
                        odběru na provozovně Vás vždy o možnosti vyzvednutí Zboží budeme informovat prostřednictvím
                        e-mailu. </li>
                    <li>Po převzetí Zboží od dopravce je Vaše povinnost zkontrolovat neporušenost obalu Zboží a v
                        případě jakýchkoli závad tuto skutečnost neprodleně oznámit dopravci a Nám. V případě, že došlo
                        k závadě na obalu, která svědčí o neoprávněné manipulaci a vstupu do zásilky, není Vaší
                        povinností Zboží od dopravce převzít. </li>
                    <li>V případě, kdy porušíte svoji povinnost převzít Zboží, s výjimkou případů dle čl. 6.4 Podmínek,
                        nemá to za následek porušení Naší povinnosti Vám Zboží doručit. Zároveň to, že Zboží
                        nepřevezmete, není odstoupení od Smlouvy mezi Námi a Vámi. Nám ale v takovém případě vzniká
                        právo od Smlouvy odstoupit z důvodu Vašeho podstatného porušení Smlouvy, případně Zboží
                        uskladnit, za což nám od Vás náleží úplata ve výši [BUDE DOPLNĚNO]. Pokud se rozhodneme
                        odstoupit od Smlouvy, je odstoupení účinné v den, kdy Vám toto odstoupení doručíme. Odstoupení
                        od Smlouvy nemá vliv na nárok na uhrazení Ceny za dopravu, případně na nárok na náhradu škody,
                        pokud vznikla.</li>
                    <li>Pokud je z důvodů vzniklých na Vaší straně Zboží doručováno opakovaně nebo jiným způsobem, než
                        bylo ve Smlouvě dohodnuto, je Vaší povinností nahradit Nám náklady s tímto opakovaným doručením
                        spojené. Platební údaje pro zaplacení těchto nákladů Vám zašleme na Vaši e-mailovou adresu
                        uvedenou ve Smlouvě a jsou splatné 14 dnů od doručení e-mailu.</li>
                    <li>Nebezpeční škody na Zboží na Vás přechází v okamžiku, kdy ho převezmete. V případě, kdy Zboží
                        nepřevezmete, s výjimkou případů dle čl. 6.4 Podmínek, na Vás nebezpečí škody na Zboží přechází
                        v okamžiku, kdy jste měli možnost ho převzít, ale z důvodů na Vaší straně k převzetí nedošlo.
                        Přechod nebezpečí škody na Zboží pro Vás znamená, že od tohoto okamžiku nesete veškeré důsledky
                        spojené se ztrátou, zničením, poškozením či jakýmkoli znehodnocením Zboží.</li>
                    <li>V případě, že Zboží nebylo v E-shopu uvedeno jako skladem a byla uvedena orientační doba
                        dostupnosti Vás budeme vždy informovat v případě:</li>
                    <ul>
                        <li>mimořádného výpadku výroby Zboží, přičemž Vám vždy sdělíme novou očekávanou dobu dostupnosti
                            nebo informace o tom, že nebude možné Zboží dodat;</li>
                        <li>prodlení s dodáním Zboží od Našeho dodavatele, přičemž Vám vždy sdělíme novou očekávanou
                            dobu dodání.</li>
                    </ul>
                </ol>
                <li>
                    <h3>PRÁVA Z VADNÉHO PLNĚNÍ</h3>
                </li>
                <ol>
                    <li>Zaručujeme, že v době přechodu nebezpečí škody na Zboží podle čl. 6.7 Podmínek je Zboží bez vad,
                        zejména pak, že Zboží:</li>
                    <ul>
                        <li>odpovídá ujednanému popisu, druhu a množství, jakož i jakosti, funkčnosti, kompatibilitě,
                            interoperabilitě a jiným ujednaným vlastnostem;</li>
                        <li>je vhodné k účelu, pro který ho požadujete a s nímž souhlasíme;</li>
                        <li>je dodáno s ujednaným příslušenstvím a pokyny k použití, včetně návodu k montáži nebo
                            instalaci;</li>
                        <li>je vhodné k účelu, k němuž se Zboží tohoto druhu obvykle používá;</li>
                        <li>množstvím, jakostí a dalšími vlastnostmi, včetně životnosti, funkčnosti, kompatibility a
                            bezpečnosti, odpovídá obvyklým vlastnostem Zboží téhož druhu, které můžete rozumně očekávat,
                            i s ohledem na veřejná prohlášení učiněná námi nebo jinou osobou v témže smluvním řetězci,
                            zejména reklamou nebo označením; </li>
                        <li>je dodáno s příslušenstvím, včetně obalu, návodu k montáži a jiných pokynů k použití, které
                            můžete rozumně očekávat; a </li>
                        <li>odpovídá jakostí nebo provedením vzorku nebo předloze, které Vám byly poskytnuty před
                            uzavřením smlouvy.</li>
                    </ul>
                    <li>Práva a povinnosti ohledně práv z vadného plnění se řídí příslušnými obecně závaznými právními
                        předpisy (zejména ustanoveními § 2099 až 2117 a § 2161 až 2174b Občanského zákoníku a zákonem č.
                        634/1992 Sb., o ochraně spotřebitele, ve znění pozdějších předpisů).</li>
                    <li>V případě, že bude mít Zboží vadu, tedy zejména pokud nebude splněna některá z podmínek dle čl.
                        7.1, můžete Nám takovou vadu oznámit a uplatnit práva z vadného plnění (tedy Zboží reklamovat)
                        zasláním e-mailu či dopisu na Naše adresy uvedené u Našich identifikačních údajů, případně
                        osobně na adrese [BUDE DOPLNĚNO]. Pro reklamaci můžete využít také vzorový formulář poskytovaný
                        z Naší strany, který tvoří přílohu č. 1 Podmínek. V uplatnění práva z vadného plnění je třeba
                        zvolit, jak chcete vadu vyřešit, přičemž tuto volbu nemůžete následně bez Našeho souhlasu
                        změnit. Reklamaci vyřídíme v souladu s Vámi uplatněným právem z vadného plnění. </li>
                    <li>Má-li Zboží vadu, máte následující práva:
                        <ul>
                            <li>na odstranění vady dodáním nového Zboží bez vady, nebo dodáním chybějící části Zboží;
                                nebo</li>
                            <li>na odstranění vady opravou Zboží,</li>
                        </ul>
                        ledaže by byl zvolený způsob odstranění vady nemožný nebo ve srovnání s druhým způsobem
                        nepřiměřeně nákladný, což se posoudí zejména s ohledem na význam vady, hodnotu, kterou by Zboží
                        mělo bez vady, a to, zda může být druhým způsobem vada odstraněna bez značných obtíží pro vás.
                    </li>
                    <li>Jsme oprávněni odmítnout vadu odstranit, je-li to nemožné nebo nepřiměřeně nákladné zejména s
                        ohledem na význam vady a hodnotu, kterou by Zboží mělo bez vady.</li>
                    <li>Dále máte právo na:</li>
                    <ul>
                        <li>přiměřenou slevu z Ceny; nebo</li>
                        <li>odstoupení od Smlouvy,</li>
                        <li style="list-style-type: none;">jestliže:</li>
                        <li>odmítneme vadu odstranit nebo ji neodstraníme v souladu s právními předpisy; </li>
                        <li>se vada projeví opakovaně, </li>
                        <li>je vada podstatným porušením Smlouvy; nebo </li>
                        <li>je z našeho prohlášení nebo z okolností zjevné, že vada nebude odstraněna v přiměřené době
                            nebo bez značných obtíží pro Vás.</li>
                    </ul>
                    <li>Právo na odstoupení od Smlouvy nenáleží v případě, je-li vada Zboží nevýznamná.</li>
                    <li>V případě, že jste si vadu na Zboží způsobili sami, práva z vadného plnění Vám nenáleží.</li>
                    <li>Vadou Zboží není opotřebení Zboží způsobené jeho obvyklým užíváním nebo u použitého Zboží
                        opotřebení odpovídající míře jeho předchozího používání.</li>
                    <li>Při uplatnění reklamace Vám vystavíme písemné potvrzení, ve kterém bude uvedeno: </li>
                    <ul>
                        <li>datum, kdy jste reklamaci uplatnili; </li>
                        <li>co je obsahem reklamace; </li>
                        <li>jaký způsob vyřízení reklamace požadujete;</li>
                        <li>Vaše kontaktní údaje pro účely poskytnutí informace o vyřízení reklamace.</li>
                    </ul>
                    <li>Nedohodneme-li se na delší lhůtě, do 30 dnů od obdržení reklamace odstraníme vady a poskytneme
                        Vám informaci o vyřízení reklamace na uvedené kontaktní údaje. Pokud tato lhůta marně uplyne,
                        můžete odstoupit od Smlouvy nebo požadovat přiměřenou slevu.</li>
                    <li>O vyřízení reklamace Vás budeme informovat e-mailem a vydáme Vám potvrzení o datu a způsobu
                        vyřízení reklamace. Pokud je reklamace oprávněná, náleží Vám náhrada účelně vynaložených
                        nákladů. Tyto náklady jste povinni prokázat, např. účtenkami či potvrzeními o ceně za dopravu. V
                        případě, že došlo k odstranění vady dodáním nového Zboží, je Vaší povinností Nám původní Zboží
                        vrátit, náklady na toto vrácení však hradíme My.</li>
                    <li>V případě, že jste podnikateli, je Vaší povinností oznámit a vytknout vadu bez zbytečného
                        odkladu poté, co jste ji mohli zjistit, nejpozději však do tří dnů od převzetí Zboží.</li>
                    <li>V případě, že jste spotřebitel, máte právo uplatit práva z vadného plnění u vady, která se
                        vyskytne u spotřebního Zboží ve lhůtě 24 měsíců od převzetí Zboží. </li>
                </ol>
                <li>
                    <h3>ODSTOUPENÍ OD SMLOUVY</h3>
                </li>
                <ol>
                    <li>K odstoupení od Smlouvy, tedy k ukončení smluvního vztahu mezi Námi a Vámi od jeho počátku, může
                        dojít z důvodů a způsoby uvedenými v tomto článku, případně v dalších ustanoveních Podmínek, ve
                        kterých je možnost odstoupení výslovně uvedena.</li>
                    <li>V případě, že jste spotřebitel, tedy osoba kupující Zboží mimo rámec své podnikatelské činnosti,
                        máte v souladu s ustanovením §1829 občanského zákoníku právo odstoupit od Smlouvy bez udání
                        důvodu ve lhůtě 14 dnů ode dne uzavření Smlouvy, resp. pokud se jedná o koupi zboží, pak do
                        čtrnácti dnů od jeho převzetí. V případě, že jsme uzavřeli Smlouvu, jejímž předmětem je několik
                        kusů Zboží nebo dodání několika částí Zboží, začíná tato lhůta běžet až dnem dodání posledního
                        kusu nebo části Zboží, a v případě, že jsme uzavřeli Smlouvu, na základě které Vám budeme Zboží
                        dodávat pravidelně a opakovaně, začíná běžet dnem dodání první dodávky. </li>
                    <li>Od Smlouvy můžete odstoupit jakýmkoliv prokazatelným způsobem (zejména zasláním e-mailu nebo
                        dopisu na Naše adresy uvedené u Našich identifikačních údajů). Pro odstoupení můžete využít také
                        vzorový formulář poskytovaný z Naší strany, který tvoří přílohu č. 2 Podmínek.</li>
                    <li>Ani jako spotřebitel však nemůžete od Smlouvy odstoupit v případech, kdy je předmětem Smlouvy
                        plnění uvedené v § 1837 Občanského zákoníku.</li>
                    <li>Lhůta k odstoupení dle čl. 8.2 Podmínek se považuje za zachovanou, pokud Nám v jejím průběhu
                        odešlete oznámení, že od Smlouvy odstupujete.</li>
                    <li>V případě odstoupení od Smlouvy dle čl. 8.2 Podmínek jste povinní Nám Zboží zaslat do 14 dnů od
                        odstoupení a nesete náklady spojené s navrácením zboží k Nám. Vy máte naopak nárok na to,
                        abychom Vám vrátili Cenu za dopravu, avšak pouze ve výši odpovídající nejlevnějšímu nabízenému
                        způsobu dodání Zboží, který jsme pro dodání Zboží nabízeli. V případě odstoupení z důvodu, že My
                        porušíme uzavřenou Smlouvu, hradíme i náklady spojené s navrácením zboží k Nám, ovšem opět pouze
                        do výše Ceny za dopravu ve výši odpovídající nejlevnějšímu nabízenému způsobu dodání Zboží,
                        který jsme při dodání Zboží nabízeli.</li>
                    <li>V případě odstoupení od Smlouvy Vám bude Cena vrácena do 14 dnů ode dne účinnosti odstoupení na
                        účet, ze kterého byla připsána, případně na účet zvolený odstoupení od Smlouvy. Částka však
                        nebude vrácena dříve, než Zboží obdržíme, nebo Nám prokážete, že došlo k jeho zaslání zpět Nám.
                        Zboží Nám prosím vracejte čisté, pokud možno včetně originálního obalu.</li>
                    <li>V případě odstoupení od Smlouvy dle čl. 8.2 Podmínek Nám však odpovídáte za snížení hodnoty
                        Zboží, které vzniklo v důsledku nakládání s tímto zbožím jinak, než je nutné k tomu, abyste se
                        seznámili s povahou, vlastnostmi a funkčností Zboží, tj. způsobem, jakým byste se se Zbožím
                        seznamovali v kamenné prodejně. V případě, že jsme Vám ještě nevrátili Cenu, jsme oprávněni
                        pohledávku z titulu nákladů započíst na Vaši pohledávku na vrácení Ceny.</li>
                    <li>My jsme oprávněni odstoupit od Smlouvy kdykoliv před tím, než Vám dodáme Zboží, pokud existují
                        objektivní důvody, proč není možné Zboží dodat (zejména důvody na straně třetích osob nebo
                        důvody spočívající v povaze Zboží), a to i před uplynutím doby uvedené v čl. 6.1 Podmínek.
                        Můžeme také od Smlouvy odstoupit, pokud je zjevné, že jste uvedli v Objednávce záměrně nesprávné
                        informace. V případě, že nakupujete zboží v rámci své podnikatelské činnosti, tedy jako
                        podnikatel, jsme oprávněni od Smlouvy odstoupit kdykoli, i bez udání důvodu.</li>
                </ol>
                <li>
                    <h3>ŘEŠENÍ SPORŮ SE SPOTŘEBITELI</h3>
                </li>
                <ol>
                    <li>Nejsme ve vztahu ke kupujícím vázáni žádnými kodexy chování ve smyslu ustanovení § 1826 odst. 1
                        písm. e) Občanského zákoníku.</li>
                    <li>Vyřizování stížností spotřebitelů zajišťujeme prostřednictvím elektronické adresy [BUDE
                        DOPLNĚNO]. Informaci o vyřízení stížnosti zašleme na elektronickou adresu kupujícího.</li>
                    <li>K mimosoudnímu řešení spotřebitelských sporů ze Smlouvy je příslušná Česká obchodní inspekce, se
                        sídlem Štěpánská 796/44, 110 00 Praha 1, IČ: 000 20 869, internetová adresa: <a
                            href="http://www.coi.cz">http://www.coi.cz</a>. Platformu pro řešení sporů on-line
                        nacházející se na internetové adrese <a
                            href="http://ec.europa.eu/consumers/odr">http://ec.europa.eu/consumers/odr</a> je možné
                        využít při řešení sporů mezi prodávajícím a kupujícím, který je spotřebitelem, z kupní smlouvy
                        uzavřené elektronickými prostředky.</li>
                    <li>Evropské spotřebitelské centrum Česká republika, se sídlem Štěpánská 796/44, 110 00 Praha 1,
                        internetová adresa: <a
                            href="http://www.evropskyspotrebitel.cz">http://www.evropskyspotrebitel.cz</a> je kontaktním
                        místem podle Nařízení Evropského parlamentu a Rady (EU) č. 524/2013 ze dne 21. května 2013, o
                        řešení spotřebitelských sporů on-line a o změně nařízení (ES) č. 2006/2004 a směrnice 2009/22/ES
                        (nařízení o řešení spotřebitelských sporů on-line).</li>
                </ol>
                <li>
                    <h3>ZÁVĚREČNÁ USTANOVENÍ</h3>
                </li>
                <ol>
                    <li>Pokud Náš a Váš právní vztah obsahuje mezinárodní prvek (tedy například budeme zasílat zboží
                        mimo území České republiky), bude se vztah vždy řídit právem České republiky. Pokud jste však
                        spotřebitelé, nejsou tímto ujednáním dotčena Vaše práva plynoucí z právních předpisů.</li>
                    <li>Veškerou písemnou korespondenci si s Vámi budeme doručovat elektronickou poštou. Naše e-mailová
                        adresa je uvedena u Našich identifikačních údajů. My budeme doručovat korespondenci na Vaši
                        e-mailovou adresu uvedenou ve Smlouvě, v Uživatelském účtu nebo přes kterou jste nás
                        kontaktovali.</li>
                    <li>Smlouvu je možné měnit pouze na základě naší písemné dohody. My jsme však oprávněni změnit a
                        doplnit tyto Podmínky, tato změna se však nedotkne již uzavřených Smluv, ale pouze Smluv, které
                        budou uzavřeny po účinnosti této změny. Vám na základě Smlouvy máme dodávat Zboží pravidelně a
                        opakovaně. Informace o změně Vám zašleme na Vaši e-mailovou adresu nejméně 14 dní před účinností
                        této změny. Pokud od Vás do 14 dnů od zaslání informace o změně neobdržíme výpověď uzavřené
                        Smlouvy na pravidelné a opakované dodávky Zboží, stávají se nové podmínky součástí naší Smlouvy
                        a uplatní se na další dodávku Zboží následující po účinnosti změny. Výpovědní doba v případě, že
                        výpověď podáte, činí 2 měsíce.</li>
                    <li>V případě vyšší moci nebo událostí, které nelze předvídat (přírodní katastrofa, pandemie,
                        provozní poruchy, výpadky subdodavatelů apod.), neneseme odpovědnost za škodu způsobenou v
                        důsledku nebo souvislosti s případy vyšší moci, a pokud stav vyšší moci trvá po dobu delší než
                        10 dnů, máme My i Vy právo od Smlouvy odstoupit.</li>
                    <li>Přílohou Podmínek je vzorový formulář pro reklamaci a vzorový formulář pro odstoupení od
                        Smlouvy.</li>
                    <li>Smlouva včetně Podmínek je archivována v elektronické podobě u Nás, ale není Vám přístupná. Vždy
                        však tyto Podmínky a potvrzení Objednávky se shrnutím Objednávky obdržíte e-mailem a budete tedy
                        mít vždy přístup ke Smlouvě i bez Naší součinnosti. Doporučujeme vždy potvrzení Objednávky a
                        Podmínky uložit.</li>
                    <li>Tyto Podmínky nabývají účinnosti [BUDE DOPLNĚNO].</li>
                </ol>
            </ol>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>