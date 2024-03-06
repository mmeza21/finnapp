function toggleClave() {
    var password = document.getElementById("txtPassword");
    var eye = document.getElementById("eyePassword");

    if (password.type === "password") {
        password.type = "text";
        eye.innerHTML = '<i class="fas fa-eye-slash text-moradoSanPablo"></i>';
    } else {
        password.type = "password";
        eye.innerHTML = '<i class="fas fa-eye text-moradoSanPablo"></i>';
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