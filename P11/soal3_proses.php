<html>
<head><title>Hasil Gaji Golongan</title></head>
<body>
<?php
$jam = $_POST['jam'];
$gol = $_POST['golongan'];

switch ($gol) {
    case "A": $upah = 4000; break;
    case "B": $upah = 5000; break;
    case "C": $upah = 6000; break;
    case "D": $upah = 7500; break;
    default: $upah = 0;
}

$upah_lembur = 3000;

if ($jam <= 48)
    $total = $jam * $upah;
else {
    $lembur = $jam - 48;
    $total = (48 * $upah) + ($lembur * $upah_lembur);
}

echo "<p>Golongan: $gol</p>";
echo "<p>Jam kerja: $jam jam</p>";
echo "<p>Total gaji: Rp " . number_format($total, 0, ',', '.') . "</p>";
?>
</body>
</html>
