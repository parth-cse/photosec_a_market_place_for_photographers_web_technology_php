<?php
    include('config.php');
    if($_SESSION['loggedin'] === true){
        if($_SESSION['usertype'] == 'admin'){
            $img_url = "./static/img/site/default.jpg";
            $url = './adminDashboard.php';
        }else if($_SESSION['usertype'] == 'photographer'){
            $imgsql = "SELECT profile FROM photographeruser WHERE email='".$_SESSION["email"]."'";
            $imgresult = $conn-> query( $imgsql );
            $imgrow = $imgresult -> fetch_assoc();
            if($imgrow['profile'] == NULL){
                $img_url = './static/img/site/default.jpg';
            }
            else {
                $img_url = $imgrow['profile'];
            }
            $url = './photoGrapherDashboard.php';
        }else{
            $imgsql = "SELECT profile FROM clientuser WHERE email='".$_SESSION["email"]."'";
            $imgresult = $conn -> query( $imgsql );
            $imgrow = $imgresult -> fetch_assoc();
            if($imgrow['profile'] == NULL){
                $img_url = './static/img/site/default.jpg';
            }
            else {
                $img_url = $imgrow['profile'];
            }
            $url = './userdashboard.php';
        }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photosec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre&family=DM+Serif+Text&family=IBM+Plex+Serif:wght@700&family=Open+Sans:wght@300..800&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./static/styles/main.css">
</head>
<body>
    <header id="header">
        <div class="nav-bar">
            <div class="logo">
                <a href="./index.php"><img src="./static/img/site/logo/logo.png" alt="logo" id="logo"></a>
            </div>
            <div class="nav">
                <a href="./index.php" class="nav-element">Home</a>
                <a href="./about.php" class="nav-element">About Us</a>
                <a href="./photographer.php" class="nav-element">Photographers</a>
                <a href="./yourbookings.php" class="nav-element">Your Bookings</a>
            </div>
            <?php if($_SESSION['loggedin'] != true) { ?>
            <a href="login.php" class="btn-primary"><span>Login</span></a>
            <?php }else{ ?>
                <a href="<?php echo "".$url; ?>" ><span><img src="<?php echo "".$img_url ?>" class="header-profile-icon" style="width: 50px;
    height: 50px;
    border-radius: 50%;" alt=""></span></a>
                <?php } ?>
        </div>
    </header>
    <main>