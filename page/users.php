<?php include('../vistas/header.php');?>
<?php include ('../config/conexion.php'); ?>
<!--
 * CUERPO
 * -------------------------------------------------------------------
-->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Usuario</h5>
            </div>
            <div class="card-block">
                <div class="pb-4">
                    <button class="accentButton" data-toggle="modal" data-target="#registerUsers">Registrar <i
                            class="fas fa-user-plus"></i></button>
                </div>
                <table class="table table-hover" id="mainDataTable" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Usuario</th>
                            <th>Pass</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Estado</th>
                            <th>Rol</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        
                            $sql = "
                            SELECT u.id_user, u.name_user, u.pass_user, u.firts_name, u.last_name, u.email_user, u.statte_user, r.id_rol, r.name_rol  from tbl_users u
                            INNER JOIN tbl_rols r
                            ON
                            u.id_rol = r.id_rol";
                            $ejecutar = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($ejecutar)) { 
                                $idUser=$row["id_user"];
                                $nameUser=$row["name_user"];
                                $passUser=$row["pass_user"];
                                $firtsName=$row["firts_name"];
                                $LastName=$row["last_name"];
                                $emailUser=$row["email_user"];
                                $statteUser=$row["statte_user"];
                                $idRol=$row["id_rol"];
                                $nameRol=$row["name_rol"];
                                ?>
                        <tr>
                            <td><?php echo $idUser; ?></td>
                            <td><?php echo $nameUser; ?></td>
                            <td><?php echo $passUser; ?></td>
                            <td><?php echo $firtsName; ?></td>
                            <td><?php echo $LastName; ?></td>
                            <td><?php echo $emailUser; ?></td>
                            <td><?php echo $statteUser; ?></td>
                            <td><?php echo $nameRol; ?></td>
                            <td>
                                <a href="/finnapp/controller/deleteUsers?idUser=<?php echo $idUser; ?>"
                                    class="deleteAction"><i class="fas fa-trash-alt"></i></a>

                                <button type="button" class="editAction" data-toggle="modal"
                                    data-target="#editUsers<?php echo $idUser; ?>">
                                    <i class="fas fa-user-edit"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Modal Editar -->
                        <div class="modal fade" id="editUsers<?php echo $idUser; ?>" tabindex="-1" role="dialog"
                            aria-labelledby="modalEditUsers" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">
                                            Actualizar Información
                                        </h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST" action="../controller/getAdministration.php">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="txtNameUser" class="lblText">Usuario:</label>
                                                    <input type="text" name="txtNameUser" class="boxText"
                                                        value="<?php echo $nameUser; ?>" readonly>
                                                </div>
                                                <div class="col">
                                                    <label for="txtPassUser" class="lblText">Clave:</label>
                                                    <div class="contentEyePassword">
                                                        <input type="password" name="txtPassUser" id="txtPassUsers" class="boxText"
                                                            value="<?php echo $passUser; ?>" autocomplete="off">
                                                        <span id="eyePassword" class="eyePassword"
                                                            onclick="toggleClaveEdit()"><i class="fas fa-eye"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="txtFirtsName" class="lblText">Nombres:</label>
                                                    <input type="text" name="txtFirtsName" class="boxText"
                                                        value="<?php echo $firtsName; ?>" required="true"
                                                        autocomplete="off">
                                                </div>
                                                <div class="col">
                                                    <label for="txtLastName" class="lblText">Apellidos:</label>
                                                    <input type="text" name="txtLastName" class="boxText"
                                                        value="<?php echo $LastName; ?>" required="true"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="txtEmailUser" class="lblText">Email:</label>
                                                    <input type="email" name="txtEmailUser" class="boxText"
                                                        value="<?php echo $emailUser; ?>" required="true"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="sltNameRol" class="lblText">Perfil</label>
                                                    <select name="sltNameRol" class="sltOption" required>
                                                        <option value="<?php echo $idRol; ?>" selected>
                                                            <?php echo $nameRol; ?></option>
                                                        <?php
                                                $query = $conn->query(
                                                    "SELECT * FROM tbl_rols where name_rol <> '$nameRol'");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="' .
                                                        $valores['id_rol'] .
                                                        '">' .
                                                        $valores['name_rol'] .
                                                        '</option>';
                                                }
                                                ?>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="sltStateUser" class="lblText">Estado</label>
                                                    <select name="sltStateUser" id="sltStateUser" class="sltOption">
                                                        <option value="<?php echo $row['statte_user']; ?>">
                                                            <?php echo $row['statte_user'] == '1' ? 'Activo' : 'Inactivo' ?>
                                                        </option>
                                                        <option
                                                            value="<?php echo  $row['statte_user'] == '1' ? '0' : '1' ?>">
                                                            <?php echo $row['statte_user'] == '1' ? 'Inactivo' : 'ACTIVO' ?>
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="secondaryButton"
                                                data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="accentButton" name="editUsers">Guardar</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- -->
                        <!-- Modal Registrar -->
                        <div class="modal fade" id="registerUsers" tabindex="-1" aria-labelledby="modalRegisterUsers"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="registerUsers">Formulario de registro Usuario</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST" action="../controller/getAdministration.php">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col col-lg-6 col-12">
                                                    <label for="txtNameUser" class="lblText">Usuario*</label>
                                                    <input type="text" name="txtNameUser" id="txtNameUser"
                                                        class="boxText" required="true" placeholder="Nombre de usuario"
                                                        autocomplete="off">
                                                </div>
                                                <div class="col col-lg-6 col-12">
                                                    <label for="txtPassUser" class="lblText">Clave*</label>
                                                    <div class="contentEyePassword">
                                                        <input type="password" name="txtPassUser" id="txtPassUser"
                                                            class="boxText" required="true"
                                                            placeholder="Clave de usuario" autocomplete="off">
                                                        <span id="eyePassword" class="eyePassword"
                                                            onclick="toggleClaveRegister()"><i
                                                                class="fas fa-eye textPrimaryColor"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col col-lg-6 col-12">
                                                    <label for="txtFirtsName" class="lblText">Nombres*</label>
                                                    <input type="text" name="txtFirtsName" id="txtFirtsName"
                                                        class="boxText" required="true" placeholder="Nombres completos"
                                                        autocomplete="off">
                                                </div>
                                                <div class="col col-lg-6 col-12">
                                                    <label for="txtLastName" class="lblText">Apellidos:</label>
                                                    <input type="text" name="txtLastName" id="txtLastName"
                                                        class="boxText" required="true"
                                                        placeholder="Apellidos completos" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col col-lg-6 col-12">
                                                    <label for="txtEmailUser" class="lblText">Email:</label>
                                                    <input type="email" name="txtEmailUser" id="txtEmailUser"
                                                        class="boxText" required="true" placeholder="Email de usuario"
                                                        autocomplete="off">
                                                </div>
                                                <div class="col col-lg-6 col-12">
                                                    <label for="sltNameRol" class="lblText">Rol</label>
                                                    <select id="sltNameRol" name="sltNameRol" class="sltOption"
                                                        required>
                                                        <option value="" selected disabled hidden>Seleccione rol...
                                                        </option>
                                                        <?php
                                                $query = $conn->query(
                                                    "SELECT * FROM tbl_rols where statte_rol<>0");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="' .
                                                        $valores['id_rol'] .
                                                        '">' .
                                                        $valores['name_rol'] .
                                                        '</option>';
                                                }
                                                ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="secondaryButton"
                                                    data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="accentButton"
                                                    name="saveUsers">Guardar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- -->
                        <?php
                            }
                            mysqli_close($conn);?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>
</div>
<?php include ('../vistas/footer.php');?>