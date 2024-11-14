<?php
include_once 'popo/Usuarios.php'; // Ruta relativa desde mdlUsuarios.php
include_once 'Conexion.php'; // Ruta relativa correcta desde `mdlUsuarios.php`

class mdlUsuarios {

    // Consultar todos los usuarios
    public function consultarUsuarios() {
        $sql = 'SELECT * FROM usuarios';
        $cnx = new Conexion();
        $conexion = $cnx->crearConexion();
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, 'Usuarios');
        $cnx->cerrarConexion();
        return $rs;
    }

    // Consultar usuario por matrícula y contraseña
    public function consultarUsuario($matricula, $contrasenia) {
        $sql = 'SELECT * FROM usuarios WHERE matricula = :matricula AND contraseña = :contrasenia';
        $cnx = new Conexion();
        $conexion = $cnx->crearConexion();
        $stmt = $conexion->prepare($sql);
        $stmt->bindValue(':matricula', $matricula, PDO::PARAM_STR);
        $stmt->bindValue(':contrasenia', $contrasenia, PDO::PARAM_STR);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, 'Usuarios');
        $cnx->cerrarConexion();
        return $rs;
    }

    // Registrar un nuevo usuario en la base de datos
    public function registrarUsuario($nombre, $correo, $contrasenia, $matricula, $carrera, $semestre, $grupo, $tipo_usuario) {
        $sql = 'INSERT INTO usuarios (nombre, correo, contraseña, matricula, carrera, semestre, grupo, tipo_usuario) 
                VALUES (:nombre, :correo, :contrasenia, :matricula, :carrera, :semestre, :grupo, :tipo_usuario)';
        $cnx = new Conexion();
        $conexion = $cnx->crearConexion();
        $stmt = $conexion->prepare($sql);

        $stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindValue(':correo', $correo, PDO::PARAM_STR);
        $stmt->bindValue(':contrasenia', $contrasenia, PDO::PARAM_STR);
        $stmt->bindValue(':matricula', $matricula, PDO::PARAM_STR);
        $stmt->bindValue(':carrera', $carrera, PDO::PARAM_STR);
        $stmt->bindValue(':semestre', $semestre, PDO::PARAM_INT);
        $stmt->bindValue(':grupo', $grupo, PDO::PARAM_STR);
        $stmt->bindValue(':tipo_usuario', $tipo_usuario, PDO::PARAM_STR);

        $stmt->execute();
        $cnx->cerrarConexion();
    }
}
?>
