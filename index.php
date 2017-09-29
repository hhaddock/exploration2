<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  session_start();
  $msg = "";
  if(isset($_GET['msg'])){ $msg = $_GET['msg']; }
  echo $msg;
  if($msg == "user"){
    $msg = "<span class='text-center text-danger'><h4>Username is incorrect!</h4></span>";
  }
  if($msg == "pass"){
    // $msg = "<span class='text-center text-danger><h4>Password is incorrect!</h4></span>";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Web Chat Login</title>
    <link rel="stylesheet" href="https://bootswatch.com/darkly/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funct.js"></script>
  </head>
  <body>
    <div class="container jumbotron">
      <h1 class="text-center" id="title">Hayden's Web Chat</h1>
      <hr>
      <?= $msg; ?>
      <div class="col-md-6 col-md-push-3">
        <form id="loginForm" action="php/controller.php" method="post">
          <h3 class="text-right">Login</h3>
          <label>Username: </label><input class="form-control" type="text" name="username" placeholder="example"><br><br>
          <label>Passsword: </label><input class="form-control" type="password" name="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;"><br><br>
          <input type="submit" value="Login" class ="btn btn-primary">
          <br><br>
          <span><a id="createAcctLink">Create Account</a></span>
        </form>
        <br>
        <form id="createAcctForm" class="hidden" action="php/createAcct.php" method="post">
          <h3 class="text-right">Create An Account</h3>
          <label>Email: </label><input class="form-control" type="text" name="createEmail" placeholder="example@anonymous.com"><br><br>
          <label>Username: </label><input class="form-control" type="text" name="createUsername" placeholder="example"><br><br>
          <label>Passsword: </label><input class="form-control" type="password" name="createPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;"><br><br>
          <input type="submit" value="Create Account" class ="btn btn-primary">
          <br><br>
          <span><a id="loginLink">Have an Account Already? Login Here</a></span>
        </form>
      </div>
    </div>
  </body>
</html>



<!-- <form action="php/controller.php" method="post">
  <label>Username: </label><input type="text" name="username">
  <label>Passsword: </label><input type="password" name="password">
  <input type="submit" value="Login">
</form> -->
