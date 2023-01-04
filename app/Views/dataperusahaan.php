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
        <main id="mainmenu" class="full">
            <h1><span>Data Akun </span>Perusahaan</h1>
            <div class="date">
                <input type="date" name="date" id="date">
            </div>
            <!-- Layanan Terbaru -->
            <div class="orderterbaru">
                <!-- <h2>Data Akun Perusahaan </h2> -->
                <div class="search">
                    <input type="text" name="search" id="search" placeholder="Cari Nama Perusahaan....">
                    <button type="submit" name="submit" id="submit"><i class="fa-solid fa-search"></i></button>
                </div>
                <table class="tabelperusahaan">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Bidang</th>
                            <th>Kota</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Petronas Nasional Berhad</td>
                            <td>Oil and Gas Company</td>
                            <td>Bandung</td>
                            <td>Petronas@gmail.com</td>
                            <td><a href="details_data_perusahaan.php" class="yellow">Detail Akun</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Petronas Nasional Berhad</td>
                            <td>Oil and Gas Company</td>
                            <td>Bandung</td>
                            <td>Petronas@gmail.com</td>
                            <td><a href="details_data_perusahaan.php" class="yellow">Detail Akun</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Petronas Nasional Berhad</td>
                            <td>Oil and Gas Company</td>
                            <td>Bandung</td>
                            <td>Petronas@gmail.com</td>
                            <td><a href="details_data_perusahaan.php" class="yellow">Detail Akun</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Petronas Nasional Berhad</td>
                            <td>Oil and Gas Company</td>
                            <td>Bandung</td>
                            <td>Petronas@gmail.com</td>
                            <td><a href="details_data_perusahaan.php" class="yellow">Detail Akun</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Petronas Nasional Berhad</td>
                            <td>Oil and Gas Company</td>
                            <td>Bandung</td>
                            <td>Petronas@gmail.com</td>
                            <td><a href="details_data_perusahaan.php" class="yellow">Detail Akun</a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Petronas Nasional Berhad</td>
                            <td>Oil and Gas Company</td>
                            <td>Bandung</td>
                            <td>Petronas@gmail.com</td>
                            <td><a href="details_data_perusahaan.php" class="yellow">Detail Akun</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
                    <h2>Tambah Akun Perusahaan</h2>
                    <div class="item online grid">
                        <form action="" method="post" class="form_akun_perusahaan">
                            <div class="form-group">
                                <label for="nama_perusahaan">Nama Perusahaan</label>
                                <div class="form-group-logo">
                                    <i class="fa-solid fa-building-user"></i>
                                    <input type="text" name="nama_perusahaan" id="nama_perusahaan"
                                        placeholder="Masukkan Nama Perusahaan..." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username_perusahaan">Username</label>
                                <div class="form-group-logo">
                                    <i class="fa-solid fa-user-tie"></i>
                                    <input type="text" name="username_perusahaan" id="username_perusahaan"
                                        placeholder="Masukkan Username..." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bidang">Bidang Perusahaan</label>
                                <div class="form-group-logo">
                                    <i class="fa-solid fa-address-card"></i>
                                    <input type="text" name="bidang" id="bidang" placeholder="Masukkan Bidang...."
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <div class="form-group-logo">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <!-- input provinsi di indonesia -->
                                    <select name="provinsi" id="provinsi" required>
                                        <option disabled selected>----- Pilih Provinsi ----- </option>
                                        <option value="Aceh">Aceh</option>
                                        <option value="Sumatera Utara">Sumatera Utara</option>
                                        <option value="Sumatera Barat">Sumatera Barat</option>
                                        <option value="Riau">Riau</option>
                                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                                        <option value="Jambi">Jambi</option>
                                        <option value="Bengkulu">Bengkulu</option>
                                        <option value="Sumatera Selatan">Sumatera Selatan</option>
                                        <option value="Lampung">Lampung</option>
                                        <option value="Bangka Belitung">Bangka Belitung</option>
                                        <option value="Banten">Banten</option>
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="DI Yogyakarta">DI Yogyakarta</option>
                                        <option value="Jawa Timur">Jawa Timur</option>
                                        <option value="Bali">Bali</option>
                                        <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                        <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                        <option value="Kalimantan Barat">Kalimantan Barat</option>
                                        <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                        <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                        <option value="Kalimantan Timur">Kalimantan Timur</option>
                                        <option value="Kalimantan Utara">Kalimantan Utara</option>
                                        <option value="Sulawesi Utara">Sulawesi Utara</option>
                                        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                        <option value="Gorontalo">Gorontalo</option>
                                        <option value="Sulawesi Barat">Sulawesi Barat</option>
                                        <option value="Maluku">Maluku</option>
                                        <option value="Maluku Utara">Maluku Utara</option>
                                        <option value="Papua Barat">Papua Barat</option>
                                        <option value="Papua">Papua</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <div class="form-group-logo">
                                    <i class="fa-solid fa-city"></i>
                                    <!-- input kota di indonesia -->
                                    <select name="kota" id="kota" required>
                                        <option disabled selected>----- Pilih Kota -----</option>
                                        <option value="jakarta">jakarta</option>
                                        <option value="bandung">bandung</option>
                                        <option value="surabaya">surabaya</option>
                                        <option value="medan">medan</option>
                                        <option value="semarang">semarang</option>
                                        <option value="makassar">makassar</option>
                                        <option value="yogyakarta">yogyakarta</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_alamat">Alamat Lengkap Perusahaan</label>
                                <div class="form-group-logo" id="form-group-logo">
                                    <textarea name="deskripsi_alamat" id="deskripsi_alamat" cols="30" rows="10"
                                        placeholder="Deskripsikan alamat...." required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_telp">Nomor Telephon</label>
                                <div class="form-group-logo">
                                    <i class="fa-solid fa-phone-volume"></i>
                                    <input type="text" name="no_telp" id="no_telp" placeholder="Masukkan Nomor...."
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Perusahaan</label>
                                <div class="form-group-logo">
                                    <i class="fa-solid fa-envelope"></i>
                                    <input type="text" name="email" id="email" placeholder="Masukkan Email...."
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_perusahaan">Deskripsi Perusahaan</label>
                                <div class="form-group-logo" id="form-group-logo">
                                    <textarea name="deskripsi_perusahaan" id="deskripsi_perusahaan" cols="30" rows="10"
                                        placeholder="Deskripsikan Perusahaan terkait ...." required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit">
                                    <i class="fa-solid fa-user-plus"></i>
                                    Tambah Akun
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BAGIAN KANAN MAIN MENU / DETAILS MENU -->


    <script src="./data.js"></script>
    <script src="popup.js"></script>
</body>

</html>