<?php

// pengkondisian
// jika clik menu siswa

// error_reporting(0);

if ($_GET['module']=='siswa')
{
	include "siswa/index.php";
}

else if ($_GET['module']=='form_siswa')
{
	include "siswa/form_tambah.php";
}
else if ($_GET['module']=='input_siswa'){
	include "siswa/input.php";
}

else if ($_GET['module']=='edit_siswa'){
	include "siswa/form_edit.php";
}

else if ($_GET['module']=='update_siswa'){
	include "siswa/update.php";
}

else if ($_GET['module']=='hapus_siswa'){
	include "siswa/hapus.php";
}

// jika clik menu tabungan

else if ($_GET['module']=='tabungan'){
	include "tabungan/tabungan.php";
}

else if ($_GET['module']=='penarikan'){
	include "tabungan/penarikan.php";
}

else if ($_GET['module']=='input_penarikan'){
	include "tabungan/input_penarikan.php";
}

else if ($_GET['module']=='setoran'){
	include "tabungan/setoran.php";
}

else if ($_GET['module']=='input_setoran'){
	include "tabungan/input_setoran.php";
}

else if ($_GET['module']=='detail'){
	include "tabungan/detail.php";
}

?>