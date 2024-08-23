<?php
include_once 'models/Database.php';
include_once 'models/UserModel.php';

class RegisterController {
    public function index() {
        include 'views/register.php';
    }

    public function register() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $contrasena = $_POST['contrasena'];
            $confirmarContrasena = $_POST['confirmar_contrasena'];

            if ($contrasena !== $confirmarContrasena) {
                header("Location: index.php?controller=register&error=Passwords do not match");
                exit();
            }

            $user = new UserModel();
            if ($user->register($nombre, $apellidos, $email, $telefono, $contrasena)) {
                // Redirigir al registro con el mensaje de éxito
                header("Location: index.php?controller=register&success=true");
                exit();
            } else {
                header("Location: index.php?controller=register&error=Registration Failed");
                exit();
            }
        }
    }
}