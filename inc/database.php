<?php
$servername = "localhost";
$password = "";
$username = "root";


try{
    $conn = new PDO("mysql:host=$servername;dbname=hospital_management",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Connection failed";
}

?>