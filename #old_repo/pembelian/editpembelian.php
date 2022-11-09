<?php
	include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Pembelian</title>
    
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="Stylesheet" href="../styles/Pembelian.css">
</head>
  
<body>
	<?php
		$id=$_GET['id'];
		$sql = "SELECT * FROM pembelian WHERE id ='$id'";
		$query = mysqli_query($db_link,$sql);
		$data = mysqli_fetch_array($query);
	?>
    <div class="mainPembelian">
        <p    class="pembelian" align="center">Ubah Data Pembelian</p>
        <form class="formPembelian" action='aksi_edit_pembelian.php?id=<?php echo "$id"; ?>' method='POST'>
            <label class="ket">ID</label>
            <input class="tglPembelian"    type="text" name="id" id="id" value="<?php echo $data['id'] ?>" readonly align="center" placeholder="tanggal/bulan/tahun">
            
			<label class="ket">TANGGAL PEMBELIAN</label>
            <input class="tglPembelian"    type="text" name="tanggal" id="tanggal" value="<?php echo $data['tanggal'] ?>" readonly align="center" placeholder="tanggal/bulan/tahun">

            <label class="ket">JUMLAH PEMBELIAN</label>
            <input class="jumlahPembelian" type="number" name="jumlahbeli" id="jumlahbeli" value="<?php echo $data['jumlahbeli'] ?>" align="center">

            <label class="ket">NOMOR METER</label>
            <input class="nomorMeter"      type="number" name="nometer" id="nometer" value="<?php echo $data['nometer'] ?>" align="center">

            <label class="ket">Total KWH</label>
            <input class="nomorMeter"      type="number" name="totalkwh" id="totalkwh" value="<?php echo $data['totalkwh'] ?>" align="center" readonly>


            <label  class ="ket">PILIH ID TARIF</label>
			<select name="idtarif" class="idTarif">
				<?php
					$kodetarif = mysqli_query($db_link, "select * from tarif");
					while ($p = mysqli_fetch_array($kodetarif)){
						echo "<option value='$p[id]'>($p[id])</option>";
					}
				?>
			</select>

            <button align="center">Simpan</button>
            <p      class="kembali" align="center"><a href="bacapembelian.php">Kembali</p>         
    </div>
</body>
</html>