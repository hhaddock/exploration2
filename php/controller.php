<?php
  //Error MSGS : TURN OFF BEFORE PROD
  ini_set('display_startup_errors',1);
  ini_set('display_errors',1);
  error_reporting(-1);
  // END error_get_last

  require "connection.php";

  $connection = new webChatDB();
  $username = $_POST['username'];
  $password = $_POST['password'];

  login($connection, $username, $password);

  function login($connection, $user, $pass){
    if($connection->checkUser($user) == 1){
      echo $user." Exists";
      if($connection->checkPass($user, $pass) == 1){
        echo $pass." is correct";
      } else {
        echo $pass." is incorrect";
      }
    }
  }
?>
