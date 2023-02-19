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
                    <a href="/admin/LayananMedical" class="active">
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
            <h1><span>Layanan </span> Medical Check Up</h1>


            <div class="orderterbaru orderterbaru-fix">
                <h2>Pesanan Medical Check Up Terbaru </h2>
                <form method="get">

                </form>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Lokasi</th>
                            <th>Tanggal</th>
                            <th>Jumlah Orang</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($rowMedical as $m) {
                            if ($m->status == 1) {
                                $color = "red";
                            } else if ($m->status == 2) {
                                $color = "yellow";
                            } else {
                                $color = "green";
                            }
                        ?>
                        <tr>
                            <td><?= $m->nama_perusahaan; ?></td>
                            <td><?= $m->lokasi; ?></td>
                            <td><?= $m->tanggal_pelaksanaan; ?></td>
                            <td><?= $m->jumlah; ?></td>
                            <!-- select status-->
                            <td class="status_medic">
                                <select name="status" id="status" class="status"
                                    onchange="statusMedical(<?php echo $m->id_checkup; ?>, this.value)">
                                    <option value="0" <?php if ($m->status == 0) {
                                                                echo "selected";
                                                            } ?>>Belum Dilayani</option>
                                    <option value="1" <?php if ($m->status == 1) {
                                                                echo "selected";
                                                            } ?>>Dalam Proses</option>
                                    <option value="2" <?php if ($m->status == 2) {
                                                                echo "selected";
                                                            } ?>>Sudah Dilayani</option>
                                    <option value="3" <?php if ($m->status == 3) {
                                                                echo "selected";
                                                            } ?>>Dibatalkan</option>
                                </select>
                        </tr>
                        <?php } ?>

                    </tbody>

                </table>
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
                    <i class="fa-solid fa-sun active" id="white-btn"></i>
                    <i class="fa-solid fa-moon" id="black-btn"></i>
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
    <script>
    //ajax
    function statusMedical(id, status) {
        $.ajax({
            url: "<?= base_url('admin/AjaxMedical') ?>",
            type: "POST",
            data: {
                id: id,
                status: status
            },
            success: function(data) {
                alert("Status Berhasil Diubah");
            }
        });
        console.log(id, status);
    }
    </script>

    <style>
    .orderterbaru-fix {
        margin-bottom: 50px;
    }

    .status_medic {
        /* background-color: aqua; */
        display: grid;
        align-items: center;
        border-bottom: 1px solid transparent !important;
    }

    .status_medic select {
        /* border-bottom: 1px solid transparent !important; */
        text-align: center;
        margin-bottom: 10px;
        margin-top: -10px;
    }
    </style>
</body>

</html>