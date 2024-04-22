<?php
include('./includes/config.php');
$bookingId = $_GET['bookingid'];
if($bookingId != NULL){
   $sql = "UPDATE bookings SET status = 'Cancelled' WHERE id = '$bookingId'";
    if($conn->query($sql)){
        echo "<script> alert(\"Booking Request Cancelled\"); window.history.back();</script>"; 
    }else{
        echo "<script> alert(\"Something Went Wrong\"); window.location = 'history.back()'</script>";
    }}
?>