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
	<h2>Manajemen Tarif</h2>
	</div>
	<div class="gambar">
		
	</div>
	<br>
		<center>
			<?php 
				echo "Waktu sekarang ". date("h:i:sa");
			?><br><br>
			<input type="button" value="Tambah Data Tarif" onclick="location.href='tambahtarif.php'">
		</center>
		<br>
		<center>
		<table name="table" border="0" cellspacing="10" cellpadding="10">
			<div class="biru">
			<tr>
				<th>NO</th>

				<th>ID TARIF</th>
				<th>DAYA</th>
				<th>TARIF/kWH</th>
				<th>AKSI</th>
			</tr>
			</div>
			<?php
				$no=1;
				$sql="SELECT * FROM tarif";
				$query= mysqli_query($db_link,$sql);
				while ($data = mysqli_fetch_array($query))
				{
					?>
					<tr>
						<td><?php echo "$no"; ?></td>
						<td><?php echo "$data[id]"; ?></td>
						<td><?php echo "$data[daya]"; ?></td>
						<td><?php echo "$data[tarifperkwh]"; ?></td>
						<td>
							<a class="edit" href="edittarif.php?id=<?php echo"$data[id]"; ?>">EDIT</a>
							<a class="hapus" href="hapustarif.php?id=<?php echo"$data[id]"; ?>" onclick="return confirm('YAKINNN !!!')">HAPUS</a>
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