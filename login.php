<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in | PhotoSec</title>
</head>
<body>
    <h1>PhotoSec</h1>
    <h2>Sign In</h2>
    <form  action="/login.php" method="post">
        <input type="radio" id="client" name="user-type" value="client">
        <label for="client">Client</label>
        <input type="radio" id="photographer" name="user-type" value="Photographer">
        <label for="photographer">Photographer</label>
        <input type="email" name="email" id="email" placeholder="Enter your Email">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" value="Log In">
</body>
</html>