<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Web Chat Login</title>
    <?php include_once "php/connection.php" ?>
  </head>
  <body>
    <form class="" action="" method="post">
      <label>Username: </label><input type="text" name="username">
      <label>Passsword: </label><input type="password" name="password">
      <input type="submit" value="Login">
    </form>

    <?php
      if(isset($_POST['username'])){
        echo $_POST['username'];
      }
     ?>
  </body>
</html>
