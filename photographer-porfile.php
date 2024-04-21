<?php
    include('./includes/header.php');
?>
 <section id="photographer-profile">
            <div class="sidebarwindow photo-sidebarwindow">
                <div class="side-nav-profile Photographer-sidebar">
                    <div class="profile-flex">
                        <div class="profile-pic-gird photographer-profile-pic">
                            <img src="./static/img/site/sanjay.jpg" alt="">
                        </div>

                    <div class="photographer-experience">
                        <p>Experience: AA Years</p>
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

            <div class="scroll-container">
                <div class="portfolio">
                    <div class="portfolio-title">
                        <h2>Sanjay Jadhav's Portfolio</h2>
                        <div></div>
                    </div>
                    <div class="portfolio-photos">
                        <img src="./static/img/site/p2.jpg" alt="">
                        <img src="./static/img/site/p3.jpg" alt="">
                        <img src="./static/img/site/p5.jpg" alt="">
                        <img src="./static/img/site/about-img2.jpg" alt="">
                    </div>    
                </div>
            </div>
        </section>
<?php
    include('./includes/footer.php');
?>