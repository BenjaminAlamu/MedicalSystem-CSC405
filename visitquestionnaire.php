<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visit Questionnaire</title>
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php

include "inc/database.php";
include "inc/header.php";
if ($_SESSION['staff_type'] == "doctor"){
    include "inc/doctorleft.php";
  }
  elseif ($_SESSION['staff_type'] == "supportstaff"){
    include "inc/supportleft.php";
  }

  echo "<br><br><br><br><br><br>";

  
  if (isset($_GET["prod"])){
      $tablename = $_GET["prod"];
      $sql = $conn -> query("SELECT * FROM " . $tablename);
      $sql = $sql -> fetchAll(PDO::FETCH_ASSOC);
      
      foreach($sql as $result){
          echo "<p>" . $result['question'] ."</p>";
      }
  
  }
  else{
      header('Location:viewquestionnaire.php');
  }
  
  
  

?>
</body>
</html>