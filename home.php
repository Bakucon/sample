<?php 
session_start();

if(isset($_SESSION['id'])  && isset($_SESSION['fname'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <meta name="google-signin-client_id" content="378984172405-t9r2go7htmm9k727siaeaggk52snhq3q.apps.googleusercontent.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table style="float: right;">
        <tr>
            <td>
                <input type="button" value="HOW TO START" id="howstartbtn" class="howbtn">
            </td>
            <td>    
                <h2 style="float: right;">Welcome, <?php echo $_SESSION['fname']; ?>! </h2>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a style="float: right; margin-right: 5px;" href="logout.php">LogOut</a>
            </td>
        </tr>
    </table>

    <div id="pop-up" class="infopop-up">
        <div id="contentpop-up">
            <table class="popup-table">
                <tr>
                    <td>
                        <img class="hehe" src="thumbsup.jpg" alt="Cat thumbs up">
                        <h1> Instruction how to use this site or how to do a picture idk Just a draft  SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE SAMPLE</h1>
                        <p> nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww 
                            nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww nyaww</p>
                    </td>
                    </tr>
            </table>
                 <center><button class ="closepop-up" id="closepop-up">Got It</button></center>
        </div>
    </div>

    <style>
        .infopop-up {   
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: auto;
            padding: 100px;
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
        .howbtn {
            color: white;
            background-color: black;
            font-size: 20px;
            border: 1px solid black;
            font-weight: bold;
            border-radius: 5px;
            float: right;
            margin: 0;
            margin-right: 10px;
        }
        .closepop-up{
            float: bottom;
            color: white;
            background-color: black;
            font-size: 20px;
            border: 1px solid black;
            font-weight: bold;
            border-radius: 5px;
            margin-bottom: 10px;
            display:block;  
        }
        .howbtn:hover, .howbtn:focus, .closepop-up:hover, .closepop-up:focus{
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
            width: 200px;
            height: 200px;
        }
    </style>
    <script>
        // pop up info for get stated in log in page
        var howbtn = document.getElementById("howstartbtn");
        var popup = document.getElementById("pop-up");
        var closepop = document.getElementById("closepop-up");
        var content = document.getElementById("contentpop-up");

        //function of the pop up to close it
        closepop.onclick = function() {
            popup.style.display = "none"
        }
        howbtn.onclick = function() {
            popup.style.display = "block"
        }


    </script>
<br><br><br><br>
<div class="choose-type">
    <table class="choose-table">
        <tr>
            <td>
                <div class="logo-file">
                    <div style="text-align: center;">
                        <input type="file" name="file" id="file" class="file-input" accept=".png, .jpeg, .jpg">
                        <label for="file" class="custom-file-upload">
                            <img src="file.png" alt="Upload Logo">
                        </label>
                    </div>
                </div>    
            </td>
            <td rowspan="2">
                <div style="text-align: center;"><h1 style="margin: 10px;">OR</h1></div>
            </td>
            <td>
                <div style="text-align: center;">
                    <a name="camera" id="camera" class="file-input" href="camera.php">
                        <img class="cameralogo" src="cameralogo.png" alt="Upload Logo">
                    </a>
                </div>
            </td>    
        </tr>
        <tr>
            <td>
                <div style="text-align: center;"><label>File</label></div>
            </td>
            <td>
                <div style="text-align: center;"><label>Take a Photo</label></div>
            </td>
        </tr>
    </table>
</div>
<style>
    .file-input:not(#camera) {
        display: none;
    }
    .custom-file-upload, #camera {
        display: inline-block;
        padding: 10px 20px;
        background-color: white;
        padding: 10px;
        color: white;
        border-radius: 100%;
        cursor: pointer;
        border: 2px solid black;
    }
    .custom-file-upload img {
        width: 50px;
        height: 50px;
    }
    .cameralogo{
        width: 50px;
        height: 50px;
    }
</style>

</body>
</html>

<?php 
}
else{
    header("Location: index.php");
    exit();
}