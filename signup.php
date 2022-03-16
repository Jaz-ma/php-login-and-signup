<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'userinfo';
//Post Input
$username = $_POST['username'];
$psswd = $_POST['password'];

// Set DSN

$dsn ='mysql:host='.$host.';dbname='.$dbname.';charset=utf8';

// Create a PDO instance 

$pdo = new PDO($dsn,$user,$password);


$stmt2 = $pdo ->prepare("SELECT * FROM info");
$stmt2 ->execute();

$recipes= $stmt2->fetchAll();


foreach($recipes as $recipe){
if($recipe['username'] == $username){
    $_SESSION['usernametaken'] ='username is taken';
        header("location: signuppage.php");
    die();
}

}


$stmt = $pdo ->prepare("INSERT INTO info (username ,psswrd) VALUES(:username , :psswrd)");
$successornot =$stmt ->execute(['username' => $username , 'psswrd' => $psswd]);

if($successornot){
    header("location: signuppage.php");
    $_SESSION['usernameadded']= 'user added';
}






?>