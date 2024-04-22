<?php
    include('./includes/config.php');
    $date = $_GET['date'];
    $venue = $_GET['venue'];
    $type = $_GET['type'];
    $days = $_GET['days'];
    $nameclient = $_SESSION['username'];
    $contact = $_GET['contact'];
    $clientemail = $_SESSION['email'];
    $email = $_GET['photographer'];
    if($_SESSION['loggedin'] == false){
        echo "<script>alert(\"Log in to proceed with booking request\"); window.location = 'yourbookings.php'; </script>";
    }
    else{
        $sql = "INSERT INTO `bookings`(`clientName`, `clientEmail`, `photoGrapherEmail`, `bookingDate`, `numberOfDays`, `shoottype`, `shootvenue`, `contact`) VALUES ('$nameclient','$clientemail','$email','$date','$days','$type','$venue','$contact')";
        if($conn->query($sql)){
            echo "<script>alert(\"Booking Request Send\"); window.location = 'yourbookings.php' </script>";
        }
        else{
            echo "<script>alert(\"404\"); window.history.back() </script>";
        }
    }