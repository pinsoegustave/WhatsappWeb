<?php
session_start();
if(isset($_SESSION['username'])) {
include "connection.php";
?>

<!DOCTYPE html>
<head>
   <title>Whatsapp Web</title>
   <link rel="stylesheet" href="fontawesome-free-6.1.0-web/css/all.min.css">
   <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap-all.min.css">
   
      <style>
      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
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
         width: 1396px;
         max-width: 97%;
         height: calc(100vh - 40px);
         background: #fff;
         box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.06), 0 2px 5px 0 rgba(0, 0, 0, 0.06);
         display: flex;
         box-shadow: 2px red;

      }
      .nav-icons {
         display: flex;
      }
      .nav-icons li{
         display: flex;
         list-style: none;
         cursor: pointer;
         color: #51585c;
         font-size: 1.5em;
         margin-left: 15px;

      }

      .container .leftSide 
      {
         position: relative;
         flex: 30%;
         min-width: 30%;
         /* background: #c6b5b5; */
         background-image: url(pexels-edgar-rodrigo-12315477.jpg);
         border-right: 1px solid rgba(0, 0, 0, 0.2);

      }
      .container .leftSide::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: url(deck/pexels-tetyana-kovyrina-11742011.jpg);
         opacity: 0.56;
      }

      .container .rightSide {
         position: relative;
         flex: 70%;
         min-width: 65%;
         background: #e5ddd5;

      }

      .container .rightSide::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: url(deck/downloadimage.jpg);
         opacity: 0.16;
      }

      .header {
         position: relative;
         width: 100%;
         height: 60px;
         background: #ededed;
         display: flex;
         justify-content: space-between;
         align-items: center; 
         padding: 0 20px;
         
      }

      .userimg {
         position: relative;
         width: 40px;
         height: 40px;
         overflow: hidden;
         border-radius: 50%;
         object-fit: cover;
   
      }

      .cover {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         object-fit: cover;
      }

      .search_chat {
         position: relative;
         width: 100%;
         height: 50px;
         background: gray;
         display: flex;
         justify-content: center;
         align-items: center;
         padding: 0 15px;

      }

      .search_chat div {
         width: 100%;

      }

      .search_chat div input {
         width: 81%;
         outline: none;
         border: none;
         background: #fff;
         padding: 6px;
         height: 38px;
         border-radius: 30px;
         font-size: 14px;
         padding-left: 40px;

      }
      .search_chat div ion-icon {
         position: absolute;
         left: 30px;
         top: 14px;
         font-size: 1.2em;
      }

      .chatlist {
         position: relative;
         height: calc(100% - 110px);
         overflow: auto;

      }

      .chatlist .block {
         position: relative;
         width: 100%;
         display: flex;
         align-items: center;
         padding: 10px;
         border-bottom: 1px solid rgba(0, 0, 0, 0.06);
         cursor: pointer;

      }

      .chatlist .block.active {
         background: #ebebeb;
      }

      .chatlist .block:hover {
         background: #f5f5f5;
      }

      .chatlist .block .imgbx {
         position: relative;
         min-width: 45px;
         height: 45px;
         overflow: hidden;
         border-radius: 50%;
         margin-right: 10px;

      }

      .chatlist .block .details {
         position: relative;
         width: 100%;

      }

      .chatlist .block .details .listHead {
         display: flex;
         justify-content: space-between;
         margin-bottom: 5px;
      }

      .chatlist .block .details .listHead a {
         text-decoration: none;
      }

      .chatlist .block .details .listHead h4 {
         font-size: 1em;
         font-weight: 600;
         color: #111;
      }

      .chatlist .block .details .listHead .time {
         margin-left: 38vh;
         margin-top: -15px;
         font-size: 0.75em;
         color: #aaa;
      }

      .chatlist .block .details .listHead .time {
         color: #111;
      }

      .chatlist .block.unread .details .listHead .time {
         color: #06d755;
      }

      .message_p {
         display: flex;
         justify-content: space-between;
         align-items: center;

      }

      .message_p p {
         color: #aaa;
         display: -webkit-box;
         -webkit-line-clamp: 1;
         font-size: 0.9em;
         -webkit-box-orient: vertical;
         overflow: hidden;
         text-overflow: ellipsis;
      }

      .message_p b {
         background: #06d755;
         color: #fff;
         min-width: 20px;
         height: 20px;
         border-radius: 50%;
         display: flex;
         justify-content: center;
         align-items: center;
         font-size: 0.75em;
      }

      .imgText {
         position: relative;
         display: flex;
         justify-content: center;
         align-items: center;
      }

      .imgText h4 {
         font-weight: 600;
         line-height: 1.2em;
         margin-left: 15px;
      }

      .imgText h4 span {
         font-size: 0.8em;
         color: #555;
      }

      /* chatBox */
      .chatBox {
         position: relative;
         width: 100%;
         height: calc(100% - 120px);  /* 60 + 60 = 120px */
         padding: 50px;
         overflow-y: auto;
      }

      .message {
         position: relative;
         display: flex;
         width: 100%;
         margin: 5px 0;

      }

      .message p {
         position: relative;
         right: 0;
         text-align: right;
         max-width: 85%;
         padding: 20px;
         background: rgba(245, 201, 143, 0.91);
         border-radius: 10px;
         font-size: 0.9em;
      }

      .message p::before {
         content: '';
         position: absolute;
         top: 0;
         right: -12px;
         width: 20px;
         height: 20px;
         background: linear-gradient(135deg, rgba(245, 201, 143, 0.91) 0%, rgba(245, 201, 143, 0.91) 50%, transparent 50%, transparent);
      }

      .message p span {
         display: block;
         margin-top: 5px;
         font-size: 0.85em;
         opacity: 0.5;
      }

      .my_message {
         justify-content: flex-end;

      }

      .frnd_message {
         justify-content: flex-start;

      }

      .frnd_message p {
         background: gray;
         text-align: left;
      }

      .message.frnd_message p::before {
         content: '';
         position: absolute;
         top: 0;
         left: -10px;
         width: 20px;
         height: 20px;
         background: linear-gradient(225deg, gray 0%, gray 50%, transparent 50%, transparent);
      }
      /* chatbox_input */
      .chatbox_input{
         position: relative;
         width: 100%;
         height: 60px;
         background: #f0f0f0;
         padding: 15px;
         display: flex;
         justify-content: space-between;
         align-items: center;
      }
      .chatbox_input ion-icon {
         cursor: pointer;
         font-size: 5em;
         color: #51585c;
         width: 30px;
         padding: auto;
      
      }
      .chatbox_input ion-icons:nth-child(1) {
         margin-right: 15px;
      }

      .chatbox_input input{
         position: relative;
         width: 90%;
         margin: 0 20px;
         padding: 10px 20px;
         border: none;
         outline: none;
         border-radius: 30px;
         font-size: 1em;
      }
      .chatbox_input button{
         /* width: 40px; */
         /* height: 30px; */
         border-radius: 200px;
         border: none;
         color: #51585c;
         /* color: black; */
         font-size: 20px;
         background: none;
         /* margin-left: 20px; */

      }
      .logout {
         position: absolute;
         margin-left: 55vw;
         margin-top: 20px;
         display:flex;
         /* visibility: hidden;   */
      }
      .logout i {
         color: red;
         /* transform: rotate(180deg); */
      }
      .logout a {
         margin-left: 10px;
      }
      
      .nav-icons2 {
         display: flex;
         position: relative;
      }
      .nav-icons2 li {
         display: flex;
         list-style: none;
         cursor: pointer;
         color: #51585c;
         font-size: 1.5em;
         margin-left: 30px;
         margin-top: 10px;

      }
      .nav-icons2 li a{
         list-style: none;
         text-decoration: none;
         color: black;
         cursor: pointer;
      }
      
      .dropbtn {
         /* background-color: #3498DB; */
         color: black;
         /* padding: 5px; */
         font-size: 1em;
         border: none;
         cursor: pointer;
         margin-top: -6px;
      }
      .dropbtn a {
         text-decoration: none;
         color: #111;
      }
      .dropdown {
         position: relative;
         display: inline-block;
      }
      .dropdown-content {
         display: none;
         position: absolute;
         background-color: #f1f1f1;
         min-width: 60px;
         box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
         z-index: 1;
         margin-left: -60px;
      }
      .dropdown-content a {
         color: black;
         padding: 12px 16px;
         text-decoration: none;
         display: block;

      }
      .dropdown-content a:hover {
         background-color: #ddd;
      }
      .show {
         display: block;
      }


   </style>

