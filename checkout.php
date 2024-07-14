<?php 
include("dbaccess.php");
session_start();
if (isset($_SESSION['id'])) {
    $user_id = $_SESSION["id"];
}
else {
    $sessionid = session_id();
    $user_id = -intval($sessionid);
}
$jmeno = $_POST["jmeno"];
$prijmeni = $_POST["prijmeni"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$ulice = $_POST["ulice"];
$mesto = $_POST["mesto"];
$psc = $_POST["psc"];
$stat = $_POST["stat"];
$firma = $_POST["firma"];
$ico = $_POST["ico"];
$dic = $_POST["dic"];
$jmenoDod = $_POST["jmeno-dodaci"];
$prijmeniDod = $_POST["prijmeni-dodaci"];
$uliceDod = $_POST["ulice-dodaci"];
$mestoDod = $_POST["mesto-dodaci"];
$pscDod = $_POST["psc-dodaci"];
$celkem = $_POST["celkem"];
$pay = $_POST["pay"];
$doruc = $_POST["doruc"];

$product = $conn->query("SELECT * FROM kosik WHERE user_id = $user_id");


if (isset($_POST["firmaCheck"]) && !isset($_POST["fakturaCheck"])) {
    $objednavka = $conn->query("INSERT INTO objednavky (user_id, cena, jmeno, prijmeni, email, tel, ulice, mesto, psc, firma, ico, dic, platba, doruc) VALUES ('$user_id', '$celkem', '$jmeno', '$prijmeni', '$email', '$tel', '$ulice', '$mesto', '$psc', '$firma', '$ico', '$dic', '$pay', '$doruc')");
}
else if (isset($_POST["fakturaCheck"]) && !isset($_POST["firmaCheck"])) {
    $objednavka = $conn->query("INSERT INTO objednavky (user_id, cena, jmeno, prijmeni, email, tel, ulice, mesto, psc, jmenoDod, prijmeniDod, uliceDod, mestoDod, pscDod, platba, doruc) VALUES ('$user_id', '$celkem', '$jmeno', '$prijmeni', '$email', '$tel', '$ulice', '$mesto', '$psc', '$jemnoDod', '$prijmeniDod', '$uliceDod', '$mestoDod', '$pscDod', '$pay', '$doruc')");
}
else if (isset($_POST["firmaCheck"]) && isset($_POST["fakturaCheck"])) {
    $objednavka = $conn->query("INSERT INTO objednavky (user_id, cena, jmeno, prijmeni, email, tel, ulice, mesto, psc, firma, ico, dic, jmenoDod, prijmeniDod, uliceDod, mestoDod, pscDod, platba, doruc) VALUES ('$user_id', '$celkem', '$jmeno', '$prijmeni', '$email', '$tel', '$ulice', '$mesto', '$psc', '$firma', '$ico', '$dic', '$jemnoDod', '$prijmeniDod', '$uliceDod', '$mestoDod', '$pscDod', '$pay', '$doruc')");
}
else {
    $objednavka = $conn->query("INSERT INTO objednavky (user_id, cena, jmeno, prijmeni, email, tel, ulice, mesto, psc, platba, doruc) VALUES ('$user_id', '$celkem', '$jmeno', '$prijmeni', '$email', '$tel', '$ulice', '$mesto', '$psc', '$pay', '$doruc')");
}
$lastOrder = $conn->insert_id;

foreach ($product as $prod) {
    $prods = $conn->query("SELECT * FROM produkty WHERE id = $prod[prod_id]")->fetch_assoc();
    $insert = $conn->query("INSERT INTO obj_prod (obj_id, kod, velikost, mnozstvi, cena, nazev) VALUES ($lastOrder, '{$prod['prod_kod']}', '{$prod['prod_velikost']}', '{$prod['prod_mnozstvi']}', '{$prod['prod_cena']}', '{$prod["prod_jmeno"]}')");

    switch ($prod["prod_velikost"]) {
        case 'S':
            $conn->query("UPDATE produkty SET s = $prods[s] - $prod[prod_mnozstvi] WHERE id = $prod[prod_id]");
            break;
        case 'M':
            $conn->query("UPDATE produkty SET m = $prods[m] - $prod[prod_mnozstvi] WHERE id = $prod[prod_id]");
            break;
        case 'L':
            $conn->query("UPDATE produkty SET l = $prods[l] - $prod[prod_mnozstvi] WHERE id = $prod[prod_id]");
            break;
        case 'XL':
            $conn->query("UPDATE produkty SET xl = $prods[xl] - $prod[prod_mnozstvi] WHERE id = $prod[prod_id]");
            break;
        case 'UNI':
            $conn->query("UPDATE produkty SET uni = $prods[uni] - $prod[prod_mnozstvi] WHERE id = $prod[prod_id]");
            break;
        case '38':
            $conn->query("UPDATE produkty SET `38` = $prods[38] - $prod[prod_mnozstvi] WHERE id = $prod[prod_id]");
            break;
        case '39':
            $conn->query("UPDATE produkty SET `39` = $prods[39] - $prod[prod_mnozstvi] WHERE id = $prod[prod_id]");
            break;
        case '40':
            $conn->query("UPDATE produkty SET `40` = $prods[40] - $prod[prod_mnozstvi] WHERE id = $prod[prod_id]");
            break;
        case '41':
            $conn->query("UPDATE produkty SET `41` = $prods[41] - $prod[prod_mnozstvi] WHERE id = $prod[prod_id]");
            break;
        case '42':
            $conn->query("UPDATE produkty SET `42` = $prods[42] - $prod[prod_mnozstvi] WHERE id = $prod[prod_id]");
            break;
        case '43':
            $conn->query("UPDATE produkty SET `43` = $prods[43] - $prod[prod_mnozstvi] WHERE id = $prod[prod_id]");
            break;
        case '44':
            $conn->query("UPDATE produkty SET `44` = $prods[44] - $prod[prod_mnozstvi] WHERE id = $prod[prod_id]");
            break;
        case '45':
            $conn->query("UPDATE produkty SET `45` = $prods[45] - $prod[prod_mnozstvi] WHERE id = $prod[prod_id]");
            break;
        case '46':
            $conn->query("UPDATE produkty SET `46` = $prods[46] - $prod[prod_mnozstvi] WHERE id = $prod[prod_id]");
            break;
        case '47':
            $conn->query("UPDATE produkty SET `47` = $prods[47] - $prod[prod_mnozstvi] WHERE id = $prod[prod_id]");
            break;

    }
}

$conn->query("DELETE FROM kosik WHERE user_id = $user_id");

header("location: done.php?id=$lastOrder");
