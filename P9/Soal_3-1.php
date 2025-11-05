<html>
<head>
    <title>Form Pendaftaran Mahasiswa</title>
</head>
<body>

<h2>Form Pendaftaran Mahasiswa Baru</h2>

<form method="post" action="Soal_3-2.php">

Nama Lengkap: <input type="text" name="nama"><br><br>

Tempat Lahir: <input type="text" name="tempat"><br><br>

Tanggal Lahir: 
<select name="tgl">
    <?php for($i=1; $i<=31; $i++) echo "<option>$i</option>"; ?>
</select>

<select name="bln">
    <?php for($i=1; $i<=12; $i++) echo "<option>$i</option>"; ?>
</select>

<select name="thn">
    <?php for($i=1980; $i<=2010; $i++) echo "<option>$i</option>"; ?>
</select>

<br><br>

Alamat Rumah: <br>
<textarea name="alamat" rows="4" cols="30"></textarea><br><br>

Jenis Kelamin:
<input type="radio" name="jk" value="Pria"> Pria
<input type="radio" name="jk" value="Wanita"> Wanita
<br><br>

Asal Sekolah: <input type="text" name="sekolah"><br><br>

Nilai UN: <input type="text" name="un"><br><br>

<input type="submit" value="Kirim">
<input type="reset" value="Reset">

</form>

</body>
</html>
