<?php
    require('../php/connection.php');
    
    if(isset($_POST['register'])) {
        require('../php/randomstr.php');

        $randstring = RandomString();
        $id = 'user-'.$randstring;
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_pwd = $_POST['confirm-password'];
        $nama = $_POST['nama'];
        $telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];
        $level = 'user';

        if($password === $confirm_pwd) {
            $password = password_hash($password, PASSWORD_DEFAULT);

            $hasil = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
            if(mysqli_fetch_assoc($hasil)) {
                echo '<script>
                    alert("Username already registered");
                    document.location.href = "register.php";
                </script>';
            } else {
                $push_data = mysqli_query($conn, "INSERT INTO user (id, username, nama, telepon, alamat, level, password) VALUES ('$id', '$username', '$nama', '$telepon', '$alamat', '$level', '$password')");
                
                if(mysqli_affected_rows($conn) > 0) {
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

    <!-- Title & Web Icon -->
    <title>Listrik Biru - Register</title>
    <link rel="shortcut icon" href="../img/logo/logo-listrik.png">
    
    <!-- Link Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../stylesheet/Daftar.css">
    <link rel="stylesheet" href="../stylesheet/style-mobile.css">
</head>
<body>
    <div class="mainDaftar">
        <p class="daftar" align="center">Daftar</p>
        <form class="formDaftar">
            <input  class="namaDaftar"     type="text"     align="center"   name="nama"     placeholder="Nama">
            <input  class="userNameDaftar" type="text"     align="center"   name="username"     placeholder="Username">
            <input  class="passDaftar"     type="password" align="center"   name="password"     placeholder="Password">
            <input  class="passDaftar"     type="password" align="center"   name="confirm-password"     placeholder="Konfirmasi Password">

            <button align="center">Daftar</button>
            <p      class="loginDaftar" align="center"><a href="login.php">Login?</p>
        </form>
    </div>
</body>
</html>