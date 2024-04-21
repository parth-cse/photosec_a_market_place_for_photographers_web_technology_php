<?php
    include('./includes/config.php');
    $apemail = $_GET['email_to_approve'];
    if($apemail != NULL){
       $sql = "UPDATE photographeruser SET isVerified = '1' WHERE email = '$apemail'";
        if($conn->query($sql)){
            echo "<script> alert(\"Approved\"); window.history.back();</script>"; 
        }else{
            echo "<script> alert(\"Something Went Wrong\"); window.location = 'history.back()'</script>";
        }}?>