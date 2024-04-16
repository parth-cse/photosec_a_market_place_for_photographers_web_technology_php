<?php
    include('../includes/config.php');

    $sql = "CREATE  TABLE if not exists photographerUser(
        id INTEGER PRIMARY KEY AUTO_INCREMENT ,
        name VARCHAR(60) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        profile VARCHAR(255),
        photo1 VARCHAR(255),
        photo2 VARCHAR(255),
        photo3 VARCHAR(255),
        isVerified BOOL DEFAULT FALSE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql) === True){
            echo "Table photographerUser created successfully";
        }else{
            echo "Error hai bhai dekh <br/>".$conn->error;
        }
?>