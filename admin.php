<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
	<title>Admin|Dashboard</title>
  </head>
  <body>

  <?php include "inc/header.php"; ?>
  <?php include "inc/adminleft.php"; ?>

  <div class = "rightside">
      <form id = "search" method = "post" action = "search-staff.php">
          <input type = "text" name = "search-staff" id = "search-staff">
          
          <input type = "submit" value = "Search" id = "search-button">
      </form>

      <div>
          <?php include "inc/database.php"; 
          
          $sql = $conn -> query("SELECT * FROM staff_bio");
          $sql = $sql -> fetchAll(PDO::FETCH_ASSOC);
          
          foreach($sql as $result){
              
              echo "<h3> " . $result["firstname"] . " " . $result["lastname"] . " </h3>";
              echo "<a href = 'editstaff.php?id=". $result["id"] . "'>Edit</a>";
              echo "<a href = 'deleteuser.php?id=". $result["id"] . "'>Delete</a>";
              
              
          }
          ?>

      </div>
  </div>
  
</body>
</html>

