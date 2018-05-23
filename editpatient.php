<?php

  include "inc/database.php";
  $id = $_GET['id'];
if($_POST) {


    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNo = $_POST['phoneNo'];
    $homeAddress = $_POST['homeaddress'];

    try{
      $sql = "UPDATE patient_bio SET firstname='$firstName', lastname='$lastName', phonenum='$phoneNo', address='$homeAddress' WHERE id ='$id'";
      $stmt = $conn->prepare($sql);

      $stmt->execute();

      echo "<script>alert('Patient records updated successfully');</script>";
      echo "<script>window.location = 'staff.php';</script>";
      
    }
    catch(PDOException $e)
    {
      echo $sql1 . "<br>" . $e->getMessage();
    }
    $conn = null;
    
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Edit Patient</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
  </head>

  <body>
    <?php include 'inc/header.php'; ?>
    <div id="content">
      <?php         
      if ($_SESSION['staff_type'] == "doctor"){
          include "inc/doctorleft.php";
        }
        elseif ($_SESSION['staff_type'] == "supportstaff"){
          include "inc/supportleft.php";
        }
      
     
      ?>
      <div class="rightside">
      <?php
      $id = $_GET['id'];
      
      include "inc/database.php";
      
      $sql = $conn -> query("SELECT * FROM patient_bio where id = '" . $id . "'");
      $sql = $sql -> fetchAll(PDO::FETCH_ASSOC);
      $firstname = "";

      foreach($sql as $result){
        
      }

      ?>
        <form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>" name="editpatient" onsubmit="return validateForm(this);">
          <br><br>
          <h3>Edit Patient</h3>
          <legend><span class = "number">1</span>Personal Information</legend>
          <input type ="text" name="firstName" placeholder = "First Name" required value = "<?php echo $result['firstname'];?>" ></input><br>

          <input type ="text" name="lastName" placeholder = "Last Name" required value = "<?php echo $result['lastname'];?>"></input><br>

          <input type ="number" name="phoneNo" placeholder = "Phone Number" required value = "<?php echo $result['phonenum'];?>"></input><br>

          <input type ="textarea" name="homeaddress" placeholder = "Home Address" required value = "<?php echo $result['address'];?>"></input> <br>

          <input id ="submit" type = "submit" value = "Submit">
        </form>
      </div>
    </div>
    
    <script src="js/app.js"></script>
  </body>
</html>
