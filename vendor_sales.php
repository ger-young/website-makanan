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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Free Responsive Admin Theme - ZONTAL</title>
    <link href="teamplate/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="teamplate/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="teamplate/assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>info@yourdomain.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+90-897-678-44
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->

    <!-- LOGO HEADER END-->
  <?php 
    include 'vendor_header.php';
   ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
        <?php 
$toko=$db->tampil_toko($_SESSION['id_pembeli']);
$katalog=$db->tampil_katalog($_SESSION['id_pembeli']);
$buku=$db->tampil_buku($_SESSION['id_pembeli']);
$katalog_vendor=$db->tampil_katalog_vendor($_SESSION['id_pembeli']);
$buku_vendor=$db->tampil_buku_vendor($_SESSION['id_pembeli']);
?>

          <?php 
           $aksi=$_GET['aksi'];
            if($aksi=="jual_buku"){              
             ?> 
                   <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Jual Bukumu Disini </h1>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           *ISIKAN DATA BUKU DENGAN LENGKAP
                        </div>
                        <div class="panel-body">
                      <form action="handler.php?aksi=jual" method="post" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" name="id_vendor" value="<?php echo $_SESSION['id_pembeli'] ?>">
                            <input type="text" class="form-control" name="nama_buku" placeholder="Nama Buku">
                            <input type="text" name="harga" placeholder="Harga" class="form-control">
                            <span>Pilih gambar </span><input type="file" name="gambar" class="form-control">
                            <input type="text" name="pengarang_buku" placeholder="pengarang buku" class="form-control"><br>  
                            <p style="font-size: 13px; margin-top: 10px; color: #ccc">*Katalog</p>
                                  <select name="katalog" class="form-control">
                                     <?php 
                                    foreach($katalog as $r){
                                        ?>
                                            <option value="<?php echo $r['nama_katalog']; ?>"><?php echo $r['nama_katalog']; ?></option>
                                        <?php
                                    }
                               ?>
                                   </select><br>
                            <input type="number" name="diskon" value="%" placeholder="diskon Buku" class="form-control">
                            <textarea placeholder="Detail barang" name="ket" class="form-control"></textarea>
                            <select class="form-control" name="recomended">
                                <option>-Rekomendasikan Bukumu-</option>
                                <option value="rekomendasi">Rekomendasi</option>
                            </select>
                            <select class="form-control" name="kondisi">
                                <option>-Kondisi Bukumu-</option>
                                <option value="baru">Kondisi Baru</option>
                                <option value="bekas">Kondisi Bekas</option>
                            </select>
                            <input type="number" name="qty" placeholder=qty class="form-control">
                             <input type="text" name="kategori" placeholder="Kategori Buku" class="form-control">
                        <div class="radio" requried>
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required="required" />
                            Saya telah mengerti dan telah memahami semua aturan jualan yang telah tertera di aturan lapakbuku 
                          </label>
                        </div>
                          <input type="submit"  value="Jual Barang" class="btn btn-info" style="padding:10px; margin-right: 10px; width: 150px;">
                          </form>
                            </div>
                            </div>
                    </div>
                   
                </div>
        </div>
             <?php }
               else if ($aksi=="lihat_data_buku") {
                    ?>
                      <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data Semua Buku</h1>
                    </div>
                </div>
                         <!--   Kitchen Sink -->
                         <a href="vendor_sales.php?aksi=tambah_katalog"><input type="submit"  value="Tambah Kategori Buku" class="btn btn-info" style="padding:10px; margin-right: 10px; width: 200px; margin-bottom: 10px;"></a>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Buku Penjualan Disini
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                           <th>Nama Buku</th><th>Katalog</th><th>Kategori</th><th>Pengarang</th><th>Harga</th><th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
                                        foreach($buku as $r){
                                            ?>
                                                <tr>
                                                    <td><?php echo $r['nama_buku']; ?></td>
                                                    <td><?php echo $r['katalog']; ?></td>
                                                    <td><?php echo $r['kategori'] ?></td>
                                                    <td><?php echo $r['pengarang_buku']; ?></td>
                                                    <td>Rp.<?php echo $r['harga']; ?></td>
                                                    <td><a href="#"  class="btn btn-xs btn-primary"  >Detail</a> <a href="#"  class="btn btn-xs btn-success"  >Edit</a> <a href="#"  class="btn btn-xs btn-danger"  >Delete</a> </td>
                                                </tr>
                                            <?php
                                        }
                                   ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                    <?php
                } else if ($aksi=="tambah_katalog") {
                    ?>
                        <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Jual Bukumu Disini </h1>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           *ISIKAN DATA BUKU DENGAN LENGKAP
                        </div>
                        <div class="panel-body">
                      <form action="handler.php?aksi=tambah_katalog" method="post" enctype="multipart/form-data">
                      <label>Nama Katalog :</label>
                        <input type="hidden" class="form-control"  value="<?php echo $_SESSION['id_pembeli'] ?>" name="id_vendor"><br>
                        <input type="text" class="form-control" name="nama_katalog" placeholder="Nama Katalog"><br>
                        <input type="submit"  value="Terbitkan" class="btn btn-info" style="padding:10px; margin-right: 10px; width: 150px;">
                       
                        </form>
                            </div>
                            </div>
                    </div>
                   
                </div>
        </div>
                    <?php
                } else if($aksi=="tampil_katalog"){
                    ?>
                         <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data Semua Katalog</h1>
                    </div>
                </div>
                         <!--   Kitchen Sink -->
                         <a href="vendor_sales.php?aksi=tambah_katalog"><input type="submit"  value="Tambah Kategori Buku" class="btn btn-info" style="padding:10px; margin-right: 10px; width: 200px; margin-bottom: 10px;"></a>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Buku Penjualan Disini
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                           <th>Nama Katalog</th><th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
                                        foreach($katalog as $r){
                                            ?>
                                                <tr>
                                                    <td><?php echo $r['nama_katalog']; ?></td>
                                                    <td><a href="#"  class="btn btn-xs btn-primary"  >Detail</a> <a href="#"  class="btn btn-xs btn-success"  >Edit</a> <a href="#"  class="btn btn-xs btn-danger"  >Delete</a> </td>
                                                </tr>
                                            <?php
                                        }
                                   ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                    <?php
                }
              ?>
           
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>
   
</body>
</html>
  <?php
    }
?>
