<?php

$id = $_POST['id_agama'];
$agama = $_POST['agama'];

include 'koneksi.php';

$qry =
    "UPDATE agama SET
        agama = '" .
    $agama .
    "'
    WHERE id_agama = " .
    $id .
    "
        ";

$exec = mysqli_query($con, $qry);

if ($exec) {
    echo "<script>
        alert('Data berhasil di update');
        window.location = 'administrasi.php';
    </script>";
} else {
    echo 'Data gagal di simpan';
}
