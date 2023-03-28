<?php
include 'koneksi.php';


session_start();
$query = "DELETE FROM tb_siswa WHERE id_siswa ='$_GET[id]'";

mysqli_query($mysqli, $query)
or die ("Gagal Perintah SQL".'mysql_error'());

$_SESSION['pesan'] = 'Hapus Data Berhasil...';

header('location:siswa.html');

?>

