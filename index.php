<?php
session_start();

// Check if the user is logged in and they already log in they will directly go to the home.php
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    header("Location: home.php");
    exit();
}
?>

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
    
    <title>Log in</title> 
</head>
<body>
    <div id="pop-up" class="infopop-up">
        <div id="contentpop-up">
            <table class="popup-table">
                <tr>
                    <td>
                        <img class="hehe" src="thumbsup.jpg" alt="Cat thumbs up">
                        <h1> (GET STARTED) Just a draft... you will see me once(unless you deleted of this site cookies) SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE</h1>
                        <p> nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww 
                        nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww</p>
                    </td>
                    </tr>
                    <tr>
                        <td>
                            <center><button class ="closepop-up" id="closepop-up">GET STARTED</button></center>
                        </td>
                    </tr>
            </table>
        </div>
    </div>

    <style>
        .infopop-up {
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: auto;
            padding: 50px;
        }
        #contentpop-up{
            background-color: #fff;
            margin: auto;
            padding: 20px;
            border: 3px solid black;
            width: 100%;
            height: 100%;
            max-width: 1000px, auto;
            box-sizing: border-box;
            overflow: auto;
        }
        .closepop-up{
            float: bottom;
            color: white;
            background-color: black;
            font-size: 35px;
            border: 1px solid black;
            font-weight: bold;
            border-radius: 10px;
        }
        .closepop-up:hover, .closepop-up:focus{
            color: Black;
            background-color: white;
            text-decoration: none;
            cursor: pointer;
            transition: cubic-bezier(0.215, 0.610, 0.355, 1) .3s;
        }
        .hehe {
            float: left;
            margin: 10px;
            max-width: 100%;
            max-height: 100%;
            width: 400px;
            height: 400px;
        }
    </style>
    <script>
        //checking if the pop up if is it already shown or not and if not it will pop up
        if (!localStorage.getItem('popupShown')) {
        document.getElementById('pop-up').style.display = 'block';
    }
    else {
        document.getElementById('pop-up').style.display = 'none';
    }

    // Function to close the pop-up
    var closepop = document.getElementById("closepop-up");
    closepop.onclick = function () {
        document.getElementById('pop-up').style.display = 'none';
        // Set localStorage to mark that the pop-up has been shown
        localStorage.setItem('popupShown', 'true');
    };
    </script>
    <div class="login-fieldset">
        <form action = "login.php" method="POST">
            <center><h1>Log In</h1></center>
                <?php
                    if(isset($_GET['error'])) { ?>
                        <center><p id="error" class="error"> <?php echo $_GET['error'] ?></p><center>
                <?php } ?>
                <?php
                    if(isset($_GET['done-msg'])) { ?>
                        <center><p id="done-msg" class="done-msg"> <?php echo $_GET['done-msg'] ?></p><center>
                <?php } ?>
        <table>
            <tr>
                <td>
                    <label>Email</label>
                </td>
            </tr>
            <tr>
                <td>
                    <center><input type="email" name="email" placeholder="Email" class="form-text"></center>
                </td>
            </tr>
            <tr> 
                <td>
                    <label>Password</label>
                </td>
            </tr>
            <tr>
                <td>
                    <center><input type="password" name="pass" placeholder="Password" class="form-text">
                </td>
            </tr>
                <td>
                <center><input type="Submit" class="form-submit-btn" value="LogIn"></center>
                </td>
            </tr>
            <tr>
                <td>
                    <center><p>Dont have an account? <a href="signup.php">SignUp</a></p><center>
                </td>
            </tr>
        </table>
        
    <script>
        //temporary deleting google auth 2.0
    </script>
    </div>
</body>
</html>