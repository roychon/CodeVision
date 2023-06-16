// CREATING THE REGEX FOR ALL INPUTS
const usernameRegex = /^[A-Za-z][A-Za-z0-9]{5,31}$/;
const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

// GRABBING INPUT ELEMENTS FROM HTML
const userName = document.querySelector("#username");
const email = document.querySelector("#email");
const password = document.querySelector("#password");
const passwordConfirm = document.querySelector("#passwordConfirm");

// VALIDATING THE USERNAME INPUT
function checkUsername(userName) {
	if (userName.value === "") {
		userName.className = "red";
		usernameMissing.style.display = "inline";
		usernameNotValid.style.display = "none";
		return false;
	} else if (userName.value !== "" && (userName.value.length < 3 || !usernameRegex.test(userName.value))) {
		userName.className = "red";
		usernameNotValid.style.display = "inline";
		usernameMissing.style.display = "none";
		return false;
	} else {
		userName.className = "green";
		usernameNotValid.style.display = "none";
		usernameMissing.style.display = "none";
		return true;
	}
}

// VALIDATING THE USERNAME INPUT LIVE ON KEYUP
userName.addEventListener("keyup", () => {
	checkUsername(userName);
});

userName.addEventListener("blur", function () {
	if (userName.value.length == 0 || userName.value) {
		userName.className = "";
		usernameNotValid.style.display = "none";
		usernameMissing.style.display = "none";
	}
});

// VALIDATING THE EMAIL INPUT
function checkEmail(email) {
	if (email.value == "") {
		emailMissing.style.display = "inline";
		emailNotValid.style.display = "none";
		email.className = "red";
		return false;
	} else if (email.value !== "" && (email.value.length < 3 || !emailRegex.test(email.value))) {
		email.className = "red";
		emailNotValid.style.display = "inline";
		emailMissing.style.display = "none";
		return false;
	} else {
		email.className = "green";
		emailMissing.style.display = "none";
		emailNotValid.style.display = "none";
		return true;
	}
}

// VALIDATING THE EMAIL INPUT LIVE ON KEYUP
email.addEventListener("keyup", () => {
	checkEmail(email);
});

email.addEventListener("blur", function () {
	if (email.value.length == 0 || email.value) {
		email.className = "";
		emailNotValid.style.display = "none";
		emailMissing.style.display = "none";
	}
});

// VALIDATING THE PASSWORD INPUT
function checkPassword(password) {
	if (password.value == "") {
		password.className = "red";
		passwordMissing.style.display = "inline";
		passwordNotValid.style.display = "none";
		return false;
	} else if (password.value !== "" && (password.value.length < 3 || !passwordRegex.test(password.value))) {
		password.className = "red";
		passwordNotValid.style.display = "inline";
		passwordMissing.style.display = "none";
		return false;
	} else {
		password.className = "green";
		passwordNotValid.style.display = "none";
		passwordMissing.style.display = "none";
		return true;
	}
}

// VALIDATING THE PASSWORD INPUT LIVE ON KEYUP
password.addEventListener("keyup", () => {
	checkPassword(password);
});

password.addEventListener("blur", function () {
	if (password.value.length == 0 || password.value) {
		password.className = "";
		passwordNotValid.style.display = "none";
		passwordMissing.style.display = "none";
	}
});

// VALIDATING PASSWORD CONFIRMATION INPUT
function confirmPassword(passwordConfirm) {
	if (
		passwordConfirm.value == "" ||
		passwordConfirm.value.length < 3 ||
		!passwordRegex.test(passwordConfirm.value) ||
		passwordConfirm.value !== password.value
	) {
		passwordConfirm.className = "red";
		passwordConfirmError.style.display = "inline";
		return false;
	} else {
		passwordConfirm.className = "green";
		passwordConfirmError.style.display = "none";
		return true;
	}
}

// VALIDATING PASSWORD CONFIRMATION INPUT LIVE ON KEYUP
passwordConfirm.addEventListener("keyup", () => {
	confirmPassword(passwordConfirm);
});

passwordConfirm.addEventListener("blur", function () {
	if (passwordConfirm.value.length == 0 || passwordConfirm.value) {
		passwordConfirm.className = "";
		passwordConfirmError.style.display = "none";
	}
});

// FUNCTION THAT CALLS ALL OTHER FUNCTIONS WHEN 'SUBMIT' IS PRESSED
function checkAllInputs(e) {
	let valid = checkUsername(userName);
	valid = checkEmail(email) && valid;
	valid = checkPassword(password) && valid;
	valid = confirmPassword(passwordConfirm) && valid;
	if (!valid) {
		e.preventDefault();
		checkUsername();
		checkEmail();
		checkPassword();
		confirmPassword();
	} else {
		alert("Form is submitted");
	}
}

// EVENT LISTENER ON THE SUBMIT BUTTON
form.addEventListener("submit", checkAllInputs);
