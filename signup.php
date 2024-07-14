<?php
session_start();

include("dbaccess.php");

$uzivatel = $_POST["username"];
$heslo = $_POST["password"];
$email = $_POST["email"];

$password = password_hash($heslo, PASSWORD_DEFAULT);

$result = mysqli_query($conn, "SELECT * FROM users WHERE email LIKE '$email'");
$rows = mysqli_num_rows($result);

$resultName = mysqli_query($conn, "SELECT * FROM users WHERE username LIKE '$uzivatel'");
$rowsName = mysqli_num_rows($resultName);

$prevurl = $_SESSION['prevurl'];

if ($rows != 0) {
    $text = "Tento email je již používán jiným uživatelem.";
    header("location: $prevurl?message=" . urlencode($text));
} else if ($rowsName != 0) {
    $text = "Toto uživatelské jméno je již zabrané.";
    header("location: $prevurl?message=" . urlencode($text));
} else {
    $text = "Registrace úspěšná.";
    mysqli_query($conn, "INSERT INTO users(username,password,email) VALUES('$uzivatel','$password','$email');");

    $guest = $conn->query("SELECT * FROM kosik WHERE user_id = '$user_id'");
    $allRows = $guest->fetch_all(MYSQLI_ASSOC);

    $sql = "SELECT * FROM users WHERE username = '$uzivatel'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $hash = $row["password"];

    if (password_verify("$heslo", "$hash")) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id'];
        $user = $_SESSION['id'];
    }

    foreach ($allRows as $item) {
        $guest_id = $item['user_id'];
        $conn->query("UPDATE kosik SET user_id = $user WHERE user_id = $guest_id");
    }
    header("location: $prevurl?message=" . urlencode($text));
}
