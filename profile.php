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
    <title>Profile Settings | Pinsoe Ezchat</title>
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
         overflow-y: scroll;
         overflow: hidden;

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
        margin-left: 180px;
        margin-top: 20px;
        width: 30%;
        height: 30%;
        border-radius: 50%;
        /* object-fit: cover; */
        
      }
      .rightside form {
        width: 250px;
        border: 3px solid #DEB887;
        text-align: center;
        border-radius: 10px;
        height: 100px;
        margin-left: 30%;
        margin-top: -20px;
        background-color: #fff;
         background-image: url(deck/pexels-tetyana-kovyrina-11742011.jpg);
      }
      .rightside form:nth-child(2) {
        margin-left: 18%;
        margin-top: 5px;
      }
      .rightside form input {
        background: #b6a187;
        width: 200px;
        padding: 5px;
        margin-top: 5px;
        border-radius: 10px;
      }
      .rightside form button {
        height: 30px;
        width: 120px;
        border: none;
        border-radius: 5px;
        background: grey;
        border: 1px solid #b6a187;
        margin-top: 30px;
        cursor: pointer;
      }
      .rightside form button:nth-child(2) {
        margin-left: 1  0px;

      }
      .rightside span {
        margin-left: -50px;
        margin-top: 5px;
      }
      .profilename {
        display: flex;
        margin-top: 30px;

      }
      .profilename span {
        color: red;
        width: 250px;
        height: 120px;
        margin-left: 18%;
        border: 3px solid lightcoral;
        border-radius: 10px;
      }
      .profilename input {
        padding: 5px;
        margin-top: 10px;
        margin-left: 8px;
        border-radius: 10px;
        width: 200px;
      }
      .profilename button {
        height: 30px;
        width: 120px;
        border: none;
        border-radius: 5px;
        background: grey;
        border: 1px solid lightgreen;
        margin-top: 20px;
        cursor: pointer;
        margin-left: 10px;
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
                <h4>Change Profile Picture<h4>
                <center>
                   <form action="" method="post" enctype="multipart/form-data">
                    <!-- <label for="">Select</label> -->
                     <input type="file" name="file" id="">
                     <button name="post">Update</button>
                   </form>
                   

                </center>
                <?php
            }
            
            ?>
            <div class="profilename">
                <?php
                $query4 = mysqli_query($con, "SELECT * FROM `users` WHERE id = $id");
                $data = mysqli_fetch_assoc($query4);
                ?>
                <h4>Change Username</h4>
                    <form action="" method="POST">
                        <input type="text" name="uname" placeholder="" value="<?php echo $data['username']; ?>">
                        <button name="submit">Update</button>
                    </form>
                    <?php
                    if(isset($_POST['submit'])) {
                        $uname = $_POST['uname'];

                        $sql = mysqli_query($con, "UPDATE `users` SET `username` = '$uname' WHERE `users`.`id` = $id");
                        if ($sql) {
                            echo "<script>alert('Username Updated'); </script>";

                        }
                        else {
                            echo "<script>alert('Try Again Baba'); </script>";
                            die(mysqli_error($con));

                        }
                    }
                    ?>
            </div>
            <!-- UPDATE `users` SET `username` = 'maette900' WHERE `users`.`id` = 16; -->
        </div>
       
    </div>
   
</body>
</html>
<?php
if(isset($_POST['post'])) {
    $filename = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];
    $id = $_SESSION['id'];
    $folder = "images/".$filename;
    $sql = mysqli_query($con, "UPDATE users SET profile='$filename' WHERE id = $id ");
     if($sql) {
        move_uploaded_file($tempname, $folder);
        echo "<script>location.href='profile.php';</script>";

     }
}
?>
<?php
}
else {
   header("location.php");
}
?>