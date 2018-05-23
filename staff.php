<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/results.css">
    <link rel="stylesheet" href="css/forms.css">
    
    <title>Staff|Dashboard</title>
  </head>
  <body>

  <?php include "inc/header.php"; ?>
  <div id = "content">
      
        <?php
        if ($_SESSION['staff_type'] == "doctor"){
          include "inc/doctorleft.php";
        }
        elseif ($_SESSION['staff_type'] == "supportstaff"){
          include "inc/supportleft.php";
        }
        ?>
      

  <div class = "rightside">
      <form id = "search" method = "post" action = "search-patient.php">
          <input type = "text" name = "search-patient" id = "search-patient">
          
          <input type = "submit" value = "Search" id = "search-button">
      </form>

      <div>
          <?php include "inc/database.php"; 
          
          $sql = $conn -> query("SELECT * FROM patient_bio");
          $sql = $sql -> fetchAll(PDO::FETCH_ASSOC);
          
          echo '<div class = "result-box">';
          foreach($sql as $result){
             echo '<div class = "result-item">';
              
              echo "<h3> " . $result["firstname"] . " " . $result["lastname"] . " </h3>";
              echo "<br>";
              echo "<a href = 'editpatient.php?id=". $result["id"] . "'>Edit</a>";
              echo "<a href = 'deletepatient.php?id=". $result["id"] . "'>Delete</a>";
              echo "<a href = 'insert.php?id=". $result["id"] . "'>Add Patient History</a>";
              echo "<a href = 'view.php?id=". $result["id"] . "'>View Patient History</a>";
              echo '</div>';
          }
          echo '</div>';
          ?>

      </div>
      <?php include "inc/footer.php"; ?>
  </div>
  
  
</body>
</html>

