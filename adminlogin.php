
<?php
        include('./includes/config.php');
        include('./includes/header2.php');


        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            if($email == 'admin@photosec.in' && $password == '12345') {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = 'Parth Jamkhedkar';
                    $_SESSION['email'] = $email;
                    $_SESSION['usertype'] = 'admin';
                    
                    echo "<script>alert('Logged in successfully'); window.location='adminDashboard.php';</script>";
                }
            else {
                  echo "<script>alert('Invalid email or password);</script>";
            }
        }
    ?>
    <form  action="" method="post">
    <img class="mb-4" src="./static/img/site/logo/logo.png" alt="" height="57">
    <h1 class="h3 mb-3 fw-normal">Admin Log In</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">New to Photosec <a href="">Register</a></p>
  </form>

  <?php
    include('./includes/footer2.php');
    ?>