<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
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
      <h1 class="text-center">Hayden's Web Chat</h1>
      <hr>
      <div class="col-md-6 col-md-push-3" id="loginForm">
        <form action="php/controller.php" method="post">
          <label>Username: </label><input class="form-control" type="text" name="username"><br><br>
          <label>Passsword: </label><input class="form-control" type="password" name="password"><br><br>
          <input type="submit" value="Login" class ="btn btn-primary">
        </form>
        <br>
        <span><a href="#">Create Account</a></span>
      </div>
    </div>
  </body>
</html>



<!-- <form action="php/controller.php" method="post">
  <label>Username: </label><input type="text" name="username">
  <label>Passsword: </label><input type="password" name="password">
  <input type="submit" value="Login">
</form> -->
