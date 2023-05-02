<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="topnav">
        <a href="latihan.php">Mahasiswa</a>
        <a href="administrasi.php">Administrasi</a>
    </div>
    <h2>Data Mahasiswa</h2>
    <a href="formCreateMahasiswa.php" class="buttonCreate">Create Mahasiswa</a>
    <br>
    <br>
    <table class="tabel">
        <tr>
            <th>NIM</th>
            <th>Nama Mhs</th>
            <th>Jurusan</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Agama</th>
            <th>UKM</th>
            <th>Act</th>
        </tr>
        <?php 
            $qry = "SELECT mahasiswa.*, jurusan.nama_jurusan AS nama_jurusan, agama.agama AS nama_agama, ukm.nama_ukm AS nama_ukm FROM mahasiswa JOIN jurusan ON mahasiswa.kode_jurusan = jurusan.id_jurusan
JOIN agama ON mahasiswa.kode_agama = agama.id_agama
JOIN ukm ON mahasiswa.kode_ukm = ukm.id_ukm";
            $exec = mysqli_query($con, $qry);
            while($data = mysqli_fetch_assoc($exec)){
        ?>
        <tr>
            <td><?= $data['nim'] ?></td>
            <td><?= $data['nama_mhs'] ?></td>
            <td><?= $data['nama_jurusan'] ?></td>
            <td><?= $data['gender'] == 1 ? 'Laki-Laki' : 'Perempuan' ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['no_hp'] ?></td>
            <td><?= $data['email'] ?></td>
            <td><?= $data['nama_agama'] ?></td>
            <td><?= $data['nama_ukm'] ?></td>
            <td>
                <a href="edit.php?nim=<?= $data['nim'] ?>" class="buttonEdit">Edit</a>
                <a href="delete.php?nim=<?= $data['nim'] ?>" class="buttonDelete">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>
