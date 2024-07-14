<?php include("header.php"); ?>
<?php 
    $rows = $conn->query("SELECT * FROM kosik WHERE user_id = '$user_id'");
    $allRows = $rows->fetch_all(MYSQLI_ASSOC);
    $num_rows = mysqli_num_rows( $rows );
?>
<div class="container-kosik">
    <div class="kosik">
        <?php foreach($rows as $row): ?>
        <?php $prod_id = $row["prod_id"]; ?>
        <div class="kosik-item">
            <div class="kosik-obr">
                <img src="obrazky/<?php echo $row["prod_obr"]; ?>">
            </div>
            <div class="kosik-popis">
                <input type="hidden" name="prod_id" value="<?php echo $row["prod_id"]; ?>">
                <input type="hidden" name="prod_velikost" value="<?php echo $row["prod_velikost"]; ?>">
                <h1 id="nazev"><a href="single.php?id=<?php echo $row["prod_id"]; ?>"><?php echo $row["prod_jmeno"]; ?></a></h1>
                <h1 id="velikost">Velikost: <?php echo $row["prod_velikost"]; ?></h1>
                <h1 id="cena">Cena: <?php echo $row["prod_cena"]; ?> CZK</h1>
            </div>
            <div class="kosik-quant">
                <h1>Počet kusů: <?php echo $row["prod_mnozstvi"]; ?></h1>
                <div class="mnoz-btn">
                    <form method="post" action="add.php">
                        <input type="hidden" name="prod_id" value="<?php echo $row["prod_id"]; ?>">
                        <input type="hidden" name="prod_velikost" value="<?php echo $row["prod_velikost"]; ?>">
                        <input type="hidden" name="user_id" value="<?php echo $row["user_id"]; ?>">
                        <input type="hidden" name="prod_mnozstvi" value="<?php echo $row["prod_mnozstvi"]; ?>">
                        <button type="submit" class="kosik-mnoz-uprava" value="+">+</button>
                    </form>
                    <form method="post" action="subs.php">
                        <input type="hidden" name="prod_id" value="<?php echo $row["prod_id"]; ?>">
                        <input type="hidden" name="prod_velikost" value="<?php echo $row["prod_velikost"]; ?>">
                        <input type="hidden" name="user_id" value="<?php echo $row["user_id"]; ?>">
                        <input type="hidden" name="prod_mnozstvi" value="<?php echo $row["prod_mnozstvi"]; ?>">
                        <button type="submit" class="kosik-mnoz-uprava" value="-">-</button>
                    </form>
                </div>
                <form method="post" action="delete.php">
                    <input type="hidden" name="prod_id" value="<?php echo $row["prod_id"]; ?>">
                    <input type="hidden" name="prod_velikost" value="<?php echo $row["prod_velikost"]; ?>">
                    <input type="hidden" name="user_id" value="<?php echo $row["user_id"]; ?>">
                    <button type="submit" class="kosik-bin"><img src="obrazky/trash-can-10416.png"></button>
                </form>

            </div>
        </div>
        <?php endforeach; ?>
        <form action="koupit.php" method="post">
            <div class="kosik-item-final">
                <?php 
                $celkem = 0;
                for($i=0; $i < count($allRows); ++$i)
                { 
                    if (isset($allRows[$i]["prod_cena"]) && isset($allRows[$i]["prod_mnozstvi"])) 
                    {
                        $celkem += $allRows[$i]["prod_cena"] * $allRows[$i]["prod_mnozstvi"];
                    }
                }
                ?>
                <h1>Cena celkem: <?php echo $celkem; ?> CZK</h1>
                <input type="hidden" id="disable" value="<?php echo $num_rows; ?>">
                <input type="hidden" name="koupit" value="<?php echo $celkem; ?>">
                <button type="submit" id="koupit" class="koupit">Přejít k objednávce</button>
            </div>
        </form>
    </div>
</div>
<script>
    var rows = parseInt(document.getElementById("disable").value);
    if(rows === 0)
    {
        document.getElementById("koupit").disabled = true;
    }
</script>
<?php include("footer.php"); ?>