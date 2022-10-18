<?php
	$koneksi=mysqli_connect("localhost","root","","db_024");
	$name=$_POST["nama"];
	$alamat=$_POST["alamat"];
	$sql="INSERT INTO tbl_wandaaa VALUES(Null,'$name','$alamat')";
	$hasil=mysqli_query($koneksi,$sql);
	if ($hasil){
		header("location:data_diri.php");
	}
	else{
		echo "Insert data gagal";
	}
?>