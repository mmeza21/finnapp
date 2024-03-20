<?php
include("../config/conexion.php");
$idUser = $_GET['idUser'];
$eliminar = "delete from tbl_users where id_user = $idUser";
$resultadoEliminar = mysqli_query($conn,$eliminar);
if($resultadoEliminar){
    header('location:/finnapp/page/users?m=1');
}

?>