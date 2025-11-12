<?php
$username = $_POST['username'];
$password = $_POST['pass'];

if ((($username == "joko") && ($password == "passjoko")) || 
    (($username == "amir") && ($password == "passamir")) ||
    (($username == "Fauzian") && ($password == "2411102441023"))) {
    echo "Login sukses";
}
else {
    echo "Login gagal";
}
?>
