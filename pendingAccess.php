<?php
include("./includes/config.php");
include("./includes/header2.php");

if($_SESSION['loggedin'] === false){
    echo "<script> alert(\"Please login first!\"); window.location = \"photographerLogin.php\"; </script>";
}

$email = $_SESSION['email'];
?>

<form action="" method="post" enctype="multipart/form-data">
    <img class="mb-4" src="./static/img/site/logo/logo.png" alt="" height="57">
    <h1 class="h3 mb-3 fw-normal">All Done, Your Profile is Send for Review...</h1>
    <br><br>
    <a href="photographerCompleteProfile.php" class="btn btn-primary w-100 py-2">Update Your Profile</a>
    
    <p class="mt-5 mb-3 text-body-secondary"><a href="./logout.php">Log out</a></p>
</form>

<?php
// Check if form was submitted

    
