<?php
require_once __DIR__ . '/../models/User.php';

class UserController {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function index() {
        $users = $this->user->getAllUsers();
        include __DIR__ . '/../views/users/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->user->createUser($_POST['name'], $_POST['email']);
            header("Location: index.php");
            exit;
        }
        include __DIR__ . '/../views/users/create.php';
    }

    public function edit($id) {
        $userData = $this->user->getUserById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->user->updateUser($id, $_POST['name'], $_POST['email']);
            header("Location: index.php");
            exit;
        }
        include __DIR__ . '/../views/users/edit.php';
    }

    public function delete($id) {
        $this->user->deleteUser($id);
        header("Location: index.php");
        exit;
    }


}
?>