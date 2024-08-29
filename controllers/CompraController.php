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
        if (isset($_POST['id_producto']) && is_numeric($_POST['id_producto'])) {
            $id_producto = (int)$_POST['id_producto'];
            $product = $this->productModel->getProductById($id_producto);

            // Verifica que se pasen los datos necesarios
            if ($product && isset($product['nombre']) && isset($product['precio'])) {
                include 'views/compra_form.php';
            } else {
                echo "Error: los detalles del producto no están disponibles.";
            }
        } else {
            echo "Error: No se proporcionó un ID de producto válido.";
        }
    }

    public function procesarCompra() {
        session_start();

        // Validaciones básicas
        if (empty($_POST['id_producto']) || !is_numeric($_POST['id_producto'])) {
            echo "Error: ID de producto no válido.";
            return;
        }

        if (empty($_POST['cantidad']) || !is_numeric($_POST['cantidad']) || $_POST['cantidad'] <= 0) {
            echo "Error: Cantidad no válida.";
            return;
        }

        if (empty($_POST['metodo_pago'])) {
            echo "Error: Método de pago no proporcionado.";
            return;
        }

        $id_usuario = $_SESSION['id_usuario'] ?? null;
        if (!$id_usuario) {
            echo "Error: Usuario no autenticado.";
            return;
        }

        $id_producto = (int)$_POST['id_producto'];
        $cantidad = (int)$_POST['cantidad'];
        $metodo_pago = htmlspecialchars($_POST['metodo_pago']);

        // Procesar compra
        try {
            $resultado = $this->ventaModel->registrarVenta($id_usuario, $id_producto, $cantidad, $metodo_pago);

            if ($resultado) {
                header("Location: confirmacion_compra.php");  // Redirigir a una página de confirmación
                exit();
            } else {
                echo "Error al realizar la compra.";
            }
        } catch (Exception $e) {
            echo "Error al procesar la compra: " . $e->getMessage();
        }
    }
}