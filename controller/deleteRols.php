<?php
include("../config/conexion.php");
$idRol = $_GET['idRol'];
$eliminar = "delete from tbl_rols where id_rol = $idRol";
$resultadoEliminar = mysqli_query($conn,$eliminar);
if($resultadoEliminar){
    header('location:/finnapp/page/rols?m=1');
}

?>