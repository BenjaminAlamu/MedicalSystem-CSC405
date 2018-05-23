<?php
session_start();
include "inc/database.php";


print_r($_POST);
$patientID = $_POST['patientID'];
$staffID = $_SESSION['id'];
$staffname = $_SESSION['staff_name'];
$patientComplaint = $_POST['patientComplaint'];
$doctorsNotes = $_POST['doctorNotes'];
$prescription = $_POST['prescription'];
$sessionCost = $_POST['price'];

$sql = "INSERT INTO patientrecord (patientID, staffID, staffName, patientComplaint, doctorsNotes, prescription, sessionCost) VALUES ('$patientID','$staffID','$staffname','$patientComplaint','$doctorsNotes', '$prescription', '$sessionCost')";
echo $sql;

$conn -> exec($sql);
header('Location:staff.php');


?>