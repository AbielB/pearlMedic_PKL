<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scald=1.0">
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
    <style>
        #batalBtn {
            /* transform translate y 20% */
            transform: translateY(-60%) !important;
        }
    </style>
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
                <a href="/admin/LayananObat">
                    <i class="fa-solid fa-capsules"></i>
                    <h3>Layanan Obat</h3>
                </a>
                <a href="/admin/LayananDarurat">
                    <i class="fa-solid fa-truck-medical"></i>
                    <h3>Layanan Darurat</h3>
                </a>
                <a href="/admin/LayananVaksin" class="active">
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
            <h1><span>Layanan </span>Vaksinasi</h1>
            <h3 class="path"><a href="/admin/LayananObat">Layanan Vaksinasi</a> / <span>Stock Vaksin</span> </h3>
            <div class="date">
                <input type="date" name="date" id="date">
            </div>
            <div class="popupedit" id="popupedit">
                <i class="fa-solid fa-trash-can"></i>
                <h2>Hapus Vaksin Dari Inventory?</h2>
                <p>Harap diingat bahwa data vaksin yang telah dihapus tidak bisa dikembalikan</p>
                <p id="suksesHapusVaksin"><button>Ya</button></p>
                <a href="#"><button type="button" class="btn-removeedit" id="batalBtn" onclick="closePopupedit()">
                        Batal
                    </button></a>
            </div>
            <div class="profilperusahaan">
                <h2>Stock Inventory Vaksin</h2>
                <div class="container_popup" style="background-color: transparent;">
                    <form action="" method="get">
                        <div class="search">
                            <input type="text" name="search" id="search" placeholder="Cari  Obat...." value="<?= $search ?>">
                            <button type=" submit" name="submit" id="submit"><i class="fa-solid fa-search"></i></button>
                        </div>
                    </form>
                    <div class="content-obat-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Vaksin</th>
                                    <th>Deskripsi Vaksin</th>
                                    <th><i class="fa-solid fa-trash-can"></i></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                //foreach $rowVaksin
                                $num = 1;
                                foreach ($rowVaksin as $rowVaksin) {
                                    echo "<tr>";
                                    echo "<td>" . $num . "</td>";
                                    echo "<td>" . $rowVaksin->nama_vaksin . "</td>";
                                    echo "<td>" . $rowVaksin->deskripsi_vaksin . "</td>";
                                    echo "<td><button type='button' class='btn-add' onclick='openPopupedit(" . $rowVaksin->id_vaksin . " )'>Hapus <i class='fa-solid fa-trash-can'></i></button></td>";
                                    echo "</tr>";
                                    $num = $num + 1;
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <br><br>

                    <div class="formtambahobat">
                        <form action="/admin/tambahStockVaksin" class="formtambahobat1" method="post">
                            <h3>Tambah Vaksin Ke Dalam Inventory</h3>
                            <p>silahkan tambah vaksin ke inventory melalui form dibawah ini </p>
                            <div class="form_tambah">
                                <i class="fa-solid fa-tablets"></i>
                                <input type="text" name="namaVaksin" id="namavaksin" placeholder="Isi Nama Vaksin...">
                            </div>
                            <p class="red"><?= $error_namaVaksin ?></p>
                            <div class="form_tambah">
                                <i class="fa-solid fa-arrow-down-wide-short"></i>
                                <input type="text" name="desc" id="desc" placeholder="Deskripsi singkat vaksin...">
                            </div>
                            <p class="red"><?= $error_desc ?></p>
                            <button type="submit" class="form_tambah_button">
                                <i class="fa-solid fa-plus"></i>
                                Tambahkan
                            </button>
                        </form>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script>
        // pop up edit
        let popupedit = document.getElementById("popupedit");

        function openPopupedit(id_vaksin) {
            popupedit.classList.add("open-popupedit");
            let suksesHapusVaksin = document.getElementById("suksesHapusVaksin");
            //add event listener
            suksesHapusVaksin.addEventListener("click", function() {
                //ajax
                $.ajax({
                    url: "<?= base_url('admin/HapusVaksin') ?>",
                    type: 'POST',
                    data: {
                        id_vaksin: id_vaksin,
                    },
                    success: function(data) {
                        alert("sukses menghapus vaksin");
                        location.reload();
                    }
                });
                popupedit.classList.remove("open-popupedit");
            });
        }

        function closePopupedit() {
            popupedit.classList.remove("open-popupedit");
        }

        // background popup
        // let container_popup = document.querySelector(".container_popup");
        let btn_popupedit = document.querySelector(".btn_popupedit");

        btn_popup.addEventListener("click", function() {
            container_popup.classList.add("active");
        });

        // close popup
        let btn_removeedit = document.querySelector(".btn-removeedit");
        btn_remove.addEventListener("click", function() {
            container_popup.classList.remove("active");
        });
    </script>
</body>

</html>