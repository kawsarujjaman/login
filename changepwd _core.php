<?php
include_once "config.php";

$getCurrentUser= $_COOKIE["currentUser"];

$oldPwd= $_REQUEST["oldPwd"];
$newPwd= $_REQUEST["newPwd"];
$confirmPwd= $_REQUEST["confirmPwd"];

$checkOldPwd= "SELECT * FROM my_users WHERE auth= '$getCurrentUser' ";
$runNewQuery= mysqli_query($connect, $checkOldPwd);

if($runNewQuery==true){
    if(mysqli_num_rows($runNewQuery)===1){

        while($getCurrentUserData= mysqli_fetch_array($runNewQuery)){
            $userEmail= $getCurrentUserData["user_email"];
        }
    }
    
}

 $generateAuth =md5(sha1($userEmail.$oldPwd));

if($generateAuth==$getCurrentUser && $newPwd==$confirmPwd){
    $hasPwd = md5(sha1($confirmPwd));
    $newAuth= md5(sha1($userEmail.$newPwd));
   $updatePwd= "UPDATE my_users SET user_pwd= '$hasPwd', auth= '$newAuth'";
    $runUpdtQury= mysqli_query($connect, $updatePwd);
    if($runUpdtQury==true){
        setcookie("currentUser", " ", time()-(86400*7));
        setcookie("currentUser", "$newAuth", time()+(86400*180)); //We sec set cookie $userInput_email or $user_name
        header("location:profile.php");
    }



}else{
    header("location:changepwd.php?changed_pwd=Password did not match");
}

?>