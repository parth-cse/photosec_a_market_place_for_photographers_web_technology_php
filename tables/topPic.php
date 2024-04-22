<?php
    include('../includes/config.php');

    $sql = "CREATE  TABLE if not exists topimg(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        img1 VARCHAR(255),
        img2 VARCHAR(255),
        img3 VARCHAR(255)
        )";

        if ($conn->query($sql) === True){
            echo "Table created successfully";
        }else{
            echo "Error hai bhai dekh <br/>".$conn->error;
        }
?>