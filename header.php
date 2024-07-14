<?php   
include("dbaccess.php"); 
session_start();
$_SESSION['prevurl'] = $_SERVER['REQUEST_URI'];

if (isset($_SESSION['id'])) {
    $user_id = $_SESSION["id"];
}
else {
    $sessionid = session_id();
    $user_id = -intval($sessionid);
}

$rows = mysqli_query($conn, "SELECT * FROM kosik WHERE user_id = '$user_id'");
$count = mysqli_num_rows($rows);
$cat = isset($_GET["category"]) ? $_GET["category"] : '';
?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <title>Cyklo Obchod</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="menu-btn">
                <button id="menu-btn" onclick="openNav()">☰</button>
            </div>
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <div id="header-item-mobile">
                        <div class="search-mobile">
                            <form action="search.php" method="GET">
                                <input type="text" class="search-field" name="hledani" placeholder="Hledat...">
                                <br>
                                <button type="submit" class="search-btn" value="Hledat">Hledat</button>
                            </form>
                        </div>
                        <?php 
                            if (isset($_SESSION["id"]) && isset($_SESSION["username"])) : ?>
                        <?php    
                            $username = $_SESSION["username"]; 
                        
                            $sqlHeader = "SELECT * FROM users WHERE username LIKE '$username'";
                            $result = mysqli_query($conn, $sqlHeader);
                        ?>
                        <div class="user-log">
                            <a href="user.php" class="dropbtn"><?php echo $username ?></a>
                        </div>
                        <div class="user-log">
                            <a class="dropbtn" href="logout.php">Log-out</a>
                        </div>
                        <hr style="color: white;">
                        <?php else : ?>
                        <div class="drop-mobile">
                            <button onclick="Accordion('accordion')" class="dropbtn">Log-in
                                <?php if (isset($_SESSION["message"])) 
                        {
                            echo '<script>alert("'. $_SESSION["message"] .'");</script>';
                            unset($_SESSION["message"]);
                        } ?>
                            </button>
                            <div id="accordion" class="accordion">
                                <form action="login.php" method="post">
                                    <ul>
                                        <li>Uživatelské jméno:</li>
                                        <li><input type='text' id='usrnm1log' name='username'
                                                placeholder='Uživatelské jméno'>
                                        </li>
                                        <li>Heslo:</li>
                                        <li>
                                            <input type='password' id='passw1log' name='password' placeholder='Heslo'>
                                        </li>
                                        <div class="submitbtn">
                                            <li><input type='submit' class="btn" name='login' value='Login'></li>
                                        </div>
                                    </ul>
                                    <a href="resethesla.php" id="zap-heslo">Zapomenuté heslo</a>
                                </form>
                            </div>
                        </div>
                        <div class="drop-mobile">
                            <button onclick="Accordion('accordion1')" class="dropbtn">Registrace</button>
                            <div id="accordion1" class="accordion">
                                <form action="signup.php" method="post">
                                    <ul>
                                        <li>Email:</li>
                                        <li><input type='email' id='email' name='email' placeholder='Email' required>
                                        </li>
                                        <li>Uživatelské jméno:</li>
                                        <li><input type='text' id='usrnm1reg' name='username'
                                                placeholder='Uživatelské jméno' required></li>
                                        <li>Heslo:</li>
                                        <li><input type='password' id='passw1reg' name='password' placeholder='Heslo'
                                                required>
                                        </li>
                                        <div class="submitbtn">
                                            <li><input type='submit' class="btn" name='signup' value='Registrace'></li>
                                        </div>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <hr style="color: white;">
                        <?php endif; ?>
                    </div>
                    <div class="sidebar-mobile">    
                    </div>
                </div>
            </div>
            <a class="header-logo" href="index.php">CykloObchod</a>
            <div id="header-item">
                <div class="search">
                    <form action="search.php" method="GET">
                        <input type="text" class="search-field" name="hledani" placeholder="Hledat...">
                        <button type="submit" class="search-btn" value="Hledat">Hledat</button>
                    </form>
                </div>
                <a href="kosik.php">Košík (<?php echo $count; ?>)</a>
                <?php 
                if (isset($_SESSION["id"]) && isset($_SESSION["username"])) : ?>
                <?php    
                $username = $_SESSION["username"]; 
            
                $sqlHeader = "SELECT * FROM users WHERE username LIKE '$username'";
                $result = mysqli_query($conn, $sqlHeader);
                ?>
                <div class="drop">
                    <a href="user.php" class="dropbtn"><?php echo $username ?></a>
                </div>
                <div class="drop">
                    <a class="dropbtn" href="logout.php">Log-out</a>
                </div>
                <?php else : ?>
                <div class="drop">
                    <button onclick="myFunction()" class="dropbtn">Log-in
                        <?php if (isset($_SESSION["message"])) 
                        {
                            echo '<script>alert("'. $_SESSION["message"] .'");</script>';
                            unset($_SESSION["message"]);
                        } ?>
                    </button>
                    <div id="dropdown" class="dropdown-content">
                        <form action="login.php" method="post">
                            <ul>
                                <li>Uživatelské jméno:</li>
                                <li><input type='text' id='usrnm1log' name='username' placeholder='Uživatelské jméno'>
                                </li>
                                <li>Heslo:</li>
                                <li>
                                    <input type='password' id='passw1log' name='password' placeholder='Heslo'>
                                </li>
                                <div class="submitbtn">
                                    <li><input type='submit' class="btn" name='login' value='Login'></li>
                                </div>
                            </ul>
                            <a href="resethesla.php">Zapomenuté heslo</a>
                        </form>
                    </div>
                </div>
                <div class="drop">
                    <button onclick="myFunction1()" class="dropbtn">Registrace</button>
                    <div id="dropdown1" class="dropdown-content">
                        <form action="signup.php" method="post">
                            <ul>
                                <li>Email:</li>
                                <li><input type='email' id='email' name='email' placeholder='Email' required></li>
                                <li>Uživatelské jméno:</li>
                                <li><input type='text' id='usrnm1reg' name='username' placeholder='Uživatelské jméno'
                                        required></li>
                                <li>Heslo:</li>
                                <li><input type='password' id='passw1reg' name='password' placeholder='Heslo' required>
                                </li>
                                <div class="submitbtn">
                                    <li><input type='submit' class="btn" name='signup' value='Registrace'></li>
                                </div>
                            </ul>
                        </form>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>