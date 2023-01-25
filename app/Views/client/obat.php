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
</head>

<body>
    <!-- NAVIGATION BAR SECTION -->
    <nav class="navigation_bar" id="navbar_color">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="01index.html" class="logo" data-aos="fade-left"><img src="../client_edit/image/logo/pearlmedic2.png"
                alt="" id="gambar1">
            <p>Pearl Medic</p>
        </a>
        <div class="navbar">
            <a href="01index.html" class="hidup" data-aos="fade-left">Home</a>
            <a href="#layanans" data-aos="fade-left" class="menu-button">Layanan<i
                    class="fa-solid fa-chevron-down"></i></a>
            <div class="menu_dropdown">
                <div class="dropdown_content">
                    <a href="10checkup.html" data-aos="fade-left" class="menu-isi">Medical Check Up<i
                            class="fa-solid fa-stethoscope"></i></a>
                    <a href="12vaksinasi.html" data-aos="fade-left" class="menu-isi">Vaksinasi<i
                            class="fa-solid fa-syringe"></i></a>
                    <a href="11obat.html" data-aos="fade-left" class="menu-isi">Pembelian Obat-Obatan<i
                            class="fa-solid fa-pills"></i></a>
                    <a href="07darurat.html" data-aos="fade-left" class="menu-isi">Pelayanan Darurat<i
                            class="fa-solid fa-truck-medical"></i></a>
                </div>
            </div>
            <a href="#contacts" data-aos="fade-left">Kontak Kami</a>
            <!-- <a href="#" data-aos="fade-left">Services</a> -->
            <a href="17checkoutobat.html" data-aos="fade-left">Keranjang <i class="fa-solid fa-cart-plus"></i></a>
        </div>
        <div class="profile" data-aos="fade-left">
            <div class="profilelogo">
                <i class="fa-solid fa-circle-user"></i>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="profiledropdown">
                <a href="03profileacc.html" data-aos="fade-left">My Account<i class="fa-solid fa-user-tie"></i></a>
                <a href="04editprofileacc.html" data-aos="fade-left">Edit Profile<i
                        class="fa-solid fa-user-pen"></i></a>
                <a href="05riwayat.html" data-aos="fade-left">History<i class="fa-solid fa-money-check"></i></a>
                <button data-aos="fade-left" onclick="openPopup()">Logout<i
                        class="fa-solid fa-right-from-bracket"></i></button>

            </div>
        </div>
    </nav>
    <!-- END NAVIGATION BAR SECTION -->
    <!-- MAIN MENU SECTION -->
    <div class="popup" id="popup">
        <i class="fa-solid fa-right-from-bracket"></i>
        <h2>Anda Yakin Ingin Log Out?</h2>
        <a href="02login.html"><button type="button" class="btn-remove">
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
            <a href="#" onclick="closePopupedit()"><button type="button" class="btn-removeedit"
                    onclick="openPopupsukses()">Ya</button></a>
        </form>
        <a href="#"><button type="button" onclick="closePopupedit()" class="btn-removeedit">
                Batal
            </button></a>
    </div>
    <div class="popupsukses" id="popupsukses">
        <i class="fa-solid fa-cart-plus"></i>
        <h2>Sukses</h2>
        <p>Obat Telah Berhasil Dimasukkan Ke Keranjang</p>
        <a href="#"><button type="button" onclick="closePopupsukses()" class="btn-removeedit">
                Kembali
            </button></a>
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
                            <input type="text" id="search_obat" placeholder="Pencarian Obat & Jenis Obat..."
                                value='<?= $search ?>' />
                            <button type="button" class="btn-search"><i class="fa-solid fa-magnifying-glass"
                                    onclick="search()"></i></button>
                        </div>
                        <div class="content-obat-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Obat</th>
                                        <th>Jumlah</th>
                                        <th><i class="fa-solid fa-cart-plus"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //foreach obat
                                    //num = get sort if exist
                                    $num = isset($_GET['sort']) ? $_GET['sort'] : 1;
                                    $num = ($num - 1) * 32;
                                    //if num = 0, num = 1
                                    if ($num == 0) {
                                        $num = 1;
                                    }
                                    foreach ($obat as $obat) {
                                        echo "<tr>";
                                        echo "<td>" . $num . "</td>";
                                        echo "<td>" . $obat['nama_obat'] . "</td>";
                                        //echo input jumlah
                                        echo "<td><input type='number' name='jumlah' id='" . $obat['id_obat'] . "' placeholder='Jumlah Obat...'></td>";
                                        echo "<td><button type='button' class='btn-add' onclick='ajaxTambah(" . $obat['id_obat'] . ")'>Tambah <i class='fa-solid fa-plus'></i></button></td>";
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
                                $current_link = str_replace('&sort=' . $_GET['sort'], '', $current_link);
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
                            ?>
                            <a href="<?= $current_link ?>" class="yellow">1</a>
                            <a href="<?= $current_link . 'sort=2' ?>">2</a>
                            <a href="<?= $current_link . 'sort=3' ?>">3</a>
                            <a href="<?= $current_link . 'sort=4' ?>">4</a>
                            <a href="<?= $current_link . 'sort=5' ?>">5</a>
                            <a href="<?= $current_link . 'sort=6' ?>">6</a>
                            <a href="<?= $current_link . 'sort=7' ?>">7</a>
                            <a href="<?= $current_link . 'sort=8' ?>">8</a>
                            <a href="<?= $current_link . 'sort=9' ?>">9</a>
                            <a href="<?= $current_link . 'sort=10' ?>">10</a>
                        </div>
                        <div class="formtambahobat">
                            <form action="" class="formtambahobat1">
                                <h3>Obat yang dicari tak ada di tabel?</h3>
                                <p>silahkan pesan obat melalui form dibawah ini </p>
                                <div class="form_tambah">
                                    <i class="fa-solid fa-tablets"></i>
                                    <input type="text" name="namaobat" id="namaobat" placeholder="Isi Nama Obat...">
                                </div>
                                <div class="form_tambah">
                                    <i class="fa-solid fa-file-prescription"></i>
                                    <input type="text" name="kemasan" id="kemasan"
                                        placeholder="Isi Kemasan Obat... (tablet,botol,dll)">
                                </div>
                                <div class="form_tambah">
                                    <i class="fa-solid fa-arrow-down-wide-short"></i>
                                    <input type="number" name="jumlah" id="jumlah_lain" placeholder="Isi Jumlah Obat">
                                </div>
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
    <div class="keranjangsaya">
        <div class="keranjangtable">
            <table id="tabelkeranjangsmnt">
                <thead>
                    <tr>
                        <th>Nama Obat</th>
                        <th>Jumlah</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TAWON M GOSOK EE 60ML</td>
                        <td>2 Buah</td>
                        <td><button type="button">Hapus <i class="fa-solid fa-trash-can"></i></button></td>
                    </tr>
                    <tr>
                        <td>TAWON M GOSOK EE 60ML</td>
                        <td>2 Buah</td>
                        <td><button type="button">Hapus <i class="fa-solid fa-trash-can"></i></button></td>
                    </tr>
                    <tr>
                        <td>TAWON M GOSOK EE 60ML</td>
                        <td>2 Buah</td>
                        <td><button type="button">Hapus <i class="fa-solid fa-trash-can"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="konfirmasicart">
            <a href="17checkoutobat.html">
                <div class="selengkapnya">
                    <i class="fa-solid fa-notes-medical"></i>Checkout
                </div>
            </a>
            <div class="hapus" onclick="openPopuphapus()">
                <i class="fa-solid fa-trash-can"></i> Hapus Semua
            </div>
        </div>
    </div>
    <div class="cart">
        <i class="fa-solid fa-cart-shopping"></i>
        Keranjang Saya
        <i class="fa-solid fa-caret-up"></i>
    </div>

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
                    <li><a href="10checkup.html">Medical Check Up</a></li>
                    <li><a href="12vaksinasi.html">Vaksinasi</a></li>
                    <li><a href="11obat.html">Pembelian Obat</a></li>
                    <li><a href="07darurat.html">Layanan Darurat</a></li>
                </ul>
            </div>
            <div class="footer3">
                <h3>Menu</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#home">Layanan Kami</a></li>
                    <li><a href="#contacts">Contact</a></li>
                    <li><a href="#">Keranjang<i class="fa-solid fa-cart-shopping"></i></a></li>
                    <li><a href="03profileacc.html">Profile</a></li>
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
        //get element by id jumlah
        var jumlah = document.getElementById("jumlah").value;
        //ajax to /ajax/keranjang
        $.ajax({
            url: "<?= base_url('client/AjaxObat') ?>",
            type: "POST",
            data: {
                id: id,
                jumlah: jumlah,
            },
            success: function(data) {
                alert("Status Berhasil Diubah");
            }
        });
        popupsukses.classList.add("open-popup");
    }

    function closePopupsukses() {
        popupsukses.classList.remove("open-popup");
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
</body>
</body>

</html>