<?php
$nim = $_GET['nim'];
include 'koneksi.php';

$qry = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);
$jurusan = "SELECT mahasiswa.*, jurusan.nama_jurusan AS nama_jurusan
FROM mahasiswa
JOIN jurusan ON mahasiswa.kode_jurusan = jurusan.id_jurusan
WHERE mahasiswa.nim = $nim";
$execjurusan = mysqli_query($con, $jurusan);
$datajurusan = mysqli_fetch_assoc($execjurusan);

?>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h3>Edit Data Mahasiswa</h3>

    <div class="test">
        <form action="update.php" method="POST">

            <input type="hidden" name="nim" value="<?= $data['nim'] ?>" readonly>

            <label for="nama">Nama Mahasiswa</label>
            <input type="text" name="nama" value="<?= $data['nama_mhs'] ?>">

            <?php
            $qry = 'SELECT * FROM jurusan';
            $exec = mysqli_query($con, $qry);
            ?>
            <label for="jurusan">Jurusan</label>
            <select name="jurusan">
                <?php while($datajur = mysqli_fetch_assoc($exec)){ ?>
                <option <?php 
                    if($datajur['id_jurusan']== $data['kode_jurusan']): ?> selected <?php endif; ?> value="<?= $datajur['id_jurusan'] ?>">
                    <?= $datajur['nama_jurusan'] ?></option>
                <?php } ?>
            </select>
            <br>
            <br>
            <label for="gender">Jenis Kelamin</label>
            <br>
            <br>
            <?php
            if($data['gender'] == 1) {
        ?>
            <input type="radio" name="gender" value="1" checked> laki-laki
            <input type="radio" name="gender" value="2"> Perempuan
            <?php } else { ?>
            <input type="radio" name="gender" value="1"> laki-laki
            <input type="radio" name="gender" value="2" checked> Perempuan
            <?php } ?>
            <br>
            <br>

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" value="<?= $data['alamat'] ?>">

            <label for="nohp">NO. HP</label>
            <input type="text" name="nohp" value="<?= $data['no_hp'] ?>">

            <label for="email">Email</label>
            <input type="email" name="email" value="<?= $data['email'] ?>">

            <?php
            $qry = 'SELECT * FROM agama';
            $exec = mysqli_query($con, $qry);
            ?>
            <label for="agama">Agama</label>
            <select name="agama">
                <?php while($dataagama= mysqli_fetch_assoc($exec)){ ?>
                <option <?php if($dataagama['id_agama']==$data['kode_agama']): ?> selected <?php endif; ?> value="<?= $dataagama['id_agama'] ?>">
                    <?= $dataagama['agama'] ?></option>
                <?php } ?>
            </select>

            <?php
            $qry = 'SELECT * FROM ukm';
            $exec = mysqli_query($con, $qry);
            ?>
            <label for="ukm">UKM</label>
            <select name="ukm">
                <?php while($dataukm= mysqli_fetch_assoc($exec)){ ?>
                <option <?php if($dataukm['id_ukm']==$data['kode_ukm']): ?> selected <?php endif; ?> value="<?= $dataukm['id_ukm'] ?>">
                    <?= $dataukm['nama_ukm'] ?></option>
                <?php } ?>
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
