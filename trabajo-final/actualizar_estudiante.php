<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $universidad_id = $_POST['universidad'];
    $carrera_id = $_POST['carrera'];

    // Procesar la imagen del estudiante si se ha subido una nueva
    if ($_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $nombre_archivo = $_FILES['foto']['name'];
        $ruta_temporal = $_FILES['foto']['tmp_name'];
        $ruta_destino = 'uploads/' . $nombre_archivo;

        if (move_uploaded_file($ruta_temporal, $ruta_destino)) {
            // Actualizar datos del estudiante con la nueva imagen
            $query = "UPDATE estudiantes SET nombre='$nombre', dni='$dni', universidad_id='$universidad_id', carrera_id='$carrera_id', foto='$ruta_destino' WHERE id='$id'";
        } else {
            echo "Error al subir la imagen.";
            exit;
        }
    } else {
        // Actualizar datos del estudiante sin la imagen
        $query = "UPDATE estudiantes SET nombre='$nombre', dni='$dni', universidad_id='$universidad_id', carrera_id='$carrera_id' WHERE id='$id'";
    }

    if ($conn->query($query) === TRUE) {
        echo "Estudiante actualizado correctamente.";
    } else {
        echo "Error al actualizar el estudiante: " . $conn->error;
    }
} else {
    echo "Acceso no autorizado.";
}
?>
