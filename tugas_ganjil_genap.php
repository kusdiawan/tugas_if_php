<?php
$bilangan = "64";
$angka = "3";

echo "Tugas If <br>";
if (($bilangan % 2) == 0){
	echo $bilangan . " adalah bilangan genap <br>";
}else{
	echo $bilangan . " adalah bilangan ganjil <br>";
}


if (($angka % 2) == 1){
	echo $angka . " adalah angka ganjil <br>";
}else{
	echo $angka . " adalah angka genap <br>";
}

echo "<br>";
for ($i=1; $i<10;$i++){
	if ($i%2==1)
	{
	echo $i . " adalah nilai ganjil <br>";	
	}else{
	echo $i . " adalah nilai genap <br>";		
}
}


?>