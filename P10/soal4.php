<html>
<head>
    <title>Jumlah Hari Dalam Bulan</title>
</head>
<body>
<h1>Jumlah Hari Dalam Bulan</h1>
<?php
$bulan = date("n"); // ambil bulan saat ini
$tahun = date("Y");

switch ($bulan) {
    case 1: case 3: case 5: case 7: case 8: case 10: case 12:
        $hari = 31;
        break;
    case 4: case 6: case 9: case 11:
        $hari = 30;
        break;
    case 2:
        // cek kabisat
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0))
            $hari = 29;
        else
            $hari = 28;
        break;
    default:
        $hari = 0;
}

echo "<p>Bulan sekarang: $bulan</p>";
echo "<p>Tahun: $tahun</p>";
echo "<p>Jumlah hari: $hari hari</p>";
?>
</body>
</html>
