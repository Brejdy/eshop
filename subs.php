<?php 
    session_start();

    include("dbaccess.php");

    if(isset($_SESSION["id"]))
    {
        $user = $_SESSION["id"];
    }
    else
    {
        $sessionid = session_id();
        $user = -intval($sessionid);
    }
    $delete = $_POST["prod_id"];
    $vel = $_POST["prod_velikost"];
    $mnoz = $_POST["prod_mnozstvi"];

    if ($mnoz > 1) {
        $mnoz -= 1;
    }
   

    $rows = $conn->query("UPDATE kosik SET prod_mnozstvi = '$mnoz' WHERE prod_id = '$delete' AND user_id = '$user' AND prod_velikost = '$vel'");

    $prevurl = $_SESSION['prevurl'];
    header("location: ". $prevurl);