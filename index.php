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
  </head>
  <body>
    <form action="php/controller.php" method="post">
      <label>Username: </label><input type="text" name="username">
      <label>Passsword: </label><input type="password" name="password">
      <input type="submit" value="Login">
    </form>
  </body>
</html>
