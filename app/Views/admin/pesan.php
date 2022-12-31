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
                <a href="dataperusahaan.php">
                    <i class="fa-solid fa-city"></i>
                    <h3>Data Perusahaan</h3>
                </a>
                <a href="pesan.php" class="active">
                    <i class="fa-solid fa-envelope" id="span"></i>
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
        <!-- Title Menu -->
        <main id="mainmenu">
            <h1 id="color-change2"><span>Admin </span> Dashboard</h1>
            <div class="date">
                <input type="date" name="date" id="date">
            </div>
            <!-- END Title Menu -->
            <!-- Layanan Terbaru -->
            <div class="orderterbaru">
                <h2> Pesan Feedback Pelanggan </h2>
                <div class="search">
                    <input type="text" name="search" id="search" placeholder="Cari Pesan....">
                    <button type="submit" name="submit" id="submit"><i class="fa-solid fa-search"></i></button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Subjek</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Kritik Pengantaran obat</td>
                            <td>petronas@gmail.com</td>
                            <td class="red">Belum Dibalas</td>
                            <td><a href="detailspesan.php">Details</a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Kritik Pengantaran obat</td>
                            <td>petronas@gmail.com</td>
                            <td class="green">Sudah Dibalas</td>
                            <td><a href="detailspesan.php">Details</a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Kritik Pengantaran obat</td>
                            <td>petronas@gmail.com</td>
                            <td class="green">Sudah Dibalas</td>
                            <td><a href="detailspesan.php">Details</a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Kritik Pengantaran obat</td>
                            <td>petronas@gmail.com</td>
                            <td class="red">Belum Dibalas</td>
                            <td><a href="detailspesan.php">Details</a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Kritik Pengantaran obat</td>
                            <td>petronas@gmail.com</td>
                            <td class="red">Belum Dibalas</td>
                            <td><a href="detailspesan.php">Details</a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Kritik Pengantaran obat</td>
                            <td>petronas@gmail.com</td>
                            <td class="green">Sudah Dibalas</td>
                            <td><a href="detailspesan.php">Details</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <!-- END Layanan Terbaru -->

        </main>
        <!-- END MAIN MENU SECTION -->
        <!-- BAGIAN KANAN MAIN MENU / DETAILS MENU -->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <!-- <div class="theme-toggler">
                    <i class="fa-solid fa-sun active" id="white-btn"></i>
                    <i class="fa-solid fa-moon" id="black-btn"></i>
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

            <script src="./data.js"></script>
</body>

</html>