<?php
    session_start();

    if(!isset($_SESSION['login'])) {
        header("Location: ../auth/login.php");
        exit;
    }
	
	if(isset($_POST['create'])) {
		require('../../php/connection.php');
		require('../../php/randomstr.php');
	
		$idUser = $_POST['iduser'];
		$rand4 = RandomString(4);
		$id = $idUser.'-'.$rand4;
	
		$tanggal=$_POST['tanggal'];
		$nometer=$_POST['nometer'];
		
		$idtarif=$_POST['idtarif'];
		$jumlahbeli=$_POST['jumlahbeli'];
	
		$result = mysqli_query($conn, "SELECT tarifperkwh FROM tarif WHERE id = '$idtarif'");
		$hasil = mysqli_fetch_assoc($result);
		$totalkwh = round($jumlahbeli / $hasil['tarifperkwh'], 2);
	
		$sql = "INSERT INTO transaksi (id, iduser, tanggal, nominal, nometer, totalkwh, idtarif) VALUES('$id', '$idUser', '$tanggal','$jumlahbeli','$nometer','$totalkwh','$idtarif')";
		$query = mysqli_query($conn,$sql);

		if ($query)  {
			header('location: ../../index.php?pesan=Tarif berhasil dipesan!');
		} else {
			echo "Gagal Disimpan";
		}
	}
?>