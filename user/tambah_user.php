<?php
    require '../koneksi.php';

    if(isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cPassword = $_POST['confirm-password'];
        $nama = $_POST['nama'];
        $telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];
        $level = 'admin';


        if($password === $cPassword) {
            $password = password_hash($password, PASSWORD_DEFAULT);

            $hasil = mysqli_query($db_link, "SELECT username FROM acun WHERE username = '$username'");
            if(mysqli_fetch_assoc($hasil)) {
                echo '<script>
                    alert("Username already registered");
                    document.location.href = "tambah_user.php";
                </script>';
            } else {
                $push_data = mysqli_query($db_link, "INSERT INTO acun (username, nama, telepon, alamat, level, password) VALUES ('$username', '$nama', '$telepon', '$alamat', '$level', '$password')");
                
                if(mysqli_affected_rows($db_link) > 0) {
                    echo '<script>
                        alert("Registrasi berhasil");
                        document.location.href = "../index.php";
                    </script>';
                } else {
                    echo '<script>
                        alert("Registrasi gagal");
                        document.location.href = "tambah_user.php";
                    </script>';
                }
            }
        } else {
            echo '<script>
                alert("Password is incorrect");
                document.location.href = "tambah_user.php";
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
    <title>Daftar</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="Stylesheet" href="../styles/register.css">
</head>

<body>
    <div class="mainDaftar">
        <p class="daftar" align="center">TAMBAH USER</p>
        <form class="formDaftar" method="POST">
            <input type="text" name="nama" id="nama" class="namaDaftar"  align="center" placeholder="Nama" required>

            <input type="number" name="telepon" id="telepon" class="namaDaftar"  align="center" placeholder="Telepon" required>

            <input type="text" name="alamat" id="alamat" class="namaDaftar"  align="center" placeholder="Alamat" required>
            
            <input type="text" name="username" id="username" class="namaDaftar"  align="center" placeholder="Username" required>
        
            <input type="password" name="password" id="password" class="passDaftar"  align="center" placeholder="Password" required>

            <input type="password" name="confirm-password" id="confirm-password" class="passDaftar" align="center" placeholder="Konfirmasi Password" required>

            <button name="register" align="center" type="submit">Tambah</button>

            <!-- <input  class="namaDaftar"     type="text"     align="center" placeholder="Nama">
            <input  class="userNameDaftar" type="text"     align="center" placeholder="Username">
            <input  class="passDaftar"     type="password" align="center" placeholder="Password">
            <input  class="passDaftar"     type="password" align="center" placeholder="Konfirmasi Password">

            <button align="center">Daftar</button> -->
            <p      class="loginDaftar" align="center"><a href="../index.php">Kembali</p>
        </form>
    </div>
</body>
</html>