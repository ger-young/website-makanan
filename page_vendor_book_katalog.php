<!DOCTYPE html>
<html>
<head>
	<title>Situs Jual Beli Buku Terpercaya</title>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="asset/css/slider.css">
	<style type="text/css">input[type=text]{margin: 10px 0 10px 0; padding: 10px ; width: 400px; color: #ccc;}
	input[type=password]{margin: 10px 0 10px 0; padding: 10px ; width: 380px; color: #ccc;}
	input[type=submit]{margin: 10px 0 10px 0; padding: 10px; background: orange; color: #fff; border: 0; outline: 0; width: 200px;

	 </style>
	 <style>
*{margin:0;padding:0;font-family:Arial, Helvetica, sans-serif}
.container{max-width:1020px;margin:0 auto}
.post{width:70%;float:left}
.log{float:right;margin:30px;}
.log li {list-style:none;display:inline}
.log li a{display:inline-block;padding:10px;text-decoration:none;;color:#fff;background:#3498db}
.article{width:30%;margin:5px;display:inline-block;border:1px solid #ddd;overflow:hidden}
.article img{width:100%;height:150px;border-bottom:1px solid #ddd}
.article > div{margin:5px;}
.sidebar{width:30%;float:right}
.sidebar > div{margin:5px;}
.sidebar h3{background:#3498db;color:#fff;padding:10px;}
</style>
</head>
<body>
<?php include 'component/header.php'; ?>
<?php $r=$db->get_vendor($_GET['id_vendor']); ?>
<div class="slider-content" style="float: right;width: 100%; background: #eee">
  <div class="slider-contents">
  <?php 
    $id=$r["id_vendor"];
    $kat=mysql_query("SELECT * from toko where id_vendor='$id'");
    $kat2=mysql_fetch_array($kat);
 ?>
    <h1 style="text-align: center; padding: 20px;"><?php echo $kat2['nama_toko']; ?></h1>
  </div>
</div>

<div class="container">
<div class="post">
<?php 
$r=$db->get_buku_katalog($_GET['katalog']);
 $id=$r["katalog"];
 $kat90=mysql_query("SELECT * from buku where katalog='$id'");
 while ($kat5=mysql_fetch_array($kat90)) {
 	?>
 		<div class="article">
<img src="<?php echo $kat5['gambar']; ?>">
<div>
<h3 style="margin: 0 0 5px 0;white-space:nowrap;text-overflow:ellipsis;overflow:hidden; font-size: 14px"><a href="detail.php?id_barang=<?php echo $r['id'] ?>" style="text-decoration:none;color:#444;"><?php echo $kat5['nama_buku'] ?></a></h3>
<span style="font-size:11px;color:#fff;background:#2ecc71;padding:3px;border-radius:2px;">Qty : <?php echo $kat5['qty'] ?></span>
<span style="font-size:11px;color:#fff;background:#e74c3c;padding:3px;border-radius:2px;"><?php echo $kat5['kategori'] ?></span>
<span style="font-size:11px;color:#fff;background:#2ecc71;padding:3px;border-radius:2px;">Tersedia</span><br><br>
<center><h3><?php echo "Rp. ".number_format($kat5['harga'],0,',','.') ?></h3></center>

 <a href="detail_product.php?id_buku=<?php echo $kat5['id'] ?>"><input type="submit" value="Lihat Dulu" style="margin: 10px 0 10px 0 ; padding: 10px ; background: orange; outline: 0; border:0; color: #fff; font-size: 13px; width: 100%"></a>
</div>
</div>
 	<?php
 }
 
?>

</div>

<div class="sidebar">
<div>
<h3>Diskripsi Profil</h3>
<style>
.populer{border:1px solid #ddd;overflow:hidden}
.populer li{list-style:none;padding:5px;display:inline-block;width:100%;border-bottom:1px solid #ddd}
.populer li img{width:70px;height:70px;float:left;margin-right:10px;}
.populer li a{text-decoration:none;font-size:14px;color:#444}
</style>
<div class="populer" style="padding: 10px">
<center><span style="display: inherit; padding: 10px; background: #4689db; width: 90%; color: #fff; margin-top: 5px;">Kategori 1</span></center>
<center><span style="display: inherit; padding: 10px; background: #4689db; width: 90%; margin-top: 5px;color: #fff;">Kategori 1</span></center>
<center><span style="display: inherit; padding: 10px; background: #4689db; width: 90%; margin-top: 5px;color: #fff;">Kategori 1</span></center>
</div>
</div>


</div>
<div style="clear:both"></div>

</div><br />
</body>
</html>
