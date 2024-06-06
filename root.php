<?php
class data{
		function __construct(){
				mysql_connect("localhost","root","");
				mysql_select_db("marketplace");
			}
		function login($username,$password){
			$query=mysql_query("select * from pembeli where username='$username' and password='$password'");
			$check=mysql_num_rows($query);
			$data=mysql_fetch_array($query);
			if($check>0){
				session_start();
				$_SESSION['pembeli']=$data['username'];
				$_SESSION['id_pembeli']=$data['id_pembeli'];
				header("location:index.php");
				}
			else{
				?>
                <script>
                alert("login gagal, mungkin username atau password anda salah");
				window.location.href="login.php";
                </script>
				<?php
				}
			}
		function daftar_pelanggan($username,$nama_lengkap,$email,$password,$alamat,$provinsi,$kabupaten,$kecamatan,$kode_pos,$no_telp){
			$data=mysql_query("INSERT into pembeli SET username='$username',nama_lengkap='$nama_lengkap',email='$email',password='$password',alamat='$alamat',provinsi='$provinsi',kabupaten='$kabupaten',kecamatan='$kecamatan',kode_pos='$kode_pos',no_telp='$no_telp'") or die(mysql_error());
				?>
					<script>
						alert("Selamat Bergabung & Selamat Datang Di LAPAKBUKU");
						window.location.href="index.php";
					</script>
				<?php
			}
		function logout(){
			session_start();
			unset($_SESSION['pembeli']);
			session_destroy();
			?>
				<script>
					alert("Anda Berhasil Logout");
					window.location.href="index.php"
				</script>
			<?php
			}

		function buat_toko($id_vendor,$nama_toko,$tgl_berdiri,$gambar,$type,$deskripsi,$email,$no_telp,$alamat,$kota,$kecamatan,$provinsi,$kode_pos){
			$data=mysql_query("INSERT into toko SET id_vendor='$id_vendor',nama_toko='$nama_toko',tgl_berdiri='$tgl_berdiri',gambar='$gambar',type='$type',deskripsi='$deskripsi',email='$email',no_telp='$no_telp',alamat='$alamat',kota='$kota',kecamatan='$kecamatan',provinsi='$provinsi',kode_pos='$kode_pos' ") or die(mysql_error());
			?>
				<script type="text/javascript">
					alert("Toko Berhasil Di Buat");
					window.location.href="vendor.php"
				</script>
			<?php
		}
		function tampil_all_vendor(){
			$data=mysql_query("SELECT * from toko");
			while ($r=mysql_fetch_array($data)) {
				?>
					<a href="page_vendor.php?id_vendor=<?php echo $r['id_vendor'] ?>"">
					   <div class="slider-contents" style="float: left;width: 20%; margin-left: 2%; ">
					    <img src="<?php echo $r['gambar']; ?>" style="width:100%; padding: 0; height:186px; margin-top: 10px; ">
					    <span style="background: #4689db; text-align: center; display: inherit; padding: 10px; color: #fff"><?php echo $r['nama_toko']; ?></span>
					  </div>
					</a>
				<?php
			}
		}
		function tampil_blog(){
			$data=mysql_query("SELECT * from blog ORDER BY id DESC LIMIT 6");
			while ($r=mysql_fetch_array($data)) {
				?>
			<div class="blog_main_content">
				<div class="blog_content">
				<h2><?php echo $r['judul']; ?></h2>
				<b><?php echo $r['kategori']; ?></b><b><?php echo $r['tgl']; ?></b><b>Writer By:<?php echo $r['tulisan']; ?></b><br>
					<img src="admin/<?php echo $r['gambar']; ?>" alt="Picture blog" style="width: auto; height: 250px; margin-top: 10px;">
					<p><?php echo $r['isi_blog']; ?>.</p>	
				</div>
				<a href="detail_view_blog.php?id_blog=<?php echo $r['id']; ?>"><input type="submit" value="Baca Selengkapnya"></a>
			</div>
				<?php
			}
				
		}

