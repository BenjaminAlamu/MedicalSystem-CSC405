<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Records</title>
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php
    include "inc/database.php";
    include "inc/header.php";
    include "inc/doctorleft.php";
    // if (isset($_GET["id"])){
    //     $patientid = $_GET["id"];
    
    //     //Redirect
    // }
    // else{
    //     //Redirect to home page
    // }
    
    $patientid = 2;
    
    //Get patient data from db
    $sql = $conn -> query("SELECT * FROM patient_bio WHERE id = $patientid");
          $sql = $sql -> fetchAll(PDO::FETCH_ASSOC);

          foreach($sql as $result){
              $patientName = $result["firstname"] . " " . $result["lastname"];
          }


    //Invoke questionnaire
    echo "<form id = 'insert' method = 'post' action = 'insertrecord.php'><br>
    
    <p>Kindly fill this</p>";
    $query = $conn->prepare("show tables like 'question%'");
    $query->execute();

    echo "<div> ";
    while($rows = $query->fetch(PDO::FETCH_NUM)){

    //    echo " <input type = 'checkbox' id = '" . $rows[0] . "' name = '" . $rows[0] ."' value= '". $rows[0] ."'><label> ". $rows[0] . "</label><br>"; 
        
    }
    echo "</div>
    <br>";


    //Patient Complaint
    echo "<input type = 'textarea' id = 'patientComplaint' name = 'patientComplaint' placeholder = 'Enter the patient complaint here'><br>";

    //Doctors Notes
    echo "<input type = 'textarea' id = 'doctorNotes' name = 'doctorNotes' placeholder = 'Enter the doctors Notes here'><br>";


    echo "<input type = 'hidden'  name = 'patientID'  value ='". $patientid . "'><br>";
    echo "<input type = 'hidden'  name = 'patientName'  value ='". $patientName . "'><br>";

    //Doctors Consultancy Fee
    echo "<input type = 'number' id = 'docFee' name = 'docFee' placeholder = 'Enter the Consultancy Fee here'><br>";

    //Doctors Prescription
    echo "
    <input type = 'checkbox' id = 'Painkillers' name = 'Painkillers'>Painkillers<br>
    <input type = 'checkbox' id = 'Antibiotics' name = 'Antibiotics'>Antibiotics<br>
    <input type = 'checkbox' id = 'Suppliments' name = 'Suppliments'>Suppliments<br>
    <input type = 'checkbox' id = 'Vitamins' name = 'Vitamins'>Vitamins<br>
    <input type = 'checkbox' id = 'Surgery' name = 'Surgery'>Surgery<br>   
    <input type = 'button' value = 'Generate Bill' id = 'generate'> 
    ";
    ?>

    <?php
     
    ?>
    
    </form> 

    
    
    
</body>
<script src = "js/generateBill.js"></script>
</html>