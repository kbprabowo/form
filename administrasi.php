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

    <h2>Data Administrasi</h2>
    <a href="formCreateJurusan.php" class="buttonCreate">Create Jurusan</a>
    <a href="formCreateAgama.php" class="buttonCreate">Create Agama</a>
    <a href="formCreateUKM.php" class="buttonCreate">Create UKM</a>

    <br>
    <br>


    <div class="row">
        <div class="column">
            <h3>Tabel Jurusan</h3>
            <table>
                <tr>
                    <th>ID Jurusan</th>
                    <th>Nama Jurusan</th>
                    <th>Aksi</th>
                </tr>

                <?php 
            $qry = "SELECT * FROM jurusan";
            $exec = mysqli_query($con, $qry);
            while($data = mysqli_fetch_assoc($exec)){
        ?>
                <tr>
                    <td><?= $data['id_jurusan'] ?></td>
                    <td><?= $data['nama_jurusan'] ?></td>
                    <td>
                        <a href="updateJurusan.php?id_jurusan=<?= $data['id_jurusan'] ?>"class="buttonEdit">Edit</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <br>

        <div class="column">
            <h3>Tabel Agama</h3>
            <table>
                <tr>
                    <th>ID Agama</th>
                    <th>Nama Agama</th>
                    <th>Aksi</th>
                </tr>
                <?php 
            $qry = "SELECT * FROM agama";
            $exec = mysqli_query($con, $qry);
            while($data = mysqli_fetch_assoc($exec)){
        ?>
                <tr>
                    <td><?= $data['id_agama'] ?></td>
                    <td><?= $data['agama'] ?></td>
                    <td>
                        <a href="updateAgama.php?id_agama=<?= $data['id_agama'] ?>"class="buttonEdit">Edit</a>

                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <br>

        <div class="column">
            <h3>Tabel UKM</h3>
            <table>
                <tr>
                    <th>ID UKM</th>
                    <th>Nama UKM</th>
                    <th>Aksi</th>
                </tr>
                <?php 
            $qry = "SELECT * FROM ukm";
            $exec = mysqli_query($con, $qry);
            while($data = mysqli_fetch_assoc($exec)){
        ?>
                <tr>
                    <td><?= $data['id_ukm'] ?></td>
                    <td><?= $data['nama_ukm'] ?></td>
                    <td>
                        <a href="updateUKM.php?id_ukm=<?= $data['id_ukm'] ?>"class="buttonEdit">Edit</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>
