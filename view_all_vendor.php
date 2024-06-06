<!DOCTYPE html>
<html>
<head>
	<title>Situs Jual Beli Buku Terpercaya</title>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="asset/css/slider.css">
	<style type="text/css">
		input[type=text]{margin: 10px 0 10px 0; padding: 10px ; width: 400px; color: #ccc;}
	input[type=password]{margin: 10px 0 10px 0; padding: 10px ; width: 380px; color: #ccc;}
	input[type=submit]{margin: 10px 0 10px 0; padding: 10px; background: orange; color: #fff; border: 0; outline: 0; width: 200px; border: 1px solid orange; cursor: pointer; }
	</style>
</head>
<body>
<div>
<?php include 'component/header.php'; ?>
<?php 
error_reporting(0);
session_start();
      $r=$db->get_toko_vendor($_GET['id_vendor']);
      ?>
<div style="width: 100%; margin-top: 50px; margin-left: 6% " >
<?php 
	$db->tampil_all_vendor();
 ?>
</div>
</div>
<div style="clear: both;"></div>
<?php include 'component/fotter.php'; ?>
</body>
</html>