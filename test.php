<?php include 'koneksi.php'; ?>
<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h3>Using CSS to style an HTML Form</h3>

    <div class="test">
        <form action="proses.php" method="POST">
            <label for="nim">Nomer Induk Mahasiswa</label>
            <input type="number" name="nim" placeholder="NIM anda..">

            <label for="nama">Nama Mahasiswa</label>
            <input type="text" name="nama" placeholder="Nama Anda..">

            <?php
            $qry = 'SELECT * FROM jurusan';
            $exec = mysqli_query($con, $qry);
            ?>
            <label for="jurusan">Jurusan</label>
            <select name="jurusan">
                <?php while($data = mysqli_fetch_assoc($exec)){ ?>
                <option value="<?= $data['id_jurusan'] ?>"><?= $data['nama_jurusan'] ?></option>
                <?php } ?>
            </select>
            <br>
            <br>
            <label for="gender">Jenis Kelamin</label>
            <br>
            <br>
            <input type="radio" name="gender" value="1"> laki-laki
            <input type="radio" name="gender" value="2"> Perempuan
            <br>
            <br>

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" placeholder="Alamat anda..">

            <label for="nohp">NO. HP</label>
            <input type="text" name="nohp" placeholder="Nomor HP Anda..">

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email Anda..">

            <?php
            $qry = 'SELECT * FROM agama';
            $exec = mysqli_query($con, $qry);
            ?>
            <label for="agama">Agama</label>
            <select name="agama">
                <?php while($data = mysqli_fetch_assoc($exec)){ ?>
                <option value="<?= $data['id_agama'] ?>"><?= $data['agama'] ?></option>
                <?php } ?>
            </select>

            <?php
            $qry = 'SELECT * FROM ukm';
            $exec = mysqli_query($con, $qry);
            ?>
            <label for="ukm">UKM</label>
            <select name="ukm">
                <?php while($data = mysqli_fetch_assoc($exec)){ ?>
                <option value="<?= $data['id_ukm'] ?>"><?= $data['nama_ukm'] ?></option>
                <?php } ?>
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>
