<?php
include("../config/conexion.php");

if(isset($_POST['user_id']) && isset($_POST['new_name'])) {
    $userId = $_POST['user_id'];
    $newName = $_POST['new_name'];

    $sql = "UPDATE tbl_users SET name_user = '$newName' WHERE id_user = $userId";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "Éxito: Usuario actualizado correctamente";
    } else {
        echo "Error al actualizar el usuario: " . mysqli_error($conn);
    }
} else {
    echo "Error: Parámetros no recibidos";
}

mysqli_close($conn);
?>