		function tampil_toko_pp($id){
			$s=mysql_query("SELECT * from toko where id_vendor='$id' ");
			while ($r=mysql_fetch_array($s)) {
			$hasil[]=$r;
				}return $hasil;
			}
		function tampil_toko($id){
			$s=mysql_query("SELECT * from toko where id_vendor='$id' ");
			while ($r=mysql_fetch_array($s)) {
			$hasil[]=$r;
				}return $hasil;
			}
		function tambah_katalog($id_vendor,$nama_katalog){
		$s=mysql_query("INSERT INTO katalog SET id_vendor='$id_vendor',nama_katalog='$nama_katalog'") or die(mysql_error());
		?>
				<script>
			        alert("katalog berhasil di tambahkan");
					window.location.href="vendor/home.php?aksi=tambah_katalog";
        		</script>
		<?php
		}
		function stok($id_vendor,$id_buku,$jumlah){
			$s=mysql_query("INSERT Into stok SET id_vendor='$id_vendor',id_buku='$id_buku',jumlah='$jumlah'") or die(mysql_error());
			?>
				<script>
					alert("Stok telah Berhasil Di Atur");
					window.location.href="vendor.php"
				</script>
			<?php
		}

		
		function tampil_katalog($id){
			$s=mysql_query("SELECT * from katalog where id_vendor='$id' ");
			while ($r=mysql_fetch_array($s)) {
			$hasil[]=$r;
				}return $hasil;
			}
		function tampil_katalog_vendor($id){
			$s=mysql_query("SELECT * from katalog where id_vendor='$id' ");
			while ($r=mysql_fetch_array($s)) {
			$hasil[]=$r;
				}return $hasil;
		}

		function edit_katalog($id){
			$s=mysql_query("SELECT * from katalog where id_katalog='$id' ");
			while ($r=mysql_fetch_array($s)) {
			$hasil[]=$r;
				}return $hasil;
			}
		function update_edit_katalog($id_katalog,$id_vendor,$nama_katalog){
		mysql_query("UPDATE katalog set id_vendor='$id_vendor', nama_katalog='$nama_katalog' where id_katalog='$id_katalog'") or die(mysql_error());
		?>
		<script>
				 alert("Perubahan data Katalog Berhasill");
					window.location.href="vendor/home.php?aksi=lihat_katalog";
				</script>
		<?php
	}

	function hapus_katalog($id){
		mysql_query("delete from katalog where id_katalog='$id'");
		?>
			<script>
					 alert("Data Katalog Berhasil kamu Hapus:-)");
					window.location.href="vendor/home.php?aksi=lihat_katalog";
				</script>
		<?php
		}

		function tampil_katalog_index(){
			$v=mysql_query("SELECT * FROM katalog order by id_katalog ");
			while ($r=mysql_fetch_array($v)) {
				?>
					<div class="chip">
						  <a href="page_vendor_book_katalog.php?katalog=<?php echo $r['nama_katalog']; ?>"><?php echo $r['nama_katalog']; ?></a>
						</div>
				<?php
			}
		}

		function jual($id_vendor,$nama_buku,$harga,$gambar,$pengarang_buku,$katalog,$diskon,$ket,$recomended,$kondisi,$qty,$kategori){
			$s=mysql_query("INSERT INTO buku SET id_vendor='$id_vendor', nama_buku='$nama_buku',harga='$harga',gambar='$gambar',pengarang_buku='$pengarang_buku',katalog='$katalog',diskon='$diskon',ket='$ket',recomended='$recomended',kondisi='$kondisi',qty='$qty',kategori='$kategori' ");
			?>
				<script>
					 alert("Buku Berhasil di Jual");
					window.location.href="vendor/home.php?aksi=data_buku";
				</script>
			<?php
		}

		function tampil_buku($id){
			$s=mysql_query("SELECT * from buku where id_vendor='$id' ");
			while ($r=mysql_fetch_array($s)) {
			$hasil[]=$r;
				}return $hasil;
			}
		function edit_buku($id){
			$s=mysql_query("SELECT * from buku where id='$id' ");
			while ($r=mysql_fetch_array($s)) {
			$hasil[]=$r;
				}return $hasil;
			}
		
