<?php
/*Conexión*/
require_once "config/conexion.php";
if (isset($_POST['login'])) {
  $txtUser = mysqli_real_escape_string($conn, $_POST['txtUser']);
  $txtPassword = mysqli_real_escape_string($conn, $_POST['txtPassword']);
  /* Consulta de acceso */
  $result = mysqli_query($conn, "select u.id_user, u.name_user, u.pass_user,u.firts_name, u.last_name, u.email_user, u.state_user, u.id_rol, r.name_rol 
  from tbl_users u
  inner join tbl_rols r
  on
  u.id_rol = r.id_rol
  where u.name_user='". $txtUser ."' and u.pass_user='". $txtPassword ."' and u.state_user=1");
  if ($row = mysqli_fetch_array($result)) {
    $_SESSION['id_user'] = $row['id_user'];
    $_SESSION['name_user'] = $row['name_user'];
    $_SESSION['pass_user'] = $row['pass_user'];
    $_SESSION['firts_name'] = $row['firts_name'];
    $_SESSION['last_name'] = $row['last_name'];
    $_SESSION['state_user'] = $row['state_user'];
    $_SESSION['id_rol'] = $row['id_rol'];
    $_SESSION['name_rol'] = $row['name_rol'];?>
    <!-- Si todo Ok procesa, vista Mobile -->
    <script>
    if (window.innerWidth <= 768) {
                    Swal.fire({
                        title: "<div class='contentSwal'><img src='assets/icons/go.png'><h1 class='tittleSwal'><?php echo $row['firts_name'];?></h1><p class='paragraphSwal'>Estamos listos</p></div>",
                        confirmButtonText: 'Adelante <i class="fas fa-sign-in-alt"></i>',
                        grow: "fullscreen",
                        padding:"160px 16px",
                        customClass: {
                        confirmButton: 'swalBtnSize'
                    },
                        timerProgressBar: true,
                    }).then(function () {
                        window.location.href = "index";
                    });
                }else{
                    /* Acceso a desktop */
                    window.location.href = "index";
                }
    </script>
    <?php
    exit();
    /* Error de acceso */
  } else {
    echo '<script>
        Swal.fire({
            icon:"error",
            title: "Ooops...",
            text: "Error de usuario y/o clave...",
            type: "success",
            showConfirmButton: false,
            timer: 2000,
  timerProgressBar: true,
}).then(function(){
  window.location.href = "login";
});
        </script>';
  }
}
?>