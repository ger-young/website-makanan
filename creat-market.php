<!DOCTYPE html>
<html>
<head>
	<title>Situs Jual Beli Mobil Terpercaya</title>
	<link rel="stylesheet" type="text/css" href="asset/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="asset/css/slider.css">
	  <script type="text/javascript" src="asset/js/jquery.min.js"></script>
       <script type="text/javascript" src="asset/js/jquery-ui.min.js"></script>
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
		input[type=email]{margin: 10px 0 10px 0; padding: 10px ; width: 400px; color: #ccc;}
	input[type=password],select,textarea{margin: 10px 0 10px 0; padding: 10px ; width: 380px; color: #ccc;}
	textarea{width: 380px; height: 150px;}
	input[type=submit]{margin: 10px 0 10px 0; padding: 10px; background: orange; color: #fff; border: 0; outline: 0; width: 200px; border: 1px solid orange; cursor: pointer; }
</style>
<div id="register-page" style="margin-top: 50px;">
	<div class="component-register">
		<div class="main-register">
			<h3>Buat Toko Buku Kamu Sekarang</h3>
				<form action="handler.php?aksi=creat_market" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id_vendor"  value="<?php echo $_SESSION['id_pembeli'] ?>"<br>
					<input type="text" name="nama_toko" placeholder="Nama Toko Kamu" required="required" style="width:400px;"><br><br><br><br>
					<p style="font-size:12px;">Pilih Foto Profil Toko kamu</p>
					<input type="file" name="gambar"><br>
					<select name="type">
						<option>Pilih Type Toko</option>
						<option value="free">Gratis 7 Hari</option>
						<option value="premium">Premium</option>
						<option value="ultimade">ultimade</option>
					</select><br>
					<textarea name="deskripsi" placeholder="Deskripsi Toko Kamu"></textarea><br>
					<input type="email" name="email" placeholder="E-mail Valid Kamu" required="required"><br>
					<input type="text" name="no_telp" placeholder="Nomer Telpon kamu" style="width:400px;"><br>
					<input type="text" name="alamat" required="required" style="width:400px;" placeholder="Alamat Kamu / Dusun dan Desa"><br>
						<select name="kota">
						<option value="patianrowo">Patianrowo</option>
						<option value="patianrowo">Patianrowo</option>
						<option value="patianrowo">Patianrowo</option>
						<option value="patianrowo">Patianrowo</option>
					</select><br>
					<select name="kecamatan">
						<option value="patianrowo">Patianrowo</option>
						<option value="patianrowo">Patianrowo</option>
						<option value="patianrowo">Patianrowo</option>
						<option value="patianrowo">Patianrowo</option>
					</select><br>
							<select name="provinsi">
						<option value="patianrowo">Patianrowo</option>
						<option value="patianrowo">Patianrowo</option>
						<option value="patianrowo">Patianrowo</option>
						<option value="patianrowo">Patianrowo</option>
					</select><br>
					<span>Buat Tanggal Berdiri toko kamu</span><br>
					<input name="tgl_berdiri" type="date" style="padding:10px; width:380px;"><br>
					<input type="text" name="kode_pos" placeholder="Kode Pos" style="width:400px;" required="required"><br>
					<input type="submit" value="Mulai Dirikan Toko">
					
				</form>
		</div>
		
	</div>
	<div class="main-register-sidebar">
		<div class="sidebar-register">
			<h3 style="margin-bottom: 5px;">Keuntungan Menjadi Venodr di lapakbuku</h3>
			<ul>
				<li>1.Dapat Berjualan dengan mudah dan aman di lapakbuku</li>
				<li>2.Mendapatkan Pundi Keuntungan dari berjualan buku</li>
				<li>3.</li>
			</ul>
			<img src="asset/image/icon/step-4.png">
		</div>
	</div>
	<div style="clear: both;"></div>
	<?php include 'component/fotter.php'; ?>
</div>
</body>
</html>