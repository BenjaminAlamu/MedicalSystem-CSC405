<?php
  session_start();
  require_once("inc/database.php");

$firstErr = $secondErr = $phoneErr = $addErr = $userErr = $passErr = $reErr = $noMatchErr = $radErr="";
?>

<?php
  if($_POST){

    $servername = "localhost";
    $password = "";
    $username = "root";
    $dbname = "hospital_management";

    if(empty($_POST["firstName"])){
      $firstErr="*First Name Required.";
    }
    if(empty($_POST["lastName"])){
      $secondErr="*Last Name Required.";
    }
    if(empty($_POST["phoneNo"])){
      $phoneErr="*Phone Number Required";
    }

    if(empty($_POST["homeaddress"])){
      $addErr="*Address Required.";
    }

    if(empty($_POST["user-name"])){
      $userErr="*Username required.";
    }

    if(empty($_POST["pass-word"])){
      $passErr="*Password Required.";
    }

    if(empty($_POST["repeatPassword"])){
      $reErr="*Confirm Password Required.";
    }

    if(empty($_POST["type"])){
      $radErr="*Select Staff Type Required.";
    }
                  

    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    $phoneNo = $_POST["phoneNo"];
    $homeaddress = $_POST["homeaddress"];
    $user_name = $_POST["user-name"];
    $pass_word = $_POST["pass-word"];
    $repeatpassword = $_POST["repeatPassword"];

    if(isset($_POST['type'])){
      $type = $_POST['type'];
      }
    
    if ($user_name == $pass_word){
      $sql = "INSERT INTO staff_bio (firstname, lastname, phonenumber, homeaddress, staff_type, username)
      VALUES('$firstname', '$lastname', '$phoneNo', '$homeaddress', '$type', '$user_name');
      
      INSERT INTO login_info(username, pass_word, staff_type) VALUES ('$user_name', '$pass_word' , '$type');";
                        
      $conn->exec($sql);
      echo "<script>alert('Staff Added Successfully');</script>";
      $conn = null;
    }
    else {
      echo "<script>alert('Passwords don't match!');</script>";
    }

            }
              ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Add Staff</title>
  </head>
  <body>
    <?php include "inc/header.php"; ?>
  <div id = "content">
    <?php include "inc/adminleft.php"; ?>
      <div class = "rightside">
          <form method = "post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h3>Add Staff</h3>
          <legend><span class = "number">1</span>Personal Information</legend>
          <?php echo $firstErr;?>
          <input type ="text" name = "firstName" placeholder = "First Name"></input><br>
          <?php echo $secondErr;?>
          <input type ="text" name = "lastName" placeholder = "Last Name"></input><br>
          <?php echo $phoneErr;?>
          <input type ="number" name = "phoneNo" placeholder = "Phone Number"></input><br>
          <?php echo $addErr?>
          <input type ="textarea" name = "homeaddress" placeholder = "Home Address"></input> <br> 

          
          <legend><span class = "number">2</span>Login Information</legend>
          <?php echo $userErr;?>
          <input type ="text" name = "user-name" placeholder = "Username"></input><br>
          <?php echo $passErr;?>
          <input type ="password" name = "pass-word" placeholder = "Password"></input><br>
          <?php echo $reErr;?>
          <input type ="password" name = "repeatPassword" placeholder = "Confirm Password"></input><br>
                    



          <legend><span class = "number">3</span>Account Information</legend>
          <h4>Please select an account type</h4>
          <?php echo $radErr;?>
          <div class = "radioitem"><input type = "radio" name = "type" id ="doctor" value="doctor"><label for = "doctor" class = "label" >Doctor</label><br></div>
                
          <div class = "radioitem"><input type = "radio" name = "type" id ="supportstaff" value="supportstaff"><label for = "supportstaff" class = "label" >Support Staff</label><br></div>

          <div class = "radioitem"><input type = "radio" name = "type" id ="admin" value="admin"><label for = "admin" class = "label" >Admin</label><br></div>

          <input id ="submit" type = "submit" value = "Submit">

          </form>


      </div>
      </div>
      <?php include "inc/footer.php"; ?>
  </body>
</html>
