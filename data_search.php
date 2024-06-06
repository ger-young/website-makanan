<?php
	mysql_connect("localhost","root","");
	mysql_select_db("Bitch");
	$q = strtolower($_GET['term']);
	$query = "SELECT * from buku where nama_buku like '%$q%' order by id asc";
	$query = mysql_query($query);
	$num = mysql_num_rows($query);
   	if($num > 0){
		while ($row = mysql_fetch_array($query)){
			$row_set[] = htmlentities(stripslashes($row[2]));
		}
		echo json_encode($row_set);
	}
?>