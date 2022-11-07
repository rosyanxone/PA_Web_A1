<?php
    session_start();

    if(!isset($_SESSION['login'])) {
        header('location: ../../auth/login.php');
        exit;
    } else {
        require("../../php/connection.php");
    
        $id = $_GET['id'];
        $sql = "DELETE FROM kontak WHERE id = '$id'";
        $query = mysqli_query($conn,$sql);
        
        if($query){
            ?>
                <script>
                    alert("Data berhasil dihapus!");
                    window.location='../daftar-pesan.php';
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