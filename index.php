<?php
    session_start();
    require 'koneksi.php';
    
    if(!isset($_SESSION['login'])) {
        print_r($_SESSION);
        header('location: user/login.php');
        exit;
    }
    $level = $_SESSION['level'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Web Icon -->
    <title>Pixel: Rental Ps</title>
    <link rel="shortcut icon" href="img/background/logo-p.png">
    
    <!-- Link Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/213e56f9ea368890b9d2da0577e49dab?family=Zona+Pro" rel="stylesheet" type="text/css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/style-mobile.css">
</head>
<body>
    <!-- HEADER -->
    <header class="main" id="home">
        <!-- navbar -->
        <nav class="mode-bg">
            <div class="logo">
                <a href="index.php" class="mode-text">
                    <img src="img/qw.png" alt="">
                    <p>Listrik Biru</p>
                </a>
            </div>

            <ul>
                <?php if($level == 'admin') { ?>
                    <li><a class="mode-text" href="pembelian/bacapembelian.php">Pembelian</a></li>
                    <li><a class="mode-text" href="user/bacauser.php">Pelanggan</a></li>
                    <li><a class="mode-text" href="tarif/bacatarif.php">Tarif</a></li>
                <?php }?>
            </ul>
            <div class="logout-btn">
                <a href="logout.php">Logout</a>
            </div>
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
                    <button class="rent-btn">Pembelian</button>
                </a>
                <a href="php/game.php">
                    <button class="play-btn">Tarif</button>
                </a>
                <!-- <h4>Available Service :</h4>
                <img src="img/service/services.png" alt=""> -->
            </div>
            <div class="header-item-right">
                <!-- <img src="img/service/ps5-sticks.webp" class="img-gif" alt=""> -->
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
                <img src="img/partners/ovo.png" alt="">
                <img src="img/partners/dana.png" alt="">
                <img src="img/partners/gopay.png" alt="">
            </div>
        </div>

        <div class="service-container">
            <h3>Our Services</h3>
            <div class="service-cards">
                <div class="card-panel mode-bg mode-text">
                    <img src="img/service/ps-logo.png" class="mode-img" alt="">
                    <h4>Playstation</h4>
                    <p>PlayStation is a brand produced by Sony Interactive Entertainment. The first PlayStation console was released in Japan in December 1994, and released worldwide the following year.</p>
                </div>
                <div class="card-panel mode-bg mode-text">
                    <img src="img/service/xbox-logo.png" class="mode-img" alt="">
                    <h4>Xbox</h4>
                    <p>Xbox is a video gaming brand created and owned by Microsoft. The brand was first introduced in the United States in November 2001, with the launch of the original Xbox console.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END MAIN CONTENT -->


 

    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="js/dark-mode.js"></script>
    <script src="js/navbar-mobile.js"></script>
    <script src="https://kit.fontawesome.com/a374d5ed26.js" crossorigin="anonymous"></script>
</body>
</html>