<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/results.css">
    <title>Admin|Search Results</title>
  </head>
  <body>

  <?php include "inc/header.php"; ?>
  <?php include "inc/adminleft.php"; ?>

  <div class = "rightside">
      <div>
          <?php include "inc/database.php"; 
          echo "<br>";
          $query = $_POST["search-staff"];
          
          $sql = $conn -> query("SELECT * FROM staff_bio WHERE firstname like '%" . $query . "%'  OR lastname like '%" . $query . "%'");
          //echo $sql;
          $sql = $sql -> fetchAll(PDO::FETCH_ASSOC);
          echo '<div class = "result-box">';
          foreach($sql as $result){
              
              echo '<div class = "result-item">';
              echo "<h3> " . $result["firstname"] . " " . $result["lastname"] . " </h3>";
              echo "<br>";
              echo "<a href = 'editstaff.php?id=". $result["id"] . "'>Edit</a>";
              echo "<a href = 'deleteuser.php?id=". $result["id"] . "'>Delete</a>";
              echo '</div>';
              
          }
          echo '</div>';
          ?>

      </div>
  </div>
  
</body>
</html>

