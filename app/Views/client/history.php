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
                    <a href="/client/medicalcheckup" data-aos="fade-left" class="menu-isi">Medical Check Up<i class="fa-solid fa-stethoscope"></i></a>
                    <a href="/client/vaksin" data-aos="fade-left" class="menu-isi">Vaksinasi<i class="fa-solid fa-syringe"></i></a>
                    <a href="/client/obat" data-aos="fade-left" class="menu-isi">Pembelian Obat-Obatan<i class="fa-solid fa-pills"></i></a>
                    <a href="/client/darurat" data-aos="fade-left" class="menu-isi">Pelayanan Darurat<i class="fa-solid fa-truck-medical"></i></a>
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
            <div class="container swiper-slide riwayatcontainer">
                <img src="../client_edit/image/assets/doctor2.jpg" alt="" />
                <div class="content2" data-aos="fade-up">
                    <div class="judulcontent2">
                        <h3>
                            <i class="fa-solid fa-laptop-medical"></i>Histori Pelayanan
                        </h3>
                    </div>
                    <div class="histori-wrapper">
                        <div class="histori-info">
                            <div class="nama-pelayanan">
                                <h4>
                                    <i class="fa-solid fa-pills"></i>Pembelian Obat-Obatan
                                </h4>
                            </div>
                            <div class="searchbar">
                                <input type="text" placeholder="Cari Histori Pembelian..." />
                                <i class="fa-solid fa-search"></i>
                            </div>
                            <div class="info-pelayanan">
                                <table>
                                    <thead>
                                        <tr>
                                            <?php
                                            //if keranjang kosong
                                            if (!empty($keranjang)) {
                                            ?>
                                                <th>No</th>
                                                <th>Tanggal Pemesanan</th>
                                                <th>Alamat</th>
                                                <th>Status</th>
                                                <th><i class="fa-solid fa-cart-shopping"></i></th>
                                            <?php
                                            }
                                            ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        //foreach keranjang
                                        foreach ($keranjang as $k) {
                                            $status = $k->status;
                                            if ($status == 0) {
                                                $status = "Belum Dipesan";
                                                $color = "red";
                                            } else if ($status == 1) {
                                                $status = "Belum Dilayani";
                                                $color = "red";
                                            } else if ($status == 2) {
                                                $status = "Dalam Proses";
                                                $color = "yellow";
                                            } else if ($status == 3) {
                                                $status = "Sudah Dilayani";
                                                $color = "green";
                                            } else {
                                                $status = "Dibatalkan";
                                                $color = "red";
                                            }
                                            echo "<tr>";
                                            echo "<td class='yellow'>" . $i . "</td>";
                                            echo "<td>" . $k->tanggal_order . "</td>";
                                            echo "<td>" . $k->alamat . " </td>";
                                            echo "<td class='" . $color . "'>" . $status . "</td>";
                                            echo "<td><a href='/client/detailKeranjang?id_keranjang=" . $k->id_keranjang . "'>Detail Keranjang</a></td>";
                                            echo "</tr>";
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="histori-info">
                            <div class="nama-pelayanan">
                                <h4>
                                    <i class="fa-solid fa-stethoscope"></i>Medical Check Up
                                </h4>
                            </div>
                            <div class="searchbar">
                                <input type="text" placeholder="Cari Histori Check Up..." />
                                <i class="fa-solid fa-search"></i>
                            </div>
                            <div class="info-pelayanan">
                                <table>
                                    <thead>
                                        <?php
                                        //if medical is not empty
                                        if (!empty($medical)) {
                                        ?>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal Pemesanan</th>
                                                <th>Total Pasien</th>
                                                <th>Lokasi</th>
                                                <th>Status</th>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //foreach medical get data
                                        $num = 0;
                                        foreach ($medical as $m) {
                                            $num = $num + 1;
                                            $tanggal = $m->tanggal_pelaksanaan;
                                            $lokasi = $m->lokasi;
                                            $jumlah = $m->jumlah;
                                            //if status = 0 then belum dilayani
                                            if ($m->status == 0) {
                                                $status = "Belum Dilayani";
                                                $color = "red";
                                            }
                                            //if status = 1 then dalam proses
                                            else if ($m->status == 1) {
                                                $status = "Dalam Proses";
                                                $color = "yellow";
                                            }
                                            //if status = 2 then sudah dilayani
                                            else if ($m->status == 2) {
                                                $status = "Sudah Dilayani";
                                                $color = "green";
                                            } else if ($m->status == 3) {
                                                $status = "Dibatalkan";
                                                $color = "red";
                                            }
                                            echo "<tr>";
                                            echo "<td class='yellow'>$num</td>";
                                            echo "<td>$tanggal</td>";
                                            echo "<td>$jumlah</td>";
                                            echo "<td>$lokasi</td>";
                                            echo "<td class='$color'>$status</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="histori-info">
                            <div class="nama-pelayanan">
                                <h4><i class="fa-solid fa-syringe"></i>Vaksinasi</h4>
                            </div>
                            <div class="searchbar">
                                <input type="text" placeholder="Cari Histori Vaksinasi..." />
                                <i class="fa-solid fa-search"></i>
                            </div>
                            <div class="info-pelayanan">
                                <table>
                                    <thead>
                                        <tr>
                                            <?php
                                            //if vaksin is not empty
                                            if (!empty($ordervaksin)) { ?>
                                                <th>No</th>
                                                <th>Tanggal Pemesanan</th>
                                                <th>Total Pasien</th>
                                                <th>Lokasi</th>
                                                <th>Jenis Vaksin</th>
                                                <th>Status</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //foreach vaksin get data
                                        $num = 0;
                                        foreach ($ordervaksin as $vaksin) {
                                            //tanggal explode
                                            $tanggal = date("d-m-Y", strtotime($vaksin->tanggal_pelaksanaan));
                                            //if status = 1 then belum dilayani
                                            if ($vaksin->status == 0) {
                                                $status = "Belum Dilayani";
                                                $color = "red";
                                            }
                                            //if status = 2 then dalam proses
                                            else if ($vaksin->status == 1) {
                                                $status = "Dalam Proses";
                                                $color = "yellow";
                                            } else if ($vaksin->status == 2) {
                                                $status = "Sudah Dilayani";
                                                $color = "green";
                                            } else {
                                                $status = "Dibatalkan";
                                                $color = "red";
                                            }
                                            $num = $num + 1;
                                            echo "<tr>";
                                            echo "<td class='yellow'>$num</td>";
                                            echo "<td>$tanggal</td>";
                                            echo "<td>$vaksin->jumlah</td>";
                                            echo "<td>$vaksin->lokasi</td>";
                                            echo "<td>$vaksin->nama_vaksin</td>";
                                            echo "<td class='$color'>$status</td>";
                                            echo "</tr>";
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="histori-info">
                            <div class="nama-pelayanan">
                                <h4>
                                    <i class="fa-solid fa-truck-medical"></i>Pelayanan Darurat
                                </h4>
                            </div>
                            <div class="searchbar">
                                <input type="text" placeholder="Cari Histori Pelayanan Darurat..." />
                                <i class="fa-solid fa-search"></i>
                            </div>
                            <div class="info-pelayanan">
                                <table>
                                    <thead>
                                        <tr>
                                            <?php
                                            //if darurat is not empty
                                            if (!empty($darurat)) {
                                            ?>
                                                <th>No</th>
                                                <th>Tanggal Pemesanan</th>
                                                <th>Total Pasien</th>
                                                <th>Lokasi</th>
                                                <th>RS Rujukan</th>
                                                <th>Status</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $num = 0;
                                        foreach ($darurat as $m) {
                                            $num++;
                                            $tanggal = date("d-m-Y", strtotime($m->tanggal_pelaporan));
                                            $jumlah = $m->jumlah;
                                            $lokasi = $m->lokasi;
                                            //if status = 0 then belum dilayani
                                            if ($m->status == 0) {
                                                $status = "Belum Dilayani";
                                                $color = "red";
                                            }
                                            //if status = 1 then dalam proses
                                            else if ($m->status == 1) {
                                                $status = "Dalam Proses";
                                                $color = "yellow";
                                            }
                                            //if status = 2 then sudah dilayani
                                            else if ($m->status == 2) {
                                                $status = "Sudah Dilayani";
                                                $color = "green";
                                            }
                                            //if status = 3 then ditolak
                                            else if ($m->status == 3) {
                                                $status = "Dibatalkan";
                                                $color = "red";
                                            }
                                            echo "<tr>";
                                            echo "<td class='yellow'>$num</td>";
                                            echo "<td>$tanggal</td>";
                                            echo "<td>$jumlah</td>";
                                            echo "<td>$lokasi</td>";
                                            echo "<td>$m->rs_tujuan</td>";
                                            echo "<td class='$color'>$status</td>";
                                            echo "</tr>";
                                        }
                                        ?>

                                    </tbody>
                                </table>
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
                    <li><a href="/client">Layanan Kami</a></li>
                    <li><a href="/client">Contact</a></li>
                    <li>
                        <a href="#">Keranjang<i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <li><a href="#">Profile</a></li>
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
</body>

</html>