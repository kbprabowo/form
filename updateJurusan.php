<?php include 'koneksi.php';
$id = $_GET['id_jurusan'];
include 'koneksi.php';

$qry = "SELECT * FROM jurusan WHERE id_jurusan = '$id'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);
?>


<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h3>Edit Data Jurusan</h3>

    <div class="test">
        <form action="editJurusan.php" method="POST">

            <input type="hidden" name="id_jurusan" value="<?= $data['id_jurusan'] ?>" readonly>

            <label for="nama_jurusan">Nama Jurusan</label>
            <input type="text" name="jurusan" value="<?= $data['nama_jurusan'] ?>">

            <input type="submit" value="simpan">


        </form>
</body>
