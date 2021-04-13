<?php

include 'model.php';

if (isset($_POST['submit_simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $model = new Model();
    $model->insert($nim, $nama, $uts, $uas, $tugas);
    header('location:index.php');
}
if (isset($_POST['submit_edit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $model = new Model();
    $model->update($nim, $nama, $uts, $tugas,$uas);
    header('location:index.php');
}
if (isset($_GET['nim'])) {
    $id = $_GET['nim'];
    $model = new Model();
    $model->delete($id);
    header('location:index.php');
}

// tabel mahasiswa
include 'model.php';
if (isset($_POST['submit_simpan_mahasiswa'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $semester = $_POST['semester'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $email = $_POST['email'];
    $model = new Model();
    $model->insert_mahasiswa($id, $nama, $semester, $alamat, $no_tlp, $email);
    header('location:mahasiswa.php');
}
if (isset($_POST['submit_edit_mahasiswa'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $semester = $_POST['semester'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $email = $_POST['email'];
    $model = new Model();
    $model->update_mahasiswa($id, $nama, $semester, $alamat, $no_tlp, $email);
    header('location:mahasiswa.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_mahasiswa($id);
    header('location:mahasiswa.php');
}

   // tabel absen
include 'model.php';
if (isset($_POST['submit_simpan_absensi'])) {
    $id = $_POST['id'];
    $mhs_id = $_POST['id_mahasiswa'];
    $matakuliah_id = $_POST['id_matakuliah'];
    $waktu_absen = $_POST['waktu_absen'];
    $status = $_POST['status'];
    $model = new Model();
    $model->insert_absensi($id, $id_mahasiswa, $id_matakuliah, $waktu_absen, $status);
    header('location:absensi.php');
}
if (isset($_POST['submit_edit_absensi'])) {
    $id = $_POST['id'];
    $mhs_id = $_POST['id_mahasiswa'];
    $matakuliah_id = $_POST['id_matakuliah'];
    $waktu_absen = $_POST['waktu_absen'];
    $status = $_POST['status'];
    $model = new Model();
    $model->update_absensi($id, $id_mahasiswa, $id_matakuliah, $waktu_absen, $status);
    header('location:absensi.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_absensi($id);
    header('location:absensi.php');
}

 // tabel matakuliah
include 'model.php';
if (isset($_POST['submit_simpan_matakuliah'])) {
   $id = $_POST['id'];
   $matakuliah_id = $_POST['nama_matakuliah'];
   $model = new Model();
   $model->insert_matakuliah($id, $nama_matakuliah);
   header('location:matakuliah.php');
}
if (isset($_POST['submit_edit_matakuliah'])) {
   $id = $_POST['id'];
   $matakuliah_id = $_POST['nama_matakuliah'];
   $model = new Model();
   $model->update_matakuliah($id, $nama_matakuliah);
   header('location:matakuliah.php');
}
if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $model = new Model();
   $model->delete_matakuliah($id);
   header('location:matakuliah.php');
}

 // tabel matakuliah
include 'model.php';
if (isset($_POST['submit_simpan_kontrak_mk'])) {
    $id = $_POST['id_matakuliah'];
    $matakuliah_id = $_POST['id_mahasiswa'];
   $model = new Model();
    $model->insert_matakuliah($id_matakuliah, $id_mahasiswa);
    header('location:kontrak_mk.php');
}
if (isset($_POST['submit_edit_kontrak_mk'])) {
    $id = $_POST['id_matakuliah'];
    $matakuliah_id = $_POST['id_mahasiswa'];
    $model = new Model();
    $model->update_matakuliah($id_matakuliah, $id_mahasiswa);
    header('location:kontrak_mk.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_kontrak_mk($id);
    header('location:kontrak_mk.php');
}

?>
