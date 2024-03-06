function toggleClave() {
    var claveInput = document.getElementById("Txt_Clave");
    var ojo = document.getElementById("ojo");

    if (claveInput.type === "password") {
        claveInput.type = "text";
        ojo.innerHTML = '<i class="fas fa-eye-slash text-moradoSanPablo"></i>';
    } else {
        claveInput.type = "password";
        ojo.innerHTML = '<i class="fas fa-eye text-moradoSanPablo"></i>';
    }
}