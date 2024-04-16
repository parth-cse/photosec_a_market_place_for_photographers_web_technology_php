<?php
    include('../includes/config.php');

    $sql = "CREATE  TABLE if not exists clientUser(
        id INTEGER PRIMARY KEY AUTO_INCREMENT ,
        name VARCHAR(60) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        profile VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql) === True){
            echo "Table clientUser created successfully";
        }else{
            echo "Error hai bhai dekh <br/>".$conn->error;
        }
?>