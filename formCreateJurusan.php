<?php include 'koneksi.php'; ?>
<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h3>Masukan Jurusan Baru</h3>

    <div class="test">
        <form action="prosesJurusan.php" method="POST">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" placeholder="Masukan Jurusan">



            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>
