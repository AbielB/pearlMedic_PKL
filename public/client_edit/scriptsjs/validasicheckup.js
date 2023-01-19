const form = document.getElementById('form-checkup');
const borderred = document.getElementsByClassName('form-darurat-info');
const display = document.getElementsByClassName('display');


function jumlahpasien(){
    const jumlahpasien = document.getElementById('jumlahpasien').value;
    const jumlahpasienerror = document.getElementById('jumlahpasienerror');

    if (!jumlahpasien == "") {
        jumlahpasienerror.innerHTML = "";
        display[0].style.display = "none";
        borderred[0].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[0].style.border = "1px solid #B73E3E";
        display[0].style.display = "block";
        jumlahpasienerror.innerHTML = "* Jumlah Pasien tidak Boleh Kosong";
        return false;
    }
}

function lokasicheckup(){
    const lokasicheckup = document.getElementById('lokasicheckup').value;
    const lokasicheckuperror = document.getElementById('lokasicheckuperror');

    if (!lokasicheckup == "") {
        lokasicheckuperror.innerHTML = "";
        display[1].style.display = "none";
        borderred[1].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[1].style.border = "1px solid #B73E3E";
        display[1].style.display = "block";
        lokasicheckuperror.innerHTML = "* Lokasi Check Up tidak Boleh Kosong";
        return false;
    }
}

function tanggalpelaksanaan(){
    const tanggalpelaksanaan = document.getElementById('tanggalpelaksanaan').value;
    const tanggalpelaksanaanerror = document.getElementById('tanggalpelaksanaanerror');

    if (!tanggalpelaksanaan == "") {
        tanggalpelaksanaanerror.innerHTML = "";
        display[2].style.display = "none";
        borderred[2].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[2].style.border = "1px solid #B73E3E";
        display[2].style.display = "block";
        tanggalpelaksanaanerror.innerHTML = "* Tanggal Pelaksanaan tidak Boleh Kosong";
        return false;
    }
}

form.addEventListener('submit', (e) => {
    e.preventDefault();
    jumlahpasien();
    lokasicheckup();
    tanggalpelaksanaan();
    if (jumlahpasien()  && lokasicheckup() && tanggalpelaksanaan() == true) {
        form.submit();
        location.href = "13checkoutmedical.html";
    }
});