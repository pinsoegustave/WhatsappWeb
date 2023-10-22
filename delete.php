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
      .rightside h3 {
        padding: 70px;
        position: relative;
        text-transform: uppercase;
      }
      .rightside p {
        padding: 30px;
        margin-top: -50px;

      }
      .rightside button {
        padding: 10px;
        width: 200px;
        border: 1px solid #b6a187;
        border-radius: 30px;
        margin-left: 75px;
        text-transform: uppercase;
      }
      .rightside i {
        font-style: normal;
        margin-left: 45px;
        color: rgb(141, 27, 27);
      }
      .rightside ul li {
        margin-left: 50px;
      }
      .rightside span {
          margin-left: 40px;
      }
      .rightside p1 {
         margin-left: 40px;
      }
      .rightside button {
         background-color: #b6a187;
      }
      .rightside button a {
         color: rgb(141, 27, 27);
         text-decoration: none;
      }
      </style>
</head>
<body>
    <div class="container">
        <div class="leftside">
         <span><a href="settings.php"><i class="fas fa-arrow-left"></i></a></span>
            <a href="settings.php"><h1>Settings</h1></a>
            <p>_____________________________________________</p>
           <div class="list">
            <a href="profile.php"><li>Change Profile</li></span>
            <p>Change profile picture, Username</p><br></a>
            <a href="privacy.php"><li>Account Privacy</li>
            <p>Change security options </p><br></a>
            <a href="#"><li href="">Help</li>
            <p>Help center, contact us, privacy policy</p><br></a>
            <a href="#"><li href="">Delete my account</li></a>

           </div>

        </div>
        <div class="rightside" id="all-user">
         <?php
         $id = $_SESSION['id'];
         $query5 = "SELECT * FROM `users` WHERE id = $id";
         $eat = mysqli_query($con, $query5);
         $data = mysqli_fetch_assoc($eat); {
                
         ?>
            <h3>Delete My Account.</h3>
            <p>We are so unhappy to see you going. But you can help us know why 
                you are leaving so that we can correct it. Let us assume that we will see you 
                back soon... <br><br>
                <i class="fas fa-exclamation-mark">Deleting your account will:</i>
                <ul>
                    <li>Delete your account from Pinsoe EzChat</li>
                    <li>Erase your message history</li>
                    <!-- <li>Delete you from </li>
                    <li></li> -->
                </ul><br><br>

                <p1>Confirm deleting your account clicking on this button below.</p1> <br><br>
                <button> <a href="deletee.php?deleteid=<?php echo $data['id']; ?>">Delete My Account</a></button><br><br>

               <span>We are looking forward to seeing you back</span>
            </p>     
        </div>
        <?php
   }
       ?>
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