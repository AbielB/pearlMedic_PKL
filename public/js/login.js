// validasi form login


const form = document.getElementById('form_login');
const borderred = document.getElementsByClassName('form-group');
const display = document.getElementsByClassName('display');

function validasi(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username != "" && password != "") {
        document.getElementById("validasi_login").innerHTML = "";
        return true;
    }
    // validasi username kosong
    else{
        borderred[0].style.border = '1px solid red';
        borderred[1].style.border = '1px solid red';
        display[0].style.display = 'flex';
        document.getElementById("validasi_login").innerHTML = "*Username dan Password Salah!";
        return false;
    }
}

form.addEventListener('submit', (e) => {
    if (!validasi()) {
        e.preventDefault();
    }
})






