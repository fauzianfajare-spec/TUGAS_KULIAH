<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>

<?php
$saldo = $_POST['saldo'];
$bunga = $_POST['bunga'];
$bulan = $_POST['bulan'];

for ($i = 1; $i <= $bulan; $i++) {
    $saldo = $saldo + ($saldo * ($bunga / 100));
}

echo "<h2>Saldo akhir setelah $bulan bulan adalah Rp. " . number_format($saldo, 0, ',', '.') . "</h2>";
?>

</body>
</html>
