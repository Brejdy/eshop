<?php
$server="localhost";
$dbname="baka";
$user="root";
$password="";
$conn = mysqli_connect($server,$user,$password,$dbname);

if (!$conn) {
    echo "database connection problem";
}
?>