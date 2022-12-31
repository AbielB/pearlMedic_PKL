<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url("img/logo/pearlmedic.png"); ?>" type="image/x-icon">
    <!-- END Link Favicon -->
    <!-- CSS Links -->
    <link rel="stylesheet" href=" <?php echo base_url("css/style.min.css?v=" . time()); ?>">
    <!-- END Link CSS -->
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- END Box Icons -->
    <!-- LINK FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- END LINK FONT AWESOME -->
    <title>Admin || Pearl Medic</title>
</head>

<body>
    <!-- ADMIN MENU SECTION -->
    <div class="container">
        <div class="adminmenu">
            <div class="top">
                <div class="logo">
                    <img src="./img/logo/pearlmedic2.png" alt="" width="10%">
                    <h2><span>Pearl</span> Medic</h2>
                </div>
                <div class="close" id="close-btn">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="sidebar">
                <a href="index.php">
                    <i class="fa-solid fa-house"></i>
                    <h3>Dashboard</h3>
                </a>
                <a href="medical.php">
                    <i class="fa-solid fa-notes-medical"></i>
                    <h3>Layanan Medical</h3>
                </a>
                <a href="obat.php">
                    <i class="fa-solid fa-capsules"></i>
                    <h3>Layanan Obat</h3>
                </a>
                <a href="darurat.php">
                    <i class="fa-solid fa-truck-medical"></i>
                    <h3>Layanan Darurat</h3>
                </a>
                <a href="vaksin.php">
                    <i class="fa-solid fa-syringe"></i>
                    <h3>Layanan Vaksin</h3>
                </a>
                <a href="dataperusahaan.php" class="active">
                    <i class="fa-solid fa-city" id="span"></i>
                    <h3>Data Perusahaan</h3>
                </a>
                <a href="pesan.php">
                    <i class="fa-solid fa-envelope"></i>
                    <h3>Pesan</h3>
                    <p class="message-count">12</p>
                </a>
                <a href="login.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <h3>Logout</h3>
                </a>
            </div>
        </div>

        <!-- END ADMIN MENU SECTION -->
        <!-- MAIN MENU SECTION -->
        <main id="mainmenu" class="full">
            <h1><span>Data Akun </span>Perusahaan</h1>
            <h3 class="path"><a href="pesan.php">Pesan</a> / <span>Details Feedback</span> </h3>
            <div class="date">
                <input type="date" name="date" id="date">
            </div>
            <div class="profilperusahaan">
                <h2>Detail Feedback Pelanggan</h2>
                <div class="wrapper">
                    <div class="img_perusahaan">
                        <!-- <img src="img/assets/profilperusahaan1.png" alt="photo"> -->
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                    <div class="profilperusahaan_info">
                        <!-- <div class="profilperusahaan_info_text">
                            <h3>Nama Perusahaan</h3>
                            <p>Petronas Nasional Berhad</p>
                        </div> -->
                        <div class="profilperusahaan_info_text">
                            <h3>Username Akun</h3>
                            <p>Petronas3008</p>
                        </div>
                        <!-- <div class="profilperusahaan_info_text">
                            <h3>Bidang</h3>
                            <p>Perusahaan minyak dan gas</p>
                        </div> -->
                        <!-- <div class="profilperusahaan_info_text">
                            <h3>Provinsi</h3>
                            <p>Jawa Timur</p>
                        </div>
                        <div class="profilperusahaan_info_text">
                            <h3>Kota</h3>
                            <p>Madura</p>
                        </div>
                        <div class="profilperusahaan_info_text">
                            <h3>Alamat Lengkap</h3>
                            <p>Jalan Sultan Ismail, Kota Madura, Jawa Timur, Indonesia</p>
                        </div> -->
                        <div class="profilperusahaan_info_text">
                            <h3>Nomor Telepon</h3>
                            <p>081234567890</p>
                        </div>
                        <div class="profilperusahaan_info_text">
                            <h3>Email</h3>
                            <p>Petronas3008@gmail.com</p>
                        </div>
                        <div class="profilperusahaan_info_text">
                            <h3>Subject</h3>
                            <p>Menanyakan kondisi pesanan vaksin covid-19</p>
                        </div>
                    </div>
                    <div class="profilperusahaan_info_text grid">
                        <h3>Isi Pesan</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique harum sunt qui facere
                            recusandae nisi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi officiis
                            unde magni saepe amet voluptatibus tempora quo esse! Adipisci, dolores.</p>
                    </div>
                    <div class="editdelete_profil">
                        <a href="#" class="btn btn-primary edit"><i class="fa-solid fa-comment-dots"></i>Balas Pesan</a>
                        <a href="#" class="btn btn-danger hapus"><i class="fa-solid fa-trash"></i>Hapus Pesan</a>
                    </div>
                </div>
            </div>
        </main>
        <!-- END MAIN MENU SECTION -->
        <!-- BAGIAN KANAN MAIN MENU / DETAILS MENU -->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <!-- <div class="theme-toggler">
                    <i class="fa-solid fa-sun active"></i>
                    <i class="fa-solid fa-moon"></i>
                </div> -->
                <div class="profile">
                    <div class="info">
                        <p>Hallo, <span>Hanif</span> </p>
                        <p class="text-muted">Admin</p>
                    </div>
                    <div class="profile-photo">
                        <img src="./img/assets/fotocandid3.png" alt="">
                    </div>
                </div>
            </div>

            <div class="bottom">
                <div class="akunperusahaan">
                    <h2>Feedback Pelanggan</h2>
                    <div class="item online grid">
                        <div class="flex-dir">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="right">
                                <div class="info">
                                    <h3>Petronas Nasional Berhad</h3>
                                    <p class="text-muted">Subject : <span>Saran Terhadap layanan vaksin</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-dir">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="right">
                                <div class="info">
                                    <h3>Petronas Nasional Berhad</h3>
                                    <p class="text-muted">Subject : <span>Kritik Tentang Keterlambatan Pengantaran
                                            Obat</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-dir">
                            <div class="selengkapnya2">
                                <i class="fa-solid fa-comments"></i>
                                <a href="pesan.php">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BAGIAN KANAN MAIN MENU / DETAILS MENU -->


    <script src="./data.js"></script>
</body>

</html>