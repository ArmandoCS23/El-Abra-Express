<?php
class MenuController {
    public function index() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?controller=login");
            exit();
        }
        include 'views/menu.php';
    }
}
?>