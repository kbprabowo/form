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

<form action="update.php" method="POST">
    <fieldset>
        <legend>Form edit data mahasiswa</legend>
        <h2>Lengkapi biodata dengan benar</h2>
        <table>
            <tr>
                <td>NIM (Nomor induk mahasiswa)</td>
                <td>:</td>
                <td><input type="number" name="nim" value="<?= $data['nim'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?= $data['nama_mhs'] ?>"></td>
            </tr>
            <?php
            $qry = 'SELECT * FROM jurusan';
            $exec = mysqli_query($con, $qry);
            ?>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><select name="jurusan">
                        <?php while($datajur = mysqli_fetch_assoc($exec)){ ?>
                        <option <?php 
                            if($datajur['id_jurusan']== $data['kode_jurusan']): ?> selected <?php endif; ?> value="<?= $datajur['id_jurusan'] ?>">
                            <?= $datajur['nama_jurusan'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                    <?php
                            if($data['gender'] == 1) {
                        ?>
                    <input type="radio" name="gender" value="1" checked> laki-laki
                    <input type="radio" name="gender" value="2"> Perempuan
                    <?php } else { ?>
                    <input type="radio" name="gender" value="1"> laki-laki
                    <input type="radio" name="gender" value="2" checked> Perempuan
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?= $data['alamat'] ?>"></td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td>:</td>
                <td><input type="text" name="nohp" value="<?= $data['no_hp'] ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email" value="<?= $data['email'] ?>"></td>
            </tr>
            <?php
            $qry = 'SELECT * FROM agama';
            $exec = mysqli_query($con, $qry);
            ?>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><select name="agama">
                        <?php while($dataagama= mysqli_fetch_assoc($exec)){ ?>
                        <option <?php if($dataagama['id_agama']==$data['kode_agama']): ?> selected <?php endif; ?>
                            value="<?= $dataagama['id_agama'] ?>"><?= $dataagama['agama'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <?php
            $qry = 'SELECT * FROM ukm';
            $exec = mysqli_query($con, $qry);
            ?>
            <tr>
                <td>Unit Kegiatan Mahasiswa</td>
                <td>:</td>
                <td><select name="ukm">
                        <?php while($dataukm= mysqli_fetch_assoc($exec)){ ?>
                        <option <?php if($dataukm['id_ukm']==$data['kode_ukm']): ?> selected <?php endif; ?> value="<?= $dataukm['id_ukm'] ?>">
                            <?= $dataukm['nama_ukm'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </fieldset>
</form>
