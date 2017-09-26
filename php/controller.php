<?php
  include_once "php/connection.php";
  $login = checkLogin();

  function checkLogin(){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    echo $conn;
  }
?>