		function update_edit_buku($id,$id_vendor,$nama_buku,$harga,$gambar,$pengarang_buku,$katalog,$diskon,$ket,$recomended,$kondisi,$qty,$kategori){
			$s=mysql_query("UPDATE buku SET id_vendor='$id_vendor', nama_buku='$nama_buku',harga='$harga',gambar='$gambar',pengarang_buku='$pengarang_buku',katalog='$katalog',diskon='$diskon',ket='$ket',recomended='$recomended',kondisi='$kondisi',qty='$qty',kategori='$kategori' where id='$id' ");
			?>
				<script>
					 alert("Buku Sudah Berhasil di Update :-)");
					window.location.href="vendor/home.php?aksi=data_buku";
				</script>
			<?php
		}

		function hapus_buku($id){
		mysql_query("delete from buku where id='$id'");
		?>
			<script>
					 alert("Data Buku Berhasil kamu Hapus:-)");
					window.location.href="vendor/home.php?aksi=data_buku";
				</script>
		<?php
		}

		function tampil_buku_vendor($id){
			$s=mysql_query("SELECT * from buku where id_vendor='$id' ");
			while ($r=mysql_fetch_array($s)) {
			$hasil[]=$r;
				}return $hasil;
		}
		function tampil_buku_favorit_pembeli($id){
			$s=mysql_query("SELECT * from buku where id_vendor='$id' ORDER BY id DESC LIMIT 8 ");
			while ($r=mysql_fetch_array($s)) {
			$hasil[]=$r;
				}return $hasil;
		}
		function tampil_buku_index(){
			$s=mysql_query("SELECT * from buku ORDER BY id DESC LIMIT 14 ");
			while ($r=mysql_fetch_array($s)) {
				$id=$r["id_vendor"];
				$kat=mysql_query("SELECT * from toko where id_vendor='$id'");
				$kat2=mysql_fetch_array($kat);
				$id_toko=$r["id_vendor"];
				$kat3=mysql_query("SELECT * from toko where id_vendor='$id_toko'");
				$kat4=mysql_fetch_array($kat3);
				?>
				<div class="content">
		            <center><img src="<?php echo $r['gambar'] ?>" style="width: 95%; height: 150px"></center>
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
				<?php
			}
		}
		function tampil_buku_index_murah(){
			$s=mysql_query("SELECT * from buku where harga <=50.000 ");
			while ($r=mysql_fetch_array($s)) {
				$id=$r["id_vendor"];
				$kat=mysql_query("SELECT * from toko where id_vendor='$id'");
				$kat2=mysql_fetch_array($kat);
				$id_toko=$r["id_vendor"];
				$kat3=mysql_query("SELECT * from toko where id_vendor='$id_toko'");
				$kat4=mysql_fetch_array($kat3);
				?>
				<div class="content">
		            <center><img src="<?php echo $r['gambar'] ?>" style="width: 95%; height: 200px"></center>
		            <div class="isi">
		                <h5><?php echo $r['nama_buku']; ?></h5>
		                <h5 style="font-size: 13px; color:green; border-radius: 5px;">Penjual <?php echo $kat2['nama_toko'];?></h5>
		                <p style="text-align: center; font-size: 13px; color: yellow">(<?php echo $kat4['type'];?>) Acunt</p>
		                <h5>Rp.<?php echo $r['harga']; ?></h5>
		            <center>
		                <a href="detail_product.php?id_buku=<?php echo $r['id'] ?>"><input type="submit" value="Lihat Dulu" style="margin: 10px 0 10px 0 ; padding: 10px ; background: orange; outline: 0; border:0; color: #fff; font-size: 13px; width: 100%"></a>
		            </center> 
		            </div>
		        </div>
				<?php
			}
		}
		function tampil_buku_index_rekomendasi(){
				$s=mysql_query("SELECT * from buku where recomended='rekomendasi' ORDER BY id DESC LIMIT 14 ");
			while ($r=mysql_fetch_array($s)) {
				$id=$r["id_vendor"];
				$kat=mysql_query("SELECT * from toko where id_vendor='$id'");
				$kat2=mysql_fetch_array($kat);
				$id_toko=$r["id_vendor"];
				$kat3=mysql_query("SELECT * from toko where id_vendor='$id_toko'");
				$kat4=mysql_fetch_array($kat3);
				?>
				<div class="content">
		            <center><img src="<?php echo $r['gambar'] ?>" style="width: 95%; height: 200px"></center>
		            <div class="isi">
		                <h5><?php echo $r['nama_buku']; ?></h5>
		                <h5 style="font-size: 13px; color:green; border-radius: 5px;">Penjual <?php echo $kat2['nama_toko'];?></h5>
		                <p style="text-align: center; font-size: 13px; color: yellow">(<?php echo $kat4['type'];?>) Acunt</p>
		                <h5>Rp.<?php echo $r['harga']; ?></h5>
		            <center>
		                <a href="detail_product.php?id_buku=<?php echo $r['id'] ?>"><input type="submit" value="Lihat Dulu" style="margin: 10px 0 10px 0 ; padding: 10px ; background: orange; outline: 0; border:0; color: #fff; font-size: 13px; width: 100%"></a>
		            </center> 
		            </div>
		        </div>
				<?php
			}
		}