<body>
   <div class="container">
      <div class="leftSide" id="all-user">
         <div class="header">
            <div class="userimg">
               <?php
               $id = $_SESSION['id'];
               $query1 = mysqli_query($con, "SELECT * FROM `users` where id= $id");
               while($user1 = mysqli_fetch_assoc($query1)) {
                  ?>
                  <img src="images/<?php echo $user1['profile']; ?>" class="cover" alt="">

                  <?php
               }
                             
               ?>      
            </div>
            <?php
                $id = $_SESSION['id'];
                $query0 = mysqli_query($con, "SELECT * FROM `users` where id=$id");
                while($user0 = mysqli_fetch_assoc($query0)) {
                    ?>            
                    <span> <?php echo $user0['username']; ?> </span>
                    <?php
                }
                ?>
            <ul class="nav-icons">
               <li><ion-icon name="scan-circle-outline"></ion-icon></li>
               <li><ion-icon name="chatbox"></ion-icon></li>
               <li><ion-icon name="ellipsis-vertical"></ion-icon></li>
               <div class="dropdown">
               <li><button onclick="myFunction()" class="dropbtn"><a href="#" class="fas fa-house "></a></button></li>
               <div id="myDropdown" class="dropdown-content">
                  <a href="home.php">Home</a>
                  <a href="settings.php">Settings</a>
                  <a class="fa fa-sign-out fa-rotate-(180)" aria-hidden="true" href="logout.php">Logout</a>
                  <!-- <a href="logout.php" >Logout</a> -->
               </div>
            </div>
            </ul>

         </div>


         <!--search-->
         <div class="search_chat">
            <div>
               <input type="text" placeholder="Search or start a new chat">
               <ion-icon name="search-outline"></ion-icon>
            </div>
         </div>
         <!--chatlist-->
        
         <div class="chatlist">
         <?php
                  $id = $_SESSION['id'];
                  $query = mysqli_query($con, "SELECT * FROM `users` WHERE id!=$id");
                  while($user = mysqli_fetch_assoc($query)) {
                     ?>
            <div class="block">
               <div class="imgbx">                
                  <img src="images/<?php echo $user['profile']; ?>" class="cover" alt="">
                                         
               </div>            
               <div class="details">
                  <div class="listHead">

                     <a href="home.php?userid=<?php echo $user['id']; ?>">
                        <h4><?php echo $user['username']; ?></h4>
                     
                     <p class="time">10:56</p>
                  
                     <div class="message_p">
                            <p>How to make Whatsapp clone using html and css.</p>
                          </div>
                     </a>

                  </div>
               </div>
            </div>
            <?php                   
                  }                   
                     ?> 
         </div> 
      </div>



      <div class="rightSide">
      <!-- <img src="deck/pexels-edgar-rodrigo-12315477.jpg" alt=""> -->
         <div class="header">
            <div class="imgText">
               <div class="userimg" class="all-user">
               <?php
            if(isset($_GET['userid'])) {
               $userid = $_GET['userid'];
               $query2 = mysqli_query($con, "SELECT * FROM `users` WHERE id = $userid ");
               $data = mysqli_fetch_assoc($query2);
               ?>
                  <span onclick="run()"><i class="fa fa-user"></i></span>
                  <img src="images/<?php echo $data['profile']; ?>" class="cover" alt="">
                  <h4><?php echo $data['username']; ?><br><span>online</span></h4>
                  <?php
              
                  ?>
               </div>
               <h4><?php echo $data['username']; ?><br><span>online</span></h4>
               
            </div>
            
            <ul class="nav-icons2">
               <li><ion-icon name="search-outline"></ion-icon></li>
               <!-- <li><ion-icon name="scan-circle-outline"></ion-icon></li> -->
               <li><ion-icon name="chatbox"></ion-icon></li>
               <li><ion-icon name="ellipsis-vertical"></ion-icon></li>

            </ul>
          
         </div>
         <!--chatbox-->
         <div class="chatBox">
            <?php
            $id = $_SESSION['id'];
            $msgto = $_GET['userid'];
            $slct = mysqli_query($con, "SELECT * FROM `message` WHERE (outgoing='$id' AND innergoing='$msgto')
                  OR (outgoing='$msgto' AND innergoing='$id') ");
                 
                 while($msgg = mysqli_fetch_assoc($slct)) {
                      if($msgg['outgoing']==$id AND $msgg['innergoing']==$msgto) {
                        ?>
                           <div class="message my_message">
                              <p><?php echo $msgg['message']?><br><span>09:49</span></p>

                          </div>
                  <?php
                  }
                  if($msgg['outgoing']==$msgto AND $msgg['innergoing']==$id) {
                     ?>
                     <div class="message frnd_message">
                        <p><?php echo $msgg['message']; ?><br><span>12:15</span></p>

                     </div>


                     <?php
                  } 
                 }
            
            ?>

         </div>

         <!-- chatbox_input -->
         <form action="" method="post">
         <div class="chatbox_input">
            <ion-icon name="happy-outline"></ion-icon>
            <ion-icon name="attach-outline"></ion-icon>
            <input type="text" name="message" placeholder="Type your message here">
            <button class="fa fa-paper-plane" name="send"></button>
            <ion-icon name="mic"></ion-icon>
         </div>
         </form>
         <?php
}
         ?>
         <?php
         if(isset($_POST['send'])) {
            $id = $_SESSION['id'];
            $msgto = $_GET['userid'];
            $message = $_POST['message'];

            $insert = mysqli_query($con, "INSERT INTO `message`(outgoing,innergoing,`message`)
                     VALUES('$id','$msgto','$message') ");
            
            if($insert) {
               echo "<script>location.href='home.php?userid=$msgto'</script>";

            }
         }
         ?>
      </div>
      
      

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body> 
<script>
   var side = document.getElementById('all-user');
   function run() {
      side.classList.toggle('run');
    
   }
   </script>

<script>
   function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
 }
 
 window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
       var dropdowns = document.getElementByClassName("dropdown-content");
       var i;
       for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
             openDropdown.classList.remove('show');
          }
       }
    }
 }
</script>

</html>

<?php
}
else {
    header("location: login.php");
}
?>