function togglePassword() {
    var passwordInput = document.getElementById("txtPassUser");
    var ojo = document.getElementById("ojo");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        ojo.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
        passwordInput.type = "password";
        ojo.innerHTML = '<i class="fas fa-eye"></i>';
    }
}