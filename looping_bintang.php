<?php
	// Loop dari 9 hingga 1, menurun
	for($i = 9; $i >= 1; $i--){
		// Loop sebanyak nilai variabel $i
		for($j = 1; $j <= $i; $j++){
            // Cetak karakter bintang
			echo "*"; 
		}
        // Pindah ke baris baru setelah selesai loop dalam
		echo "<br>"; 
	}
?>