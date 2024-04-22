<?php
    include('./includes/header.php');
?>
<section id="hero">
            <div class="hero-content">
                <div><h1 class="headline">We are a Market Place for Photographers. A Platform to Showcase the Photography Talent...</h1></div>
                <div id="hero-img"><img src="./static/img/site/hero.jpg" alt="Hero Image" ></div>
            </div>
        </section>

        <section id="top-photographers">
            <div class="heading">
                <h2 style="color: #F4E079;" class="section-heading">Top 3 Photographers</h2>
            </div>
            <div id="photographer-main">
                <div class="photographer p2">
                    <img src="./static/img/site/sanjay.jpg" alt="">
                    <div class="photographer-info">
                        <h1 class="photo-name">Sanjay Jadhav</h1>
                        <p class="photo-order-no">Orders Completed: 56</p>
                    </div>
                </div>
                <div class="photographer p1">
                    <img src="./static/img/site/sanjay.jpg" alt="">
                    <div class="photographer-info">
                        <h1 class="photo-name">Sanjay Jadhav</h1>
                        <p class="photo-order-no">Orders Completed: 56</p>
                    </div>
                </div>
                <div class="photographer p3">
                    <img src="./static/img/site/sanjay.jpg" alt="">
                    <div class="photographer-info">
                        <h1 class="photo-name">Sanjay Jadhav</h1>
                        <p class="photo-order-no">Orders Completed: 56</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="top-pics">
            <div class="heading">
                <h2 class="section-heading">Top Pics of the Week</h2>
            </div>
            <div style="padding: 0px 103px 75px 103px;">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="2000">
                        <img src="./static/img/upload/top1.jpg" class="d-block w-100 slider-img" alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="./static/img/upload/top2.jpg" class="d-block w-100 slider-img" alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="2000"data-bs-interval="2000">
                        <img src="./static/img/upload/top3.jpg" class="d-block w-100 slider-img" alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="2000"data-bs-interval="2000">
                        <img src="./static/img/upload/top4.jpg" class="d-block w-100 slider-img" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </section>
<?php
    include('./includes/footer.php');
?>