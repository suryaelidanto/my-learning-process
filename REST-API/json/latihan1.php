<?php 

// $siswa = [

// ["nama" => "Cintara Surya Elidanto",
// "umur" => 16,
// "NIS"  => "16155",
// "hobi" => ["mancing", "ngoding", "ngegame"]],[
// "nama" => "Surya Elidanto",
// "umur" => 16,
// "NIS"  => "16155",
// "hobi" => ["mancing", "ngoding", "ngegame"]]
// ];

// $data = json_encode($siswa);

// echo $data;

$dbh = new PDO('mysql:host=localhost;dbname=siswa', 'root', '');
$db = $dbh->prepare("SELECT * FROM daftar_siswa");
$db->execute();
$siswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($siswa);

echo $data;



 ?>