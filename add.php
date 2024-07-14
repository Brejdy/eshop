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

    $prod_id = $_POST["prod_id"];
    $vel = $_POST["prod_velikost"];
    $mnoz = $_POST["prod_mnozstvi"];

    $result = mysqli_query($conn, "SELECT * FROM produkty WHERE id = '$prod_id'");
    $allRows = $result->fetch_assoc();

    if ($vel == 'S') {
        $max = $allRows["s"];
    } elseif ($vel == 'M') {
        $max = $allRwos["m"];
    } elseif ($vel == "L") {
        $max = $allRows["l"];
    } elseif ($vel == "XL") {
        $max = $allRows["xl"];
    } elseif ($vel == "UNI") {
        $max = $allRows["uni"];
    } elseif ($vel == 38) {
        $max = $allRows["38"];
    } elseif ($vel == 39) {
        $max = $allRows["39"];
    } elseif ($vel == 40) {
        $max = $allRows["40"];
    } elseif ($vel == 41) {
        $max = $allRows["41"];
    } elseif ($vel == 42) {
        $max = $allRows["42"];
    } elseif ($vel == 43) {
        $max = $allRows["43"];
    } elseif ($vel == 44) {
        $max = $allRows["44"];
    } elseif ($vel == 45) {
        $max = $allRows["45"];
    } elseif ($vel == 46) {
        $max = $allRows["46"];
    } elseif ($vel == 47) {
        $max = $allRows["47"];
    }

    if ($mnoz < $max) {
        $mnoz += 1;
    }

    $rows = $conn->query("UPDATE kosik SET prod_mnozstvi = $mnoz WHERE prod_id = '$prod_id' AND user_id = '$user' AND prod_velikost = '$vel'");

    $prevurl = $_SESSION['prevurl'];
    header("location: ". $prevurl);