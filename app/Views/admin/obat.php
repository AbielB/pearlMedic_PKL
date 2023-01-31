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
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Tanggal Order</th>
                            <th>Status</th>
                            <th><i class="fa-solid fa-cart-shopping yellow"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($rowKeranjang0 as $row) {
                            //echo
                            echo "<tr>";
                            echo "<td>" . $row->nama_perusahaan . "</td>";
                            echo "<td>" . $row->tanggal_order . "</td>";
                            echo "<td>";
                            echo "<div class='status'>";
                            echo "<select name='status' id='status' required onchange='ubahStatus(" . $row->id_keranjang . ",this.value)'>";
                            echo "<option selected>";
                            echo "<span class='red'>Belum Dilayani</span>";
                            echo "</option>";
                            echo "<option value='2' class='yellow'>Dalam Proses</option>";
                            echo "<option value='3' class='green'>Sudah Dilayani</option>";
                            echo "<option value='4' class='red'>Dibatalkan</option>";
                            echo "</select>";
                            echo "<i class='fa-solid fa-file-pen'></i>";
                            echo "</div>";
                            echo "</td>";
                            echo "<td><a href='Keranjang?id_keranjang=" . $row->id_keranjang . "' class='yellow'>Lihat Keranjang </a></td>";
                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="orderterbaru">
                <h2>Pesanan Obat <span class="yellow">* Dalam Proses Pelayanan</span> </h2>
                <div class="search">
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Tanggal Order</th>
                            <th>Status</th>
                            <th><i class="fa-solid fa-cart-shopping yellow"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($rowKeranjang1 as $row) {
                            //echo
                            echo "<tr>";
                            echo "<td>" . $row->nama_perusahaan . "</td>";
                            echo "<td>" . $row->tanggal_order . "</td>";
                            echo "<td>";
                            echo "<div class='status'>";
                            echo "<select class='dalamproses' name='status' id='status' required onchange='ubahStatus(" . $row->id_keranjang . ",this.value)'>";
                            echo "<option selected>";
                            echo "<span class='yellow'>Dalam Proses</span>";
                            echo "</option>";
                            echo "<option value='1' class='red'>Belum Dilayani</option>";
                            echo "<option value='3' class='green'>Sudah Dilayani</option>";
                            echo "<option value='4' class='red'>Dibatalkan</option>";
                            echo "</select>";
                            echo "<i class='fa-solid fa-file-pen' id='yellow'></i>";
                            echo "</div>";
                            echo "</td>";
                            echo "<td><a href='Keranjang?id_keranjang=" . $row->id_keranjang . "' class='yellow'>Lihat Keranjang </a></td>";
                            echo "</tr>";
                        }
                        ?>

                    </tbody>

                </table>
            </div>
            <div class="orderterbaru">
                <h2>Pesanan Obat <span class="green">* Sudah Dilayani</span> </h2>
                <div class="search">
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Tanggal Order</th>
                            <th>Status</th>
                            <th><i class="fa-solid fa-cart-shopping yellow"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($rowKeranjang2 as $row) {
                            //echo
                            echo "<tr>";
                            echo "<td>" . $row->nama_perusahaan . "</td>";
                            echo "<td>" . $row->tanggal_order . "</td>";
                            echo "<td>";
                            echo "<div class='status'>";
                            echo "<select class='dalamproses1' name='status' id='status' required onchange='ubahStatus(" . $row->id_keranjang . ",this.value)'>";
                            echo "<option selected>";
                            echo "<span class='green'>Sudah Dilayani</span>";
                            echo "</option>";
                            echo "<option value='1' class='red'>Belum Dilayani</option>";
                            echo "<option value='2' class='yellow'>Dalam Proses</option>";
                            echo "<option value='4' class='red'>Dibatalkan</option>";
                            echo "</select>";
                            echo "<i class='fa-solid fa-file-pen' id='green'></i>";
                            echo "</div>";
                            echo "</td>";
                            echo "<td><a href='Keranjang?id_keranjang=" . $row->id_keranjang . "' class='yellow'>Lihat Keranjang </a></td>";
                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>

            <div class="orderterbaru">
                <h2>Pesanan Obat <span class="red">* Dibatalkan</span> </h2>
                <div class="search">
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Tanggal Order</th>
                            <th>Status</th>
                            <th><i class="fa-solid fa-cart-shopping yellow"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($rowKeranjang4 as $row) {
                            //echo
                            echo "<tr>";
                            echo "<td>" . $row->nama_perusahaan . "</td>";
                            echo "<td>" . $row->tanggal_order . "</td>";
                            echo "<td>";
                            echo "<div class='status'>";
                            echo "<select class='dalamproses' name='status' id='status' required onchange='ubahStatus(" . $row->id_keranjang . ",this.value)'>";
                            echo "<option selected>";
                            echo "<span class='red'>Dibatalkan</span>";
                            echo "</option>";
                            echo "<option value='1' class='red'>Belum Dilayani</option>";
                            echo "<option value='2' class='yellow'>Dalam Proses</option>";
                            echo "<option value='3' class='green'>Sudah Dilayani</option>";
                            echo "</select>";
                            echo "<i class='fa-solid fa-file-pen' id='yellow'></i>";
                            echo "</div>";
                            echo "</td>";
                            echo "<td><a href='Keranjang?id_keranjang=" . $row->id_keranjang . "' class='yellow'>Lihat Keranjang </a></td>";
                            echo "</tr>";
                        }
                        ?>

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
                        <p>Hallo, <span><?= $name ?></span> </p>
                        <p class="text-muted">Admin</p>
                    </div>

                </div>
            </div>
            <div class="bottom">
                <div class="bottom-wrapper">
                    <div class="bottom-judul">
                        <i class="fa-solid fa-pills"></i>
                        <h3>Stock Inventory</h3>
                    </div>
                    <div class="bottom-button">
                        <a href="/admin/StockObat">Lihat Stock Obat</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="../scriptjs/data.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script>
    function ubahStatus(id_keranjang, status) {
        console.log(id_keranjang, status)
        //ajax
        $.ajax({
            url: "<?= base_url('admin/AjaxKeranjang') ?>",
            type: 'POST',
            data: {
                id: id_keranjang,
                status: status
            },
            success: function(data) {
                alert("sukses mengubah status keranjang");
                location.reload();
            }
        });
    }
    </script>
</body>

</html>