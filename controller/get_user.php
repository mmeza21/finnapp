<?php
include("../config/conexion.php");

// Array para almacenar los datos de usuario
$users = array();

// Consulta SQL para obtener los usuarios
$sql = "SELECT u.id_user, u.name_user, u.pass_user, u.firts_name, u.last_name, u.email_user, u.state_user, u.id_rol, r.name_rol 
        FROM tbl_users u
        INNER JOIN tbl_rols r
        ON
        u.id_rol = r.id_rol";
$ejecutar = mysqli_query($conn, $sql);

// Iterar sobre los resultados y guardarlos en el array
while ($row = mysqli_fetch_array($ejecutar)) {
    $user = array(
        $row['id_user'],
        $row['name_user'],
        $row['pass_user'],
        $row['firts_name'],
        $row['last_name'],
        $row['email_user'],
        $row['state_user'],
        $row['id_rol'],
        $row['name_rol']
    );
    array_push($users, $user);
}

// Cerrar la conexión
mysqli_close($conn);

// Imprimir los datos en formato JSON
echo json_encode(array('data' => $users));
?>
