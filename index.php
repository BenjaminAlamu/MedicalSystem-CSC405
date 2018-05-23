<?php
session_start();
?>
<!DOCTYPE html>
    <head>
      <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
   
    <header>
<nav>
    <ul>
        <li id="logo">Hospital Management System</li>
    </ul>

</nav>
</header>


        <div class ="login-box">
      
          <h1>Log In</h1>
         
          <form action="login.php" method="post">
              
            <input type = "text" name = "username" placeholder ="Username" required></br>

            <input type ="password" name = "password" placeholder = "Password" required><br>
            
            <button type = "submit" name="login" class= "login-button">LOG IN</button>
          </form>
          <!-- <p style="color:red;"><?php echo $_SESSION['error']; ?></p> -->
        </div>
        <?php include "inc/footer.php"; ?>
    </body>
</html>