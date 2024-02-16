<!-- application/views/hitung_luas_balok.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hitung Luas Balok</title>
</head>
<body>

<h2>Hitung Luas Balok</h2>

<form method="post" action="<?php echo site_url('BalokController/hitung_luas'); ?>">
    <label>Panjang:</label>
    <input type="text" name="panjang" required><br>

    <label>Lebar:</label>
    <input type="text" name="lebar" required><br>

    <label>Tinggi:</label>
    <input type="text" name="tinggi" required><br>

    <button type="submit">Hitung</button>
</form>

<?php if(isset($hasil)): ?>
    <h3>Hasil Perhitungan:</h3>
    <p>Panjang: <?php echo $hasil['panjang']; ?></p>
    <p>Lebar: <?php echo $hasil['lebar']; ?></p>
    <p>Tinggi: <?php echo $hasil['tinggi']; ?></p>
    <p>Luas: <?php echo $hasil['luas']; ?></p>
<?php endif; ?>

</body>
</html>
