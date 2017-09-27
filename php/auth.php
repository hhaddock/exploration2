<?php
 session_start();

 // echo $auth = $_SESSION['authenticated'];
 // echo "&";
 // echo $user = $_SESSION['user'];
 if(isset($_SESSION['authenticated'])){
   echo "Cookie user exists ".$_COOKIE['user'];
 } else {
   echo "cookie is not set!";
 }
?>
