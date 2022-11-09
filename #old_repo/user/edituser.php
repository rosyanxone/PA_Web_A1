<?php
    include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Pelanggan</title>
    
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="Stylesheet" href="../styles/Pengguna.css">
</head>
  
<body>
	<?php
		$id=$_GET['id'];
		$sql = "SELECT * FROM acun WHERE id ='$id'";
		$query = mysqli_query($db_link,$sql);
		$data = mysqli_fetch_array($query);
	?>
    <div class="mainPenggunaEdit">
        <p    class="pengguna" align="center">Ubah Data Pelanggan</p>
        <form class="formPengguna" action='aksi_edit_user.php?id=<?php echo "$id"; ?>' method='POST'>
            <label class="ket">ID</label>
            <input class="usernamePengguna"  type="number" name="id" id="id" value="<?php echo $data['id'] ?>" readonly align="center">

            <label class="ket">USERNAME</label>
            <input class="usernamePengguna"  type="text" name="username" id="username" value="<?php echo $data['username'] ?>" align="center">

            <label class="ket">PASSWORD</label>
            <input class="passPengguna" name="password" id="password" value="<?php echo $data['password'] ?>" readonly align="center">

            <label class="ket">NAMA PELANGGAN</label>
            <input class="namaPelanggan" type="text" name="nama" id="nama" value="<?php echo $data['nama'] ?>" align="center">

            <label class="ket">NOMOR TELEPON</label>
            <input class="namaPelanggan" type="number" name="telepon" id="telepon" value="<?php echo $data['telepon'] ?>" align="center">

            <label class="ket">ALAMAT</label>
            <input class="namaPelanggan" type="text" name="alamat" id="alamat" value="<?php echo $data['alamat'] ?>" align="center">

            <button align="center">Simpan</button>
            <p      class="kembali" align="center"><a href="bacauser.php">Kembali</p>         
    </div>
</body>
</html>