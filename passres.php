<?php
include("dbaccess.php");

$mail = $_POST["email"];
$pass1 = $_POST["respass"];
$pass2 = $_POST["respass1"];

$result = mysqli_query($conn,"SELECT * FROM users WHERE email = '$mail'");
$rows = mysqli_num_rows($result);

if ($rows == 0) {
    $text = "email není veden u žádného uživatele";
    header("location: resethesla.php?message=" . urlencode($text));
} else {
    if ($pass1 != $pass2) {
        $text = "Hesla se neshodují!";
        header("location: resethesla.php?message=" . urlencode($text));
    } else {
        $pass3 = password_hash($pass1, PASSWORD_DEFAULT);
        mysqli_query($conn,"UPDATE users SET password = '$pass3' WHERE email = '$mail'");
        $text = "Heslo resetováno.";
        header("location: resethesla.php?message=" . urlencode($text));
    }
    
}
