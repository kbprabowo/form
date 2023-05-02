<?php include 'koneksi.php'; ?>
<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h3>Masukan UKM</h3>

    <div class="test">
        <form action="prosesUKM.php" method="POST">
            <label for="ukm">UKM</label>
            <input type="text" name="ukm" placeholder="Masukan UKM">



            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>
