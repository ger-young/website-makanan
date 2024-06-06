         <script src="teamplate/assets/js/jquery-1.11.1.js"></script>
        <!-- BOOTSTRAP SCRIPTS  -->
        <script src="teamplate/assets/js/bootstrap.js"></script>
        
        <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                <h1 style="color: #fff; font-weight: bold;">LAPAKBUKU</h1>
                </a>

            </div>
              <?php
            include "root.php";
            $db=new data();
            error_reporting(0);
            session_start();
            if($_SESSION['pembeli']){
                ?>
                <?php 
                $toko_pp=$db->tampil_toko_pp($_SESSION['id_pembeli']);
           
             ?>
            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="gambar/programmer.png" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"> <?php echo $_SESSION['pembeli'] ?></h4>
                                        <h5> <?php 
                                                foreach($toko_pp as $r){
                                                  $id=$r["id_vendor"];
                                                  $kat=mysql_query("SELECT * from pembeli where id_pembeli='$id'");
                                                  $kat2=mysql_fetch_array($kat);
                                                    ?>
                                                   <?php echo $r['nama_toko']; ?>
                                                     <?php
                                                    }
                                               ?></h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Lapakbuku : </strong></h5>
                                Terima Kasih Telah Buka Usaha di Lapakbuku
                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="handler.php?aksi=logout" class="btn btn-danger btn-sm">Logout</a>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard_vendor.php">Dashboard</a></li>
                            <li><a href="vendor_sales.php?aksi=jual_buku">Jual Barang</a></li>
                            <li><a href="partner_pengiriman.php?aksi=lihat_data_partner_pengiriman">Partner Pengiriman</a></li>
                            <li><a href="#">Detail Toko</a></li>
                         
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php } ?>