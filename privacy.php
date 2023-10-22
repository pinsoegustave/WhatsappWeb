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
    <title>Privacy Settings | Pinsoe Ezchat</title>
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
      .cover {
        position: relative;
        top: 0;
        left: 0;
        margin-left: 130px;
        margin-top: 20px;
        width: 40%;
        height: 40%;
        border-radius: 50%;
      }
      .rightside span {
        margin-left: -70px;
      }
      .changepass {
        margin-left: 40px;
        margin-top: 20px;
        display: flex;

      }
      .changepass form {
        border: 2px solid #b6a187;
        width: 55%;
        height: 30vh;
        margin-left: 50px;
        border-radius: 10px;
        background-image: url(deck/pexels-tetyana-kovyrina-11742011.jpg);

      }
      .changepass form input {
        padding: 8px;
        margin-left: 30px;
        border-radius: 40px;
        margin-top: 10px;
        width: 70%;
        outline: none;
        border: 2px solid gray;
      }
      .changepass form button {
        margin-top: 20px;
        margin-left: 70px;
        width: 50%;
        height: 40px;
        border-radius: 30px;
        background-color: #b6a187;
      }
      .leftside a i {
         position: relative;  
         color: #000; 
         font-size: 1.5em;
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
            <a href="delete.php"><li href="">Delete my account</li></a>

           </div>

        </div>
        <div class="rightside" id="all-user">
        <?php
            $id = $_SESSION['id'];
            $query3 = mysqli_query($con, "SELECT * FROM `users` WHERE id = $id" );
            while($user3 = mysqli_fetch_assoc($query3)) {
                ?>
                <img src="images/<?php echo $user3['profile']; ?>" class="cover" alt=""><br><br>
               <center><span><?php echo $user3['username']; ?></span></center> 
               
               <?php
            }
            ?>
            <div class="changepass">
               <h4>Change Password</h4>
               <form action="" method="post">
                  <input type="text" name="cpass" placeholder="Current Password" value="">
                  <input type="password" name="npass" placeholder="New Password" value="">
                  <button name="send">Update</button>
               </form>
               <?php
               $id = $_SESSION['id'];
               if(isset($_POST['send'])) {
                $cpass = $_POST['cpass'];
                $npass = $_POST['npass'];

                $query5 = mysqli_query($con, "SELECT * FROM `users` WHERE id = $id");
                $data = mysqli_fetch_assoc($query5);

                if($data['password'] == $cpass) {
                    $query4 = mysqli_query($con, "UPDATE `users` SET `password`='$npass' WHERE id = $id ");
                    if($query4) {
                        echo "<script>alert('Password changed');</script>";
                    }
                    else {
                        echo "<script>alert('Try Again Baba')</script>";

                    }

                }
                else {
                    echo "<script>alert('Wrong Password');</script>";
                    
                }
            
               } 
                 ?>
            </div>
      
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