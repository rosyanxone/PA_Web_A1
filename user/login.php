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
                        alert("Login gagal2");
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
    <link rel="stylesheet" type="text/css" href="../styles/login.css">

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
            <img src="../img/qw.png">
            </center>
            <input type="text" name="username" id="username" class="inputan" placeholder="Username" required>
        
            <input type="password" name="password" id="password" class="inputan" placeholder="Password" required>
        
            <button name="login" class="tombol_login" type="submit">Login</button>
        
            <br/>
            <br/>
            <a class="link" href="register.php">Create an Account</a>
        </center>
        </form>
     </div>
</body>
</html>