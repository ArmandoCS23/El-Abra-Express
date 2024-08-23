<?php
class ProductModel {
    private $db;

    public function __construct() {
        $this->db = new mysqli('localhost', 'root', '', 'el_abra_express');
        if ($this->db->connect_error) {
            die('Error de conexión: ' . $this->db->connect_error);
        }
    }

    public function getProducts() {
        $query = "SELECT * FROM productos";
        $result = $this->db->query($query);
        $products = [];

        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }

        return $products;
    }

    public function getProductById($id) {
        $query = "SELECT * FROM productos WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>