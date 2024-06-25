<?php
require_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $group_id = $_POST['group_id'];
    $participant = $_POST['participant'];

    $data = array(
        "groupId" => $group_id,
        "participant" => $participant
    );

    $url = 'http://localhost:3000/add-member';
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data),
        ),
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) {
        echo "<script>alert('Gagal menambah anggota ke grup'); window.location.href='form_add_member.php'</script>";
    } else {
        echo "<script>alert('Berhasil menambah anggota ke grup'); window.location.href='form_add_member.php'</script>";
    }
} else {
    header('location: form_add_member.php');
}
?>
