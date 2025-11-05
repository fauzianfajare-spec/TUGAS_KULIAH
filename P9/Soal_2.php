<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pecahan Uang</title>
</head>
<body>

<?php
$uang = $_POST['uang'];

$pec100 = intdiv($uang, 100000);
$uang %= 100000;

$pec50 = intdiv($uang, 50000);
$uang %= 50000;

$pec20 = intdiv($uang, 20000);
$uang %= 20000;

$pec5 = intdiv($uang, 5000);
$uang %= 5000;

$pec100r = intdiv($uang, 100);
$uang %= 100;

$pec50r = intdiv($uang, 50);
$uang %= 50;

echo "<h3>Hasil Pecahan:</h3>";
echo "100.000 : $pec100<br>";
echo "50.000 : $pec50<br>";
echo "20.000 : $pec20<br>";
echo "5.000 : $pec5<br>";
echo "100 : $pec100r<br>";
echo "50 : $pec50r<br>";
?>

</body>
</html>
