<?php
if ($_POST) {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hospital_management";

  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $phoneNo = $_POST["phoneNo"];
  $address = $_POST["address"];

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `patient_bio` (`firstname`, `lastname`, `phonenum`, `address`)
            VALUES('$firstName', '$lastName', '$phoneNo', '$address')";
    $conn->exec($sql);
    echo "<script>alert('Patient Added Successfully');</script>";
  }
  catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
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
    <title>Add Patient</title>
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
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="addpatient" onsubmit="return validateForm();" >
          <h3>Add Patient</h3>
          <legend><span class = "number">1</span>Personal Information</legend>
          <input type="text" name="firstName" placeholder="First Name" required></input><br>

          <input type="text" name="lastName" placeholder="Last Name" required></input><br>

          <input type="text" name="phoneNo" placeholder="Phone Number" required></input><br>

          <input type="textarea" name="address" placeholder="Home Address" required></input><br>

          <input id="submit" type="submit" value="Submit">

        </form>
      </div>
    </div>
    <?php include "inc/footer.php"; ?>
    <script src="js/app.js"></script>
  </body>
</html>

