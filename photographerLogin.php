
<?php
        include('./includes/config.php');
        include('./includes/header2.php');


        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            if ($type == 'client') {
                $select = "SELECT * FROM clientuser WHERE email = '$email'";
                $result = $conn->query($select);
            } else{
                $select = "SELECT * FROM photographeruser WHERE email = '$email'";
                $result = $conn->query($select);
            }

            if($result->num_rows == 1){
                $row = $result->fetch_assoc();
            
                if($password == $row['password']) {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $row['name'];
                    $_SESSION['usertype'] = $_POST['user-type'];
                    $_SESSION['email'] = $row['email'];
                    
                    echo "<script>window.location='index.php';</script>";
                }
                else {
                  echo "<script>alert('Invalid password);</script>";
                }
              }else{
                echo "<script>alert('Invalid 1 email or password');</script>";
              }
        }
    ?>
    <form  action="" method="post">
    <img class="mb-4" src="./static/img/site/logo/logo.png" alt="" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

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