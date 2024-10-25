<?php
include_once 'popo/Usuarios.php'; // Ruta relativa desde mdlUsuarios.php
include_once 'Conexion.php'; // Ajusta la ruta según la ubicación de Conexion.php

class mdlUsuarios {

    // Consultar todos los usuarios
    public function consultarUsuarios() {
        $sql = 'SELECT * FROM usuarios';
        $cnx = new Conexion();
        $conexion = $cnx->crearConexion();
        // Preparamos la instrucción
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        // Carga TODOS los registros como un arreglo de objetos de tipo Usuarios
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, 'Usuarios');
        $cnx->cerrarConexion();
        return $rs;
    }

    // Consultar usuario por matrícula y contraseña (NIP)
    public function consultarUsuario($matricula, $contrasenia) {
        $sql = 'SELECT * FROM usuarios WHERE matricula = :matricula AND contraseña = :contrasenia';
        $cnx = new Conexion();
        $conexion = $cnx->crearConexion();
        $stmt = $conexion->prepare($sql);
        $stmt->bindValue(':matricula', $matricula, PDO::PARAM_STR);
        $stmt->bindValue(':contrasenia', $contrasenia, PDO::PARAM_STR);
        $stmt->execute();
        // Carga el resultado como un arreglo de objetos de tipo Usuarios
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, 'Usuarios');
        $cnx->cerrarConexion();
        return $rs;
    }

    // Registrar un nuevo usuario
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

    // Consultar si ya existe un usuario por matrícula o correo
    public function consultarUsuarioPorMatriculaOCorreo($matricula, $correo) {
        $sql = 'SELECT * FROM usuarios WHERE matricula = :matricula OR correo = :correo';
        $cnx = new Conexion();
        $conexion = $cnx->crearConexion();
        $stmt = $conexion->prepare($sql);
        $stmt->bindValue(':matricula', $matricula, PDO::PARAM_STR);
        $stmt->bindValue(':correo', $correo, PDO::PARAM_STR);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, 'Usuarios');
        $cnx->cerrarConexion();
        return $rs;
    }
}
