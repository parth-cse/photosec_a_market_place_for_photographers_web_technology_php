<?php
    /*if($_SESSION['loggedin'] == false){
        header("Location: login.php");
    }*/
    
    include('./includes/header.php');
    if($_SESSION['loggedin'] === true){

    }else{
        echo "<script>alert('Please log in first'); window.location= 'adminlogin.php';</script>"; 
    }

    $sql =  "SELECT * FROM photographeruser WHERE isVerified='1'";
    $result = $conn->query($sql);
    
?>


<section id="user-dashboard-page">
            <div class="sidebarwindow">
            <div class="side-nav-profile">
                <div class="profile-flex">
                    <div class="profile-pic-gird">
                        <img src="./static/img/site/sanjay.jpg" alt="">
                        <a href="updatePhotographherProfile.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg></a>
                    </div>
                    <div>
                        <p class="profile-name">
                            Admin
                        </p>
                    </div>
                    <div>
                        <hr style="border: 1px solid #ffffff"><br>
                        <ul>
                            <li><a href="#">Approved Users</a></li><br>
                            <li><a href="">Pending Requests</a></li><br>
                            <li><a href="">Booking Requests</a></li><br>
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

            <div class="scroll-container">
            <?php if($result->num_rows > 0){ while($row = $result->fetch_assoc()){?>
            <div class="card-border">
                    <div class="photographer-card">
                        <div class="photographer-identity">
                            <img src="<?php echo "".$row['profile']; ?>" alt="" class="photographers-section__image">
                            <div class="photographer-name">
                                <h2><?php echo "".$row['name']; ?></h2>
                                <p>Years of Experience: <?php echo "".$row['experience']; ?></p>
                            </div>
                        </div>
                        <div class="photographer-card-portfolio">
                            <img src="<?php echo "".$row['photo1']; ?>" alt="">
                            <img src="<?php echo "".$row['photo2']; ?>" alt="">
                            <img src="<?php echo "".$row['photo3']; ?>" alt="">
                            <img src="<?php echo "".$row['photo1']; ?>" alt="">
                        </div>
                        <form action="pgremove.php" style="margin: 0px; margin-top: 50px">
                            <input type="hidden" name="id_to_cancel" value="<?php echo "".$row['email']; ?>"> 
                            <button type="submit" id="cancelBtn" class="btn-primary" style="background-color: red; border: none; color: white;">Remove</button>
                        </form>
                    </div>
                    
                </div><?php }} else { ?>
                    <div class="photographer-name">
                                <h2 style="text-align: center; margin-top: 50px">No Photographer Approved</h2>
                            </div> <?php } ?>
                
            </div>
        </section>

<?php 
    include('./includes/footer.php');
?>