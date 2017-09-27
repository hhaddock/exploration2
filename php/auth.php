<?php
 session_start();

 echo $auth = $_SESSION['authenticated'];
 echo "&";
 echo $user = $_SESSION['user'];
?>
