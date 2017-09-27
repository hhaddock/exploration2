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
      if($connection->checkPass($user, $pass) == 1){
       authenticated($user);
      } else {
       echo "Password was incorrect";
      }
    } else {
     echo "Username is incorrect";
    }
  }

  function authenticated($user){
   session_start();
   $_SESSION['authenticated'] = 'true';
   $_SESSION['user'] = $user;
   setcookie('user', $user, time() + (86400), '/');
   header("location: http://ec2-34-209-75-64.us-west-2.compute.amazonaws.com:1234/?auth=true&user=".urlencode($user)."",  true,  301 );  exit;
  //  header("location: http://ec2-34-209-75-64.us-west-2.compute.amazonaws.com/exploration2/php/auth.php",  true,  301 );  exit;
  }
?>
