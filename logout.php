<?php
include('includes/config.php');


if($_SERVER['REQUEST_METHOD']=='POST'){
    session_unset();
    header('Location:index.php');
    $_SESSION['loggedin'] = false;
}
else{
    session_unset();
    header('Location:index.php');
    $_SESSION['loggedin'] = false;
}

?>