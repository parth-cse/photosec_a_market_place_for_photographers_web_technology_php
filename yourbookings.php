<?php
    /*if($_SESSION['loggedin'] == false){
        header("Location: login.php");
    }*/
    
    include('./includes/header.php');
    if($_SESSION['loggedin'] === true){
        $email = $_SESSION['email'];
    }else{
        echo "<script>alert('Please log in first'); window.location= 'login.php';</script>"; 
    }
    $sql = "SELECT * FROM bookings WHERE clientEmail='$email'";
    $result = $conn->query($sql);
    
?>
<section id="bookings" >
    <?php if($result->num_rows>0) { while($row = $result-> fetch_assoc()){ ?>
            <div class="booking">
                <div class="booking-details">
                    
                    <div class="details">
                        <div>
                            <p class="booking-id">Booking Id: <?php echo "".$row['id']; ?></p>
                            <div><p>Booking for: <?php echo "".$row['bookingDate']; ?></p><br>
                            <p>No of Days: <?php echo "".$row['numberOfDays']; ?></p><br>
                            <?php $pgemail = $row["photoGrapherEmail"];
                            $pgnameSQL = "SELECT * FROM photographeruser WHERE email='$pgemail'";
                            $pgresult = $conn -> query( $pgnameSQL );
                            $pgrow = $pgresult -> fetch_assoc();
                            ?>
                            <p>Name of Photographer: <?php echo "".$pgrow['name']; ?></p><br>
                            <p>Booking Status: <span style="color:#F4E079"><?php echo"".$row['status']; ?></span></p></div><br>
                        </div>
                        <div  class="bookedPhotographer">
                            <p class="booking-date">Date: <?php echo "".$row['bookAt'] ?></p>
                            <a href="./photographer-porfile.php?slug=<?php echo"".$pgrow['email']; ?>"><img src="<?php echo "".$pgrow['profile'] ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="booking-btn">
                        <div class="btn-primary"><?php echo"".$row['status']; ?></div>
                        <form action="cancelbooking.php">
                            <button type="submit" name='bookingid' value="<?php echo "".$row['id'] ?>" class="btn-primary red-btn btn-border">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
            <hr /><?php  }} else { ?>
                <div class="photographer-name">
                                <h2 style="text-align: center; margin: 50px;">Make your First Booking Requests <a href="photographer.php">click here</a></h2>
                            </div> <?php } ?>
            
        </section>
<?php
    include('./includes/footer.php');
    ?>