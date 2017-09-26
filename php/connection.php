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

      public function changePass($user, $pass){
       $pw = password_hash($pass, PASSWORD_DEFAULT);
       $stmt = $this->conn->prepare(
         "UPDATE users set password = ? WHERE username = ?"
       );
       $stmt->bind_param("ss", $pw, $user);
       $stmt->execute();
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
        $stmt = $this->conn->prepare(
          "SELECT password FROM users WHERE username = ?"
        );
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->fetch_assoc();
        return password_verify($pass, $result['password']);
      }
    }
 ?>
