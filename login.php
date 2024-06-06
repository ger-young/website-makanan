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
			<h3>Masuk Dengan Akun kamu </h3>
				<form action="handler.php?aksi=login" method="post">
					<input type="text" name="username" placeholder="username" required="required" style="width:400px;"><br>
					<input type="password" name="password" placeholder="password" required="required"><br>
					<input type="submit" value="Masuk"><br>
				</form>
				<p>Jika Kamu Belum Mempunyai akun aktif <br>Silahkan kamu daftarkan akun kamu<a href="register.php">Daftar</a> </p>
		</div>
		
	</div>
	<div class="main-register-sidebar" style="margin-bottom: 400px">
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