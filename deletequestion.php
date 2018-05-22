<?php
include "inc/database.php";
if (isset($_GET["prod"])){
    $tablename = $_GET["prod"];
    $sql = "DROP TABLE ". $tablename;
    echo $sql;
    $conn -> exec($sql);

    //Redirect
}
else{
    //Redirect to home page
}


?>