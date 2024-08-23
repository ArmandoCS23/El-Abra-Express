<?php
require_once 'models/ProductModel.php';

class ProductController {
    private $model;

    public function __construct() {
        $this->model = new ProductModel();
    }

    public function details() {
        if (!isset($_GET['id'])) {
            echo "Producto no encontrado.";
            return;
        }

        $id = $_GET['id'];
        $product = $this->model->getProductById($id);

        if (!$product) {
            echo "Producto no encontrado.";
            return;
        }

        include 'views/product_details.php';
    }
}
?>
