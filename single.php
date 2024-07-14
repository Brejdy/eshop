<?php include("header.php"); ?>
<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $rows = $conn->query("SELECT * FROM produkty WHERE status >= 0 AND id = $id");
    $allRows = $rows->fetch_assoc();
}
?>
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
            <li><a href="index.php?category=detska" class="<?php echo ($cat === 'detska') ? 'active' : ''; ?>">Dětská</a></li>
            <li><a href="index.php?category=horska" class="<?php echo ($cat === 'horska') ? 'active' : ''; ?>">Horská
                    kola</a></li>
            <li><a href="index.php?category=celo" class="<?php echo ($cat === 'celo') ? 'active' : ''; ?>">Celoodpružená</a></li>
            <li><a href="index.php?category=silnicni" class="<?php echo ($cat === 'silnicni') ? 'active' : ''; ?>">Silniční</a></li>
            <li><a href="index.php?category=gravel" class="<?php echo ($cat === 'gravel') ? 'active' : ''; ?>">Gravel</a></li>
            <li><a href="index.php?category=treking" class="<?php echo ($cat === 'treking') ? 'active' : ''; ?>">Trekingová</a></li>
        </ul>
        <a href="index.php?category=ekola" class="<?php echo ($cat === 'ekola') ? 'active' : ''; ?>">Elektrokola</a>
        <ul class="<?php echo ($cat === 'ekola') ? 'active' : ''; ?>
                    <?php echo ($cat === 'ehorska') ? 'active' : ''; ?>
                    <?php echo ($cat === 'ecelo') ? 'active' : ''; ?>
                    <?php echo ($cat === 'ecestovni') ? 'active' : ''; ?>">
            <li><a href="index.php?category=ehorska" class="<?php echo ($cat === 'ehorska') ? 'active' : ''; ?>">Horská
                    e-kola</a></li>
            <li><a href="index.php?category=ecelo" class="<?php echo ($cat === 'ecelo') ? 'active' : ''; ?>">Celoodpružená e-kola</a></li>
            <li><a href="index.php?category=ecestovni" class="<?php echo ($cat === 'ecestovni') ? 'active' : ''; ?>">Cestovní e-kola</a></li>
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
            <li><a href="index.php?category=subbatohy" class="<?php echo ($cat === 'subbatohy') ? 'active' : ''; ?>">Batohy</a></li>
            <li><a href="index.php?category=ledvinky" class="<?php echo ($cat === 'ledvinky') ? 'active' : ''; ?>">Ledvinky</a></li>
            <li><a href="index.php?category=camelbak" class="<?php echo ($cat === 'camelbak') ? 'active' : ''; ?>">Camelbak</a></li>
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
            <li><a href="index.php?category=kalhoty" class="<?php echo ($cat === 'kalhoty') ? 'active' : ''; ?>">Kalhoty</a></li>
            <li><a href="index.php?category=rukavice" class="<?php echo ($cat === 'rukavice') ? 'active' : ''; ?>">Rukavice</a></li>
            <li><a href="index.php?category=bundy" class="<?php echo ($cat === 'bundy') ? 'active' : ''; ?>">Bundy</a>
            </li>
            <li><a href="index.php?category=navleky" class="<?php echo ($cat === 'navleky') ? 'active' : ''; ?>">Návleky</a></li>
            <li><a href="index.php?category=ponozky" class="<?php echo ($cat === 'ponozky') ? 'active' : ''; ?>">Ponožky</a></li>
            <li><a href="index.php?category=hlava" class="<?php echo ($cat === 'hlava') ? 'active' : ''; ?>">Čelenky,
                    šátky, čepice a kukly</a></li>
        </ul>
        <a href="index.php?category=boty" class="<?php echo ($cat === 'boty') ? 'active' : ''; ?>">Cyklistické boty</a>
        <a href="index.php?category=chranice" class="<?php echo ($cat === 'chranice') ? 'active' : ''; ?>">Chrániče</a>
        <a href="index.php?category=bikepacking" class="<?php echo ($cat === 'bikepacking') ? 'active' : ''; ?>">Bikepacking</a>
        <ul class="<?php echo ($cat === 'bikepacking') ? 'active' : ''; ?>
                    <?php echo ($cat === 'brasny') ? 'active' : ''; ?>
                    <?php echo ($cat === 'nosice') ? 'active' : ''; ?>">
            <li><a href="index.php?category=brasny" class="<?php echo ($cat === 'brasny') ? 'active' : ''; ?>">Brašny</a></li>
            <li><a href="index.php?category=nosice" class="<?php echo ($cat === 'nosice') ? 'active' : ''; ?>">Nosiče</a></li>
        </ul>
        <a href="index.php?category=svetla" class="<?php echo ($cat === 'svetla') ? 'active' : ''; ?>">Osvětlení</a>
        <ul class="<?php echo ($cat === 'svetla') ? 'active' : ''; ?>
                    <?php echo ($cat === 'subsvetla') ? 'active' : ''; ?>
                    <?php echo ($cat === 'reflexe') ? 'active' : ''; ?>
                    <?php echo ($cat === 'svetlodoplnky') ? 'active' : ''; ?>">
            <li><a href="index.php?category=subsvetla" class="<?php echo ($cat === 'subsvetla') ? 'active' : ''; ?>">Světla</a></li>
            <li><a href="index.php?category=reflexe" class="<?php echo ($cat === 'reflexe') ? 'active' : ''; ?>">Reflexní prvky</a></li>
            <li><a href="index.php?category=svetlodoplnky" class="<?php echo ($cat === 'svetlodoplnky') ? 'active' : ''; ?>">Doplňky k osvětlení</a></li>
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
            <li><a href="index.php?category=kolecka" class="<?php echo ($cat === 'kolecka') ? 'active' : ''; ?>">Balanční kolečka</a></li>
            <li><a href="index.php?category=blatniky" class="<?php echo ($cat === 'blatniky') ? 'active' : ''; ?>">Blatníky</a></li>
            <li><a href="index.php?category=pc" class="<?php echo ($cat === 'pc') ? 'active' : ''; ?>">Cyklopočítače</a>
            </li>
            <li><a href="index.php?category=deti" class="<?php echo ($cat === 'deti') ? 'active' : ''; ?>">Sedačky a
                    táhla</a></li>
            <li><a href="index.php?category=uklid" class="<?php echo ($cat === 'uklid') ? 'active' : ''; ?>">Čistící
                    prostředky</a></li>
            <li><a href="index.php?category=storage" class="<?php echo ($cat === 'storage') ? 'active' : ''; ?>">Držáky
                    a stojany</a></li>
            <li><a href="index.php?category=drzakylahve" class="<?php echo ($cat === 'drzakylahve') ? 'active' : ''; ?>">Košíky na lahve</a></li>
            <li><a href="index.php?category=lahve" class="<?php echo ($cat === 'lahve') ? 'active' : ''; ?>">Lahve</a>
            </li>
            <li><a href="index.php?category=lepeniduse" class="<?php echo ($cat === 'lepeniduse') ? 'active' : ''; ?>">Lepení na duše</a></li>
            <li><a href="index.php?category=mazani" class="<?php echo ($cat === 'mazani') ? 'active' : ''; ?>">Mazací
                    prostředky</a></li>
            <li><a href="index.php?category=naradi" class="<?php echo ($cat === 'naradi') ? 'active' : ''; ?>">Nářadí</a></li>
            <li><a href="index.php?category=ochrana" class="<?php echo ($cat === 'ochrana') ? 'active' : ''; ?>">Ochrana
                    rámu</a></li>
            <li><a href="index.php?category=mobily" class="<?php echo ($cat === 'mobily') ? 'active' : ''; ?>">Pouzdra
                    na mobily</a></li>
            <li><a href="index.php?category=pumpy" class="<?php echo ($cat === 'pumpy') ? 'active' : ''; ?>">Pumpy</a>
            </li>
            <li><a href="index.php?category=rohy" class="<?php echo ($cat === 'rohy') ? 'active' : ''; ?>">Rohy</a></li>
            <li><a href="index.php?category=zamky" class="<?php echo ($cat === 'zamky') ? 'active' : ''; ?>">Zámky</a>
            </li>
            <li><a href="index.php?category=zrcatka" class="<?php echo ($cat === 'zrcatka') ? 'active' : ''; ?>">Zrcátka</a></li>
            <li><a href="index.php?category=zvonky" class="<?php echo ($cat === 'zvonky') ? 'active' : ''; ?>">Zvonky a
                    doplňky</a></li>
        </ul>
        <a href="index.php?category=komponenty" class="<?php echo ($cat === 'komponenty') ? 'active' : ''; ?>">Komponenty</a>
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
            <li><a href="index.php?category=bezduse" class="<?php echo ($cat === 'bezduse') ? 'active' : ''; ?>">Bezdušový systém</a></li>
            <li><a href="index.php?category=desticky" class="<?php echo ($cat === 'desticky') ? 'active' : ''; ?>">Brzdové destičky</a></li>
            <li><a href="index.php?category=brzdypris" class="<?php echo ($cat === 'brzdypris') ? 'active' : ''; ?>">Brzdové příslušenství</a></li>
            <li><a href="index.php?category=kotouce" class="<?php echo ($cat === 'kotouce') ? 'active' : ''; ?>">Brzdové
                    kotouče</a></li>
            <li><a href="index.php?category=kotoucovebrzdy" class="<?php echo ($cat === 'kotoucovebrzdy') ? 'active' : ''; ?>">Kotoučové brzdy</a></li>
            <li><a href="index.php?category=botky" class="<?php echo ($cat === 'botky') ? 'active' : ''; ?>">Brzdové
                    botky</a></li>
            <li><a href="index.php?category=duse" class="<?php echo ($cat === 'duse') ? 'active' : ''; ?>">Duše</a></li>
            <li><a href="index.php?category=gripy" class="<?php echo ($cat === 'gripy') ? 'active' : ''; ?>">Gripy a
                    omotávky</a></li>
            <li><a href="index.php?category=pedaly" class="<?php echo ($cat === 'pedaly') ? 'active' : ''; ?>">Pedály</a></li>
            <li><a href="index.php?category=plaste" class="<?php echo ($cat === 'plaste') ? 'active' : ''; ?>">Pláště</a></li>
            <li><a href="index.php?category=predstavce" class="<?php echo ($cat === 'predstavce') ? 'active' : ''; ?>">Představce</a></li>
            <li><a href="index.php?category=retezy" class="<?php echo ($cat === 'retezy') ? 'active' : ''; ?>">Řetězy</a></li>
            <li><a href="index.php?category=sedla" class="<?php echo ($cat === 'sedla') ? 'active' : ''; ?>">Sedla</a>
            </li>
            <li><a href="index.php?category=sedlovky" class="<?php echo ($cat === 'sedlovky') ? 'active' : ''; ?>">Sedlovky a objímky</a></li>
            <li><a href="index.php?category=riditka" class="<?php echo ($cat === 'riditka') ? 'active' : ''; ?>">Řídítka</a></li>
            <li><a href="index.php?category=kazety" class="<?php echo ($cat === 'kazety') ? 'active' : ''; ?>">Kazety</a></li>
            <li><a href="index.php?category=prehazovacky" class="<?php echo ($cat === 'prehazovacky') ? 'active' : ''; ?>">Přehazovačky</a></li>
            <li><a href="index.php?category=stojanky" class="<?php echo ($cat === 'stojanky') ? 'active' : ''; ?>">Stojánky</a></li>
            <li><a href="index.php?category=prevodniky" class="<?php echo ($cat === 'prevodniky') ? 'active' : ''; ?>">Převodníky</a></li>
        </ul>
        <a href="index.php?category=jidlo" class="<?php echo ($cat === 'jidlo') ? 'active' : ''; ?>">Sportovní
            výživa</a>
        <ul class="<?php echo ($cat === 'jidlo') ? 'active' : ''; ?>
                    <?php echo ($cat === 'energie') ? 'active' : ''; ?>
                    <?php echo ($cat === 'krece') ? 'active' : ''; ?>
                    <?php echo ($cat === 'piticko') ? 'active' : ''; ?>
                    <?php echo ($cat === 'regenerace') ? 'active' : ''; ?>">
            <li><a href="index.php?category=energie" class="<?php echo ($cat === 'energie') ? 'active' : ''; ?>">Doplnění energie</a></li>
            <li><a href="index.php?category=krece" class="<?php echo ($cat === 'krece') ? 'active' : ''; ?>">Proti
                    křečím</a></li>
            <li><a href="index.php?category=piticko" class="<?php echo ($cat === 'piticko') ? 'active' : ''; ?>">Pitný
                    režim</a></li>
            <li><a href="index.php?category=regenerace" class="<?php echo ($cat === 'regenerace') ? 'active' : ''; ?>">Regenerace</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="produkt">
            <div class="obrazek">
                <img src="obrazky/<?php echo $allRows["obrazek"] ?>" alt="Obrázek produktu">
            </div>
            <div class="hlavni">
                <h2><?php echo $allRows["jmeno"] ?></h2>
                <h2><?php echo $allRows["cena"] ?> CZK</h2>
                <?php if ($allRows["status"] == 0) : ?>
                    <h4 class="sklad-neni">NENÍ SKLADEM</h4>
                <?php else : ?>
                    <p class="sklad-je">Skladem <?php echo $allRows["status"] ?> kus(ů)</p>
                <?php endif; ?>
                <hr>
                <p>Kód produktu: <?php echo $allRows["kod"] ?> / ID: <?php echo $allRows["id"] ?></p>
                <p>Barva: <?php echo $allRows["barva"] ?></p>
                <hr>
                <form id="addToCart" method="post" action="addToCart.php" onsubmit="return addToCart()">
                    <label for="size">Velikost:</label><br>
                    <?php if ($allRows["kategorie"] == 'kola' || $allRows["kategorie"] == 'ekola' || $allRows["kategorie"] == 'helmy' || $allRows["kategorie"] == 'obleceni' || $allRows["kategorie"] == 'chranice') : ?>
                        <div class="size">
                            <?php if ($allRows["s"] == 0) : ?>
                                <input type="button" class="size-btn" value="S" style="background-color: grey;" disabled>
                            <?php else : ?>
                                <input type="button" class="size-btn" value="S" onclick="getSize()">
                            <?php endif; ?>
                            <?php if ($allRows["m"] == 0) : ?>
                                <input type="button" class="size-btn" value="M" style="background-color: grey;" disabled>
                            <?php else : ?>
                                <input type="button" class="size-btn" value="M" onclick="getSize()">
                            <?php endif; ?>
                            <?php if ($allRows["l"] == 0) : ?>
                                <input type="button" class="size-btn" value="L" style="background-color: grey;" disabled>
                            <?php else : ?>
                                <input type="button" class="size-btn" value="L" onclick="getSize()">
                            <?php endif; ?>
                            <?php if ($allRows["xl"] == 0) : ?>
                                <input type="button" class="size-btn" value="XL" style="background-color: grey;" disabled>
                            <?php else : ?>
                                <input type="button" class="size-btn" value="XL" onclick="getSize()">
                            <?php endif; ?>
                        </div>
                    <?php elseif ($allRows["kategorie"] == 'boty') : ?>
                        <div class="size">
                            <?php if ($allRows["38"] == 0) : ?>
                                <input type="button" class="size-btn" value="38" style="background-color: grey;" disabled>
                            <?php else : ?>
                                <input type="button" class="size-btn" value="38" onclick="getSize()">
                            <?php endif; ?>
                            <?php if ($allRows["39"] == 0) : ?>
                                <input type="button" class="size-btn" value="39" style="background-color: grey;" disabled>
                            <?php else : ?>
                                <input type="button" class="size-btn" value="39" onclick="getSize()">
                            <?php endif; ?>
                            <?php if ($allRows["40"] == 0) : ?>
                                <input type="button" class="size-btn" value="40" style="background-color: grey;" disabled>
                            <?php else : ?>
                                <input type="button" class="size-btn" value="40" onclick="getSize()">
                            <?php endif; ?>
                            <?php if ($allRows["41"] == 0) : ?>
                                <input type="button" class="size-btn" value="41" style="background-color: grey;" disabled>
                            <?php else : ?>
                                <input type="button" class="size-btn" value="41" onclick="getSize()">
                            <?php endif; ?>
                            <?php if ($allRows["42"] == 0) : ?>
                                <input type="button" class="size-btn" value="42" style="background-color: grey;" disabled>
                            <?php else : ?>
                                <input type="button" class="size-btn" value="42" onclick="getSize()">
                            <?php endif; ?>
                            <?php if ($allRows["43"] == 0) : ?>
                                <input type="button" class="size-btn" value="43" style="background-color: grey;" disabled>
                            <?php else : ?>
                                <input type="button" class="size-btn" value="43" onclick="getSize()">
                            <?php endif; ?>
                            <?php if ($allRows["44"] == 0) : ?>
                                <input type="button" class="size-btn" value="44" style="background-color: grey;" disabled>
                            <?php else : ?>
                                <input type="button" class="size-btn" value="44" onclick="getSize()">
                            <?php endif; ?>
                            <?php if ($allRows["45"] == 0) : ?>
                                <input type="button" class="size-btn" value="45" style="background-color: grey;" disabled>
                            <?php else : ?>
                                <input type="button" class="size-btn" value="45" onclick="getSize()">
                            <?php endif; ?>
                            <?php if ($allRows["46"] == 0) : ?>
                                <input type="button" class="size-btn" value="46" style="background-color: grey;" disabled>
                            <?php else : ?>
                                <input type="button" class="size-btn" value="46" onclick="getSize()">
                            <?php endif; ?>
                            <?php if ($allRows["47"] == 0) : ?>
                                <input type="button" class="size-btn" value="47" style="background-color: grey;" disabled>
                            <?php else : ?>
                                <input type="button" class="size-btn" value="47" onclick="getSize()">
                            <?php endif; ?>
                        </div>
                    <?php else : ?>
                        <?php if ($allRows["uni"] == 0) : ?>
                            <input type="button" class="size-btn" value="UNI" style="background-color: grey;" disabled>
                        <?php else : ?>
                            <input type="button" class="size-btn" value="UNI" onclick="getSize()" checked>
                        <?php endif; ?>
                    <?php endif; ?>
                    <br>
                    <label for="quantity">Množství:</label>
                    <div class="cartdiv">
                        <button type="button" class="quantity-btn" id="minus" onclick="substract(); getValue()">-</button>
                        <input type="number" name="quantity" id="quantity" value="1">
                        <button type="button" class="quantity-btn" id="plus" onclick="add(); getValue()">+</button>

                        <input type="hidden" id="prod_id" name="prod_id" value="<?php echo $allRows["id"] ?>" class="single-control">
                        <input type="hidden" id="prod_jmeno" name="prod_jmeno" value="<?php echo $allRows["jmeno"] ?>" class="single-control">
                        <input type="hidden" id="prod_obr" name="prod_obr" value="<?php echo $allRows["obrazek"] ?>" class="single-control">
                        <input type="hidden" id="prod_cena" name="prod_cena" value="<?php echo $allRows["cena"] ?>" class="single-control">
                        <input type="hidden" id="prod_mnozstvi" name="prod_mnozstvi" class="single-control">
                        <input type="hidden" id="prod_velikost" name="prod_velikost" class="single-control">
                        <input type="hidden" id="prod_kod" name="prod_kod" value="<?php echo $allRows["kod"] ?>" class="single-control">
                        <input type="hidden" id="prod_status" name="prod_status" value="<?php echo $allRows["status"] ?>" class="single-control">

                        <?php if (isset($_SESSION["id"])) : ?>
                            <input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION["id"] ?>" class="single-control">
                        <?php else : ?>
                            <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id; ?>" class="single-control">
                        <?php endif; ?>
                        <?php if ($allRows["status"] == 0) : ?>
                            <button type="button" id="button" class="addtocart" style="background-color: grey;"><img src="obrazky/add-to-cart-3046 (1).png" style="vertical-align: middle; height: 45px;"></button>
                        <?php else : ?>
                            <button id="button" class="addtocart"><img src="obrazky/add-to-cart-3046 (1).png" style="vertical-align: middle; height: 45px;"></button>
                        <?php endif; ?>
                    </div>
                </form>
                <hr>
                <?php if ($allRows["kategorie"] == "kola" || $allRows["kategorie"] == "ekola") : ?>
                    <h4>Nejlepší velikost pro Vás?</h4>
                    <form id="sizeForm" onsubmit="return false;">
                        <div class="findsize">
                            <table>
                                <tr>
                                    <th>Vaše výška:</th>
                                    <th><input type="number" id="vyska" class="výška"></th>
                                </tr>
                                <tr>
                                    <th>Výška vnitřního stehna:</th>
                                    <th><input type="number" id="rozkrok" class="rozkrok"></th>
                                </tr>
                            </table>
                        </div>
                        <div class="tooltip">
                            Mohu poradit?
                            <span class="tooltiptext">Nazujte si boty ve kterých jezdíte. Vložíte knížku kam až byste si
                                dali sedlo, a změřte výšku od země k hornímu okraji knihy.</span>
                        </div>
                        <br>
                        <div class="velkol">
                            <input type="submit" class="velikostkola" value="Vypočítat">
                        </div>
                    </form>
                    <p id="velikostkola"></p>
                <?php endif; ?>
            </div>
            <div class="popis">
                <h2>Popis produktu:</h2> <?php echo $allRows["popis"] ?>
            </div>
        </div>
    </div>
