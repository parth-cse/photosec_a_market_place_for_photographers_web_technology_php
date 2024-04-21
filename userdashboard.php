<?php
    /*if($_SESSION['loggedin'] == false){
        header("Location: login.php");
    }*/
    
    include('./includes/header.php');
    if($_SESSION['loggedin'] === true){

    }else{
        echo "<script>alert('Please log in first'); window.location= 'login.php';</script>"; 
    }
    
    $sql = "SELECT * FROM clientuser WHERE email='". $_SESSION["email"]."'";
    $result = $conn->query( $sql );
    $row = $result->fetch_assoc();
    if($row['profile'] == NULL){
        $img_url = './static/img/site/default.jpg';
    }
    else{
        $img_url = $row['profile'];
    }
?>


<section id="user-dashboard-page">
            <div class="sidebarwindow">
            <div class="side-nav-profile">
                <div class="profile-flex">
                    <div class="profile-pic-gird">
                        <img src="<?php echo "".$img_url; ?>" alt="">
                        <a href="updateUserProfile.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg></a>
                    </div>
                    <div>
                        <p class="profile-name">
                            <?php echo "".$row['name']; ?>
                        </p>
                    </div>
                </div>   
                <div>
                    <form action="logout.php">
                        <button type="submit" class="btn-primary">Log Out</button>
                    </form>
                </div>

                
            </div>
            </div>

            <div class="scroll-container">
                
                <div class="booking">
                    <?php
                        $sql1 = "SELECT * FROM bookings WHERE clientEmail='$email'";
                        $result1 = $conn->query($sql1);
                        if($result1->num_rows>0) { while($row1 = $result-> fetch_assoc()){ ?>
                    <div class="booking-details user-booking-details">
                        
                        <div class="details">
                            <div>
                                <p class="booking-id user-booking-id" style="font-size: 45px;">Booking Id: <?php echo "".$row1['id']; ?></p>
                                <div><p class="user-photographer-booking-details-class">Booking for: <?php echo "".$row1['bookingDate']; ?><br><br>
                                No of Days: <?php echo "".$row1['numberOfDays']; ?><br><br>
                                <?php $pgemail = $row1["photoGrapherEmail"];
                            $pgnameSQL = "SELECT * FROM photographeruser WHERE email='$pgemail'";
                            $pgresult = $conn -> query( $pgnameSQL );
                            $pgrow = $pgresult -> fetch_assoc();
                            ?>
                                Name of Photographer: <?php echo "".$pgrow['name']; ?><br><br>
                                Booking Status: <span style="color:#F4E079"><?php echo"".$row1['status']; ?></span></p></div>
                            </div>
                            <div class="bookedPhotographer">
                                <p class="booking-date user-booking-date">Date: <?php echo "".$row1['bookAt'] ?></p>
                                <a href="./photographer-porfile.php?slug=<?php echo"".$pgrow['email']; ?> "><img style="width: 350px; height: 350px;" src="<?php echo "".$pgrow['profile'] ?>" alt=""></a>
                            </div>
                        </div>
                    </div>
                <hr class="user-hr"/><?php  }} else { ?>
                <div class="photographer-name">
                                <h2 style="text-align: center; margin-top: 50px">Make your First Booking Requests <a href="photographer.php">click here</a></h2>
                            </div> <?php } ?>
            </div>
        </section>

<?php 
    include('./includes/footer.php');
?>