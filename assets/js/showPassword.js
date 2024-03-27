/* Ojito Login */
function toggleClave() {
    var password = document.getElementById("txtPassword");
    var eye = document.getElementById("eyePassword");

    if (password.type === "password") {
        password.type = "text";
        eye.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
        password.type = "password";
        eye.innerHTML = '<i class="fas fa-eye"></i>';
    }
}
function actualizarEstadoBoton() {
    var usuarioInput = document.getElementById('txtUser');
    var contrasenaInput = document.getElementById('txtPassword');
    var botonLogin = document.getElementById('btnLogin');

    // Verifica si ambos campos tienen valores
    if (usuarioInput.value.trim() !== '' && contrasenaInput.value.trim() !== '') {
      // Habilita el botón si ambos campos tienen valores
      botonLogin.disabled = false;
    } else {
      // Deshabilita el botón si algún campo está vacío
      botonLogin.disabled = true;
    }
  }

  // Agrega un evento de escucha al formulario para llamar a la función cuando haya cambios
  document.getElementById('formulario').addEventListener('input', actualizarEstadoBoton);

  /* Ojito registro usuario */
  function toggleClaveRegister() {
    var passwordRegister = document.getElementById("txtPassUser");
    var eye = document.getElementById("eyePassword");

    if (passwordRegister.type === "password") {
      passwordRegister.type = "text";
        eye.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
      passwordRegister.type = "password";
        eye.innerHTML = '<i class="fas fa-eye"></i>';
    }
}
  /* Ojito editar usuario */
  function toggleClaveEdit() {
    var passwordEdit = document.getElementById("txtPassUsers");
    var eye = document.getElementById("eyePassword");

    if (passwordEdit.type === "password") {
      passwordEdit.type = "text";
        eye.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
      passwordEdit.type = "password";
        eye.innerHTML = '<i class="fas fa-eye"></i>';
    }
}