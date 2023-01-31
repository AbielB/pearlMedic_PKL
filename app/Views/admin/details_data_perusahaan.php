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
            <h3 class="path"><a href="/admin/DataPerusahaan">Data Perusahaan</a> / <span>Detail Akun</span> </h3>

            <div class="profilperusahaan">
                <h2>Profil Akun Perusahaan Mitra</h2>
                <div class="wrapper">
                    <div class="img_perusahaan">
                        <!-- <img src="img/assets/profilperusahaan1.png" alt="photo"> -->
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                    <?php
                    $namaPerusahaan = $rowDetails[0]->nama_perusahaan;
                    $email = $rowDetails[0]->email;
                    $bidang = $rowDetails[0]->bidang;
                    $alamat = $rowDetails[0]->alamat;
                    $no_telp = $rowDetails[0]->no_telp;
                    $deskripsi = $rowDetails[0]->deskripsi;
                    $status = $rowDetails[0]->status;

                    if ($status == 1) {
                        $buttonText = "Nonaktifkan Akun";
                        $hText = "Apakah Anda Yakin Ingin Menonaktifkan Akun?";
                        $pText = "Akun yang sudah dinonaktifkan dapat di aktifkan kembali.";
                        $namaStatus = "Aktif";
                        $btn = "hapus";
                        $icon = '<i class="fa-solid fa-trash-can"></i>';
                    } else {
                        $buttonText = "Aktifkan Akun";
                        $hText = "Apakah Anda Yakin Ingin Mengaktifkan Akun?";
                        $pText = "Akun yang sudah diaktifkan dapat di nonaktifkan kembali.";
                        $namaStatus = "Non Aktif";
                        $btn = "edit";
                        $icon = '';
                    }
                    echo '<div class="profilperusahaan_info">
                    <div class="profilperusahaan_info_text">
                        <h3>Nama Perusahaan</h3>
                        <p>' . $namaPerusahaan . '</p>
                    </div>
                    
                    <div class="profilperusahaan_info_text">
                        <h3>Bidang</h3>
                        <p>' . $bidang . '</p>
                    </div>
                    <div class="profilperusahaan_info_text">
                        <h3>Alamat Lengkap</h3>
                        <p>' . $alamat . '</p>
                    </div>
                    <div class="profilperusahaan_info_text">
                        <h3>Email</h3>
                        <p>' . $email . '</p>
                    </div>
                    <div class="profilperusahaan_info_text">
                        <h3>Nomor Telpon</h3>
                        <p>' . $no_telp . '</p>
                    </div>
                    <div class="profilperusahaan_info_text">
                        <h3>Status</h3>
                        <p>' . $namaStatus . '</p>
                    </div>
                </div>
                
                <div class="profilperusahaan_info_text grid">
                    <h3>Deskripsi Perusahaan</h3>
                    <p>' . $deskripsi . '</p>
                </div>
                '; ?>



                    <div class="editdelete_profil">
                        <a href="/admin/EditDataPerusahaan?id=<?php echo $id ?>" class="btn btn-primary edit"><i
                                class="fa-solid fa-user-pen"></i>Edit
                            Profil</a>
                        <button type="button" class="btn btn-success <?= $btn ?>"
                            onclick="openPopup()"><?php echo $buttonText ?></button>
                    </div>
                    <div class="popup" id="popup">
                        <?= $icon ?>
                        <h2><?php echo $hText ?></h2>
                        <p><?php echo $pText ?></p>

                        <button type="submit" name="edit" id="edit"
                            onclick="changeStatusAkun(<?php echo $id ?>,<?php echo $status ?>)">Ya</button>
                        <button type="submit" onclick="closePopup()">Batalkan</button>
                    </div>
                    <style>
                    #mainmenu .popup.open-popup {
                        top: 60%;
                    }
                    </style>
                </div>
                <div class="orderterbaru">
                    <h2>Histori Pelayanan <i class="fa-solid fa-file-medical"></i></h2>
                    <h3>Pembelian Obat<i class="fa-solid fa-pills"></i></h3>

                    <table>
                        <thead>
                            <tr>
                                <th>Alamat</th>
                                <th>Tanggal Order</th>
                                <th><i class="fa-solid fa-cart-shopping yellow"></i></th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($rowKeranjang as $row) {
                                $idKeranjang = $row->id_keranjang;
                                $alamat = $row->alamat;
                                $tanggal = $row->tanggal_order;
                                $status = $row->status;
                                if ($status == 1) {
                                    $namaStatus = "Belum Dilayani";
                                    $class = "red";
                                } else if ($status == 2) {
                                    $namaStatus = "Dalam Proses";
                                    $class = "yellow";
                                } else if ($status == 3) {
                                    $namaStatus = "Sudah Dilayani";
                                    $class = "green";
                                } else if ($status == 4) {
                                    $namaStatus = "Ditolak";
                                    $class = "red";
                                } else {
                                    $namaStatus = "Belum Dipesan";
                                    $class = "red";
                                }
                                echo '<tr>
                                <td>' . $alamat . '</td>
                                <td>' . $tanggal . '</td>
                                <td><a href="/admin/Keranjang?id_keranjang=' . $idKeranjang . '" class="yellow">Lihat Keranjang</a></td>
                                <td class="' . $class . '">' . $namaStatus . '</td>';
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="orderterbaru">
                    <h3>Medical Check Up<i class="fa-solid fa-stethoscope"></i></h3>

                    <table>
                        <thead>
                            <tr>
                                <th>Tanggal Pelaksanaan</th>
                                <th>Lokasi</th>
                                <th>Jumlah Orang</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($rowMedical as $medical) {
                                if ($medical->status == 0) {
                                    $color = "red";
                                    $status = "Belum Dilayani";
                                } else if ($medical->status == 1) {
                                    $color = "yellow";
                                    $status = "Dalam Proses";
                                } else if ($medical->status == 2) {
                                    $color = "green";
                                    $status = "Sudah Dilayani";
                                } else {
                                    $color = "red";
                                    $status = "Ditolak";
                                } ?>

                            <tr>
                                <td><?= $medical->tanggal_pelaksanaan ?></td>
                                <td><?= $medical->lokasi ?></td>
                                <td><?= $medical->jumlah ?></td>
                                <td class="<?= $color ?>">Belum Dilayani</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="orderterbaru">
                    <h3>Layanan Darurat<i class="fa-solid fa-truck-medical"></i></h3>

                    <table>
                        <thead>
                            <tr>
                                <th>Tanggal Pelaporan</th>
                                <th>Lokasi</th>
                                <th>Jumlah Korban</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($rowDarurat as $darurat) {
                                if ($darurat->status == 0) {
                                    $color = "red";
                                    $status = "Belum Dilayani";
                                } else if ($darurat->status == 1) {
                                    $color = "yellow";
                                    $status = "Dalam Proses";
                                } else if ($darurat->status == 2) {
                                    $color = "green";
                                    $status = "Sudah Dilayani";
                                } else {
                                    $color = "red";
                                    $status = "Ditolak";
                                } ?>
                            <tr>
                                <td><?= $darurat->tanggal_pelaporan ?></td>
                                <td><?= $darurat->lokasi ?></td>
                                <td><?= $darurat->jumlah ?></td>
                                <td class="<?= $color ?>"><?= $status ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="orderterbaru">
                    <h3>Vaksinasi<i class="fa-solid fa-syringe"></i></h3>

                    <table>
                        <thead>
                            <tr>
                                <th>Jenis Vaksin</th>
                                <th>Jumlah Pasien</th>
                                <th>Lokasi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($rowVaksin as $vaksin) {
                                if ($vaksin->status == 0) {
                                    $color = "red";
                                    $status = "Belum Dilayani";
                                } else if ($vaksin->status == 1) {
                                    $color = "yellow";
                                    $status = "Dalam Proses";
                                } else if ($vaksin->status == 2) {
                                    $color = "green";
                                    $status = "Sudah Dilayani";
                                } else {
                                    $color = "red";
                                    $status = "Ditolak";
                                }

                                echo '<tr>
                                <td>' . $vaksin->nama_vaksin . '</td>
                                <td>' . $vaksin->jumlah . '</td>
                                <td>' . $vaksin->lokasi . '</td>
                                <td class="' . $color . '">' . $status . '</td>';
                            }
                            ?>

                        </tbody>
                    </table>
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


    <script src="../js/data.js"></script>
    <script src="../js/popup.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script>
    //ajax change status
    function changeStatusAkun(id, status) {

        $.ajax({
            url: "<?= base_url('admin/AjaxAkun') ?>",
            type: "POST",
            data: {
                id: id,
                status: status
            },
            success: function(data) {
                alert("status akun berhasil diubah")
                location.reload();
            }
        });
        console.log(id, status);
    }
    </script>
</body>

</html>