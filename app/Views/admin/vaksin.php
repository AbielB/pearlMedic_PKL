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
                <a href="/admin/LayananObat" id="paragraph-change">
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
                    <i class="fa-solid fa-city"></i>
                    <h3>Data Perusahaan</h3>
                </a>
                <a href="/admin/Logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <h3>Logout</h3>
                </a>
            </div>
        </div>

        <!-- END ADMIN MENU SECTION -->
        <!-- MAIN MENU SECTION -->
        <main id="mainmenu">
            <h1><span>Layanan </span> Vaksinasi</h1>

            <!-- Layanan Terbaru -->
            <div class="orderterbaru">
                <h2>Pesanan Vaksinasi Terbaru </h2>
                <div class="search">
                    <input type="text" name="search" id="search" placeholder="Cari Pesanan Vaksin....">
                    <button type="submit" name="submit" id="submit"><i class="fa-solid fa-search"></i></button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Jenis Vaksin</th>
                            <th>Jumlah Pasien</th>
                            <th>Lokasi</th>
                            <th>Tanggal Pelaksanaan </th>
                            <th>Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($rowVaksin as $vaksin) {
                            $selected1 = $vaksin->status == 0 ? "selected" : "";
                            $selected2 = $vaksin->status == 1 ? "selected" : "";
                            $selected3 = $vaksin->status == 2 ? "selected" : "";
                            $selected4 = $vaksin->status == 3 ? "selected" : "";
                            if ($vaksin->status == 0) {
                                $color = "red";
                            } else if ($vaksin->status == 1) {
                                $color = "yellow";
                            } else if ($vaksin->status == 2) {
                                $color = "green";
                            } else if ($vaksin->status == 3) {
                                $color = "red";
                            }
                        ?>
                        <tr>
                            <td><?php echo $vaksin->nama_perusahaan; ?></td>
                            <td><?php echo $vaksin->nama_vaksin; ?></td>
                            <td><?php echo $vaksin->jumlah; ?></td>
                            <td><?php echo $vaksin->lokasi; ?></td>
                            <td><?php echo $vaksin->tanggal_pelaksanaan; ?></td>
                            <td>
                                <select name="status" id="status" class="status"
                                    onchange="ubahStatus(<?= $vaksin->id_ordervaksin ?>,this.value)">
                                    <option value="0" <?php echo $selected1; ?> class="red">Belum Dilayani
                                    </option>
                                    <option value=" 1" <?php echo $selected2; ?> class="yellow">Dalam Proses
                                    </option>
                                    <option value=" 2" <?php echo $selected3; ?> class="green">Sudah
                                        Dilayani</option>
                                    <option value=" 3" <?php echo $selected4; ?> class="red">Dibatalkan
                                    </option>
                                </select>
                            </td>

                        </tr>
                        <?php }
                        ?>

                    </tbody>
                </table>
            </div>
            <!-- END Layanan Terbaru -->
            <br>
        </main>
        <!-- END MAIN MENU SECTION -->
        <!-- BAGIAN KANAN MAIN MENU / DETAILS MENU -->
        <div class=" right">
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
                <div class="bottom-wrapper">
                    <div class="bottom-judul">
                        <i class="fa-solid fa-syringe"></i>
                        <h3>Stock Inventory</h3>
                    </div>
                    <div class="bottom-button">
                        <a href="StockVaksin">Lihat Stock Vaksin</a>
                    </div>
                </div>

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
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script>
        function ubahStatus(id_ordervaksin, status) {
            console.log(id_ordervaksin, status)
            //ajax
            $.ajax({
                url: "<?= base_url('admin/AjaxVaksin') ?>",
                type: 'POST',
                data: {
                    id_ordervaksin: id_ordervaksin,
                    status: status
                },
                success: function(data) {
                    alert("sukses mengubah status keranjang");
                }
            });
        }
        </script>
</body>

</html>