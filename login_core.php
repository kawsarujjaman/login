<?php
require_once("config.php");
?>

<?php

//User Input Data
$user_name= $_REQUEST["user_name"];
$user_email= $_REQUEST["user_email"];
$user_pwd= $_REQUEST["user_pwd"];

$createAuth = md5(sha1($user_email.$user_pwd));


//Select all database data
$getQuery = "SELECT * FROM my_users WHERE auth='$createAuth' ";

$runGetQuery= mysqli_query($connect, $getQuery);

$userCount=mysqli_num_rows($runGetQuery);


if($runGetQuery==true){
    if($userCount===1){

    setcookie("currentUser", "$createAuth", time()+(86400*180)); //We sec set cookie $userInput_email or $user_name
    header("location:profile.php");
}else{
   header("location:login.php?wrongInfo");


}

}








/*
$user_email = "kawsar";
$user_pwd = "ka123" ; //Problem here but can't identify
*/


echo "<br>";
/*
if($userInput_email===$user_email && $userInput_pwd===$user_pwd){
    setcookie("currentUser", "$userInput_email", time()+(86400*7)); //We sec set cookie $userInput_email or $user_name
    header("location:profile.php");
}else{
    header("location:login.php?wrongInfo");


}

*/
?>