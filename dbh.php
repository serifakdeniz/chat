<?php
$servername = "localhost";
$veritabani = "chat";
$kullanici = "root";
$sifre = "1122334455";


$conn = new mysqli($servername, $kullanici, $sifre, $veritabani);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



?>