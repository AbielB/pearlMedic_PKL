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

            <!-- Layanan Terbaru -->
            <div class="orderterbaru">
                <!-- <h2>Data Akun Perusahaan </h2> -->
                <form action="DataPerusahaan" method="get">
                    <div class="search">
                        <input type="text" name="search" id="search" placeholder="Cari Nama Perusahaan....">
                        <button type="submit" name="submit" id="submit"><i class="fa-solid fa-search"></i></button>
                    </div>
                </form>
                <table class="tabelperusahaan">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Bidang</th>
                            <th>Email</th>
                            <th>Status</th>
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
                                $status = $row->status;
                                if ($status == 1) {
                                    $status = "Aktif";
                                } else {
                                    $status = "Non Aktif";
                                }
                                echo '<tr>
                            <td>' . $i . '</td>
                            <td>' . $namaPerusahaan . '</td>
                            <td>' . $bidang . '</td>
                            <td>' . $email . '</td>
                            <td>' . $status . '</td>
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
                        <form action="/admin/BuatPerusahaan" method="post" class="form_akun_perusahaan">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="nama_perusahaan">Nama Perusahaan</label>
                                <div class="form-group-logo">
                                    <i class="fa-solid fa-building-user"></i>
                                    <input type="text" name="nama_perusahaan" id="nama_perusahaan"
                                        placeholder="Masukkan Nama Perusahaan..." required>
                                </div>
                                <p class="text-danger"><?php echo $error_namaPerusahaan ?></p>
                            </div>

                            <div class="form-group">
                                <label for="bidang">Bidang Perusahaan</label>
                                <div class="form-group-logo">
                                    <i class="fa-solid fa-address-card"></i>
                                    <select name="bidang" id="bidang">
                                        <option value="">--Pilih Bidang--</option>
                                        <option value="Tambang/Minyak">Tambang/Minyak</option>
                                        <option value="Energi">Energi</option>
                                        <option value="Kesehatan">Kesehatan</option>
                                        <option value="Transportasi">Transportasi</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <p class="text-danger"><?php echo $error_bidang ?></p>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi_alamat">Alamat Lengkap Perusahaan</label>
                                <div class="form-group-logo" id="form-group-logo">
                                    <textarea name="alamat" id="deskripsi_alamat" cols="30" rows="10"
                                        placeholder="Deskripsikan alamat...." required></textarea>
                                </div>
                                <p class="text-danger"><?php echo $error_alamat ?></p>
                            </div>

                            <div class="form-group">
                                <label for="email">Email Perusahaan</label>
                                <div class="form-group-logo">
                                    <i class="fa-solid fa-envelope"></i>
                                    <input type="text" name="email" id="email" placeholder="Masukkan Email...."
                                        required>
                                </div>
                                <p class="text-danger"><?php echo $error_email ?></p>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_perusahaan">Deskripsi Perusahaan</label>
                                <div class="form-group-logo" id="form-group-logo">
                                    <textarea name="deskripsi" id="deskripsi_perusahaan" cols="30" rows="10"
                                        placeholder="Deskripsikan Perusahaan terkait ...." required></textarea>
                                </div>
                                <p class="text-danger"><?php echo $error_deskripsi ?></p>
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