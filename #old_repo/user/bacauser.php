<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../styles/form.css">
</head>
<body>
	<div class="bekgron">
		<h2>Manajemen User</h2>
	</div>
	<div class="gambar">
		
	</div>
	<br>
		<center>
			<?php 
				echo "Waktu sekarang ". date("h:i:sa");
			?><br><br>
			<input type="button" value="TAMBAH DATA" onclick="location.href='tambah_user.php'">
			<br><br>
			<form action="" method="GET">
				<input type="text" name="keyword"  placeholder="Type to Search...">
				<button type="submit" class="tombol" name="search">
					<i class="fa fa-search" aria-hidden="true">Cari</i>
				</button>
			</form>
		</center>
		<br>
		<center>
		<table border="0" cellpadding="10">
			<div class="biru">
			<tr>
				<th>NO</th>

				<th>ID PELANGGAN</th>
				<th>USERNAME</th>
				<th>PASSWORD</th>
				<th>NAMA</th>
				<th>NO TELP</th>
				<th>ALAMAT</th>
				<th>AKSI</th>
			</tr>
			</div>
			<?php
				if(isset($_GET['keyword'])){
					$keyword = $_GET['keyword']; 
					$result = mysqli_query($db_link, "SELECT * FROM acun WHERE nama LIKE '%$keyword%' OR username LIKE '%$keyword%'");
				}else{
					$result = mysqli_query($db_link, "SELECT * FROM acun");
				}
			
				$no=1;
				while ($data = mysqli_fetch_array($result))
				{
					?>
					<tr>
						<td><?php echo "$no"; ?></td>
						<td><?php echo "$data[id]"; ?></td>
						<td><?php echo "$data[username]"; ?></td>
						<td><?php echo "$data[password]"; ?></td>
						<td><?php echo "$data[nama]"; ?></td>
						<td><?php echo "$data[telepon]"; ?></td>
						<td><?php echo "$data[alamat]"; ?></td>
						<td>
							<a class="edit" href="edituser.php?id=<?php echo"$data[id]"; ?>">EDIT</a>
							<a class="hapus" href="delete_user.php?id=<?php echo"$data[id]"; ?>" onclick="return confirm('YAKINNN !!!')">HAPUS</a>
						</td>
					</tr>
					<?php
					$no++;
				}
			?>
		</table><br>
		<a class="tombol" href="../index.php">KEMBALI</a>
		</center>
		<div class="footer">
		Copyright By Gempar Panggih Dwi Putra &copy; 2022. All right reserved.
		</div>
</body>
</html>