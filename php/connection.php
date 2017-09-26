<?php
    class webChatDB {
      public $conn;

      function __construct(){
        $this->conn = $this->connect();
      }
      private function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "Tigersblvd16";

        $connection = new mysqli ($servername, $username, $password);
        return $connection;
      }

      public function disconnect($connection){
        $connection->close();
      }

      public function checkUser($user){
        $query = "SELECT * FROM users WHERE username = ?";
        if($stmt = $this->conn->prepare($query)){
          $stmt->bind_param("s", $user);
          // $stmt->execute();
          // $result = $stmt->get_result();
        } else {
          var_dump($this->conn->error);
        }
      }
    }
 ?>
