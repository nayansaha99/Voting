<?php
session_start();
include_once 'db.php';
$username = $_POST['Username'];
$email = $_POST['email'];
$password = md5($_POST['Password']);
$cpassword = md5($_POST['Cpassword']);
$Role = 'user';
$verification_status ='0';

///checking field are not empty

if (!empty($username) && !empty($email) && !empty($password) && !empty($cpassword)) {
    //if email is valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //checking email is already exist!
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}' ");
        if (mysqli_num_rows($sql) > 0) {
            echo "$email ~ Already Exists";
        } else {
            //checking password and confirm password match
            if ($password == $cpassword) {
                // let's check user upload file or no 
                $otp = mt_rand(1111, 9999); //creating 4 digit otp
                //Insert data into table
                $sql2 = mysqli_query($conn, "INSERT INTO users (username, email, password,otp, verification_status, Role)
                            VALUES ('{$username}','{$email}',,'{$password}','{$otp}','{$verification_status}','{$Role}')");

                if ($sql2) {
                    $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                    if (mysqli_num_rows($sql3) > 0) {
                        $row = mysqli_fetch_assoc($sql3); //fetching data
                        $_SESSION['unique_id'] = $row['unique_id'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['otp'] = $row['otp'];

                        //mail function Start
                        if ($otp) {
                            $receiver = $email;
                            $subject = "From:  <$email>";
                            $body = "Name " . " \n Email " . " $email \n " . " $otp";
                            $sender = "From: nayansahadip99@gmail.com"; //email

                            if (mail($receiver, $subject, $body, $sender)) {
                                echo "success";
                            } else {
                                echo "Email Problem!" . mysqli_error($conn);
                            }

                        }
                        //mail function end                                

                    }
                } else {
                    echo "Something went wrong!";

                }

            }

        }
    }
}


















?>