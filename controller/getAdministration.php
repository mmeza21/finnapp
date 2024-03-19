<?php
include ('../config/conexion.php');
/*Registrar Rols*/
if (isset($_POST['saveRols'])) {
  $txtNameRol = $_POST['txtNameRol'];
  $check = mysqli_query(
    $conn,
    "select * from tbl_rols where name_rol='$txtNameRol'"
  );
  /*Validar para que no se repitan los DNI*/
  $checkfila = mysqli_num_rows($check);
  if ($checkfila > 0) {
    echo "<script>alert('El rol se encuentra registrado');window.history.back();</script>";
  } else {
    $query = "INSERT INTO tbl_rols(name_rol, statte_rol) VALUES ('$txtNameRol',1)";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      die('Error de consulta.');
    }
    header('Location: /finnapp/page/rols');
  }
  /*Editar Rols*/
}   else if (isset($_POST['editRols'])) {
        $txtNameRol = $_POST['txtNameRol'];
        $sltStateRol = $_POST['sltStateRol'];
        echo $sltStateRol;
        echo '<br>';
        echo $txtNameRol;
        echo '<br>';
        $query = "UPDATE tbl_rols set statte_rol = $sltStateRol WHERE name_rol='$txtNameRol'";
   
          $result = mysqli_query($conn, $query);
          if (!$result) {
            die('Error de consulta.');
          }
          header('Location: /finnapp/page/rols');
        }  
