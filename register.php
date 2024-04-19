<?php
  include('./includes/config.php');
  include('./includes/header2.php');

  $error_message = '';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') { // If the form is submitted
    $type = $_POST['user-type'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if("$password == $cpassword"){
        if ($type === 'client') {
                $select = "SELECT * FROM clientuser WHERE email = '$email'";
                $result = $conn->query($select);

                if ($result->num_rows > 0) {
                $error_message = "User Already exist please login";
                } else {
                    $sql = "INSERT INTO clientuser (name, email, password) VALUES ('$name', '$email', '$password')";
                    if ($conn->query($sql) === TRUE) {
                    echo "<script> alert('Register Successfull'); </script>";
                    }else {
                        echo "Error: " . $sql . "<br>" . $conn->error();
                    }
                }   
        } elseif ($type === 'photographer'){
                $select = "SELECT * FROM photographeruser WHERE email = '$email'";
                $result = $conn->query($select);

                if ($result->num_rows > 0) {
                $error_message = "User Already exist please login";
                } else {
                    $sql = "INSERT INTO photographeruser (name, email, password) VALUES ('$name', '$email', '$password')";
                    if ($conn->query($sql) === TRUE) {
                    echo "<script> alert('Register Successfull'); </script>";
                    }else {
                        echo "Error: " . $sql . "<br>" . $conn->error();
                    }
                }   
        }
    }else{
        echo "<script> alert('Password not same, Please Check') </script>";
    }
  }
?>
    <form  action="" method="post">
    <img class="mb-4" src="./static/img/site/logo/logo.png" alt="" height="57">
    <h1 class="h3 mb-3 fw-normal">Register</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    
    <div class="form-floating">
      <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Enter Your Full Name</label>
    </div>

    <div class="form-floating pass" style="margin-bottom: 0px;">
      <input type="password" class="form-control pass" name="password" id="floatingPassword" placeholder="Password" style="margin-bottom: 0px;">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="cpassword" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Confirm Password</label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
    <p class="mt-5 mb-3 text-body-secondary">Already registered <a href="">Log in</a></p>
  </form>

<?php
    include('./includes/footer2.php');
    ?>