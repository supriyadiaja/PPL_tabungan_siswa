<?php 
session_start();
	include 'koneksi.php';
	include 'fungsi.php';
?>

<html>
<head>
<title>Aplikasi Tabungan Siswa</title>
<link rel="stylesheet" href="style/bootstrap.css" />
<link rel="stylesheet" href="style/dataTables.bootstrap4.min.css" />

	<style>
		tr {
			cursor:default;
		}

		body {
			font-family: sans-serif;
		}

		body h2 {
			font-weight: bold;
		}
	</style>
</head>

<body>
	<div class="container" style="margin-top:3%">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center">Aplikasi Tabungan Siswa</h2>
				<br>
				<?php
					include "menu.php";
				?>
				
				<?php
					include "content.php";
				?>
			</div>
		</div>
	</div>
	<br>
		<script type="text/javascript" src="style/jquery.js"></script>
		<script type="text/javascript" src="style/bootstrap.js"></script>	
		<script src="style/jquery.dataTables.min.js"></script>	
		<script src="style/dataTables.bootstrap4.min.js"></script>	
		<script type="text/javascript" src="style/rupiah.js"></script>
        <script>
			$('#example').DataTable();
            $(document).ready(function(){setTimeout(function(){$("#pesan").fadeIn('slow');}, 500);});
            setTimeout(function(){$("#pesan").fadeOut('slow');}, 3000);
        </script>
		<script type="text/javascript">
		$(document).ready(function(){
			
			$(document).on('click', '#siswa', function (e) {
				document.getElementById("id_siswa").value = $(this).attr('data-id_siswa');
				document.getElementById("nama").value = $(this).attr('data-nama');
				$('#modal').modal('hide');
			});	
			
		});
		</script>	
	</body>
</html>