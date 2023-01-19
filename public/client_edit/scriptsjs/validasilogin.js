
// LOGIN FORM

const form = document.getElementById('form_login');
const borderred = document.getElementsByClassName('logininput');
const display = document.getElementsByClassName('display1');

function validasiname() {
  const name = document.getElementById('username').value;
  const usernameerror = document.getElementById('usernameerror');

  if (!name == "") {
    usernameerror.innerHTML = "";
    display[0].style.display = "none";
    borderred[0].style.border = "1px solid transparent";
    return true;
  } else {
    borderred[0].style.border = "1px solid #B73E3E";
    display[0].style.display = "block";
    usernameerror.innerHTML = "* Username tidak valid";
    return false;
  }
}

function validasipassword() {
    const password = document.getElementById('password').value;
    const passworderror = document.getElementById('passworderror');

    if (!password == "") {
        passworderror.innerHTML = "";
        display[1].style.display = "none";
        borderred[1].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[1].style.border = "1px solid #B73E3E";
        display[1].style.display = "block";
        passworderror.innerHTML = "* Password tidak valid";
        return false;
    }
}

function confirmpass(){
    const password = document.getElementById('password').value;
    const confirmpassword = document.getElementById('confirmpass').value;
    const confirmpassworderror = document.getElementById('confirmpassworderror');

    if (password == confirmpassword) {
        confirmpassworderror.innerHTML = "";
        display[2].style.display = "none";
        borderred[2].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[2].style.border = "1px solid #B73E3E";
        display[2].style.display = "block";
        confirmpassworderror.innerHTML = "* Konfirmasi Password tidak Sama";
        return false;
    }
}

form.addEventListener ('submit', function (e) {
    e.preventDefault();
    validasiname();
    validasipassword();
    confirmpass();

    if (validasiname() && validasipassword() && confirmpass() == true) {
        form.submit();
    }


});

// END LOGIN FORM