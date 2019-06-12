<?php
     session_start();
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Login System</title>
    <link rel = "stylesheet" href="html.css">

   
</head>
<body>
    <header>
         <nav>
          
          <div class="main-wrapper">
            <img src="images.png" style="height:60px;width: 150px;">
                <div class="nav-login">
                <?php
                
                  if(isset($_SESSION['userId']))
                  {
                   echo '
                   <form action="includes/logout.inc.php" method="post">
                   <button type="submit" name="logout-submit">Logout</button>
              </form>';
                  }
                  else {
                       echo 
                       '<form action="includes/login.inc.php" method="post">
                  
                       <input type="text" name="mailuid" placeholder="Username/E-mail...">
                       
                       <input type="password" name="pwd" placeholder="password...">

                       <button type="submit" name="login-submit">Login</button>
                       
                    
                  </form>
                   <a href="signup.php">Signup</a>';
                  }
                ?>
</div>
</div>

              <div class="div" style="background-color: #bfbfb2;
                       width: 100%;
                       height:3px;">
               </div>

               </nav>
               
           
    </header>
               </body>
               </html>
