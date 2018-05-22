<?php

//Assumption is that i get the id of the staff
//I use the id the get the username
//I delete the id from the staff database
//I delete the username from the login database

include ("inc/database.php");

$id = $_POST["id"];


$check = $conn ->query("SELECT * FROM staff_bio WHERE id ='" . $id . "'");
$check = $check -> fetchAll(PDO::FETCH_ASSOC);

if(empty($check)){
    echo "Id not found";
    die();
}



//Get the username from the staff_bio so i can delete the login details of the user
$username = "";
foreach($check as $result){
    $username = $result["username"];
}

echo $username;

//Delete the users data from the staff bio database
$deleteStaff = "DELETE FROM staff_bio WHERE id='" .$id . "'";
$conn -> exec($deleteStaff);


//Delete the user's login data from the login database

//Get the id
//Use username to get the id from the login database

$deleteLogin = $conn ->query("DELETE FROM login_info WHERE username = '" . $username . "'");
var_dump($deleteLogin);
$conn -> exec($deleteLogin);


