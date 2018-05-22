<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Questionnaire</title>
</head>
<body>

<form method = "POST" action = "questionnaire.php" >
<label id = "lab" for = "title">Enter the title of the questionnaire preferably in one word</label>
<input type = "text" id = "title" name = "title" placeholder = "Enter one word title" required>

<div id = "questions">

<div class = "row">
<input type = "text" id = "question" name = "question" placeholder = "Enter a question" class = "block" required>
<button id = "add">Add Text Field</button>
</div>

</div>
<input type = "submit" value = "Submit">
</form>
    
</body>
<script src="js/app.js"></script>
</html> 
