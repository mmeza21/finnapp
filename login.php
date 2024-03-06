<!DOCTYPE html>
<html lang="es">

<head>
    <title>Login | Estados Financieros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Tablero compuesto de componentes para adminsitrar plantilla." />
    <meta name="keywords" content="Administración de tablero compuesto de páginas php, JavaScript, CSS, HTML, Bootstrap."/>
    <meta name="author" content="Manu"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/logoGranada.png" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- Login css -->
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>
<main>
    <div class="contenedor">
        <figure>
            <img src="assets/images/logoGranada.png" alt="Logo San Pablo">
        </figure>
        <div class="form-group">
            <h1>Estados Financieros</h1>
        </div>
        <div class="form-group">
            <label for="Usuario" class="lblText">Usuario</label>
            <input type="text" name="" id="" class="boxText" placeholder="Tú Usuario">
        </div>
        <div class="form-group">
            <label for="Clave" class="lblText">Clave</label>
            <div class="contenedor_vista-clave">
            <input type="password" name="" id="Txt_Clave" class="boxText" placeholder="Tú clave">
            <span id="ojo" class="ojo" onclick="toggleClave()"><i class="fas fa-eye text-moradoSanPablo"></i></span>
            </div>
        </div>
        <div clas="form-group">
            <input type="submit" class="primaryButton" value="Iniciar">
        </div>
        <footer>
            <p>&copy; 2024 - HCSJD</p>
        </footer>
    </div>
</main>

    <!-- JS -->
    <script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/login/ver_clave.js"></script>
</body>
</html>
