<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="378984172405-t9r2go7htmm9k727siaeaggk52snhq3q.apps.googleusercontent.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href = "style.css">
    <title>SignUp</title>
</head>
<body>
<div class="login-fieldset">
    <form action="signupdone.php" method="POST">
        <center><h1>Sign Up</h1></center>
            
            <?php
            if(isset($_GET['error'])) { ?>
            <center><p id="error" claas="error"> <?php echo $_GET['error'] ?></p></center>
            <?php } ?>
            <table>
                <tr>
                    <td>
                        <label>First Name</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center><input type="text" name="fname" id="name" placeholder="First Name" class="form-text"></center>
                    </td>
                </tr>
                <tr>
                    <td>
                         <label>Last Name</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center><input type="text" name="lname" id="name" placeholder="Last Name" class="form-text"></center>
                    </td>
                </tr>
                <tr>
                    <td>
                         <label>Email</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center><input type="email" name="email" id ="email" placeholder="Email" class="form-text" required></center>
                    </td>
                </tr>
                <tr>
                    <td>
                         <label>Password</label>
                    </td>  
                </tr>
                <tr>
                    <td>
                        <center><input type="password" id="password" name="password" placeholder="Password" class="form-text"></center>
                    </td>
                    <td>            
                        <center><a href="#" id = 'showpass'>Show</a></center>
                    </td>
                </tr>
                <tr>
                    <td>
                         <label>Confirm Password</label>
                    </td>
                </tr>
                <tr>
                    <td>    
                    <center><input type="password" id="Cpassword" name="Cpassword" placeholder = "Confirm Password" class="form-text"></center>
                    </td>
                </tr>
            </table>
                
                        <center><input class="form-submit-btn" type="Submit" value="Sign Up"></center>
                        <center><p>Have an account <a href="index.php">LogIn</a> here</p></center>
            
    </form>
</div>
            <script>
                // To see the pass and confirm password what you put in there
                const Showpass = document.getElementById('showpass');
                const passwordInput = document.getElementById('password');
                const ConfirmpasswordInput = document.getElementById('Cpassword');
                Showpass.addEventListener('click', function (e){
                    e.preventDefault();
                    const passtype = passwordInput.type === 'password' ? 'text' : 'password';
                    passwordInput.type = passtype;
                    ConfirmpasswordInput.type = passtype;
                    
                    //Change the Show pass to Hide pass (auto yan)
                    this.textContent = passtype === 'password' ? 'Show' : 'Hide';
                })
            </script>
</body>
</html>