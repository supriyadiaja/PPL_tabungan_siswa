<?php 
include 'koneksi.php';
?>

<style>
	form, h3 {
		font-family: 'poppins', sans-serif;
	}
</style>

<p>
<h3>Edit Data Siswa</h3>
</p>
<br>
<?php
	$no = 1;
	$data = mysqli_query ($mysqli, " SELECT * from tb_siswa where id_siswa = $_GET[id]");
	$row = mysqli_fetch_array ($data);
	
?>
<form role="form" method="post" action="update_siswa.html">
	<div class="form-group">
		<label>Nama</label>
		<input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ; ?>">
		<input class="form-control" name="nama" value="<?php echo $row['nama'] ; ?>">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Laki-laki"  <?php if($row['jenis_kelamin']=='Laki-laki'){ ; ?> checked <?php } ?>>Laki-laki
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Perempuan"  <?php if($row['jenis_kelamin']=='Perempuan'){ ; ?> checked <?php } ?>>Perempuan
			</label>
		</div>
	</div>
	<div class="form-group">
		<label>Telepon</label>
		<input class="form-control" name="telepon"  value="<?php echo $row['telepon'] ; ?>">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control" rows="3"><?php echo $row['alamat'] ; ?></textarea>
	</div>
	<button type="submit" class="btn btn-primary pull-right">Simpan</button> 
	<a href="siswa.html" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
</form>