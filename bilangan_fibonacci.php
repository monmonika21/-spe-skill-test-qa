<!DOCTYPE html>
<html>
<head>
	<title>Menentukan angka fibonaci</title>
</head>
<body>
	<h2>Deret Fibonacci Dinamis Dengan PHP</h2>
<hr>
<form action="" method="get">
Nilai Ke-n <input type="number" name="n" placeholder="Max 100" required>
Cek fibonacci <input type="number" name="m" required>
<input type="submit" value="Proses">
</form>
<hr>

<?php

$deret[1] = 0;
$deret[2] = 1;

$n = isset($_GET['n'])?$_GET['n']:'1';
$m = isset($_GET['m'])?$_GET['m']:0;

if ($n >= 3 and $n <= 100)
{
 $hasil = "$deret[1], $deret[2]";
 for($i=3;$i<=$n;$i++)
 {
  $x=$i-1;
  $y=$i-2;

  $deret[$i] = $deret[$x] + $deret[$y];
  $hasil .= ", $deret[$i]";

 }
 echo "<b>Deret Bilangan Fibonacci 1 - $n</b>";
 echo "<div style='color:blue'>$hasil</div>";

 $cek_angka = explode(",", $hasil);

 if(in_array($m, $cek_angka)) {
 	echo "Hasil : TRUE";
 } else {
	echo "Hasil : FALSE";
 }
} else {
 echo "<b style='color:red'>Maaf nilai n harus diantara 3 s/d 100<b>";
}


?>

</body>
</html>


