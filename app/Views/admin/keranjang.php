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
            <h3 class="path"><a href="/admin/LayananObat">Layanan Obat</a> / <span>Isi Keranjang</span> </h3>
            <div class="date">
                <input type="date" name="date" id="date">
            </div>
            <div class="profilperusahaan">
                <h2>Keranjang Pelanggan</h2>
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
                                    <p><?= $rowKeranjang[0]->nama_perusahaan ?></p>
                                </div>

                            </div>
                            <div class="isikeranjang">
                                <div class="isikeranjang-top">
                                    <div class="keranjang">
                                        <table>
                                            <tr class="head">
                                                <th>No</th>
                                                <th>Nama Product<i class="fa-solid fa-pills"></i></th>
                                                <th>Jumlah<i class="fa-solid fa-arrow-down-wide-short"></i></th>
                                            </tr>
                                            <?php
                                            $no = 1;
                                            foreach ($rowIsi as $isi) {
                                                //echo
                                                echo "<tr>";
                                                echo "<td>" . $no . "</td>";
                                                echo "<td>" . $isi->nama_obat . "</td>";
                                                echo "<td>" . $isi->jumlah . "</td>";
                                                echo "</tr>";
                                            }
                                            ?>

                                        </table>
                                    </div>
                                    <div class="statuskeranjang">
                                        <h3>Status Pelayanan</h3>
                                        <p>Silahkan Ubah Status Pelayanan Sesuai Kondisi</p>
                                        <div class="statuskeranjang1">
                                            <?php
                                            $selected1 = '';
                                            $selected2 = '';
                                            $selected3 = '';
                                            $selected4 = '';
                                            $status = $rowKeranjang[0]->status;
                                            if ($status == 1) {

                                                $selected1 = "selected";
                                            } else if ($status == 2) {

                                                $selected2 = "selected";
                                            } else if ($status == 3) {

                                                $selected3 = "selected";
                                            } else {
                                                $selected4 = "selected";
                                            }

                                            ?>
                                            <select name="statuskeranjang" id="statuskeranjang" onchange="ubahStatus(<?= $id_keranjang ?>, this.value)">
                                                <option value="1" class="red" <?= $selected1 ?>>Belum Dilayani
                                                </option>
                                                <option value="2" class="yellow" <?= $selected2 ?>>Dalam Proses</option>
                                                <option value="3" class="green" <?= $selected3 ?>>Sudah Dilayani
                                                </option>
                                                <option value="4" class="red" <?= $selected4 ?>>Dibatalkan
                                                </option>
                                            </select>
                                            <i class="fa-solid fa-file-pen"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="isikeranjang-bottom">
                                    <h3>Total Keranjang <i class="fa-solid fa-cart-shopping"></i></h3>
                                    <div class="total">
                                        <p>Total</p>
                                        <p><?= $total ?> Buah</p>
                                    </div>
                                    <div class="estimasi">
                                        <p>Estimasi Pengiriman</p>
                                        <div class="date">
                                            <?php $tanggal_pengiriman = $rowKeranjang[0]->tanggal_pengiriman; ?>
                                            <input type="date" name="tanggal_pengiriman" id="tanggal_pengiriman" value="<?php echo $tanggal_pengiriman; ?>">
                                        </div>
                                    </div>
                                    <div class="alamatkirim">
                                        <div class="judul">
                                            <h3>Alamat Pengiriman</h3><i class="fa-solid fa-map-location-dot"></i>
                                        </div>
                                        <div class="info">
                                            <p>Jl. Gunung Batu GG Tresna Bandung</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="editdelete_profil">
                                <p class="btn btn-primary edit green" onclick="ubahPengiriman()"><i class="fa-solid fa-floppy-disk"></i>Simpan
                                    Perubahan</p>
                                <a href="/admin/LayananObat" class="btn btn-primary edit"><i class="fa-solid fa-angles-left"></i>Kembali</a>
                            </div>
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
        </div>
    </div>
    <!-- BAGIAN KANAN MAIN MENU / DETAILS MENU -->


    <script src="data.js"></script>
    <script src="popup.js"></script>
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
                }
            });
        }

        function ubahPengiriman() {
            var tanggal_pengiriman = document.getElementById("tanggal_pengiriman").value;
            //if empty date
            if (tanggal_pengiriman == "") {
                alert("tanggal pengiriman tidak boleh kosong");
                return;
            }
            //if date before tanggal_order
            var tanggal_order = "<?= $rowKeranjang[0]->tanggal_order ?>";
            if (tanggal_pengiriman < tanggal_order) {
                alert("tanggal pengiriman tidak boleh kurang dari tanggal order");
                return;
            }
            var id_keranjang = <?= $id_keranjang ?>;
            console.log(tanggal_pengiriman, id_keranjang)
            //ajax
            $.ajax({
                url: "<?= base_url('admin/AjaxTanggalPengiriman') ?>",
                type: 'POST',
                data: {
                    id: id_keranjang,
                    tanggal_pengiriman: tanggal_pengiriman
                },
                success: function(data) {
                    alert("sukses mengubah tanggal pengiriman");
                    //redirect to admin/LayananObat
                    window.location.href = "<?= base_url('admin/LayananObat') ?>";
                }
            });

        }
    </script>
</body>

</html>