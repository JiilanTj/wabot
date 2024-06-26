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

        $url = 'http://localhost:3000/create-group';
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
            echo "<script>alert('Gagal membuat grup'); window.location.href='form_create_group.php'</script>";
        } else {
            echo "<script>alert('Berhasil membuat grup'); window.location.href='form_create_group.php'</script>";
        }
    } else {
        echo "<script>alert('File JSON tidak valid'); window.location.href='form_create_group.php'</script>";
    }
} else {
    header('location: form_create_group.php');
}
?>
