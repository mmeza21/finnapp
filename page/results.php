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
			    <th>Acciones</th>			
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        
                            $sql = "
                            SELECT * FROM tbl_results
                            ";
                            $ejecutar = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($ejecutar)) { 
                                $idResult=$row["id_result"];
                                $coPersonCost=$row["co_person_cost"];
                                $coMedicalFees=$row["co_medical_fees"];
                                $coMedicationCost=$row["co_medication_cost"];
                                $coMaterialCost=$row["co_material_cost"];
                                $coMaintenance=$row["co_maintenance"];
                                $coInvestigationCost=$row["co_investigation_cost"];
                                $coLabCost=$row["co_lab_cost"];
                                $coImageCost=$row["co_image_cost"];
                                $coIntercenterOhsjdCost=$row["co_intercenter_ohsjd_cost"];
                                $coOtherCost=$row["co_other_cost"];
                                $gaPersonAdminExpenses=$row["ga_person_admin_expenses"];
                                $gaProfessionalFees=$row["ga_professional_fees"];
                                $gaBankExpenses=$row["ga_bank_expenses"];
                                $gaVariousAdminSalesExpenses=$row["ga_various_admin_sales_expenses"];
                                $gaContributionsCuriaCommunityExpenses=$row["ga_contributions_curia_community_expenses"];
                                $gaTrialLegalExpenses=$row["ga_trial_legal_expenses"];
                                $gaPortfolioImpairmentProvision=$row["ga_portfolio_impairment_provision"];
                                $gaInventoryImpairrmentProvision=$row["ga_inventory_impairrment_provision"];
                                $gaOtherLowAssetProvision=$row["ga_other_low_asset_provision"];
                                $otherNoOperatingIncome=$row["other_no_operating_income"];
                                $otherNoOperatingExpenses=$row["other_no_operating_expenses"];
                                $interestEarnedNetExchangeDifference=$row["interest_earned_net_exchange_difference"];
                                $interestPaidThirdPartiesBank=$row["interest_paid_third_parties_bank"];              
                                $interestPaidOhsjd=$row["interest_paid_ohsjd"];
                                $sfCashBank=$row["sf_cash_bank"];
                                $sfAccountsReceivable=$row["sf_accounts_receivable"];
                                $sfInventory=$row["sf_inventory"];
                                $sfOtherCurrentAsset=$row["sf_other_current_asset"];
                                $sfNonCurrentInvestment=$row["sf_non_current_investment"];
                                $sfPropertyPlantEquipment=$row["sf_property_plant_equipment"];
                                $sfOtherAsset=$row["sf_other_asset"];
                                $sfAccountPayableBusinessDebt=$row["sf_account_payable_business_debt"];
                                $sfBankDebtFinancialObligation=$row["sf_bank_debt_financial_obligation"];
                                $sfSocialDebtRemSocialBurdens=$row["sf_social_debt_rem_social_burdens"];
                                $sfAccountPayableOhcsjd=$row["sf_account_payable_ohcsjd"];
                                $sfOtherCurrentLiabilities=$row["sf_other_current_liabilities"];
                                $sfBankDebtLpLoans=$row["sf_bank_debt_lp_loans"];
                                $sfTaxSocialDebt=$row["sf_tax_social_debt"];
                                $sfForecasts=$row["sf_forecasts"];
                                $sfOtherPassive=$row["sf_other_passive"];
                                $creationDate=$row["creation_date"];
                                ?>
                        <tr>
                            <td><?php echo $idResult; ?></td> 
                            <td><?php echo $coPersonCost; ?></td> 
                            <td><?php echo $coMedicalFees; ?></td> 
                            <td><?php echo $coMedicationCost; ?></td> 
                            <td><?php echo $coMaterialCost; ?></td> 
                            <td><?php echo $coMaintenance; ?></td> 
                            <td><?php echo $coInvestigationCost; ?></td> 
                            <td><?php echo $coLabCost; ?></td> 
                            <td><?php echo $coImageCost; ?></td> 
                            <td><?php echo $coIntercenterOhsjdCost; ?></td> 
                            <td><?php echo $coOtherCost; ?></td> 
                            <td><?php echo $gaPersonAdminExpenses; ?></td> 
                            <td><?php echo $gaProfessionalFees; ?></td> 
                            <td><?php echo $gaBankExpenses; ?></td> 
                            <td><?php echo $gaVariousAdminSalesExpenses; ?></td> 
                            <td><?php echo $gaContributionsCuriaCommunityExpenses; ?></td> 
                            <td><?php echo $gaTrialLegalExpenses; ?></td> 
                            <td><?php echo $gaPortfolioImpairmentProvision; ?></td> 
                            <td><?php echo $gaInventoryImpairrmentProvision; ?></td> 
                            <td><?php echo $gaOtherLowAssetProvision; ?></td> 
                            <td><?php echo $otherNoOperatingIncome; ?></td> 
                            <td><?php echo $otherNoOperatingExpenses; ?></td> 
                            <td><?php echo $interestEarnedNetExchangeDifference; ?></td> 
                            <td><?php echo $interestPaidThirdPartiesBank; ?></td>               
                            <td><?php echo $interestPaidOhsjd; ?></td> 
                            <td><?php echo $sfCashBank; ?></td> 
                            <td><?php echo $sfAccountsReceivable; ?></td> 
                            <td><?php echo $sfInventory; ?></td> 
                            <td><?php echo $sfOtherCurrentAsset; ?></td> 
                            <td><?php echo $sfNonCurrentInvestment; ?></td>   
                            <td><?php echo $sfPropertyPlantEquipment; ?></td> 
                            <td><?php echo $sfOtherAsset; ?></td>   
                            <td><?php echo $sfAccountPayableBusinessDebt; ?></td> 
                            <td><?php echo $sfBankDebtFinancialObligation; ?></td> 
                            <td><?php echo $sfSocialDebtRemSocialBurdens; ?></td> 
                            <td><?php echo $sfAccountPayableOhcsjd; ?></td>
                            <td><?php echo $sfOtherCurrentLiabilities; ?></td>
                            <td><?php echo $sfBankDebtLpLoans; ?></td>
                            <td><?php echo $sfTaxSocialDebt; ?></td>
                            <td><?php echo $sfForecasts; ?></td>
                            <td><?php echo $sfOtherPassive; ?></td>
                            <td><?php echo $creationDate; ?></td>
                            <td>
                                <!-- <button type="button" class="deleteAction" data-toggle="modal" data-target="#deleteRols<?php echo $idResult; ?>">
                                    <i class="fas fa-trash"></i>
                              </button> -->
                                <a href="/finnapp/controller/deleteResults?idResult=<?php echo $idResult; ?>"
                                    class="deleteAction"><i class="fas fa-trash-alt"></i></a>
                                <button type="button" class="editAction" data-toggle="modal"
                                    data-target="#editResults<?php echo $idResult; ?>">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="editResults<?php echo $idResult; ?>" tabindex="-1" role="dialog"
                            aria-labelledby="modalEditResults" aria-hidden="true">
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
                                                <input type="hidden" name="txtIdResult" id="txtIdResult" class="boxText"
                                                        value="<?php echo $idResult; ?>">
                                                    <label for="txtCoPersonCost" class="lblText">C. Personal</label>
                                                    <input type="text" name="txtCoPersonCost" id="txtCoPersonCost" class="boxText"
                                                        value="<?php echo $coPersonCost; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtCoMedicalFees" class="lblText">H. Médicos</label>
                                                    <input type="text" name="txtCoMedicalFees" id="txtCoMedicalFees" class="boxText"
                                                        value="<?php echo $coMedicalFees; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtCoMedicationCost" class="lblText">C. Médicación</label>
                                                    <input type="text" name="txtCoMedicationCost" id="txtCoMedicationCost" class="boxText"
                                                        value="<?php echo $coMedicationCost;  ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtCoMaterialCost" class="lblText">C. Material</label>
                                                    <input type="text" name="txtCoMaterialCost" id="txtCoMaterialCost" class="boxText"
                                                        value="<?php echo $coMaterialCost;  ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtCoMaintenance" class="lblText">Mantenimiento</label>
                                                    <input type="text" name="txtCoMaintenance" id="txtCoMaintenance" class="boxText"
                                                        value="<?php echo $coMaintenance;   ?>">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <label for="txtCoInvestigationCost" class="lblText">C. Investigación</label>
                                                    <input type="text" name="txtCoInvestigationCost" id="txtCoInvestigationCost" class="boxText"
                                                        value="<?php echo $coInvestigationCost; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtCoLabCost" class="lblText">C. Laboratorio</label>
                                                    <input type="text" name="txtCoLabCost" id="txtCoLabCost" class="boxText"
                                                        value="<?php echo $coLabCost; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtCoImageCost" class="lblText">C. Imagen</label>
                                                    <input type="text" name="txtCoImageCost" id="txtCoImageCost" class="boxText"
                                                        value="<?php echo $coImageCost;  ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtCoIntercenterOhsjdCost" class="lblText">C. inter. OHSJD</label>
                                                    <input type="text" name="txtCoIntercenterOhsjdCost" id="txtCoIntercenterOhsjdCost" class="boxText"
                                                        value="<?php echo $coIntercenterOhsjdCost;   ?>">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <label for="txtCoOtherCost" class="lblText">C. Otros</label>
                                                    <input type="text" name="txtCoOtherCost" id="txtCoOtherCost" class="boxText"
                                                        value="<?php echo $coOtherCost; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtGaPersonAdminExpenses" class="lblText">G. Personal adm</label>
                                                    <input type="text" name="txtGaPersonAdminExpenses" id="txtGaPersonAdminExpenses" class="boxText"
                                                        value="<?php echo $gaPersonAdminExpenses; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtGaProfessionalFees" class="lblText">H. Personal adm</label>
                                                    <input type="text" name="txtGaProfessionalFees" id="txtGaProfessionalFees" class="boxText"
                                                        value="<?php echo $gaProfessionalFees;  ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtGaBankExpenses" class="lblText">G. Bancarios</label>
                                                    <input type="text" name="txtGaBankExpenses" id="txtGaBankExpenses" class="boxText"
                                                        value="<?php echo $gaBankExpenses;   ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col">
                                                    <label for="txtGaVariousAdminSalesExpenses" class="lblText">G. varios adm y ventas</label>
                                                    <input type="text" name="txtGaVariousAdminSalesExpenses" id="txtGaVariousAdminSalesExpenses" class="boxText"
                                                        value="<?php echo $gaVariousAdminSalesExpenses; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtGaContributionsCuriaCommunityExpenses" class="lblText">Egresos aportes Curia</label>
                                                    <input type="text" name="txtGaContributionsCuriaCommunityExpenses" id="txtGaContributionsCuriaCommunityExpenses" class="boxText"
                                                        value="<?php echo $gaContributionsCuriaCommunityExpenses; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtGaTrialLegalExpenses" class="lblText">Juicio/Gastos legales</label>
                                                    <input type="text" name="txtGaTrialLegalExpenses" id="txtGaTrialLegalExpenses" class="boxText"
                                                        value="<?php echo $gaTrialLegalExpenses;  ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtGaPortfolioImpairmentProvision" class="lblText">P. deterioro cartera</label>
                                                    <input type="text" name="txtGaPortfolioImpairmentProvision" id="txtGaPortfolioImpairmentProvision" class="boxText"
                                                        value="<?php echo $gaPortfolioImpairmentProvision;   ?>">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <label for="txtGaInventoryImpairrmentProvision" class="lblText">Provisión de deterioro de inventarios</label>
                                                    <input type="text" name="txtGaInventoryImpairrmentProvision" id="txtGaInventoryImpairrmentProvision" class="boxText"
                                                        value="<?php echo $gaInventoryImpairrmentProvision; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtGaOtherLowAssetProvision" class="lblText">Provisión otros y bajo de activos</label>
                                                    <input type="text" name="txtGaOtherLowAssetProvision" id="txtGaOtherLowAssetProvision" class="boxText"
                                                        value="<?php echo $gaOtherLowAssetProvision; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtOtherNoOperatingIncome" class="lblText">EBDITDA sin provisiones</label>
                                                    <input type="text" name="txtOtherNoOperatingIncome" id="txtOtherNoOperatingIncome" class="boxText"
                                                        value="<?php echo $otherNoOperatingIncome;  ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtOtherNoOperatingExpenses" class="lblText">Margen EBDITDA</label>
                                                    <input type="text" name="txtOtherNoOperatingExpenses" id="txtOtherNoOperatingExpenses" class="boxText"
                                                        value="<?php echo $otherNoOperatingExpenses;   ?>">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <label for="txtInterestEarnedNetExchangeDifference" class="lblText">Depreciaciones</label>
                                                    <input type="text" name="txtInterestEarnedNetExchangeDifference" id="txtInterestEarnedNetExchangeDifference" class="boxText"
                                                        value="<?php echo $interestEarnedNetExchangeDifference; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtInterestPaidThirdPartiesBank" class="lblText">Amortizaciones</label>
                                                    <input type="text" name="txtInterestPaidThirdPartiesBank" id="txtInterestPaidThirdPartiesBank" class="boxText"
                                                        value="<?php echo $interestPaidThirdPartiesBank; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtInterestPaidOhsjd" class="lblText">Exedente Operacional</label>
                                                    <input type="text" name="txtInterestPaidOhsjd" id="txtInterestPaidOhsjd" class="boxText"
                                                        value="<?php echo $interestPaidOhsjd;  ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtSfCashBank" class="lblText">Efectivo y banco</label>
                                                    <input type="text" name="txtSfCashBank" id="txtSfCashBank" class="boxText"
                                                        value="<?php echo $sfCashBank;   ?>">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <label for="txtSfAccountsReceivable" class="lblText">Inversiones temporales</label>
                                                    <input type="text" name="txtSfAccountsReceivable" id="txtSfAccountsReceivable" class="boxText"
                                                        value="<?php echo $sfAccountsReceivable; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtSfInventory" class="lblText">Cuentas por cobrar</label>
                                                    <input type="text" name="txtSfInventory" id="txtSfInventory" class="boxText"
                                                        value="<?php echo $sfInventory; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtSfOtherCurrentAsset" class="lblText">Activo no corriente</label>
                                                    <input type="text" name="txtSfOtherCurrentAsset" id="txtSfOtherCurrentAsset" class="boxText"
                                                        value="<?php echo $sfOtherCurrentAsset;  ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtSfNonCurrentInvestment" class="lblText">Inversiones no corrientes</label>
                                                    <input type="text" name="txtSfNonCurrentInvestment" id="txtSfNonCurrentInvestment" class="boxText"
                                                        value="<?php echo $sfNonCurrentInvestment;   ?>">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <label for="txtSfPropertyPlantEquipment" class="lblText">Propiedad planta y equipo</label>
                                                    <input type="text" name="txtSfPropertyPlantEquipment" id="txtSfPropertyPlantEquipment" class="boxText"
                                                        value="<?php echo $sfPropertyPlantEquipment; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtSfOtherAsset" class="lblText">Otros activos</label>
                                                    <input type="text" name="txtSfOtherAsset" id="txtSfOtherAsset" class="boxText"
                                                        value="<?php echo $sfOtherAsset; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtSfAccountPayableBusinessDebt" class="lblText">Cuentas por pagar deudas comerciales</label>
                                                    <input type="text" name="txtSfAccountPayableBusinessDebt" id="txtSfAccountPayableBusinessDebt" class="boxText"
                                                        value="<?php echo $sfAccountPayableBusinessDebt;  ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtSfBankDebtFinancialObligation" class="lblText">Deudas bancarias, obligaciones financieras</label>
                                                    <input type="text" name="txtSfBankDebtFinancialObligation" id="txtSfBankDebtFinancialObligation" class="boxText"
                                                        value="<?php echo $sfBankDebtFinancialObligation;   ?>">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <label for="txtSfSocialDebtRemSocialBurdens" class="lblText">Deudas sociales rem y cargas sociales</label>
                                                    <input type="text" name="txtSfSocialDebtRemSocialBurdens" id="txtSfSocialDebtRemSocialBurdens" class="boxText"
                                                        value="<?php echo $sfSocialDebtRemSocialBurdens; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtSfAccountPayableOhcsjd" class="lblText">Cuentas por pagar OHSJD</label>
                                                    <input type="text" name="txtSfAccountPayableOhcsjd" id="txtSfAccountPayableOhcsjd" class="boxText"
                                                        value="<?php echo $sfAccountPayableOhcsjd; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtSfOtherCurrentLiabilities" class="lblText">Otros pasivos corrientes</label>
                                                    <input type="text" name="txtSfOtherCurrentLiabilities" id="txtSfOtherCurrentLiabilities" class="boxText"
                                                        value="<?php echo $sfOtherCurrentLiabilities;  ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtSfBankDebtLpLoans" class="lblText">Deudas bancarias, prestamo LP</label>
                                                    <input type="text" name="txtSfBankDebtLpLoans" id="txtSfBankDebtLpLoans" class="boxText"
                                                        value="<?php echo $sfBankDebtLpLoans;   ?>">
                                                </div>
                            </div>

                            
                            <div class="row">
                                                <div class="col">
                                                    <label for="txtSfTaxSocialDebt" class="lblText">Deudas fiscales y sociales</label>
                                                    <input type="text" name="txtSfTaxSocialDebt" id="txtSfTaxSocialDebt" class="boxText"
                                                        value="<?php echo $sfTaxSocialDebt; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtSfForecasts" class="lblText">Previsiones</label>
                                                    <input type="text" name="txtSfForecasts" id="txtSfForecasts" class="boxText"
                                                        value="<?php echo $sfForecasts; ?>">
                                                </div>
                                                <div class="col">
                                                <label for="txtSfOtherPassive" class="lblText">Otros pasivos</label>
                                                    <input type="text" name="txtSfOtherPassive" id="txtSfOtherPassive" class="boxText"
                                                        value="<?php echo $sfOtherPassive;  ?>">
                                                </div>
        
                         

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="secondaryButton"
                                                data-dismiss="modal">Cerrar</button>
                                            <button type="submit" name="editResults" class="accentButton">Acualizar</button>
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