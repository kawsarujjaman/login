<?php
require_once("header.php");
require_once("config.php");

?>

<?php
if(isset($_COOKIE["currentUser"])){
    header ("location.prifile.php");
}

?>



    <div class="container">
    <div class="login-form text-center">
         <h5>Login here</h5>
        <form action="login_core.php" method="POST">
            <input class="form-control" type="text" name="user_email" placeholder="User Email" >
            <input  type="hidden" name="user_name" placeholder="User Name" >
            <input class="form-control" type="password" name="user_pwd" placeholder="Password">
            <input class="btn btn-secondary mb-3" type="submit" name="user_login" value="Login">
    
        </form>
        <?php
if(isset($_REQUEST["wrongInfo"])){
    echo '<b style="color:red"> User name or Password Wrong!</b>';
}else{
    echo mysqli_error($connect);
}

?>
        </div>
    </div>



<?php
require_once("footer.php");
?>
