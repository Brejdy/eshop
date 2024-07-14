<?php
include("dbaccess.php");
session_start();

$prevurl = $_SESSION["prevurl"];

$id = $_POST["id"];
$vel = $_POST["vel"];
$mnoz = $_POST["mnoz"];

$all = $conn->query("SELECT * FROM produkty WHERE id = '$id'");
$alls = $all->fetch_Assoc();

switch ($vel) {
       case ('s'):
              $velikost = $alls["s"] + $mnoz;
              $conn->query("UPDATE produkty SET s = $velikost WHERE id = $id");
              break;
       case ('m'):
              $velikost = $alls["m"] + $mnoz;
              $conn->query("UPDATE produkty SET m = $velikost WHERE id = $id");
              break;
       case ('l'):
              $velikost = $alls["l"] + $mnoz;
              $conn->query("UPDATE produkty SET l = $velikost WHERE id = $id");
              break;
       case ('xl'):
              $velikost = $alls["xl"] + $mnoz;
              $conn->query("UPDATE produkty SET xl = $velikost WHERE id = $id");
              break;
       case ('uni'):
              $velikost = $alls["uni"] + $mnoz;
              $conn->query("UPDATE produkty SET uni = $velikost WHERE id = $id");
              break;
       case ('38'):
              $velikost = $alls["38"] + $mnoz;
              $conn->query("UPDATE produkty SET '38' = $velikost WHERE id = $id");
              break;
       case ('39'):
              $velikost = $alls["39"] + $mnoz;
              $conn->query("UPDATE produkty SET '39' = $velikost WHERE id = $id");
              break;
       case ('40'):
              $velikost = $alls["40"] + $mnoz;
              $conn->query("UPDATE produkty SET '40' = $velikost WHERE id = $id");
              break;
       case ('41'):
              $velikost = $alls["41"] + $mnoz;
              $conn->query("UPDATE produkty SET '41' = $velikost WHERE id = $id");
              break;
       case ('42'):
              $velikost = $alls["42"] + $mnoz;
              $conn->query("UPDATE produkty SET '42' = $velikost WHERE id = $id");
              break;
       case ('43'):
              $velikost = $alls["43"] + $mnoz;
              $conn->query("UPDATE produkty SET '43' = $velikost WHERE id = $id");
              break;
       case ('44'):
              $velikost = $alls["44"] + $mnoz;
              $conn->query("UPDATE produkty SET '44' = $velikost WHERE id = $id");
              break;
       case ('45'):
              $velikost = $alls["45"] + $mnoz;
              $conn->query("UPDATE produkty SET '45' = $velikost WHERE id = $id");
              break;
       case ('46'):
              $velikost = $alls["46"] + $mnoz;
              $conn->query("UPDATE produkty SET '46' = $velikost WHERE id = $id");
              break;
       case ('47'):
              $velikost = $alls["47"] + $mnoz;
              $conn->query("UPDATE produkty SET '47' = $velikost WHERE id = $id");
              break;
}

$_SESSION['message'] = 'Množství změněno.';
header("location: " . $prevurl);
