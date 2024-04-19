<?php
    include('./includes/config.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_SESSION['loggedin']){
    $email = $_SESSION['email'];
    $sql ="SELECT * FROM photographeruser WHERE email = '$email'";  //select all data
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
        img src="<?php 
        if($row['profile'] == NULL){
            echo "./static/img/site/default.jpg";
        }else{
            echo $row["profile"];
        }?>" alt="">
        ?><?php
    }else{
        header('location: ./login.php');
        exit();
    }?>
</body>
</html>