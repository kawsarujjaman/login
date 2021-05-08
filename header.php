<?php
session_start();
require_once("config.php");

if(isset($_REQUEST["currentUser"])){
    $currentAuth= $_COOKIE["currentUser"];
    $checkDBAuth= "SELECT * FROM my_users WHERE auth= '$currentAuth' ";
    $runCheckAuth= mysqli_query($connect, $checkDBAuth);

    if(mysqli_fetch_array($runCheckAuth)==0){
        setcookie("currentUser", "" , time()-(865400*50));
        header("location:login.php");
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php login registration profile</title>
     <!-- Css link -->
     <link rel="stylesheet" href="style.css" type="text/css">
    <!-- Bootstrap cdn link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Jquery CDN Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>

<?php
require_once("config.php");
?>

 

    <div class="container">
        <div class="header-container">
            <div class="header-content text-center">
                <h1>Welcome to my Website</h1>
            </div>

            <nav class="text-center">
                <ul class="">                    
                        <a href="index.php" > Home</a>                
                   

                   
                        <?php
                            if(isset($_COOKIE["currentUser"])){
                                echo '<a href="profile.php" > Profile </a>';
                                }
                            ?>
                   
                 
                         <?php
                            if(!isset($_COOKIE["currentUser"])){
                                    echo '<a href="login.php"> Login </a>';
                               }else{
                                    echo '<a href="logout.php" > Logout </a>';
                                }
                            ?>
                         <?php
                            if(!isset($_COOKIE["currentUser"])){
                                echo '<a href="signup.php"> Signup </a>';
                               }
                                   
                               
                            ?>

                  
                   
                </ul>
            </nav>
        </div>

        <br> <br> 
    
    </div>


