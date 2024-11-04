<?php
header("Content-Type: application/json");

// Datos de solicitudes simulados
$solicitudes = [
    ["nombre_solicitud" => "Solicitud de Cambio de Grupo"],
    ["nombre_solicitud" => "Revisión de Calificaciones"],
    ["nombre_solicitud" => "Solicitud de Reinscripción Extemporánea"],
    ["nombre_solicitud" => "Consulta de Kardex"],
    ["nombre_solicitud" => "Solicitud de Becas"]
];

echo json_encode($solicitudes);
?>
