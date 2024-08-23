<?php
session_start();

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'login';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($controller) {
    case 'login':
        include 'controllers/LoginController.php';
        $controller = new LoginController();
        $controller->$action();
        break;
    case 'register':
        include 'controllers/RegisterController.php';
        $controller = new RegisterController();
        $controller->$action();
        break;
    case 'menu':
        include 'controllers/MenuController.php';
        $controller = new MenuController();
        $controller->$action();
        break;
    case 'contact':
        include 'controllers/ContactController.php';
        $controller = new ContactController();
        $controller->$action();
        break;
    case 'settings':
        include 'controllers/SettingsController.php';
        $controller = new SettingsController();
        $controller->$action();
        break;
    case 'about':
        include 'controllers/AboutController.php';
        $controller = new AboutController();
        $controller->$action();
        break;
    case 'catalogo':
        include 'controllers/CatalogoController.php';
        $controller = new CatalogoController();
        $controller->$action();
        break;
    case 'product':
        include 'controllers/ProductController.php';
        $controller = new ProductController();
        $controller->$action();
        break;
    case 'compra':
        include 'controllers/CompraController.php';
        $controller = new CompraController();
        // Verifica si se requiere el producto para el método
        if ($action == 'mostrarFormularioCompra') {
            $product = null;
            if (isset($_POST['id_producto'])) {
                include 'models/ProductModel.php';
                $productModel = new ProductModel();
                $product = $productModel->getProductById($_POST['id_producto']);
            }
            $controller->mostrarFormularioCompra($product);
        } else {
            $controller->$action();
        }
        break;
    default:
        echo "Página no encontrada";
        break;
}
?>
