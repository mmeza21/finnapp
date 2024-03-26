<?php session_start();?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema Financieros HCSJD">
    <meta name="keywords" content="Sistema FInanciero HCSJD">
    <meta name="author" content="Mmeza">
    <title>Login - Estados Financieros</title>
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/logoGranada.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/swal.css">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <main>
        <section class="slider">
            <div class="contentSlider">
                <figure>
                    <img src="assets/images/logoGranadaWhite.png" alt="">
                </figure>
                <div>
                    <h1>Estados Financieros HCSJD</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ex alias similique numquam odio
                        cumque laborum assumenda illum eaque tenetur eos, repellendus ipsa dolorem? Quidem doloremque
                        eligendi perferendis in suscipit?</p>
                </div>
                <mark class="highlight">Bienvenido</mark>
                <div class="slide">
                    <div class="slide-inner">
                        <input class="slide-open" type="radio" id="slide-1" name="slide" aria-hidden="true" hidden=""
                            checked="checked">
                        <div class="slide-item">
                            <p>
                                Con <strong>Lorem ipsum</strong> podrás <strong>reservar, pagar y reprogramar tus
                                    citas</strong> presenciales o teleconsultas de <strong>manera fácil y
                                    segura.</strong>
                            </p>
                        </div>
                        <input class="slide-open" type="radio" id="slide-2" name="slide" aria-hidden="true" hidden="">
                        <div class="slide-item">
                            <p>
                                Ingresa a nuestra plataforma <strong>"Lorem ipsum"</strong> y accede a tu información
                                médica <strong>con tan solo un clic.</strong>
                            </p>
                        </div>
                        <input class="slide-open" type="radio" id="slide-3" name="slide" aria-hidden="true" hidden="">
                        <div class="slide-item">
                            <p>
                                <strong>Atiéndete</strong> con nuestro administrador <strong>desde Lorem ipsum</strong>
                                y accede a nuestras <strong>sedes a nivel nacional</strong> sin importar en cuál de
                                ellas asistas.
                            </p>
                        </div>
                        <label for="slide-3" class="slide-control prev control-1">‹</label>
                        <label for="slide-2" class="slide-control next control-1">›</label>
                        <label for="slide-1" class="slide-control prev control-2">‹</label>
                        <label for="slide-3" class="slide-control next control-2">›</label>
                        <label for="slide-2" class="slide-control prev control-3">‹</label>
                        <label for="slide-1" class="slide-control next control-3">›</label>
                    </div>
                </div>
            </div>

        </section>
        <section class="login">
            <div class="contentLogin">
                <h1>Inicia sesión</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formulario">
                    <label for="txtUser">Usuario*</label>
                    <input type="text" name="txtUser" id="txtUser" placeholder="Ingresa tu usuario..."
                        autocomplete="off" class="boxText" require>

                    <label for="txtPassword">Contraseña*</label>
                    <div class="contentEyePassword">
                        <input type="password" name="txtPassword" id="txtPassword"
                            placeholder="Ingresa tu contraseña..." autocomplete="off" class="boxText" require>
                        <span id="eyePassword" class="eyePassword" onclick="toggleClave()"><i
                                class="fas fa-eye textPrimaryColor"></i></span>
                    </div>
                    <button type="submit" class="primaryButton" name="login" id="btnLogin" disabled>Ingresar <i
                            class="fas fa-sign-in-alt"></i></button>
                </form>
            </div>
            <div class="contentFooter">
                <p>&copy;<?php echo date("Y"); ?> - Todos los derechos reservados</p>
            </div>
        </section>
    </main>
    <script src="assets/js/showPassword.js"></script>
    <script src="assets/js/slider.js"></script>
</body>

</html>
<?php include('controller/access.php');?>