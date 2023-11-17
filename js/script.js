

let email = document.getElementById('email');
let login = document.getElementById('username');
let pass = document.getElementById('password');
let pass2 = document.getElementById('confirm');
let register = document.getElementById('register');

var validForm = false;
var validEmail = false;
let emailPattern = /^[a-zA-Z0-9\._-]+@{1}[a-zA-Z]+\.{1}[a-zA-Z]+$/;
var validLogin = false;
let loginPattern = /^[a-zA-Z0-9]{1,40}$/i;
var validPass = false;
let passPattern = /^[a-zA-Z0-9]{4,}$/;
var validPass2 = false;

function hasLowerCase(str) {
    return str !== str.toUpperCase();
}

function hasUpperCase(str) {
    return str !== str.toLowerCase();
}

function validateEmail() {
    let result = emailPattern.test(email.value);
    var emailError = document.getElementById("emailError");

    if (result == false) {
        validEmail = false;
        email.style.border = "solid 1px red";
        emailError.style.visibility = "visible";
    }

    if (result == true) {
        validEmail = true;
        email.style.border = "solid 1px black";
        emailError.style.visibility = "hidden";
    }
}

function validateLogin() {
    let result = loginPattern.test(login.value);
    var lowerLogin = login.value.toLowerCase();
    var loginError = document.getElementById("usernameError");

    if (result == false || hasUpperCase(lowerLogin) == true) {
        validLogin = false;
        login.style.border = "solid 1px red";
        loginError.style.visibility = "visible";
    }

    if (result == true && hasUpperCase(lowerLogin) == false) {
        validLogin = true;
        login.style.border = "solid 1px black";
        loginError.style.visibility = "hidden";
    }
}

function validatePass() {
    let result = passPattern.test(pass.value);
    var passError = document.getElementById("passwordError");

    if (result == false || hasLowerCase(pass.value) == false || hasUpperCase(pass.value) == false) {
        validPass = false;
        pass.style.border = "solid 1px red";
        passError.style.visibility = "visible";
    }

    if (result == true && hasLowerCase(pass.value) == true && hasUpperCase(pass.value) == true) {
        validPass = true;
        pass.style.border = "solid 1px black";
        passError.style.visibility = "hidden";
    }
}

function validatePass2() {
    var confirmError = document.getElementById("confirmError");

    if (pass.value !== pass2.value) {
        validPass2 = false;
        pass2.style.border = "solid 1px red";
        confirmError.style.visibility = "visible";
    }

    if (pass.value === pass2.value) {
        validPass2 = true;
        pass2.style.border = "solid 1px black";
        confirmError.style.visibility = "hidden";
    }

}

email.addEventListener("keyup", validateEmail);
login.addEventListener("keyup", validateLogin);
pass.addEventListener("keyup", validatePass);
pass2.addEventListener("keyup", validatePass2);

register.addEventListener("click", validateForm);

function validateForm() {
    if (validEmail == true && validLogin == true && validPass == true && validPass2 == true) {
        validForm = true;
    }

    else {
        validForm = false;
    }
}

function validate() {
    if (validForm == true) {
        return true;
    }

    else {
        return false
    }
}
