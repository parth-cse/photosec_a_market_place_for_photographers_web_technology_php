<?php
    include('../includes/config.php');

    $sql = "CREATE  TABLE if not exists uploadimg(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        email VARCHAR(100) NOT NULL UNIQUE,
        img VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql) === True){
            echo "Table created successfully";
        }else{
            echo "Error hai bhai dekh <br/>".$conn->error;
        }
?>