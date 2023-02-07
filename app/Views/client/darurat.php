<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pearl Medic || Darurat</title>
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
    <style>
        #error {
            color: red;
            font-size: 1.5em;
        }
    </style>
</head>

<body>
    <!-- NAVIGATION BAR SECTION -->
    <nav class="navigation_bar" id="navbar_color">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="/client" class="logo" data-aos="fade-left"><img src="../client_edit/image/logo/pearlmedic2.png" alt="" id="gambar1">
            <p>Pearl Medic</p>
        </a>
        <div class="navbar">
            <a href="/client" class="hidup" data-aos="fade-left">Home</a>
            <a href="#layanans" data-aos="fade-left" class="menu-button">Layanan<i class="fa-solid fa-chevron-down"></i></a>
            <div class="menu_dropdown">
                <div class="dropdown_content">
                    <a href="/client/medicalcheckup" data-aos="fade-left" class="menu-isi">Medical Check Up<i class="fa-solid fa-stethoscope"></i></a>
                    <a href="/client/vaksin" data-aos="fade-left" class="menu-isi">Vaksinasi<i class="fa-solid fa-syringe"></i></a>
                    <a href="/client/obat" data-aos="fade-left" class="menu-isi">Pembelian Obat-Obatan<i class="fa-solid fa-pills"></i></a>
                    <a href="/client/darurat" data-aos="fade-left" class="menu-isi">Pelayanan Darurat<i class="fa-solid fa-truck-medical"></i></a>
                </div>
            </div>
            <a href="#contacts" data-aos="fade-left">Kontak Kami</a>
            <!-- <a href="#" data-aos="fade-left">Services</a> -->
            <a href="#" data-aos="fade-left">Keranjang <i class="fa-solid fa-cart-plus"></i></a>
        </div>
        <div class="profile" data-aos="fade-left">
            <div class="profilelogo">
                <i class="fa-solid fa-circle-user"></i>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="profiledropdown">
                <a href="/client/MyAccount" data-aos="fade-left">My Account<i class="fa-solid fa-user-tie"></i></a>
                <a href="/client/editProfile" data-aos="fade-left">Edit Profile<i class="fa-solid fa-user-pen"></i></a>
                <a href="/client/history" data-aos="fade-left">History<i class="fa-solid fa-money-check"></i></a>
                <button data-aos="fade-left" onclick="openPopup()">Logout<i class="fa-solid fa-right-from-bracket"></i></button>
            </div>
        </div>
    </nav>
    <!-- END NAVIGATION BAR SECTION -->
    <!-- MAIN MENU SECTION -->
    <div class="popup" id="popup">
        <i class="fa-solid fa-right-from-bracket"></i>
        <h2>Anda Yakin Ingin Log Out?</h2>
        <a href="/client/logout"><button type="button" class="btn-remove">
                Ya
            </button></a>
        <a href="#"><button type="button" onclick="closePopup()" class="btn-remove">
                Batal
            </button></a>
    </div>
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <div class="container swiper-slide daruratcontainer">
                <img src="../client_edit/image/assets/darurat02.jpg" alt="" />
                <div class="content4">
                    <div class="left-darurat" data-aos="fade-right">
                        <h3>Pelayanan Darurat <i class="fa-solid fa-truck-medical"></i></h3>
                        <p>Pelayanan Darurat adalah pelayanan yang melayani kejadian-kejadian darurat yang terjadi di
                            suatu tempat, seperti kecelakaan karyawan, pembelian obat darurat,dan lain-lain</p>
                    </div>
                    <div class="right-darurat" data-aos="fade-left">
                        <!-- <h3>Form Pelayanan Darurat</h3> -->
                        <div class="right-darurat-wrapper">
                            <?php
                            //if not isset error_deskripsi, error_deskripsi = null
                            $error_deskripsi = isset($error_deskripsi) ? $error_deskripsi : null;
                            $error_lokasi = isset($error_lokasi) ? $error_lokasi : null;
                            $error_jumlah = isset($error_jumlah) ? $error_jumlah : null;
                            ?>
                            <form action="/client/checkoutDarurat" class="form-darurat" id="form-darurat" method="post">
                                <?= csrf_field(); ?>
                                <i class="fa-solid fa-user-nurse"></i>
                                <div class="form-darurat-info">
                                    <i class="fa-solid fa-notes-medical"></i>
                                    <input type="text" placeholder="Isi Kejadian Darurat..." id="kejadiandarurat" name="deskripsi">
                                </div>
                                <div class="space" style="background-color: transparent; margin-top: -15px; margin-bottom: 20px;">
                                    <p id="error"><?= $error_deskripsi ?></p>
                                    <!-- <p>hai</p> -->
                                </div>
                                <br>
                                <div class="form-darurat-info">
                                    <i class="fa-solid fa-map-location-dot"></i>
                                    <input type="text" placeholder="Lokasi Kejadian Darurat..." id="lokasidarurat" name="lokasi">
                                </div>
                                <div class="space" style="background-color: transparent; margin-top: -15px; margin-bottom: 20px;">
                                    <p id="error"><?= $error_lokasi ?></p>

                                </div>
                                <br>
                                <div class="form-darurat-info">
                                    <i class="fa-solid fa-hospital"></i>
                                    <input type="text" placeholder="Rumah Sakit Rujukan..." name="rs_tujuan">
                                </div>
                                <div class="space" style="background-color: transparent; margin-top: -15px; margin-bottom: 20px;">
                                    <p id="error"></p>

                                </div>
                                <br>

                                <div class="form-darurat-info">
                                    <i class="fa-solid fa-users-line"></i>
                                    <input type="number" placeholder="Jumlah Pasien Terlibat..." id="pasiendarurat" name="jumlah">
                                </div>
                                <div class="space" style="background-color: transparent; margin-top: -15px; margin-bottom: 20px;">
                                    <p id="error"><?= $error_jumlah ?></p>
                                    <!-- <p>hai</p> -->
                                </div>
                                <br>
                                <div class="deskripsitambahan" id="deskripsitambahan">
                                    <div class="deskripsitambahanjudul">
                                        <i class="fa-solid fa-file-medical"></i>
                                        <h3>Deskripsi Tambahan (Opsional)</h3>
                                    </div>
                                    <br>
                                    <textarea name="tambahan" id="deskripsitambahan" cols="30" rows="10" class="textarea-darurat" style="padding-top: 5px; padding-left: 5px;">
                            </textarea>
                                </div>
                                <div class="space" style="background-color: transparent; margin-top: -15px; margin-bottom: 20px;">
                                    <p class="display" id="deskripsitambahanerror"></p>
                                    <!-- <p>hai</p> -->
                                </div>
                                <br>
                                <div class="submit-darurat">
                                    <button type="submit">Pesan Layanan</button>
                                </div>
                                <div class="keterangan">
                                    <p>Ket: Rumah sakit rujukan bisa dikosongkan jika ingin menerima rekomendasi dari
                                        kami</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <!-- END MAIN MENU SECTION -->
    <!-- CONTACT SECTION -->
    <section class="contacts" id="contacts" data-aos="fade-up">
        <div class="judulcontact">
            <h3>Contact Info</h3>
            <p>Informasi lanjutan mengenai layanan,akun,transaksi,dll silahkan hubungi kontak kami</p>
        </div>
        <div class="contactinfo">
            <div class="contact-menu">
                <div class="icons">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <p>@mutiaramedicalservice</p>
            </div>
            <div class="contact-menu">
                <div class="icons">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="number">
                    <p>021-29386426</p>
                    <p>0811 9990 801</p>
                </div>
            </div>
            <div class="contact-menu">
                <div class="icons">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <p>hiroshipatiroi@pearl-medic.com</p>
            </div>
            <div class="contact-menu">
                <div class="icons">
                    <i class="fa-solid fa-map-location-dot"></i>
                </div>
                <p>Signature Park, K03 Jl. M.T Haryono Kav 22, Jakarta Selatan</p>
            </div>
        </div>
    </section>
    <!-- END CONTACT SECTION -->
    <!-- FOOTER SECTION -->
    <section class="footer" id="footer">
        <div class="footer_wrapper">
            <div class="footer1">
                <div class="flex-rowww">
                    <div class="nama_toko">
                        <a href="#" class="logo"><img src="/image/logo/pearlmedic2.png" alt="">
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
                    <li><a href="#home">Layanan Kami</a></li>
                    <li><a href="#contacts">Contact</a></li>
                    <li><a href="#">Keranjang<i class="fa-solid fa-cart-shopping"></i></a></li>
                    <li><a href="/client/MyAccount">Profile</a></li>
                </ul>
            </div>
            <div class="footer4">
                <h3>Our Address</h3>
                <ul>
                    <li><i class="fa-solid fa-map-marker-alt"></i> Jl. M.T Haryono, Jakarta Selatan</li>
                    <li><i class="fa-solid fa-phone"></i> 021-29386426</li>
                    <li><i class="fa-solid fa-envelope"></i> hiroshipatiroi@pearl-medic.com</li>
                    <!-- clock icon -->
                    <li><i class="fa-solid fa-clock"></i>08:00am - 18.00am</li>
                </ul>

            </div>
        </div>
    </section>
    <!-- END FOOTER SECTION -->
    <!-- Loader Section -->
    <div class="loader-container">
        <img src="../client_edit/image/assets/laptop.gif" alt="">
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
</body>
</body>

</html>