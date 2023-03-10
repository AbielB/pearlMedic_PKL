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
    <!-- Link output.css -->
    <link rel="stylesheet" href="/public/client_edit/css/output.css">
    <!-- END Link output.css -->
    <title>Admin || Pearl Medic</title>
    <style>
    /*id pelayananDarurat onHover size 110%*/
    #pelayananDarurat {
        /*transition 0.5s all*/
        transition: 0.5s all;
    }

    #pelayananDarurat:hover {
        font-size: 150%;
        /*underline*/
        text-decoration: underline;
    }
    </style>
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
                <a href="/admin" class="active">
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
        <!-- Title Menu -->
        <main id="mainmenu">
            <h1 id="color-change2"><span>Admin </span> Dashboard</h1>
            <div class="date date-fix">
                <h2><?php
                    //seperate the date into year, month, and day
                    $date = explode('-', $date);
                    //change the month number into month name
                    $month = date('F', mktime(0, 0, 0, $date[1], 10));
                    //combine the date into a string
                    $date = $date[2] . ' ' . $month . ' ' . $date[0];
                    echo $date; ?></h2>
            </div>
            <!-- END Title Menu -->
            <!-- Layanan Terbaru -->
            <div class="orderterbaru">
                <!-- Flow Chart Section -->
                <div class="gridchart">
                    <div class="flowchart">
                        <h2>Client Perusahaan</h2>
                        <div id="piechart" class="charts"></div>
                    </div>
                    <div class="flowchart">
                        <h2>Pesanan Belum Dilayani</h2>
                        <div id="donutchart" class="charts"></div>
                    </div>
                </div>
                <!-- END Flow Chart Section -->
                <!-- END Layanan Terbaru -->
                <!-- Layanan Terbaru -->
                <div class="orderterbaru orderindexfix">
                    <h2 id="pelayananDarurat"><a href="/admin/LayananDarurat"><span>Pelayanan Darurat
                                Belum
                                Dilayani</span></a></h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Nama Perusahaan</th>
                                <th>Tanggal Pelaporan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($rowDarurat as $row) {
                                if ($row->status == 1) {
                                    $status = "Belum Dilayani";
                                    $color = "red";
                                }
                                if ($row->status == 2) {
                                    $status = "Dalam Proses";
                                    $color = "yellow";
                                }
                                if ($row->status == 3) {
                                    $status = "Sudah Dilayani";
                                    $color = "green";
                                }
                                echo "<tr>";
                                echo "<td>" . $row->nama_perusahaan . "</td>";
                                echo "<td>" . $row->tanggal_pelaporan . "</td>";
                                echo "<td class='" . $color . "'>" . $status . "</td>";
                                echo "</tr>";
                            }; ?>
                        </tbody>
                    </table>
                </div>
                <!-- END Layanan Terbaru -->
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
                    <div class="info info-fix">
                        <p>Hallo, <span><?php echo $name ?></span> </p>
                        <p class="text-muted">Admin</p>
                    </div>
                </div>
            </div>
            <div class="bottom">

                <div class="akunperusahaan akunperusahaan-fix">
                    <h2>Akun Perusahaan Aktif</h2>
                    <?php
                    //get rowPerusahaan
                    $i = 0;
                    foreach ($rowPerusahaan as $row) {
                        if ($i == 3) {
                            break;
                        }
                        $i++;
                        $namaPerusahaan = $row->nama_perusahaan;
                        $id = $row->id;
                        echo '<div class="item online">
                        <div class="icon">
                            <i class="fa-solid fa-building-user"></i>
                        </div>
                        <div class="right">
                            <div class="info info-fix">
                                <h3>' . $namaPerusahaan . '</h3>
                                <style>
                                .info-fix h3{
                                    margin-top: 10px;
                                }
                                </style>
                            </div>
                            <a href="/admin/DetailsDataPerusahaan?id=' . $id . '" class="red">Details</a>
                        </div>
                    </div>';
                    } ?>
                    <div class="item selengkapnya">
                        <div class="selengkapnya1">
                            <i class="fa-solid fa-building-circle-arrow-right"></i>
                            <h3><a href="/admin/DataPerusahaan">Lihat Selengkapnya</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BAGIAN KANAN MAIN MENU / DETAILS MENU -->

    <script src="./data.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Bidang', 'Jumlah Perusahaan'],
            ['Minyak/Tambang', <?php echo $tambang ?>],
            ['Energi', <?php echo $energi ?>],
            ['Kesehatan', <?php echo $kesehatan ?>],
            ['Transportasi', <?php echo $transportasi ?>],
            ['Lainnya', <?php echo $lainnya ?>]
        ]);

        var options = {
            backgroundColor: 'transparent',
            // margin-left -20px
            chartArea: {
                left: 20,
                top: 20,
                width: '75%',
                height: '80%'
            },
            colors: ['#f1c40f', '#e67e22', '#e74c3c', '#3498db', '#2ecc71'],
            fontSize: 12,
            fontColor: '#fff',
            fontName: 'Poppins',
            fontWeight: 'bold',
            fontStyle: 'normal',
            // array to data table width 100%
            legend: {
                width: '100%',
                position: 'right',
                alignment: 'center',
                textStyle: {
                    color: '#222',
                    fontSize: 12,
                    fontName: 'Poppins',
                    fontWeight: 'bold',
                    fontStyle: 'normal'
                }
            },



        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Pelayanan', 'Jumlah Pesanan'],
            ['Medical', <?php echo $jumlahMedical ?>],
            ['Obat', 2],
            ['Darurat', <?php echo $jumlahDarurat ?>],
            ['Vaksin', 2],
        ]);

        var options = {
            // title: 'My Daily Activities',
            pieHole: 0.4,
            backgroundColor: 'transparent',
            chartArea: {
                left: 20,
                top: 20,
                width: '75%',
                height: '80%'
            },
            colors: ['#f1c40f', '#e67e22', '#e74c3c', '#3498db', '#2ecc71'],
            fontSize: 12,
            fontColor: '#fff',
            fontName: 'Poppins',
            fontWeight: 'bold',
            fontStyle: 'normal',
            legend: {
                width: '100%',
                position: 'right',
                alignment: 'center',
                textStyle: {
                    color: '#222',
                    fontSize: 12,
                    fontName: 'Poppins',
                    fontWeight: 'bold',
                    fontStyle: 'normal'
                }
            },
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
    }
    </script>


    <style>
    .orderindexfix {
        margin-top: 20px;
        margin-bottom: 50px;
    }

    .orderindexfix h2 a span {
        font-size: 24px;
    }

    .date-fix {
        color: #665A48;
    }

    .date-fix h2 {
        font-size: 18px;
    }

    .akunperusahaan-fix {
        margin-top: 80px !important;
        margin-right: 10px;
    }

    .info-fix {
        margin-right: 20px;
    }
    </style>
</body>

</html>;