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
<section id="photographers-section-page">
            <div class="sidebarwindow">
            <div class="side-nav">
                <form action="" method="post">
                    <div class="search-bar">
                        <input type="text" name="search" id="search" placeholder="Search Photographer by Name">
                        <button type="submit"><svg width="30" viewBox="0 0 199 190" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="78" cy="78" r="68" stroke="black" stroke-width="20"/>
                            <rect x="111" y="127.456" width="36" height="88.2868" rx="18" transform="rotate(-45 111 127.456)" fill="black"/>
                            </svg></button>
                    </div>
                </form>
                    <hr />
                <div class="filter">
                    <div class="filter-heading">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-filter-square-fill" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm.5 5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1 0-1M4 8.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m2 3a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
                          </svg>
                        <p>Filters:</p> 
                    </div>
                    <br>
                    <div>
                    <p class="filter-head">Years of Experience:</p>
                    <div>
                        <div>
                            <input type="checkbox" name="" class="filtercheck" id="1-3">
                            <label for="1-3" class="filtercheck">1-3 Years</label>
                        </div>
                        <div>
                            <input type="checkbox" name="" class="filtercheck" id="4-6">
                            <label for="4-6" class="filtercheck">4-6 Years</label>
                        </div>
                        <div>
                            <input type="checkbox" name="" class="filtercheck" id="6+">
                            <label for="6+" class="filtercheck">6+ Years</label>
                        </div>
                    </div></div>
                    <div>
                        <br>
                    <p class="filter-head">No. of Orders:</p>
                    <div>
                        <div>
                            <input type="checkbox" name="" class="filtercheck" id="5-10o">
                            <label for="5-10o" class="filtercheck">5-10</label>
                        </div>
                        <div>
                            <input type="checkbox" name="" class="filtercheck" id="11-50o">
                            <label for="11-50o" class="filtercheck">11-50</label>
                        </div>
                        <div>
                            <input type="checkbox" name="" class="filtercheck" id="50+">
                            <label for="50+" class="filtercheck">50+</label>
                        </div>
                    </div>
                    </div>
                   

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
                        <form action="photographer-porfile.php" class="link-to-profile"><button type="submit" class="a" name="slug" value="<?php echo "".$row['email']; ?>">View Profile</button></form>
                    </div>
                    </div><?php }} else { ?>
                    <div class="photographer-name">
                                <h2 style="text-align: center; margin-top: 50px">No Photographer Approved</h2>
                            </div> <?php } ?>
                </div>
                
            </div>
        </section>

<?php
    include("./includes/footer.php");
    ?>