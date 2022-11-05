<?php
		include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../styles/tarif.css">
</head>
<body>
    <div class="bekgron">
		<h2>Manajemen Tarif</h2>
	</div>
	<div class="gambar">
		
	</div>
    <div class="container">
        <br>
        <div class="grid-container">
            <?php
				$no=1;
				$sql="SELECT * FROM tarif";
				$query= mysqli_query($db_link,$sql);
				while ($data = mysqli_fetch_array($query))
				{
			?>
					<div>
                        <img src="../img/voltase/2.png"/>
                        <p>
                            <?php echo "$data[id]"; ?> ||
                            <?php echo "$data[daya]"; ?><br>
                        </p>
                        <p>
                            Rp. <?php echo "$data[tarifperkwh]"; ?>
                        </p>
                    </div>
			<?php
					$no++;
				}
			?>
        </div>
    </div>

    <div class="footer">
			Copyright By Gempar Panggih Dwi Putra &copy; 2022. All right reserved.
	</div>
</body>
</html>