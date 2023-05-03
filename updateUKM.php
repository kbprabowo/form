<?php include 'koneksi.php';
$id = $_GET['id_ukm'];
include 'koneksi.php';

$qry = "SELECT * FROM ukm WHERE id_ukm = '$id'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);
?>


<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h3>Edit Data UKM</h3>

    <div class="test">
        <form action="editUKM.php" method="POST">


            <input type="hidden" name="id_ukm" value="<?= $data['id_ukm'] ?>" readonly>

            <label for="nama_ukm">Nama UKM</label>
            <input type="text" name="nama_ukm" value="<?= $data['nama_ukm'] ?>">

            <input type="submit" value="simpan">


        </form>
</body>
