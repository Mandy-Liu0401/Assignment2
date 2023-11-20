

let emailInput = document.getElementById('email');
let loginInput = document.getElementById('username');
let passInput = document.getElementById('password');
let pass2Input = document.getElementById('confirm');
let registerClick = document.getElementById('register');

//create space p for error message
let emailError=document.createElement('p');
emailError.setAttribute("class","error");
document.querySelectorAll(".regItem")[0].append(emailError);

let usernameError=document.createElement('p');
usernameError.setAttribute("class","error");
document.querySelectorAll(".regItem")[0].append(usernameError);

let passError=document.createElement('p');
passError.setAttribute("class","error");
document.querySelectorAll(".regItem")[2].append(passError);

let pass2Error=document.createElement('p');
pass2Error.setAttribute("class","error");
document.querySelectorAll(".regItem")[3].append(pass2Error);



//error messages
let emailErrorMsg="Email address should be non-empty with format xyz@xyz.xyz.";
let loginErrorMsg="User name should be non-empty, and within 30 characters long."
let passErrorMsg="Password should be at least 7 characters 1 uppercase 1 lowercase."
let pass2ErrorMsg="Please retype password."
let defaultMSg="";






var validForm = false;

var validEmail = false;
let emailPattern = /\S+@\S+\.\S+/;

var validLogin = false;
let loginPattern = /^[a-zA-Z0-9]{1,40}$/i;


//passPattern needs to be changed !!!!!
var validPass = false;
let passPattern = /^[a-zA-Z0-9]{4,}$/;

var validPass2 = false;


//eg needs deleted 





function validateEmail() {
let email =emailInput.value;
if(emailPattern.test(email)){ 
    emailError.textContent = defaultMSg
}
    else {
    emailError.textContent = emailErrorMsg;}
   
}


function validateLogin() {
    let login = loginInput.value;
    if(login.length > 0 && login.length <= 30){
        loginError.textContent=defaultMSg;
        loginInput.value = login.toLowerCase();
    }else{
        loginError.textContent=loginErrorMsg;
    }
}


//these codes need to be review for algorithm test
function validatePass() {
let result = passPattern.test(passInput.value);

if (result.length > 8 ||result == false || hasLowerCase(passInput.value) == false || hasUpperCase(passInput.value) == false) {
    validPass = false;
    passError.textContent=passErrorMsg;
}

if (result == true && hasLowerCase(passInput.value) == true && hasUpperCase(passInput.value) == true) {
    validPass = true;
    passError.textContent=defaultMSg;
}

}
//same, needs to be check 
function validatePass2() {
    
    if (passInput.value !== pass2Input.value) {
        validPass2 = false;
        pass2Error.textContent=pass2ErrorMsg;
    }

    if (pass.value === pass2.value) {
        validPass2 = true;
        pass2Error.textContent=defaultMSg;
    }

}


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








//event listeners as below 
emailInput.addEventListener("blur", validateEmail());
loginInput.addEventListener("blur", validateLogin());
passInput.addEventListener("blur", validatePass());
pass2Input.addEventListener("blur", validatePass2());

registerClick.addEventListener("click", validateForm());


