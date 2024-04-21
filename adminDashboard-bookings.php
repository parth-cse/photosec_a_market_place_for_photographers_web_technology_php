<?php
    /*if($_SESSION['loggedin'] == false){
        header("Location: login.php");
    }*/
    
    include('./includes/header.php');
    if($_SESSION['loggedin'] === true){

    }else{
        echo "<script>alert('Please log in first'); window.location= 'login.php';</script>"; 
    }
    
?>


<section id="user-dashboard-page">
<div class="sidebarwindow">
                <?php include('./includes/adminNav.php'); ?>
            </div>

            <div class="scroll-container">
                <div class="booking">
                    <div class="booking-details user-booking-details" style="padding-bottom: 20px">
                        
                        <div class="details">
                            <div>
                                <p class="booking-id user-booking-id" style="font-size: 45px;">Booking Id: XXX</p><br>
                                <div><p class="user-photographer-booking-details-class">Booking for: YYYY/MM/DD<br><br>
                                No of Days: aa<br><br>
                                Name of User: abc<br><br>
                                Contact Details: </p></div>
                            </div>
                            <div class="bookedPhotographer">
                                <p class="booking-date user-booking-date">Date: YYYY/MM/DD</p>
                                <div><p class="user-photographer-booking-details-class">Shoot Type:<br><br>
                                Venue: aa<br><br>
                                Additional Requests: NA<br><br>
                                Status: </p></div>
                            </div>
                        </div>
                        <form action="cancel-booking.php" style="margin: 0px; margin-top: 50px">
                            <input type="hidden" name="id_to_delete" value=""> 
                            <button type="submit" id="cancelBtn" class="btn-primary" style="background-color: red; border: none; color: white;">Cancel</button>
                        </form>
                    </div>
                <hr class="user-hr"/>
                <div class="booking">
                <div class="booking-details user-booking-details">
                    
                    <div class="details">
                        <div>
                            <p class="booking-id user-booking-id" style="font-size: 45px;">Booking Id: XXX</p>
                            <div><p class="user-photographer-booking-details-class">Booking for: YYYY/MM/DD<br><br>
                            No of Days: aa<br><br>
                            Name of Photographer: abc<br><br>
                            Booking Status: Accepted</p></div>
                        </div>
                        <div class="bookedPhotographer">
                            <p class="booking-date user-booking-date">Date: YYYY/MM/DD</p>
                            <a href=""><img style="width: 350px; height: 350px;" src="./static/img/site/sanjay.jpg" alt=""></a>
                        </div>
                    </div>
                </div></div>
            </div>
        </section>

<?php 
    include('./includes/footer.php');
?>