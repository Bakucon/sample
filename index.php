<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="378984172405-t9r2go7htmm9k727siaeaggk52snhq3q.apps.googleusercontent.com">
    <link rel="stylesheet" type="text/css" href = "style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <title>Log in</title> 
</head>
<body>
    <form action = "login.php" method="POST">
        <h2>LOGIN</h2>
<?php
    if(isset($_GET['error'])) { ?>
        <p claas="error"> <?php echo $_GET['error'] ?></p>
    <?php } ?>
        <label>User Name</label>
        <input type="text" name="username" placeholder="User Name"><br>
        <label>Password</label>
        <input type="password" name="pass" placeholder="Password"><br>
        <input type="Submit" value="LogIn">
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" 
        crossorigin="anonymous"></script>
        <script src="jquery-3.7.1.min.js"></script>
</body>
</html>