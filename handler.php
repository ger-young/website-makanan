<?php
include "root.php";
$db=new data();
$aksi=$_GET["aksi"];
if($aksi=='login'){
	$db->login($_POST['username'],$_POST['password']);
	}
if ($aksi=="daftar_pelanggan") {
	$db->daftar_pelanggan($_POST['username'],$_POST['nama_lengkap'],$_POST['email'],$_POST['password'],$_POST['alamat'],$_POST['provinsi'],$_POST['kabupaten'],$_POST['kecamatan'],$_POST['kode_pos'],$_POST['no_telp']);
}
if($aksi=='beli'){
	$db->beli($_POST['id_pembeli'],$_POST['id_vendor'],$_POST['id_buku'],$_POST['nama_buku'],$_POST['gambar'],$_POST['qty'],$_POST['harga'],$_POST['kategori'],$_POST['keterangan'],$_POST['jasa_pengiriman']);
	}

if($aksi=='logout'){
	$db->logout();
	}
if($aksi=="creat_market") {
	$tmp_name=$_FILES['gambar']['tmp_name'];
	$name=$_FILES['gambar']['name'];
	$type=$_FILES['gambar']['type'];
	$loc="gambar/$name";
	move_uploaded_file($tmp_name,$loc);
	$db->buat_toko($_POST["id_vendor"],$_POST["nama_toko"],$_POST["tgl_berdiri"],$loc,$_POST["type"],$_POST["deskripsi"],$_POST["email"],$_POST["no_telp"],$_POST["alamat"],$_POST["kota"],$_POST["kecamatan"],$_POST["provinsi"],$_POST["kode_pos"]);
}
if ($aksi=="tambah_katalog") {
	$db->tambah_katalog($_POST['id_vendor'],$_POST['nama_katalog']);
}
if($aksi == "update_katalog"){
 	$db->update_edit_katalog($_POST['id_katalog'],$_POST['id_vendor'],$_POST['nama_katalog']);
 }
 if ($aksi=="hapus_katalog") {
	$db->hapus_katalog($_GET['id_katalog']);
}
if ($aksi=="tambah_partner_pengirimann"){
	$db->tambah_partner_pengiriman($_POST['id_vendor'],$_POST['nama_jasa'],$_POST['waktu_lama'],$_POST['deskripsi']);
}

if ($aksi=="jual") {
	$tmp_name=$_FILES['gambar']['tmp_name'];
	$name=$_FILES['gambar']['name'];
	$type=$_FILES['gambar']['type'];
	$loc="gambar/$name";
	move_uploaded_file($tmp_name,$loc);
	$db->jual($_POST['id_vendor'],$_POST['nama_buku'],$_POST['harga'],$loc,$_POST['pengarang_buku'],$_POST['katalog'],$_POST['diskon'],$_POST['ket'],$_POST['recomended'],$_POST['kondisi'],$_POST['qty'],$_POST['kategori']);
}
if ($aksi=="update_buku") {
	$tmp_name=$_FILES['gambar']['tmp_name'];
	$name=$_FILES['gambar']['name'];
	$type=$_FILES['gambar']['type'];
	$loc="gambar/$name";
	move_uploaded_file($tmp_name,$loc);
	$db->update_edit_buku($_POST['id'],$_POST['id_vendor'],$_POST['nama_buku'],$_POST['harga'],$loc,$_POST['pengarang_buku'],$_POST['katalog'],$_POST['diskon'],$_POST['ket'],$_POST['recomended'],$_POST['kondisi'],$_POST['qty'],$_POST['kategori']);
}
if ($aksi=="hapus_buku") {
	$db->hapus_buku($_GET['id']);
}
if ($aksi=="hapus_jasa_pengiriman") {
	$db->hapus_partner_pengiriman($_GET['id']);
}

if ($aksi=="favoritkan_buku") {
	$db->favoritkan_buku($_POST['id_pembeli'],$_POST['id_buku']);
}
if ($aksi=="stok") {
	$db->stok($_POST['id_vendor'],$_POST['id_buku'],$_POST['jumlah']);
}

if($aksi=='qtytambah'){
	$db->qtytambah($_GET['id'],$_GET['id_buku'],$_GET['qty'],$_GET['harga']);
	}

if($aksi=='batalkan'){
	$db->batalkan($_GET['id']);
	}

if($aksi=='qtykurang'){
	$db->qtykurang($_GET['id'],$_GET['id_buku'],$_GET['qty'],$_GET['harga']);
	}
if ($aksi=='kirim_pesan') {
	$db->kirim_pesan($_POST['id_pembeli'],$_POST['id_vendor'],$_POST['tgl'],$_POST['isi_pesan']);
}
if($aksi=='selesaibelanja'){
	$db->selesaibelanja($_POST['id_pembeli'],$_POST['id_vendor'],$_POST['kode_pembelian'],$_POST['nama'],$_POST['jumlah'],$_POST['jumlah_bayar'],$_POST['tanggal_beli'],$_POST['alamat'],$_POST['kabupaten'],$_POST['kecamatan'],$_POST['provinsi'],$_POST['kode_pos'],$_POST['no_telp'],$_POST['jasa_pengiriman']);
	
	}
if ($aksi=='konfirmasi') {
	$tmp_name=$_FILES['gambar']['tmp_name'];
	$name=$_FILES['gambar']['name'];
	$type=$_FILES['gambar']['type'];
	$loc="gambar/$name";
	move_uploaded_file($tmp_name,$loc);
	$db->konfirmasi($_POST['pembeli'],$_POST['kode_pembelian'],$_POST['id_vendor'],$_POST['nama_bank'],$_POST['tgl'],$_POST['pesan'],$loc);
	}
if ($aksi=="bayar_pajak") {
	$tmp_name=$_FILES['gambar']['tmp_name'];
	$name=$_FILES['gambar']['name'];
	$type=$_FILES['gambar']['type'];
	$loc="gambar/$name";
	move_uploaded_file($tmp_name,$loc);
	$db->bayar_pajak($_POST['id_vendor'],$_POST['id_pembeli'],$_POST['durasi'],$_POST['harga_total'],$_POST['catatan'],$loc);
	}
if($aksi=='konfir'){
	$db->konfir($_GET['id']);
	}
if($aksi=='konfir_kirim'){
	$db->konfir_kirim($_GET['id']);
	}
if($aksi=='konfir_kirim_kota'){
	$db->konfir_kirim_kota($_GET['id']);
	}
if($aksi=='konfir_terima'){
	$db->konfir_terima($_GET['id']);
	}
if($aksi=='konfir_selesai'){
	$db->konfir_selesai($_GET['id']);
	}
if($aksi=='konfir_terima_barang'){
	$db->konfir_terima_barang($_GET['id']);
	}
if($aksi=='konfir_bayar'){
	$db->konfir_bayar($_GET['id']);
	}
if($aksi=='konfir_terima_tranfer'){
	$db->konfir_terima_transfer($_GET['id']);
	}
if ($aksi=="cairkan_pendapatan") {
	$db->cairkan_dana($_POST['id_pembeli'],$_POST['id_vendor'],$_POST['jumlah_pendapatan'],$_POST['rekening'],$_POST['atas_nama'],$_POST['tgl_transfer'],$_POST['catatan']);
}

 ?>