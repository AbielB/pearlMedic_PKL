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
    <style>
        #error {
            color: red;
            font-size: 1.2em;
            width: 100% !important;
            margin-top: 0.4em;
        }
    </style>
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
                    <a href="10checkup.html" data-aos="fade-left" class="menu-isi">Medical Check Up<i class="fa-solid fa-stethoscope"></i></a>
                    <a href="/client/vaksin" data-aos="fade-left" class="menu-isi">Vaksinasi<i class="fa-solid fa-syringe"></i></a>
                    <a href="11obat.html" data-aos="fade-left" class="menu-isi">Pembelian Obat-Obatan<i class="fa-solid fa-pills"></i></a>
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
                        <form action="/client/postEdit" class="form-editprofile" id="form_edit" method="post">
                            <?= csrf_field(); ?>
                            <div class="profileacc-wrapper-info">
                                <div class="profileacc-info">
                                    <h3>Nama Perusahaan</h3>
                                    <div class="inputprofile">
                                        <input type="text" value="<?= $nama_perusahaan; ?>" placeholder="Silahkan isi nama perusahaan..." id="nama_perusahaan" name="nama_perusahaan" />
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <h2 id="error">
                                        <?= $error_nama ?>
                                    </h2>
                                </div>


                                <div class="profileacc-info">
                                    <h3>Bidang</h3>
                                    <div class="inputprofile">
                                        <!-- select bidang-->
                                        <?php
                                        //switch case bidang selected
                                        switch ($bidang) {
                                            case 'Tambang/Minyak':
                                                echo '<select name="bidang" id="bidang">
                                                <option value="Tambang/Minyak" selected>Tambang/Minyak</option>
                                                <option value="Energi">Energi</option>
                                                <option value="Kesehatan">Kesehatan</option>
                                                <option value="Transportasi">Transportasi</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>';
                                                break;
                                            case 'Energi':
                                                echo '<select name="bidang" id="bidang">
                                                <option value="Tambang/Minyak">Tambang/Minyak</option>
                                                <option value="Energi" selected>Energi</option>
                                                <option value="Kesehatan">Kesehatan</option>
                                                <option value="Transportasi">Transportasi</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>';
                                                break;
                                            case 'Kesehatan':
                                                echo '<select name="bidang" id="bidang">
                                                <option value="Tambang/Minyak">Tambang/Minyak</option>
                                                <option value="Energi">Energi</option>
                                                <option value="Kesehatan" selected>Kesehatan</option>
                                                <option value="Transportasi">Transportasi</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>';
                                                break;
                                            case 'Transportasi':
                                                echo '<select name="bidang" id="bidang">
                                                <option value="Tambang/Minyak">Tambang/Minyak</option>
                                                <option value="Energi">Energi</option>
                                                <option value="Kesehatan">Kesehatan</option>
                                                <option value="Transportasi" selected>Transportasi</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>';
                                                break;
                                            case 'Lainnya':
                                                echo '<select name="bidang" id="bidang">
                                                <option value="Tambang/Minyak">Tambang/Minyak</option>
                                                <option value="Energi">Energi</option>
                                                <option value="Kesehatan">Kesehatan</option>
                                                <option value="Transportasi">Transportasi</option>
                                                <option value="Lainnya" selected>Lainnya</option>
                                            </select>';
                                                break;
                                            default:
                                                echo '<select name="bidang" id="bidang">
                                                <option value="Tambang/Minyak">Tambang/Minyak</option>
                                                <option value="Energi">Energi</option>
                                                <option value="Kesehatan">Kesehatan</option>
                                                <option value="Transportasi">Transportasi</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>';
                                                break;
                                        }
                                        ?>

                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <p class="display" id="bidangerror"></p>
                                </div>

                                <div class="profileacc-info">
                                    <h3>Alamat Lengkap</h3>
                                    <div class="inputprofile">
                                        <input type="text" value="<?= $alamat; ?>" placeholder="Silahkan isi Alamat..." id="alamat" name="alamat" />
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <p id="error"><?= $error_alamat ?></p>
                                </div>
                                <div class="profileacc-info">
                                    <h3>Nomor Telepon</h3>
                                    <div class="inputprofile">
                                        <input type="text" value="<?= $no_telp ?>" placeholder="Silahkan isi No Telp..." id="no_telp" name="no_telp" />
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <p id="error"><?= $error_notelp ?></p>
                                </div>
                                <div class="profileacc-info">
                                    <h3>Email</h3>
                                    <div class="inputprofile">
                                        <input type="text" value="<?= $email ?>" placeholder="Silahkan isi Alamat Email..." id="email" name="email" />
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <p id="error"><?= $error_email ?></p>
                                </div>
                                <div class="profileacc-info">
                                    <h3>Password</h3>
                                    <div class="inputprofile">
                                        <input type="text" value="<?= $password ?>" placeholder="Silahkan isi Password..." id="password" name="password" />
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <p id="error"><?= $error_password ?></p>
                                </div>
                            </div>
                            <div class="profileacc-wrapper-aninfo">
                                <div class="profileacc-info-desc">
                                    <h3>Deskripsi Perusahaan</h3>
                                    <div class="inputprofile">
                                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="textarea"><?= $deskripsi ?></textarea>
                                        <!-- <i class="fa-solid fa-pen"></i> -->
                                    </div>
                                    <p id="error"><?= $error_deskripsi ?></p>
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
                                            <a href="#" id="ya"><button type="button" onclick="closePopupedit()" class="btn-removeedit">
                                                    Batal
                                                </button></a>
                                        </div>
                                        <div class="kembali btn-profile">
                                            <a href="/client/myAccount"><i class="fa-solid fa-angles-left"></i>Kembali</a>
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
                    <li><a href="/client/vaksin">Vaksinasi</a></li>
                    <li><a href="11obat.html">Pembelian Obat</a></li>
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
    <script>
        // isi value di textarea
        var textarea = document.getElementById("deskripsi");


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