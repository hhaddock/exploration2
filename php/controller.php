<?php
  //Error MSGS : TURN OFF BEFORE PROD
  ini_set('display_startup_errors',1);
  ini_set('display_errors',1);
  error_reporting(-1);
  // END error_get_last

  require "connection.php";

  $message = "";

  $connection = new webChatDB();
  $username = $_POST['username'];
  $password = $_POST['password'];

  login($connection, $username, $password);

  function login($connection, $user, $pass){
    if($connection->checkUser($user) == 1){
      if($connection->checkPass($user, $pass) == 1){
       authenticated($connection, $user);
      } else {
      //  $message = "Password was incorrect";
        $_SESSION['message'] = "Password was incorrect";
        header("location: http://ec2-34-209-75-64.us-west-2.compute.amazonaws.com/exploration2?msg=user",  true,  301 );  exit;
      }
    } else {
    //  $message =  "Username is incorrect";
      $_SESSION['message'] = "Username was incorrect";
      header("location: http://ec2-34-209-75-64.us-west-2.compute.amazonaws.com/exploration2",  true,  301 );  exit;
    }
  }

  function authenticated($connection, $user){
   session_start();
   $auth = 1;
   $_SESSION['user'] = $user;
   $connection->authenticateUser($auth, $user);
   header("location: http://ec2-34-209-75-64.us-west-2.compute.amazonaws.com:1234/?user=$user",  true,  301 );  exit;
  //  header("location: http://ec2-34-209-75-64.us-west-2.compute.amazonaws.com/exploration2/php/auth.php",  true,  301 );  exit;
  }
?>
