<?php
    /*if($_SESSION['loggedin'] == false){
        header("Location: login.php");
    }*/
    
    include('./includes/header.php');
    if($_SESSION['loggedin'] === true){

    }else{
        echo "<script>alert('Please log in first'); window.location= 'login.php';</script>"; 
    }

    if ($_SESSION['loggedin'] === true) {

    } else {
        echo "<script>alert('Please log in first'); window.location= 'login.php';</script>";
    }

    // Check if form is submitted
    
    
    $sql =  "SELECT * FROM photographeruser WHERE isVerified='0'";
    $result = $conn->query($sql);
    
?>


<section id="user-dashboard-page">
<div class="sidebarwindow">
                <?php include('./includes/adminNav.php'); ?>
            </div>

            <div class="scroll-container">
                <?php if($result->num_rows > 0){ while($row = $result->fetch_assoc()){?>
            <div class="card-border">
                    <div class="photographer-card">
                        <div class="photographer-identity">
                            <img src="<?php echo "".$row['profile']; ?>" alt="" class="photographers-section__image" style="height: 204px">
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
                        <form action="pgapprove.php" style="margin: 0px;">
                            <button type="submit" name="email_to_approve" value="<?php echo "".$row['email']; ?>" id="approveBtn" class="btn-primary" style="background-color: green; border: none; color: white;">Approve</button>
                        </form>
                    </div>
                </div><?php }} else { ?>
                    <div class="photographer-name">
                                <h2 style="text-align: center; margin-top: 50px">No New Requests</h2>
                            </div> <?php } ?>
            </div>
        </section>

<?php 
    include('./includes/footer.php');
?>