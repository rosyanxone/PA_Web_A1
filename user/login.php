<?php
    session_start();
    require '../koneksi.php';

    if (isset($_SESSION['login'])) {
        header("Location: ../index.php");
        exit;
    }

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $hasil = mysqli_query($db_link, "SELECT username, password, level FROM acun WHERE username = '$username'");

        if(mysqli_num_rows($hasil) === 1) {
            $row = mysqli_fetch_assoc($hasil);
            
            if(password_verify($password, $row['password'])) {
                $_SESSION['login'] = true;
                $_SESSION['level'] = $row['level'];
                header('location: ../index.php');
                exit;
            } else {
                echo '<script>
                        alert("Salah User atau Password");
                        document.location.href = "login.php";
                    </script>';
            }
        } else {
            echo '<script>
                        alert("Login gagal");
                        document.location.href = "login.php";
                    </script>';
            $error_username = true;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="Stylesheet" href="../styles/Login.css">
</head>
  
<body>
    <div class="mainLogin">
        <p class="login" align="center">ListrikBiru</p>
        <form class="formLogin" method="post">
            <input  class="userNameLogin" name="username" id="username" type="text"     align="center" placeholder="Username">
            <input  class="passLogin"     name="password" id="password" type="password" align="center" placeholder="Password">
        
            <button align="center" name="login" type="submit">Masuk</button>
            <p      class="daftarLogin" align="center"><a href="register.php">Daftar</p>         
    </div>
</body>
</html>