<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="css/editstaff.css">
</head>
<body>
		<div class= "select">
		<button type = "button" class = "user">ADD USER </button></br>
		<button type = "button" class = "user">ACCESS WEB</button></br>
		<button type = "button" class = "user">LOG OUT</button>
		</div>

	<div class = "back">
		<div class = "staff">
		<input type="text" name="fname" class = "bio"  placeholder="FIRST NAME"></br>
		<input type="text" name="lname" class = "bio" placeholder="LAST NAME"></br>
		<input type="number" name="tel" class = "bio" placeholder="PHONE NUMBER"></br>
		<textarea type="text" name="address" class = "bio" placeholder="ADDRESS"> </textarea></br>
		<input type="text" name="Uname" class = "bio" placeholder="USERNAME"></br>
		<input type="text" name="password" class = "bio" placeholder="PASSWORD"></br>
		<input type="text" name="password2" class = "bio" placeholder="ENTER AGAIN"></br>
		</div>

		POSITION
		<div id= "pos">
		<input type="radio" name="doctor">DOCTOR</br>
		<input type="radio" name="support">SUPPORT STAFF</br>
		<input type="radio" name="admin">ADMIN</br>
		</div>

	<button id = "save" type = "button">SAVE</button>
</div>
</body>
</html>