		function tambah_partner_pengiriman($id_vendor,$nama_jasa,$waktu_lama,$deskripsi){
			$s=mysql_query("INSERT INTO jasa_pengiriman SET id_vendor='$id_vendor',nama_jasa='$nama_jasa',waktu_lama='$waktu_lama',deskripsi='$deskripsi'");
			?>
				<script>
			        alert("partner pengiriman berhasil di tambahkan");
					window.location.href="vendor/home.php?aksi=partner_pengiriman";
				</script>
			<?php
		}

		function lihat_partner_pengiriman($id){
			$s=mysql_query("SELECT * from jasa_pengiriman where id_vendor='$id' ");
			while ($r=mysql_fetch_array($s)) {
			$hasil[]=$r;
			}return $hasil;
		}

		function hapus_partner_pengiriman($id){
			mysql_query("DELETE from jasa_pengiriman where id='$id'") or die(mysql_error());
			?>
				<script>
			        alert("Partner Pengiriman Kamu telah Terhapus");
					window.location.href="vendor/home.php?aksi=partner_pengiriman";
				</script>
			<?php
		}

		function tampil_jasa_pengiriman($id){
			$s=mysql_query("SELECT * from jasa_pengiriman where id_vendor='$id' ");
			while ($r=mysql_fetch_array($s)) {
			$hasil[]=$r;
			}return $hasil;
		}

		function tampil_buku_favorit($id){
			$s=mysql_query("SELECT * from favorit where id_pembeli='$id' ORDER BY id DESC LIMIT 14 ");
			while ($r=mysql_fetch_array($s)) {
			$hasil[]=$r;
				}return $hasil;
		}
		function page_vendor_buku($id){
			$s=mysql_query("SELECT * from toko where id_vendor='$id' ");
			while ($r=mysql_fetch_array($s)) {
			$hasil[]=$r;
				}return $hasil;
		}
		
		function get_one($id_buku){
			$query=mysql_query("select * from buku where id='$id_buku'");
			$aray=mysql_fetch_array($query);
			return $aray;
			}
		function get_blog($id_blog){
			$query=mysql_query("SELECT * from blog where id='$id_blog'");
			$aray=mysql_fetch_array($query);
			return $aray;
			}
		function get_transaksi($id_tabungan){
			$query=mysql_query("select * from tabungan_vendor where id='$id_buku'");
			$aray=mysql_fetch_array($query);
			return $aray;
			}
		function get_toko_vendor($id_vendor){
			$query=mysql_query("select * from toko where id_vendor='$id_vendor'");
			$aray=mysql_fetch_array($query);
			return $aray;
			}
		function get_buku_katalog($katalog){
			$query=mysql_query("select * from buku where katalog='$katalog'");
			$aray=mysql_fetch_array($query);
			return $aray;
			}
		function get_katalog($id_vendor){
			$query=mysql_query("select * from katalog where id_vendor='$id_vendor'");
			$aray=mysql_fetch_array($query);
			return $aray;
			}

		function get_vendor($id_vendor){
			$query=mysql_query("select * from toko where id_vendor='$id_vendor'");
			$aray=mysql_fetch_array($query);
			return $aray;
			}

