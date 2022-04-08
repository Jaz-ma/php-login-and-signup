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

// PDO QUERY

$stmt = $pdo ->prepare('SELECT * FROM info');
$stmt ->execute();

$recipes= $stmt->fetchAll();

foreach ($recipes as $recipe) {
    if($username ==$recipe['username'] && $psswd==$recipe['psswrd'] ){
        $_SESSION['userun'] = $recipe['username'];
        header("Location: main.php" );
        exit();
    }
}

    $_SESSION["error"] = 'Username Or Password Incorrect';
    header("location: index.php"); //send user back to the login page.
    





