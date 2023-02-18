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
            <h3 class="path"><a href="/admin/DataPerusahaan">Data Perusahaan</a> / <a
                    href="details_data_perusahaan.php">Detail Akun</a> / <span>Edit Profil</span>
            </h3>

            <div class="profilperusahaan">
                <h2>Edit Profil Akun Perusahaan Mitra</h2>
                <div class="wrapper">
                    <div class="img_perusahaan">
                        <!-- <img src="img/assets/profilperusahaan1.png" alt="photo"> -->
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                    <form action="/admin/PostEdit" method="post">
                        <?= csrf_field(); ?>
                        <div class="profilperusahaan_info">
                            <?php
                            $namaPerusahaan = $rowDetails[0]->nama_perusahaan;
                            $email = $rowDetails[0]->email;
                            $no_telp = $rowDetails[0]->no_telp;
                            $tambang = '';
                            $energi = '';
                            $kesehatan = '';
                            $transportasi = '';
                            $lainnya = '';
                            if ($rowDetails[0]->bidang == 'Tambang/Minyak')
                                $tambang = "selected";
                            else if ($rowDetails[0]->bidang == 'Energi')
                                $energi = "selected";
                            else if ($rowDetails[0]->bidang == 'Kesehatan')
                                $kesehatan = "selected";
                            else if ($rowDetails[0]->bidang == 'Transportasi')
                                $transportasi = "selected";
                            else
                                $lainnya = "selected";
                            $alamat = $rowDetails[0]->alamat;
                            $deskripsi = $rowDetails[0]->deskripsi;
                            echo '<div class="profilperusahaan_info_text">
                        <h3>Nama Perusahaan</h3>
                        <div class="input_wrapper">
                            <input type="text" name="nama_perusahaan" id="nama_perusahaan" required
                                value="' . $namaPerusahaan . '" placeholder="Masukan Nama...">
                            <i class="fa-solid fa-user-pen"></i>
                        </div>
                    </div>
                    
                    <div class="profilperusahaan_info_text">
                        <h3>Bidang</h3>
                        <div class="input_wrapper">
                        <select name="bidang" id="bidang" class="bidang-select">
                        <option value="Tambang/Minyak" ' . $tambang . '>Tambang/Minyak</option>
                        <option value="Energi" ' . $energi . '>Energi</option>
                        <option value="Kesehatan" ' . $kesehatan . '>Kesehatan</option>
                        <option value="Transportasi" ' . $transportasi . '>Transportasi</option>
                        <option value="Lainnya" ' . $lainnya . '>Lainnya</option>
                      </select>
                            <i class="fa-solid fa-user-pen"></i>
                        </div>
                    </div>
                    <style>
                    .bidang-select{
                        width: 100%;
                        height: 100%;
                        border: none;
                        background: none;
                        outline: none;
                        font-size: 12px;
                        color: #000;
                        padding: 0 1rem;
                        cursor: pointer;
                        text-align: left;
                        color : #9F8772;
                    }
                    </style>
                  
                    <div class="profilperusahaan_info_text">
                        <h3>Alamat Lengkap</h3>
                        <div class="input_wrapper">
                            <input type="text" name="alamat" id="alamat" required
                                value="' . $alamat . '"
                                placeholder="Masukan Alamat...">
                            <i class="fa-solid fa-user-pen"></i>
                        </div>
                    </div>
                    <div class="profilperusahaan_info_text">
                        <h3>Email</h3>
                        <div class="input_wrapper">
                            <input type="text" name="email" id="email" required value="' . $email . '"
                                placeholder="Masukan Email...">
                            <i class="fa-solid fa-user-pen"></i>
                        </div>
                    </div>
                    <div class="profilperusahaan_info_text">
                        <h3>Nomor Telpon</h3>
                        <div class="input_wrapper">
                            <input type="text" name="no_telp" id="email" required value="' . $no_telp . '"
                                placeholder="Masukan Nomor Telpon...">
                            <i class="fa-solid fa-user-pen"></i>
                        </div>
                    </div>
                </div>
                <div class="profilperusahaan_info_text grid">
                    <h3>Deskripsi Perusahaan</h3>
                    <div class="input_wrapper1">
                        <textarea name="deskripsi" id="deskripsi textarea_perusahaan" cols="30" rows="10" required
                            placeholder="Isi Deskripsi Perusahaan...">' . $deskripsi . '</textarea>
                    </div>
                </div>'; ?>

                            <!--hidden input id-->
                            <input type="hidden" name="id" value="<?php echo $rowDetails[0]->id; ?>" />
                            <div class="editdelete_profil">
                                <input type="submit" class="btn btn-primary edit" value="Edit Profil" />
                            </div>
                    </form>
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
                        <p>Hallo, <span><?php echo $name ?></span> </p>
                        <p class="text-muted">Admin</p>
                    </div>
                </div>
            </div>

            <!-- <div class="bottom">
                <div class="akunperusahaan">
                    <h2>Akun Perusahaan Aktif</h2>
                    <div class="item online">
                        <div class="icon">
                            <i class="fa-solid fa-building-user"></i>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>Petronas Nasional Berhad</h3>
                                <p class="text-muted">Status : Aktif </p>
                            </div>
                            <a href="#" class="red">Details</a>
                        </div>
                    </div>
                    <div class="item online">
                        <div class="icon">
                            <i class="fa-solid fa-building-user"></i>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>Petronas Nasional Berhad</h3>
                                <p class="text-muted">Status : Aktif </p>
                            </div>
                            <a href="#" class="red">Details</a>
                        </div>
                    </div>
                    <div class="item online">
                        <div class="icon">
                            <i class="fa-solid fa-building-user"></i>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>Petronas Nasional Berhad</h3>
                                <p class="text-muted">Status : Aktif </p>
                            </div>
                            <a href="#" class="red">Details</a>
                        </div>
                    </div>
                    <div class="item online">
                        <div class="icon">
                            <i class="fa-solid fa-building-user"></i>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>Petronas Nasional Berhad</h3>
                                <p class="text-muted">Status : Aktif </p>
                            </div>
                            <a href="#" class="red">Details</a>
                        </div>
                    </div>
                    <div class="item selengkapnya">
                        <div class="selengkapnya1">
                            <i class="fa-solid fa-building-circle-arrow-right"></i>
                            <h3><a href="/admin/DataPerusahaan">Lihat Selengkapnya</a></h3>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- BAGIAN KANAN MAIN MENU / DETAILS MENU -->


    <script src="./data.js"></script>
    <script>
    // isi value di textarea
    var textarea = document.getElementById('deskripsi textarea_perusahaan');


    // textarea color and font
    textarea.style.color = '#9F8772';
    textarea.style.fontFamily = 'Lora', 'serif';
    </script>
</body>

</html>