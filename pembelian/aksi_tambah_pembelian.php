<?php
	include "../koneksi.php";

	$id=$_POST['id'];
	$tanggal=date('y/m/d');
	$jumlahbeli=$_POST['jumlahbeli'];
	$nometer=$_POST['nometer'];
	// $totalkwh='0';
	$idtarif=$_POST['idtarif'];

	$result = mysqli_query($db_link, "SELECT tarifperkwh FROM tarif WHERE id = '$idtarif'");
	$hasil = mysqli_fetch_assoc($result);
	$totalkwh = round($jumlahbeli / $hasil['tarifperkwh'], 2);

	$sql = "INSERT INTO pembelian(id,tanggal,jumlahbeli,nometer,totalkwh,idtarif)
	VALUES('$id','$tanggal','$jumlahbeli','$nometer','$totalkwh','$idtarif')";

	$query =mysqli_query($db_link,$sql);
	if ($query) 
	{
		header('location:bacapembelian.php');
	}
	else
	{
		echo "Gagal Disimpan";
	}
?>