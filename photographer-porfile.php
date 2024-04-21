<?php
    include('./includes/header.php');
    $apemail = $_GET['slug'];
    if($apemail != NULL){
        $sql = "SELECT * FROM photographeruser WHERE email = '$apemail'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
?>
 <section id="photographer-profile">
            <div class="sidebarwindow photo-sidebarwindow">
                <div class="side-nav-profile Photographer-sidebar">
                    <div class="profile-flex">
                        <div class="profile-pic-gird photographer-profile-pic">
                            <img src="<?php echo "".$row['profile']; ?>" alt="">
                        </div>

                    <div class="photographer-experience">
                        <p>Experience: <?php echo "".$row['experience']; ?> Years</p>
                        <p>No. of Successful Orders: AA</p>
                    </div>
                </div>   
                <div>
                    <form action="booking-request.php" method="post">
                        <div>
                            <input type="date" name="date" id="date" placeholder="Date" class="form-input-date" required><br />
                        </div>
                        <div>
                            <input type="text" name="venue" id="venue" class="form-input" placeholder="Shoot Venue" required><br />
                        </div>
                        <div>
                            <input type="text" name="type" id="type" class="form-input" placeholder="Shoot Type" required><br />
                        </div>
                        <div>
                            <input type="text" name="days" id="days" class="form-input" placeholder="No. of Days" required><br />
                        </div>
                        <div>
                            <input type="number" name="contact" id="contact" class="form-input" placeholder="Contact Details" required><br />
                        </div>
                        <div>
                            <button type="submit" class="btn-primary" style="border: none;">Submit</button>
                        </div>
                    </form>
                </div>

                
                </div>
            </div>

            <div class="scroll-container1">
                <div class="portfolio">
                    <div class="portfolio-title">
                        <h2><?php echo "".$row['name']; ?>'s Portfolio</h2>
                        <div></div>
                    </div>
                    <div class="portfolio-photos">
                        <img src="<?php echo "".$row['photo1']; ?>" alt="">
                        <img src="<?php echo "".$row['photo2']; ?>" alt="">
                        <img src="<?php echo "".$row['photo3']; ?>" alt="">
                        <img src="<?php echo "".$row['photo1']; ?>" alt="">
                    </div>    
                </div>
            </div>
        </section>
<?php
    include('./includes/footer.php');
?>