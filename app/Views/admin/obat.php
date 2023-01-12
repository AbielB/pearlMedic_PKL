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
    <div class="container-2">
        <div class="adminmenu">
            <div class="top">
                <div class="logo">
                    <img src="../img/logo/pearlmedic2.png" alt="" width="10%">
                    <h2><span>Pearl</span> Medic</h2>
                </div>
                <div class="close" id="close-btn">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="sidebar">
                <a href="/admin">
                    <i class="fa-solid fa-house" id="span"></i>
                    <h3>Dashboard</h3>
                </a>
                <a href="/admin/LayananMedical">
                    <i class="fa-solid fa-notes-medical"></i>
                    <h3>Layanan Medical</h3>
                </a>
                <a href="/admin/LayananObat" class="active" id="paragraph-change">
                    <i class="fa-solid fa-capsules"></i>
                    <h3>Layanan Obat</h3>
                </a>
                <a href="/admin/LayananDarurat">
                    <i class="fa-solid fa-truck-medical"></i>
                    <h3>Layanan Darurat</h3>
                </a>
                <a href="/admin/LayananVaksin">
                    <i class="fa-solid fa-syringe"></i>
                    <h3>Layanan Vaksin</h3>
                </a>
                <a href="/admin/DataPerusahaan">
                    <i class="fa-solid fa-city"></i>
                    <h3>Data Perusahaan</h3>
                </a>
                <a href="/admin/Logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <h3>Logout</h3>
                </a>
            </div>
        </div>

        <!-- MAIN MENU SECTION -->
        <main id="mainmenu">
            <h1><span>Layanan </span> Pembelian Obat</h1>

            <!-- Layanan Terbaru -->
            <div class="orderterbaru">
                <h2>Pesanan Obat Terbaru <span>* Belum Dilayani</span> </h2>
                <div class="search">
                    <input type="text" name="search" id="search" placeholder="Cari Pesanan Obat....">
                    <button type="submit" name="submit" id="submit"><i class="fa-solid fa-search"></i></button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Jenis Obat</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th><i class="fa-solid fa-cart-shopping yellow"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Obat Cair</td>
                            <td>50</td>
                            <td>
                                <div class="status">
                                    <select name="status" id="status" required>
                                        <option selected>
                                            <span class="red">Belum Dilayani</span>
                                        </option>
                                        <option value="1" class="yellow">Dalam Proses</option>
                                        <option value="2" class="green">Sudah Dilayani</option>
                                    </select>
                                    <i class="fa-solid fa-file-pen"></i>
                                </div>
                            </td>
                            <td><a href="keranjangobat.php" class="yellow">Lihat Keranjang </a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Obat Cair</td>
                            <td>50</td>
                            <td>
                                <div class="status">
                                    <select name="status" id="status" required>
                                        <option selected>
                                            <span class="red">Belum Dilayani</span>
                                        </option>
                                        <option value="1" class="yellow">Dalam Proses</option>
                                        <option value="2" class="green">Sudah Dilayani</option>
                                    </select>
                                    <i class="fa-solid fa-file-pen"></i>
                                </div>
                            </td>
                            <td><a href="keranjangobat.php" class="yellow">Lihat Keranjang </a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Obat Cair</td>
                            <td>50</td>
                            <td>
                                <div class="status">
                                    <select name="status" id="status" required>
                                        <option selected>
                                            <span class="red">Belum Dilayani</span>
                                        </option>
                                        <option value="1" class="yellow">Dalam Proses</option>
                                        <option value="2" class="green">Sudah Dilayani</option>
                                    </select>
                                    <i class="fa-solid fa-file-pen"></i>
                                </div>
                            </td>
                            <td><a href="keranjangobat.php" class="yellow">Lihat Keranjang </a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Obat Cair</td>
                            <td>50</td>
                            <td>
                                <div class="status">
                                    <select name="status" id="status" required>
                                        <option selected>
                                            <span class="red">Belum Dilayani</span>
                                        </option>
                                        <option value="1" class="yellow">Dalam Proses</option>
                                        <option value="2" class="green">Sudah Dilayani</option>
                                    </select>
                                    <i class="fa-solid fa-file-pen"></i>
                                </div>
                            </td>
                            <td><a href="keranjangobat.php" class="yellow">Lihat Keranjang </a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="orderterbaru">
                <h2>Pesanan Obat Terbaru <span class="yellow">* Dalam Proses Pelayanan</span> </h2>
                <div class="search">
                    <input type="text" name="search" id="search" placeholder="Cari Pesanan Obat....">
                    <button type="submit" name="submit" id="submit"><i class="fa-solid fa-search"></i></button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Jenis Obat</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th><i class="fa-solid fa-cart-shopping yellow"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Obat Cair</td>
                            <td>50</td>
                            <td>
                                <div class="status">
                                    <select class="dalamproses" name="status" id="status" required>
                                        <option selected>
                                            <span class="yellow">Dalam Proses</span>
                                        </option>
                                        <option value="1" class="red">Belum Dilayani</option>
                                        <option value="2" class="green">Sudah Dilayani</option>
                                    </select>
                                    <i class="fa-solid fa-file-pen" id="yellow"></i>
                                </div>
                            </td>
                            <td><a href="keranjangobat.php" class="yellow">Lihat Keranjang </a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Obat Cair</td>
                            <td>50</td>
                            <td>
                                <div class="status">
                                    <select class="dalamproses" name="status" id="status" required>
                                        <option selected>
                                            <span class="yellow">Dalam Proses</span>
                                        </option>
                                        <option value="1" class="red">Belum Dilayani</option>
                                        <option value="2" class="green">Sudah Dilayani</option>
                                    </select>
                                    <i class="fa-solid fa-file-pen" id="yellow"></i>
                                </div>
                            </td>
                            <td><a href="keranjangobat.php" class="yellow">Lihat Keranjang </a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Obat Cair</td>
                            <td>50</td>
                            <td>
                                <div class="status">
                                    <select class="dalamproses" name="status" id="status" required>
                                        <option selected>
                                            <span class="yellow">Dalam Proses</span>
                                        </option>
                                        <option value="1" class="red">Belum Dilayani</option>
                                        <option value="2" class="green">Sudah Dilayani</option>
                                    </select>
                                    <i class="fa-solid fa-file-pen" id="yellow"></i>
                                </div>
                            </td>
                            <td><a href="keranjangobat.php" class="yellow">Lihat Keranjang </a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Obat Cair</td>
                            <td>50</td>
                            <td>
                                <div class="status">
                                    <select class="dalamproses" name="status" id="status" required>
                                        <option selected>
                                            <span class="yellow">Dalam Proses</span>
                                        </option>
                                        <option value="1" class="red">Belum Dilayani</option>
                                        <option value="2" class="green">Sudah Dilayani</option>
                                    </select>
                                    <i class="fa-solid fa-file-pen" id="yellow"></i>
                                </div>
                            </td>
                            <td><a href="keranjangobat.php" class="yellow">Lihat Keranjang </a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="orderterbaru">
                <h2>Pesanan Obat Terbaru <span class="green">* Sudah Dilayani</span> </h2>
                <div class="search">
                    <input type="text" name="search" id="search" placeholder="Cari Pesanan Obat....">
                    <button type="submit" name="submit" id="submit"><i class="fa-solid fa-search"></i></button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Jenis Obat</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th><i class="fa-solid fa-cart-shopping yellow"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Obat Cair</td>
                            <td>50</td>
                            <td>
                                <div class="status">
                                    <select class="dalamproses1" name="status" id="status" required>
                                        <option selected>
                                            <span class="yellow">Sudah Dilayani</span>
                                        </option>
                                        <option value="1" class="red">Belum Dilayani</option>
                                        <option value="2" class="yellow">Dalam Proses</option>
                                    </select>
                                    <i class="fa-solid fa-file-pen" id="green"></i>
                                </div>
                            </td>
                            <td><a href="keranjangobat.php" class="yellow">Lihat Keranjang </a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Obat Cair</td>
                            <td>50</td>
                            <td>
                                <div class="status">
                                    <select class="dalamproses1" name="status" id="status" required>
                                        <option selected>
                                            <span class="yellow">Sudah Dilayani</span>
                                        </option>
                                        <option value="1" class="red">Belum Dilayani</option>
                                        <option value="2" class="yellow">Dalam Proses</option>
                                    </select>
                                    <i class="fa-solid fa-file-pen" id="green"></i>
                                </div>
                            </td>
                            <td><a href="keranjangobat.php" class="yellow">Lihat Keranjang </a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Obat Cair</td>
                            <td>50</td>
                            <td>
                                <div class="status">
                                    <select class="dalamproses1" name="status" id="status" required>
                                        <option selected>
                                            <span class="yellow">Sudah Dilayani</span>
                                        </option>
                                        <option value="1" class="red">Belum Dilayani</option>
                                        <option value="2" class="yellow">Dalam Proses</option>
                                    </select>
                                    <i class="fa-solid fa-file-pen" id="green"></i>
                                </div>
                            </td>
                            <td><a href="keranjangobat.php" class="yellow">Lihat Keranjang </a></td>
                        </tr>
                        <tr>
                            <td>Petronas Nasional Berhad</td>
                            <td>Obat Cair</td>
                            <td>50</td>
                            <td>
                                <div class="status">
                                    <select class="dalamproses1" name="status" id="status" required>
                                        <option selected>
                                            <span class="yellow">Sudah Dilayani</span>
                                        </option>
                                        <option value="1" class="red">Belum Dilayani</option>
                                        <option value="2" class="yellow">Dalam Proses</option>
                                    </select>
                                    <i class="fa-solid fa-file-pen" id="green"></i>
                                </div>
                            </td>
                            <td><a href="keranjangobat.php" class="yellow">Lihat Keranjang </a></td>
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
                <!-- <div class="akunperusahaan">
                    <h2>Jenis Obat-Obatan</h2>
                    <div class="item online grid obat_item">
                        <h1>Kategori Obat</h1>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Obat Cair</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-wine-bottle"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Kapsul</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-capsules"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Tablet</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-tablets"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Inhaler</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-lungs"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Obat Suntik</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-syringe"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Implan atau Obat Tempel</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-bandage"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Antibiotik</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-bacteria"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Obat Tidur</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-bed"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Antidiare</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-tablets"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Antihipertensi</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-temperature-arrow-down"></i>
                            </div>
                        </div>
                        <div class="kategoriobat_wrapper">
                            <div class="obatinfo">
                                <a href="#">Antivirus</a>
                            </div>
                            <div class="obaticon">
                                <i class="fa-solid fa-vial-virus"></i>
                            </div>
                        </div>
                    </div>
                    <br>
                </div> -->
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