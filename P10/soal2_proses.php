<html>
<head><title>Hasil Gaji</title></head>
<body>
<?php
$jam = $_POST['jam'];
$upah_per_jam = 2000;
$upah_lembur = 3000;

if ($jam <= 48) {
    $total = $jam * $upah_per_jam;
} else {
    $lembur = $jam - 48;
    $total = (48 * $upah_per_jam) + ($lembur * $upah_lembur);
}

echo "<p>Jam kerja: $jam jam</p>";
echo "<p>Total upah: Rp " . number_format($total, 0, ',', '.') . "</p>";
?>
</body>
</html>
