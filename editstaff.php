<?php
  session_start();
  include "inc/database.php";
  $id = substr($_SERVER["QUERY_STRING"], -1);

  // echo "<script>alert($id);</script>";
  if ($_POST) {
    $AD = $id;

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phoneNo = $_POST["phoneNo"];
    $homeaddress = $_POST["homeaddress"];

    $username = $_POST["user-name"];
    $password = $_POST["pass-word"];

    $sql = $conn -> query("SELECT * FROM login");
    $sql = $sql -> fetchAll(PDO::FETCH_ASSOC);

    foreach($sql as $result){
      if (($result["username"] == $username) && ($result["pass_word"] == $password)) {
        try {
          $sql1 = "UPDATE staff_bio SET firstname='$firstName', lastname='$lastName', phonenumber='$phoneNo', homeaddress='$homeaddress' WHERE id=1";
          $stmt = $conn->prepare($sql1);

          $stmt->execute();

          echo "<script>alert('Staff records updated successfully');</script>";
        }
        catch(PDOException $e)
          {
          echo $sql1 . "<br>" . $e->getMessage();
          }
          $conn = null;
        }
        else {
          echo "<script>alert('Invalid username and password');</script>";
          break;
        }
        // break;
      }
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
      <div class = "leftside">

        <form action = "adduser.php">
          <input type = "button" value = "Add User">
        </form>

        <form action = "questionaire.php">
          <input type = "button" value = "Add Questionaire">
        </form>

        <form action = "logout.php">
          <input type = "button" value = "Log Out">
        </form>

      </div>
      <div class = "rightside">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="editstaff" onsubmit="return validateForm(this);">
          <h3>Edit Staff</h3>
          <legend><span class = "number">1</span>Personal Information</legend>
          <input type ="text" name="firstName" placeholder = "First Name" required></input><br>

          <input type ="text" name="lastName" placeholder = "Last Name" required></input><br>

          <input type ="number" name="phoneNo" placeholder = "Phone Number" required></input><br>

          <input type ="textarea" name="homeaddress" placeholder = "Home Address" required></input> <br>


          <legend><span class = "number">2</span>Login Information</legend>

          <input type ="text" name = "user-name" placeholder = "Username"></input><br>

          <input type ="password" name = "pass-word" placeholder = "Password"></input><br>

          <input id ="submit" type = "submit" value = "Submit">

        </form>
      </div>
    </div>
  	<?php include "inc/footer.php"; ?>
  </body>
</html>
