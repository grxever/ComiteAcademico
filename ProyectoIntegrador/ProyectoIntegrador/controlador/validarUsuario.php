<?php
session_start();
include_once './ctrlUsuarios.php';
include_once '../modelo/Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identificador = $_POST['matricula'];
    $nip = $_POST['nip'];

    if (empty($identificador) || empty($nip)) {
        $_SESSION['error'] = 'Por favor, ingresa todos los datos.';
        header('Location: ../index.php');
        exit();
    }

    $esCorreo = strpos($identificador, '@') !== false;

    $ctrlUsuario = new ctrlUsuarios();
    if ($esCorreo) {
        // Autenticación como jefe de carrera o secretario
        if ($nip !== 'password123') {
            $_SESSION['error'] = 'NIP incorrecto para jefe de carrera o secretario.';
            header('Location: ../index.php');
            exit();
        }
        $usuario = $ctrlUsuario->validarUsuarioCorreo($identificador, $nip);
    } else {
        // Autenticación como estudiante
        if (strlen($identificador) !== 8 || $nip !== substr($identificador, -4)) {
            $_SESSION['error'] = 'Matrícula o NIP incorrecto para estudiante.';
            header('Location: ../index.php');
            exit();
        }
        $usuario = $ctrlUsuario->validarUsuarioMatricula($identificador, $nip);
    }

    if ($usuario == null) {
        $_SESSION['error'] = 'Usuario no encontrado o credenciales incorrectas.';
        header('Location: ../index.php');
        exit();
    } else {
        // Establece $_SESSION['usuario'] como un array con los datos completos del usuario
        $_SESSION['usuario'] = [
            'nombre' => $usuario->nombre,
            'matricula' => $usuario->matricula ?? '',  // Si existe la matrícula
            'carrera' => $usuario->carrera ?? '',      // Si existe la carrera
            'semestre' => $usuario->semestre ?? '',    // Si existe el semestre
            'grupo' => $usuario->grupo ?? '',          // Si existe el grupo
            'tipo_usuario' => $usuario->tipo_usuario
        ];

        // Redirige según el tipo de usuario
        switch ($usuario->tipo_usuario) {
            case 'alumno':
                header('Location: ../vistas/inicioAlumno.php');
                break;
            case 'jefe_carrera':
                header('Location: ../vistas/inicioJefe.php');
                break;
            case 'secretario':
                header('Location: ../vistas/inicioSecretario.php');
                break;
            case 'administrador':
                header('Location: ../vistas/inicioAdministrador.php');
                break;
            default:
                header('Location: ../index.php');
                break;
        }
    }
}
