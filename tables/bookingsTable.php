<?php
    include('../includes/config.php');

    $sql = "CREATE  TABLE if not exists bookings(
        id INTEGER PRIMARY KEY AUTO_INCREMENT ,
        clientName VARCHAR(60) NOT NULL,
        clientEmail VARCHAR(100) NOT NULL,
        photoGrapherEmail VARCHAR(60) NOT NULL,
        bookingDate DATE NOT NULL,
        numberOfDays INTEGER NOT NULL,
        status VARCHAR(25) DEFAULT 'Pending' CHECK (status in ('Pending', 'Accepted','Rejected', 'Completed', 'Cancelled')),
        bookAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        shoottype VARCHAR(60),
        shootvenue  VARCHAR(255),
        contact VARCHAR(30)
        )";

        if ($conn->query($sql) === True){
            echo "Table bookings created successfully";
        }else{
            echo "Error hai bhai dekh <br/>".$conn->error;
        }
?>