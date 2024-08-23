<?php

class SettingsController {
    public function index() {
        include 'views/settings.php';
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?controller=login");
        exit();
    }
}

?>