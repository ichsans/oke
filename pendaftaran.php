
<html>
	<head>
		<title>
		PENDAFTARAN
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="box-form">
			<h3>FORMULIR PENDAFTARAN</h3><hr><br>
			<?php
			if(isset($_GET['err1'])){
				echo  ' <div class="alert-error"> MAAF, NOMOR TELEPON ANDA HARUS ANGKA !!!</div>' ;
			}
			?>
			<form action="proses-daftar.php" method="post">
				Nama Lengkap :<br>
				<input type="text" name="nama" required /><br><br>
				Tempat Lahir :<br>
				<input type="text" name="tmp_lhr" required /><br><br>
				Tanggal Lahir :<br>
				<input type="date" name="tgl_lhr" required /><br><br>
				Jenis Kelamin :<br>
				<input type="radio" name="jk" value="laki-laki"/>Laki-laki
				<input type="radio" name="jk" value="perempuan"/>Perempuan<br><br>
				No. Telepon :<br>
				<input type="text" name="telp" required /><br><br>
				Email :<br>
				<input type="email" name="email" required /><br><br>
				Password :<br>
				<input type="password" name="pass" required /><br><br>
				Alamat :<br>
				<textarea name="alamat" rows="5" cols="50"></textarea><br><br>
				<input type="submit" name="daftar" Value="DAFTAR">
			 </form>
		</div>
	</body>
</html>