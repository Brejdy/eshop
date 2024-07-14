<?php include("header.php"); ?>
<?php include("dbaccess.php"); ?>

<?php 
//SORT 
if(!isset($_SESSION["sort"]))
{
    $_SESSION["sort"] = "pridano DESC";
}    

if(isset($_GET['sort']))
{
    switch ($_GET['sort'])
    {
        case 'levne':
            $_SESSION["sort"] = "cena ASC";
            break;
        case 'drahe':
            $_SESSION["sort"] = 'cena DESC';
            break;
        case 'nove':
            $_SESSION["sort"] = 'pridano DESC';
            break;
        case 'jmenoaz':
            $_SESSION["sort"] = 'jmeno ASC';
            break;
        case 'jmenoza':
            $_SESSION["sort"] = 'jmeno DESC';
            break;
    }
}

$sort = $_SESSION["sort"];
$cat = isset($_GET["category"]) ? $_GET["category"] : '';

if(empty($cat))
{
    $result = "SELECT * FROM produkty ORDER BY status DESC";
    $vyprodane = $conn->query("SELECT * FROM produkty WHERE status = 0");
    $min_result = $conn->query("SELECT cena FROM produkty ORDER BY cena ASC LIMIT 1");
    $max_result = $conn->query("SELECT cena FROM produkty ORDER BY cena DESC LIMIT 1");
    $sql = "SELECT * FROM produkty WHERE status > 0";
    $add = $conn->query("SELECT * FROM produkty WHERE status = 0 ORDER BY $sort");
}
else if($cat == 'kola' || $cat == 'ekola' || $cat == 'helmy' || $cat == 'bryle' || $cat == 'batohy' || $cat == 'obleceni' || $cat == 'boty' || $cat == 'chranice' || $cat == 'bikepacking' || $cat == 'svetla' || $cat == 'extra' || $cat == 'komponenty' || $cat == 'jidlo')
{
    $result = "SELECT * FROM produkty WHERE kategorie = '$cat' ORDER BY status DESC";
    $vyprodane = $conn->query("SELECT * FROM produkty WHERE status = 0 AND kategorie = '$cat'");
    $min_result = $conn->query("SELECT cena FROM produkty WHERE kategorie = '$cat' ORDER BY cena ASC LIMIT 1");
    $max_result = $conn->query("SELECT cena FROM produkty WHERE kategorie = '$cat' ORDER BY cena DESC LIMIT 1");
    $sql = "SELECT * FROM produkty WHERE status > 0 AND kategorie = '$cat'";
    $add = $conn->query("SELECT * FROM produkty WHERE status = 0 AND kategorie = '$cat' ORDER BY $sort");
}
else
{
    $result = "SELECT * FROM produkty WHERE subkategorie = '$cat' ORDER BY status DESC";
    $vyprodane = $conn->query("SELECT * FROM produkty WHERE status = 0 AND subkategorie = '$cat'");
    $min_result = $conn->query("SELECT cena FROM produkty WHERE subkategorie = '$cat' ORDER BY cena ASC LIMIT 1");
    $max_result = $conn->query("SELECT cena FROM produkty WHERE subkategorie = '$cat' ORDER BY cena DESC LIMIT 1");
    $sql = "SELECT * FROM produkty WHERE status > 0 AND subkategorie = '$cat'";
    $add = $conn->query("SELECT * FROM produkty WHERE status = 0 AND subkategorie = '$cat' ORDER BY $sort");
}

    //zobrazení na stránky 
    if(isset($_GET["page"])) 
    {
        $page = $_GET["page"];
    }
    else
    {
        $page = 1;
    }

    $num_per_page = 15;
    $start = ($page-1) * $num_per_page;

    $query = mysqli_query($conn, $result);
    $num_rows = mysqli_num_rows($query);  
    $pages = ceil($num_rows/$num_per_page);

    $num_vyprodane = mysqli_num_rows($vyprodane);
    $vyprod_page = ceil($num_vyprodane/$num_per_page);

    //cena od do 
    $min_val = $min_result->fetch_assoc();
    $min_price = $min_val['cena'];
    
    $max_val = $max_result->fetch_assoc();
    $max_price = $max_val['cena'];

    $min_price_set = isset($_GET["min_price"]) ? $_GET["min_price"] :null;
    $max_price_set = isset($_GET["max_price"]) ? $_GET["max_price"] :null;

    if(isset( $_GET["min_price"]) && !empty($_GET["min_price"]) !== '')
    {
        $sql .= " AND cena >= $min_price_set";
    }
    if(isset( $_GET["max_price"]) && !empty($_GET["max_price"]) !== '')
    {
        $sql .= " AND cena <= $max_price_set";
    }

    $sql .= " ORDER BY $sort LIMIT $start, $num_per_page";

    //vypsání z tabulky produkty
    $rows = $conn->query($sql);
    $allRows = $rows->fetch_assoc();  
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

        <div class="price-input-container">
            <form method="get" action="index.php?category=<?php echo $cat; ?>">
                <h3 style="color: #000066;">Cena:</h3>
                <div class="price-input">
                    <div class="price-field">
                        <label for="min-price">Od:</label>
                        <label for="max-price">Do:</label>
                    </div>
                    <div class="price-field">
                        <input type="number" name="min_price" id="min_price" class="price-field-input"
                            value="<?php echo isset($_GET["min_price"]) ? $_GET["min_price"] : $min_price; ?>" />
                        -----
                        <input type="number" name="max_price" id="max_price" class="price-field-input"
                            value="<?php echo isset($_GET["max_price"]) ? $_GET["max_price"] : $max_price; ?>" />
                    </div>
                    <div class="price-submit">
                        <input type="hidden" name="sort" value="<?php echo $_SESSION['sort']; ?>">
                        <input type="hidden" name="category" value="<?php echo $cat; ?>">
                        <input type="hidden" name="sql" value="<?php echo $sql; ?>">
                        <button type="submit" class="price-submit-btn">Filtrovat</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container-b">
    <label class="sort-label">Seřadit:</label>
        <select id="sort-select" class="sort-select-mobile">
            
            <option><a href="index.php?sort=nove<?php echo isset($_GET['min_price']) ? '&min_price=' . $_GET['min_price'] : ''; ?><?php echo isset($_GET['max_price']) ? '&max_price=' . $_GET['max_price'] : ''; ?><?php echo (isset($_GET["category"]) ? '&category=' . $_GET["category"] : ''); ?>"
                    class="sort-item <?php echo ($_GET['sort'] ?? '') === 'levne' ? 'active' : ''; ?>">-------</a></option>
        </select>
        <div id="sort-links" class="sort-div">
            <div class="sort">
                <a href="index.php?sort=levne<?php echo isset($_GET['min_price']) ? '&min_price=' . $_GET['min_price'] : ''; ?><?php echo isset($_GET['max_price']) ? '&max_price=' . $_GET['max_price'] : ''; ?><?php echo (isset($_GET["category"]) ? '&category=' . $_GET["category"] : ''); ?>"
                    class="sort-item <?php echo ($_GET['sort'] ?? '') === 'levne' ? 'active' : ''; ?>">Od
                    nejlevnějších</a>
                <a href="index.php?sort=drahe<?php echo isset($_GET['min_price']) ? '&min_price=' . $_GET['min_price'] : ''; ?><?php echo isset($_GET['max_price']) ? '&max_price=' . $_GET['max_price'] : ''; ?><?php echo (isset($_GET["category"]) ? '&category=' . $_GET["category"] : ''); ?>"
                    class="sort-item <?php echo ($_GET['sort'] ?? '') === 'drahe' ? 'active' : ''; ?>">Od
                    nejdražších</a>
                <a href="index.php?sort=nove<?php echo isset($_GET['min_price']) ? '&min_price=' . $_GET['min_price'] : ''; ?><?php echo isset($_GET['max_price']) ? '&max_price=' . $_GET['max_price'] : ''; ?><?php echo (isset($_GET["category"]) ? '&category=' . $_GET["category"] : ''); ?>"
                    class="sort-item <?php echo ($_GET['sort'] ?? '') === 'nove' ? 'active' : ''; ?>">Od
                    nejnovějších</a>
                <a href="index.php?sort=jmenoaz<?php echo isset($_GET['min_price']) ? '&min_price=' . $_GET['min_price'] : ''; ?><?php echo isset($_GET['max_price']) ? '&max_price=' . $_GET['max_price'] : ''; ?><?php echo (isset($_GET["category"]) ? '&category=' . $_GET["category"] : ''); ?>"
                    class="sort-item <?php echo ($_GET['sort'] ?? '') === 'jmenoaz' ? 'active' : ''; ?>">Podle názvu A -
                    Z</a>
                <a href="index.php?sort=jmenoza<?php echo isset($_GET['min_price']) ? '&min_price=' . $_GET['min_price'] : ''; ?><?php echo isset($_GET['max_price']) ? '&max_price=' . $_GET['max_price'] : ''; ?><?php echo (isset($_GET["category"]) ? '&category=' . $_GET["category"] : ''); ?>"
                    class="sort-item <?php echo ($_GET['sort'] ?? '') === 'jmenoza' ? 'active' : ''; ?>">Podle názvu Z -
                    A</a>
            </div>

            <div class="price-input-container-mobile">
                <form method="get" action="index.php">
                    <h3 style="color: #000066;">Cena:</h3>
                    <div class="price-input">
                        <div class="price-field">
                            <label for="min-price">Od:</label>
                            <label for="max-price">Do:</label>
                        </div>
                        <div class="price-field">
                            <input type="number" name="min_price" id="min_price" class="price-field-input"
                                value="<?php echo isset($_GET["min_price"]) ? $_GET["min_price"] : $min_price; ?>" />
                            -----
                            <input type="number" name="max_price" id="max_price" class="price-field-input"
                                value="<?php echo isset($_GET["max_price"]) ? $_GET["max_price"] : $max_price; ?>" />
                        </div>
                        <div class="price-submit">
                            <input type="hidden" name="sort" value="<?php echo $_SESSION['sort']; ?>">
                            <button type="submit" class="price-submit-btn">Filtrovat</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="content">
            <?php foreach($rows as $produkt) : ?>
            <?php if ($produkt["status"] > 0) : ?>
            <div class="prod">
                <div class="karta">
                    <div class="kartobrazek">
                        <img class="kartaobr" src="obrazky/<?php echo $produkt["obrazek"]; ?>">
                    </div>
                    <div class="karta-telo">
                        <h5 class="prod-jmeno"><?php echo $produkt["jmeno"]; ?></h5>
                        <h5 class="prod-cena"><?php echo $produkt["cena"]; ?> CZK</h5>
                        <p class="sklad-je"> Skladem je
                            <?php if($produkt["status"] > 5) { echo "> 5"; } else { echo $produkt["status"]; } ?> kus(ů)
                        </p>
                        <p class="prod-popis"><?php echo substr($produkt["popis"], 0, 173); ?></p>
                        <a href="single.php?id=<?php echo $produkt["id"]; ?>" class="prod-button">Více</a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>

            <?php if($page == $pages) : ?>
            <?php foreach($add as $produkt) : ?>
            <?php if ($produkt["status"] == 0) : ?>
            <div class="prod">
                <div class="karta">
                    <div class="kartobrazek">
                        <img class="kartaobr" src="obrazky/<?php echo $produkt["obrazek"]; ?>">
                    </div>
                    <div class="karta-telo">
                        <h5 class="prod-jmeno"><?php echo $produkt["jmeno"]; ?></h5>
                        <h5 class="prod-cena"><?php echo $produkt["cena"]; ?> CZK</h5>
                        <p class="sklad-neni">NENÍ SKALDEM!</p>
                        <p class="prod-popis"><?php echo substr($produkt["popis"], 0, 173); ?></p>
                        <a href="single.php?id=<?php echo $produkt["id"]; ?>" class="prod-button">Více</a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="pages">
            <?php 
                if($page > 1) 
                {
                    echo "<a href='index.php?category=".(isset($_GET["category"]) ? $_GET["category"] : '')."&page=1"."&sort=". $_SESSION["sort"] . (isset($_GET['min_price']) ? '&min_price=' . $_GET['min_price'] : '') . (isset($_GET['max_price']) ? '&max_price=' . $_GET['max_price'] : '') . "' class='nextpage'><<</a>";
                    echo "<a href='index.php?category=".(isset($_GET["category"]) ? $_GET["category"] : '')."&page=". ($page - 1) ."&sort=". $_SESSION["sort"] . (isset($_GET['min_price']) ? '&min_price=' . $_GET['min_price'] : '') . (isset($_GET['max_price']) ? '&max_price=' . $_GET['max_price'] : '') . "' class='nextpage'><</a>";
                }
                
                for($i = 1; $i <= $pages; $i++)
                {
                    echo "<a href='index.php?category=".(isset($_GET["category"]) ? $_GET["category"] : '')."&page=". $i ."&sort=". $_SESSION["sort"] . (isset($_GET['min_price']) ? '&min_price=' . $_GET['min_price'] : '') . (isset($_GET['max_price']) ? '&max_price=' . $_GET['max_price'] : '') . "' class='nextpage " . ($page == $i ? 'active' : '') . "'>$i</a>";
                }

                if ($page < $pages) 
                {
                    echo "<a href='index.php?category=".(isset($_GET["category"]) ? $_GET["category"] : '') . "&page=". ($page + 1) ."&sort=". $_SESSION["sort"] . (isset($_GET['min_price']) ? '&min_price=' . $_GET['min_price'] : '') . (isset($_GET['max_price']) ? '&max_price=' . $_GET['max_price'] : '') . "' class='nextpage'>></a>";
                    echo "<a href='index.php?category=".(isset($_GET["category"]) ? $_GET["category"] : '') ."&page=". $pages ."&sort=". $_SESSION["sort"] . (isset($_GET['min_price']) ? '&min_price=' . $_GET['min_price'] : '') . (isset($_GET['max_price']) ? '&max_price=' . $_GET['max_price'] : '') . "' class='nextpage'>>></a>";
                }  
            ?>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>