<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pearl Medic || Home</title>
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
    <nav class="navigation_bar logins" id="navbar_color">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="/" class="logo" data-aos="fade-left"><img src="../client_edit/image/logo/pearlmedic2.png" alt="" />
            <p>Pearl Medic</p>
        </a>
        <h3>
            <i class="fa-solid fa-right-to-bracket"></i>Login <span>Account</span>
        </h3>
    </nav>
    <!-- END NAVIGATION BAR SECTION -->
    <!-- MAIN MENU SECTION -->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <div class="container swiper-slide">
                <img src="../client_edit/image/assets/doctor1.jpg" alt="" />
                <div class="content" data-aos="fade-up">
                    <div class="login">
                        <!-- <h3>Login <span>Account</span></h3> -->
                        <div class="loginwrapper">

                            <form method="POST" class="formlogin" id="form_login" action="/loginClient">
                                <?= csrf_field(); ?>
                                <div class="logininput" id="logininput">
                                    <i class="fa-solid fa-user"></i>
                                    <input type="text" placeholder="Email..." name="email" id="username" />
                                </div>
                                <div class="logininput" id="logininput">
                                    <i class="fa-solid fa-lock"></i>
                                    <input type="password" placeholder="Password..." name="password" id="password" />
                                </div>
                                <p id="passworderror" class="display1"></p>
                                <p id="passerror"><?= $error ?></p>

                                <style>
                                #passerror {
                                    color: red;
                                    font-size: 12px;
                                    width: 100%;
                                    /* background-color: aqua; */
                                    margin-top: 10px;
                                }
                                </style>

                                <div class="submitlogin">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    <input type="submit" value="Login" />
                                </div>
                                <div class="loginanother">
                                    <p id="loginadmin"><a href="/indexAdmin" class="admin">Login as Admin</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <!-- END MAIN MENU SECTION -->
    <!-- Loader Section -->
    <!-- <div class="loader-container">
      <img src="image/assets/laptop.gif" alt="" />
    </div> -->
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
    <style>
    .loginanother {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
        width: 100%;
    }

    .loginanother #loginadmin {
        font-size: 16px;
    }

    .loginanother #loginadmin:hover {
        color: #f9a826;
        transition: all 0.3s ease-in-out;
    }
    </style>
</body>

</html>