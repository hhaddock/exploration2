<?php
  $servername = "localhost";
  $username = "root";
  $password = "Tigersblvd16";

  $conn = mysqli_connect($servername, $username, $password);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
 ?>
