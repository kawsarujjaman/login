<?php
if(!isset($_COOKIE["currentUser"])){
    header("location:index.php");
}
?>


<?php
require_once("config.php");
require_once("header.php");
?>


<main>

  <div class="container">
    <div class="row">
      <div class="col-md-5">
      <div class="profile-content">
    

    <?php
    
    if(isset($_COOKIE["currentUser"])){
    

    $currentUserName= $_COOKIE["currentUser"]; 
    $currentNameQuery= "SELECT * FROM my_users WHERE auth= '$currentUserName' ";

    $runCurrentUser= mysqli_query($connect, $currentNameQuery);
    if($runCurrentUser==true){
      while($getUser= mysqli_fetch_array($runCurrentUser)){
        $avatarimg= $getUser["avatar"];
        echo " <img src='avatar/$avatarimg'/> ";
        ?>
        <div class="change-profile-pic">
        
        <h6> <a href=""> Change Prifile Picture</a> </h6>
<input type="file" value="Edit picture">
        <br/>
        <br/>

        <b> <a href="changepwd.php">Change Password</a> </b>

        </div>
        <?php
        echo "<h1>";
       echo $getUser["f_name"]." ".$getUser["l_name"];
      }
      
      }    
      }
    
    
    
    ?>
    
     </h1>

    <b>Web design, Web Developer</b>
    </div>
        
    <br><br>
      </div>

      <div class="col-md-7">
      
      </div>
    </div>

  </div>

</main>

<?php
require_once("footer.php");
?>