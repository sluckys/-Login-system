
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="a">
     <a href="index.php" style="color:blue;text-decoration: none;
     padding-left:20px;margin:20px;float:right;font-size:30px;cursor: pointer;font-family: cursive;">HOME</a>
</div>
 
  <div class="div">
    <div class="form">
<section>
    <?php 
      if(isset($_GET['error'])){
        if($_GET['error'] == "emptyfields")
        {
            echo '<p style="color: #4080bf; font-family: cursive;"> fill in all fields!</p>';
        }
       
        else if ($_GET['error'] == "invaliduidmail"){
            echo '<p style="color:#4080bf; font-family: cursive;">invalid username ans e-mail!</p>';
        }
        else if($_GET['error'] == "invaliduid") {
            echo '<p style="color:#4080bf; font-family: cursive;">Invalid username!</p>';
        }
        else if ($_GET['error'] == "invalidmail"){
            echo '<p style="color:#4080bf; font-family: cursive;">invalid email</p>';
        }
        else if ($_GET['error'] == "passwordcheck"){
            echo '<p style="color:#4080bf; font-family: cursive;">your password donot match</p>';
        }
        else if ($_GET['error'] == "usertaken"){
            echo '<p style="color:#4080bf; font-family: cursive;">username is already taken!</p>';
        }
}
else if (isset($_GET['signup']) && $_GET["signup"] == "success") {

    echo '<p style="color: blue; font-family: cursive;">Signup succesfull!</p>';

  }

    ?>

    <form action="includes/signup.inc.php" method="post">
           <input type="text" name="uid" placeholder="Username">
           <input type="text" name="mail" placeholder="E-mail">
           <input type="password" name="pwd" placeholder="Password">
           <input type="password" name="pwd-repeat" placeholder="Reapet password">
           <button type="submit" name="signup-submit">Signup</button>
    </form>
    </section>
  </div>
    </div>

</main>
<?php
require "footer.php";
?>

</body>
</html>
