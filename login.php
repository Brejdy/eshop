<?php
session_start();
include "dbaccess.php";

$sessionid = session_id();
$user_id = -intval($sessionid);

$guest = $conn->query("SELECT * FROM kosik WHERE user_id = '$user_id'");
$allRows = $guest->fetch_all(MYSQLI_ASSOC);

if (isset($_POST["username"]) && isset($_POST["password"])) 
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$prevurl = $_SESSION['prevurl'];

$username = validate($_POST["username"]);
$pass = validate($_POST["password"]);

if (empty($username)) 
{
    $_SESSION['message'] = 'Zadejte uživatelské jméno.';
       header("location: ".$prevurl);
    exit();
}
elseif (empty($pass)) 
{
    $_SESSION['message'] = 'Zadejte heslo.';
       header("location: ".$prevurl);
    exit();
}

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result)===1) 
{ 
    $row = mysqli_fetch_assoc($result);
    $hash = $row["password"];

    if (password_verify("$pass", "$hash")) 
    {
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id'];
        $user = $_SESSION['id'];

        foreach ($allRows as $item)
        {
            $guest_id = $item['user_id'];
            $conn->query("UPDATE kosik SET user_id = $user WHERE user_id = $guest_id");
        }

        header("location: ".$prevurl);
        exit();
    }
    else 
    {
       $_SESSION['message'] = 'Nesprávné heslo.';
       header("location: ".$prevurl);
    }
}
else 
{
    $_SESSION['message'] = 'Účet neexistuje.';
    header("location: ".$prevurl);
}
