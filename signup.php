<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href = "style.css">
    <title>SignUp</title>
</head>
<body>
<fieldset><form id='form' action="signupdone.php" method="POST">
<h2>SignUp</h2>
<?php
if(isset($_GET['error'])) { ?>
        <p claas="error"> <?php echo $_GET['error'] ?></p>
    <?php } ?>

<p>Email</p>
    <input type="email" name="email" id ="email" placeholder="Email" required><br>
<p>Password</p>
    <input type="password" id="password" name="password" placeholder="Password" required>
    <a href="#" id = 'showpass'>Show Password</a><br>
<p>Confirm Passwrod</p>
<input type="password" id="Cpassword" name="Cpassword" placeholder = "Confirm Password" required>
<p id="errormsg" class="error"></p>
<input class="btn" type="Submit" value="Submit"><br>
<p>Have an account <a href="index.php">LogIn</a> here</p>
</form>
</fieldset>

<script>
                // To see the pass and confirm password what you put in there
                const passwordInput = document.getElementById('password');
                const ConfirmpasswordInput = document.getElementById('Cpassword');
                const Showpass = document.getElementById('showpass');
                const msg = document.getElementById('errormsg');
                const form = document.getElementById('form');
                const emailInput = document.getElementById('email');

                Showpass.addEventListener('click', function (e){
                    e.preventDefault();
                    const passtype = passwordInput.type === 'password' ? 'text' : 'password';
                    passwordInput.type = passtype;
                    ConfirmpasswordInput.type = passtype;
                    
                    //Change the Show pass to Hide pass (auto yan)
                    this.textContent = passtype === 'password' ? 'Show Password' : 'Hide Password';
                })

                //Checking the pass and confirm password are the same and email if is it a valid email
                form.addEventListener('submit', function (e) {
                msg.textContent = '';
                let isValid = true;

                if (!emailInput.value.endsWith('@gmail.com')) {
                 msg.textContent = 'Email must be a @gmail.com address';
                 isValid = false;
                }

                if (passwordInput.value !== ConfirmpasswordInput.value) {
                msg.textContent = 'Passwords do not match';
                isValid = false;
                }
                if (!isValid) {
                e.preventDefault();
                }
                });


            </script>


</body>
</html>