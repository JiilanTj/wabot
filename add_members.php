<?php
require_once 'koneksi.php';

if (isset($_POST['submit']) && isset($_FILES['participants_file'])) {
    $group_name = $_POST['group_name'];
    
    $file = $_FILES['participants_file']['tmp_name'];
    $file_contents = file_get_contents($file);
    $json_data = json_decode($file_contents, true);

    if (json_last_error() === JSON_ERROR_NONE) {
        $participants = $json_data['phone'];

        $data = array(
            "groupName" => $group_name,
            "participants" => $participants
        );

        $url = 'http://localhost:3000/add-members';
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
            echo "<script>alert('Gagal menambah anggota ke grup'); window.location.href='form_add_members.php'</script>";
        } else {
            $response = json_decode($result);
            if ($response && isset($response->status) && $response->status === 'success') {
                echo "<script>alert('Berhasil menambah anggota ke grup'); window.location.href='form_add_members.php'</script>";
            } else {
                $error_message = isset($response->error) ? $response->error : 'Gagal menambah anggota ke grup';
                echo "<script>alert('$error_message'); window.location.href='form_add_members.php'</script>";
            }
        }
    } else {
        echo "<script>alert('File JSON tidak valid'); window.location.href='form_add_members.php'</script>";
    }
} else {
    header('location: form_add_members.php');
}
?>
