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
                <h5>Resultados</h5>
            </div>
            <div class="card-block">
                <table class="table" id="mainDataTable" id="mainDataTable" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
<th>#</th>
<th>Costo personal</th>
<th>Honorarios médicos</th>
<th>Costo médicamentos</th>
<th>Costo de materiales</th>
<th>Mantenimiento</th>
<th>Costo de investigación</th>
<th>Costo de laboratorio</th>
<th>Costo de imagen</th>
<th>Costo intercentros OHSJD</th>
<th>Otros costos</th>
<th>Gastos personal administrativo</th>
<th>Honorarios profesionales</th>
<th>Gastos bancarios</th>
<th>Gastos varios administración y ventas</th>
<th>Egresos aportes Curia y aporte comunidad</th>
<th>Juicio / Gastos legales</th>
<th>Provisión de deterioro de cartera</th>
<th>Provisión de deterioro de inventarios</th>
<th>Provisión otros y bajo de activos</th>
<th>EBDITDA</th>
<th>EBDITDA sin provisiones</th>
<th>Margen EBDITDA</th>
<th>Depreciaciones</th>
<th>Amortizaciones</th>
<th>Exedente Operacional</th>
<th>Efectivo y banco</th>
<th>Inversiones temporales</th>
<th>Cuentas por cobrar</th>
<th>Activo no corriente</th>
<th>Inversiones no corrientes</th>
<th>Propiedad planta y equipo</th>
<th>Otros activos</th>
<th>Cuentas por pagar deudas comerciales</th>
<th>Deudas bancarias, obligaciones financieras</th>
<th>Deudas sociales rem y cargas sociales</th>
<th>Cuentas por pagar OHSJD</th>
<th>Otros pasivos corrientes</th>
<th>Deudas bancarias, prestamo LP</th>
<th>Deudas fiscales y sociales</th>
<th>Previsiones</th>
<th>Otros pasivos</th>
<th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        
                            $sql = "
                            SELECT * FROM tbl_results
                            ";
                            $ejecutar = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($ejecutar)) { 
                                ?>
                        <tr>
                            <td><?php echo $row["id_result"]; ?></td>
                            <td><?php echo $row["co_person_cost"]; ?></td>
                            <td><?php echo $row["co_medical_fees"]; ?></td>
                            <td><?php echo $row["co_medication_cost"]; ?></td>

                            <td><?php echo $row["co_material_cost"]; ?></td>
                            <td><?php echo $row["co_maintenance"]; ?></td>
                            <td><?php echo $row["co_investigation_cost"]; ?></td>
                            <td><?php echo $row["co_lab_cost"]; ?></td>

                            <td><?php echo $row["co_image_cost"]; ?></td>
                            <td><?php echo $row["co_intercenter_ohsjd_cost"]; ?></td>
                            <td><?php echo $row["co_other_cost"]; ?></td>
                            <td><?php echo $row["ga_person_admin_expenses"]; ?></td>

                            <td><?php echo $row["ga_professional_fees"]; ?></td>
                            <td><?php echo $row["ga_bank_expenses"]; ?></td>
                            <td><?php echo $row["ga_various_admin_sales_expenses"]; ?></td>
                            <td><?php echo $row["ga_contributions_curia_community_expenses"]; ?></td>

                            <td><?php echo $row["ga_trial_legal_expenses"]; ?></td>
                            <td><?php echo $row["ga_portfolio_impairment_provision"]; ?></td>
                            <td><?php echo $row["ga_inventory_impairrment_provision"]; ?></td>
                            <td><?php echo $row["ga_other_low_asset_provision"]; ?></td>


                            <td><?php echo $row["other_no_operating_income"]; ?></td>
                            <td><?php echo $row["other_no_operating_expenses"]; ?></td>
                            <td><?php echo $row["interest_earned_net_exchange_difference"]; ?></td>
                            <td><?php echo $row["interest_paid_third_parties_bank"]; ?></td>
                            
                            <td><?php echo $row["interest_paid_ohsjd"]; ?></td>
                            <td><?php echo $row["sf_cash_bank"]; ?></td>
                            <td><?php echo $row["sf_accounts_receivable"]; ?></td>
                            <td><?php echo $row["sf_inventory"]; ?></td>
                            <td><?php echo $row["sf_other_current_asset"]; ?></td>
                            <td><?php echo $row["sf_non_current_investment"]; ?></td>
                            
                            <td><?php echo $row["sf_property_plant_equipment"]; ?></td>
                            <td><?php echo $row["sf_other_asset"]; ?></td>

                            
                            <td><?php echo $row["sf_account_payable_business_debt"]; ?></td>
                            <td><?php echo $row["sf_bank_debt_financial_obligation"]; ?></td>
                            <td><?php echo $row["sf_social_debt_rem_social_burdens"]; ?></td>
                            <td><?php echo $row["sf_account_payable_ohcsjd"]; ?></td>

                            <td><?php echo $row["sf_other_current_liabilities"]; ?></td>
                            <td><?php echo $row["sf_bank_debt_lp_loans"]; ?></td>
                            <td><?php echo $row["sf_tax_social_debt"]; ?></td>
                            <td><?php echo $row["sf_forecasts"]; ?></td>

                            <td><?php echo $row["sf_other_passive"]; ?></td>
                            <td><?php echo $row["creation_date"]; ?></td>
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
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
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