<?php
$dbHost= "localhost";
$bdUser= "testsite";
$bdPassword= "testsite@123";
$dbName="testsite";

$connect= mysqli_connect($dbHost,$bdUser, $bdPassword, $dbName);
if($connect==false){
    echo " <h1> Error Establish Database connection  !!</h1> ";
    }
?>