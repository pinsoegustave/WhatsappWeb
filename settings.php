<?php
session_start();
if(isset($_SESSION['username'])) {
   include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-6.1.0-web/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap-all.min.css">
    <title>Settings | Pinsoe Ezchat</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

      * {
         margin: 0;
         padding: 0;
         /* box-sizing: border-box; */
         font-family: 'Open Sans', sans-serif;

      }

      body {
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         background: linear-gradient(#DEB887 0%, #DEB887 130px, #808080 130px, #808080 100%);

      }

      .container {
         position: relative;
         width: 70vw;
         max-width: 97%;
         height: calc(100vh - 60px);
         background: #fff;
         box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.06), 0 2px 5px 0 rgba(0, 0, 0, 0.06);
         display: flex;
         border-radius: 10px;

      }
      .container .leftside 
      {
         position: relative;
         flex: 35%;
         background: #DEB887;
         border-right: 1px solid rgba(0, 0, 0, 0.2);

      }

      .container .rightside {
         position: relative;
         flex: 65%;
         background: #808080;

      }
      .leftside h1{
        margin-left: 100px;
        margin-top: 110px;
        font-family: sans-serif;
        color: none;
      }
      .leftside a{
         text-decoration: none;
         color: #000;
      }
      .list {
        position: absolute;
        list-style: none;
        margin-left: 50px;
        padding-top: 40px;
        font-size: large;
        height: 30px;
        cursor: pointer;
        justify-content: space-between;
               
        
      }
      .list a{
        text-decoration: none;
        color: #000;
      }
      .leftside .list p{
        font-size: 0.75em;
        color: wheat;
      }
      .leftside a i {
         position: relative;  
         color: #000; 
         font-size: 1.5em;
      }
      .rightside img {
         padding: 60px;
         margin-left: 100px;
      }
      .rightside h1 {
         padding: 10px;
         margin-left: 80px;
         margin-top: -30px;    
      }
      </style>
</head>
<body>
    <div class="container">
        <div class="leftside">
         <span><a href="home.php"><i class="fas fa-arrow-left"></i></a></span>
            <a href="settings.php"><h1>Settings</h1></a>
            <p>_____________________________________________</p>
           <div class="list">
            <a href="profile.php"><li>Change Profile</li></span>
            <p>Change profile picture, Username</p><br></a>
            <a href="privacy.php"><li>Account Privacy</li>
            <p>Change security options </p><br></a>
            <a href="#"><li href="">Help</li>
            <p>Help center, contact us, privacy policy</p><br></a>
            <a href="delete.php"><li href="">Delete my account</li></a>

           </div>

        </div>
        <div class="rightside" id="all-user">
         <img src="deck/download1.jpg" alt="">
         <h1>Customize your settings.</h1>
      
        </div>
       
    </div>
   
</body>
<script>
   var side = document.getElementById('all-user');
   function run() {
      side.classList.toggle('run');

   }
</script>
</html>
<?php
}
else {
   header("location.php");
}
?>