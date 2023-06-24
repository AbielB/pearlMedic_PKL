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
        <i class="fa-solid fa-trash-can"></i>
        <h2>Anda Yakin Ingin Menghapus ?</h2>
        <a href="#"><button type="button" class="btn-remove" onclick="closePopuphapus()">
                Ya
            </button></a>
        <a href="#"><button type="button" onclick="closePopuphapus()" class="btn-remove">
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
        <h2>Sukses</h2>
        <p>Obat Telah Berhasil Dimasukkan Ke Keranjang</p>
        <button type="button" onclick="closePopupsukses()" class="btn-removeedit">
            Kembali
        </button>
    </div>
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <div class="container swiper-slide container-obat">
                <img src="../client_edit/image/assets/obat2.jpg" alt="" />
                <div class="content-obat" data-aos="fade-up">
                    <div class="content-obat-judul">
                        <h3>Layanan Pembelian Obat<i class="fa-solid fa-pills"></i></h3>
                        <h1>Silahkan pilih jenis obat yang ingin anda pilih sesuai dengan kebutuhan dan rekomendasi
                            dokter</h1>
                    </div>
                    <div class="content-obat-info">
                        <div class="content-obat-search">
                            <input type="text" id="search_obat" placeholder="Pencarian Obat & Jenis Obat..." value='<?= $search ?>' />
                            <button type="button" class="btn-search"><i class="fa-solid fa-magnifying-glass" onclick="search()"></i></button>
                        </div>
                        <div class="content-obat-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Obat</th>
                                        <th style="width:10%">Jumlah</th>
                                        <th><i class="fa-solid fa-cart-plus"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //foreach obat
                                    //num = get sort if exist
                                    $num = isset($_GET['sort']) ? $_GET['sort'] : 1;
                                    $num = ($num - 1) * 15 + 1;
                                    //if num = 0, num = 1
                                    if ($num == 0) {
                                        $num = 1;
                                    }
                                    foreach ($obat as $obat) {
                                        echo "<tr>";
                                        echo "<td>" . $num . "</td>";
                                        echo "<td id='nama" . $obat['id_obat'] . "'>" . $obat['nama_obat'] . "</td>";
                                        //echo input jumlah
                                        echo "<td><input type='number' name='jumlah' id='" . $obat['id_obat'] . "' placeholder='Jumlah Obat...' class='jumlahobat'></td>
                                            <style>
                                                .jumlahobat{
                                                    padding: 5px;
                                                    border-radius: 10px;
                                                }
                                            </style>
                                        
                                        ";
                                        echo "<td><button type='button' class='btn-add' onclick='tambahObat(" . $obat['id_obat'] . ")'>Tambah <i class='fa-solid fa-plus'></i></button></td>";
                                        echo "</tr>";
                                        $num = $num + 1;
                                    }
                                    ?>

                                </tbody>
                            </table>

                        </div>
                        <div class="pagination">

                            <?php
                            //get current link
                            $current_link = $_SERVER['REQUEST_URI'];
                            //if isset get sort, delete from link
                            if (isset($_GET['sort'])) {
                                $sort = $_GET['sort'];
                                $current_link = str_replace('&sort=' . $_GET['sort'], '', $current_link);
                            } else {
                                $sort = 1;
                            }
                            //remove any &
                            $current_link = str_replace('&&', '&', $current_link);
                            //if isset get search, add & to link
                            if (isset($_GET['search'])) {
                                $current_link .= '&';
                            }
                            //else, add ?
                            else {
                                $current_link .= '?';
                            }
                            $start_rows = $sort - 1;
                            //if start_rows < 1, start_rows = 1
                            if ($start_rows < 1) {
                                $start_rows = 1;
                            }
                            $end_rows = $start_rows + 7;
                            if ($end_rows > $num_rows) {
                                $end_rows = $num_rows;
                            }

                            echo '<a href="' . $current_link . '">&laquo;</a>';
                            //for loop 1 to num_rows, echo a href
                            for ($i = $start_rows; $i <= $end_rows; $i++) {
                                echo "<a href='" . $current_link . "sort=" . $i . "' id='color" . $i . "'>" . $i . "</a>";
                            }
                            echo '<a href="' . $current_link . 'sort=' . $num_rows . '">&raquo;</a>';
                            ?>
                        </div>
                        <div class="formtambahobat">
                            <form action="/client/tambahObatLain" class="formtambahobat1" method="post">
                                <h3>Obat yang dicari tak ada di tabel?</h3>
                                <p>silahkan pesan obat melalui form dibawah ini </p>
                                <div class="form_tambah">
                                    <i class="fa-solid fa-tablets"></i>
                                    <input type="text" name="nama_obat" id="namaobat" placeholder="Isi Nama Obat...">
                                </div>

                                <div class="form_tambah">
                                    <i class="fa-solid fa-arrow-down-wide-short"></i>
                                    <input type="number" name="jumlah_lain" id="jumlah_lain" placeholder="Isi Jumlah Obat">
                                </div>
                                <!-- hidden input id_keranjang -->
                                <input type="hidden" name="id_keranjang" value="<?= $id_keranjang ?>">
                                <button type="submit" class="form_tambah_button">
                                    <i class="fa-solid fa-cart-plus"></i>
                                    Tambahkan
                                </button>
                            </form>
                        </div>
                        <br>
                    </div>
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
    <!-- CART SECTION -->
    <div class="cart-logo">
        <button id="cart-button">
            <i class="fa-solid fa-shopping-cart"></i>
            <p>My Cart <i class="fa-solid fa-caret-down" id="down"></i><i class="fa-solid fa-caret-up" id="up"></i></p>
        </button>
    </div>
    <div class="temporarycart" id="temporarycart">
        <div class="xsign" id="xsign">
            <i class="fa-solid fa-times"></i>
        </div>
        <div class="carttable">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // foreach isi, echo tr td
                    foreach ($isi as $key => $value) {
                        echo "<tr>";
                        echo "<td>" . ($key + 1) . "</td>";
                        echo "<td>" . $value['nama_obat'] . "</td>";
                        echo "<td>" . $value['jumlah'] . " Buah</td>";
                        echo "<td><button type='button' onclick = 'hapus(\"" . $value['nama_obat'] . "\")'><i class='fa-solid fa-trash-can'></i></button></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="button">
                <a href="../client/keranjang">
                    <button type="button">Check Out</button>
                </a>
                <button type="button" onclick="hapusAll()">Delete All</button>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                <script>
                    function hapusAll() {
                        $.ajax({
                            url: "/client/hapusAllObat",
                            type: "POST",
                            data: {
                                id_keranjang: <?= $id_keranjang ?>
                            },
                            success: function(data) {
                                location.reload();
                            }
                        });
                    }

                    function hapus(nama_obat) {
                        id_keranjang = <?= $id_keranjang ?>;
                        console.log("clicked")
                        $.ajax({
                            url: '<?= base_url('/client/ajaxHapusObat') ?>',
                            type: 'POST',
                            data: {
                                nama_obat: nama_obat,
                                id_keranjang: id_keranjang
                            },
                            success: function(data) {
                                //if success, refresh
                                location.reload();
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- END CART SECTION -->



    <!-- FOOTER SECTION -->
    <section class="footer" id="footer">
        <div class="footer_wrapper">
            <div class="footer1">
                <div class="flex-rowww">
                    <div class="nama_toko">
                        <a href="#" class="logo"><img src="../client_edit/image/logo/pearlmedic2.png" alt="">
                            <p>Pearl Medic</p>
                        </a>
                    </div>
                    <p>Where Wellness Meet Our Care</p>
                </div>
                <!-- <div class="footer1_flex">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-solid fa-phone"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                    <a href="#"><i class="fa-solid fa-map-location-dot"></i></a>
                </div> -->
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
                    <li><a href="#">Keranjang<i class="fa-solid fa-cart-shopping"></i></a></li>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
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

        function openPopupsukses() {
            popupsukses.classList.add("open-popup");
        }

        function closePopupsukses() {
            //refresh
            location.reload();
        }
    </script>
    <script>
        // pop up edit
        let popuphapus = document.getElementById("popuphapus");

        function openPopuphapus() {
            popuphapus.classList.add("open-popup");
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

        //function search
        function search() {
            //redirect to /client/obat?search=keyword
            let keyword = document.getElementById('search_obat').value;
            window.location.href = '/client/obat?search=' + keyword;
        }
    </script>

    <!--  Ajax  -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
        function tambahlain() {
            jumlah = document.getElementById('jumlah_lain').value;
            nama_obat = document.getElementById('nama_obat').value;
            //if jumlah = 0 or null, alert
            if (jumlah == 0 || jumlah == null) {
                alert("Jumlah Tidak Boleh Kosong");
                return;
            }
            //if nama_obat = null, alert
            if (nama_obat == null) {
                alert("Nama Obat Tidak Boleh Kosong");
                return;
            }
            id_keranjang = <?= $id_keranjang ?>;
            //ajax
            $.ajax({
                url: '<?= base_url('/client/ajaxTambahObat') ?>',
                type: 'POST',
                data: {
                    id: 0,
                    id_keranjang: id_keranjang,
                    jumlah: jumlah,
                    nama_obat: nama_obat
                },
                success: function(data) {
                    //if success, alert
                    alert("Berhasil Ditambahkan");
                    //refresh
                    location.reload();
                }
            });
        }
        //get element by id color + id
        <?php
        //if not isset get sort, set default sort = 1
        if (!isset($_GET['sort'])) {
            $_GET['sort'] = 1;
        }
        ?>
        document.getElementById('color' + <?= $_GET['sort'] ?>).style.color = '#bd6133';


        function tambahObat(id) {
            jumlah = document.getElementById(id).value;
            nama_obat = document.getElementById('nama' + id).innerHTML;
            //if jumlah = 0 or null, alert
            if (jumlah == 0 || jumlah == null) {
                alert("Jumlah Tidak Boleh Kosong");
                return;
            }
            id_keranjang = <?= $id_keranjang ?>;
            console.log(id, id_keranjang, jumlah, nama_obat)
            //ajax request to /client/tambahObat
            $.ajax({
                url: '<?= base_url('/client/ajaxTambahObat') ?>',
                type: 'POST',
                data: {
                    id: id,
                    id_keranjang: id_keranjang,
                    jumlah: jumlah,
                    nama_obat: nama_obat
                },
                success: function(data) {
                    //openpopupsekses
                    openPopupsukses();
                }
            });

        }

        function hapus(nama_obat) {
            id_keranjang = <?= $id_keranjang ?>;
            console.log("clicked")
            $.ajax({
                url: '<?= base_url('/client/ajaxHapusObat') ?>',
                type: 'POST',
                data: {
                    nama_obat: nama_obat,
                    id_keranjang: id_keranjang
                },
                success: function(data) {
                    //if success, refresh
                    location.reload();
                }
            });
        }
    </script>

    <style>
        .dropdown_content {
            margin-top: 27px !important;
        }

        .profiledropdown {
            margin-top: 240px !important;
        }

        @media only screen and (max-width: 768px) {
            .dropdown_content {
                margin-top: -5px !important;
            }
        }

        #search_obat {
            font-size: 14px !important;
        }

        .cart-logo {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 1000;
        }

        .cart-logo button {
            display: flex;
            flex-direction: row;
            padding: 10px 20px;
            background-color: transparent;
            align-items: center;
        }

        .cart-logo button .fa-shopping-cart {
            font-size: 20px;
            color: #2D2B27;
            margin-right: -5px;
            background-color: #D6A076;
            padding: 15px 15px;
            border-radius: 50%;
            z-index: 1000;
        }

        .cart-logo button p {
            font-size: 14px;
            color: white;
            background-color: #2D2B27;
            width: 100px;
            padding: 5px 5px;
            border-bottom-right-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }

        .cart-logo button p i {
            margin-left: 5px;
        }

        .cart-logo button p #up {
            display: none;
        }

        .cart-logo button p:hover {
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .cart-logo button:hover .fa-shopping-cart {
            background-color: #2D2B27;
            color: #D6A076;
        }

        .cart-logo button p:hover {
            background-color: #D6A076;
            color: #2D2B27;
        }

        .temporarycart {
            background-color: #2D2B27;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: fixed;
            bottom: 50px;
            left: 68px;
            z-index: 1000;
            padding: 5px 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            width: 350px;
            border-bottom-right-radius: 10px;
            text-align: center !important;
            visibility: hidden;
        }

        .temporarycart .xsign {
            display: flex;
            flex-direction: row;
            width: 100%;
            justify-content: flex-end;
            align-items: center;
        }

        .temporarycart .xsign i {
            color: white;
            font-size: 20px;
            margin-right: 10px;
        }

        .temporarycart .xsign i:hover {
            cursor: pointer;
            color: #D6A076;
            transition: all 0.2s ease-in-out;
        }

        .temporarycart .carttable tbody tr td i {
            color: #B73E3E;
        }

        .temporarycart .carttable tbody tr td i:hover {
            font-size: 14px;
            cursor: pointer;
            color: #D6A076;
            transition: all 0.2s ease-in-out;
        }

        .temporarycart .carttable table thead tr th {
            color: #D6A076;
            padding: 10px;
            font-size: 14px;
        }

        .temporarycart .carttable table tbody tr td {
            color: white;
            padding: 10px;
            font-size: 12px;
        }

        .temporarycart .carttable .button {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .temporarycart .carttable .button button {
            background-color: #D6A076;
            color: #2D2B27;
            padding: 5px 15px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            margin-right: 10px;
        }

        .temporarycart .carttable .button button:hover {
            background-color: transparent;
            color: #D6A076;
            border: 1px solid #D6A076;
            transition: all 0.2s ease-in-out;
        }

        @media only screen and (max-width:425px) {
            .temporarycart {
                left: 0;
                bottom: 40px;
            }

            .cart-logo {
                left: -20px;
            }

            .cart-logo #cart-button .fa-shopping-cart {
                border-radius: 5px;
                padding: 7px;
            }
        }
    </style>
    <script>
        let cartbtn = document.getElementById("cart-button");
        let caretdown = document.getElementById("down");
        let caretup = document.getElementById("up");
        let temporarycart = document.getElementById("temporarycart");
        let xsign = document.getElementById("xsign");

        cartbtn.addEventListener("click", function() {
            caretdown.style.display = "none";
            caretup.style.display = "block";
            temporarycart.style.visibility = "visible";
        })

        xsign.addEventListener("click", function() {
            caretdown.style.display = "block";
            caretup.style.display = "none";
            temporarycart.style.visibility = "hidden";
        })
    </script>

    <!-- // foreach isi, echo tr td
                    // foreach ($isi as $key => $value) {
                    //     echo "<tr>";
                    //     echo "<td>" . $value['nama_obat'] . "</td>";
                    //     echo "<td>" . $value['jumlah'] . " Buah</td>";
                    //     echo "<td><button type='button onclick = 'hapus(\"" . $value['nama_obat'] . "\")'>Hapus <i class='fa-solid fa-trash-can'></i></button></td>";
                    //     echo "</tr>";
                    // }
                  -->
</body>
</body>

</html>