<?php 
    session_start();
    require '../php/connection.php';

    if(!isset($_SESSION['login']) || ($_SESSION['akun']['level'] == 'user')){
        header("Location: ../auth/logout.php");
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
    <link rel="shortcut icon" href="../img/logo/logo-listrik.png">
    
    <!-- Link Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/213e56f9ea368890b9d2da0577e49dab?family=Zona+Pro" rel="stylesheet" type="text/css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="../stylesheet/style.css">
    <link rel="stylesheet" href="../stylesheet/style-mobile.css">
</head>
<body>
    <!-- HEADER -->
    <header class="main" id="home">
        <!-- navbar -->
        <nav class="mode-bg">
            <div class="logo">
                <a href="../index.php" class="mode-text">
                    <img src="../img/logo/logo-listrik.png" alt="">
                    <p>Listrik Biru</p>
                </a>
            </div>

            <ul>
                <li><a class="mode-text" href="../tarif.php">Tarif</a></li>
                <?php if($_SESSION['akun']['level'] == 'admin') { ?>
                    <li><a class="mode-text" href="transaksi.php">Transaksi</a></li>
                    <li><a class="mode-text" href="pelanggan.php">Pelanggan</a></li>
                    <li><a class="mode-text" href="daftar-pesan.php">Kontak</a></li>
                <?php } if($_SESSION['akun']['level'] == 'user') { ?>
                    <li><a class="mode-text" href="../user/profil.php">Profil</a></li>
                    <li><a class="mode-text" href="../kontak.php">Kontak</a></li>
                <?php } ?>
                <div class="logout-btn">
                    <a href="../auth/logout.php">Logout</a>
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
    </header>
    <!-- END HEADER -->
	

    <!-- MAIN CONTENT -->
    <section class="minggirin-navbar">
        <div class="daftar-data">
            <div class="table-user hover-table">
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Pesan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            require('../php/connection.php');
                            $read = mysqli_query($conn, "SELECT * FROM kontak");

                            if(mysqli_num_rows($read) > 0){
                                while($row = mysqli_fetch_array($read)){
                            ?>
                                <tr class="games-content">
                                    <td><?php echo $row['id']?></td>
                                    <td><?php echo $row['nama']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['nohp']?></td>
                                    <td><?php echo $row['pesan']?></td>
                                    <td>
                                        <div class="action">
                                            <a class="btn-action del-action" href="aksi/delete_message.php?id=<?php echo $row['id']; ?>">
                                                <i class="fa-sharp fa-solid fa-circle-xmark"></i> Hapus
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                        <?php }} else { ?>
                            <tr>
                                <td colspan="7" align="center">-- data tidak ditemukan --</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- END MAIN CONTENT -->
    

    <!-- FOOTER -->
    <!-- END FOOTER -->

    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="js/navbar-mobile.js"></script>
    <script src="https://kit.fontawesome.com/a374d5ed26.js" crossorigin="anonymous"></script>
</body>
</html>