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
} else if (isset($_POST['editRols'])) {
$txtNameRol = $_POST['txtNameRol'];
$sltStateRol = $_POST['sltStateRol'];
$txtDescRol = $_POST['txtDescRol'];
$query = "UPDATE tbl_rols set statte_rol = $sltStateRol, desc_rol='$txtDescRol' WHERE name_rol='$txtNameRol'";

$result = mysqli_query($conn, $query);
if (!$result) {
die('Error de consulta.');
}
header('Location: /finnapp/page/rols');
}  
/*Registrar Usuario*/
else if (isset($_POST['saveUsers'])) {
  $txtNameUser = $_POST['txtNameUser'];
  $txtPassUser = $_POST['txtPassUser'];
  $txtFirtsName = $_POST['txtFirtsName'];
  $txtLastName = $_POST['txtLastName'];
  $txtEmailUser = $_POST['txtEmailUser'];
  $sltNameRol = $_POST['sltNameRol'];
  $check = mysqli_query(
  $conn,
  "select * from tbl_users where name_user='$txtNameUser' or email_user='$txtEmailUser'"
  );
  /*Validar para que no se repitan los DNI*/
  $checkfila = mysqli_num_rows($check);
  if ($checkfila > 0) {
  echo "<script>alert('El usuario se encuentra registrado');window.history.back();</script>";
  } else {
  $query = "INSERT INTO tbl_users(name_user, pass_user, firts_name, last_name, email_user, statte_user, id_rol) VALUES ('$txtNameUser','$txtPassUser','$txtFirtsName','$txtLastName','$txtEmailUser',1,$sltNameRol)";
  $result = mysqli_query($conn, $query);
  if (!$result) {
  die('Error de consulta.');
  }
  header('Location: /finnapp/page/users');
  }/*Editar Usuario*/
} else if (isset($_POST['editUsers'])) {
  $txtNameUser = $_POST['txtNameUser'];
  $txtPassUser = $_POST['txtPassUser'];
  $txtFirtsName = $_POST['txtFirtsName'];
  $txtLastName = $_POST['txtLastName'];
  $txtEmailUser = $_POST['txtEmailUser'];
  $sltNameRol = $_POST['sltNameRol'];
  $sltStateUser = $_POST['sltStateUser'];
  echo $txtNameUser;
  $query = "UPDATE tbl_users set pass_user = '$txtPassUser', firts_name='$txtFirtsName', last_name='$txtLastName', statte_user=$sltStateUser, id_rol=$sltNameRol  WHERE name_user='$txtNameUser'";
  
  $result = mysqli_query($conn, $query);
  if (!$result) {
  die('Error de consulta.');
  }
  header('Location: /finnapp/page/users');
  }  

?>