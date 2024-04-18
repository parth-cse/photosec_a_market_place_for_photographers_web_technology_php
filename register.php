<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in | PhotoSec</title>
</head>
<body>
<?php
  include('./includes/config.php');

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

    <h1>PhotoSec</h1>
    <h2>Sign up</h2>
    <form  action="register.php" method="post">
        <input type="radio" id="client" name="user-type" value="client" required>
        <label for="client">Client</label>
        <input type="radio" id="photographer" name="user-type" value="photographer" required>
        <label for="photographer">Photographer</label>
        <input type="text" name="name" id="name" placeholder="Enter your Full Name" required>
        <input type="email" name="email" id="email" placeholder="Enter your Email" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
        <input type="submit" value="Register">
    </form>
    <p>Already registered <a href="./login.php">Log in</a></p>
</body>
</html>