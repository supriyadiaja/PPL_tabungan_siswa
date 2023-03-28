<?php

    $host   = 'localhost';
    $user   = 'root';
    $pass   = '';
    $dbname = 'tabungan_siswa';

    // membuat koneksi
    $mysqli = mysqli_connect($host, $user, $pass, $dbname);

    if ( !$mysqli ){
        die ('Connection Failed: ' . mysqli_connect_error());
    }
    
    // echo 'Connected Successfully';
    // $mysqli->close();

?>