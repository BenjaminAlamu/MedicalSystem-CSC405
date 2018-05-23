<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Questionnaire</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/forms.css">
    
</head>
<body>
<?php

include "inc/database.php";
include "inc/header.php";
include "inc/adminleft.php";

echo "<a href = 'addquestionnaire.php' class = 'displayquestionnaire'><button class ='special'>Add Questionnaire</button></a>";

$dbname = "hospital_management";


$query = $conn->prepare("show tables like 'question%'");
$query->execute();

echo "<div id = 'rightside'>";
while($rows = $query->fetch(PDO::FETCH_NUM)){
    echo "<div> ";
    echo "$rows[0]
    <a href = 'deletequestion.php?prod=" .$rows[0] ."'><button class = 'special'>Delete Questionnaire</button></a>
    </div>
    <br>";
    
}

echo "</div>";

?>


</body>
</html>