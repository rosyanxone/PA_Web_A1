<?php
    require 'koneksi.php';

    if(isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cPassword = $_POST['confirm-password'];
        $nama = $_POST['nama'];
        $telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];
        $level = 'user';


        if($password === $cPassword) {
            $password = password_hash($password, PASSWORD_DEFAULT);

            $hasil = mysqli_query($db_link, "SELECT username FROM acun WHERE username = '$username'");
            if(mysqli_fetch_assoc($hasil)) {
                echo '<script>
                    alert("Username already registered");
                    document.location.href = "register.php";
                </script>';
            } else {
                $push_data = mysqli_query($db_link, "INSERT INTO acun (username, nama, telepon, alamat, level, password) VALUES ('$username', '$nama', '$telepon', '$alamat', '$level', '$password')");
                
                if(mysqli_affected_rows($db_link) > 0) {
                    echo '<script>
                        alert("Registrasi berhasil");
                        document.location.href = "login.php";
                    </script>';
                } else {
                    echo '<script>
                        alert("Registrasi gagal");
                        document.location.href = "register.php";
                    </script>';
                }
            }
        } else {
            echo '<script>
                alert("Password is incorrect");
                document.location.href = "register.php";
            </script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" type="text/css" href="styles/login.css">

    <style>
        .inputan {
            margin-left: 25px;
        }
    </style>
</head>
<body>
    <div class="kotak_login">
        <h3 class="tulisan_login">LOGIN</h3>
        <form action="" method="post">
        <center>
            <img src="img/qw.png">
            </center>
            <input type="text" name="nama" id="nama" class="inputan" placeholder="Nama" required>
            <input type="number" name="telepon" id="telepon" class="inputan" placeholder="Telepon" required>
            <input type="text" name="alamat" id="alamat" class="inputan" placeholder="Alamat" required>
            
            <input type="text" name="username" id="username" class="inputan" placeholder="Username" required>
        
            <input type="password" name="password" id="password" class="inputan" placeholder="Password" required>

            <input type="password" name="confirm-password" id="confirm-password" class="inputan" placeholder="Konfirmasi Password" required>
        
            <button name="register" class="tombol_login" type="submit">Login</button>
        
            <br>
            <br>
            <a class="link kipak" href="login.php">Sudah punya akun? Login</a>
        </center>
        </form>
     </div>
</body>
</html>