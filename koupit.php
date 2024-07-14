<?php include("header.php"); ?>
<?php 

if(isset($_SESSION["id"]))
{
    $id = $_SESSION["id"];
    $user = $conn->query("SELECT * FROM users WHERE id = $id");
    $user_row = $user->fetch_assoc();
}
else $user_row = array("jmeno" => "", "prijmeni" => "", "email" => "", "tel" => "", "ulice" => "", "mesto" => "", "PSC" => "");
    $celkem = $_POST["koupit"]; 

    $rows = $conn->query("SELECT * FROM kosik WHERE user_id = '$user_id'");
    $allRows = $rows->fetch_all(MYSQLI_ASSOC);
?>
<div class="container-checkout">
    <div class="checkout">
        <div class="checkout-headline">
            <div class="udaje"><h2>Doručovací údaje</h2></div>
            <div id="rekap1" class="udaje"><h2>Rekapitulace objednávky</h2></div>
        </div>
        <div class="checkout-content">
            <form onsubmit="return validateForm()" method="post" action="checkout.php" class="checkout-form" id="checkout-form">
                <div class="info">
                    <div class="info-obal">
                        <div class="info-container">
                            <h3>Kontaktní informace:</h3>
                            <hr>
                            <label for="jmeno">Jméno:</label>
                            <br>
                            <input type="text" id="jmeno" name="jmeno" value="<?php echo $user_row["jmeno"]; ?>"required>
                            <br>
                            <label for="prijmeni">Příjmení:</label>
                            <br>
                            <input type="text" id="prijmeni"  name="prijmeni" value="<?php echo $user_row["prijmeni"]; ?>" required>
                            <br>
                            <label for="email">Email:</label>
                            <br>
                            <input type="email" id="email"  name="email" value="<?php echo $user_row["email"]; ?>" required>
                            <br>
                            <label for="tel">Telefon:</label>
                            <br>
                            <input type="text" id="tel"  name="tel" value="<?php echo $user_row["tel"]; ?>" required>
                            <br>
                            <input type="checkbox" id="firma" name="firmaCheck"> Fakturovat na firmu
                        </div>
                        <div class="info-container">
                            <h3>Fakturační a dodací adresa:</h3>
                            <hr>
                            <label for="ulice">Ulice a č.p.:</label>
                            <br>
                            <input type="text" id="ulice"  name="ulice" value="<?php echo $user_row["ulice"]; ?>" required>
                            <br>
                            <label for="mesto">Město:</label>
                            <br>
                            <input type="text" id="mesto"  name="mesto" value="<?php echo $user_row["mesto"]; ?>" required>
                            <br>
                            <label for="psc">PSČ:</label>
                            <br>
                            <input type="text" id="psc"  name="psc" value="<?php echo $user_row["PSC"]; ?>" required>
                            <br>
                            <label for="stat">Stát:</label>
                            <br>
                            <input type="text" id="stat"  name="stat" value="Česká Republika">
                            <br>
                            <input type="checkbox" id="faktura" name="fakturaCheck"> Odeslat na jinou adresu než se fakturuje
                        </div>
                    </div>
                    <div class="extra">
                        <div class="checked" id="firma-div">
                            <h3>Firemní údaje:</h3>
                            <hr>
                            <label for="firma">Název firmy:</label>
                            <br>
                            <input type="text" id="firma-checked" name="firma" >
                            <br>
                            <label for="ico">IČO:</label>
                            <br>
                            <input type="text" id="ico" name="ico" >
                            <br>
                            <label for="dic">DIČ:</label>
                            <br>
                            <input type="text" id="dic" name="dic" >
                        </div>
                        <div class="checked" id="faktura-div">
                            <h3>Dodací adresa:</h3>
                            <hr>
                            <label for="jmeno">Jméno:</label>
                            <br>
                            <input type="text" id="jmeno-dodaci" name="jmeno-dodaci" >
                            <br>
                            <label for="prijmeni">Příjmení:</label>
                            <br>
                            <input type="text" id="prijmeni-dodaci" name="prijmeni-dodaci" >
                            <br>
                            <label for="ulice">Ulice a č.p.:</label>
                            <br>
                            <input type="text" id="ulice-dodaci" name="ulice-dodaci" >
                            <br>
                            <label for="mesto">Město:</label>
                            <br>
                            <input type="text" id="mesto-dodaci" name="mesto-dodaci" >
                            <br>
                            <label for="psc">PSČ:</label>
                            <br>
                            <input type="text" id="psc-dodaci" name="psc-dodaci" >
                            <br>
                            <label for="stat">Stát:</label>
                            <br>
                            <input type="text" id="stat-dodaci"  name="stat" value="Česká Republika">
                        </div>
                    </div>
                </div>
                <div id="rekap2" class="udaje"><h2>Rekapitulace objednávky</h2></div>
                <div class="payment">
                    <div class="pay">
                        <table>
                            <tr>
                                <th>Název</th>
                                <th>Velikost</th>
                                <th>Množství</th>
                                <th>Cena</th>
                                <th>Dohromady</th>
                            </tr>
                        <?php foreach($allRows as $row) : ?>
                            <tr>
                                <td><?php echo $row["prod_jmeno"]; ?></td>
                                <td><?php echo $row["prod_velikost"]; ?></td>
                                <td><?php echo $row["prod_mnozstvi"]; ?></td>
                                <td><?php echo $row["prod_cena"]. " CZK"; ?></td>
                                <td><?php echo $row["prod_cena"]*$row["prod_mnozstvi"]. " CZK"; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <th>Celková cena:</th>
                            <th colspan="4"><?php echo $celkem. " CZK"; ?><input type="hidden" name="celkem" value="<?php echo $celkem; ?>"></th>
                        </tr>
                        </table>
                    </div>
                    <div class="pay">
                    <h3>Výběr doručení:</h3>
                        <hr>
                        <input type="radio" name="doruc" id="shop" value="Osobně na pobočce" onclick="check()"> Osobně na pobočce<br>
                        <input type="radio" name="doruc" id="ppl" value="PPL na adresu" onclick="check()"> PPL na adresu<br>
                        <input type="radio" name="doruc" id="zasilkovna" value="Zásilkovna na adresu" onclick="check()"> Zásilkovna na adresu<br>
                    </div>
                    <div class="pay">
                        <h3>Výběr platby:</h3>
                        <hr>
                        <input type="radio" name="pay" id="hotove" value="Hotově" disabled><label id="hotove-l" disabled>Hotově</label><br>
                        <input type="radio" name="pay" id="karta" value="Kartou"> <label>Kartou</label><br>
                        <input type="radio" name="pay" id="dobirka" vlaue="Dobírkou" disabled> <label id="dobirka-l" disabled>Dobírkou</label><br>
                    </div>
                    <div class="submit">
                        <input type="checkbox" id="podmGDPR"> Seznámil(a) jsem se s <a href="podminky.php">obchodními podmínkami</a> a s <a href="gdpr.php">ochranou osobních údajů</a>.
                        <br><br>
                        <input type="submit" class="submit-btn" id="submit-btn" value="Zaplatit a objednat">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
