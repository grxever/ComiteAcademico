<?php
// Incluir las clases necesarias para conexión y manipulación de usuarios
include_once '../modelo/Conexion.php'; // Ruta ajustada según tu estructura
include_once '../modelo/mdlUsuarios.php'; // Ruta ajustada según tu estructura

// Verificar que se hayan enviado los datos del formulario usando POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario de "Alumno"
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];
    $matricula = $_POST['matricula'];
    $carrera = $_POST['carrera'];
    $semestre = (int)$_POST['semestre'];
    $grupo = $_POST['grupo'];
    $tipo_usuario = 'alumno'; // Establecer el tipo de usuario como "alumno"

    // Crear una instancia de mdlUsuarios para interactuar con la base de datos
    $modeloUsuarios = new mdlUsuarios();

    // Llamar al método para registrar el nuevo usuario en la base de datos
    try {
        $modeloUsuarios->registrarUsuario(
            nombre: $nombre, 
            correo: $correo, 
            contrasenia: $contrasenia, 
            matricula: $matricula, 
            carrera: $carrera, 
            semestre: $semestre, 
            grupo: $grupo, 
            tipo_usuario: $tipo_usuario
        );
        echo "Registro exitoso de alumno.";
    } catch (Exception $e) {
        echo "Error al registrar el alumno: " . $e->getMessage();
    }
} else {
    // Si el acceso no es por POST, muestra un mensaje de error
    echo "Acceso no autorizado.";
}
?>