		function beli($id_pembeli,$id_vendor,$id_buku,$nama_buku,$gambar,$qty,$harga,$kategori,$keterangan,$jasa_pengiriman){
			if (!empty($id_pembeli)) {
			$query=mysql_query("INSERT into produk_temp set id_pembeli='$id_pembeli',id_vendor='$id_vendor',id_buku='$id_buku',nama_buku='$nama_buku',harga='$harga',total_harga='$harga',gambar='$gambar',qty_beli='1',qty_asli='$qty',kategori='$kategori',ket='$keterangan',jasa_pengiriman='$jasa_pengiriman'") or die(mysql_error());
			$qtyy=$qty-1;
			mysql_query("UPDATE buku set qty='$qtyy' where id='$id_buku'");
			header('location:checkout.php');
			}else{
				?>
				<script>
			        alert("Ups Kamu Harus Login Dulu Ya :-)!");
					window.location.href="index.php";
				</script>
				<?php
			}
			
			}
		function produk_temp($id_pembeli){
			$data=mysql_query("select * from produk_temp where id_pembeli='$id_pembeli'");
			while($r=mysql_fetch_array($data)){
				$hasil[]=$r;
				}return $hasil;
			}

		function total_bayar($id_pembeli){
			$query=mysql_query("select sum(total_harga) as total from produk_temp where id_pembeli='$id_pembeli'");
			$fetch=mysql_fetch_array($query);
			$total=$fetch[total];
			return $total;
			}

		function qtytambah($id,$id_produk,$qty,$harga){
			
			$qtyy=$qty+1;
			$qty2=$qtyy-1;
			$harga2=$harga*$qtyy;
			$tambah=mysql_query("update produk_temp set qty_beli='$qtyy',qty_asli='$qty2',total_harga='$harga2' where id='$id'");
			$produk=mysql_query("select * from buku where id='$id_produk'");
			$ganti=mysql_fetch_array($produk);
			$qtyproduk=$ganti['qty']-1;
			mysql_query("update buku set qty='$qtyproduk' where id='$id_produk'");
			header("location:checkout.php");
			}
		function qtykurang($id,$id_produk,$qty,$harga){
			
			$qtyy=$qty-1;
			$qty2=$qtyy+1;
			$harga2=$harga*$qtyy;
			$tambah=mysql_query("update produk_temp set qty_beli='$qtyy',qty_asli='$qty2',total_harga='$harga2' where id='$id'");
			$produk=mysql_query("select * from buku where id='$id_produk'");
			$ganti=mysql_fetch_array($produk);
			$qtyproduk=$ganti['qty']+1;
			mysql_query("update buku set qty='$qtyproduk' where id='$id_produk'");
			header("location:checkout.php");
			}
		function batalkan($id){
			$data=mysql_query("select * from produk_temp where id='$id'");
			$balik=mysql_fetch_array($data);
			$qty=$balik['qty_asli']+$balik['qty_beli'];
			mysql_query("update buku set qty='$qty' where id='".$balik['id_produk']."'");
			mysql_query("delete from produk_temp where id='$id'");
			header("location:checkout.php");
			
			}
		function pilih_orang($id_pembeli){
			$query=mysql_query("select * from pembeli where id_pembeli='$id_pembeli'");
			$aray=mysql_fetch_array($query);
			return $aray['alamat'];
						}
		function pilih_orang_kabupaten($id_pembeli){
			$query=mysql_query("select * from pembeli where id_pembeli='$id_pembeli'");
			$aray=mysql_fetch_array($query);
			return $aray['kabupaten'];
						}
		function pilih_orang_kecamatan($id_pembeli){
			$query=mysql_query("select * from pembeli where id_pembeli='$id_pembeli'");
			$aray=mysql_fetch_array($query);
			return $aray['kecamatan'];
						}
		function pilih_orang_provinsi($id_pembeli){
			$query=mysql_query("select * from pembeli where id_pembeli='$id_pembeli'");
			$aray=mysql_fetch_array($query);
			return $aray['provinsi'];
						}
		function pilih_orang_kode_pos($id_pembeli){
			$query=mysql_query("select * from pembeli where id_pembeli='$id_pembeli'");
			$aray=mysql_fetch_array($query);
			return $aray['kode_pos'];
						}
		function pilih_orang_no_telp($id_pembeli){
			$query=mysql_query("select * from pembeli where id_pembeli='$id_pembeli'");
			$aray=mysql_fetch_array($query);
			return $aray['no_telp'];
						}

