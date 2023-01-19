<?php

// require 'functions.php';



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin || Pearl Medic</title>
    <!-- Link Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url("img/logo/pearlmedic.png"); ?>" type="image/x-icon">
    <!-- END Link Favicon -->
    <!-- CSS Links -->
    <link rel="stylesheet" href=" <?php echo base_url("css/style.min.css?v=" . time()); ?>">
    <!-- END CSS Links -->
    <!-- Box Icons -->
    <link rel=" stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- END Box Icons -->
    <!-- LINK FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- END LINK FONT AWESOME -->
    <style>
    #validasi_nama {
        color: red;
        font-size: 1em;
        width: 100% !important;
    }
    </style>
</head>

<body>
    <!-- NAVIGATION BAR -->
    <nav id="nav_all">
        <div class="container">
            <div class="nav_company">
                <img src="img/logo/pearlmedic2.png" alt="logopearlmedic" style="width: 55px;">
                <a href="/" class="nav-logo">
                    <h2>Pearl Medic</h2>
                </a>
            </div>

            <ul id="nav_items">
                <li>PT MUTIARA MEDICAL SERVICE</li>
            </ul>
        </div>
    </nav>
    <!-- END NAVIGATION BAR -->
    <!-- <br>
    <br>
    <br> -->
    <!-- LOGIN SECTION -->
    <div class="loginadmin_background">
        <div class="loginadmin">
            <h1>Login Admin</h1>
            <ul>
                <li>
                    <form action="/loginAdmin" method="post" id="form_login">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <i class="fas fa-user"></i>
                            <input type="text" name="username" id="username" placeholder="Username">
                        </div>
                        <p id="validasi_nama"><?= $error ?></p>
                        <div class="form-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" id="password" placeholder="Password">
                            <p id="validasi_pass"></p>
                        </div>
                        <span id="validasi_login" class="display"></span>
                        <div class="form-group1">
                            <i class="fas fa-unlock"></i>
                            <input type="submit" id="login" name="login" value="Login">
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <!-- END LOGIN SECTION -->
    <script defer src="login.js"></script>
</body>
<style>
.loginadmin_background {
    background-image: url(img/assets/doctor-working-with-laptop-computer-writing-paperwork-hospital-background.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    height: 100vh;
}
</style>

</html>