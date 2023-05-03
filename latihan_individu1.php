<?php
    // deklarasi array bilangan
	$bilangan = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

	// looping untuk mengecek setiap bilangan dalam array
	for($i = 0; $i < count($bilangan); $i++){
		if($bilangan[$i] % 2 == 0){ // jika bilangan genap
			echo $bilangan[$i] . " adalah bilangan genap <br>";
		}else{ // jika bilangan ganjil
			echo $bilangan[$i] . " adalah bilangan ganjil <br>";
		}
	}
?>