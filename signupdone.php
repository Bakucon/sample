<?php 
session_start();
include "db_conn.php";

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$fname = validate($_POST['fname']);
$lname = validate($_POST['lname']);
$pass = validate($_POST['password']);
$Cpass = validate($_POST['Cpassword']);
$email = validate($_POST['email']);
    
$pattern = '/^[a-zA-Z0-9_\-+*]+$/';


    //checking if the email is already existed
    $check_email_sql = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $check_email_sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: signup.php?error=That email is already existed.");
        exit();
    }
    else if(!preg_match($pattern, $pass)){
        header("Location: signup.php?error=Password can only contain letters (a-z, A-Z), digits (0-9), and the symbols _-+*.");
        exit();
    }
    else if (strlen($pass) < 8){
        header("Location: signup.php?error=Password must be at least 8 characters long.");
        exit();
    }
    //putting @gmail.com address only
    else if(substr($email, -10) !== '@gmail.com'){
        header("Location: signup.php?error=Email must be a @gmail.com address.");
        exit();
    }
    //checking if the password are match and if not then it will put this error
    else if($pass !== $Cpass){
        header("Location: signup.php?error=The Passwords are not match.");
        exit();
    }

    //to prevent putting an empty password
    else if(empty($email)) {
        header ("Location: signup.php?error=Email is required.");
        exit();
    }
    else if(empty($pass)) {
        header("Location: signup.php?error=Password is required.");
        exit();
    }
    else if(empty($Cpass)) {
        header("Location: signup.php?error=Password is required.");
        exit();
    }
    else if(empty($fname)) {
        header("Location: signup.php?error=Name is required.");
        exit();
    }
    else if(empty($lname)) {
        header("Location: signup.php?error=Last name is required.");
        exit();
    }
    else {
    //Putting the email and password on database
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $sql = "INSERT INTO `users` (`fname`,`lname`,`email`,`password`)
            VALUES ('$fname','$lname','$email', '$pass')";

                

    if (mysqli_query($conn, $sql)) {

    header("Location: index.php");
    header("Location: index.php?done-msg=Creating an account is Successfull!!");
    }
    else {
        echo "Error: " . $sql . mysqli_error($conn);
    }
    mysqli_close($conn);
    }
    ?>