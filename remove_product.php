<?php 
include("dbaccess.php");
session_start();

$prevurl = $_SESSION["prevurl"];

$id = $_POST["id"];

$conn->query("DELETE FROM produkty WHERE id = '$id'");

$_SESSION['message'] = 'Produkt odebrán.';
       header("location: ".$prevurl);
