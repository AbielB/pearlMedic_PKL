<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pearl Medic || Obat</title>
    <!-- Link Favicon -->
    <link rel="shortcut icon" href="../client_edit/image/logo/pearlmedic.png" type="image/x-icon" />
    <!-- END Link Favicon -->
    <!-- CSS Links -->
    <link rel="stylesheet" href="../client_edit/css/style.min.css" />
    <!-- END CSS Links -->
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <!-- END Box Icons -->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- END Link Swiper's CSS -->
    <!-- LINK FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!-- END LINK FONT AWESOME -->
    <!-- Link AOS Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- END Link AOS Library -->
    <link rel="stylesheet" href="../client_edit/css/output.css" />
</head>

<body>
    <!-- NAVIGATION BAR SECTION -->
    <nav class="navigation_bar" id="navbar_color">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="/client" class="logo" data-aos="fade-left"><img src="../client_edit/image/logo/pearlmedic2.png" alt="" id="gambar1">
            <p>Pearl Medic</p>
        </a>
        <div class="navbar">
            <a href="/client" class="hidup" data-aos="fade-left">Home</a>
            <a href="#layanans" data-aos="fade-left" class="menu-button">Layanan<i class="fa-solid fa-chevron-down"></i></a>
            <div class="menu_dropdown">
                <div class="dropdown_content">
                    <a href="/client/medicalcheckup" data-aos="fade-left" class="menu-isi">Medical Check Up<i class="fa-solid fa-stethoscope"></i></a>
                    <a href="/client/vaksin" data-aos="fade-left" class="menu-isi">Vaksinasi<i class="fa-solid fa-syringe"></i></a>
                    <a href="/client/obat" data-aos="fade-left" class="menu-isi">Pembelian Obat-Obatan<i class="fa-solid fa-pills"></i></a>
                    <a href="/client/darurat" data-aos="fade-left" class="menu-isi">Pelayanan Darurat<i class="fa-solid fa-truck-medical"></i></a>
                </div>
            </div>
            <a href="#contacts" data-aos="fade-left">Kontak Kami</a>
            <!-- <a href="#" data-aos="fade-left">Services</a> -->
            <a href="/client/keranjang" data-aos="fade-left">Keranjang <i class="fa-solid fa-cart-plus"></i></a>
        </div>
        <div class="profile" data-aos="fade-left">
            <div class="profilelogo">
                <i class="fa-solid fa-circle-user"></i>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="profiledropdown">
                <a href="/client/myAccount" data-aos="fade-left">My Account<i class="fa-solid fa-user-tie"></i></a>
                <a href="/client/editProfile" data-aos="fade-left">Edit Profile<i class="fa-solid fa-user-pen"></i></a>
                <a href="/client/history" data-aos="fade-left">History<i class="fa-solid fa-money-check"></i></a>
                <button data-aos="fade-left" onclick="openPopup()">Logout<i class="fa-solid fa-right-from-bracket"></i></button>

            </div>
        </div>
    </nav>
    <!-- END NAVIGATION BAR SECTION -->
    <!-- MAIN MENU SECTION -->
    <div class="popup" id="popup">
        <i class="fa-solid fa-right-from-bracket"></i>
        <h2>Anda Yakin Ingin Log Out?</h2>
        <a href="/client/logout"><button type="button" class="btn-remove">
                Ya
            </button></a>
        <a href="#"><button type="button" onclick="closePopup()" class="btn-remove">
                Batal
            </button></a>
    </div>
    <div class="popuphapus" id="popuphapus">
        <i class="fa-regular fa-circle-check"></i>
        <h2>Konfirmasi Pesanan ?</h2>
        <p>Cek terlebih dahulu pesanan anda, pesanan yang telah di pesan tidak dapat di kembalikan lagi</p>
        <button type="button" class="btn-remove" id="pesanBtn">
            Ya
        </button>
        < <a href="#"><button type="button" onclick="closePopuphapus()" class="btn-remove">
                Batal
            </button></a>
    </div>
    <div class="popupedit" id="popupedit">
        <i class="fa-solid fa-cart-plus"></i>
        <h2>Tambahkan Obat Ke Keranjang?</h2>
        <form action="" class="form-jumlah-obat">
            <p style="margin-bottom: 5px;">Silahkan Masukkan Jumlah Obat Yang Ingin Dipesan</p>
            <input type="number" name="jumlah" id="jumlah" placeholder="Jumlah Obat...">
            <a href="#" onclick="closePopupedit()"><button type="button" class="btn-removeedit" onclick="openPopupsukses()">Ya</button></a>
        </form>
        <a href="#"><button type="button" onclick="closePopupedit()" class="btn-removeedit">
                Batal
            </button></a>
    </div>
    <div class="popupsukses" id="popupsukses">
        <i class="fa-solid fa-cart-plus"></i>
        <h2>Anda Yakin Ingin Menghapus Obat dari keranjang?</h2>
        <p>Obat yang telah dihapus dari keranjang tidak dapat dikembalikan lagi</p>
        <a href="#"><button type="button" id="hapusBtn" class="btn-removeedit">
                Ya
            </button></a>
        <a href="#"><button type="button" onclick="closePopupsukses()" class="btn-removeedit">
                Kembali
            </button></a>
    </div>
    <section class="home swiper" id="home">

        <div class="swiper-wrapper">
            <div class="container swiper-slide container-obat detailriwayatkeranjangcontainer">
                <img src="../client_edit/image/assets/obat2.jpg" alt="" />
                <div class="content3 content-obat margin-top" data-aos="fade-up">
                    <div class="content-obat-judul" id="content-obat-judul">
                        <h3>Checkout Pembelian Obat<i class="fa-solid fa-pills"></i></h3>
                        <h1><?= $text ?></h1>
                    </div>
                    <br>
                    <?php if ($keranjang_exist) { ?>
                        <div class="riwayatkeranjang-wrapper" id="riwayatkeranjanginfo">
                            <div class="riwayatkeranjang-info">

                                <div class="judultabelkeranjang">
                                    <i class="fa-solid fa-pills"></i>Product Obat-Obatan
                                </div>
                                <div class="tabelkeranjang">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>
                                                    Nama Product Obat<i class="fa-solid fa-pills"></i>
                                                </th>
                                                <th>
                                                    Jumlah<i class="fa-solid fa-arrow-down-wide-short"></i>
                                                </th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($isi as $item) {
                                                echo "<tr>";
                                                echo "<td class='yellow'>" . $i . "</td>";
                                                echo "<td>" . $item['nama_obat'] . "</td>";
                                                echo "<td>" . $item['jumlah'] . " Buah</td>";
                                                echo "<td><button onclick='openPopupsukses(\"" . $item['nama_obat'] . "\")'>Hapus<i class='fa-solid fa-trash-can'></i></button></td>";
                                                echo "</tr>";
                                                $i++;
                                            }

                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="riwayatkeranjang-info">
                                <div class="judultabelkeranjang">
                                    <i class="fa-regular fa-id-card"></i>Status Keranjang
                                </div>
                                <div class="riwayatkeranjang-info-wrapper">
                                    <!-- <div class="statusriwayatkeranjang">
                          <h3>Status Pelayanan</h3>
                          <p class="green">Sudah Dilayani</p>
                      </div> -->
                                    <div class="totalbelanja">
                                        <h3>Total Belanja</h3>
                                        <p><?= $total ?> Buah</p>
                                    </div>

                                    <div class="alamatpengiriman">
                                        <h3 class="yellow">Alamat Pengiriman</h3>
                                        <form action="" class="alamatform">
                                            <div class="form-group-alamat">
                                                <i class="fa-solid fa-map-location-dot"></i>
                                                <input type="text" name="alamat" id="alamat" placeholder="Alamat Lengkap...">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tombolkembali">
                                        <a href="#" onclick="openPopuphapus()"> <i class="fa-regular fa-circle-check"></i>Konfirmasi Pesanan</a>
                                    </div>
                                    <br>
                                    <div class="tombolkembali">
                                        <a href="/client/obat"><i class="fa-solid fa-angles-left"></i>Kembali</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>

    </section>
    <!-- END MAIN MENU SECTION -->
    <!-- CONTACT SECTION -->
    <section class="contacts" id="contacts" data-aos="fade-up">
        <div class="judulcontact">
            <h3>Contact Info</h3>
            <p>Informasi lanjutan mengenai layanan,akun,transaksi,dll silahkan hubungi kontak kami</p>
        </div>
        <div class="contactinfo">
            <div class="contact-menu">
                <div class="icons">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <p>@mutiaramedicalservice</p>
            </div>
            <div class="contact-menu">
                <div class="icons">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="number">
                    <p>021-29386426</p>
                    <p>0811 9990 801</p>
                </div>
            </div>
            <div class="contact-menu">
                <div class="icons">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <p>hiroshipatiroi@pearl-medic.com</p>
            </div>
            <div class="contact-menu">
                <div class="icons">
                    <i class="fa-solid fa-map-location-dot"></i>
                </div>
                <p>Signature Park, K03 Jl. M.T Haryono Kav 22, Jakarta Selatan</p>
            </div>
        </div>
    </section>
    <!-- END CONTACT SECTION -->

    <!-- FOOTER SECTION -->
    <section class="footer" id="footer">
        <div class="footer_wrapper">
            <div class="footer1">
                <div class="flex-rowww">
                    <div class="nama_toko">
                        <a href="#" class="logo"><img src="/image/logo/pearlmedic2.png" alt="">
                            <p>Pearl Medic</p>
                        </a>
                    </div>
                    <p>Where Wellness Meet Our Care</p>
                </div>
                <div class="footer1_flex">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-solid fa-phone"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                    <a href="#"><i class="fa-solid fa-map-location-dot"></i></a>
                </div>
            </div>
            <div class="footer2">
                <h3>Layanan Kami</h3>
                <ul>
                    <li><a href="/client/medicalcheckup">Medical Check Up</a></li>
                    <li><a href="/client/vaksin">Vaksinasi</a></li>
                    <li><a href="/client/obat">Pembelian Obat</a></li>
                    <li><a href="/client/darurat">Layanan Darurat</a></li>
                </ul>
            </div>
            <div class="footer3">
                <h3>Menu</h3>
                <ul>
                    <li><a href="/client">Home</a></li>
                    <li><a href="#home">Layanan Kami</a></li>
                    <li><a href="#contacts">Contact</a></li>
                    <li><a href="/client/keranjang">Keranjang<i class="fa-solid fa-cart-shopping"></i></a></li>
                    <li><a href="/client/myAccount">Profile</a></li>
                </ul>
            </div>
            <div class="footer4">
                <h3>Our Address</h3>
                <ul>
                    <li><i class="fa-solid fa-map-marker-alt"></i> Jl. M.T Haryono, Jakarta Selatan</li>
                    <li><i class="fa-solid fa-phone"></i> 021-29386426</li>
                    <li><i class="fa-solid fa-envelope"></i> hiroshipatiroi@pearl-medic.com</li>
                    <!-- clock icon -->
                    <li><i class="fa-solid fa-clock"></i>08:00am - 18.00am</li>
                </ul>

            </div>
        </div>
    </section>
    <!-- END FOOTER SECTION -->


    <!-- Loader Section -->
    <div class="loader-container">
        <img src="../client_edit/image/assets/laptop.gif" alt="">
    </div>
    <!-- End Loader Section -->
    <!-- aos script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- END aos Script -->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- END Swiper JS -->
    <script src="../client_edit/scriptsjs/aos.js"></script>
    <script src="../client_edit/scriptsjs/data.js"></script>
    <script src="../client_edit/scriptsjs/swiper.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
        let popup = document.getElementById("popup");

        function openPopup() {
            popup.classList.add("open-popup");
        }

        function closePopup() {
            popup.classList.remove("open-popup");
        }

        // background popup
        let container_popup = document.querySelector(".container_popup");
        let btn_popup = document.querySelector(".btn_popup");

        btn_popup.addEventListener("click", function() {
            container_popup.classList.add("active");
        });

        // close popup
        let btn_remove = document.querySelector(".btn-remove");
        btn_remove.addEventListener("click", function() {
            container_popup.classList.remove("active");
        });
    </script>
    <script>
        // pop up edit
        let popupedit = document.getElementById("popupedit");

        function openPopupedit() {
            popupedit.classList.add("open-popup");
        }

        function closePopupedit() {
            popupedit.classList.remove("open-popup");
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

    <script>
        // pop up edit
        let popupsukses = document.getElementById("popupsukses");

        function openPopupsukses(nama_obat) {
            popupsukses.classList.add("open-popup");
            //button add event listener
            const hapusBtn = document.getElementById('hapusBtn');
            hapusBtn.addEventListener('click', function() {
                hapusObat(nama_obat);
            });
        }

        function hapusObat(nama_obat) {
            //ajax delete
            $.ajax({
                url: '<?= base_url('/client/ajaxHapusObat') ?>',
                type: 'POST',
                data: {
                    nama_obat: nama_obat,
                    id_keranjang: <?= $id_keranjang ?>,
                },
                success: function(data) {
                    //refresh
                    location.reload();
                }
            });
        }

        function closePopupsukses() {
            popupsukses.classList.remove("open-popup");
        }
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script>
        // pop up edit
        let popuphapus = document.getElementById("popuphapus");

        function openPopuphapus() {
            //get element by id alamat value
            var alamat = document.getElementById("alamat").value;
            //if empty alamat, show alert
            if (alamat == "") {
                alert("Alamat tidak boleh kosong");
                return false;
            }
            popuphapus.classList.add("open-popup");
            const pesanBtn = document.getElementById('pesanBtn');
            pesanBtn.addEventListener('click', function() {
                pesanObat(alamat);
            });
        }

        function pesanObat(alamat) {
            //ajax delete
            $.ajax({
                url: '<?= base_url('/client/ajaxPesanObat') ?>',
                type: 'POST',
                data: {
                    id_keranjang: <?= $id_keranjang ?>,
                    alamat: alamat,
                },
                success: function(data) {
                    //go to client/history
                    window.location.href = "<?= base_url('/client/history') ?>";
                }
            });
        }

        function closePopuphapus() {
            popuphapus.classList.remove("open-popup");
        }
    </script>

    <script>
        let tabelkeranjangsmnt = document.getElementById('tabelkeranjangsmnt');
        let konfirmasicart = document.querySelector('.konfirmasicart');
        let cart = document.querySelector('.cart');

        cart.addEventListener('mouseover', function() {
            tabelkeranjangsmnt.style.visibility = 'visible';
            konfirmasicart.style.visibility = 'visible';
        });
        cart.addEventListener('click', function() {
            tabelkeranjangsmnt.style.visibility = 'hidden';
            konfirmasicart.style.visibility = 'hidden';
        });
    </script>
</body>
</body>

</html> konfirmasicart.style.visibility = 'visible';
});
cart.addEventListener('click', function() {
tabelkeranjangsmnt.style.visibility = 'hidden';
konfirmasicart.style.visibility = 'hidden';
});
</script>
</body>
</body>

</html> konfirmasicart.style.visibility = 'visible';
});
cart.addEventListener('click', function() {
tabelkeranjangsmnt.style.visibility = 'hidden';
konfirmasicart.style.visibility = 'hidden';
});
</script>
</body>
</body>

</html> konfirmasicart.style.visibility = 'visible';
});
cart.addEventListener('click', function() {
tabelkeranjangsmnt.style.visibility = 'hidden';
konfirmasicart.style.visibility = 'hidden';
});
</script>
</body>
</body>

</html>