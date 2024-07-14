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

    $rows = $conn->query("DELETE FROM kosik WHERE prod_id = '$delete' AND user_id = '$user' AND prod_velikost = '$vel'");

    $prevurl = $_SESSION['prevurl'];
    header("location: ". $prevurl);