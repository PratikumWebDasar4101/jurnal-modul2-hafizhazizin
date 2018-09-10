<?php 

$a = $_GET['a'];
$genap =array();
$ganjil =array();

	function rekursif($z,$x){
	 	if ($z > 0) {
	 		if ($x > 0) {
	 			echo "* ";
	 			$x--;
	 			rekursif($z,$x);
	 		}	
	 		else{
	 			echo "<br>";
	 			$z--;
	 			rekursif($z,$z);
	 		}
	 	}
	 }
	rekursif ($a, $a);
//==================================================
	echo "<br>";
	for ($i=0; $i <$a ; $i++) { 
		if ($i % 2 == 0) {
			array_push($genap, $i);
		}
		else{
			array_push($ganjil, $i);
		}
	}

	echo "genap :";
	for ($i=0; $i< count($genap) ; $i++) { 
		echo $genap[$i];

	}
	echo "<br>";
	echo "ganjil :";
	for ($i=0; $i< count($ganjil) ; $i++) { 
		echo $ganjil[$i];
	}
	echo "<br>";
	echo" Jumlah Deret Genap  :".count($genap);
	echo "<br>";
	echo" Jumlah Deret Ganjil :".count($ganjil);
 ?>
