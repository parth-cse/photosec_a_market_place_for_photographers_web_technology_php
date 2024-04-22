<?php
include('./includes/config.php');
$bookingId = $_GET['approve'];
if($bookingId != NULL){
   $sql = "UPDATE bookings SET status = 'Accepted' WHERE id = '$bookingId'";
    if($conn->query($sql)){
        echo "<script> alert(\"Booking Request Accepted\"); window.history.back();</script>"; 
    }else{
        echo "<script> alert(\"Something Went Wrong\"); window.location = 'history.back()'</script>";
    }}
?>