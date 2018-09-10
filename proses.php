<?php 
$a = $_GET['a'];
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
?>
