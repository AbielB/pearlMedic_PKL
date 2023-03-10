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
    <div class="container-4">
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
                    <a href="/admin/LayananDarurat" class="active">
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
        </div>

        <!-- END ADMIN MENU SECTION -->
        <!-- MAIN MENU SECTION -->
        <main id="mainmenu">
            <h1><span>Layanan </span> Darurat</h1>

            <!-- Layanan Terbaru -->
            <div class="orderterbaru">
                <h2>Pesanan Darurat Terbaru </h2>

                <table>
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Lokasi</th>
                            <th>RS Tujuan</th>
                            <th>Deskripsi</th>
                            <th>Jumlah Orang</th>
                            <th>Tanggal Pelaporan</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($rowDarurat as $d) {
                        ?>
                        <tr>
                            <td><?php echo $d->nama_perusahaan; ?></td>
                            <td><?php echo $d->lokasi; ?></td>
                            <td><?php echo $d->rs_tujuan; ?></td>
                            <td style="max-width: 300px"><?php echo $d->deskripsi; ?></td>
                            <td><?php echo $d->jumlah; ?></td>
                            <td><?php echo $d->tanggal_pelaporan; ?></td>
                            <td class="status_Darurat">
                                <select name="status" id="status"
                                    onchange="statusDarurat(<?php echo $d->id_darurat ?>,this.value)">
                                    <!-- if status = 1 selected -->
                                    <option value="0" <?php if ($d->status == 0) {
                                                                echo "selected";
                                                            } ?>>Belum Dilayani</option>
                                    <!-- if status = 2 selected -->
                                    <option value="1" <?php if ($d->status == 1) {
                                                                echo "selected";
                                                            } ?>>Dalam Proses</option>
                                    <!-- if status = 3 selected -->
                                    <option value="2" <?php if ($d->status == 2) {
                                                                echo "selected";
                                                            } ?>>Sudah Dilayani</option>
                                    <option value="3" <?php if ($d->status == 3) {
                                                                echo "selected";
                                                            } ?>>Dibatalkan</option>
                                </select>
                            </td>
                        </tr>
                        <?php } ?>

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
                        <p>Hallo, <span><?php echo $name ?></span> </p>
                        <p class="text-muted">Admin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BAGIAN KANAN MAIN MENU / DETAILS MENU -->

    <script src="./data.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
    function statusDarurat(id, status) {
        $.ajax({
            url: "<?= base_url('admin/AjaxDarurat') ?>",
            type: "POST",
            data: {
                id: id,
                status: status
            },
            success: function(data) {
                alert("Status Berhasil Diubah");
            }
        });
        console.log(id, status)
    }
    </script>
    <style>
    .container-4 {
        display: grid;
        width: 96%;
        margin: 0 auto;
        grid-template-columns: 14rem auto 10rem;
    }

    .profile {
        margin-right: 30px;
    }

    .status_Darurat {
        padding: 10px;
    }

    .status_Darurat select {
        /* width: 100%; */
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        text-align: center;
        cursor: pointer;
    }

    .status_Darurat select:hover {
        color: #9F8772;
        border: 1px solid #9F8772;
        transition: all 0.3s ease-in-out;
    }
    </style>
</body>

</html>