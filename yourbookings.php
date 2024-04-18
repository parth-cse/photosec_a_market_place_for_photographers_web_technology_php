<?php
    include('./includes/config.php');
    if($_SESSION['loggedin'] == false){
        header("Location: login.php");
    }
    include('./includes/header.php'); 
?>

<?php
    include('./includes/footer.php');
    ?>