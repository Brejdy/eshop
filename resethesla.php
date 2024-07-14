<?php include("header.php"); ?>
<?php 
if(isset($_GET["message"])){
$text = $_GET['message'];
}
?>

<div class="container-kosik">
    <div class="container-passres">
        <div class="passres">
            <form method="post" action="passres.php" class="passresform">
                <div class="mail">
                    <h3>Prosím vložte email:</h3>                  
                    <input type="text" name="email" class="email" placeholder="priklad@mail.com">
                </div>
                <div class="mail">
                    <h3>Zadejte nové heslo:</h3>                    
                    <input type="password" name="respass" class="respass">                    
                    <h3>Potvrďte nové heslo:</h3>                    
                    <input type="password" name="respass1" class="respass">
                </div>
                <div class="message">
                <?php if (isset($_GET["message"])) {
                        echo $text;
                    } ?>
                </div>
                <div class="respassbutton">
                    <input type="submit" class="resspasssubmit" value="Resetovat heslo">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>