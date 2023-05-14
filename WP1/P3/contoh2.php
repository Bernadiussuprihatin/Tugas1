<?php 
define("JUDUL", " Latihan php <br>");
$no = "1";
$title = "Contoh Sricpt php";
$nim ="12220141" ;
$nama = "Bernad";
$kelas = "12.2B.24";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan php</title>
</head>
<body>
<?php 
echo JUDUL ;
echo "
	no : $no<br>
	nim: $nim<br>
	nama: $nama<br>
	kelas: $kelas
	";
 ?>
</body>
</html>