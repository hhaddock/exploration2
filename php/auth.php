<?php
 session_start();

 echo $auth = $_SESSION['authenticated'];
 echo $user = $_SESSION['user'];
?>
