<?php
	$koneksi=mysqli_connect("localhost","root","","db_024");
	$id=$_GET['id'];
	$hasil = mysqli_query($koneksi,"DELETE FROM tbl_wandaaa WHERE id_wandaaa=$id");
	if ($hasil){
		header("location:data_diri.php");
	}
	else{
		echo "Delete data gagal";
	}
?>