<?php

include_once("../modelo/Conexion.php");

class ctrlUsuarios {
    private $conexion;

    public function __construct() {
        $this->conexion = (new Conexion())->crearConexion();
    }

    public function validarUsuarioCorreo($correo, $nip) {
        $sql = "SELECT * FROM usuarios WHERE correo = :correo AND contraseña = :nip";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(":correo", $correo);
        $stmt->bindParam(":nip", $nip);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function validarUsuarioMatricula($matricula, $nip) {
        $sql = "SELECT * FROM usuarios WHERE matricula = :matricula AND contraseña = :nip";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(":matricula", $matricula);
        $stmt->bindParam(":nip", $nip);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Agregar un nuevo usuario
    public function agregarUsuario($nombre, $correo, $contrasenia, $matricula, $carrera, $semestre, $grupo, $tipo_usuario) {
        $mdlUsuario = new mdlUsuarios();
        $rs = $mdlUsuario->consultarUsuarioPorMatriculaOCorreo($matricula, $correo);
        
        if ($rs != null && count($rs) > 0) {
            $_SESSION['error'] = 'Ya existe un usuario con esa matrícula o correo.';
            header('Location: ../vista/error.php');
            exit();
        } else {
            $mdlUsuario->registrarUsuario($nombre, $correo, $contrasenia, $matricula, $carrera, $semestre, $grupo, $tipo_usuario);
            $_SESSION['mensaje'] = 'Usuario registrado exitosamente.';
            header('Location: ../vista/success.php');
            exit();
        }
    }
}
