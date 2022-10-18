<?php
	$koneksi=mysqli_connect("localhost","root","","db_024");
	$id=$_GET['id'];
	$name=$_GET['nama'];
	$alamat=$_GET['alamat'];
	if ($name==""){
		$name=Null;
	}
	if ($alamat==""){
		$alamat=Null;
	}
	
	#cek data yang akan di update
	if (isset($name)){
		$hasil1=mysqli_query($koneksi,"UPDATE tbl_wandaaa SET nama_wandaaa='$name' WHERE id_wandaaa=$id");
	}
	if (isset($alamat)){
		$hasil2=mysqli_query($koneksi,"UPDATE tbl_wandaaa SET alamat_wandaaa='$alamat' WHERE id_wandaaa=$id");
	}
	if ($hasil1 or $hasil2){
		header("location:data_diri.php");
	}
	else{
		echo "Update data gagal";
	}
?>