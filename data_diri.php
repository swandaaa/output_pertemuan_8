<?php
	$koneksi=mysqli_connect("localhost","root","","db_024");
	$sql = "SELECT * FROM tbl_wandaaa";
	$hasil = mysqli_query($koneksi,$sql);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Data Diri</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	  <link  rel="stylesheet" type="text/css" href="style.css" />
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body style="background-color:#AED9DA;">
		<div class="container mt-3">
			<div style="border:2px solid #EDFAFD;padding:20px;filter: drop-shadow(1px 1px 1px #A0C1B8);box-shadow: 2px 2px 4px #3DDAD7;">
			<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>Isnaini Septyana Wanda</td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td>210411100024</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>3F 3D</td>
			</tr>
			</table>
			<br>
				<h2>Data Diri</h2>
				<p>Berikut adalah data dari Database:</p>   
				<button id="tambah" type="button" class="btn btn-primary btn-sm">Tambah Data</button>
				
				<form id="tambah_data" action="tambah_data.php" method="POST" style="display: none">
					<br>
					<input id="nama" name="nama" type="text" placeholder="nama" style="padding: 12px 20px 12px 30px;width: 200px;height: 35px;box-sizing: border-box;border: 2px solid #9AABB9;border-radius: 4px;background-color: #DDE2E3; font-size: 14px;" required />
					<input id="alamat" name="alamat" type="text" placeholder="alamat" style="padding: 12px 20px 12px 30px;width: 200px;height: 35px;box-sizing: border-box;border: 2px solid #9AABB9;border-radius: 4px;background-color: #DDE2E3; font-size: 14px;"  required />
					<button id="batal" type="button" class="btn btn-secondary" style="display:none;">Batal</button>
					<input onclick="return cek();" type="submit" class="btn btn-success" />
					
					
					<script>
						const add_button = document.getElementById("tambah");
						add_button.addEventListener("click", add);

						function add() {
						document.getElementById("tambah_data").style.display="block";
						document.getElementById("batal").style.display="inline";
						}
						const cancel_button = document.getElementById("batal");
						cancel_button.addEventListener("click", cancel);

						function cancel() {
						document.getElementById("tambah_data").style.display="none";
						}
						
					</script>
					<br>
					
				</form>
				
				<table class="table table-striped">
					<thead>
					  <tr>
						<th>Id</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th></th>
					  </tr>
					</thead>
					<tbody>
						<?php
							while ($baris = mysqli_fetch_assoc($hasil)){
								echo "<tr><td>".$baris['id_wandaaa']."</td>".
								"<td>".$baris['nama_wandaaa']."</td>".
								"<td>".$baris["alamat_wandaaa"]."</td>".
								"<td> <a class='btn btn-warning btn-sm' onclick='return update()' href='update_data.php?id=$baris[id_wandaaa]&nama=$baris[nama_wandaaa]&alamat=$baris[alamat_wandaaa]'>Edit</a>"." ".
								"<a class='btn btn-danger btn-sm' onclick='return hapus()' href='delete.php?id=$baris[id_wandaaa]'>Delete</a>".
								"</td>"."</tr>";
							}
						?>
						<script>
							function hapus(){
								choice=confirm("Apakah Anda yakin akan menghapus data ini?");
								if (choice){
									return true;
								}
								else{
									return false;
								}
							}
							function update(){
								choice=confirm("Apakah Anda yakin ingin mengubah data ini?");
								if (choice){
									return true;
								}
								else{
									return false;
								}
							}
						</script>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>