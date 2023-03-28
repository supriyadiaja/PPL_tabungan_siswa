<?php 
    // sambungan koneksi database
    include 'koneksi.php';

        // mengambil data dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($mysqli, "SELECT * from tb_user where username = '$username' AND password = '$password'");

    // query untuk memeriksa data tabel user
    $result = mysqli_num_rows($query);

    // // kondisi 
    if ( $result > 0 ){
        header('location: siswa.html');
    }else {
        header('location: login.php?pesan=error');
        // or die ("Gagal Perintah SQL".'mysql_error'());
    }

?>