<?php
# Memanggil koneksi database
include("config.php");

# Jalankan Query Kosongkan Data
$result = mysqli_query($mysql, "DELETE FROM negara");

# Redirect ke index
header("Location:index.php");