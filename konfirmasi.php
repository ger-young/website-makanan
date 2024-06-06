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
          <?php 
			        
error_reporting(0);
session_start();
if($_SESSION['pembeli']){
?>
<div id="register-page" style="margin-top: 50px;">
	<div class="component-register">
		<div class="main-register">
			<span style="padding: 10px; background:#4689db; display: inherit; color: #fff; font-size: 17px; font-weight: bold;">Konfirmasi Pembayarab Kamu Disini </span>
				<form action="handler.php?aksi=konfirmasi" method="post" enctype="multipart/form-data">
					<input type="hidden" name="pembeli" value="<?php echo $_SESSION['pembeli'];  ?>"><br>
					<input type="text" name="kode_pembelian" placeholder="Kode Pembelian" required="required" style="width: 400px;"><br>
					<input type="text" name="id_vendor" placeholder="Kode Toko" required="required" style="width: 400px;"><br>
					<input type="text" name="nama_bank" placeholder="Nama Bank Transfer" required="required" style="width: 400px;"><br>

					<input type="date" name="tgl" placeholder="Tanggal Transfer" required="required" style="width: 380px; padding:8px"><br>
					<div style="clear: both;"></div>
					<p style="font-size: 13px;">*Tulis Catatan Untuk Kami Mengenai Pesanan<br> Kamu Atau Pembayaran Kamu</p>
					<textarea name="pesan" style="padding: 10px; width: 360px;">
						
					</textarea><br>
					<div style="clear: both;"></div>
					<p style="font-size: 13px; ">*Uplode Bukti Pembayaran Kamu Disini</p>
					<input type="file" name="gambar"><br>
					<input type="submit" value="Konfirmasi Bayar"><br>
					
				</form>
		</div>
		
	</div>
	<div class="main-register-sidebar" style="margin-bottom: 400pxp; ">
		<div class="sidebar-register">
			<h3 style="margin-bottom: 5px;">Konfirmasi Pembayaran Melalui transfer bank</h3>
			<ul>
				<li>1.dddddddddddddd</li>
				<li>2.Personalisasi belanjaan Anda</li>
				<li>3.Personalisasi belanjaan Anda</li>
			</ul>
		</div>
	</div>
	<div style="clear: both;"></div>
<?php include 'component/fotter.php'; ?>
<?php 
}else{
    ?>
    <script>
    alert("anda harus login terlebih dahulu");
    window.location.href="login.php";
    </script>
    <?php
    }
?>
</div>
</body>
</html>