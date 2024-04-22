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
                <?php $rank = "SELECT * FROM toprank";
                    $result_rank = $conn->query($rank);
                    $row = $result_rank->fetch_assoc();
                    $r1 =  $row['rank1'];
                    $r2 =  $row['rank2'];
                    $r3 =  $row['rank3']; ?>
                <div class="photographer p2">
                    <?php 
                    
                    $sqlp2 = "SELECT * FROM  photographeruser WHERE email='$r2'";
                    $res2 = $conn->query($sqlp2);
                    $row2 = $res2 -> fetch_assoc(); ?>
                    <img src="<?php echo "".$row2['profile'] ?>" alt="">
                    <div class="photographer-info">
                        <h1 class="photo-name"><?php echo "".$row2['name'] ?></h1>
                        <?php $bsqlr2 = "SELECT * FROM bookings WHERE photoGrapherEmail = '$r2'";
                            $bres2 = $conn->query($bsqlr2) ; ?>
                        <p class="photo-order-no">Orders Completed: <?php echo "".$bres2 -> num_rows; ?></p>
                    </div>
                </div>
                <div class="photographer p1">
                <?php 
                    
                    $sqlp1 = "SELECT * FROM  photographeruser WHERE email='$r1'";
                    $res1 = $conn->query($sqlp1);
                    $row1 = $res1 -> fetch_assoc(); ?>
                    <img src="<?php echo "".$row1['profile'] ?>" alt="">
                    <div class="photographer-info">
                        <h1 class="photo-name"><?php echo "".$row1['name'] ?></h1>
                        <?php $bsqlr1 = "SELECT * FROM bookings WHERE photoGrapherEmail = '$r1'";
                            $bres1 = $conn->query($bsqlr1) ; ?>
                        <p class="photo-order-no">Orders Completed: <?php echo "".$bres1 -> num_rows; ?></p>
                    </div>
                </div>
                <div class="photographer p3">
                <?php 
                    
                    $sqlp3 = "SELECT * FROM  photographeruser WHERE email='$r3'";
                    $res3 = $conn->query($sqlp3);
                    $row3 = $res3 -> fetch_assoc() ?>
                    <img src="<?php echo "".$row3['profile'] ?>" alt="">
                    <div class="photographer-info">
                        <h1 class="photo-name"><?php echo "".$row3['name'] ?></h1>
                        <?php $bsqlr3 = "SELECT * FROM bookings WHERE photoGrapherEmail = '$r3'";
                            $bres3 = $conn->query($bsqlr3) ; ?>
                        <p class="photo-order-no">Orders Completed: <?php echo "".$bres3 -> num_rows; ?></p>
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