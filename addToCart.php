<?php 
session_start();
include("dbaccess.php");

$prod_id = $_POST["prod_id"];
$prod_jmeno = $_POST["prod_jmeno"];
$prod_obr = $_POST["prod_obr"];
$prod_cena = $_POST["prod_cena"];
$prod_mnozstvi = $_POST["prod_mnozstvi"];
$prod_velikost = $_POST["prod_velikost"];
$prod_kod = $_POST["prod_kod"];
$user_id = $_POST["user_id"];

$result = mysqli_query($conn,"SELECT * FROM kosik WHERE user_id = '$user_id' AND prod_id = '$prod_id' AND prod_velikost = '$prod_velikost'");

if (mysqli_num_rows($result) === 1) 
{
    $old = mysqli_fetch_assoc($result)["prod_mnozstvi"];
    $value = $prod_mnozstvi + $old;
    mysqli_query($conn,"UPDATE kosik SET prod_mnozstvi = '$value' WHERE user_id = '$user_id' AND prod_id = $prod_id AND prod_velikost = '$prod_velikost'");
} 
else 
{
    mysqli_query($conn, "INSERT INTO kosik(prod_id, prod_jmeno, prod_obr, prod_cena, prod_kod, prod_mnozstvi, prod_velikost, user_id) 
                               VALUES ('$prod_id', '$prod_jmeno', '$prod_obr', '$prod_cena', '$prod_kod', '$prod_mnozstvi', '$prod_velikost', '$user_id')");
}

$prevurl = $_SESSION['prevurl'];
header("location: ".$prevurl);