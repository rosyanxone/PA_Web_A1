<?php
	include "../koneksi.php";

	$id=$_POST['id'];
	$tanggal=date('y/m/d');
	$jumlahbeli=$_POST['jumlahbeli'];
	$nometer=$_POST['nometer'];
	// $totalkwh=$_POST['totalkwh'];
	$idtarif=$_POST['idtarif'];

	$result = mysqli_query($db_link, "SELECT tarifperkwh FROM tarif WHERE id = '$idtarif'");
	$hasil = mysqli_fetch_assoc($result);
	$totalkwh = round($jumlahbeli / $hasil['tarifperkwh'], 2);
	
	$sql2 ="UPDATE pembelian SET id = '$id' , tanggal = '$tanggal' , jumlahbeli = '$jumlahbeli' , nometer = '$nometer' , totalkwh = '$totalkwh' , idtarif = '$idtarif' WHERE id = '$id'";
	
	$query = mysqli_query($db_link,$sql2);
	
	if($query)
	{
		header('location:bacapembelian.php');
	}
	else
	{
		echo"Edit pembelian Gagal";
	}
?>