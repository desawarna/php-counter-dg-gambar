<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi PHP Counter</title>
</head>
<body>
<?php
$nilaicounter=("counter.txt");
$pengunjung=file($nilaicounter);
$pengunjung[0]++;
$bukafile=fopen($nilaicounter,"w");
fputs($bukafile,"$pengunjung[0]");
fclose($bukafile);
$angka = $pengunjung[0];
$panjang = strlen($angka);
echo "<h1>Anda adalah pengunjung yang ke :</h1>";
for ($i=0;$i<$panjang;$i++)
{ 
	# code...
	$pisah = substr($angka,$i,1).".jpg";
	echo '<img src ="angka/'.$pisah.'"';
}
?>
</body>
</html>