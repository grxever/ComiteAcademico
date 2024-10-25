<?php
class Conexion {
    private $host = "127.0.0.1"; // Cambiar si es necesario
    private $dbname = "comite_academico"; // Nombre de la base de datos
    private $username = "administrador1"; // Usuario de la base de datos (cambiar si es necesario)
    private $password = "administrador"; // Contraseña de la base de datos (cambiar si es necesario)
    private $charset = "utf8mb4"; // Codificación de caracteres
    private $pdo;

    public function crearConexion() {
        try {
            // Crear la conexión usando PDO
            $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            // Configurar atributos de PDO
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $this->pdo;
        } catch (PDOException $e) {
            // Manejar error de conexión
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function cerrarConexion() {
        // Cerrar la conexión estableciendo PDO como null
        $this->pdo = null;
    }
}
?>
