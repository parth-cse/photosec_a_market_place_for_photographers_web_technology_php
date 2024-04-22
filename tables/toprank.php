<?php
    include('../includes/config.php');

    $sql = "CREATE  TABLE if not exists toprank(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        rank1 VARCHAR(100) NOT NULL UNIQUE,
        rank2 VARCHAR(100) NOT NULL UNIQUE,
        rank3 VARCHAR(100) NOT NULL UNIQUE
        )";

        if ($conn->query($sql) === True){
            echo "Table created successfully";
        }else{
            echo "Error hai bhai dekh <br/>".$conn->error;
        }
?>