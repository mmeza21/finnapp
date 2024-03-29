<?php include('../vistas/header.php');?>
<?php include('../config/conexion.php') ?>
<!--
 * CUERPO
 * -------------------------------------------------------------------
-->
<div class="row text-dark">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Roles</h5>
            </div>
            <div class="card-block">
                <div class="pb-2">
                    <button class="accentButton" data-toggle="modal" data-target="#registerRols">Registrar <i
                            class="fas fa-plus"></i></button>
                </div>
                <table class="table" id="mainDataTable" id="mainDataTable" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Descripción</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        
                            $sql = "
                            SELECT id_rol, name_rol,statte_rol, 
                            CASE
                                WHEN statte_rol = 1 THEN 'Activo'
                                WHEN statte_rol = 0 THEN 'Inactivo'
                            END as statte_description, desc_rol
                            FROM tbl_rols
                            ";
                            $ejecutar = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($ejecutar)) { 
                                $idRol=$row["id_rol"];
                                $nameRol=$row["name_rol"];
                                $statteRol=$row["statte_rol"];
                                $statteDescription=$row["statte_description"];
                                $descRol=$row["desc_rol"];
                                ?>
                        <tr>
                            <td><?php echo $idRol; ?></td>
                            <td><?php echo $nameRol; ?></td>
                            <td><?php echo $statteDescription; ?></td>
                            <td><?php echo $descRol; ?></td>
                            <td>
                                <!-- <button type="button" class="deleteAction" data-toggle="modal" data-target="#deleteRols<?php echo $idRol; ?>">
                                    <i class="fas fa-trash"></i>
                              </button> -->
                                <a href="/finnapp/controller/deleteRols?idRol=<?php echo $idRol; ?>"
                                    class="deleteAction"><i class="fas fa-trash-alt"></i></a>
                                <button type="button" class="editAction" data-toggle="modal"
                                    data-target="#editRols<?php echo $idRol; ?>">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="editRols<?php echo $idRol; ?>" tabindex="-1" role="dialog"
                            aria-labelledby="modalEditRols" aria-hidden="true">
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
                                                    <label for="txtNameRol" class="lblText">Rol:</label>
                                                    <input type="text" name="txtNameRol" id="txtNameRol" class="boxText"
                                                        value="<?php echo $nameRol; ?>" readonly>
                                                </div>
                                                <div class="col">
                                                    <label for="sltStateRol" class="lblText">Estado</label>
                                                    <select name="sltStateRol" id="sltStateRol" class="sltOption">
                                                        <option value="<?php echo $statteRol; ?>">
                                                            <?php echo $statteRol == '1' ? 'Activo' : 'Inactivo' ?>
                                                        </option>
                                                        <option value="<?php echo  $statteRol == '1' ? '0' : '1' ?>">
                                                            <?php echo $statteRol == '1' ? 'Inactivo' : 'Activo' ?>
                                                        </option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="txtDescRol" class="lblText">Descripción</label>
                                                    <textarea name="txtDescRol" id="txtDescRol" cols="30" rows="10"
                                                        class="boxTextArea"
                                                        autocomplete="off"><?php echo $descRol; ?>"</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="secondaryButton"
                                                data-dismiss="modal">Cerrar</button>
                                            <button type="submit" name="editRols" class="accentButton">Guardar</button>
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
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="registerRols" tabindex="-1" aria-labelledby="modalRegisterRols" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Formulario de registro de roles</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="../controller/getAdministration.php">
                    <div class="row">
                        <div class="col">
                            <label for="txtNameRol" class="lblText">Nombre*</label>
                            <input type="text" name="txtNameRol" class="boxText" autocomplete="off" required="true"
                                placeholder="Nombre de rol">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="secondaryButton" data-dismiss="modal">Cerrar</button>
                        <button type="submit" name="saveRols" class="accentButton">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include ('../vistas/footer.php');?>