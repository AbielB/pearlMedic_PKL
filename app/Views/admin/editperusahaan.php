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
                    <img src="img/logo/pearlmedic2.png" alt="" width="10%">
                    <h2><span>Pearl</span> Medic</h2>
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
            <h3 class="path"><a href="dataperusahaan.php">Data Perusahaan</a> / <a
                    href="details_data_perusahaan.php">Detail Akun</a> / <span>Edit Profil</span>
            </h3>
            <div class="date">
                <input type="date" name="date" id="date">
            </div>
            <div class="profilperusahaan">
                <h2>Edit Profil Akun Perusahaan Mitra</h2>
                <div class="wrapper">
                    <div class="img_perusahaan">
                        <!-- <img src="img/assets/profilperusahaan1.png" alt="photo"> -->
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                    <div class="profilperusahaan_info">
                        <div class="profilperusahaan_info_text">
                            <h3>Nama Perusahaan</h3>
                            <div class="input_wrapper">
                                <input type="text" name="nama_perusahaan" id="nama_perusahaan" required
                                    value="Petronas Nasional Berhad" placeholder="Masukan Nama...">
                                <i class="fa-solid fa-user-pen"></i>
                            </div>
                        </div>
                        <div class="profilperusahaan_info_text">
                            <h3>Username Akun</h3>
                            <div class="input_wrapper">
                                <input type="text" name="username" id="username" required value="Petronas"
                                    placeholder="Masukan Username...">
                                <i class="fa-solid fa-user-pen"></i>
                            </div>
                        </div>
                        <div class="profilperusahaan_info_text">
                            <h3>Bidang</h3>
                            <div class="input_wrapper">
                                <input type="text" name="bidang" id="bidang" required
                                    value="Pertambangan Minyak dan Gas" placeholder="Masukan Bidang...">
                                <i class="fa-solid fa-user-pen"></i>
                            </div>
                        </div>
                        <div class="profilperusahaan_info_text">
                            <h3>Provinsi</h3>
                            <div class="input_wrapper">
                                <input type="text" name="provinsi" id="provinsi" required value="Jawa Timur"
                                    placeholder="Masukan Provinsi...">
                                <i class="fa-solid fa-user-pen"></i>
                            </div>
                        </div>
                        <div class="profilperusahaan_info_text">
                            <h3>Kota</h3>
                            <div class="input_wrapper">
                                <input type="text" name="provinsi" id="provinsi" required value="Jawa Timur"
                                    placeholder="Masukan Provinsi...">
                                <i class="fa-solid fa-user-pen"></i>
                            </div>
                        </div>
                        <div class="profilperusahaan_info_text">
                            <h3>Alamat Lengkap</h3>
                            <div class="input_wrapper">
                                <input type="text" name="alamat" id="alamat" required
                                    value="Jl. Raya Kedungmundu No. 3008, Kedungmundu, Kec. Kedungmundu, Kabupaten Malang, Jawa Timur 65152"
                                    placeholder="Masukan Alamat...">
                                <i class="fa-solid fa-user-pen"></i>
                            </div>
                        </div>
                        <div class="profilperusahaan_info_text">
                            <h3>Nomor Telepon</h3>
                            <div class="input_wrapper">
                                <input type="text" name="nomor_telepon" id="nomor_telepon" required value="081234567890"
                                    placeholder="Masukan Nomor Telepon...">
                                <i class="fa-solid fa-user-pen"></i>
                            </div>
                        </div>
                        <div class="profilperusahaan_info_text">
                            <h3>Email</h3>
                            <div class="input_wrapper">
                                <input type="text" name="email" id="email" required value="Petronas@gmail.com"
                                    placeholder="Masukan Email...">
                                <i class="fa-solid fa-user-pen"></i>
                            </div>
                        </div>
                    </div>
                    <div class="profilperusahaan_info_text grid">
                        <h3>Deskripsi Perusahaan</h3>
                        <div class="input_wrapper1">
                            <textarea name="deskripsi" id="deskripsi textarea_perusahaan" cols="30" rows="10" required
                                placeholder="Isi Deskripsi Perusahaan..."></textarea>
                        </div>
                    </div>
                    <div class="editdelete_profil">
                        <a href="details_data_perusahaan.php" class="btn btn-primary edit"><i
                                class="fa-solid fa-user-pen"></i>Edit
                            Profil</a>
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
                        <p>Hallo, <span><?php echo $name ?></span> </p>
                        <p class="text-muted">Admin</p>
                    </div>
                </div>
            </div>

            <div class="bottom">
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
                            <h3><a href="dataperusahaan.php">Lihat Selengkapnya</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BAGIAN KANAN MAIN MENU / DETAILS MENU -->


    <script src="./data.js"></script>
    <script>
    // isi value di textarea
    var textarea = document.getElementById('deskripsi textarea_perusahaan');

    textarea.value =
        `Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique harum sunt qui facere recusandae nisi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi officiis unde magni saepe amet voluptatibus tempora quo esse! Adipisci, dolores.`;
    // textarea color and font
    textarea.style.color = '#9F8772';
    textarea.style.fontFamily = 'Lora', 'serif';
    </script>
</body>

</html>