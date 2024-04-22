<?php
    /*if($_SESSION['loggedin'] == false){
        header("Location: login.php");
    }*/
    
    include('./includes/header.php');
    if($_SESSION['loggedin'] === true){

    }else{
        echo "<script>alert('Please log in first'); window.location= 'login.php';</script>"; 
    }

    $sql = "SELECT * FROM bookings";
    $result = $conn->query($sql);
    
?>


<section id="user-dashboard-page">
<div class="sidebarwindow">
                <?php include('./includes/adminNav.php'); ?>
            </div>

            <div class="scroll-container">
            <?php if($result->num_rows>0) { while($row = $result-> fetch_assoc()){ ?>
                <div class="booking">
                    <div class="booking-details user-booking-details" style="padding-bottom: 20px">
                        
                        <div class="details">
                            <div>
                                <p class="booking-id user-booking-id" style="font-size: 45px;">Booking Id: <?php echo "".$row['id']; ?></p><br>
                                <div><p class="user-photographer-booking-details-class"><?php echo "".$row['bookingDate']; ?><br><br>
                                No of Days: <?php echo "".$row['numberOfDays']; ?><br><br>
                                Name of User: abc<br><br>
                                Contact Details: <?php echo "".$row['contact']; ?></p></div>
                            </div>
                            <div class="bookedPhotographer">
                                <p class="booking-date user-booking-date">Date: <?php echo "".$row['bookAt'] ?></p>
                                <div><p class="user-photographer-booking-details-class">Shoot Type: <?php echo "".$row['shoottype'] ?><br><br>
                                Venue: <?php echo "".$row['shootvenue'] ?><br><br>
                                Photographer Email: NA<br><br>
                                Status: <span style="color: #F4E079"><?php echo "".$row['status'] ?></span></p></div>
                            </div>
                        </div>
                    </div>
                <hr class="user-hr"/>
                <?php  }} else { ?>
                <div class="photographer-name">
                                <h2 style="text-align: center; margin-top: 50px">No Booking Made</h2>
                            </div> <?php } ?>
            </div>
        </section>

<?php 
    include('./includes/footer.php');
?>