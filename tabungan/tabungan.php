<?php
include 'koneksi.php';
?>

<style>
	table {
		font-family: 'poppins', sans-serif;
	}

	p {
		font-family: 'poppins', sans-serif;
	}
</style>

<div style="height:55px;">
	<?php 
			if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
				echo '<div id="pesan" class="alert alert-success" style="display:none;">'.$_SESSION['pesan'].'</div>';
		    }
		$_SESSION['pesan'] = '';
	?>
</div>
	
<p>
	<Strong>Data Tabungan Siswa</strong>
	<a class="btn btn-success pull-right" style="margin-bottom:2%;" href="setoran.html" >Setoran</a>
	<a class="btn btn-danger pull-right" style="margin-bottom:2%;margin-right:2%;" href="penarikan.html" >Penarikan</a>
</p>

<table class="table table-striped">
	<tr>
		<th>No</th>
    	<th>Nama</th>
		<th>Alamat</th>
		<th>Saldo</th>
		<th>Opsi</th>
	</tr>
		<?php
				$no = 1;
				$data = mysqli_query ($mysqli, " SELECT tb_tabungan.id_tabungan,
				tb_tabungan.id_siswa,
				tb_tabungan.setoran,
				tb_tabungan.penarikan,
				tb_tabungan.saldo,
				sum(tb_tabungan.penarikan) as jumlah_penarikan,
				sum(tb_tabungan.setoran) as jumlah_setoran,
				
				tb_siswa.id_siswa,
				tb_siswa.nama,
				tb_siswa.jenis_kelamin,
				tb_siswa.alamat,
				tb_siswa.telepon
					  
				from 
				tb_siswa, tb_tabungan
				where
				tb_tabungan.id_siswa = tb_siswa.id_siswa
				group by tb_siswa.nama DESC");
						
                while ($row = mysqli_fetch_array ($data))
						{
			?>
				<tr>
				    <td>
						<?php echo $no++; ?>
					</td>
					<td>
						<?php echo $row['nama']; ?>
					</td>
					<td>
						<?php echo $row['alamat']; ?>
					</td>
					<td>
						<?php echo format_rupiah($row['jumlah_setoran'] - $row['jumlah_penarikan']); ?>
					</td>
					<td>
						<a href="detail-<?php echo $row['id_siswa'] ; ?>.html" class="btn btn-primary btn-xs">Detail</a>
					</td>
				</tr>
				<?php
					}
				?>
			</table>