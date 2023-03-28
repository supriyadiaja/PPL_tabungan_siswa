<?php 
include 'koneksi.php';
?>


<p>
<h3>Menambahkan Data Siswa</h3>
</p>
<br>
<form role="form" method="post" action="input_siswa.html">
	<div class="form-group">
		<label>Nama</label>
		<input class="form-control" type="text" name="nama" autofocus>
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Laki-laki" checked>Laki-laki
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
			</label>
		</div>
	</div>
	<div class="form-group">
		<label>Telepon</label>
		<input class="form-control" type="number" name="telepon">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" type="text" class="form-control" rows="3"></textarea>
	</div>
	<button type="submit" class="btn btn-primary pull-right">Simpan</button> 
	<a href="siswa.html" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
</form>