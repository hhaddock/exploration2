<?php
  //Error MSGS : TURN OFF BEFORE PROD
  ini_set('display_startup_errors',1);
  ini_set('display_errors',1);
  error_reporting(-1);
  // END error_get_last

  require "connection.php";

  $connection = new webChatDB();
  $login = checkLogin();

  function checkLogin(){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    print_r($connection);
    // $stmt = $connection->prepare(
    //   "SELECT * FROM users WHERE username = ?"
    // );
    // $stmt->bind_param("s", $user);
    // $stmt->execute();
    // $result = $stmt->get_result();
    // echo $result;
  }
?>
