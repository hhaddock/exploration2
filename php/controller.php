<?php
  include_once "php/connection.php";
  $login = checkLogin($_POST['username'], $_POST['password']);

  echo $login;

  function checkLogin($user, $pass){
    return $user." ".$pass;
  }
?>