</div>
<script>
    /*PŘIDÁNÍ VELIKOSTI*/
    function getSize() {
        var btns = document.getElementsByClassName("size-btn");

        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.querySelector(".size-btn.selected");
                if (current) {
                    current.classList.remove("selected");
                }
                this.classList.add("selected");
                updateSize();
            });
        }
    }

    function updateSize() {
        var selectedBtn = document.querySelector(".size-btn.selected");
        var selectedSize = selectedBtn ? selectedBtn.value : "";
        if (selectedSize) {
            document.getElementById('prod_velikost').value = selectedSize;
            console.log(document.getElementById('prod_velikost').value);
        }
    }

    getSize();

    /*KONTROLA POČTU OBJEDNANÝCH POLOŽEK*/
    window.onload = function() {
        getValue();
    }

    function getValue() {
        var zdroj = document.getElementById('quantity').value;
        document.getElementById('prod_mnozstvi').value = zdroj;
        console.log(document.getElementById('prod_mnozstvi').value);
    }

    /*OZNAČENÍ VYBRANÉ VELIKOSTI*/
    var btns = document.getElementsByClassName("size-btn");

    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("selected");
            if (current.length > 0) {
                current[0].className = current[0].className.replace(" selected", "");
            }
            this.className += " selected";
        });
    }

    var btns = document.getElementsByClassName("size-btn");
    for (let index = 0; index < btns.length; index++) {
        btns[index].addEventListener("click", function() {
            var cur = document.getElementsByClassName("selected");
            if (cur.length > 0) {
                cur[0].classList.remove("selected");
            }
            this.classList.add("selected");

            var selSize = document.querySelector('.size-btn.selected').value;
            document.getElementById('prod_velikost').value = selSize;
            var sizeQuant;
            if (document.getElementById('prod_velikost').value == "S") {
                sizeQuant = <?php echo ($allRows["s"] != null ? $allRows["s"] : 0); ?>
            } else if (document.getElementById('prod_velikost').value == "M") {
                sizeQuant = <?php echo ($allRows["m"] != null ? $allRows["m"] : 0); ?>
            } else if (document.getElementById('prod_velikost').value == "L") {
                sizeQuant = <?php echo ($allRows["l"] != null ? $allRows["l"] : 0); ?>
            } else if (document.getElementById('prod_velikost').value == "XL") {
                sizeQuant = <?php echo ($allRows["xl"] != null ? $allRows["xl"] : 0); ?>
            } else if (document.getElementById('prod_velikost').value == "UNI") {
                sizeQuant = <?php echo ($allRows["uni"] != null ? $allRows["uni"] : 0); ?>
            }else if (document.getElementById('prod_velikost').value == "38") {
                sizeQuant = <?php echo ($allRows["38"] != null ? $allRows["38"] : 0); ?>
            }else if (document.getElementById('prod_velikost').value == "39") {
                sizeQuant = <?php echo ($allRows["39"] != null ? $allRows["39"] : 0); ?>
            }else if (document.getElementById('prod_velikost').value == "40") {
                sizeQuant = <?php echo ($allRows["40"] != null ? $allRows["40"] : 0); ?>
            }else if (document.getElementById('prod_velikost').value == "41") {
                sizeQuant = <?php echo ($allRows["41"] != null ? $allRows["41"] : 0); ?>
            }else if (document.getElementById('prod_velikost').value == "42") {
                sizeQuant = <?php echo ($allRows["42"] != null ? $allRows["42"] : 0); ?>
            }else if (document.getElementById('prod_velikost').value == "43") {
                sizeQuant = <?php echo ($allRows["43"] != null ? $allRows["43"] : 0); ?>
            }else if (document.getElementById('prod_velikost').value == "44") {
                sizeQuant = <?php echo ($allRows["44"] != null ? $allRows["44"] : 0); ?>
            }else if (document.getElementById('prod_velikost').value == "45") {
                sizeQuant = <?php echo ($allRows["45"] != null ? $allRows["45"] : 0); ?>
            }else if (document.getElementById('prod_velikost').value == "46") {
                sizeQuant = <?php echo ($allRows["46"] != null ? $allRows["46"] : 0); ?>
            }else if (document.getElementById('prod_velikost').value == "47") {
                sizeQuant = <?php echo ($allRows["47"] != null ? $allRows["47"] : 0); ?>
            }

            console.log(sizeQuant);

            var quantityInput = document.getElementById('quantity');
            quantityInput.max = sizeQuant;
        });
    }

    /*ODESLÁNÍ VELIKOSTI A POČTU DO KOŠÍKU*/
    function addToCart() {
        var sizeButtons = document.querySelectorAll('.size-btn');
        var selectedSize = '';
        for (var i = 0; i < sizeButtons.length; i++) {
            if (sizeButtons[i].classList.contains('selected')) {
                selectedSize = sizeButtons[i].value;
                break;
            }
        }
        if (selectedSize === '') {
            alert('Prosím vyberte velikost.');
            return false;
        }
        var quantity = document.getElementById('quantity').value;
        var size = document.getElementById('size').value = selectedSize;
        document.getElementById('prod_velikost').value = size;
        document.getElementById('addToCart').submit();
    }



    //měření velikosti kola 
    document.getElementById('sizeForm').addEventListener('submit', function(event) {
        event.preventDefault;

        velKola();
    });

    function velKola() {
        var vyska = parseFloat(document.querySelector('.výška').value);
        var rozkrok = parseFloat(document.querySelector('.rozkrok').value);

        var velikostKola = '';

        if (vyska <= 160) {
            if (rozkrok < 75) {
                velikostKola = 'S';
            } else if (rozkrok >= 75 && rozkrok < 80) {
                velikostKola = 'S';
            } else {
                velikostKola = 'M';
            }
        } else if (vyska > 160 && vyska <= 175) {
            if (rozkrok < 75) {
                velikostKola = 'M';
            } else if (rozkrok >= 75 && rozkrok < 80) {
                velikostKola = 'M';
            } else {
                velikostKola = 'L';
            }
        } else {
            if (rozkrok < 75) {
                velikostKola = 'L';
            } else if (rozkrok >= 75 && rozkrok < 80) {
                velikostKola = 'XL';
            } else {
                velikostKola = 'XL';
            }
        }
        document.getElementById('velikostkola').innerHTML = 'Nejlepší velikost kola pro Vás je ' + velikostKola;
    }

    /* PŘIDÁNÍ A ODEBRÁNÍ MNOŽSTVÍ */
    function add() {
        var quantity = document.getElementById('quantity');
        var num = parseInt(quantity.value);
        var max = parseInt(quantity.max);
        if (num < max) {
            quantity.value = num + 1;
        }
    }

    function substract() {
        var quantity = document.getElementById('quantity');
        var num = parseInt(quantity.value)
        if (num == 1) {
            quantity.value = num;
        } else {
            quantity.value = num - 1;
        }
    }
</script>

<?php include("footer.php"); ?>