<?php include("header.php"); ?>
<?php 
$lastOrder = $_GET["id"];
?>
<div class="checkout-container">
    <h1>Děkujeme za Vaši objednávku.</h1>
    <h2><a href="faktura.php?id=<?php echo $lastOrder; ?>" target="_blank">Vytisknout fakturu</a></h2>
</div>
<?php include("footer.php"); ?>