<?php
include("../config/conexion.php");
$idResult = $_GET['idResult'];
$eliminar = "delete from tbl_results where id_result = $idResult";
$resultadoEliminar = mysqli_query($conn,$eliminar);
if($resultadoEliminar){
    header('location:/finnapp/page/results?m=1');
}

?>