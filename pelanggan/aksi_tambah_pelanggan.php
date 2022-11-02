<?php
	include "../koneksi.php";

	$id=$_POST['id'];
	$ft=$_FILES['foto']['name'];
	$file=$_FILES['foto']['tmp_name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$nama=$_POST['nama'];
	$idtarif=$_POST['idtarif'];

	$sql = "INSERT INTO user(id,foto,username,password,nama,idtarif)
	VALUES('$id','$ft','$username','$password','$nama','$idtarif')";
	move_uploaded_file($file, "../foto/".$ft);
	$query =mysqli_query($db_link,$sql);
	if ($query) 
	{
		header('location:bacapelanggan.php');
	}
	else
	{
		echo "Gagal Disimpan";
	}
?>