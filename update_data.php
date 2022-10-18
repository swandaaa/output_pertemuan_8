<?php
	$koneksi=mysqli_connect("localhost","root","","db_024");
	$id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Form Update Data</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body style="background-color:#AED9DA;margin:100px;height:500px;">
		<div class="container mt-3">
			<div style="border:2px solid #EDFAFD; padding:20px; filter: drop-shadow(1px 1px 1px #A0C1B8); box-shadow: 2px 2px 4px #3DDAD7;" >
				<center>
					<table>
						<form id="update_data" action="update.php" method="GET">
								<h1>Form Update Data</h1>
								<br><br>
								<input style="display:none;" name="id" type="text" value="<?php echo $id; ?>" />
								<tr>
									<th colspan="2">Nama</th>
									<th colspan="2">Alamat</th>
								</tr>
								<tr>
									<td><input id="name" name="nama" type="text" value="<?php echo $_GET["nama"];?>" style="padding: 12px 20px 12px 30px;width: 200px; height: 35px; box-sizing: border-box;border: 2px solid #9AABB9;border-radius: 4px; background-color: #DDE2E3; font-size: 14px;" disabled /></td>
									<td><button id="update_nama" type="button" class="btn btn-primary btn-sm">Ubah</button></td>
									<td><input id="alamat" name="alamat" type="text" value="<?php echo $_GET["alamat"];?>" style="padding: 12px 20px 12px 30px;width: 200px;height: 35px;box-sizing: border-box;border: 2px solid #9AABB9;border-radius: 4px;background-color: #DDE2E3; font-size: 14px;" disabled /></td>
									<td><button id="update_alamat" type="button" class="btn btn-primary btn-sm">Ubah</button></td>
								</tr>
							</table>
							<br>
							<a id="batal" type="button" class="btn btn-secondary" href="data_diri.php">Batal</a>
							<input id="submit" class="btn btn-success" type="submit" style="background-color:grey;border-color:grey;" onclick "kirim();" disabled />
						</form>

					<script>
					
						const nameUpdate = document.getElementById("update_nama");
						nameUpdate.addEventListener("click", name_update);

						function name_update() {
						document.getElementById("name").removeAttribute("disabled");
						document.getElementById("submit").style.backgroundColor="green";
						document.getElementById("submit").style.borderColor="green";
						document.getElementById("submit").removeAttribute("disabled");
						}

						const addressUpdate = document.getElementById("update_alamat");
						addressUpdate.addEventListener("click", address_update);

						function address_update() {
						document.getElementById("alamat").removeAttribute("disabled");
						document.getElementById("submit").style.backgroundColor="green";
						document.getElementById("submit").style.borderColor="green";
						document.getElementById("submit").removeAttribute("disabled");
						}
						
						function kirim(){
							document.getElementById("name").removeAttribute("disabled");
							document.getElementById("alamat").removeAttribute("disabled");
						}
					
					</script>
					<br>
				</center>
			</div>
		</div>
	</body>
</html>