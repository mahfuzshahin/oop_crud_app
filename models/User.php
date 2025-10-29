<?php

    require_once __DIR__ . '/../config/Database.php';
    class User extends Database {
        public function __construct() {
            parent::__construct(); // ✅ This line is required
        }
    
        public function getAllUsers() {
            $sql = "SELECT * FROM users ORDER BY id DESC";
            $result = $this->conn->query($sql);
            return $result;
        }

        public function createUser($name, $email) {
            $name = $this->conn->real_escape_string($name);
            $email = $this->conn->real_escape_string($email);
            $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
            return $this->conn->query($sql);
        }
    }
?>