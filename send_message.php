<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    $message = $_POST['message'];

    $q = $conn->query("Insert into message value ('', '$number', '$message', '0', now())");
    if ($q){
        echo "<script>alert('Pesan berhasil di kirim'); window.location.href='form_input.php'</script>";
    }else{
        echo "<script>alert('Pesan gagal di kirim'); window.location.href='form_input.php'</script>";
    }
}else{
    header('location: form_input.php');
}
?>