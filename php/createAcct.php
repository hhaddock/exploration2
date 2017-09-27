<?php
  //Error MSGS : TURN OFF BEFORE PROD
  ini_set('display_startup_errors',1);
  ini_set('display_errors',1);
  error_reporting(-1);
  // END error_get_last

  require "connection.php";
  $connection = new webChatDB();
  $email = $_POST['createEmail'];
  $username = $_POST['createUsername'];
  $password = $_POST['createPassword'];

  $connection->createUser($email, $username, $password);

?>
