<?php 
    session_start();
    include "db_conn.php";

    if(isset($_POST['username'])  && isset($_POST['pass'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }

    $username = validate($_POST['username']);
    $pass = validate($_POST['pass']);

    if(empty($username)) {
        header ("Location: index.php?error=User Name is required");
        exit();
    }
    else if(empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    }

    $sql = "SELECT * FROM users WHERE user_name='$username' AND password='$pass'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        if ($row['user_name'] === $username && $row['password'] === $pass) {
            echo "Log In!";
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: home.php");
            exit();
        } else {
            header("Location: index.php?error=Incorrect User Name or Password");
            exit();
        }
    } else {
        header("Location: index.php?error=Incorrect User Name or Password");
        exit();
    }
    
    