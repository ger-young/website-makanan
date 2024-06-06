<!DOCTYPE html>
<html>
<head>
	<title>Situs Jual Beli Buku Terpercaya</title>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="asset/css/slider.css">
</head>
<body>
<?php include 'component/header.php'; ?>
<div style="margin-top: 20px;">
	<?php include 'component/search-panel.php'; ?>
</div>
<style type="text/css">
	.blog{width: 50%; float: left; margin-left: 6%; margin-top: 20px}
	.blog_main_content{margin-top: 20px;}
	.blog_content h2{ font-family: arial; color: #444; font-size: 20px; margin-bottom: 10px;}
	.blog_content b{font-size: 12px; color: #444; padding: 5px; background: #4689db; margin-right: 10px; color: #fff; border-radius: 3px;}
	.blog_content p{color: #444}
	.sidebar{width:30%;float:right; margin-right: 6%; margin-top: 30px;}
	.sidebar > div{margin:5px;}
	.sidebar h3{background:#3498db;color:#fff;padding:10px;}
</style>
<?php 
error_reporting(0);
session_start();
      $r=$db->get_blog($_GET['id_blog']);
      ?>
<div class="blog">

	<div class="blog_main_content">
				<div class="blog_content">
				<h2><?php echo $r['judul']; ?></h2>
				<b><?php echo $r['kategori']; ?></b><b><?php echo $r['tgl']; ?></b><b>Writer By:<?php echo $r['tulisan']; ?></b><br>
					<img src="admin/<?php echo $r['gambar']; ?>" alt="Picture blog" style="width: auto; height: 250px; margin-top: 10px;">
					<p><?php echo $r['isi_blog']; ?>.</p>	
				</div>
			</div>
</div>

<div class="sidebar">
	<div>
<h3>Blog Populer</h3>
<style>

.populer{border:1px solid #ddd;overflow:hidden}
.populer li{list-style:none;padding:5px;display:inline-block;width:100%;border-bottom:1px solid #ddd}
.populer li img{width:70px;height:70px;float:left;margin-right:10px;}
.populer li a{text-decoration:none;font-size:14px;color:#444}
</style>
<div class="populer" style="padding: 10px">

</div>
</div>
</div>
<div style="clear: both;"></div>
<?php include 'component/fotter.php'; ?>
</body>
</html>