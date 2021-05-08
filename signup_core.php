<?php
include_once "config.php";



$user_name= htmlentities( $_REQUEST["user_name"]);
$f_name=   htmlentities($_REQUEST["f_name"]);
$l_name=   htmlentities($_REQUEST["l_name"]);
$user_email=   htmlentities($_REQUEST["user_email"]);
$user_pwd=  htmlentities( $_REQUEST["user_pwd"]);
$confirm_pwd=  htmlentities( $_REQUEST["confirm_pwd"]);

//Create Encrypted password
$encryptedPwd= md5(sha1($user_pwd));
$encryptedConfirmPwd= md5(sha1($confirm_pass));
//Create authentication token
$authToken= md5(sha1($user_email.$user_pwd));



$insertQuery= " INSERT INTO my_users ( `user_name`, `f_name`, `l_name`, `user_email`, `user_pwd`,`auth`, `userConfr_pwd` ) VALUES ('$user_name', '$f_name', '$l_name', '$user_email','$encryptedPwd','$authToken', '$encryptedConfirmPwd' ) ";
$runInsertQuery= mysqli_query($connect, $insertQuery);


if($runInsertQuery==true){
 header ("location: signup.php?signup_done=Registration Successful");
}

?>