function validateForm(){
    var gdpr = document.getElementById("podmGDPR").checked;
    var doruc = document.getElementsByName("doruc");
    var pay = document.getElementsByName("pay");
    var firma = document.getElementsByName("firma").checked;
    var faktura = document.getElementsByName("faktura").checked;

    var dorucCheck = false;
    var payCheck = false;

    for (let i = 0; i < doruc.length; i++) {
        if (doruc[i].checked) {
            dorucCheck = true;
            break;
        }
    }

    for (let i = 0; i < pay.length; i++) {
        if (pay[i].checked) {
            payCheck = true;
            break;
        }
    }
    
    if (dorucCheck == false) {
        alert("Vyberte metodu doručení.");
        return false;     
    }
    if (payCheck == false) {
        alert("Vyberte metodu platby.");
        return false;
    }
    if (gdpr == false)
    {
        alert("Musíte souhlasit s obchodními podmínkami a ochranou osobních údajů.");
        return false;
    }
        
    return true;
}

//zablokování hotově při dopravě
function check(){
    var shop = document.getElementById("shop");
    var hotove = document.getElementById("hotove");
    var dobirka = document.getElementById("dobirka");
    var hotovel = document.getElementById("hotove-l");
    var dobirkal = document.getElementById("dobirka-l");

    if(shop.checked){
        hotove.disabled = false;
        hotovel.disabled = false;
        dobirka.disabled = true;
        dobirkal.disabled = true;
        if (dobirka.checked) {
            dobirka.checked = false;
        }
    }
    else{
        hotove.disabled = true;
        hotovel.disabled = true;
        dobirka.disabled = false;
        dobirkal.disabled = false;
        hotove.checked = false;
    }
}

//zobrazování divů checked
document.addEventListener('DOMContentLoaded', function() {
    var firmaCheckbox = document.getElementById('firma');
    var fakturaCheckbox = document.getElementById('faktura');
    var firmaDiv = document.getElementById('firma-div');
    var fakturaDiv = document.getElementById('faktura-div');

    firmaCheckbox.addEventListener('change', function() {
        if(this.checked){
            firmaDiv.style.display = 'block';
            document.getElementById("ico").required = true;
            document.getElementById("dic").required = true;
            document.getElementById("firma-checked").required = true;
        } 
        if(!this.checked){
            firmaDiv.style.display = 'none';
            document.getElementById("ico").required = false;
            document.getElementById("dic").required = false;
            document.getElementById("firma-checked").required = false;
        }
    });

    fakturaCheckbox.addEventListener('change', function() {
        if(this.checked){
            fakturaDiv.style.display = 'block';
            document.getElementById("jmeno-dodaci").required = true;
            document.getElementById("prijmeni-dodaci").required = true;
            document.getElementById("ulice-dodaci").required = true;
            document.getElementById("mesto-dodaci").required = true;
            document.getElementById("psc-dodaci").required = true;
        } 
        if(!this.checked){
            fakturaDiv.style.display = 'none';
            document.getElementById("jmeno-dodaci").required = false;
            document.getElementById("prijmeni-dodaci").required = false;
            document.getElementById("ulice-dodaci").required = false;
            document.getElementById("mesto-dodaci").required = false;
            document.getElementById("psc-dodaci").required = false;
        }
    });
});
</script>
<?php include("footer.php"); ?>