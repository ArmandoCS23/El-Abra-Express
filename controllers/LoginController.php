<?php
include_once 'models/Database.php';
include_once 'models/UserModel.php';

class LoginController {
    public function index() {
        include 'views/login.php';
    }

    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $contrasena = $_POST['contrasena'];

            $user = new UserModel();
            if ($user->login($email, $contrasena)) {
                $_SESSION['user_id'] = $user->getId();
                header("Location: index.php?controller=menu");
                exit();
            } else {
                header("Location: index.php?controller=login&error=Invalid Credentials");
                exit();
            }
        }
    }
}
?>