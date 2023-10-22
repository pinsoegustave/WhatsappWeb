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
    <title>Home | Pinsoe EzChat</title>
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        html {
            scroll-behavior: smooth;
        }

        ::-webkit-scrollbar {
            background: white;
            width: 15px;
        }

        ::-webkit-scrollbar-thumb {
            background: gray;
            transition: 0.4s ease-in-out;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #DEB887;
        }

        .fullpage {
            height: 100%;
            min-width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.4),
                    rgba(0, 0, 0, 0.4)), url(deck/pexels-fwstudio-129731.JPG);
            background-position: center;
            background-size: cover;
            position: absolute;
            padding: 0 1em;
            display: block;
            

        }
        @media (min-width:100%) {
            .about {
                display: block;
            }
            
        }

        .navbar {
            display: flex;
            align-items: center;
            padding: 30px;
            padding-left: 50px;
            padding-right: 30px;
            padding-top: 50px;
            box-shadow: 0 5px 5px 0 gray, 0 2px 5px 0 gray;
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
            color: #DEB887;
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
            font-size: 30px;
        }
        
        .welcome {
            position: relative;
            padding: 20%;
            min-width: 20em;
            padding-left: 120px;
            padding-top: 150px;
            min-height: 40vh;
            color: #DEB887;
            font-family: sans-serif;
            background-image: url(deck/360_F_226771742_1jw5dObwpws5FLlAP8l3mbvDeoA3w7hn.jpg);
            opacity: 0.56;
        }

        .welcome h2 {
            font-size: 2em;
            color: blueviolet;
        }

        .welcome h1 {
            font-size: 4em;

        }

        .welcome p {
            font-size: 1.5em;
            color: palevioletred;
        }

        .about {
            padding: 20%;
            padding-left: 50px;
            padding-top: 90px;
            background-color: gray;
            min-height: 80vh;
            min-width: 20em;
            display: flex;
            justify-content: space-between;

        }
        @media (min-width: 80em) {
            .about {
                display: block;
            }
            
            
        }

        .about p {

            width: 30vw;
            height: 25vh;
            font-size: 20px;
            font-family: sans-serif;

        }
        .card {
            justify-content: space-around;
            display: inline-block;
            margin-right: 30px;
        }

        span {
            color: #DEB887;
            font-size: 25px;
        }

        .contact {
            min-height: 40vh;
            padding: 30%;
            padding-left: 80px;
            padding-top: 80px;

        }

        .grid h5 {
            font-family: sans-serif;
            font-size: 20px;
        }

        .contact {
            /* position: absolute; */
            height: 20vh;
            background-color: blueviolet;
            margin-left: 0vw;
            padding: 1rem;
            display: block;
            align-items: center;
            justify-content: center;
            font-family: sans-serif;

        }
        @media (min-width: 20em) {
            .contact {
                display: block;
            }
            
        }

        .contact .grid {
            margin: 1rem;
            padding: 1rem;
            border-radius: 10px;
            transition: ease-in-out 0.5s;
            color: wheat;
        }

        .contact .grid:hover {
            background-color: rgb(168, 98, 98);
            color: rgb(51, 49, 72);
            transform: scale(1.1);
        }

        .footer {
          background-color: burlywood;
          color: black;
          height: 25px;
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
          
        }   
        .footer p {
            margin-left: 40vw;

        }
        /* #home {
            display: none;
        } */
    </style>
</head>

<body>
    <div class="fullpage">
        <!-- navbar -->
        <div class="navbar">
            <div>
                <a href="index.php">Pinsoe EzChat</a>
            </div>
            <nav>
                <ul class="menuitems">
                    <li><button class="home" onclick="document.getElementById
                        ('home').style.display='block'" style="width:auto"><a href="#home">Home</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
        <!-- welcome -->
        <div class="welcome" id="home">
            <div class="content">
                <!-- <img src="360_F_226771742_1jw5dObwpws5FLlAP8l3mbvDeoA3w7hn.jpg" alt=""> -->
                <h2>Welcome to</h2>
                <h1>Pinsoe EzChat</h1>
                <p>Welcome on my easy chatting platform.</p>
            </div>

        </div>
        <!-- about us -->
        <div class="about" id="about">
            <div class="card">
                 <p><span> Pinsoe EzChat</span> is an easy chatting platform that enables
                  you to chat with your friends without much credentials. Your messages are end to end
                  encrypted.  Explore and enjoy more with our platform. </p>
            </div>
            <div class="card">
                 <p>On <span>Pinsoe EzChat</span> you first create your account inorder to start chatting on our platform by 
                    creating a username and password. After you will be logging in as usual as other social 
                    medias you have used. </p>
            </div>
            <div class="card">
                 <p><span> Pinsoe EzChat</span> we are sorry for it's responsiveness in all devices. It is not 
                responsive in smartphones (mobile devices). So it is still under development, you will be receiving updates </p>
            </div>
        </div>
        <!-- contact -->
        <div class="contact" id="contact">
            <h4> Reach out to us:</h4>
            <div class="grid">
                <a href="#"><h5>Contact</h5></a>
                <p>+250 789 868 814</p>

            </div>
            <div class="grid">
                <a href="http://www.gmail.com"><h5> E-mail</h5></a> 
                <p>ntwalimudasubirag@gmail.com</p>

            </div>
            <div class="grid">
                <a href="#"><h5>Visit us</h5></a>
                <p>Nyagatare - Rwanda</p>

            </div>
        </div>
        <!-- Footer -->
        <div class="footer">
           <p> PINSOE DOINGS&copy; 2022. </p>

        </div>
    </div>

    <script>
        var pinsoe = document.getElementById('home');
        window.onclick = function(event)
        {
            if (event.target == pinsoe)
            {
                pinsoe.style.display = "none";
            }
        }
    </script>

</body>

</html>