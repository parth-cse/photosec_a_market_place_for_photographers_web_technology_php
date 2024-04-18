<?php
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>PhotoSecc</title>
</head>
<body>
    <h1>
        PhotoSecc
    </h1>
    <nav>
        <a href="#">HOME</a>
        <a href="#">ABOUT US</a>
        <a href="#">Photographers</a>
        <a href="#">Your Bookings</a>
        <?php 
            if($_SESSION['loggedin'] == false){
                ?>
        <a href="#">Log in</a>
        <?php
            } else {
                ?>
        <form action="logout.php" method="post">
            <input type="submit" value="Log Out">
        </form>
        <?php
            } ?>
    </nav>
