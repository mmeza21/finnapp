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
/*Guardar CSV*/
else if (isset($_POST['saveResults'])) {
$tipo       = $_FILES['dataResult']['type'];
$tamanio    = $_FILES['dataResult']['size'];
$archivotmp = $_FILES['dataResult']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);
    if ($i != 0) {
        $datos = explode(";", $linea);
        $coPersonCost = !empty($datos[0])  ? ($datos[0]) : '';
		    $coMedicalFees = !empty($datos[1])  ? ($datos[1]) : '';
        $coMedicationCost = !empty($datos[2])  ? ($datos[2]) : '';
        $coMaterialCost = !empty($datos[3])  ? ($datos[3]) : '';
		    $coMaintenance = !empty($datos[4])  ? ($datos[4]) : '';
        $coInvestigationCost = !empty($datos[5])  ? ($datos[5]) : '';
        $coLabCost = !empty($datos[6])  ? ($datos[6]) : '';
		    $coImageCost = !empty($datos[7])  ? ($datos[7]) : '';
        $coIntercenterOhsjdCost = !empty($datos[8])  ? ($datos[8]) : '';
        $coOtherCost = !empty($datos[9])  ? ($datos[9]) : '';
        $gaPersonAdminExpenses = !empty($datos[10])  ? ($datos[10]) : '';
        $gaProfessionalFees = !empty($datos[11])  ? ($datos[11]) : '';
        $gaBankExpenses = !empty($datos[12])  ? ($datos[12]) : '';
		    $gaVariousAdminSalesExpenses = !empty($datos[13])  ? ($datos[13]) : '';
        $gaContributionsCuriaCommunityExpenses = !empty($datos[14])  ? ($datos[14]) : '';
        $gaTrialLegalExpenses = !empty($datos[15])  ? ($datos[15]) : '';
		    $gaPortfolioImpairmentProvision = !empty($datos[16])  ? ($datos[16]) : '';
        $gaInventoryImpairrmentProvision = !empty($datos[17])  ? ($datos[17]) : '';
        $gaOtherLowAssetProvision = !empty($datos[18])  ? ($datos[18]) : '';
		    $otherNoOperatingIncome = !empty($datos[19])  ? ($datos[19]) : '';
        $otherNoOperatingExpenses = !empty($datos[20])  ? ($datos[20]) : '';
        $interestEarnedNetExchangeDifference = !empty($datos[21])  ? ($datos[21]) : '';
		    $interestPaidThirdPartiesBank = !empty($datos[22])  ? ($datos[22]) : '';
        $coIntercenterOhsjdCost = !empty($datos[23])  ? ($datos[23]) : '';
        $interestPaidOhsjd = !empty($datos[24])  ? ($datos[24]) : '';
		    $sfCashBank = !empty($datos[25])  ? ($datos[25]) : '';
        $sfAccountsReceivable = !empty($datos[26])  ? ($datos[26]) : '';
        $sfInventory = !empty($datos[27])  ? ($datos[27]) : '';
		    $sfOtherCurrentAsset = !empty($datos[28])  ? ($datos[28]) : '';
        $sfNonCurrentInvestment = !empty($datos[29])  ? ($datos[29]) : '';
        $sfPropertyPlantEquipment = !empty($datos[30])  ? ($datos[30]) : '';
		    $sfOtherAsset = !empty($datos[31])  ? ($datos[31]) : '';
        $sfAccountPayableBusinessDebt = !empty($datos[32])  ? ($datos[32]) : '';
        $sfBankDebtFinancialObligation = !empty($datos[33])  ? ($datos[33]) : '';
		    $sfSocialDebtRemSocialBurdens = !empty($datos[34])  ? ($datos[34]) : '';
        $sfAccountPayableOhcsjd = !empty($datos[35])  ? ($datos[35]) : '';
        $sfOtherCurrentLiabilities = !empty($datos[36])  ? ($datos[36]) : '';
        $sfBankDebtLpLoans = !empty($datos[37])  ? ($datos[37]) : '';
        $sfTaxSocialDebt = !empty($datos[38])  ? ($datos[38]) : '';
		    $sfForecasts = !empty($datos[39])  ? ($datos[39]) : '';
        $sfOtherPassive = !empty($datos[40])  ? ($datos[40]) : '';

       
    $insertar = "INSERT INTO tbl_results( 
            co_person_cost,
			      co_medical_fees,
            co_medication_cost,
            co_material_cost,
            co_maintenance,
            co_investigation_cost,
            co_lab_cost,
            co_image_cost,
            co_intercenter_ohsjd_cost,
            co_other_cost,
            ga_person_admin_expenses,
            ga_professional_fees,
            ga_bank_expenses,
            ga_various_admin_sales_expenses,
            ga_contributions_curia_community_expenses,
            ga_trial_legal_expenses,
            ga_portfolio_impairment_provision,
            ga_inventory_impairrment_provision,
            ga_other_low_asset_provision,
            other_no_operating_income,
            other_no_operating_expenses,
            interest_earned_net_exchange_difference,
            interest_paid_third_parties_bank,
            interest_paid_ohsjd,
            sf_cash_bank,
            sf_accounts_receivable,
            sf_inventory,
            sf_other_current_asset,
            sf_non_current_investment,
            sf_property_plant_equipment,
            sf_other_asset,
            sf_account_payable_business_debt,
            sf_bank_debt_financial_obligation,
            sf_social_debt_rem_social_burdens,
            sf_account_payable_ohcsjd,
            sf_other_current_liabilities,
            sf_bank_debt_lp_loans,
            sf_tax_social_debt,
            sf_forecasts,
            sf_other_passive
        ) VALUES(
            '$coPersonCost',
			      '$coMedicalFees',
            '$coMedicationCost',
            '$coMaterialCost',
            '$coMaintenance',
            '$coInvestigationCost',
            '$coLabCost',
            '$coImageCost',
            '$coIntercenterOhsjdCost',
            '$coOtherCost',
            '$gaPersonAdminExpenses',
            '$gaProfessionalFees',
            '$gaBankExpenses',
            '$gaVariousAdminSalesExpenses',
            '$gaContributionsCuriaCommunityExpenses',
            '$gaTrialLegalExpenses',
            '$gaPortfolioImpairmentProvision',
            '$gaInventoryImpairrmentProvision',
            '$gaOtherLowAssetProvision',
            '$otherNoOperatingIncome',
            '$otherNoOperatingExpenses',
            '$interestEarnedNetExchangeDifference',
            '$interestPaidThirdPartiesBank',
            '$interestPaidOhsjd',
            '$sfCashBank',
            '$sfAccountsReceivable',
            '$sfInventory',
            '$sfOtherCurrentAsset',
            '$sfNonCurrentInvestment',
            '$sfPropertyPlantEquipment',
            '$sfOtherAsset',
            '$sfAccountPayableBusinessDebt',
            '$sfBankDebtFinancialObligation',
            '$sfSocialDebtRemSocialBurdens',
            '$sfAccountPayableOhcsjd',
            '$sfOtherCurrentLiabilities',
            '$sfBankDebtLpLoans',
            '$sfTaxSocialDebt',
            '$sfForecasts',
            '$sfOtherPassive'
        )";
        mysqli_query($conn, $insertar);
    }

      echo '<div>'. $i. "). " .$linea.'</div>';
    $i++;
}


  echo '<p style="text-aling:center; color:#333;">Total de Registros: '. $cantidad_regist_agregados .'</p>';

}
?>