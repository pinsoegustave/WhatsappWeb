<?php
include 'connection.php';

session_start();

if(isset($_POST['submit'])) {
    $username = $_POST['uname'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if ($pass1 == $pass2) {
        $query9 = mysqli_query($con, "INSERT INTO `users`(`user_id`,`username`,`password`,`profile`) VALUES ('','$username','$pass1','github.png') ");
        if ($query9) {
            echo "<script>alert('Registration Successful');</script>";
            echo "<script>location.href='login.php';</script>";

        }
        else {
            echo "Try Again";
        }
    }
    else {
        echo "<script>alert('Password Don't Match');</script>";
    }

}


?>