<?php
    /*if($_SESSION['loggedin'] == false){
        header("Location: login.php");
    }*/
    
    include('./includes/header.php');
    if($_SESSION['loggedin'] === true){

    }else{
        echo "<script>alert('Please log in first'); window.location= 'login.php';</script>"; 
    }

    $sql =  "SELECT * FROM photographeruser WHERE email='".$_SESSION['email']."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc(); 
?>


<section id="user-dashboard-page">
            <div class="sidebarwindow">
            <div class="side-nav-profile">
                <div class="profile-flex">
                    <div class="profile-pic-gird">
                        <img src="<?php echo"".$row['profile'] ?>" alt="">
                        <a href="updatePhotographherProfile.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg></a>
                    </div>
                    <div>
                        <p class="profile-name">
                            <?php echo"".$row['name'] ?>
                        </p>
                    </div>
                    <div>
                        <hr style="border: 1px solid #fff"><br>
                        <ul>
                            <li><a href="./photoGrapherDashboard.php">Approved Requests</a></li><br>
                            <li><a href="./photoGrapherDashboard-pending.php">Pending Requests</a></li><br>
                            <li><a href="./photoGrapherDashboard-complete.php">Completed Requests</a></li><br>
                            <li><a href="./photoGrapherDashboard-reject.php">Rejected Requests</a></li><br>
                            <li><a href="./photoGrapherDashboard-cancel.php">Cancelled</a></li>
                        </ul>
                    </div>
                </div>   
                <div>
                    <form action="logout.php">
                        <button type="submit" class="btn-primary">Log Out</button>
                    </form>
                </div>

                
            </div>
            </div>

            <?php 
                $bsql = "SELECT * FROM  bookings WHERE photoGrapherEmail='".$_SESSION['email']."' AND status='Completed' ORDER BY bookAt DESC";
                $res1 = $conn->query($bsql);
                ?>
            <div class="scroll-container">
                <div class="booking">
                <?php if($res1->num_rows>0){ while($brow = $res1->fetch_assoc()){?>
                    <div class="booking-details user-booking-details" style="padding-bottom: 20px">
                        
                        <div class="details">
                            <div>
                                <p class="booking-id user-booking-id" style="font-size: 45px;">Booking Id: <?php echo"".$brow['id']; ?></p>
                                <div><p class="user-photographer-booking-details-class">Booking for: <?php echo"".$brow['bookingDate']; ?><br><br>
                                No of Days: <?php echo "".$brow['numberOfDays']; ?><br><br>
                                Name of Client: <?php echo "".$brow['clientName']; ?><br><br>
                                Contact Details: <?php echo "".$brow['contact']; ?></p></div>
                            </div>
                            <div class="bookedPhotographer">
                                <p class="booking-date user-booking-date">Date: <?php echo "".$brow['bookAt']; ?></p>
                                <div><p class="user-photographer-booking-details-class">Shoot Type: <?php echo "".$brow['shoottype']; ?><br><br>
                                Venue: <?php echo "".$brow['shootvenue']; ?> <br><br>
                                Client Email: <?php echo"".$brow['clientEmail']; ?> <br><br>
                                Status: <span style="color: Green;"><?php echo "".$brow['status']; ?></span></p></div>
                            </div>
                        </div>
                    </div>
                    <hr class="user-hr"/><?php }}else{ ?><p class="booking-id user-booking-id" style="font-size: 45px;padding: 50px; text-align: center">No Completed Requests</p><?php } ?>
                </div>
            </div>
        </section>

<?php 
    include('./includes/footer.php');
?>