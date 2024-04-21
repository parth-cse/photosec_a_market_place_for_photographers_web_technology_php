<?php
    include("./includes/header.php");
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
                <div class="card-border">
                    <div class="photographer-card">
                        <div class="photographer-identity">
                            <img src="./static/img/site/sanjay.jpg" alt="" class="photographers-section__image">
                            <div class="photographer-name">
                                <h2>Sanjay Jadhav</h2>
                                <p>Years of Experience: NA</p>
                            </div>
                        </div>
                        <div class="photographer-card-portfolio">
                            <img src="./static/img/site/p2.jpg" alt="">
                            <img src="./static/img/site/p3.jpg" alt="">
                            <img src="./static/img/site/p5.jpg" alt="">
                            <img src="./static/img/site/slider-img2.jpg" alt="">
                        </div>
                        <p class="link-to-profile"><a href="">View Profile</a></p>
                    </div>
                    
                </div>
                <div class="card-border">
                    <div class="photographer-card">
                        <div class="photographer-identity">
                            <img src="./static/img/site/sanjay.jpg" alt="" class="photographers-section__image">
                            <div class="photographer-name">
                                <h2>Sanjay Jadhav</h2>
                                <p>Years of Experience: NA</p>
                            </div>
                        </div>
                        <div class="photographer-card-portfolio">
                            <img src="./static/img/site/p2.jpg" alt="">
                            <img src="./static/img/site/p3.jpg" alt="">
                            <img src="./static/img/site/p5.jpg" alt="">
                            <img src="./static/img/site/slider-img2.jpg" alt="">
                        </div>
                        <form action="photographer-profile.php" method="post" class="link-to-profile"><input type="checkbox" name="link" id="1" value="" hidden><button type="submit" class="a" name="email" value="">View Profile</button></form>
                    </div>
                    
                </div>
            </div>
        </section>

<?php
    include("./includes/footer.php");
    ?>