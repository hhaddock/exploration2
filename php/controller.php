<?php
  include_once "php/connection.php";
  $login = checkLogin($_POST['username'], $_POST['password']);

  function checkLogin($user, $pass){
    echo $user;
?>
