<?php

$jurusan = $_POST['jurusan'];

include 'koneksi.php';

$qry = "INSERT INTO jurusan (nama_jurusan) VALUES (
    '$jurusan'
)";

$exec = mysqli_query($con, $qry);

if ($exec) {
    echo "<script>
        alert('Data berhasil di simpan');
        window.location = 'administrasi.php';
    </script>";
} else {
    echo 'Data gagal di simpan';
}
