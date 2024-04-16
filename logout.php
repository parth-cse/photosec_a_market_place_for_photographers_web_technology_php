<?php
include('includes/config.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    header('Location:login.php');
    exit();
}

?>