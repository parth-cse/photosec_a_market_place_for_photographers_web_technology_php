<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in | PhotoSec</title>
</head>
<body>
    <?php
        session_start();
        include('./includes/config.php');


        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $type = $_POST['user-type'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            if ($type == 'client') {
                $select = "SELECT * FROM clientuser WHERE email = '$email'";
                $result = $conn->query($select);
            } elseif ($type == 'photographer'){
                $select = "SELECT * FROM photographeruser WHERE email = '$email'";
                $result = $conn->query($select);
            }

            if($result->num_rows == 1){
                $row = $result->fetch_assoc();
            
                if($password == $row['password']) {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $row['name'];
                    $_SESSION['usertype'] = $type;
                    
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
    <h1>PhotoSec</h1>
    <h2>Sign In</h2>
    <form  action="" method="post">
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