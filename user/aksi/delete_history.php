<?php
    session_start();

    if(!isset($_SESSION['login'])) {
        print_r($_SESSION);
        header('location: ../auth/login.php');
        exit;
    } else {
        require("../../php/connection.php");
    
        $id = $_SESSION['akun']['id'];
        $sql = "DELETE FROM transaksi WHERE iduser = '$id'";
        $query = mysqli_query($conn,$sql);
        
        if($query){
            ?>
                <script>
                    alert("Data berhasil dihapus!");
                    window.location='../profil.php';
                </script>
            <?php
        }else {
            ?>
                <script>
                    alert("Data gagal dihapus!");
                </script>
            <?php
        }
    }