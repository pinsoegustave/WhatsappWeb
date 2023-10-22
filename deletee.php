<?php
include 'connection.php';
if(isset($_GET['deleteid'])) {
      $id = $_GET['deleteid'];

      $query6 = "DELETE FROM `users` WHERE  id = $id";
      $sql = mysqli_query($con, $query6);
      if ($sql) {
         echo '<script>alert(User Deleted Successfully); </script>';
         include "login.php";
      }
      else {
         echo '<script>alert(Try Again Baba); </script>';
        //  echo 'die(mysqli_error($con))';
      }
    }
    ?>