<?php
class UserModel {
    private $conn;
    private $table_name = "usuarios";
    private $id;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function register($nombre, $apellidos, $email, $telefono, $contrasena) {
        $query = "INSERT INTO " . $this->table_name . " (nombre, apellidos, email, telefono, contrasena) VALUES (:nombre, :apellidos, :email, :telefono, :contrasena)";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':contrasena', password_hash($contrasena, PASSWORD_DEFAULT));

        if ($stmt->execute()) {
            $this->id = $this->conn->lastInsertId();
            return true;
        }
        return false;
    }

    public function login($email, $contrasena) {
        $query = "SELECT id, contrasena FROM " . $this->table_name . " WHERE email = :email";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($contrasena, $row['contrasena'])) {
                $this->id = $row['id'];
                return true;
            }
        }
        return false;
    }

    public function getId() {
        return $this->id;
    }
}
?>