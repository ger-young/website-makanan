<?php
 error_reporting(0);
session_start();
if($_SESSION['pembeli']){
	 if(!$_GET['nama']){
		 ?>
		 <script>
         alert("Keranjang anda masih kosong");
		 window.location.href="index.php";
         </script>
		 <?php
		 }else{
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Situs Jual Beli Buku Terpercaya</title>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="asset/css/slider.css">
	<style type="text/css">
	input[type=text]{margin: 10px 0 10px 0; padding: 10px ; width: 400px; color: #ccc;}
		input[type=email]{margin: 10px 0 10px 0; padding: 10px ; width: 400px; color: #ccc;}
	input[type=password],select,textarea{margin: 10px 0 10px 0; padding: 10px ; width: 380px; color: #ccc;}
	textarea{width: 380px; height: 150px;}
	input[type=submit]{margin: 10px 0 10px 0; padding: 10px; background: orange; color: #fff; border: 0; outline: 0; width: 200px; border: 1px solid orange; cursor: pointer; }
	.container{max-width:1020px;margin:0 auto}
	.sidebar{width:50%;float:right; margin-right: 25%; margin-top: 40px;}
.sidebar > div{margin:5px;}
.sidebar h3{background:#3498db;color:#fff;padding:10px;}
</style>
</head>
<body>
<?php include 'component/header.php'; ?>
<div class="container">
<div class="sidebar">
<div>
<h3>Kode Belanja Kamu</h3>
<style>
.populer{border:1px solid #ddd;overflow:hidden}
.populer li{list-style:none;padding:5px;display:inline-block;width:100%;border-bottom:1px solid #ddd}
.populer li img{width:70px;height:70px;float:left;margin-right:10px;}
.populer li a{text-decoration:none;font-size:14px;color:#444}
</style>
<div class="populer" style="padding: 10px">
<p style="font-size: 12px; text-align: center;">*Harap Copy Kode ini Kode ini Digunakan Untuk melakukan Konfirmasi Pembayaran</p>
<center><span style="display: inherit; padding: 10px; background: #4689db; width: 90%; color: #fff; margin-top: 5px;">#1922.<?php echo $_GET['kode_pembelian'] ?></span></center>
</div>
</div>
<div>
<h3>Di Beli Dari Toko</h3>
<style>
.populer{border:1px solid #ddd;overflow:hidden}
.populer li{list-style:none;padding:5px;display:inline-block;width:100%;border-bottom:1px solid #ddd}
.populer li img{width:70px;height:70px;float:left;margin-right:10px;}
.populer li a{text-decoration:none;font-size:14px;color:#444}
</style>
<div class="populer" style="padding: 10px">
<p style="font-size: 12px; text-align: center;">*Harap Copy Kode ini Kamu Telah Membeli Buku Dari toko yang memeliki id Seperti Di Bawah:</p>
<center><span style="display: inherit; padding: 10px; background: #4689db; width: 90%; color: #fff; margin-top: 5px;">Id Toko.#1992.<?php echo $_GET['penjual'] ?></span></center>
</div>
</div>
<div>
<h3>Dikirim Ke Alamat Kamu</h3>
<style>
.populer{border:1px solid #ddd;overflow:hidden}
.populer li{list-style:none;padding:5px;display:inline-block;width:100%;border-bottom:1px solid #ddd}
.populer li img{width:70px;height:70px;float:left;margin-right:10px;}
.populer li a{text-decoration:none;font-size:14px;color:#444}
</style>
<div class="populer" style="padding: 10px">
<center><span style="display: inherit; padding: 10px; background: #4689db; width: 90%; color: #fff; margin-top: 5px;">Alamat <?php echo $_GET['alamat'] ?></span></center>
<center><span style="display: inherit; padding: 10px; background: #4689db; width: 90%; margin-top: 5px;color: #fff;">Kecamatan <?php echo $_GET['kecamatan'] ?></span></center>
<center><span style="display: inherit; padding: 10px; background: #4689db; width: 90%; margin-top: 5px;color: #fff;">Kabupaten <?php echo $_GET['kabupaten'] ?></span></center>
<center><span style="display: inherit; padding: 10px; background: #4689db; width: 90%; margin-top: 5px;color: #fff;">Provinsi <?php echo $_GET['provinsi'] ?></span></center>
<center><span style="display: inherit; padding: 10px; background: #4689db; width: 90%; margin-top: 5px;color: #fff;">Kode Pos Anda <?php echo $_GET['kode_pos'] ?></span></center>

</div>
</div>

<div>
<h3>Kontak Informasi Anda</h3>
<style>
.populer{border:1px solid #ddd;overflow:hidden}
.populer li{list-style:none;padding:5px;display:inline-block;width:100%;border-bottom:1px solid #ddd}
.populer li img{width:70px;height:70px;float:left;margin-right:10px;}
.populer li a{text-decoration:none;font-size:14px;color:#444}
</style>
<div class="populer" style="padding: 10px">
<center><span style="display: inherit; padding: 10px; background: #4689db; width: 90%; color: #fff; margin-top: 5px;">Nomor Telp :<?php echo $_GET['no_telp'] ?></span></center>
</div>
</div>

<div>
<h3>Metode Jasa Pengiriman Yang Kamu Pilih</h3>
<style>
.populer{border:1px solid #ddd;overflow:hidden}
.populer li{list-style:none;padding:5px;display:inline-block;width:100%;border-bottom:1px solid #ddd}
.populer li img{width:70px;height:70px;float:left;margin-right:10px;}
.populer li a{text-decoration:none;font-size:14px;color:#444}
</style>
<div class="populer" style="padding: 10px">
<center><span style="display: inherit; padding: 10px; background: #4689db; width: 90%; color: #fff; margin-top: 5px;"><?php echo $_GET['jasa_pengiriman'] ?></span></center>
</div>
</div>

<div>
<h3>Jumlah Total Yang Harus Kamu Bayar</h3>
<style>
.populer{border:1px solid #ddd;overflow:hidden}
.populer li{list-style:none;padding:5px;display:inline-block;width:100%;border-bottom:1px solid #ddd}
.populer li img{width:70px;height:70px;float:left;margin-right:10px;}
.populer li a{text-decoration:none;font-size:14px;color:#444}
</style>
<div class="populer" style="padding: 10px">
<center><span style="display: inherit; padding: 10px; background: #4689db; width: 90%; color: #fff; margin-top: 5px;">Rp.<?php echo number_format($_GET['bayar'],0,',','.') ?> <b>K</b></span>
<a href="konfirmasi.php"><input type="submit" value="Bayar Sekarang"></a>
</center>
</div>
</div>
</div>
</div>

</body>
</html>
<?php }}
else{
	?>
	<script>
    alert("anda harus login terlebih dahulu");
	window.location.href="login.php";
    </script>
	
	<?php
	}
 ?>
 <div style="clear: both;"></div>
<?php include 'component/fotter.php'; ?>
