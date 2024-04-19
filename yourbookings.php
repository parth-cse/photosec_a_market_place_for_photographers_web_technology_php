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
<section id="bookings">
            <div class="booking">
                <div class="booking-details">
                    
                    <div class="details">
                        <div>
                            <p class="booking-id">Booking Id: XXX</p>
                            <div><p>Booking for: YYYY/MM/DD</p><br>
                            <p>No of Days: aa</p><br>
                            <p>Name of Photographer: abc</p><br>
                            <p>Booking Status: Accepted</p></div><br>
                        </div>
                        <div  class="bookedPhotographer">
                            <p class="booking-date">Date: YYYY/MM/DD</p>
                            <a href=""><img src="./static/img/site/sanjay.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="booking-btn">
                        <a href="" class="btn-secondary">Aproved</a>
                        <form action="" method="post">
                            <button type="submit" class="btn-primary red-btn btn-border">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
            <hr />
            <div class="booking">
                <div class="booking-details">
                    
                    <div class="details">
                        <div>
                            <p class="booking-id">Booking Id: XXX</p>
                            <div><p>Booking for: YYYY/MM/DD</p><br>
                            <p>No of Days: aa</p><br>
                            <p>Name of Photographer: abc</p><br>
                            <p>Booking Status: Accepted</p></div><br>
                        </div>
                        <div  class="bookedPhotographer">
                            <p class="booking-date">Date: YYYY/MM/DD</p>
                            <a href=""><img src="./static/img/site/sanjay.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="booking-btn">
                        <a href="" class="btn-secondary">Aproved</a>
                        <form action="" method="post">
                            <button type="submit" class="btn-primary red-btn btn-border">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php
    include('./includes/footer.php');
    ?>