<?php
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

$username = $_POST['username'];
$password = $_POST['password'];

//Get the username and password from the database
$sql = $conn->query("SELECT * FROM hospital_management.login_info WHERE username='".$username."' AND pass_word='".$password."'");
$sql = $sql -> fetchAll(PDO::FETCH_ASSOC);


//Sort database data
foreach($sql as $result){
    $user = $result['username'];
    $id = $result['id'];    
    $staff_type = $result['staff_type'];
    $pass = $result['pass_word'];
}

//Get staff name
$sql = $conn->query("SELECT * FROM hospital_management.staff_bio WHERE username='".$username."'");
$sql = $sql -> fetchAll(PDO::FETCH_ASSOC);

foreach($sql as $result){
    $fullname = $result['firstname'] . " " . $result['lastname'];
}

//Confirm that the username and password
if($username == $user && $password == $pass){

    $_SESSION['id']= $id;
    $_SESSION['username']= $user;
    $_SESSION['staff_type']=$staff_type;
    $_SESSION['staff_name']=$fullname;

    //Use staff type to redirect to the correct page
    if($staff_type == "admin"){
        header('Location:admin.php');
    }
    else if ($staff_type == "doctor"){
        header('Location:staff.php');
    }
    else if ($staff_type == "supportstaff"){
        header('Location:staff.php');
    }
    else{
        header('Location:index.php');
    }
}
else{
    header('Location:index.php');
    
}
?>