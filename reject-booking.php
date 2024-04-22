<?php
include('./includes/config.php');
$bookingId = $_GET['reject'];
if($bookingId != NULL){
   $sql = "UPDATE bookings SET status = 'Rejected' WHERE id = '$bookingId'";
    if($conn->query($sql)){
        echo "<script> alert(\"Booking Request Rejected\"); window.history.back();</script>"; 
    }else{
        echo "<script> alert(\"Something Went Wrong\"); window.location = 'history.back()'</script>";
    }}
?>