<?php
    error_reporting(0);
    session_start();
    include('./includes/config.php');
    include('./includes/header.php');
?>
<section id="hero">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="./static/img/site/hero.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">We are a Market Place for Photographers. A Platform to Showcase the Photography Talent</h1>
            </div>
        </div>
    </div>
</section>
<section id="photographers">
    <h2>Top Photographers</h2>
    <div>
        <h5>Name: abc</h5>
        <img src="./static/img/site/sanjay.jpg" alt="">
    </div>
    <div>
        <h5>Name: abc</h5>
        <img src="./static/img/site/sanjay.jpg" alt="">
    </div>
    <div>
        <h5>Name: abc</h5>
        <img src="./static/img/site/sanjay.jpg" alt="">
    </div>
</section>
<section id="pics">
    <h2>Top Picks of the Week</h2>
    <img src="./static/img/site/top pick.jpg" alt="">
    <img src="./static/img/site/top pick.jpg" alt="">
    <img src="./static/img/site/top pick.jpg" alt="">
    <img src="./static/img/site/top pick.jpg" alt="">
</section>
<?php
    include('./includes/footer.php');
?>