		function pilih_orang_jasa_pengiriman($id_pembeli){
			$query=mysql_query("select * from produk_temp where id_pembeli='$id_pembeli'");
			$aray=mysql_fetch_array($query);
			return $aray['jasa_pengiriman'];
						}
		function pilih_orang_vendor($id_pembeli){
			$query=mysql_query("select * from produk_temp where id_pembeli='$id_pembeli'");
			$aray=mysql_fetch_array($query);
			return $aray['id_vendor'];
						}

		function temp_jumlah($id_pembeli){
			$data=mysql_query("select * from produk_temp where id_pembeli='$id_pembeli'");
			$row=mysql_num_rows($data);
			return $row;
			}
		function selesaibelanja($id_pembeli,$id_vendor,$kode_pembelian,$nama,$jumlah_barang,$jumlah_bayar,$tanggal_beli,$alamat,$kabupaten,$kecamatan,$provinsi,$kode_pos,$no_telp,$jasa_pengiriman){
			if($jumlah_bayar==0){ 
			?>
					 <script>
         alert("Keranjang anda masih kosong");
		 window.location.href="index.php";
         </script>
			<?php
			}else{
			$query=mysql_query("INSERT into selesai set id_pembeli='$id_pembeli',id_vendor='$id_vendor',kode_pembelian='$kode_pembelian',nama='$nama',jumlah_barang='$jumlah_barang',jumlah_bayar='$jumlah_bayar',tanggal_beli='$tanggal_beli',alamat='$alamat',kabupaten='$kabupaten',kecamatan='$kecamatan',provinsi='$provinsi',kode_pos='$kode_pos',no_telp='$no_telp',jasa_pengiriman='$jasa_pengiriman',konfir='N'");
			mysql_query("delete from produk_temp where id_pembeli='$id_pembeli'");
			header("location:finish.php?penjual=$id_vendor&nama=$nama&jumlah_barang=$jumlah_barang&tanggal_beli=$tanggal_beli&alamat=$alamat&kabupaten=$kabupaten&kecamatan=$kecamatan&provinsi=$provinsi&kode_pos='$kode_pos'&no_telp='$no_telp'&jasa_pengiriman='$jasa_pengiriman'&bayar=$jumlah_bayar&kode_pembelian=$kode_pembelian");
			
			}
			}
		function selesai($id){
			$query=mysql_query("SELECT * from selesai where id_pembeli='$id' ORDER BY id DESC ") or die(mysql_error());
			while($r=mysql_fetch_array($query)){
				$hasil[]=$r;
				}return $hasil;
			}
		function kirim_pesan($id_pembeli,$id_vendor,$tgl,$isi_pesan){
			if (!empty($id_pembeli)) {
				$s=mysql_query("INSERT INTO pesan set id_pembeli='$id_pembeli',id_vendor='$id_vendor',tgl='$tgl',isi_pesan='$isi_pesan' ") or die(mysql_error());
			?>
				<script type="text/javascript">
					alert("Pesan Kamu Telah Dikirim ");
					window.location.href="index.php";
				</script>
			<?php
			} else{
			?>
				<script>
			        alert("Ups Kamu Tidak Dapat Mengirim Pesan Karena Belum Login Ke Akun akmu !");
					window.location.href="index.php";
				</script>
				<?php
			}
			
		}
		function konfirmasi($id_pembeli,$kode_pembelian,$id_vendor,$nama_bank,$tgl,$pesan,$gambar){
			$s=mysql_query("INSERT INTO konfirmasi set pembeli='$id_pembeli',kode_pembelian='$kode_pembelian',id_vendor='$id_vendor',nama_bank='$nama_bank',tgl='$tgl',pesan='$pesan',gambar='$gambar' ") or die(mysql_error()) ;
			?>
				<script type="text/javascript">
					alert("Anda Telah Berhasil Melakukan Konfirmasi Pembayaran");
					window.location.href="index.php"
				</script>
			<?php
		}
		function bayar_pajak($id_vendor,$id_pembeli,$durasi,$harga_total,$catatan,$gambar){
			$bayar=mysql_query("INSERT INTO bayar_pajak SET id_vendor='$id_vendor',id_pembeli='$id_pembeli',durasi='$durasi',harga_total='$harga_total',catatan='$catatan',gambar='$gambar',konfir='N'");
			?>
			<script type="text/javascript">
					alert("Anda Telah Membayar Pajak Terima Kasih ");
					window.location.href="vendor/home.php?aksi=yes_pembayaran_kamu_berhasil";
				</script>
			<?php
		}

