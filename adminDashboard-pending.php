<?php
    /*if($_SESSION['loggedin'] == false){
        header("Location: login.php");
    }*/
    
    include('./includes/header.php');
    if($_SESSION['loggedin'] === true){

    }else{
        echo "<script>alert('Please log in first'); window.location= 'login.php';</script>"; 
    }
    
?>


<section id="user-dashboard-page">
            <div class="sidebarwindow">
            <div class="side-nav-profile">
                <div class="profile-flex">
                    <div class="profile-pic-gird">
                        <img src="./static/img/site/sanjay.jpg" alt="">
                        <a href="updatePhotographherProfile.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg></a>
                    </div>
                    <div>
                        <p class="profile-name">
                            Admin
                        </p>
                    </div>
                    <div>
                        <hr style="border: 1px solid #ffffff"><br>
                        <ul>
                            <li><a href="#">Approved Users</a></li><br>
                            <li><a href="">Pending Requests</a></li><br>
                            <li><a href="">Booking Requests</a></li><br>
                        </ul>
                    </div>
                </div>   
                <div>
                    <form action="logout.php">
                        <button type="submit" class="btn-primary">Log Out</button>
                    </form>
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
                        <form action="cancel-booking.php" style="margin: 0px; margin-top: 50px">
                            <input type="hidden" name="id_to_delete" value=""> 
                            <button type="submit" id="cancelBtn" class="btn-primary" style="background-color: green; border: none; color: white;">Approve</button>
                        </form>
                    </div>
                    
                </div>
                <div class="booking">
                <div class="booking-details user-booking-details">
                    
                    <div class="details">
                        <div>
                            <p class="booking-id user-booking-id" style="font-size: 45px;">Booking Id: XXX</p>
                            <div><p class="user-photographer-booking-details-class">Booking for: YYYY/MM/DD<br><br>
                            No of Days: aa<br><br>
                            Name of Photographer: abc<br><br>
                            Booking Status: Accepted</p></div>
                        </div>
                        <div class="bookedPhotographer">
                            <p class="booking-date user-booking-date">Date: YYYY/MM/DD</p>
                            <a href=""><img style="width: 350px; height: 350px;" src="./static/img/site/sanjay.jpg" alt=""></a>
                        </div>
                    </div>
                </div></div>
            </div>
        </section>

<?php 
    include('./includes/footer.php');
?>