<?php

$id = $_POST['id_ukm'];
$ukm = $_POST['nama_ukm'];

include 'koneksi.php';

$qry =
    "UPDATE ukm SET
        nama_ukm = '" .
    $ukm .
    "'
    WHERE id_ukm = " .
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
