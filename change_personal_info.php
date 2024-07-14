<?php include("dbaccess.php");
session_start();
$id = $_SESSION["id"];

$prevurl = $_SESSION["prevurl"];

$jmeno = $_POST["jmeno"];
$prijmeni = $_POST["prijmeni"];
$tel = $_POST["telefon"];
$ulice = $_POST["ulice"];
$mesto = $_POST["mesto"];
$psc = $_POST["PSC"];

$row = $conn->query("UPDATE users SET jmeno='$jmeno', prijmeni='$prijmeni', tel=$tel, ulice='$ulice', mesto='$mesto', PSC='$psc' WHERE id = $id");

$_SESSION['message'] = 'Osobní údaje úspěšně změněny.';
       header("location: ".$prevurl);
