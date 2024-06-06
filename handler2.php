<?php
include "root2.php";
$db=new data2();
$aksi=$_GET["aksi"];

if ($aksi=="favoritkan_buku") {
	$db->favoritkan_buku($_POST['id_pembeli'],$_POST['id_buku']);
}

 ?>