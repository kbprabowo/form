<?php

$agama = $_POST['agama'];

include 'koneksi.php';

$qry = "INSERT INTO agama (agama) VALUES (
    '$agama'
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
