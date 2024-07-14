<?php
include("header.php");

    $id = $_SESSION["id"];
    $user = $conn->query("SELECT * FROM users WHERE id = $id");
    $user_row = $user->fetch_assoc();
    ?>
<div class="container-c">

    <?php if ($id == 6) : ?>

    <div class="user-container">
        <div class="user-upper">
            <div class="user">
                <form action="add_product.php" method="POST">
                    <h2>Přidání produktu:</h2>
                    <hr>
                    <label>Jméno:</label>
                    <input type="text" name="jmeno">
                    <label>Obrázek:</label>
                    <input type="text" name="obrazek">
                    <label>Cena:</label>
                    <input type="number" name="cena">
                    <label>Popis:</label>
                    <input type="text" name="popis">
                    <label>Kategorie:</label>
                    <input type="text" name="kategorie">
                    <label>Subkategorie:</label>
                    <input type="text" name="subkategorie">
                    <label>Kód:</label>
                    <input type="text" name="kod">
                    <label>Barva:</label>
                    <input type="text" name="barva">
                    <label>Značka:</label>
                    <input type="text" name="znacka">
                    <label>Množství velikosti S:</label>
                    <input type="text" name="vel_S">
                    <label>Množství velikosti M:</label>
                    <input type="text" name="vel_M">
                    <label>Množství velikosti L:</label>
                    <input type="text" name="vel_L">
                    <label>Množství velikosti XL:</label>
                    <input type="text" name="vel_XL">
                    <label>Množství velikosti UNI:</label>
                    <input type="text" name="UNI">
                    <label>Množství velikosti 38:</label>
                    <input type="text" name="38">
                    <label>Množství velikosti 39:</label>
                    <input type="text" name="39">
                    <label>Množství velikosti 40:</label>
                    <input type="text" name="40">
                    <label>Množství velikosti 41:</label>
                    <input type="text" name="41">
                    <label>Množství velikosti 42:</label>
                    <input type="text" name="42">
                    <label>Množství velikosti 43:</label>
                    <input type="text" name="43">
                    <label>Množství velikosti 44:</label>
                    <input type="text" name="44">
                    <label>Množství velikosti 45:</label>
                    <input type="text" name="45">
                    <label>Množství velikosti 46:</label>
                    <input type="text" name="46">
                    <label>Množství velikosti 47:</label>
                    <input type="text" name="47">
                    <div class="user-btn">
                        <input type="submit" value="Přidat">
                    </div>
                </form>
            </div>

            <div class="user">
                <form action="remove_product.php" method="POST">
                    <h2>Smazat produkt:</h2>
                    <hr>
                    <label>ID produktu:</label>
                    <input type="text" name="id">
                    <div class="user-btn">
                        <input type="submit" value="Odstranit">
                    </div>
                </form>
            </div>
        </div>
        <div class="user-upper">
            <div class="user">
                <form action="upravit_mnozstvi.php" method="POST">
                    <h2>Upravit množství:</h2>
                    <hr>
                    <label>ID produktu:</label>
                    <input type="text" name="id">
                    <label>Velikost:</label>
                    <input type="text" name="vel">
                    <label>Množství:</label>
                    <input type="number" name="mnoz">
                    <div class="user-btn">
                        <input type="submit" value="Upravit">
                    </div>
                </form>
            </div>

            <div class="user">
                <h2>Faktury:</h2>
                <hr>
                <table>
                    <tr>
                        <th>Datum prodeje:</th>
                        <th>ID faktury:</th>
                        <th>ID uživatele:</th>
                        <th>Uhrazená částka:</th>
                        <th>Ke stažení:</th>
                    </tr>
                    <?php
                $faktury = $conn->query("SELECT * FROM objednavky");
                while ($row = $faktury->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row["datum"]; ?></td>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["user_id"]; ?></td>
                        <td><?php echo $row["cena"]; ?></td>
                        <td><a href="faktura.php?id=<?php echo $row["id"]; ?>">Faktura <?php echo $row["id"]; ?></a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
    <?php   
endif;
        
if(isset($_SESSION["id"]))
{
    $id = $_SESSION["id"];
    $user = $conn->query("SELECT * FROM users WHERE id = $id");
    $user_row = $user->fetch_assoc();
}
else $user_row = array("jmeno" => "", "prijmeni" => "", "email" => "", "tel" => "", "ulice" => "", "mesto" => "", "psc" => "");


if ($id != 6) : ?>
    <?php if (isset($_SESSION["message"])) 
        {
            echo '<script>alert("'. $_SESSION["message"] .'");</script>';
            unset($_SESSION["message"]);
        } ?>
    <div class="user-container">
        <div class="user-user">
            <form action="change_personal_info.php" method="POST">
                <h2>Změna osobních údajů:</h2>
                <hr>
                <label>Jméno:</label><BR>
                <input type="text" name="jmeno" value="<?php echo $user_row["jmeno"]; ?>"><BR><br>
                <label>Příjmení:</label><BR>
                <input type="text" name="prijmeni" value="<?php echo $user_row["prijmeni"]; ?>"><BR><br>
                <label>Telefon:</label><BR>
                <input type="number" name="telefon" value="<?php echo $user_row["tel"]; ?>"><BR><br>
                <label>Ulice:</label><BR>
                <input type="text" name="ulice" value="<?php echo $user_row["ulice"]; ?>"><BR><br>
                <label>Město:</label><BR>
                <input type="text" name="mesto" value="<?php echo $user_row["mesto"]; ?>"><BR><br>
                <label>PSČ:</label><BR>
                <input type="text" name="PSC" value="<?php echo $user_row["PSC"]; ?>"><BR><br>
                <div class="user-btn">
                    <input type="submit" value="Změnit osobní údaje">
                </div>
            </form>
        </div>
        <div class="user-user">
            <h2>Vaše faktury:</h2>
            <hr>
            <table>
                <tr>
                    <th>Datum prodeje:</th>
                    <th>ID faktury:</th>
                    <th>Uhrazená částka:</th>
                    <th>Ke stažení:</th>
                </tr>
                <?php
                $faktury = $conn->query("SELECT * FROM objednavky WHERE user_id = $id");
                while ($row = $faktury->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row["datum"]; ?></td>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["cena"]; ?></td>
                    <td><a href="faktura.php?id=<?php echo $row["id"]; ?>">Faktura <?php echo $row["id"]; ?></a></td>
                </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php include("footer.php"); ?>