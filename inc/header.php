<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">

  </head>
<body>
<header>
<nav>
    <ul>
        <li id="logo">Hospital Management System</li>
        <li id = "username"><?php echo $_SESSION['staff_name'] ?></li>
    </ul>

</nav>
</header>
    
</body>
</html>