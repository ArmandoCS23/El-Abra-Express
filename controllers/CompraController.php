<?php
require_once 'models/Database.php'; 
require_once 'models/VentaModel.php';
require_once 'models/ProductModel.php';

class CompraController {
    private $ventaModel;
    private $productModel;

    public function __construct() {
        $this->ventaModel = new VentaModel((new Database())->getConnection());
        $this->productModel = new ProductModel();
    }

    public function mostrarFormularioCompra() {
        if (isset($_POST['id_producto'])) {
            $product = $this->productModel->getProductById($_POST['id_producto']);

            // Verifica que se pasen los datos necesarios
            if ($product && isset($product['nombre']) && isset($product['precio'])) {
                include 'views/compra_form.php';
            } else {
                echo "Error: los detalles del producto no están disponibles.";
            }
        } else {
            echo "Error: No se proporcionó el ID del producto.";
        }
    }

    public function procesarCompra() {
        session_start();
        $id_usuario = $_SESSION['id_usuario'];  // Suponiendo que el ID del usuario está guardado en la sesión
        $id_producto = $_POST['id_producto'];
        $cantidad = $_POST['cantidad'];
        $metodo_pago = $_POST['metodo_pago'];

        $resultado = $this->ventaModel->registrarVenta($id_usuario, $id_producto, $cantidad, $metodo_pago);

        if ($resultado) {
            echo "Compra realizada con éxito.";
            // Aquí podrías redirigir al usuario a una página de confirmación de compra
        } else {
            echo "Error al realizar la compra.";
        }
    }
}