<?php
require_once 'models/ProductModel.php';

class CatalogoController {
    private $model;

    public function __construct() {
        $this->model = new ProductModel();
    }

    public function index() {
        $products = $this->model->getProducts();
        require_once 'views/catalogo.php';
    }
}
?>