<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scald=1.0">
    <!-- Link Favicon -->
    <link rel="shortcut icon" href="../img/logo/pearlmedic.png" type="image/x-icon">
    <!-- END Link Favicon -->
    <!-- Link CSS -->
    <link rel="stylesheet" href="../css/style.min.css?v=<?php echo time(); ?>">
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
                    <i class="fa-solid fa-house"></i>
                    <h3>Dashboard</h3>
                </a>
                <a href="/admin/LayananMedical">
                    <i class="fa-solid fa-notes-medical"></i>
                    <h3>Layanan Medical</h3>
                </a>
                <a href="/admin/LayananObat" class="active">
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
                    <i class="fa-solid fa-city" id="span"></i>
                    <h3>Data Perusahaan</h3>
                </a>
                <!-- <a href="pesan.php">
                    <i class="fa-solid fa-envelope"></i>
                    <h3>Pesan</h3>
                    <p class="message-count">12</p>
                </a> -->
                <a href="/admin/Logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <h3>Logout</h3>
                </a>
            </div>
        </div>

        <!-- END ADMIN MENU SECTION -->
        <!-- MAIN MENU SECTION -->
        <main id="mainmenu" class="full">
            <h1><span>Layanan </span>Pembelian Obat</h1>
            <h3 class="path"><a href="/admin/LayananObat">Layanan Obat</a> / <span>Isi Keranjang</span> </h3>

            <div class="profilperusahaan">
                <h2>Profil Akun Perusahaan Mitra</h2>
                <div class="container_popup">
                    <div class="wrapper">
                        <div class="img_perusahaan">
                            <!-- <img src="img/assets/profilperusahaan1.png" alt="photo"> -->
                            <i class="fa-solid fa-cart-shopping "></i>
                        </div>
                        <div class="pembungkus">
                            <div class="grid-flex">
                                <div class="profilperusahaan">
                                    <h3>Nama Perusahaan</h3>
                                    <p>Petronas Nasional Berhad</p>
                                </div>
                                <div class="profilperusahaan">
                                    <h3>Username</h3>
                                    <p>Petronasnasional</p>
                                </div>
                            </div>
                            <div class="isikeranjang">
                                <table>
                                    <tr>
                                        <div class="spacebetween">
                                            <td>No</td>
                                            <td>Nama Obat</td>
                                        </div>
                                        <td>Jumlah</td>
                                    </tr>
                                    <tr>
                                        <div class="spacebetween">
                                            <th>1</th>
                                            <th>Paracetamol</th>
                                        </div>
                                        <th>10 Buah</th>
                                    </tr>
                                    <tr>
                                        <div class="spacebetween">
                                            <th>2</th>
                                            <th>Paracetamol</th>
                                        </div>
                                        <th>10 Buah</th>
                                    </tr>
                                    <tr>
                                        <div class="spacebetween">
                                            <th>3</th>
                                            <th>Paracetamol</th>
                                        </div>
                                        <th>10 Buah</th>
                                    </tr>
                                    <tr>
                                        <div class="spacebetween">
                                            <th>4</th>
                                            <th>Paracetamol</th>
                                        </div>
                                        <th>10 Buah</th>
                                    </tr>
                                    <tr>
                                        <div class="spacebetween">
                                            <th></th>
                                            <th></th>
                                        </div>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                        <div class="spacebetween">
                                            <th></th>
                                            <th></th>
                                        </div>
                                        <th>40 Buah</th>
                                    </tr>
                                </table>
                            </div>
                            <div class="editdelete_profil">
                                <a href="editperusahaan.php" class="btn btn-primary edit"><i class="fa-solid fa-user-pen"></i>Terima Pesanan</a>
                                <button type="button" class="btn btn-danger hapus" onclick="openPopup()"><i class="fa-solid fa-trash"></i>Tolak Pesanan</button>
                            </div>
                        </div>
                        <div class="popup" id="popup">
                            <i class="fa-solid fa-trash-can"></i>
                            <h2>Apakah Anda Yakin Ingin Menghapus Akun?</h2>
                            <p>Akun yang sudah dihapus tidak dapat di kembalikan.</p>
                            <a href="deletesukses.php"><button type="submit" name="edit" id="edit">Ya</button></a>
                            <button type="button" onclick="closePopup()">Batalkan</button>
                        </div>
                        <style>
                            #mainmenu .popup.open-popup {
                                top: 90%;
                            }
                        </style>
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


    <script src="data.js"></script>
    <script src="popup.js"></script>
</body>

</html>