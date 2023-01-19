<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pearl Medic || Edit Profile</title>
    <!-- Link Favicon -->
    <link rel="shortcut icon" href="../client_edit/image/logo/pearlmedic.png" type="image/x-icon" />
    <!-- END Link Favicon -->
    <!-- CSS Links -->
    <link rel="stylesheet" href="../client_edit/css/style.min.css" />
    <!-- END CSS Links -->
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <!-- END Box Icons -->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- END Link Swiper's CSS -->
    <!-- LINK FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!-- END LINK FONT AWESOME -->
    <!-- Link AOS Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- END Link AOS Library -->
</head>

<body>
    <!-- NAVIGATION BAR SECTION -->
    <nav class="navigation_bar navbar_profile" id="navbar_color">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="/client" class="logo" data-aos="fade-left">
            <img src="../client_edit/image/logo/pearlmedic2.png" alt="" />
            <p>Pearl Medic</p>
        </a>
        <div class="navbar">
            <a href="/client" class="hidup" data-aos="fade-left">Home</a>
            <a href="#" data-aos="fade-left" class="menu-button">Layanan<i class="fa-solid fa-chevron-down"></i></a>
            <div class="menu_dropdown">
                <div class="dropdown_content">
                    <a href="10checkup.html" data-aos="fade-left" class="menu-isi">Medical Check Up<i
                            class="fa-solid fa-stethoscope"></i></a>
                    <a href="12vaksinasi.html" data-aos="fade-left" class="menu-isi">Vaksinasi<i
                            class="fa-solid fa-syringe"></i></a>
                    <a href="11obat.html" data-aos="fade-left" class="menu-isi">Pembelian Obat-Obatan<i
                            class="fa-solid fa-pills"></i></a>
                    <a href="07darurat.html" data-aos="fade-left" class="menu-isi">Pelayanan Darurat<i
                            class="fa-solid fa-truck-medical"></i></a>
                </div>
            </div>
            <a href="/client" data-aos="fade-left">Kontak Kami</a>
            <!-- <a href="#" data-aos="fade-left">Services</a> -->
            <a href="#" data-aos="fade-left">Keranjang <i class="fa-solid fa-cart-plus"></i></a>
        </div>
        <div class="profile" data-aos="fade-left">
            <div class="profilelogo">
                <i class="fa-solid fa-circle-user"></i>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="profiledropdown">
                <a href="/client/myAccount" data-aos="fade-left">My Account<i class="fa-solid fa-user-tie"></i></a>
                <a href="/client/editProfile" data-aos="fade-left">Edit Profile<i class="fa-solid fa-user-pen"></i></a>
                <a href="05riwayat.html" data-aos="fade-left">History<i class="fa-solid fa-money-check"></i></a>
                <button data-aos="fade-left" onclick="openPopup()">
                    Logout<i class="fa-solid fa-right-from-bracket"></i>
                </button>
            </div>
        </div>
    </nav>
    <!-- END NAVIGATION BAR SECTION -->
    <!-- MAIN MENU SECTION -->
    <div class="popup" id="popup">
        <i class="fa-solid fa-right-from-bracket"></i>
        <h2>Anda Yakin Ingin Log Out?</h2>
        <a href="/client/logout"><button type="button" class="btn-remove">Ya</button></a>
        <a href="#"><button type="button" onclick="closePopup()" class="btn-remove">
                Batal
            </button></a>
    </div>
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <div class="container swiper-slide profilecontainer">
                <img src="../client_edit/image/assets/doctor2.jpg" alt="" />
                <div class="content1" data-aos="fade-up">
                    <div class="photouser" id="photouser">
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                    <div class="profileacc-wrapper-all">
                        <form action="" class="form-editprofile" id="form_edit">
                            <div class="profileacc-wrapper-info">
                                <div class="profileacc-info">
                                    <h3>Nama Perusahaan</h3>
                                    <div class="inputprofile">
                                        <input type="text" value="<?= $nama_perusahaan; ?>"
                                            placeholder="Silahkan isi nama perusahaan..." id="namaperusahaan"
                                            name="namaperusahaan" />
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <p class="display" id="namaperusahaanerror"></p>
                                </div>
                                <div class="profileacc-info">
                                    <h3>Username Akun</h3>
                                    <div class="inputprofile">
                                        <input type="text" value="Petronas3008" placeholder="Silahkan isi username..."
                                            id="editusername" name="editusername" />
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <p class="display" id="editusernameerror"></p>
                                </div>
                                <div class="profileacc-info">
                                    <h3>Bidang</h3>
                                    <div class="inputprofile">
                                        <input type="text" value="Perusahaan Minyak dan Gas"
                                            placeholder="Silahkan isi Bidang..." id="bidang" name="bidang" />
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <p class="display" id="bidangerror"></p>
                                </div>
                                <div class="profileacc-info">
                                    <h3>Provinsi</h3>
                                    <div class="inputprofile">
                                        <input type="text" value="Jawa Timur" placeholder="Silahkan isi Provinsi..."
                                            id="provinsi" name="provinsi" />
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <p class="display" id="provinsierror"></p>
                                </div>
                                <div class="profileacc-info">
                                    <h3>Kota</h3>
                                    <div class="inputprofile">
                                        <input type="text" value="Madura" placeholder="Silahkan isi Kota..." id="kota"
                                            name="kota" />
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <p class="display" id="kotaerror"></p>
                                </div>
                                <div class="profileacc-info">
                                    <h3>Alamat Lengkap</h3>
                                    <div class="inputprofile">
                                        <input type="text"
                                            value="Jalan Sultan Ismal, Kota Madura, Jawa Timur, Indonesia"
                                            placeholder="Silahkan isi Alamat..." id="alamat" name="alamat" />
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <p class="display" id="alamaterror"></p>
                                </div>
                                <div class="profileacc-info">
                                    <h3>Nomor Telepon</h3>
                                    <div class="inputprofile">
                                        <input type="text" value="081234567890" placeholder="Silahkan isi No Telp..."
                                            id="telpon" name="telpon" />
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <p class="display" id="telponerror"></p>
                                </div>
                                <div class="profileacc-info">
                                    <h3>Email</h3>
                                    <div class="inputprofile">
                                        <input type="text" value="Petronas3008@gmail.com"
                                            placeholder="Silahkan isi Alamat Email..." id="email" name="email" />
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <p class="display" id="emailerror"></p>
                                </div>
                            </div>
                            <div class="profileacc-wrapper-aninfo">
                                <div class="profileacc-info-desc">
                                    <h3>Deskripsi Perusahaan</h3>
                                    <div class="inputprofile">
                                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"
                                            class="textarea"></textarea>
                                        <!-- <i class="fa-solid fa-pen"></i> -->
                                    </div>
                                    <p class="display" id="deskripsierror"></p>
                                </div>
                                <div class="buttonchoice">
                                    <div class="profilebutton">
                                        <div class="edit btn-profile">
                                            <a href="#namaperusahaan">
                                                <button type="button" onclick="openPopupedit()">
                                                    <i class="fa-solid fa-user-pen"></i>Simpan Perubahan
                                                </button></a>
                                        </div>
                                        <div class="popupedit" id="popupedit">
                                            <i class="fa-solid fa-user-pen"></i>
                                            <h2>Anda Yakin Ingin Mengedit Profile?</h2>
                                            <p>
                                                Semua perubahan yang dilakukan pada profile akan
                                                langsung disimpan
                                            </p>
                                            <button type="submit" class="btn-removeedit" onclick="closePopupedit()">
                                                Ya
                                            </button>
                                            <a href="#" id="ya"><button type="button" onclick="closePopupedit()"
                                                    class="btn-removeedit">
                                                    Batal
                                                </button></a>
                                        </div>
                                        <div class="kembali btn-profile">
                                            <a href="/client/myAccount"><i
                                                    class="fa-solid fa-angles-left"></i>Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <!-- END MAIN MENU SECTION -->
    <!-- FOOTER SECTION -->
    <section class="footer" id="footer">
        <div class="footer_wrapper">
            <div class="footer1">
                <div class="flex-rowww">
                    <div class="nama_toko">
                        <a href="#" class="logo"><img src="../client_edit/image/logo/pearlmedic2.png" alt="" />
                            <p>Pearl Medic</p>
                        </a>
                    </div>
                    <p>Where Wellness Meet Our Care</p>
                </div>
                <div class="footer1_flex">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-solid fa-phone"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                    <a href="#"><i class="fa-solid fa-map-location-dot"></i></a>
                </div>
            </div>
            <div class="footer2">
                <h3>Layanan Kami</h3>
                <ul>
                    <li><a href="10checkup.html">Medical Check Up</a></li>
                    <li><a href="12vaksinasi.html">Vaksinasi</a></li>
                    <li><a href="11obat.html">Pembelian Obat</a></li>
                    <li><a href="07darurat.html">Layanan Darurat</a></li>
                </ul>
            </div>
            <div class="footer3">
                <h3>Menu</h3>
                <ul>
                    <li><a href="/client">Home</a></li>
                    <li><a href="/client">Layanan Kami</a></li>
                    <li><a href="/client">Contact</a></li>
                    <li>
                        <a href="#">Keranjang<i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <li><a href="/client/myAccount">Profile</a></li>
                </ul>
            </div>
            <div class="footer4">
                <h3>Our Address</h3>
                <ul>
                    <li>
                        <i class="fa-solid fa-map-marker-alt"></i> Jl. M.T Haryono,
                        Jakarta Selatan
                    </li>
                    <li><i class="fa-solid fa-phone"></i> 021-29386426</li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        hiroshipatiroi@pearl-medic.com
                    </li>
                    <!-- clock icon -->
                    <li><i class="fa-solid fa-clock"></i>08:00am - 18.00am</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END FOOTER SECTION -->
    <!-- Loader Section -->
    <div class="loader-container">
        <img src="../client_edit/image/assets/laptop.gif" alt="" />
    </div>
    <!-- End Loader Section -->
    <!-- aos script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- END aos Script -->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- END Swiper JS -->
    <script src="../client_edit/scriptsjs/aos.js"></script>
    <script src="../client_edit/scriptsjs/data.js"></script>
    <script src="../client_edit/scriptsjs/validasiedit.js"></script>
    <script src="../client_edit/scriptsjs/swiper.js"></script>
    <script>
    // isi value di textarea
    var textarea = document.getElementById("deskripsi");

    textarea.value =
        `Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique harum sunt qui facere recusandae nisi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi officiis unde magni saepe amet voluptatibus tempora quo esse! Adipisci, dolores.`;
    // textarea color and font
    textarea.style.color = "#2D2B27";
    //   textarea value margin top
    textarea.style.marginTop = "10px";
    (textarea.style.fontFamily = "Lora"), "serif";
    // pop up edit
    let popupedit = document.getElementById("popupedit");

    function openPopupedit() {
        popupedit.classList.add("open-popup");
    }

    function closePopupedit() {
        popupedit.classList.remove("open-popup");
    }

    // background popup
    // let container_popup = document.querySelector(".container_popup");
    let btn_popupedit = document.querySelector(".btn_popupedit");

    btn_popup.addEventListener("click", function() {
        container_popup.classList.add("active");
    });

    // close popup
    let btn_removeedit = document.querySelector(".btn-removeedit");
    btn_remove.addEventListener("click", function() {
        container_popup.classList.remove("active");
    });
    </script>
</body>

</html>