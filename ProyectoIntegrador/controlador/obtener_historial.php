<?php
header("Content-Type: application/json");

// Datos de historial simulados
$historial = [
    ["nombre_historial" => "Cambio de Materia en Semestre Pasado"],
    ["nombre_historial" => "Actualización de Documentos"],
    ["nombre_historial" => "Solicitud de Prácticas Profesionales"],
    ["nombre_historial" => "Aplicación a Becas Anteriores"],
    ["nombre_historial" => "Consulta de Kardex Histórico"]
];

echo json_encode($historial);
?>
