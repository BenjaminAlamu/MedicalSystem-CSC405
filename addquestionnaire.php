<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Questionnaire</title>
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php
    include "inc/header.php";
    include "inc/adminleft.php";
    ?>

<div id = "rightside">
<form method = "POST" action = "questionnaire.php" id = "addQuestion" >
<label class = "lab" for = "title">Enter the title of the questionnaire preferably in one word</label>
<input type = "text" id = "title" name = "title" placeholder = "Enter one word title" required><br>


<div id = "questions">
    <br>
<label class = "lab" >Enter your questions below</label>
<div class = "row">
<input type = "text" id = "question" name = "question" placeholder = "Enter a question" class = "block" required>

</div>

</div>
<button id = "add">Add Text Field</button>
<input type = "submit" value = "Submit">
</form>
</div>

</body>
<script src="js/app.js"></script>
</html> 
