<?php
    class webChatDB {
      public $conn;

      function __construct(){
        $this->conn = $this->connect();
      }
      private function connect(){
        $servername = "localhost";
        $username   = "root";
        $password   = "Tigersblvd16";
        $dbname     = "chatApp";

        $connection = new mysqli ($servername, $username, $password, $dbname);
        return $connection;
      }

      public function disconnect($connection){
        $connection->close();
      }

      public function checkUser($user){
        $query = "SELECT * FROM users WHERE username = ?";
        if($stmt = $this->conn->prepare($query)){
          $stmt->bind_param("s", $user);
          $stmt->execute();
          $result = $stmt->get_result();
        } else {
          var_dump($this->conn->error);
        }
        return $result->num_rows;
      }

      public function checkPass($user, $pass){
        $query = "SELECT password FROM users WHERE username = ?";
        if($stmt = $this->conn->prepare($query)){
          $stmt->bind_param("s", $user);
          $stmt->execute();
          $result = $stmt->get_result();
        } else {
          var_dump($this->conn->error);
        }
         print_r($result->fetch_assoc());
      }
    }
 ?>
