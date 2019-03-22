<!DOCTYPE html>
<html>

<body>

<h4>tampilan format json tabel makanan</h4>
<?php
include'koneksi.php';
 
$query = mysqli_query($koneksi, 'select * from makanan');
 
if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id'] = $row["id_makanan"];
		$data['nama makanan'] = $row["nama_makanan"];
		$data['harga'] = $row["harga"];
		$data['id id_penjual'] = $row["id_penjual"];
		array_push($responsistem["data"], $data);
 
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
<br>
<h4>tampilan format json tabel minuman</h4>


<?php
include'koneksi.php';
 
$query = mysqli_query($koneksi, 'select * from minuman');
 
if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id'] = $row["id_minuman"];
		$data['nama minuman'] = $row["nama_minuman"];
		$data['harga'] = $row["harga"];
		$data['id id_penjual'] = $row["id_penjual"];
		array_push($responsistem["data"], $data);
 
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
<br>



<h4>tampilan format json tabel penjual</h4>
<?php
include'koneksi.php';
 
$query = mysqli_query($koneksi, 'select * from penjual');
 
if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id'] = $row["id_penjual"];
		$data['nama warung'] = $row["nama_warung"];
		$data['nama penjual'] = $row["nama_penjual"];
		array_push($responsistem["data"], $data);
 
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>

<h4>tampilan format json tabel user</h4>
<?php
include'koneksi.php';
 
$query = mysqli_query($koneksi, 'select * from user');
 
if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id'] = $row["id_user"];
		$data['nama '] = $row["nama"];
		$data['jabatan'] = $row["jabatan"];
		$data['nomor induk'] = $row["nomor_induk"];
		$data['nomor hp'] = $row["nomor_hp"];
		$data['email'] = $row["email"];
		$data['password'] = $row["password"];
		array_push($responsistem["data"], $data);
 
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>
 
	<table border="1">
		<tr>
			
			<th>ID</th>
			<th>Nama makanan</th>
			<th>harga</th>
			<th>ID_Penjual</th>
			
		</tr>
		<h3>Tampilan Tabel Makanan (normal)</h3>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from makanan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_makanan']; ?></td>
				<td><?php echo $d['nama_makanan']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['id_penjual']; ?></td>
				
			</tr>
			<?php 
		}
		?>
		</table>


		<br>
			<table border="1">
		<tr>
			
			<th>ID</th>
			<th>Nama minuman</th>
			<th>harga</th>
			<th>ID Penjual</th>
			
		</tr>
				<h3>Tabel minuman (normal)</h3>
				<?php 
		include 'koneksi.php';
		
		$data = mysqli_query($koneksi,"select * from minuman");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
			
				<td><?php echo $d['id_minuman']; ?></td>
				<td><?php echo $d['nama_minuman']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['id_penjual']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>

	
		<h3>Tabel Penjual (normal)</h3>
				<br>
			<table border="1">
		<tr>
			
			<th>ID</th>
			<th>Nama Warung</th>
			<th>Nama Penjual</th>
			
		</tr>
				<?php 
		include 'koneksi.php';
	
		$data = mysqli_query($koneksi,"select * from penjual");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				
				<td><?php echo $d['id_penjual']; ?></td>
				<td><?php echo $d['nama_warung']; ?></td>
				<td><?php echo $d['nama_penjual']; ?></td>
				
			</tr>
			<?php 
		}
		?>
	</table>

	<br>
			<table border="1">
		<tr>
			
			<th>ID</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Nomor Induk</th>
			<th>Nomor HP</th>
			<th>email</th>
			<th>password</th>
			
		</tr>
				<h3>Tabel user (normal)</h3>
				<?php 
		include 'koneksi.php';
		
		$data = mysqli_query($koneksi,"select * from user");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
			
				<td><?php echo $d['id_user']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jabatan']; ?></td>
				<td><?php echo $d['nomor_induk']; ?></td>
				<td><?php echo $d['nomor_hp']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['password']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
	




</body>
</html>