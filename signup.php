<?php
require_once("header.php");
require_once("config.php");

?>


<div class="container">
    <div class="login-form text-center">
    <b style="color:green">
    <?php
 
    if(isset($_REQUEST["signup_done"])){
        echo $_REQUEST["signup_done"];
    }
    ?>
       </b>
       <br/>

        <form action="signup_core.php" method="post">
            <h5>Login here</h5>
        <div class="form-group ">        
        
            <input class="form-control" name="user_name" type="text" placeholder="Write User name here" value="$user_name">
            <input class="form-control" name="f_name" type="text" placeholder="Write First Name here">
            <input class="form-control" name="l_name" type="text" placeholder="Write Last Name here">
            <input class="form-control" name="user_email" type="email" placeholder="Write Email here">
            <input class="form-control" name="user_pwd" type="password" placeholder="Write Password here">
            <input class="form-control" name="confirm_pwd" type="password" placeholder="Confirm Password">
            <input class=" btn btn-info" name="signupBTN" type="submit" value="Sign up">


            </div>


        
        </form>
    </div>
</div>


<?php
require_once("footer.php");
?>
