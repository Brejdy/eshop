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
            <h2>Zpracování osobních údajů a Nařízení GDPR</h2>

            <p>Pro vyřízení objednávek jsme nuceni zpracovávat osobní údaje zákazníků. Zde najdete souhrnné informace o
                zpracování osobních údajů naší společností v souladu s Nařízením známým jako GDPR.</p>

            <h3>Základní shrnutí</h3>

            <ol>
                <li>
                    <h4>Totožnost a kontaktní údaje správce</h4>
                    <ol>
                        <li>Správcem Vašich osobních údajů je obchodní společnost Cykloobchod, se sídlem Choceradská
                            3362/2, Praha - Záběhlice 141 00 identifikační číslo: 74589632, zapsaná v obchodním
                            rejstříku vedeném u Městského soudu v Praze, oddíl C, vložka 251436 (dále jen „správce“).
                        </li>
                        <li>Kontaktní údaje správce jsou následující: adresa pro doručování Choceradská 3362/2, Praha -
                            Záběhlice 141 00, adresa elektronické pošty info@cykloobchod.cz, telefon: 720 389 259.</li>
                        <li>Správce nejmenoval pověřence pro ochranu osobních údajů.</li>
                    </ol>
                </li>
                <li>
                    <h4>Právní základ zpracování osobních údajů</h4>
                    <ol>
                        <li>Právním základem zpracování Vašich osobních údajů je skutečnost, že toto zpracování je
                            nezbytné pro:</li>
                        <li>Právním základem zpracování Vašich osobních údajů je skutečnost, že toto zpracování je
                            nezbytné pro:</li>
                    </ol>
                </li>
                <li>
                    <h4>Účel zpracování osobních údajů</h4>
                    <ol>
                        <li>Účelem zpracování Vašich osobních údajů je plnění smlouvy mezi Vámi a správcem, včetně
                            doručení zboží a řešení práv z odpovědnosti za vady, či provedení opatření správcem před
                            uzavřením takové smlouvy a dále plnění souvisejících veřejnoprávních povinností správcem.
                        </li>
                        <li>Ze strany správce nedochází k automatickému individuálnímu rozhodování ve smyslu čl. 22
                            nařízení.</li>
                    </ol>
                </li>
                <li>
                    <h4>Doba uložení osobních údajů</h4>
                    <ol>
                        <li>Vaše osobní údaje budou zpracovávány po dobu trvání účinků práv a povinností ze smlouvy a
                            dále po dobu nutnou pro účely archivování podle příslušných obecně závazných právních
                            předpisů, nejdéle však po dobu stanovenou obecně závaznými právními předpisy.</li>
                    </ol>
                </li>
                <li>
                    <h4>Další příjemci osobních údajů</h4>
                    <ol>
                        <li>Dalšími příjemci Vašich osobních údajů budou zasílatelské společnosti a jiné osoby
                            podílející se na dodání zboží či realizaci plateb na základě kupní smlouvy, a osoby
                            zajišťující pro správce technické služby související s provozem e-shopu, včetně provozu
                            software a ukládání dat.</li>
                        <li>Příjemci Vašich osobních údajů zpracovávaných za účelem plnění povinností vyplývajících z
                            právních předpisů můžou být dále orgány finanční správy či jiné příslušné úřady v případech,
                            kdy tak správci ukládají obecně závazné právní předpisy.</li>
                        <li>Správce nemá v úmyslu předat Vaše osobní údaje do třetí země (do země mimo EU) nebo
                            mezinárodní organizaci.</li>
                    </ol>
                </li>
                <li>
                    <h4>Práva subjektu údajů</h4>
                    <ol>
                        <li>Za podmínek stanovených v nařízení máte právo požadovat od správce přístup k Vašim osobním
                            údajům, právo na opravu nebo výmaz Vašich osobních údajů, popřípadě omezení jejich
                            zpracování, právo vznést námitku proti zpracování Vašich osobních údajů a dále právo na
                            přenositelnost Vašich osobních údajů.</li>
                        <li>Pokud byste se domníval(a), že zpracováním Vašich osobních údajů bylo porušeno či je
                            porušováno nařízení, máte mimo jiné právo podat stížnost u dozorového úřadu.</li>
                        <li>Nemáte povinnost osobní údaje poskytnout. Poskytnutí Vašich osobních údajů je nutným
                            požadavkem pro uzavření a plnění smlouvy a bez poskytnutí Vašich osobních údajů není možné
                            smlouvu uzavřít či ji ze strany správce splnit.</li>
                    </ol>
                </li>
            </ol>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>