<?php
 session_start();

 // echo $auth = $_SESSION['authenticated'];
 // echo "&";
 // echo $user = $_SESSION['user'];
 if(isset($_COOKIE['user'])){
   echo "Cookie user exists ".$_COOKIE['user'];
 }
?>
