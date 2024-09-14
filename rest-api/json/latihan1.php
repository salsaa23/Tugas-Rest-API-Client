<?php

// $mahasiswa = [
//     "nama" => "Asriani S. Maha",
//     "NIK"  => "225314081",
//     "email"=> "asrymaha03@gmail.com"
// ];


$dbh = new PDO('mysql:host=localhost;dbname=platform', 'root', '');

$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>