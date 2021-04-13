<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_kontrak_mk($id);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Kontrak Matakuliah</title>
</head>

<body>
	<h1>Edit Matakuliah</h1>
	<a href="kontrak_mk.php">Kembali</a>
	<br><br>
	<form action="process.php" method="post">
		<label>Id Matakuliah</label>
		<br>
		<input type="text" name="id_matakuliah" value="<?php echo $data->id_matakuliah ?>">
		<br>
		<label>Id Mahasiswa</label>
		<br>
		<input type="text" name="id_mahasiswa" value="<?php echo $data->id_mahasiswa ?>">
		<br><br>
		<button type="submit" name="submit_edit_absen">Submit</button>
	</form>
</body>
</html>