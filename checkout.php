<!DOCTYPE html>
<html>
<head>
	<title>Situs Jual Beli Buku Terpercaya</title>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="asset/css/slider.css">
</head>
<body>
<style type="text/css">
	input[type=text]{margin: 10px 0 10px 0; padding: 10px ; width: 400px; color: #ccc;}
	input[type=password]{margin: 10px 0 10px 0; padding: 10px ; width: 380px; color: #ccc;}
	input[type=submit]{margin: 10px 0 10px 0; padding: 10px; background: orange; color: #fff; border: 0; outline: 0; width: 200px; border: 1px solid orange; cursor: pointer; }
</style>
<?php include 'component/header.php'; ?>
	<div class="products">	 
		<div class="container">  

<script tyle="text/javascript" src="dist/js/jquery-1.11.3.min.js"></script>

<style>
.container1{width: 100%;  margin:0 auto;margin-top:50px;}
.post{width:100%;float:left;margin-left: 6%; margin-bottom: 100px}
.article{}
.article img{width:250px;height:250px;float:left}
.article > div{margin:5px;}
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
</style>

<div style="clear:both"></div>
			               <?php 
			        
error_reporting(0);
session_start();
if($_SESSION['pembeli']){
?>
<div class="container1">
<style type="text/css">
            .notif{ padding: 10px; background: #eee; color: #444; border: 1px solid #4689db; float: left; margin-left: 6%; margin-bottom: 10px; width: 60% }
        </style>
        <div class="notif">
            <p>Hello <strong><?php echo $_SESSION['pembeli']; ?> </strong>Ini adalah daftar belanja an kamu , kamu dapat melanjutkan ke proses pembayaran  , dan kamu jika ragu kamu dapat membatalkan dan berbelaja lagi di lapakbuku , enjoy ya belanja di lapakbuku</p>
        </div>
<div class="post">
<?php 
$checkout=$db->produk_temp($_SESSION['id_pembeli']);
?>
<div class="article">
<table>
<tr><td>Gambar</td><td>Nama Buku</td><td>Dari Toko</td><td>Jumlah Buku</td><td>Harga Perbuku</td><td>Harga total</td><td>Opsi qty</td><td>Aksi</td></tr>
<?php 
foreach($checkout as $r){
    ?>
    <?php 
    $id=$r["id_vendor"];
    $kat=mysql_query("SELECT * from toko where id_vendor='$id'");
    $kat2=mysql_fetch_array($kat);
 ?>
    <tr><td><img style="width:100px;height:50px;" src="<?php echo $r['gambar'] ?>"></td><td><?php echo $r['nama_buku'] ?></td><td><?php echo $kat2['nama_toko'] ?></td><td><?php echo $r['qty_beli'] ?></td><td><?php echo "Rp.".$r['harga'] ?><b>K</b></td><td><?php echo "Rp.".$r['total_harga'] ?> <b>K</b></td><td><a style="font-size:11px;color:#fff;background:#2ecc71;padding:3px;border-radius:2px;text-decoration:none;margin:5px;" href="handler.php?aksi=qtytambah&id=<?php echo $r['id'] ?>&id_produk=<?php echo $r['id_produk'] ?>&qty=<?php echo $r['qty_beli'] ?>&harga=<?php echo $r['harga'] ?>">+</a><a style="font-size:11px;color:#fff;background:#2ecc71;padding:3px;border-radius:2px;text-decoration:none;margin:5px;" href="handler.php?aksi=qtykurang&id=<?php echo $r['id'] ?>&id_produk=<?php echo $r['id_produk'] ?>&qty=<?php echo $r['qty_beli'] ?>&harga=<?php echo $r['harga'] ?>">-</a></td><td><a style="font-size:11px;color:#fff;background:#e74c3c;padding:3px;border-radius:2px;" href="handler.php?aksi=batalkan&id=<?php echo $r['id'] ?>">Batalkan</a></td></tr>
    
    <?php
    
    }

?>
<tr><td>Total Bayar :</td><td colspan="4"></td><td colspan="4"><?php echo "Rp. ".($db->total_bayar($_SESSION['id_pembeli']))." <b>K</b>" ?></td></tr>
</table><br />
<form action="handler.php?aksi=selesaibelanja" method="post">
	<input type="hidden" name="id_pembeli" value="<?php echo $_SESSION['id_pembeli'] ?>" />
	<input type="hidden" name="id_vendor" value="<?php echo $db->pilih_orang_vendor($_SESSION['id_pembeli'])?>" />
	<input type="hidden" name="kode_pembelian" value="<?php echo rand(); ?>" />
	<input type="hidden" name="jumlah" value="<?php echo $db->temp_jumlah($_SESSION['id_pembeli']) ?>" />
	<input type="hidden" name="nama" value="<?php echo $_SESSION['pembeli'] ?>">
	<input type="hidden" name="jumlah_bayar" value="<?php echo $db->total_bayar($_SESSION['id_pembeli']) ?>" />
	<input type="hidden" name="tanggal_beli" value="<?php echo date("d-m-Y") ?>" />
	<input type="hidden" name="alamat" value="<?php echo $db->pilih_orang($_SESSION['id_pembeli']) ?>" />
	<input type="hidden" name="kabupaten" value="<?php echo $db->pilih_orang_kabupaten($_SESSION['id_pembeli']) ?>" />
	<input type="hidden" name="kecamatan" value="<?php echo $db->pilih_orang_kecamatan($_SESSION['id_pembeli']) ?>" />
	<input type="hidden" name="provinsi" value="<?php echo $db->pilih_orang_provinsi($_SESSION['id_pembeli']) ?>" />
	<input type="hidden" name="kode_pos" value="<?php echo $db->pilih_orang_kode_pos($_SESSION['id_pembeli']) ?>" />
	<input type="hidden" name="no_telp" value="<?php echo $db->pilih_orang_no_telp($_SESSION['id_pembeli']) ?>" />
	<input type="hidden" name="jasa_pengiriman" value="<?php echo $db->pilih_orang_jasa_pengiriman($_SESSION['id_pembeli']) ?>" />
	<a href="index.php" style="padding:10px;font-size:15px;color:#fff;background:#3498db;outline:0;border:0;cursor:pointer">Belanja Lagi</a> 
	<input style="padding:10px;font-size:15px;color:#fff;background:#2ecc71;outline:0;border:0;cursor:pointer" type="submit" value="selesaikan Pembayaran" />
	
</form>
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

</html>