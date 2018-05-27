<?php

//Assumption is that i get the id of the staff
//I use the id the get the username
//I delete the id from the staff database
//I delete the username from the login database

include ("inc/database.php");

$id = $_GET["id"];


//Check if id is in the database
$check = $conn ->query("SELECT * FROM patient_bio WHERE id ='" . $id ."'");
$check = $check -> fetchAll(PDO::FETCH_ASSOC);
var_dump($check);

if(empty($check)){
    echo "Id not found";
    die();
}


//Delete the patients data from the patient bio database
$deletePatient = "DELETE FROM patient_bio WHERE id='". $id. "'";
$conn -> exec($deletePatient);
header('Location:staff.php');



