// Validasi form registrasi
const form = document.getElementById('form_register');
const username = document.getElementById('username');

// make function for username validation
function usernameValidation() {
    // get username value
    let usernameValue = username.value.trim();
    let usernameerror = document.getElementById('error_username');
    let kotakborder = document.getElementsByClassName('form-group');

    // check if username < 5 characters and > 45 characters, input should not be only integer
    if (usernameValue.length < 5 || usernameValue.length > 45 || usernameValue.match(/^[0-9]+$/)) {
        usernameerror.style.color = 'red';
        usernameerror.innerHTML = '*Username > 5 karakter & < 45 karakter, tidak boleh hanya angka';
        kotakborder[0].style.border = '1px solid red';
        //username display flex
        usernameerror.style.display = 'flex';
        usernameerror.style.fontSize = '12px';
        username.focus();
        return false;
}
    else {
        usernameerror.innerHTML = '';
        return true;
    }
}

// make function for email validation
function emailValidation() {
    // get email value
    let emailValue = email.value.trim();
    let emailerror = document.getElementById('error_email');
    let kotakborder = document.getElementsByClassName('form-group');

    // check if email format is valid  
    if (!emailValue.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        emailerror.style.color = 'red';
        emailerror.innerHTML = '*Format Email Tidak Valid';
        kotakborder[1].style.border = '1px solid red';
        //email display flex
        emailerror.style.display = 'flex';
        emailerror.style.fontSize = '12px';
        email.focus();
        return false;
    }
    else {
        emailerror.innerHTML = '';
        return true;
    }
}

// make function for password validation
function passwordValidation() {
    // get password value
    let passwordValue = password.value.trim();
    let passworderror = document.getElementById('error_password');
    let kotakborder = document.getElementsByClassName('form-group');

    // check if password < 8 
    if (passwordValue.length < 8) {
        passworderror.style.color = 'red';
        passworderror.innerHTML = '*Password Minimal 8 Karakter atau angka';
        kotakborder[2].style.border = '1px solid red';
        //password display flex
        passworderror.style.display = 'flex';
        passworderror.style.fontSize = '12px';
        password.focus();
        return false;
    }
    else {
        passworderror.innerHTML = '';
        return true;
    }

}

// make function for password confirmation validation
function passwordConfirmationValidation() {
    // get password confirmation value
    let passwordConfirmationValue = confirm_pass.value.trim();
    let passwordConfirmationerror = document.getElementById('error_confirm_pass');
    let kotakborder = document.getElementsByClassName('form-group');
    // get password value
    let passwordValue = password.value.trim();

    // check if password confirmation is not same with password
    if (passwordConfirmationValue !== passwordValue) {
        passwordConfirmationerror.style.color = 'red';
        passwordConfirmationerror.innerHTML = '*Password Tidak Sama';
        kotakborder[3].style.border = '1px solid red';
        //password display flex
        passwordConfirmationerror.style.display = 'flex';
        passwordConfirmationerror.style.fontSize = '12px';
        confirm_pass.focus();
        return false;
    }
    else {
        passwordConfirmationerror.innerHTML = '';
        return true;
    }
}


// form event listener
form.addEventListener('submit', (e) => {
    e.preventDefault();
    usernameValidation();
    emailValidation();
    passwordValidation();
    passwordConfirmationValidation();
});