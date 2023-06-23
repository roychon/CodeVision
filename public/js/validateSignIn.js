// Either one empty / Both empty -> disble btn
// Both Non empty -> enable btn 

// Checks:
// - if BOTH non empty -> button can be clicked
// - ELSE -> button CANNOT be clicked
function validateText() {
    const inputs = document.querySelectorAll("input[type=text]");
    for (let i = 0; i < inputs.length; i++) {
        if (!inputs[i].value) { // if input is empty
            loginSubmit.disabled = true;
            return;
        }
    }

    // this is reached when both are non-empty
    loginSubmit.disabled = false;
}

loginUsername.addEventListener('keyup', validateText);
loginPassword.addEventListener("keyup", validateText);