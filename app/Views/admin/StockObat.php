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
                <a href="/admin/logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <h3>Logout</h3>
                </a>
            </div>
        </div>

        <!-- END ADMIN MENU SECTION -->
        <!-- MAIN MENU SECTION -->
        <main id="mainmenu" class="full">
            <h1><span>Layanan </span>Pembelian Obat</h1>
            <h3 class="path"><a href="/admin/LayananObat">Layanan Obat</a> / <span>Stock Obat</span> </h3>
            <div class="date">
                <input type="date" name="date" id="date">
            </div>
            <div class="popupedit" id="popupedit">
                <i class="fa-solid fa-trash-can"></i>
                <h2>Hapus Obat Dari Inventory?</h2>
                <p>Harap diingat bahwa data obat yang telah dihapus tidak bisa dikembalikan</p>
                <p id="suksesHapusObat"><button>Ya</button></p>
                <a href="#"><button type="button" onclick="closePopupedit()" class="btn-removeedit" id="batalBtn">
                        Batal
                    </button></a>
            </div>
            <div class="profilperusahaan">
                <h2>Stock Inventory Obat-Obatan</h2>
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
                                    <th>Nama Obat</th>
                                    <th><i class="fa-solid fa-trash-can"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($rowObat as $row) {
                                    echo "<tr>";
                                    echo "<td>" . $no . "</td>";
                                    echo "<td>" . $row->nama_obat . "</td>";
                                    echo "<td><button type='button' class='btn-add' onclick='openPopupedit(" . $row->id_obat . ")'>Hapus <i class='fa-solid fa-trash-can'></i></button></td>";
                                    echo "</tr>";
                                    $no++;
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <br><br>

                    <div class="formtambahobat">
                        <form action="/admin/tambahStockObat" class="formtambahobat1" method="post">
                            <h3>Tambah Obat Ke Dalam Inventory</h3>
                            <p>silahkan tambah obat ke inventory melalui form dibawah ini </p>
                            <div class="form_tambah">
                                <i class="fa-solid fa-tablets"></i>
                                <input type="text" name="namaobat" id="namaobat" placeholder="Isi Nama Obat...">
                            </div>
                            <p class="red"><?= $error_namaObat ?></p>

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

        function openPopupedit(id_obat) {
            popupedit.classList.add("open-popupedit");
            let suksesHapusObat = document.getElementById("suksesHapusObat");
            //add event listener
            suksesHapusObat.addEventListener("click", function() {
                //ajax
                $.ajax({
                    url: "<?= base_url('admin/HapusStockObat') ?>",
                    type: 'POST',
                    data: {
                        id_obat: id_obat,
                    },
                    success: function(data) {
                        alert("sukses menghapus obat");
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

</html>