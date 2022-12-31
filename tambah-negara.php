<?php include "config.php" ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<h1>Tambah Data Negara</h1>

<form action="" method="post">
	<label>Nama</label><br>
	<input type="text" name="nama">
	<br><br>

	<label>Pilihan 1</label><br>
	<select name="pilihan_1">
		<option value="keris">Keris</option>
		<option value="tongkat">Tongkat</option>
	</select>
	<br><br>

	<label>Waktu</label><br>
	<input type="time" name="waktu">
	<br><br>

	<input type="submit" name="submit">
</form>

<br>

<?php 

if (isset($_POST['submit'])) {
	$nama 	= $_POST['nama'];
	$pilihan_1 	= $_POST['pilihan_1'];
	$waktu 		= $_POST['waktu'];

	$query_simpan = "INSERT INTO negara VALUES (NULL, '$nama','$pilihan_1','$waktu')";

	$result = mysqli_query($mysql,$query_simpan);

	if ($result) {
		echo "Data berhasil disimpan";
	}
	else{
		echo "Error: " . mysqli_error($mysql);
	}
}

 ?>

</body>
</html>