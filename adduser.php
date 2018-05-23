<?php
  require_once("inc/database.php");

$firstErr = $secondErr = $phoneErr = $addErr = $userErr = $passErr = $noMatchErr = $radErr="";

?>

<?php
  if($_POST){

    $servername = "localhost";
    $password = "";
    $username = "root";
    $dbname = "hospital_management";

    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    $phoneNo = $_POST["phoneNo"];
    $homeaddress = $_POST["homeaddress"];
    $user_name = $_POST["user-name"];
    $pass_word = $_POST["pass-word"];
    $type = $_POST['type'];
      

     /* $sthandler= $conn -> prepare("SELECT * FROM login_info WHERE username = '$username'");
      $sthandler -> execute();

      if ($sthandler->rowCount() == 0){*/
        $sql = "INSERT INTO staff_bio (firstname, lastname, phonenumber, homeaddress, staff_type, username)
        VALUES('$firstname', '$lastname', '$phoneNo', '$homeaddress', '$type', '$user_name');
        
        INSERT INTO login_info(username, pass_word, staff_type) VALUES ('$user_name', '$pass_word' , '$type');";
                          
        $conn->exec($sql);
        echo "<script>alert('Staff Added Successfully');</script>";
        echo "<script>window.location= 'admin.php';</script>";
        $conn = null;

      /*}

      else {
        echo "<script> alert('Username has been taken'); 
        document.getElementByTagName('adduser').onsubmit = 'return false'; </script>";
      }*/


            }
              ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
    <script src = "js/app.js" type = "text/javascript"></script>
    <title>Add Staff</title>

  </head>
  <body>
    <?php include "inc/header.php"; ?>
  <div id = "content">
    <?php include "inc/adminleft.php"; ?>
      <div class = "rightside">
          <form name="adduser" method = "post" onsubmit = "return validateUserForm()" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h3>Add Staff</h3>
          <legend><span class = "number">1</span>Personal Information</legend>

          <input type ="text" name = "firstName" placeholder = "First Name" required></input><br>

          <input type ="text" name = "lastName" placeholder = "Last Name" required></input><br>

          <input type ="number" name = "phoneNo" placeholder = "Phone Number" required></input><br>

          <input type ="textarea" name = "homeaddress" placeholder = "Home Address" required></input> <br> 

          
          <legend><span class = "number">2</span>Login Information</legend>

          <input type ="text" name = "user-name" placeholder = "Username" required></input><br>

          <input type ="password" name = "pass-word" placeholder = "Password" required></input><br>


                    



          <legend><span class = "number">3</span>Account Information</legend>
          <h4>Please select an account type</h4>
          <?php echo $radErr;?>
          <div class = "radioitem"><input type = "radio" name = "type" id ="doctor" value="doctor" checked ="checked"><label for = "doctor" class = "label" >Doctor</label><br></div>
                
          <div class = "radioitem"><input type = "radio" name = "type" id ="supportstaff" value="supportstaff"><label for = "supportstaff" class = "label" >Support Staff</label><br></div>

          <div class = "radioitem"><input type = "radio" name = "type" id ="admin" value="admin" ><label for = "admin" class = "label" >Admin</label><br></div>

          <input id ="submit" type = "submit" value = "Submit">

          </form>


      </div>
      </div>
      <?php include "inc/footer.php"; ?>
  </body>
</html>
