function checkValidPass() {
    if (document.getElementById("register-pwd").value == document.getElementById("register-cpwd").value) {
        document.getElementById("register-btn").disabled = false;
        document.getElementById("register-error").classList.add("d-none");
    } else {
        document.getElementById("register-btn").disabled = true;
        document.getElementById("register-error").classList.remove("d-none");
    }
}