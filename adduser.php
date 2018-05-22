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
          <form>
            <h3>Add Staff</h3>
          <legend><span class = "number">1</span>Personal Information</legend>
          <input type ="text" name = "firstName" placeholder = "First Name"></input><br>

          <input type ="text" name = "lastName" placeholder = "Last Name"></input><br>

          <input type ="number" name = "phoneNo" placeholder = "Phone Number"></input><br>

          <input type ="textarea" name = "address" placeholder = "Home Address"></input> <br> 

          
          <legend><span class = "number">2</span>Login Information</legend>
          
          <input type ="text" name = "user-name" placeholder = "Username"></input><br>

          <input type ="password" name = "pass-word" placeholder = "Password"></input><br>

          <input type ="password" name = "repeatPassword" placeholder = "Confirm Password"></input><br>
          



          <legend><span class = "number">3</span>Account Information</legend>
          <h4>Please select an account type</h4>
          <div class = "radioitem"><input type = "radio" name = "doctor" id ="doctor" value="doctor"><label for = "doctor" class = "label" >Doctor</label><br></div>
                
          <div class = "radioitem"><input type = "radio" name = "supportstaff" id ="supportstaff" value="supportstaff"><label for = "supportstaff" class = "label" >Support Staff</label><br></div>

          <div class = "radioitem"><input type = "radio" name = "admin" id ="admin" value="admin"><label for = "admin" class = "label" >Admin</label><br></div>

          <input id ="submit" type = "button" value = "Submit">

          </form>

      </div>
      </div>
      <?php include "inc/footer.php"; ?>
  </body>
</html>
