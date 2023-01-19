const form = document.getElementById('form-vaksinasi');
const borderred = document.getElementsByClassName('form-darurat-info');
const display = document.getElementsByClassName('display');


function pasienvaksin(){
    const pasienvaksin = document.getElementById('pasienvaksin').value;
    const pasienvaksinerror = document.getElementById('pasienvaksinerror');

    if (!pasienvaksin == "") {
        pasienvaksinerror.innerHTML = "";
        display[0].style.display = "none";
        borderred[0].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[0].style.border = "1px solid #B73E3E";
        display[0].style.display = "block";
        pasienvaksinerror.innerHTML = "* Pasien Vaksin tidak Boleh Kosong";
        return false;
    }
}

function lokasivaksin(){
    const lokasivaksin = document.getElementById('lokasivaksin').value;
    const lokasivaksinerror = document.getElementById('lokasivaksinerror');

    if (!lokasivaksin == "") {
        lokasivaksinerror.innerHTML = "";
        display[1].style.display = "none";
        borderred[1].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[1].style.border = "1px solid #B73E3E";
        display[1].style.display = "block";
        lokasivaksinerror.innerHTML = "* Lokasi Vaksin tidak Boleh Kosong";
        return false;
    }
}

function tanggalvaksin(){
    const tanggalvaksin = document.getElementById('tanggalvaksin').value;
    const tanggalvaksinerror = document.getElementById('tanggalvaksinerror');

    if (!tanggalvaksin == "") {
        tanggalvaksinerror.innerHTML = "";
        display[2].style.display = "none";
        borderred[2].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[2].style.border = "1px solid #B73E3E";
        display[2].style.display = "block";
        tanggalvaksinerror.innerHTML = "* Tanggal Vaksin tidak Boleh Kosong";
        return false;
    }
}

form.addEventListener('submit', (e) => {
    e.preventDefault();
    pasienvaksin();
    lokasivaksin();
    tanggalvaksin();

    if (pasienvaksin() && lokasivaksin() && tanggalvaksin() == true) {
        form.submit();
        location.href = "15checkoutvaksinasi.html"
    }
});