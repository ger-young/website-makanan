<?php 
	class data2{

		function __construct(){
				mysql_connect("localhost","root","");
				mysql_select_db("marketplace");
			}

		function favoritkan_buku($id_pembeli,$id_buku){
			if (!empty($id_pembeli)) {
			$s=mysql_query("INSERT INTO favorit SET id_pembeli='$id_pembeli',id_buku='$id_buku'");
			$data=mysql_query("SELECT * from buku");
			?>
				<script>
			        alert("Buku Sudah Dimasukan Kedalam daftar Favorit Kamu !");
					window.location.href="index.php";
				</script>
			<?php
			} else{
				?>
				<script>
			        alert("Ups Kamu Harus Login Dulu Ya :-)!");
					window.location.href="index.php";
				</script>
				<?php
			}
			
		}

		
	}

 ?>

