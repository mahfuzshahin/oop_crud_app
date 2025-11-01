<?php

    require_once 'config/Database.php';
    class User extends Database {
        public function __construct() {
            parent::__construct();
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

        public function getUserById($id) {
            $sql = "SELECT * FROM users WHERE id = $id";
            $result = $this->conn->query($sql);
            return $result->fetch_assoc();
        }
    
        public function updateUser($id, $name, $email) {
            $name = $this->conn->real_escape_string($name);
            $email = $this->conn->real_escape_string($email);
            $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
            return $this->conn->query($sql);
        }
    
        public function deleteUser($id) {
            $sql = "DELETE FROM users WHERE id=$id";
            return $this->conn->query($sql);
        }

        
    }
?>