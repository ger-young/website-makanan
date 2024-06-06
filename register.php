<!DOCTYPE html>
<html>
<head>
	<title>Situs Jual Beli Mobil Terpercaya</title>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="asset/css/slider.css">
</head>
<body>
<?php include 'component/header.php'; ?>
<style type="text/css">
	#register-page{width: 100%;font-family: arial;}
	.component-register{}
	.main-register{ float: left; margin-left: 12% }
	.main-register-sidebar{float: right;margin-right: 12%;}
	.sidebar-register{}
	input[type=text]{margin: 10px 0 10px 0; padding: 10px ; width: 400px; color: #ccc;}
	input[type=password]{margin: 10px 0 10px 0; padding: 10px ; width: 380px; color: #ccc;}
	input[type=submit]{margin: 10px 0 10px 0; padding: 10px; background: orange; color: #fff; border: 0; outline: 0; width: 200px; border: 1px solid orange; cursor: pointer; }
</style>
<div id="register-page" style="margin-top: 50px;">
	<div class="component-register">
		<div class="main-register">
			<h3>Daftrakan Akun Anda Gratis </h3>
				<form action="handler.php?aksi=daftar_pelanggan" method="post">
					<input type="text" name="username" placeholder="username" required="required" style="width:400px;"><br>
					<input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required="required" style="width:400px;"><br>
					<input type="text" name="email" placeholder="Email" required="required" style="width:400px;"><br>
					<input type="password" name="password" class="lock" placeholder="Password" required=""><br>
					<input type="text" class="user" name="alamat" placeholder="Desa Bukur RT 03 RW 03" required="required" style="width:400px;"><br>
					<select name="provinsi" style="width: 400px; padding: 13px; margin-bottom: 10px; border: 1px solid #ccc;">
						<option>--Provinsi--</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
					</select><br>
					<select name="kabupaten" style="width: 400px; padding: 13px; margin-bottom: 10px; border: 1px solid #ccc;">
						<option>--Kota--</option>
						<option value="Nganjuk">Nganjuk</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
					</select><br>
					<select name="kecamatan" style="width: 400px; padding: 13px; margin-bottom: 10px; border: 1px solid #ccc;">
						<option>--Kecamatan--</option>
						<option value="Patianrowo">Patianrowo</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Timur">Jawa Timur</option>
					</select><br>
					<input type="text" class="user" name="kode_pos" placeholder="Kode Pos" required="required" style="width:400px;"><br>
					<input type="text" class="user" name="no_telp" placeholder="No Telp" required="required" style="width:400px;"><br>
					<label class="checkbox"><input type="checkbox" required="required"><i></i>Saya Setuju <a href="">Semua Aturan & Ketentuan Terate Store</a></label><br>
					<input type="submit" value="Daftar"><br>
					<p>Saya Sudah Mempunyai Akun <a href="login.php">Masuk Sekarang</a></p>
				</form>
		</div>
		
	</div>
	<div class="main-register-sidebar">
		<div class="sidebar-register">
			<h3 style="margin-bottom: 5px;">Keuntungan Menjadi Member Mendaftar</h3>
			<ul>
				<li>1.Login setiap saat untuk memeriksa satus pesanan</li>
				<li>2.Personalisasi belanjaan Anda</li>
				<li>3.Personalisasi belanjaan Anda</li>
			</ul>
		</div>
	</div>
	<div style="clear: both;"></div>
<?php include 'component/fotter.php'; ?>
</div>
</body>
</html>