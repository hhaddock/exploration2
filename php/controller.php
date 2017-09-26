<?php
  include_once "php/connection.php";
  $login = checkLogin($_POST['username'], $_POST['password']);

  echo $login;

  function checkLogin($user, $pass){
    // if($pass == ""){
    //   return $user." There is no password";
    // } else {
    //   return $user." ".$pass;
    }
?>
