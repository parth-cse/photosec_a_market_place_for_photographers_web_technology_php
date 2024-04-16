<?php
    include('../includes/config.php');

    $sql = "CREATE  TABLE if not exists bookings(
        id INTEGER PRIMARY KEY AUTO_INCREMENT ,
        clientName VARCHAR(60) NOT NULL,
        clientEmail VARCHAR(100) NOT NULL UNIQUE,
        photoGrapherName VARCHAR(60) NOT NULL,
        bookingDate DATE NOT NULL,
        numberOfDays INTEGER NOT NULL,
        bookAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql) === True){
            echo "Table bookings created successfully";
        }else{
            echo "Error hai bhai dekh <br/>".$conn->error;
        }
?>