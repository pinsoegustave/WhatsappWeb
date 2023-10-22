<?php
session_start();
include "connection.php";

    if(isset($_POST['loginn'])) {
        $uname =$_POST['uname'];
        $pass = $_POST['pass'];

        $sql = mysqli_query($con, "SELECT * FROM users WHERE username='$uname' AND `password`='$pass' ");
        if(mysqli_num_rows($sql) > 0) {
            while($data = mysqli_fetch_assoc($sql)) {
                $_SESSION['username'] = $data['username'];
                $_SESSION['id'] = $data['id'];
                echo "<script> location.href='home.php'</script>";
            }     
        }
        else {
            echo "<script>alert('Wrong Password')</script>";
            echo "<script>location.href='login.php'</script>";
        }
    }
    
    
    ?>