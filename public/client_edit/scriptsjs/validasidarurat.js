const form = document.getElementById('form-darurat');
const borderred = document.getElementsByClassName('form-darurat-info');
const display = document.getElementsByClassName('display');

function kejadiandarurat(){
    const kejadiandarurat = document.getElementById('kejadiandarurat').value;
    const kejadiandaruraterror = document.getElementById('kejadiandaruraterror');

    if (!kejadiandarurat == "") {
        kejadiandaruraterror.innerHTML = "";
        display[0].style.display = "none";
        borderred[0].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[0].style.border = "1px solid #B73E3E";
        display[0].style.display = "block";
        kejadiandaruraterror.innerHTML = "* Kejadian Darurat tidak Boleh Kosong";
        return false;
    }
}
function lokasidarurat(){
    const lokasidarurat = document.getElementById('lokasidarurat').value;
    const lokasidaruraterror = document.getElementById('lokasidaruraterror');

    if (!lokasidarurat == "") {
        lokasidaruraterror.innerHTML = "";
        display[1].style.display = "none";
        borderred[1].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[1].style.border = "1px solid #B73E3E";
        display[1].style.display = "block";
        lokasidaruraterror.innerHTML = "* Lokasi Darurat tidak Boleh Kosong";
        return false;
    }
}
function pasiendarurat(){
    const pasiendarurat = document.getElementById('pasiendarurat').value;
    const pasiendaruraterror = document.getElementById('pasiendaruraterror');

    if (!pasiendarurat == "") {
        pasiendaruraterror.innerHTML = "";
        display[2].style.display = "none";
        borderred[3].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[3].style.border = "1px solid #B73E3E";
        display[2].style.display = "block";
        pasiendaruraterror.innerHTML = "* Pasien Darurat tidak Boleh Kosong";
        return false;
    }
}

form.addEventListener('submit', (e) => {
    e.preventDefault();
    kejadiandarurat();
    lokasidarurat();
    pasiendarurat();

    if (kejadiandarurat() && lokasidarurat()  && pasiendarurat() == true) {
        form.submit();
        location.href = "08checkoutdarurat.html";
    }
});