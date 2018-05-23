<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Questionnaire</title>
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php

include "inc/database.php";
include "inc/header.php";
if ($_SESSION['staff_type'] == "doctor"){
    include "inc/doctorleft.php";
  }
  elseif ($_SESSION['staff_type'] == "supportstaff"){
    include "inc/supportleft.php";
  }


$query = $conn->prepare("show tables like 'question%'");
$query->execute();
echo "<br><br><br><br><br>";
echo "<div id = 'rightside'>";
while($rows = $query->fetch(PDO::FETCH_NUM)){
    echo "<div> ";
    echo "$rows[0]
    <a href = 'visitquestionnaire.php?prod=" .$rows[0] ."'>Visit Questionnaire</a>
    </div>
    <br>";
    
}

echo "</div>";

?>
</body>
</html>