<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in & Sign Up Form</title>
    <link rel="stylesheet" href="../css/style.css?v=4">
     <link rel="stylesheet" href="../css/forget.css?v=7">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container">
        <div class="form-box">
            <form action="" name="Formfill" onsubmit="return validation()">
                <h1>Find your account</h1>
                <p id="result">Enter Your email Address</p>
                <div class="input-box">
                    <i class='bx bxs-envelope' style='color:#0b3d0b'></i>
                    <input type="email" name="Email" placeholder="Email">
                </div>
                <div class="button">
                   <a href="">Find your account</a>
                </div>
            </form>
        </div>
</body>

</html>