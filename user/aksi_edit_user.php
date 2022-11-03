<?php
	include "../koneksi.php";

	$id=$_POST['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$nama=$_POST['nama'];
	$telepon=$_POST['telepon'];
	$alamat=$_POST['alamat'];
	
	$sql2 ="UPDATE acun SET id = '$id' , username = '$username' , password = '$password' , nama = '$nama' , telepon = '$telepon' , alamat = '$alamat'  WHERE id = '$id'";
	
	$query = mysqli_query($db_link,$sql2);
	
	if($query)
	{
		header('location:bacauser.php');
	}
	else
	{
		echo"Edit Pelanggan Gagal";
	}
?>