<?php
// session_start();
include "koneksi.php";

$id_siswa = $_POST['id_siswa'];
$setoran = reset_rupiah($_POST['setoran']);

$data = mysqli_query ($mysqli, " SELECT  penarikan, setoran, sum(penarikan) as jumlah_penarikan, sum(setoran) as jumlah_setoran from tb_tabungan where id_siswa = $id_siswa");

$row = mysqli_fetch_array ($data);
$saldo = $row['jumlah_setoran'] - $row['jumlah_penarikan'] + $setoran;

$query = "INSERT INTO tb_tabungan SET id_siswa = '$id_siswa', setoran = '$setoran', saldo = '$saldo'";

mysqli_query($mysqli, $query)
or die ("Gagal Perintah SQL".'mysql_error'());
$_SESSION['pesan'] = 'Data berhasil di simpan...';

header('location: tabungan.html');

?>

