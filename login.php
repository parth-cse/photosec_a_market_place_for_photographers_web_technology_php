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
        session_start();

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $type = $_POST['user-type'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
            if ($type == 'client') {
                echo "<script> alert('entered'); </script>";
                $select = "SELECT * FROM clientuser WHERE email = '$email'";
                $result = $conn->query($select);
            } elseif ($type == 'photographer'){
                $select = "SELECT * FROM photographeruser WHERE email = '$email'";
                $result = $conn->query($select);
            }

            if($result->num_rows == 1){
                echo "<script>alert('entered2'); </script>";
                $row = $result->fetch_assoc();
            
                if(password_verify($password, $row['password'])) {
                    echo  "<script> alert('enter 3'); </script>";
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $row['email']; 
                    header("index.php");
                  echo "<script> alert('log in successfull') console.log('done') </script>";
                } else {
                  echo "<script>alert('Invalid password);</script>";
                }
              }else{
                echo "<script>alert('Invalid 1 email or password');</script>";
              }
        }
    ?>
    <h1>PhotoSec</h1>
    <h2>Sign In</h2>
    <form  action="login.php" method="post">
        <input type="radio" id="client" name="user-type" value="client">
        <label for="client">Client</label>
        <input type="radio" id="photographer" name="user-type" value="Photographer">
        <label for="photographer">Photographer</label>
        <input type="email" name="email" id="email" placeholder="Enter your Email">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" value="Log In">
    </form>
    <p>New to our Platform <a href="./register.php">Sign Up</a></p>
</body>
</html>