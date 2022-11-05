<?php
    session_start();

    if(!isset($_SESSION['login'])) {
        print_r($_SESSION);
        header('location: user/login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Web Icon -->
    <title>Listrik Biru</title>
    <link rel="shortcut icon" href="img/logo/logo-listrik.png">
    
    <!-- Link Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/213e56f9ea368890b9d2da0577e49dab?family=Zona+Pro" rel="stylesheet" type="text/css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="stylesheet/style-mobile.css">
</head>
<body>
    <!-- HEADER -->
    <header class="main" id="home">
        <!-- navbar -->
        <nav class="mode-bg">
            <div class="logo">
                <a href="index.php" class="mode-text">
                    <img src="img/logo/logo-listrik.png" alt="">
                    <p>Listrik Biru</p>
                </a>
            </div>

            <ul>
                <li><a class="mode-text" href="tarif.php">Tarif</a></li>
                <?php if($_SESSION['akun']['level'] == 'admin') { ?>
                    <li><a class="mode-text" href="#">Transaksi</a></li>
                    <li><a class="mode-text" href="pelanggan.php">Pelanggan</a></li>
                <?php } if($_SESSION['akun']['level'] == 'user') { ?>
                    <li><a class="mode-text" href="user/profil.php">Profil</a></li>
                    <!-- -1 -->
                <?php } ?>
                <div class="logout-btn">
                    <a href="user/logout.php">Logout</a>
                </div>
            </ul>
            <div class="dark-mode-toggle">
                <input type="checkbox" class="checkbox" id="chk"/>
                <label class="label" for="chk">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                    <div class="ball"></div>
                </label>
            </div>

            <div class="menu-toggle">
                <input type="checkbox" id="menTog"/>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <!-- end navbar -->

        <div class="header-container">
            <div class="header-item-left">
                <h1>LISTRIK BIRU</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque possimus suscipit reiciendis, dolore, ratione quos ipsa iure aspernatur cum debitis inventore tenetur saepe. Doloremque, et deserunt voluptatum sapiente nesciunt illum repudiandae? Quod aspernatur nihil eius assumenda vitae tempore repellat autem pariatur! Voluptatum fugit nesciunt reprehenderit eum voluptatibus aliquam ipsa sed.</p>
                <a href="php/rent.php">
                    <button class="rent-btn">Pesan!</button>
                </a>
                <a href="php/game.php">
                    <button class="play-btn">Tarif</button>
                </a>
            </div>
            <div class="header-item-right">
            </div>
        </div>
    </header>
    <!-- END HEADER -->


    <!-- MAIN CONTENT -->
    <section>
        <div class="about-container mode-bg mode-text" id="about">
            <div class="about-title">
                <h2>ABOUT US</h2>
            </div>
            <div class="about-content">
                <p class="about-item-left"><b>Pixel</b> is a privately held Samarinda online video game rental subscription service that specializes in providing games for Sony and Microsoft systems starting from the sixth generation onwards. The business model of <b>Pixel</b> is similar to the DVD-by-mail subscription service Netflix and Blockbuster online. <b>Pixel</b> sends games to subscribers for a monthly fee.</p>
                <p class="about-item-right">Over 8,000 titles are available. In May 2018, Electronic Arts announced that they acquired cloud gaming technology assets and personnel from <b>Pixel</b> (including its Chicago outpost). <b>Pixel</b> is currently owned by the same ownership group as Alliance Entertainment and is operated as a stand-alone company.</p>
            </div>
        </div>

        <div class="partners-container mundur-dikit">
            <h3>Our Partners</h3>
            <div class="content-img">
                <img src="img/partners/dana.png" alt="">
                <img src="img/partners/ovo.png" alt="">
                <img src="img/partners/gopay.png" alt="">
            </div>
        </div>

        <div class="service-container">
            <h3>Our Services</h3>
            <div class="service-cards">
                <div class="card-panel mode-bg mode-text">
                    <!-- <img src="img/service/ps-logo.png" class="mode-img" alt=""> -->
                    <h4>Playstation</h4>
                    <p>PlayStation is a brand produced by Sony Interactive Entertainment. The first PlayStation console was released in Japan in December 1994, and released worldwide the following year.</p>
                </div>
                <div class="card-panel mode-bg mode-text">
                    <!-- <img src="img/service/xbox-logo.png" class="mode-img" alt=""> -->
                    <h4>Xbox</h4>
                    <p>Xbox is a video gaming brand created and owned by Microsoft. The brand was first introduced in the United States in November 2001, with the launch of the original Xbox console.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END MAIN CONTENT -->


    <!-- FOOTER -->
    <footer class="mode-bg">
        <div class="footer-container">
            <div class="footer-title" id="contact">
                <h2>CONTACT US</h2>
            </div>
            <div class="footer-contact-item">
                <div class="footer-item">
                    <h4>Location</h4>
                    <p>28 Jackson Blvd Ste 1020 Chicago<br>IL 60604-2340<br>Phone: +628 135 158 0524</p>
                </div>
                <div class="footer-item">
                    <h4>Find Us On</h4>
                    <div class="circle-container">
                        <!-- salah satu fitur pop up box (confirm) -->
                        <div class="circle ig">
                            <a href="https://www.instagram.com/pixel" onclick="return confirm('You will be redirected to other website.');"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <div class="circle fb">
                            <a href="https://www.facebook.com/pixel" onclick="return confirm('You will be redirected to other website.');"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                        <div class="circle wa">
                            <a href="https://www.whatsapp.com/pixel" onclick="return confirm('You will be redirected to other website.');"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                        <div class="circle tw">
                            <a href="https://www.twitter.com/pixel" onclick="return confirm('You will be redirected to other website.');"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="js/dark-mode.js"></script>
    <script src="js/navbar-mobile.js"></script>
    <script src="https://kit.fontawesome.com/a374d5ed26.js" crossorigin="anonymous"></script>
</body>
</html>