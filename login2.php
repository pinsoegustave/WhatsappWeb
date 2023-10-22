<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PINSOE EZCHAT</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <center>
        <div class="container">
            <form action="" method="post">
                 <input type="text" name="uname" id="" placeholder="Username">
                 <input type="password" name="pass" id="" placeholder="Password">
                 <button class="btn" name="login">Login</button>
            </form>
        </div>
    </center>
    <?php
    if(isset($_POST['login'])){
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];

        $sql = mysqli_query($con, "SELECT *FROM users WHERE username='$uname' AND `password`='$pass'");
        if(mysqli_num_rows($sql) > 0){
            while($data = mysqli_fetch_assoc($sql)){
                $_SESSION['username'] = $data['username'];
                $_SESSION['id'] = $data['id'];
                echo "<script>location.href='home.php'</script>";
            }
        }
        else{
            echo "<script>alert('wrong password')</script>";
            echo "<script>location.href='login.php';</script>";
        }
    }
    ?>
    
</body>
</html>