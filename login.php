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
    <title>Login | Pinsoe EzChat</title>
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .fullpage {
            height: 100%;
            width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url(deck/pexels-edgar-rodrigo-12315477.JPG);
            background-position: center;
            background-size: cover;
            position: absolute;

        }

        .navbar {
            display: flex;
            align-items: center;
            padding: 20px;
            padding-left: 50px;
            padding-right: 30px;
            padding-top: 50px;
        }

        nav {
            flex: 1;
            text-align: right;

        }

        nav ul {
            display: inline-block;
            list-style: none;

        }

        nav ul li {
            display: inline-block;
            margin-right: 70px;
        }

        nav ul li a {
            text-decoration: none;
            font-size: 20px;
            color: white;
            font-family: sans-serif;
        }

        nav ul li button {
            font-size: 20px;
            color: rgb(187, 46, 46);
            outline: none;
            border: none;
            background: transparent;
            cursor: pointer;
            font-family: sans-serif;

        }

        nav ul li button:hover {
            color: aqua;
        }

        nav ul li a:hover {
            color: aqua;
        }

        a {
            text-decoration: none;
            color: palevioletred;
            font-size: 28px;
        }

        #login-form {
            display: none;
        }

        .form-box {
            width: 380px;
            height: 420px;
            position: relative;
            margin: 2% auto;
            background: rgba(0, 0, 0, 0.3);
            padding: 10px;
            overflow: hidden;
        }

        .button-box {
            width: 220px; 
            margin: 35px auto;
            position: relative;
            box-shadow: 0 0 20px 9px #ff61241f;
            border-radius: 30px;
        }

        .toggle-btn {
            padding: 10px 30px;
            cursor: pointer;
            background: transparent;
            border: 0;
            outline: none;
            position: relative;
        }

        #btn {
            top: 0;
            left: 0;
            position: absolute;
            width: 110px;
            height: 100%;
            background: #f3c693;
            border-radius: 30px;
            transition: .5s;
        }

        .input-group-login {
            top: 150px;
            position: absolute;
            width: 280px;
            transition: .5s;
        }

        .input-group-register {
            top: 120px;
            position: absolute;
            width: 280px;
            transition: .5s;
        }

        .input-field {
            width: 100%;
            padding: 10px 0;
            margin: 5px;
            outline: none;
            background: transparent;
            border: 1px solid palevioletred;
            border-radius: 30px;
            padding-left: 20px;
        }

        .submit-btn {
            width: 85%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: auto;
            background: #f3c693;
            border: 0;
            outline: none;
            border-radius: 30px;

        }

        .check-box {
            margin: 30px 10px 34px 0;
        }

        span {
            color: rgb(63, 59, 59);
            font-size: 15px;
            bottom: 68px;
            position: absolute;
        }

        #login {
            left: 50px;
        }

        .login input {
            color: white;
            font-size: 15;
        }

        #register {
            right: 450px;

        }

        #register input {
            color: white;
            font-size: 15;
        }
    </style>
</head>

<body>
    <div class="fullpage">
        <div class="navbar">
            <div>
                <a href="website.html">Pinsoe EzChat</a>
            </div>
            <nav>
                <ul class="menuitems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">About us</a></li>
                    <li><a href="index.php">Contact</a></li>
                    <li><button class="loginbtn" onclick="document.getElementById
                        ('login-form').style.display='block'" style="width:auto">Login</button></li>
                </ul>
            </nav>
        </div>
        <div id="login-form" class="login-page">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn">

                    </div>
                    <button type="button" onclick='login()' class='toggle-btn'>Login</button>
                    <button type='button' onclick='register()' class='toggle-btn'>Register</button>
                </div>
                <form action="logi.php" class="input-group-login" id='login' method="POST">
                    <input type="text" class="input-field" placeholder="Email Id" name="uname" required>
                    <input type="password" class="input-field" placeholder="Enter Password" name="pass" required>
                    <input type="checkbox" class="check-box">
                    <span>Remember Password</span> <button type="submit" class="submit-btn" name="loginn">Login</button>
                </form>
                <form action="register.php" id="register" class="input-group-register" method="POST">
                    <input type="text" class="input-field" placeholder="Username" name="uname" required>
                    <!-- <input type="email" class="input-field" placeholder="Email Id" name="email" required> -->
                    <input type="password" class="input-field" placeholder="Enter Password" name="pass1" required>
                    <input type="password" class="input-field" placeholder="Confirm Password" name="pass2" required>
                    <input type="checkbox" class="check-box">
                    <span>I agree to the terms and conditions</span> <button type="submit"
                        class="submit-btn" name="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
     <script>
        var x=document.getElementById('login');
        var y=document.getElementById('register');
        var z=document.getElementById('btn');
        function register()
        {
            x.style.left='-400px';
            y.style.left='50px';
            z.style.left='110px';
        }
        function login()
        {
            x.style.left='50px';
            y.style.left='450px';
            z.style.left='0px';
        }
    </script>
    
    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event)
        {
            if (event.target == modal)
            {
                modal.style.display = "none";
            }
        }
    </script> 
    
    
</body>

</html>