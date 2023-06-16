//Check login function

function checkLogin() {
    if (login.value.length >= 4) {
        //TODO:Check w/team on login restrictions
        login.classList.remove("invalid");
        login.classList.add("valid");
    } else {
        login.classList.add("invalid");
        login.classList.remove("valid");
    }
}

login.addEventListener("keyup", checkLogin);
login.addEventListener("blur", removeBorder);

function removeBorder(e) {
    e.target.classList.remove("valid");
}

// Check password function

function checkPassword() {
    if (password.value.length >= 6) {
        //TODO:Confirm restrictions w/team
        password.classList.remove("invalid");
        password.classList.add("valid");
    } else {
        password.classList.add("invalid");
        password.classList.remove("valid");
    }
}

password.addEventListener("keyup", checkPassword);
password.addEventListener("blur", removeBorder);

function removeBorder(e) {
    e.target.classList.remove("valid");
}
