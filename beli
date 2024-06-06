<!DOCTYPE html>
<html>
<head>
    <title>Situs Jual Beli Buku Terpercaya</title>
    <link rel="stylesheet" type="text/css" href="asset/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="asset/css/slider.css">
      <script type="text/javascript" src="asset/js/jquery.min.js"></script>
       <script type="text/javascript" src="asset/js/jquery-ui.min.js"></script>
       <style type="text/css">input[type=text]{margin: 10px 0 10px 0; padding: 10px ; width: 400px; color: #ccc;}
    input[type=password]{margin: 10px 0 10px 0; padding: 10px ; width: 380px; color: #ccc;}
    input[type=submit]{margin: 10px 0 10px 0; padding: 10px; background: orange; color: #fff; border: 0; outline: 0; width: 200px;

     </style>
</head>
<body>
<div>
<?php include 'component/header.php'; ?>
</div>
<div class="content-search">
     <style type="text/css">
            .notif{margin-top: 10px; padding: 10px; background: #eee; font-size: 12px; width: 60%; margin-left: 6%; border: 2px solid #4689db;}
        </style>
        <div class="notif">
            <p>Hello <strong><?php echo $_SESSION['pembeli']; ?> </strong> Berikut adalah hasil pencarian buku kamu , alternatif ini sangat cocok buat kamu guna menemukan buku kamu dengan cepat</p>
        </div>

</div>
<style type="text/css">
    .wrapper{ margin-left: 6%}
    .wrapper-content{}
    .content{float: left; width: 150px; margin-right: 20px; background: #fff; border:1px solid #ccc; margin-top: 20px}
    .isi{background: #fff; padding: 10px}
    .isi h5{font-size: 12px;  text-align: center;}
    .isi h7{font-size: 12px;  text-align:center; border:1px solid #ccc; padding: 5px; margin-top: 5px; border-radius: 5px;}

    .isi h6{font-size: 12px;  text-align: center; padding: 10px; }
    input[type=submit]:hover{background: #fff; color: orange; outline: 1px solid #ccc;}
</style>
<div class="wrapper">
    <div class="wrapper-content">
        <div class="content">
                    <center><img src="<?php echo $r['gambar'] ?>" style="width: 95%; height: 200px"></center>
                    <div class="isi">
                        <h5><?php echo $r['nama_buku']; ?></h5>
                        <a href="page_vendor.php?id_vendor=<?php echo $r['id_vendor'] ?>"><h5 style="font-size: 13px; color:green; border-radius: 5px;">Penjual <?php echo $kat2['nama_toko'];?></h5></a>
                        <p style="text-align: center; font-size: 13px; color: yellow">(<?php echo $kat4['type'];?>) Acunt</p>
                        <h5>Rp.<?php echo $r['harga']; ?></h5>
                    <center>
                        <a href="detail_product.php?id_buku=<?php echo $r['id'] ?>"><input type="submit" value="Lihat Dulu" style="margin: 10px 0 10px 0 ; padding: 10px ; background: orange; outline: 0; border:0; color: #fff; font-size: 13px; width: 100%"></a>
                    </center> 
                    </div>
                </div>
    </div>
</div>
<div style="clear: both;"></div>
<?php include 'component/fotter.php'; ?>
</body>
</html>