<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pearl Medic || Riwayat Akun</title>
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
            <a href="/client/keranjang" data-aos="fade-left">Keranjang <i class="fa-solid fa-cart-plus"></i></a>
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
                <button data-aos="fade-left" onclick="openPopup()">Logout<i
                        class="fa-solid fa-right-from-bracket"></i></button>
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
            <div class="container swiper-slide detailriwayatkeranjangcontainer">
                <img src="../client_edit/image/assets/doctor2.jpg" alt="" />
                <div class="content3" data-aos="fade-up">
                    <div class="judulriwayatkeranjang">
                        <h3>
                            <i class="fa-solid fa-cart-arrow-down"></i>Riwayat Keranjang
                        </h3>
                    </div>
                    <div class="riwayatkeranjang-wrapper">
                        <div class="riwayatkeranjang-info">
                            <div class="judultabelkeranjang">
                                <i class="fa-solid fa-pills"></i>Product Obat-Obatan
                            </div>
                            <div class="tabelkeranjang">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>
                                                Nama Product Obat<i class="fa-solid fa-pills"></i>
                                            </th>
                                            <th>
                                                Jumlah<i class="fa-solid fa-arrow-down-wide-short"></i>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //foreach isi
                                        $i = 0;
                                        foreach ($isi as $row) {
                                            $i++;
                                            echo "<tr>";
                                            echo "<td class='yellow'>" . $i . "</td>";
                                            echo "<td>" . $row['nama_obat'] . "</td>";
                                            echo "<td>" . $row['jumlah'] . " buah</td>";
                                            echo "</tr>";
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="riwayatkeranjang-info">
                            <div class="judultabelkeranjang">
                                <i class="fa-regular fa-id-card"></i>Status Keranjang
                            </div>
                            <div class="riwayatkeranjang-info-wrapper">
                                <div class="statusriwayatkeranjang">
                                    <h3 class="yellow">Status Pelayanan</h3>
                                    <p class="<?= $color ?>"><?= $status ?></p>
                                </div>
                                <div class="totalbelanja">
                                    <h3>Total Belanja</h3>
                                    <p><?= $total ?> Buah</p>
                                </div>
                                <div class="tanggalpemesanan">
                                    <h3>Tanggal Pemesanan</h3>
                                    <p><?= $tanggal_order ?></p>
                                </div>

                                <div class="alamatpengiriman">
                                    <h3 class="yellow">Alamat Pengiriman</h3>
                                    <p><?= $alamat ?></p>
                                </div>
                                <div class="tombolkembali">
                                    <a href="/client/history"><i class="fa-solid fa-angles-left"></i>Kembali</a>
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
                        <a href="#" class="logo"><img src="/image/logo/pearlmedic2.png" alt="" />
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
                        <a href="/client/keranjang">Keranjang<i class="fa-solid fa-cart-shopping"></i></a>
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

    <style>
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

    .tabelkeranjang table tr th,
    .tabelkeranjang table tr td {
        padding: 10px;
    }
    </style>
</body>

</html>