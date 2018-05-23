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
	<title>Staff|Dashboard</title>
  </head>
  <body>

  <?php include "inc/header.php"; ?>
<<<<<<< HEAD
  <?php include "inc/doctorleft.php"; ?>
=======
  <div id = "content">
      <div class = "leftside">
        <?php
        if ($_SESSION['staff_type'] == "doctor"){
          include "inc/doctorleft.php";
        }
        elseif ($_SESSION['staff_type'] == "supportstaff"){
          include "inc/supportleft.php";
        }
        ?>
      </div>
>>>>>>> 177005c3a0fac93a6cea66770afd31d137e4b224

  <div class = "rightside">
      <form id = "search" method = "post" action = "search-patient.php">
          <input type = "text" name = "search-patient" id = "search-patient">
<<<<<<< HEAD

=======
          
>>>>>>> 177005c3a0fac93a6cea66770afd31d137e4b224
          <input type = "submit" value = "Search" id = "search-button">
      </form>

      <div>
<<<<<<< HEAD
          <?php include "inc/database.php";

          $sql = $conn -> query("SELECT * FROM staff_bio");
          $sql = $sql -> fetchAll(PDO::FETCH_ASSOC);

          foreach($sql as $result){

              echo "<h3> " . $result["firstname"] . " " . $result["lastname"] . " </h3>";
              echo "<a href = 'editstaff.php?id=". $result["id"] . "'>Edit</a>";
              echo "<a href = 'deleteuser.php?id=". $result["id"] . "'>Delete</a>";

=======
          <?php include "inc/database.php"; 
          
          $sql = $conn -> query("SELECT * FROM patient_bio");
          $sql = $sql -> fetchAll(PDO::FETCH_ASSOC);
          
          foreach($sql as $result){
              
              echo "<h3> " . $result["firstname"] . " " . $result["lastname"] . " </h3>";
              echo "<a href = 'editpatient.php?id=". $result["id"] . "'>Edit</a>";
              echo "<a href = 'deletepatient.php?id=". $result["id"] . "'>Delete</a>";
              echo "<a href = 'insert.php?id=". $result["id"] . "'>Add Patient History</a>";
              echo "<a href = 'downloadpatient.php?id=". $result["id"] . "'>Download</a>";
              
>>>>>>> 177005c3a0fac93a6cea66770afd31d137e4b224
          }
          ?>

      </div>
  </div>
<<<<<<< HEAD

</body>
</html>
=======
  
</body>
</html>

>>>>>>> 177005c3a0fac93a6cea66770afd31d137e4b224
