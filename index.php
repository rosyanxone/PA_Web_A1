<?php 
    session_start();
    require 'koneksi.php';

    if(!isset($_SESSION['login'])){
        header("Location: login.php");
        exit;
    }
    $level = $_SESSION['level'];
    
?>

<html>
<head>
	<title>PT Listrik Biru</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link rel="SHORTCUT ICON" href="img/logo/colokan.png">
</head>
<body>
    <header>
        <nav>
            <div class="nav mode">
                <div class="logo">
                    <img src="img/qw.png" alt="">
                    <p>
                        <b>Listrik Biru</b>
                    </p>
                </div>
                <div class="menu">
                    <ul>
                        <li><a class="mode" href="logout.php">Logout</a></li>
                        <li><a class="mode" href="contact-us.html">Contact Us</a></li>
                        <li><a class="mode" href="#aboutus">About Us</a></li>
                        <li><a class="mode" href="tarif/bacatarif.php">Tarif</a></li>
                        <?php if($level == 'admin') { ?>
                                <li><a class="mode" href="pelanggan/bacapelanggan.php">Pelanggan</a></li>
                                <li><a class="mode" href="pembelian/bacapembelian.php">Pembelian</a></li>
                        <?php }?>
                        <!-- <li><a class="mode" href="pembayaran/bacapembayaran.php">Pembayaran</a></li> -->
                        <li><button class="mode" onclick="result()">Night Mode</button></li>
                    </ul>
                </div>
                
            </div>
        </nav>
    </header>

    <div class="container-1">
        <div class="banner">
            <div class="caption" id="login">
                <h1>Listrik Biru</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, quibusdam nulla at fugiat magni velit harum dolore odit distinctio obcaecati?</p>
    
                <b><p class="caption-join">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum, perferendis!</p></b>
    
                <button id="btn-info">LOGIN NOW FOR $1</button>
                <p id="info" style="display: none">Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatibus eius, praesentium quis suscipit illo et beatae illum repellendus soluta.</p>
    
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non aut eveniet earum vel laudantium provident!.</p>
            </div>
        </div>
    </div>

    <footer class="footer-distributed mode">

        <div class="footer-left">

            <h3>Listrik <span>Biru</span></h3>

            <p class="footer-links">
                <a href="#" class="link-1">Home</a>
                
                <a href="#">Blog</a>
            
                <a href="#">Pricing</a>
            
                <a href="#">About</a>
                
                <a href="#">Faq</a>
                
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">PT Listrik Biru Abadi © 2022</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>777 Kec.Wales</span> Gunung Camlat, Britania Raya</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+62 8 2252 940003</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">gempar@listrikbiru.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span>
                Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
            </p>

        </div>

    </footer>

    <script src="js/main.js"></script>
    <script src="js/addEvenListener.js"></script>
    <script src="https://kit.fontawesome.com/a374d5ed26.js" crossorigin="anonymous"></script>
</body>
</html>