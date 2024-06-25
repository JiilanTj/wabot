// create_group.php
<?php
require_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $group_name = $_POST['group_name'];
    $participants = explode(',', $_POST['participants']);

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
    header('location: form_create_group.php');
}
?>
