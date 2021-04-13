<!doctype html>
<html lang="en">
<head>
	<title>Tambah Kontrak Matakuliah</title>
</head>

<body>
	<h1>Tambah Kontrak Matakuliah</h1>
	<a href="kontrak_mk.php">Kembali</a>
	<br><br>
	<form action="process.php" method="post">
		<label>Id Matakuliah</label>
		<br>
		<input type="text" name="id_matakuliah">
		<br>
		<label>Id Mahasiswa</label>
		<br>
		<input type="text" name="id_mahasiswa"><br>
		<br><br>
		<button type="submit" name="submit_simpan_absen">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html> 