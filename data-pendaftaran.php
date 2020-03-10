<html>
<head>
	<title>Data Pendaftar</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
	<body>
		<div class="box-data">
			<h3>Data Pendaftar<h3><br>
			
			<table border="1"style="width:100%;border-collapse:collapse;text-align:center;"cellspacing="0">
				<tr style="height:30px;">
					<td>No</td>
					<td>Nama Lengkap</td>
					<td>Tempat Lahir</td>
					<td>Tanggal Lahir</td>
					<td>Jenis Kelamin</td>
					<td>Telepon</td>
					<td>Email</td>
					<td>Alamat</td>
					
				</tr>
				<?php
				$data = mysqli_query($koneksi, "SELECT * FORM tb_daftar")
				
				?>
				<tr style="height:30px;">
					<td>No</td>
					<td>Nama Lengkap</td>
					<td>Tempat Lahir</td>
					<td>Tanggal Lahir</td>
					<td>Jenis Kelamin</td>
					<td>Telepon</td>
					<td>Email</td>
					<td>Alamat</td>
					
				</tr>
			</table>

		</div>
	</body>
</html>