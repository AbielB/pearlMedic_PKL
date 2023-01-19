const form = document.getElementById('form_edit');
const borderred = document.getElementsByClassName('inputprofile');
const display = document.getElementsByClassName('display');

function validasinamaperusahaan(){
    const namaperusahaan = document.getElementById('namaperusahaan').value;
    const namaperusahaanerror = document.getElementById('namaperusahaanerror');

    if (!namaperusahaan == "") {
        namaperusahaanerror.innerHTML = "";
        display[0].style.display = "none";
        borderred[0].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[0].style.border = "1px solid #B73E3E";
        display[0].style.display = "block";
        namaperusahaanerror.innerHTML = "* Nama Perusahaan tidak Boleh Kosong";
        return false;
    }
}

function editusername(){
    const username = document.getElementById('editusername').value;
    const usernameerror = document.getElementById('editusernameerror');

    if (!username == "") {
        usernameerror.innerHTML = "";
        display[1].style.display = "none";
        borderred[1].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[1].style.border = "1px solid #B73E3E";
        display[1].style.display = "block";
        usernameerror.innerHTML = "* Username tidak Boleh Kosong";
        return false;
    }
}

function bidang(){
    const bidang = document.getElementById('bidang').value;
    const bidangerror = document.getElementById('bidangerror');

    if (!bidang == "") {
        bidangerror.innerHTML = "";
        display[2].style.display = "none";
        borderred[2].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[2].style.border = "1px solid #B73E3E";
        display[2].style.display = "block";
        bidangerror.innerHTML = "* Bidang tidak Boleh Kosong";
        return false;
    }
}
function provinsi(){
    const provinsi = document.getElementById('provinsi').value;
    const provinsierror = document.getElementById('provinsierror');

    if (!provinsi == "") {
        provinsierror.innerHTML = "";
        display[3].style.display = "none";
        borderred[3].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[3].style.border = "1px solid #B73E3E";
        display[3].style.display = "block";
        provinsierror.innerHTML = "* Provinsi tidak Boleh Kosong";
        return false;
    }
}

function kota(){
    const kota = document.getElementById('kota').value;
    const kotaerror = document.getElementById('kotaerror');

    if (!kota == "") {
        kotaerror.innerHTML = "";
        display[4].style.display = "none";
        borderred[4].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[4].style.border = "1px solid #B73E3E";
        display[4].style.display = "block";
        kotaerror.innerHTML = "* Kota tidak Boleh Kosong";
        return false;
    }
}

function alamat(){
    const alamat = document.getElementById('alamat').value;
    const alamaterror = document.getElementById('alamaterror');

    if (!alamat == "") {
        alamaterror.innerHTML = "";
        display[5].style.display = "none";
        borderred[5].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[5].style.border = "1px solid #B73E3E";
        display[5].style.display = "block";
        alamaterror.innerHTML = "* Alamat tidak Boleh Kosong";
        return false;
    }
}

function telpon(){
    const telpon = document.getElementById('telpon').value;
    const telponerror = document.getElementById('telponerror');
    // input must integer only (0-9)
    const regex = /^[0-9]+$/;

    if (!telpon == "" && regex.test(telpon)) {
        telponerror.innerHTML = "";
        display[6].style.display = "none";
        borderred[6].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[6].style.border = "1px solid #B73E3E";
        display[6].style.display = "block";
        telponerror.innerHTML = "* Nomor Telepon Harus Angka & tak boleh kosong";
        return false;
    }
}

function email(){
    const email = document.getElementById('email').value;
    const emailerror = document.getElementById('emailerror');
    // validasi email
    const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (!email == "" && regex.test(email)) {
        emailerror.innerHTML = "";
        display[7].style.display = "none";
        borderred[7].style.border = "1px solid transparent";
        return true;
    } else {
        borderred[7].style.border = "1px solid #B73E3E";
        display[7].style.display = "block";
        emailerror.innerHTML = "* Format Email Salah";
        return false;
    }
}
function deskripsi(){
    const deskripsi = document.getElementById('deskripsi').value;
    const deskripsierror = document.getElementById('deskripsierror');
    const textarea = document.getElementsByClassName('textarea');

    if (!deskripsi == "") {
        deskripsierror.innerHTML = "";
        display[8].style.display = "none";
        textarea[0].style.border = "1px solid transparent";
        return true;
    } else {
        textarea[0].style.border = "1px solid #B73E3E";
        display[8].style.display = "block";
        deskripsierror.innerHTML = "* Deskripsi tidak Boleh Kosong";
        return false;
    }
}

form.addEventListener ('submit', function (e) {
    e.preventDefault();
    validasinamaperusahaan();
    editusername();
    bidang();
    provinsi();
    kota();
    alamat();
    telpon();
    email();
    deskripsi();

    if(validasinamaperusahaan()  && editusername()  && bidang()  && provinsi()  && kota()  && alamat()  && telpon() && email() && deskripsi() == true){
        form.submit();
        location.href = "03profileacc.html";
    }

});