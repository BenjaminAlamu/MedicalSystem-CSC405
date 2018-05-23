<?php
include "inc/database.php";
$count = count($_POST); //Get amount of variables in the POST response

//Get title to use to create database table
$title = $_POST["title"];

$sql = "CREATE TABLE question" . $title . "  (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL, 
    question VARCHAR(300) NOT NULL
    )";

    echo $sql;
    $conn -> exec($sql);

    //Add the title to the database. This would help when displaying the questionnaire
    $sql = "INSERT INTO question" . $title . " (question) VALUES ( '" . $title . "' )";
    $conn -> exec($sql);

    //Get the first question of the questionniare and insert into db
    $question = $_POST["question"];
    $sql = "INSERT INTO question" . $title . " (question) VALUES ( '" . $question . "' )";
    $conn -> exec($sql);
    
    //Check if other fields where created and all their value into the database
    for($i=2; $i < $count; $i++ ){
        if ($_POST["question" . $i] != ""){
            $sql = "INSERT INTO question" . $title . " (question) VALUES ( '" . $_POST["question" . $i] . "' )";
            $conn -> exec($sql);
        }
        echo $_POST["question" . $i];
        
    }
    header('Location:displayquestionnaire.php');

?>