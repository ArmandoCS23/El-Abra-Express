<?php
class VentaModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function registrarVenta($id_usuario, $id_producto, $cantidad, $metodo_pago) {
        try {
            $this->conn->beginTransaction();

            // Registrar la venta en la tabla de ventas
            $stmt = $this->conn->prepare("INSERT INTO ventas (id_usuario, id_producto, cantidad, metodo_pago, fecha_venta) VALUES (?, ?, ?, ?, NOW())");
            $stmt->execute([$id_usuario, $id_producto, $cantidad, $metodo_pago]);

            // Actualizar el stock del producto
            $stmt = $this->conn->prepare("UPDATE productos SET stock = stock - ? WHERE id = ?");
            $stmt->execute([$cantidad, $id_producto]);

            // Confirmar la transacción
            $this->conn->commit();
            return true;
        } catch (Exception $e) {
            // Revertir la transacción en caso de error
            $this->conn->rollBack();
            echo "Error al registrar la venta: " . $e->getMessage();
            return false;
        }
    }
}
?>