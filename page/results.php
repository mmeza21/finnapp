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
                <h5>Registro resultados financieros</h5>
            </div>
            <div class="card-block">
            <form action="../controller/getAdministration.php" method="POST" enctype="multipart/form-data"/>
        <div class="">
            <input  type="file" name="dataCliente" id="file-input" class="file-input__input" required>
            <label class="file-input__label" for="file-input">
              <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
              <span>Elegir Archivo Excel</span></label
            >
          </div>
      <div class="">
          <input type="submit" name="saveResults" class="btn-enviar" value="Subir Excel"/>
      </div>
      </form>


            </div>
        </div>
    </div>
</div>
</div>
<?php include ('../vistas/footer.php');?>