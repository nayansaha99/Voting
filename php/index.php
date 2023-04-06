<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in & Sign Up Form</title>
    <link rel="stylesheet" href="../css/style.css?v=1">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
     <!-- <img src="img/bg_img.svg" class="image" alt=""> -->
    <div class="container">
        <div class="form-box">
            <form action="" name="Formfill" enctype="multipart/form-data"onsubmit="return validation()">
                <h2>Register</h2>
                <p id="result"></p>
                <div class="input-box">
                    <i class='bx bxs-user' style='color:#0b3d0b'></i>
                    <input type="text" name="Username" placeholder="Username">
                </div>
                <div class="input-box">
                    <i class='bx bxs-envelope' style='color:#0b3d0b'></i>
                    <input type="email" name="Email" placeholder="Email">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt' style='color:#0b3d0b'></i>
                    <input type="password" name="Password" placeholder="Password">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt' style='color:#0b3d0b'></i>
                    <input type="password" name="CPassword" placeholder="Confirm Password">
                </div>
                <div class="button">
                    <input type="submit" class="btn" name="Submit" onclick="validation()" value="Register">
                </div>
                <div class="group">
                    <span><a href="forget-passwpord.php">Forget-Password</a></span>
                    <span><a href="login.php">Login</a></span>
                </div>
            </form>
        </div>
        <!--Second Step we have to create a pop up value -->



    <div class="popup" id="popup">
            <ion-icon name="checkmark-circle-outline"></ion-icon>
            <h2>Thank you!</h2>
            <p>You were Registration Successfully. Thanks!</p>
            <a href="login.php"><button onclick="CloseSlide()">OK</button></a>
   </div>

    </div>
    <script src="../js/index.js"></script>
</body>

</html>