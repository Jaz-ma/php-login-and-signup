<?php 
        session_start();

        //if login  session is set this page  reroutes user to the main page

        if(isset($_SESSION['userun'])){ 
            header("Location: main.php");
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
    <title>login</title>
</head>
<body>



<div style='height : 100vh;' class="d-flex flex-column justify-content-center align-items-center bg-info ">
<?php
     if(isset($_SESSION["error"])){

    echo "<div class='text-warning my-3' >Username Or Password Incorrect</div>";
    }          
    ?>  

    <form class='d-flex flex-column' action="login.php" method="post">
        <label class="text-secondary my-1" for="username">Username</label>
        <input type="text" name ="username" required>
        <label class="text-secondary my-1" for="password">Password</label>
        <input type="password" name ="password" required>
        <button class="btn btn-primary mt-4" type="submit" name="submit">Log In</button>      
    </form>
    <p class="mt-4 ms-3">Don't have an account yet? Sign up 
    <a href="signuppage.php">Here</a>      
    </p>
</div>


    

</body>
</html>


<?php
    unset($_SESSION["error"]);
?>