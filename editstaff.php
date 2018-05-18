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
          <form>
		  <h3>Edit Staff</h3>
          <legend><span class = "number">1</span>Personal Information</legend>
          <input type ="text" name = "firstName" placeholder = "First Name"></input><br>

          <input type ="text" name = "lastName" placeholder = "Last Name"></input><br>

          <input type ="number" name = "phoneNo" placeholder = "Phone Number"></input><br>

          <input type ="textarea" name = "address" placeholder = "Home Address"></input> <br> 

          
          <legend><span class = "number">2</span>Login Information</legend>
          
          <input type ="text" name = "user-name" placeholder = "Username"></input><br>

          <input type ="password" name = "pass-word" placeholder = "Password"></input><br>

          <input type ="password" name = "repeatPassword" placeholder = "Confirm Password"></input><br>
          
          <input id ="submit" type = "button" value = "Submit">

          </form>

      </div>
	  </div>
	  <?php include "inc/footer.php"; ?>
  </body>
</html>