		function tampil_riwayat_bayar_pajak_vendor($id){
			$s=mysql_query("SELECT * from bayar_pajak where id_pembeli='$id' ");
			while ($r=mysql_fetch_array($s)) {
			$hasil[]=$r;
				}return $hasil;
		}

		function conf_bayar_pajak(){
			$query=mysql_query("select * from bayar_pajak");
			while($r=mysql_fetch_array($query)){
				$hasil[]=$r;
				}return $hasil;
			}

		function lihat_pesanan($id){
			$query=mysql_query("SELECT * from selesai where id_vendor='$id' ORDER BY id DESC ");
			while($r=mysql_fetch_array($query)){
				$hasil[]=$r;
				}return $hasil;
			}
			function konfir($id){
				$y="Y";
				mysql_query("update selesai set konfir='$y' where id='$id'");
				header("location:vendor/home.php?aksi=pesanan");
				}
				function konfir_kirim($id){
				$k="K";
				mysql_query("update selesai set konfir='$k' where id='$id'");
				header("location:vendor/home.php?aksi=pesanan");
				}
				function konfir_kirim_kota($id){
				$kk="KK";
				mysql_query("update selesai set konfir='$kk' where id='$id'");
				header("location:vendor/home.php?aksi=pesanan");
				}
				function konfir_terima($id){
				$t="T";
				mysql_query("update selesai set konfir='$t' where id='$id'");
				header("location:vendor/home.php?aksi=pesanan");
				}
				function konfir_selesai($id){
				$s="S";
				mysql_query("update selesai set konfir='$s' where id='$id'");
				header("location:vendor/home.php?aksi=pesanan");
				}
				function konfir_terima_barang($id){
				$tb="TB";
				mysql_query("update selesai set konfir='$tb' where id='$id'");
					mysql_query("DELETE from tabungan_vendor where id_pembeli");
				?>
					<script type="text/javascript">
					alert("Anda Telah Mengkonfirmasi  Terima Kasih ");
					window.location.href="all_trafic_transactions.php";
				</script>
				<?php
				}
		function lihat_pendapatan_vendor($id){
				$query=mysql_query("select * from tabungan_vendor where id_vendor='$id'");
				while($r=mysql_fetch_array($query)){
					$hasil[]=$r;
					}return $hasil;
			}
			function konfir_terima_transfer($id){
				$y="Y";
				mysql_query("UPDATE tabungan_vendor set konfir='$y' where id='$id'");
				header("location:vendor/home.php?aksi=pendapatan");
				}


		function cairkan_dana($id_pembeli,$id_vendor,$jumlah_pendapatan,$rekening,$atas_nama,$tgl_transfer,$catatan){
			$query=mysql_query("INSERT into cair_pendapatan set id_pembeli='$id_pembeli',id_vendor='$id_vendor',jumlah_pendapatan='$jumlah_pendapatan',rekening='$rekening',atas_nama='$atas_nama',tgl_transfer='$tgl_transfer',catatan='$catatan',konfir='N'") or die(mysql_error());
			mysql_query("DELETE from tabungan_vendor where id_pembeli='$id_pembeli'");
			header("location:vendor/home.php?aksi=ok-pendapatan-kamu-sedang-kami-proses&penjual=$id_vendor&jumlah_pendapatan=$nama&jumlah_barang=$jumlah_barang&tanggal_beli=$tanggal_beli&alamat=$alamat&kabupaten=$kabupaten&kecamatan=$kecamatan&provinsi=$provinsi&kode_pos='$kode_pos'&no_telp='$no_telp'&jasa_pengiriman='$jasa_pengiriman'&bayar=$jumlah_bayar&kode_pembelian=$kode_pembelian");
			
			}
		function get_pendapatan($id){
		$data = mysql_query("select * from tabungan_vendor where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function lihat_bukadompetku($id){
				$query=mysql_query("select * from bukadompet where id_pembeli='$id'");
				while($r=mysql_fetch_array($query)){
					$hasil[]=$r;
					}return $hasil;
			}

	}
		

?>