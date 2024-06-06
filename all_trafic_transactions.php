<?php 
error_reporting(0);
session_start();
if(!$_SESSION['pembeli']){
	?>
    <Script>
    alert("anda harus login terlebih dalulu");
	window.location.href="login.php";
    </script>
    
    <?php

}else{ ?>
<!DOCTYPE html>
<html>
<head>
	<title>Situs Jual Beli Buku Terpercaya</title>
	<link rel="stylesheet" type="text/css" href="asset/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="asset/css/slider.css">
	  <script type="text/javascript" src="asset/js/jquery.min.js"></script>
       <script type="text/javascript" src="asset/js/jquery-ui.min.js"></script>
	<style type="text/css">
		input[type=text]{margin: 10px 0 10px 0; padding: 10px ; width: 400px; color: #ccc;}
	input[type=password]{margin: 10px 0 10px 0; padding: 10px ; width: 380px; color: #ccc;}
	input[type=submit]{margin: 10px 0 10px 0; padding: 10px; background: orange; color: #fff; border: 0; outline: 0; width: 200px; border: 1px solid orange; cursor: pointer; }
	</style>
</head>
<body>
<div>
<?php include 'component/header.php'; ?>
<h2 style="color: #444; text-align: center; margin-top: 50px;">Pantau Pengiriman Buku Kamu Disini </h2>
<style type="text/css">
            .notif{ padding: 10px; background: #eee; color: #444; border: 1px solid #4689db; width: 430px; margin-right: 14px; margin-top: 4px; mr }
        </style>
        <center>
        	<div class="notif">
            <p>Hello <strong><?php echo $_SESSION['pembeli']; ?> </strong> Jika dalam 2-4 Hari Buku Pesanan kamu belum dikirim oleh sang vendo, maka uang kamu otomatif akan dikembalikan di <a href="bukadompet/home.php">bukadompet</a> kamu.</p>
        </div>
        </center>
        
<div style="width: 100%; margin-top: 50px; margin-left: 6% " >
 					<div class="slider-contents" style="float: left;width: 20%; margin-left: 2%; ">
					    <img src="asset/image/icon/jenny-animal-linguist-is-crowdfunding-on-hubbub.jpg" style="width:100%; padding: 0; height:186px; margin-top: 10px; ">
					    <span style="background: red; text-align: center; display: inherit; padding: 10px; color: #fff">Belum Dibayar</span>
					  </div>
					 <div class="slider-contents" style="float: left;width: 20%; margin-left: 2%; ">
					    <img src="asset/image/icon/Payments_payment_card_credit.png" style="width:100%; padding: 0; height:186px; margin-top: 10px; ">
					    <span style="background: #486;  text-align: center; display: inherit; padding: 10px; color: #fff">Dibayar</span>
					  </div>
					<div class="slider-contents" style="float: left;width: 20%; margin-left: 2%; ">
					    <img src="asset/image/icon/buyer-1f.png" style="width:100%; padding: 0; height:186px; margin-top: 10px; ">
					    <span style="background: #4689db; text-align: center; display: inherit; padding: 10px; color: #fff">Dikirim</span>
					  </div>
					 <div class="slider-contents" style="float: left;width: 20%; margin-left: 2%; ">
					    <img src="asset/image/icon/buyer-1e.png" style="width:100%; padding: 0; height:186px; margin-top: 10px; ">
					    <span style="background: #4689db; text-align: center; display: inherit; padding: 10px; color: #fff">Diterima</span>
					  </div>
</div>
<div style="clear: both;"></div>
<style>
td,th{border:1px solid #ccc;padding:10px; width: 550px; text-align: center;]}
table{border-collapse:collapse; margin-bottom: 199px}
h6{background: red; font-size: 14px; color: #fff; padding: 10px;}
p{background: #486; font-size: 14px; color: #fff; padding: 10px;}
h3{background: #4689DB; font-size: 14px; color: #fff; padding: 10px;}
h4{background: #467; font-size: 18px; color: #fff; padding: 10px;}
td a{background: #2ecc71; padding: 5px; color: #fff; border-radius: 3px;}

</style>
<center>
	
	 <table style="margin-top: 50px">
	 <p style="background: #fff; color: #444; margin-top: 50px;">Kamu Dapat Melihat Pantauan Pengiriman Barang Kamu Disini<br>Dengan Adanya Trafic Pantai Pengiriman ini Kamu Tidak Perlu kawatir Barang Kamu Tidak Dikirim </p>
    <tr>
    <th>Status & Trafik Pengiriman</th> <th>Tanggal Beli </th><th>Tindakan</th>
    </tr>
    <tr>
    <?php $transaksi=$db->selesai($_SESSION['id_pembeli']); 
	foreach($transaksi as $r){
		if($r[konfir]=='N'){
			
			$konfir="<h6>Belum Dibayar</h6>";
			}
		elseif($r[konfir]=='Y'){
			$konfir="<p>dibayar</p>";
			}
			elseif($r[konfir]=='K'){
			$konfir="<p>dikirim</p>";
			}
			elseif($r[konfir]=='KK'){
			$konfir="<h3>Sampai</h3>";
			}
			elseif($r[konfir]=='T'){
			$konfir="<h3>Diterima</h3>";
			}
			elseif($r[konfir]=='S'){
			$konfir="<h4>Selesai</h4>";
			}
			elseif($r[konfir]=='TB'){
			$konfir="<h4>SudaH KAMU Konfirmasi</h4>";
			}
		echo "<tr><td>".$konfir." </td><td>".$r['tanggal_beli']." </td><td> <a href='handler.php?aksi=konfir_terima_barang&id=".$r['id']."'>Konfirmasi Penerimaan</a> </td></tr>";
		?>
		</div></div>
		<?php
		}
		
	?>
    </table>

		</div></div>

</div>

<div style="clear: both;"></div>
<style type="text/css">
	.wrapper-fotter{width: 100%; margin-top: 50px;}
	.wrap-fotter{ background: #eee;overflow: hidden; }
	.contain-fotter{padding:25px 15px; float:left; color:#444; font-size:14px; margin-left: 2.5%; width: 200px;}
	.contain-fotter h3{text-align: center;}
	.contain-fotter p{text-align: center; background: none;}
</style>
<div class="wrapper-fotter">
	<div class="wrap-fotter">
		<div class="contain-fotter">
			<center><img src="../asset/image/icon/large-icon-user.png" style="width: 50px; height: 50px; "></center>
			<h3>Costumer Suport</h3>
			<p>Pelayanan servise yang memuaskan dan Baik sedia 24 Jam</p>
		</div>
		<div class="contain-fotter">
		<center><img src="../asset/image/icon/large-icon-user.png" style="width: 50px; height: 50px; "></center>
			<h3>Metode Pembayaran</h3>
			<p>Pembayaran Dengan Mudah dan terjamin Aman 100% Uang Kembali</p>
		</div>
		<div class="contain-fotter">
		<center><img src="../asset/image/icon/large-icon-user.png" style="width: 50px; height: 50px; "></center>
			<h3>Patrner Pengiriman</h3>
			<p>Partner Pengiriman Yang Cekatan Yang mengantar Pesanan Anda Tepat Waktu</p>
		</div>
		<div class="contain-fotter">
		<center><img src="../asset/image/icon/large-icon-user.png" style="width: 50px; height: 50px; "></center>
			<h3>Bukadompet</h3>
			<p>Bukadompet disinilah uang anda disimpan disini juga dapat menabung disini</p>
		</div>
		<div class="contain-fotter">
		<center><img src="../asset/image/icon/large-icon-user.png" style="width: 50px; height: 50px; "></center>
			<h3>Akses Service</h3>
			<p>Akses Cepat di berbagai platform yang mudah dan nyaman </p>
		</div>
	</div>
	<div class="wrap-fotter" style="background: #4689db; overflow: hidden; margin-top:0px">
		<div class="contain-fotter" style="color: #fff">
			<center><img src="../asset/image/icon/large-icon-user.png" style="width: 50px; height: 50px; "></center>
			<h3>Costumer Suport</h3>
			<p>Pelayanan servise yang memuaskan dan Baik sedia 24 Jam</p>
		</div>
		<div class="contain-fotter" style="color: #fff">
		<center><img src="../asset/image/icon/large-icon-user.png" style="width: 50px; height: 50px; "></center>
			<h3>Metode Pembayaran</h3>
			<p>Pembayaran Dengan Mudah dan terjamin Aman 100% Uang Kembali</p>
		</div>
		<div class="contain-fotter" style="color: #fff">
		<center><img src="../asset/image/icon/large-icon-user.png" style="width: 50px; height: 50px; "></center>
			<h3>Patrner Pengiriman</h3>
			<p>Partner Pengiriman Yang Cekatan Yang mengantar Pesanan Anda Tepat Waktu</p>
		</div>
		<div class="contain-fotter" style="color: #fff">
		<center><img src="../asset/image/icon/large-icon-user.png" style="width: 50px; height: 50px; "></center>
			<h3>Bukadompet</h3>
			<p>Bukadompet disinilah uang anda disimpan disini juga dapat menabung disini</p>
		</div>
		<div class="contain-fotter" style="color: #fff">
		<center><img src="../asset/image/icon/large-icon-user.png" style="width: 50px; height: 50px; "></center>
			<h3>Akses Service</h3>
			<p>Akses Cepat di berbagai platform yang mudah dan nyaman </p>
		</div>
	</div>
</div>
<span style="background: #469; padding: 20px 15px; color: #fff; font-size: 13px; display: inherit; margin-top: 0">Copyright 2017 | CEO Lapakcode.net</span>
	
</body>
</html>
	<?php
	}
?>