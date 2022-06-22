<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="fontawesome/css/all.css" />
    <title>Menampilkan data dari database</title>
	<style>
		.hero {
			background-color: #FF00FF;
			border-radius: 5px;
			padding: 10px 23px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container shadow p-3">
	<header>
	<h2 align="left" class="hero" class="hero text-white">Tabel Berobat</h2>
	</header>
	<hr>	
	<div class="btn-toolbar mb-2 mb-md-10">
		<a class="btn btn-primary" href="data.php" role="button">Kembali</a>
	</div>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<td>No</td>
					<td>Id Berobat</td>
					<td>Id Pasien</td>
					<td>Id Dokter</td>
					<td>Tanggal Berobat</td>
					<td>Keluhan Pasien</td>
					<td>Hasil Diagnosa</td>
					<td>Penatalaksanaan</td>                
				</tr>
			</thead>
			<?php
			include "koneksi.php";
			$no = 1;
			$query = mysqli_query($con, 'SELECT * FROM berobat');
			while ($data = mysqli_fetch_array($query)) {
			?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data['id_berobat'] ?></td>
					<td><?php echo $data['id_pasien'] ?></td>
					<td><?php echo $data['id_dokter'] ?></td>
					<td><?php echo $data['tgl_berobat'] ?></td>
					<td><?php echo $data['keluhan_pasien'] ?></td>
					<td><?php echo $data['hasil_diagnosa'] ?></td>
					<td><?php echo $data['penatalaksanaan'] ?></td>
				</tr>
			<?php } ?>
		</table>
	</div>
	 
	<?php require "footer.php";?>
</div>
</body>
</html>