<html>
<head>
    <title>Hasil Pendaftaran</title>
</head>
<body>

<?php
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tgl'];
$bln = $_POST['bln'];
$thn = $_POST['thn'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$sekolah = $_POST['sekolah'];
$uan = $_POST['uan'];

echo "Terimakasih $nama sudah mengisi form pendaftaran.<br><br>";

echo "Nama Lengkap : $nama<br>";
echo "Tempat Lahir : $tempat<br>";
echo "Tanggal Lahir : $tgl-$bln-$thn<br>";
echo "Alamat Rumah : $alamat<br>";
echo "Jenis Kelamin : $jk<br>";
echo "Asal Sekolah : $sekolah<br>";
echo "Nilai UAN : $uan<br>";
?>

</body>
</html>
