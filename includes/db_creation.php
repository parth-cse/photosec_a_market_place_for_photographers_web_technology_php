<?php 
    $servername="127.0.0.1:3306"; 
    $username= "root"; 
    $password= ""; 
    $conn= new mysqli($servername, $username, $password); 
    if ($conn->connect_error) { 
        die("connection error". $conn->connect_error); 
    } 
    $sql = "Create Database wtmain"; 
    if($conn->query($sql)===TRUE) 
    { 
        echo "DB created sucessfully"; 
    } 
    else{ 
        echo "Error creating database" .$conn->error; 
    } 
    $conn->close(); 
?>