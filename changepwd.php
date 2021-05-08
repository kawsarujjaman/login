<?php
require_once("header.php");
require_once("config.php");

?>


<div class="container">
    <div class="login-form text-center">
    <b style="color:red">
    <?php
 
    if(isset($_REQUEST["changed_pwd"])){
        echo $_REQUEST["changed_pwd"];
    }
    ?>
       </b>
       <br/>

        <form action="changepwd _core.php" method="post">
            <h5>Change Password</h5>
        <div class="form-group ">        
        
            <input class="form-control" name="oldPwd" type="password" placeholder=" Old Password" >
            <input class="form-control" name="newPwd" type="password" placeholder="New Password">
            <input class="form-control" name="confirmPwd" type="password" placeholder="Confirm Password">
            
            <input class=" btn btn-info" name="signupBTN" type="submit" value=" Change Password">


            </div>


        
        </form>
    </div>
</div>


<?php
require_once("footer.php");
?>
