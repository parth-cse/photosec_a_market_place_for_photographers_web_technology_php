<?php
    include('./includes/config.php');
    $apemail = $_GET['id_to_cancel'];
    if($apemail != NULL){
       $sql = "UPDATE photographeruser SET isVerified = '0' WHERE email = '$apemail'";
        if($conn->query($sql)){
            echo "<script> alert(\"Removed\"); window.history.back();</script>"; 
        }else{
            echo "<script> alert(\"Something Went Wrong\"); window.history.back();</script>";
        }}?>