<?php 
session_start();

//if login  session is not set this page is not accessible and reroutes user to the login page

if(!isset($_SESSION['userun'])){ 
    header("Location: index.php?error=notloggedin");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/journal/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body id="backround">
<header class="bg-dark text-light">
<nav class="">
    <div class="main-list">
        <h2>
            Saha Ramdanak
        </h2>
        <ul class="navlist">
            <li> <a href="">Home</a></li>            
            <li> <a href="">About</a></li>            
            <li> <a href="">Products</a></li>            
            <li> <a href="">Contact</a></li>            
        </ul>
    </div>
    <ul class="navlist">
        <?php

        if(isset($_SESSION["userun"]))
        {
            $profileurl = $_SESSION['userun'];
            ?>

        <li><a href="#"><?php echo $_SESSION['userun'] ?> </a></li>
        <li><a href="logout.php" class="logio-btn">Logout</a></li>

        <?php
        }

        else{

            ?>
            <li><a href="#">Sing Up </a></li>
        <li><a href="index.php" class="logio-btn">Login</a></li>
        <?php
        }
        ?>
    </ul>
    
</nav>
</header>
</body>
</html>