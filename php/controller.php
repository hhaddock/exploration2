<?php
  include_once "php/connection.php";
  $login = checkLogin($_POST['username'], $_POST['password']);

  function checkLogin($user, $pass){
    if($pass == ""){
      echo $user." There is no password";
    } else {
      echo $user." ".$pass;
    }
?>
