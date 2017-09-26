<?php
  include_once "connection.php";
  $login = checkLogin();

  function checkLogin(){
    $user = $_POST['username'];
    $pass = $_POST['password'];
  }
?>
