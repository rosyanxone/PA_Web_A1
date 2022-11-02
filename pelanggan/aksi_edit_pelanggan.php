<?php
	include "../koneksi.php";

	$id=$_POST['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$nama=$_POST['nama'];
	$idtarif=$_POST['idtarif'];
	
	$sql2 ="UPDATE user SET id = '$id' , username = '$username' , password = '$password' , nama = '$nama' , idtarif = '$idtarif' WHERE id = '$id'";
	
	$query = mysqli_query($db_link,$sql2);
	
	if($query)
	{
		header('location:bacapelanggan.php');
	}
	else
	{
		echo"Edit Pelanggan Gagal";
	}
?>