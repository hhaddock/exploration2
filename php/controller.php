<?php
  //Error MSGS : TURN OFF BEFORE PROD
  ini_set('display_startup_errors',1);
  ini_set('display_errors',1);
  error_reporting(-1);
  // END error_get_last

  require "connection.php";

  $connection = new webChatDB();
  $user = $connection->checkUser($_POST['username']);
  $pass = $connection->checkPass($_POST['username'], $_POST['password']);

  checkLogin($user, $pass);

  function checkLogin($user, $pass){
    echo $user." ".$pass;
  }
?>
