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
		<h2>Manajemen Pembelian</h2>
	</div>
	<div class="gambar">
		
	</div>
	<br>
		<center>
			<?php 
				echo "Waktu sekarang ". date("h:i:sa");
			?><br><br>
			<input type="button" value="TAMBAH DATA" onclick="location.href='tambahpembelian.php'">
		</center>
		<br>
		<center>
		<table border="0" cellpadding="10">
			<div class="biru">
			<tr>
				<th>NO</th>

				<th>ID PEMBELIAN</th>
				<th>TANGGAL PEMBELIAN</th>
				<th>JUMLAH BELI</th>
				<th>NOMOR METER</th>
				<th>TOTAL KWH</th>
				<th>ID TARIF</th>
				<th>AKSI</th>
			</tr>
			</div>
			<?php
				$no=1;
				$sql="SELECT * FROM pembelian";
				$query= mysqli_query($db_link,$sql);
				while ($data = mysqli_fetch_array($query))
				{
					?>
					<tr>
						<td><?php echo "$no"; ?></td>
						<td><?php echo "$data[id]"; ?></td>
						<td><?php echo "$data[tanggal]"; ?></td>
						<td><?php echo "$data[jumlahbeli]"; ?></td>
						<td><?php echo "$data[nometer]"; ?></td>
						<td><?php echo "$data[totalkwh]"; ?></td>
						<td><?php echo "$data[idtarif]"; ?></td>
						<td>
							<a class="edit" href="editpembelian.php?id=<?php echo"$data[id]"; ?>">EDIT</a>
							<a class="hapus" href="hapuspembelian.php?id=<?php echo"$data[id]"; ?>" onclick="return confirm('YAKINNN !!!')">HAPUS</a>
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