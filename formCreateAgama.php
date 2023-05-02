<?php include 'koneksi.php'; ?>
<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h3>Masukan Agama</h3>

    <div class="test">
        <form action="prosesAgama.php" method="POST">
            <label for="agama">Agama</label>
            <input type="text" name="agama" placeholder="Masukan Agama">



            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>
