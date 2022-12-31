<?php 

# Menyisipkan file koneksi ke Database
include('config.php');

# Ambil data dari Database
$result = mysqli_query($mysql, 'SELECT * FROM negara');
$result2 = mysqli_query($mysql, 'SELECT * FROM negari');

# Mengubah data ke dalam Array
while ($negara = mysqli_fetch_assoc($result)) { $data_negara[] = $negara; }
while ($negari = mysqli_fetch_assoc($result2)) { $data_negari[] = $negari; }

# Fungsi mengubah status Waktu ketemu
function beda_waktu($waktu_1, $waktu_2){
	
	# Mengubah string ke waktu
	$waktu_1 = strtotime($waktu_1);
	$waktu_2 = strtotime($waktu_2);

	# Satuan menit
	$selisih = abs($waktu_1 - $waktu_2) / 60;

	if ($selisih <= 10) {
		return "<b style='color:red'>(0:0)</b>";
	}
	else{
		return "(2:2)";
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index Perguruan Baru</title>
</head>
<body>

<table cellspacing="0" border="1" width="100%" style="text-align:center">
	<tr>
		<th rowspan="2" colspan="2">Murid dan Pilihan</th>
		<?php for($i = 0; $i < count($data_negari); $i++) { ?>
			<th colspan="2"><?= $data_negari[$i]["nama"] ?></th>
		<?php } ?>
	</tr>
	<tr>
		<?php for($i = 0; $i < count($data_negari); $i++) { ?>
			
			<!-- Jika pilihannya Keris -->
			<?php if($data_negari[$i]["pilihan_1"] == "keris") { ?>
				<th style="background:green;">Keris<br><?= $data_negari[$i]["waktu"] ?></th>
			<?php } else { ?>
				<th>Keris<br><?= $data_negari[$i]["waktu"] ?></th>
			<?php } ?>

			<!-- Jika pilihannya Tongkat -->
			<?php if ($data_negari[$i]["pilihan_1"] == "tongkat") { ?>
				<th style="background:yellow;">Tongkat</th>
			<?php } else { ?>
				<th>Tongkat</th>
			<?php } ?>
		<?php } ?>
	</tr>
	<?php for($i = 0; $i < count($data_negara); $i++) { ?>
		<tr>
			<th rowspan="2"><?= $data_negara[$i]["nama"] ?></th>
			<!-- Keris -->
			<!-- Jika pilihannya Keris -->
			<?php if ($data_negara[$i]["pilihan_1"] == "keris") { ?>
				<th style="background:green;">Keris <br><?= $data_negara[$i]["waktu"] ?></th>
				<?php for($j = 0; $j < count($data_negari); $j++) { ?>
					<td><?= beda_waktu($data_negara[$i]["waktu"],$data_negari[$j]["waktu"]) ?></td>
					<td>(0:1)</td>
				<?php } ?>
			<!-- Jika pilihannya bukan keris -->
			<?php } else { ?>
				<th>Keris <br><?= $data_negara[$i]["waktu"] ?></th>
				<?php for($j = 0; $j < count($data_negari); $j++) { ?>
					<td><?= beda_waktu($data_negara[$i]["waktu"],$data_negari[$j]["waktu"]) ?></td>
					<td>(0:1)</td>
				<?php } ?>
			<?php } ?>

		</tr>
		<tr>
			<!-- Jika pilihannya Tongkat -->
			<?php if($data_negara[$i]["pilihan_1"] == "tongkat") { ?>
				<th style="background:yellow;">Tongkat</th>
				<?php for($j = 0; $j < count($data_negari); $j++) { ?>
					<td>(1:0)</td>
					<td>(1:1)</td>
				<?php } ?>
			<!-- Jika pilihannya bukan tongkat -->
			<?php } else { ?>
				<th>Tongkat</th>
				<?php for($j = 0; $j < count($data_negari); $j++) { ?>
					<td>(1:0)</td>
					<td>(1:1)</td>
				<?php } ?>
			<?php } ?>
		</tr>
	<?php } ?>

</table>

<br>

<a href="kosongkan_data_negara.php" onclick="return confirm('Yakin dikosongkan Data?')">Kosongkan Data Negara</a>

<!-- <hr> -->

<?php 
/* Pohon Faktor (Belum Selesai)

echo "<pre>";

for ($i=0; $i < count($data_negara); $i++) { 
	echo "<div style='border:1px solid black; padding:10px'>";
	
	echo "<b>".$data_negara[$i]["nama"]."</b>";

	if ($data_negara[$i]["pilihan_1"] == "keris") {
		echo "<ul>";
			echo "<li><u>". $data_negara[$i]["pilihan_1"] ."</u>";
			echo "</li>";
			echo "<li>tongkat</li>";
		echo "</ul>";
	}
	else{
		echo "<ul>";
			echo "<li>keris</li>";
			echo "<li><u>". $data_negara[$i]["pilihan_1"] ."</u></li>";
		echo "</ul>";
	}

	echo "</div>";
}

echo "</pre>";
*/

 ?>





<!-- <hr> -->
<?php 
echo "<pre>";
// print_r($data_negara);
// print_r($data_negari);
echo "</pre>";
 ?>


</body>
</html>