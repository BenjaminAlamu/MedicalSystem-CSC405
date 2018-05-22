<?php
//require('admin.php');
include "inc/database.php";
session_start();
$error="";
//sanitize input
function sanitize($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
if(isset($_POST['login'])){
    $username=sanitize($_POST['username']);
    $password=sanitize($_POST['password']);
    $query_username_password=$conn->query("SELECT * FROM hospital_management.login WHERE username='".$username."' AND pass_word='".$password."'");
    $exist =count($query_username_password->fetchAll());

    if($exist > 0){
      if (!empty($_POST['staff_type'])){
        $query_user =  $conn->query("SELECT * FROM hospital_management.login WHERE username='".$username."' AND pass_word='".$password."'");
        $query = $query_user->fetchAll();
        foreach($query as $row){
            $staff_type=$row['staff_type'];
        }
          if($_POST['staff_type'] == $staff_type){
              if($_POST['staff_type' ] == "admin"){
                $query_user_details =  $conn->query("SELECT * FROM hospital_management.login WHERE username='".$username."' AND pass_word='".$password."'");
                $query_details = $query_user_details->fetchAll();
                foreach($query_details as $row){
                    $_SESSION['id']= $row['id'];
                    $_SESSION['username']= $row['username'];
                    $_SESSION['staff_type']=$row['staff_type'];
                }
                
                //redirect to page
            
              }
              if($_POST['staff_type' ] == "doctor"){
                $query_user_details =  $conn->query("SELECT * FROM hospital_management.login WHERE username='".$username."' AND pass_word='".$password."'");
                $query_details = $query_user_details->fetchAll();
                foreach($query_details as $row){
                    $_SESSION['id']= $row['id'];
                    $_SESSION['username']= $row['username'];
                    $_SESSION['staff_type']=$row['staff_type'];
                    
                }
            
                
                   //redirect to page

              }
              if($_POST['staff_type'] == "supportstaff"){
                $query_user_details =  $conn->query("SELECT * FROM hospital_management.login WHERE username='".$username."' AND pass_word='".$password."'");
                $query_details = $query_user_details->fetchAll();
                foreach($query_details as $row){
                    $_SESSION['id']= $row['id'];
                    $_SESSION['username']= $row['username'];
                    $_SESSION['staff_type']=$row['staff_type'];
                }
                
                
                  
                 //redirect to page
              }
          }
          else{
            $error="invalid user name or password or staff type";
          }

      }
      else{
          $error="choose your staff type ..";
      }

    }
    else{
        $error="invalid user name or password";
    }

}
//process form 
// $username = filter_input(INPUT_POST , 'username' , FILTER_SANITIZE_STRING);

//  $password= filter_input(INPUT_POST , 'password');
// echo $username;

?>
<!DOCTYPE html>
    <head>
      <link rel="stylesheet" href="css/styles.css">
    </head>
    <body background="img/backgroundSetup.jpg">
   
    <header>
<nav>
    <ul>
        <li id="logo">Hospital Management System</li>
    </ul>

</nav>
</header>


        <div class ="login-box">
      
          <h1>Log In</h1>
         
          <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
              
            <input type = "text" name = "username" placeholder ="Username" required></br>

            <input type ="password" name = "password" placeholder = "Password" required>

            <select name="staff_type" >
                <option value="">staff type ....</option>
                <option value="admin">admin</option>
                <option value="doctor">doctor</option>
                <option value="supportstaff">support staff</option>
            </select><br>
            <br>
            
            <button type = "submit" name="login" class= "login-button">LOG IN</button>
          </form>

         
          <p style="color:red;"><?php echo $error; ?></p>
        </div>
        <?php include "inc/footer.php"; ?>
    </body>
</html>

