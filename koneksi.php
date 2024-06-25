<?php 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'whatsappbot';
    $conn = mysqli_connect($host, $username, $password, $db_name);

    if (mysqli_connect_errno()) {
        echo "Koneksi ke database gagal: ". mysqli_connect_error();
    }

?>