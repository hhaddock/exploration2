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
        // $stmt = $this->conn->prepare(
        //   "SELECT * FROM users WHERE username = ?"
        // );
        // $stmt->bind_param("s", $user);
        // $stmt->execute();
        // $result = $stmt->get_result();
        // echo $result;
        echo $user;
      }
    }
 ?>
