<?php
//session start
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    //unsets all session variables
    session_unset();
    //destroys all session variables
    session_destroy();
    //redirect to index page
    header("Location:index.php");
}
?>