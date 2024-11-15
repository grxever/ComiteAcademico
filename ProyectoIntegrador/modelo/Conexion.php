<?php
class Conexion {
    private $host = "127.0.0.1";
    private $dbname = "comite_academico";
    private $username = "root"; // Cambia según tu configuración de usuario
    private $password = ""; // Cambia según tu configuración de contraseña
    private $charset = "utf8mb4";
    private $pdo;

    public function crearConexion() {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $this->pdo;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function cerrarConexion() {
        $this->pdo = null;
    }
}
?>

