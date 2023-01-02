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
                    <img src="../img/logo/pearlmedic2.png" alt="" width="10%">
                    <h2 id="color-change"><span>Pearl</span> Medic</h2>
                </div>
                <div class="close" id="close-btn">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="sidebar">
                <div class="sidebar">
                    <a href="/admin">
                        <i class="fa-solid fa-house" id="span"></i>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="/admin/LayananMedical">
                        <i class="fa-solid fa-notes-medical"></i>
                        <h3>Layanan Medical</h3>
                    </a>
                    <a href="/admin/LayananObat" id="paragraph-change">
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
                    <a href="/admin/DataPerusahaan" class="active">
                        <i class="fa-solid fa-city"></i>
                        <h3>Data Perusahaan</h3>
                    </a>
                    <a href="/admin/Logout">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <h3>Logout</h3>
                    </a>
                </div>
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
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $i = 0;
                            foreach ($rowPerusahaan as $row) {
                                $i++;
                                $namaPerusahaan = $row->nama_perusahaan;
                                $id = $row->id;
                                $bidang = $row->bidang;
                                $email = $row->email;
                                echo '<tr>
                            <td>' . $i . '</td>
                            <td>' . $namaPerusahaan . '</td>
                            <td>' . $bidang . '</td>
                            <td>' . $email . '</td>
                            <td><a href="/admin/DetailsDataPerusahaan?id=' . $id . '" class="yellow">Detail Akun</a></td>
                        </tr>
                        ';
                            } ?>
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
                        <p>Hallo, <span><?php echo $name ?></span> </p>
                        <p class="text-muted">Admin</p>
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
</body>

</html>