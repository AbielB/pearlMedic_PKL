<?php

require 'functions.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin || Pearl Medic</title>
    <!-- Link Favicon -->
    <link rel="shortcut icon" href="./img/logo/pearlmedic.png" type="image/x-icon">
    <!-- END Link Favicon -->
    <!-- CSS Links -->
    <link rel="stylesheet" href="./css/style.min.css?v=<?php echo time(); ?>">
    <!-- END CSS Links -->
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- END Box Icons -->
    <!-- LINK FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- END LINK FONT AWESOME -->
</head>

<body>
    <!-- NAVIGATION BAR -->
    <nav id="nav_all">
        <div class="container">
            <div class="nav_company">
                <img src="./img/logo/pearlmedic2.png" alt="logopearlmedic" style="width: 55px;">
                <a href="index.php" class="nav-logo">
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
        <div class="loginadmin" id="register_admin">
            <h1>Register Akun Admin</h1>
            <ul>
                <li>
                    <form action="" method="POST" id="form_register">
                        <div class="form-group">
                            <i class="fas fa-user"></i>
                            <input type="text" name="username" id="username" required placeholder="Username">
                        </div>
                        <span id="error_username" class="display"></span>
                        <div class="form-group">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="text" name="email" id="email" required placeholder="Email">
                        </div>
                        <span id="error_email" class="display"></span>
                        <div class="form-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" id="password" required placeholder="Password">
                        </div>
                        <span id="error_password" class="display"></span>
                        <div class="form-group">
                            <i class="fas fa-unlock"></i>
                            <input type="password" name="confirm_pass" id="confirm_pass" required
                                placeholder="Konfirmasi Password">
                        </div>
                        <span id="error_confirm_pass" class="display"></span>
                        <div class="form-group1">
                            <i class="fa-solid fa-key"></i>
                            <input type="submit" id="register" name="register" value="Daftarkan Akun">
                        </div>
                    </form>
                </li>
                <a href="login.php">Sudah Punya Akun? Login Disini!</a>
            </ul>
        </div>
    </div>

    <!-- END LOGIN SECTION -->
    <script defer src="registrasi.js"></script>
</body>
<style>
.loginadmin_background {
    background-image: url(img/assets/flat-lay-health-still-life-arrangement-with-copy-space.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    height: 130vh;
}

.display {
    display: none;
    text-align: left;
    margin-top: -15px;
    margin-bottom: -15px;
    color: red;
    font-size: 14px;
}
</style>

</html>