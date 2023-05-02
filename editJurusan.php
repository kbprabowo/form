<?php

$id = $_POST['id_jurusan'];
$jurusan = $_POST['jurusan'];

include 'koneksi.php';

$qry =
    "UPDATE jurusan SET
        nama_jurusan = '" .
    $jurusan .
    "'
    WHERE id_jurusan = " .
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
