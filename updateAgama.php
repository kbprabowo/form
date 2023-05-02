<?php include 'koneksi.php';
$id = $_GET['id_agama'];
include 'koneksi.php';

$qry = "SELECT * FROM agama WHERE id_agama = '$id'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);
?>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h3>Edit Data Agama</h3>

    <div class="test">
        <form action="editAgama.php" method="POST">

            <label for="id_agama">ID Agama</label>
            <input type="number" name="id_agama" value="<?= $data['id_agama'] ?>" readonly>
            <br>
            <label for="agama">Nama Agama</label>
            <input type="text" name="agama" value="<?= $data['agama'] ?>">

            <input type="submit" value="simpan">


        </form>
</body>
