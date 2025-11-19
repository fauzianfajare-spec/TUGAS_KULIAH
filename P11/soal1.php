<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Saldo Bank</title>
</head>
<body>

<h2>Hitung Saldo Akhir</h2>

<form method="POST">
    Saldo Awal: <input type="number" name="saldo" required><br><br>
    Lama Menabung (bulan): <input type="number" name="bulan" required><br><br>
    <button type="submit">Hitung</button>
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $saldo = $_POST["saldo"];
    $bulan = $_POST["bulan"];
    $biaya_admin = 9000;

    echo "<h3>Proses Perhitungan:</h3>";

    for ($i = 1; $i <= $bulan; $i++) {

        // Tentukan bunga
        if ($saldo < 1100000) {
            $bunga = 0.03 * $saldo;
        } else {
            $bunga = 0.04 * $saldo;
        }

        // Hitung saldo bulan ini
        $saldo = $saldo + $bunga - $biaya_admin;

        echo "Bulan $i : Saldo = " . number_format($saldo, 0, ',', '.') . "<br>";
    }

    echo "<hr><h3>Saldo akhir setelah $bulan bulan adalah: Rp " . number_format($saldo, 0, ',', '.') . "</h3>";
}
?>

</body>
</html>
