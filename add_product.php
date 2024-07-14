<?php 
include("dbaccess.php");
session_start();

$prevurl = $_SESSION["prevurl"];

$jmeno = $_POST["jmeno"];
$obrazek = $_POST["obrazek"];
$cena = $_POST["cena"];
$popis = $_POST["popis"];
$kat = $_POST["kategorie"];
$subkat = $_POST["subkategorie"];
$kod = $_POST["kod"];
$barva = $_POST["barva"];
$znacka = $_POST["znacka"];
$vel_S = (!empty($_POST["vel_S"]) ? $_POST["vel_S"] : 0);
$vel_M = (!empty($_POST["vel_M"]) ? $_POST["vel_M"] : 0);
$vel_L = (!empty($_POST["vel_L"]) ? $_POST["vel_L"] : 0);
$vel_XL = (!empty($_POST["vel_XL"]) ? $_POST["vel_XL"] : 0);
$uni = (!empty($_POST["UNI"]) ? $_POST["UNI"] : 0);
$v38 = (!empty($_POST["38"]) ? $_POST["38"] : 0);
$v39 = (!empty($_POST["39"]) ? $_POST["39"] : 0);
$v40 = (!empty($_POST["40"]) ? $_POST["40"] : 0);
$v41 = (!empty($_POST["41"]) ? $_POST["41"] : 0);
$v42 = (!empty($_POST["42"]) ? $_POST["42"] : 0);
$v43 = (!empty($_POST["43"]) ? $_POST["43"] : 0);
$v44 = (!empty($_POST["44"]) ? $_POST["44"] : 0);
$v45 = (!empty($_POST["45"]) ? $_POST["45"] : 0);
$v46 = (!empty($_POST["46"]) ? $_POST["46"] : 0);
$v47 = (!empty($_POST["47"]) ? $_POST["47"] : 0);

$conn->query("INSERT INTO produkty(jmeno, obrazek, cena, popis, kategorie, subkategorie, kod, barva, znacka, s, m, l, xl, uni, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`) VALUES ('$jmeno', '$obrazek', $cena, '$popis', '$kat', '$subkat', '$kod', '$barva', '$znacka', $vel_S, $vel_M, $vel_L, $vel_XL, $uni, $v38, $v39, $v40, $v41, $v42, $v43, $v44, $v45, $v46, $v47)");


$_SESSION['message'] = 'Produkt přidán.';
       header("location: user.php");
