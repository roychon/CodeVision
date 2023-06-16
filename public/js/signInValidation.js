//Check login function

function checkUserName() {
    console.log("check username");
    if (username.value.length >= 4) {
        //TODO:Check w/team on login restrictions
        username.classList.remove("invalid");
        username.classList.add("valid");
    } else {
        username.classList.add("invalid");
        username.classList.remove("valid");
    }
}

username.addEventListener("keyup", checkUserName);
username.addEventListener("blur", removeBorder);

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
