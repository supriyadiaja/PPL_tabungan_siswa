<?php 
	
session_start();
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

$query = "INSERT INTO tb_siswa SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', telepon = '$telepon'";

mysqli_query($mysqli, $query)
or die ("Gagal Perintah SQL".'mysql_error'());
$_SESSION['pesan'] = 'Data berhasil di simpan...';

header('location:siswa.html');

?>

