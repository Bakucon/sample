<?php 
session_start();
include "db_conn.php";

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$email = validate($_POST['email']);
$pass = validate($_POST['password']);
$Cpass = validate($_POST['Cpassword']);
    //to prevent putting an empty password
    if(empty($email)) {
        header ("Location: signup.php?error=Email is required");
        exit();
    }
    else if(empty($pass)) {
        header("Location: signup.php?error=Password is required");
        exit();
    }
    else if(empty($Cpass)) {
        header("Location: signup.php?error=Password is required");
        exit();
    }
    else {
    //Putting the email and password on database
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $sql = "INSERT INTO `users` (`user_name`,`password`)
            VALUES ('$email', '$pass')";
    if (mysqli_query($conn, $sql)) {

    header("Location: index.php");
    header("Location: index.php?error=Creating an account is Successfull!!");
    }
    else {
        echo "Error: " . $sql . mysqli_error($conn);
    }
    mysqli_close($conn);
    }