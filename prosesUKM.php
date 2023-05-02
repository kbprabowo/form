<?php

$ukm = $_POST['ukm'];

include 'koneksi.php';

$qry = "INSERT INTO ukm (nama_ukm) VALUES (
    '$ukm'
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
