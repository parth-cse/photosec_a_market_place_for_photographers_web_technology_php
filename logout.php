<?php
include('includes/config.php');
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){
    session_unset();
    header('Location:login.php');
    $_SESSION['loggedin'] = false;
}

?>