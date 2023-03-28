<?php
    include 'koneksi.php';
?>

<style>
	table {
		font-family: 'poppins',sans-serif;
	}
</style>

<h3>Detail Tabungan Siswa</h3>
<br>

<?php	
    $data = mysqli_query ($mysqli, " SELECT  * from tb_siswa where id_siswa = $_GET[id]");
    $row = mysqli_fetch_array ($data);
?>

	<table class="table table-borderless">
		<tr>
			<td style="width:10%;">
				Nama 
			</td>
			<td>
				: <?php echo $row['nama']; ?>
			</td>
		</tr>
		<tr>					
			<td>
				Telepon
			</td>
			<td>
				: <?php echo $row['telepon'] ; ?>
			</td>
		</tr>
		<tr>		
			<td>
				Alamat
			</td>
			<td>
				: <?php echo $row['alamat'] ; ?>
			</td>
		</tr>
	</table>
		<br>
	<table class="table table-striped">
		<tr>
			<th>No</th>
			<th>Setoran</th>
			<th>Penarikan</th>
			<th>Saldo</th>
		</tr>
			<?php 
				$no = 1;
				$data = mysqli_query ($mysqli, " SELECT  * from tb_tabungan where id_siswa = $_GET[id] order by id_tabungan asc");
							
                while ($rw = mysqli_fetch_array ($data))	
						{
					?>
					<tr>
						<td>
							<?php echo $no++ ; ?>
						</td>
						<td>
							<?php if ($rw['setoran'] == '') {} else { echo format_rupiah($rw['setoran']) ;} ?>
						</td>
						<td>
							<?php if ($rw['penarikan'] == '') {} else { echo format_rupiah($rw['penarikan']) ;} ?>
						</td>
						<td>
							<?php if ($rw['saldo'] == '') {} else { echo format_rupiah($rw['saldo']) ;} ?>
						</td>
					</tr>
					<?php
						}
					?>
				</table>

				<p>
		<a class="btn btn-primary pull-right" href="tabungan.html">Kembali</a>
	</p>