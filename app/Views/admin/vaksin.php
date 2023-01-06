<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Favicon -->
    <link rel="shortcut icon" href="./img/logo/pearlmedic.png" type="image/x-icon">
    <!-- END Link Favicon -->
    <!-- Link CSS -->
    <link rel="stylesheet" href="./css/style.min.css?v=<?php echo time(); ?>">
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
                    <i class="fa-solid fa-capsules" id="span"></i>
                    <h3>Layanan Obat</h3>
                </a>
                <a href="darurat.php">
                    <i class="fa-solid fa-truck-medical"></i>
                    <h3>Layanan Darurat</h3>
                </a>
                <a href="vaksin.php" class="active">
                    <i class="fa-solid fa-syringe"></i>
                    <h3>Layanan Vaksin</h3>
                </a>
                <a href="dataperusahaan.php">
                    <i class="fa-solid fa-city"></i>
                    <h3>Data Perusahaan</h3>
                </a>
                <!-- <a href="pesan.php">
                    <i class="fa-solid fa-envelope"></i>
                    <h3>Pesan</h3>
                    <p class="message-count">12</p>
                </a> -->
                <a href="login.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <h3>Logout</h3>
                </a>
            </div>
        </div>

        <!-- END ADMIN MENU SECTION -->
        <!-- MAIN MENU SECTION -->
        <main id="mainmenu">
            <h1><span>Layanan </span> Vaksinasi</h1>
            <div class="date">
                <input type="date" name="date" id="date">
            </div>
            <!-- Layanan Terbaru -->
            <div class="orderterbaru">
                <h2>Pesanan Vaksinasi Terbaru </h2>
                <div class="search">
                    <input type="text" name="search" id="search" placeholder="Cari Pesanan Vaksin....">
                    <button type="submit" name="submit" id="submit"><i class="fa-solid fa-search"></i></button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Jenis Vaksin</th>
                            <th>Jumlah Karyawan</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Covid-19 Swap</td>
                            <td>50</td>
                            <td class="red">Belum Dilayani</td>
                            <td><a href="#">Details</a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Covid-19 Swap</td>
                            <td>50</td>
                            <td class="yellow">Dalam Proses</td>
                            <td><a href="#">Details</a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Covid-19 Swap</td>
                            <td>50</td>
                            <td class="green">Sudah Dilayani</td>
                            <td><a href="#">Details</a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Influenza</td>
                            <td>50</td>
                            <td class="red">Belum Dilayani</td>
                            <td><a href="#">Details</a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Influenza</td>
                            <td>50</td>
                            <td class="yellow">Dalam Proses</td>
                            <td><a href="#">Details</a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Influenza</td>
                            <td>50</td>
                            <td class="green">Sudah Dilayani</td>
                            <td><a href="#">Details</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END Layanan Terbaru -->
            <br>
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
                    <h2>Jenis Vaksinasi</h2>
                    <div class="item online grid obat_item">
                        <h1>Kategori Vaksin</h1>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Influenza</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-viruses"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Tdap</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-virus"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Hepatitis A dan B</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-heart-pulse"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">HPV</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-lungs"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Pneumokokus</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-vial-virus"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Measles and Rubella</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-baby"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">BCG</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-virus-slash"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Cacar Air</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-hand-dots"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Herpes Zoster</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-flask-vial"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Covid-19</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-virus-covid"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Covid-19 Booster</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-syringe"></i>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <!-- <div class="details">
                <h2>Details Pesanan Obat</h2>
                <div class="details-content">
                    <div class="details-content-left">
                        <div class="details-content-left-top">
                            <div class="details-content-left-top-left">
                                <h3>Nama Perusahaan</h3>
                                <h3>Jenis Obat</h3>
                                <h3>Jumlah</h3>
                                <h3>Status</h3>
                            </div>
                            <div class="details-content-left-top-right">
                                <h3>: Petronas Nasional Berhad</h3>
                                <h3>: Obat Cair</h3>
                                <h3>: 50</h3>
                                <h3>: Belum Dilayani</h3>
                            </div>
                        </div>
                        <div class="details-content-left-bottom">
                            <h3>Alamat Perusahaan</h3>
                            <h3>: Jalan Raya Petronas, Kuala Lumpur, Malaysia</h3>
                        </div>
                    </div>
                    <div class="details-content-right">
                        <div class="details-content-right-top">
                            <h3>Waktu Pemesanan</h3>
                            <h3>: 12/12/2020 12:00</h3>
                        </div>
                        <div class="details-content-right-bottom">
                            <h3>Waktu Pengiriman</h3>
                            <h3>: 12/12/2020 12:00</h3>
                        </div>
                    </div>
                </div>
                <div class="details-button">
                    <button class="btn btn-primary">Terima</button>
                    <button class="btn btn-danger">Tolak</button>
                </div>
            </div> -->
            <!-- BAGIAN KANAN MAIN MENU / DETAILS MENU -->
        </div>

        <script src="./data.js"></script>
</body>

</html>