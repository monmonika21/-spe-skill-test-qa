<!DOCTYPE html>
<html>
<head>
	<title>Bilangan Prima</title>
</head>
<body>
	<hr>
	<h4>Menampilkan bilangan Prima 1-100 </h4><hr><br>
	<?php 
	$n = 100;
	for($i=1;$i<=$n;$i++){
		$a = 0;
		for($j=1;$j<=$i;$j++){
			if($i % $j == 0){
				$a++;
			}
		}
		if($a == 2){
			echo $i.'<br>';
		}
	}
	 ?>
</body>
</html>