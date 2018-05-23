<?php
  include "inc/database.php";

  $id = $_GET['id'];

  if ($_POST) {

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phoneNo = $_POST["phoneNo"];
    $homeaddress = $_POST["homeaddress"];

    $username = $_POST["user-name"];
    $password = $_POST["pass-word"];
    try{
      $sql = "UPDATE staff_bio SET firstname='$firstName', lastname='$lastName', phonenumber='$phoneNo', homeaddress='$homeaddress' WHERE id ='$id';
      UPDATE login_info SET username='$username', pass_word='$password' WHERE id ='$id';";
      $stmt = $conn->prepare($sql);

      $stmt->execute();

      echo "<script>alert('Staff records updated successfully');</script>";
      echo "<script>window.location = 'admin.php';</script>";
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
    <meta charset="utf-8">
	  <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Edit Staff</title>
  </head>
  <body>
    <?php include "inc/header.php"; ?>
    <div id = "content">


        <?php include "inc/adminleft.php"; ?>


      <div class = "rightside">
      <?php
      $id = $_GET['id'];
      
      include "inc/database.php";
      
      $bio = $conn -> query("SELECT * FROM staff_bio where id = '" . $id . "'");
      $bio = $bio -> fetchAll(PDO::FETCH_ASSOC);
      
      foreach($bio as $bioResult){
        
      }

      $log = $conn -> query("SELECT * FROM login_info where id = '" . $id . "'");
      $log = $log -> fetchAll(PDO::FETCH_ASSOC);

      foreach($log as $logResult){
        
      }

      ?>
        <form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>" name="editstaff" onsubmit="return validateForm(this);">
          <h3>Edit Staff</h3>
          
          <legend><span class = "number">1</span>Personal Information</legend>
          <input type ="text" name="firstName" placeholder = "First Name" required value = "<?php echo $bioResult['firstname'];?>" ></input><br>

          <input type ="text" name="lastName" placeholder = "Last Name" required value = "<?php echo $bioResult['lastname'];?>"></input><br>

          <input type ="number" name="phoneNo" placeholder = "Phone Number" required value = "<?php echo $bioResult['phonenumber'];?>"></input><br>

          <input type ="textarea" name="homeaddress" placeholder = "Home Address" required value = "<?php echo $bioResult['homeaddress'];?>"></input> <br>


          <legend><span class = "number">2</span>Login Information</legend>

          <input type ="text" name = "user-name" placeholder = "Username" value = "<?php echo $logResult['username'];?>"></input><br>

          <input type ="password" name = "pass-word" placeholder = "Password" value = "<?php echo $logResult['pass_word'];?>"></input><br>

          <input id ="submit" type = "submit" value = "Submit">

        </form>
      </div>
    </div>
  	
    <script src="js/app.js"></script>
  </body>
</html>
