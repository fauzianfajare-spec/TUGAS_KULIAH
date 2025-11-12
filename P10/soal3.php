<html>
<head>
    <title>Hitung Gaji Berdasarkan Golongan</title>
</head>
<body>
<h1>Hitung Gaji Mingguan (Berdasarkan Golongan)</h1>
<form action="soal3_proses.php" method="post">
    Jumlah Jam Kerja: <input type="number" name="jam" required><br><br>
    Pilih Golongan:
    <select name="golongan" required>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select>
    <br><br>
    <input type="submit" value="Hitung">
</form>
</body>
</html>
