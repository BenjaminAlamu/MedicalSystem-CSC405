<?php

include "inc/database.php";
$dbname = "hospital_management";


$query = $conn->prepare("show tables like 'question%'");
$query->execute();


while($rows = $query->fetch(PDO::FETCH_NUM)){
    echo "<div> ";
    echo "$rows[0]
    <a href = 'deletequestion.php?prod=" .$rows[0] ."'>Delete Questionnaire</a>
    </div>
    <br>";
    
}

?>