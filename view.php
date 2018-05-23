<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
	<title>Staff|View Patient</title>
  </head>
  <body>

  <?php include "inc/header.php"; ?>
  <div id = "content">
      <div class = "leftside">
        <?php
        if ($_SESSION['staff_type'] == "doctor"){
          include "inc/doctorleft.php";
        }
        elseif ($_SESSION['staff_type'] == "supportstaff"){
          include "inc/supportleft.php";
        }

        if (!isset($_GET["id"])){
            header('Location:staff.php');
        }
        $patientid = $_GET["id"];
        ?>
      </div>

  <div class = "rightside">
      <div>
          <?php include "inc/database.php"; 
          
          //Get Patient bio
          $sql = $conn -> query("SELECT * FROM patient_bio  WHERE id = '". $patientid . "'");
          $sql = $sql -> fetchAll(PDO::FETCH_ASSOC);

          foreach($sql as $result){
              $patientName = $result['firstname'] . " " . $result['lastname'];
              $patientNumber = $result['phonenum'];
              $patientAddress = $result['address'];
          }
          
          echo "<p> Patient Name: " . $patientName . "</p>";
          echo "<p> Patient Phone Number: " . $patientNumber . "</p>";
          echo "<p> Patient Address: " . $patientAddress . "</p>";

          //Get Session History
          $sql = $conn -> query("SELECT * FROM patientrecord  WHERE patientID = '". $patientid . "'");
          $sql = $sql -> fetchAll(PDO::FETCH_ASSOC);
          
          
          $count = 0;
          foreach($sql as $result){
              $count++;
              echo "<p>Session " . $count . "</p>";
            echo "<ul>";
           echo "<li><p>Patient Complaint: " . $result['patientComplaint'] . "</p></li>";
           echo "<li><p>Doctor Name: " . $result['staffName'] . "</p></li>";
           echo "<li><p>Doctor Notes: " . $result['doctorsNotes'] . "</p></li>";
           echo "<li><p>Prescription: " . $result['prescription'] . "</p></li>";
           echo "<li><p>Session Bill: " . $result['sessionCost'] . "</p></li>";
           echo "</ul>";
        }
        
          ?>

      </div>
  </div>
  
</body>
</html>

