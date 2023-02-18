<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pearl Medic || Profile</title>
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
    <link rel="stylesheet" href="../client_edit/css/output.css" />
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
                    <a href="/client/medicalcheckup" data-aos="fade-left" class="menu-isi">Medical Check Up<i
                            class="fa-solid fa-stethoscope"></i></a>
                    <a href="/client/vaksin" data-aos="fade-left" class="menu-isi">Vaksinasi<i
                            class="fa-solid fa-syringe"></i></a>
                    <a href="/client/obat" data-aos="fade-left" class="menu-isi">Pembelian Obat-Obatan<i
                            class="fa-solid fa-pills"></i></a>
                    <a href="/client/darurat" data-aos="fade-left" class="menu-isi">Pelayanan Darurat<i
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
                <a href="/client/history" data-aos="fade-left">History<i class="fa-solid fa-money-check"></i></a>
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
            <div class="container swiper-slide profilecontainer" id="home2">
                <img src="../client_edit/image/assets/doctor2.jpg" alt="" />
                <div class="content1" data-aos="fade-up">
                    <div class="photouser">
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                    <div class="profileacc-wrapper-all">
                        <div class="profileacc-wrapper-info">
                            <div class="profileacc-info">
                                <h3 class="dark">Nama Perusahaan</h3>
                                <p><?= $nama_perusahaan ?></p>
                            </div>
                            <div class="profileacc-info">
                                <h3 class="dark">Bidang</h3>
                                <p><?= $bidang ?></p>
                            </div>
                            <div class="profileacc-info">
                                <h3 class="dark">Alamat Lengkap</h3>
                                <p><?= $alamat ?></p>
                            </div>

                            <div class="profileacc-info">
                                <h3 class="dark">Email</h3>
                                <p><?= $email ?></p>
                            </div>


                        </div>
                        <div class="profileacc-wrapper-aninfo">
                            <div class="profileacc-info-desc telp">
                                <h3 class="dark">Nomor Telpon</h3>
                                <p><?= $no_telp ?></p>
                            </div>
                            <div class="profileacc-info-desc">
                                <h3 class="dark">Deskripsi Perusahaan</h3>
                                <p>
                                    <?= $deskripsi ?>
                                </p>
                            </div>
                            <div class="buttonchoice">
                                <div class="profilebutton">
                                    <div class="edit btn-profile">
                                        <a href="/client/editProfile">
                                            <i class="fa-solid fa-user-pen"></i>Edit Profile</a>
                                    </div>
                                    <div class="riwayat btn-profile">
                                        <a href="/client/history">
                                            <i class="fa-solid fa-money-check"></i>Riwayat
                                            Pembelian</a>
                                    </div>
                                    <div class="kembali btn-profile">
                                        <a href="/client"><i class="fa-solid fa-angles-left"></i>Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <!-- <div class="footer1_flex">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-solid fa-phone"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                    <a href="#"><i class="fa-solid fa-map-location-dot"></i></a>
                </div> -->
            </div>
            <div class="footer2">
                <h3>Layanan Kami</h3>
                <ul>
                    <li><a href="/client/medicalcheckup">Medical Check Up</a></li>
                    <li><a href="/client/vaksin">Vaksinasi</a></li>
                    <li><a href="/client/obat">Pembelian Obat</a></li>
                    <li><a href="/client/darurat">Layanan Darurat</a></li>
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
    <script src="../client_edit/scriptsjs/swiper.js"></script>


    <style>
    .content1 {
        margin-top: 100px !important;
    }

    .profileacc-wrapper-all {
        margin-top: -110px !important;
    }

    .profileacc-wrapper-all .profileacc-info h3 {
        font-weight: 600 !important;
    }

    .profileacc-wrapper-all .profileacc-wrapper-info .profileacc-info p,
    .profileacc-wrapper-all .profileacc-wrapper-aninfo .profileacc-info-desc p {
        font-size: 14px !important;
    }

    .profileacc-wrapper-aninfo .telp {
        margin-bottom: 20px !important;
    }

    .profileacc-wrapper-aninfo h3 {
        font-weight: 600 !important;
    }

    .dark {
        color: #2D2B27 !important;
    }

    .dropdown_content {
        margin-top: 27px !important;
    }

    .profiledropdown {
        margin-top: 240px !important;
    }

    @media only screen and (max-width: 768px) {
        .dropdown_content {
            margin-top: -5px !important;
        }
    }
    </style>
</body>

</html>