<?php
//start session
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    //unset all session variables
    session_unset();
    //destroy all session variables
    session_destroy();
    //redirect to index page
    header("Location: index.php");
}
?>