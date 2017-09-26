<?php
  //Error MSGS : TURN OFF BEFORE PROD
  ini_set('display_startup_errors',1);
  ini_set('display_errors',1);
  error_reporting(-1);
  // END error_get_last

  require "connection.php";

  $connection = new webChatDB();
  $login = checkLogin($connection);
  $connection->checkUser();
  
  function checkLogin($conn){
    $user = $_POST['username'];
    $pass = $_POST['password'];

  }
?>
