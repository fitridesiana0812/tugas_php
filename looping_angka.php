<?php
	// Loop sebanyak 9 kali, dimulai dari angka 0
	for($i = 0; $i <= 8; $i++){
		// Loop sebanyak nilai variabel $i + 1
		for($j = 0; $j <= $i; $j++){
            // Cetak nilai variabel $j
			echo $j; 
		}
        // Pindah ke baris baru setelah selesai loop dalam
		echo "<br>"; 
	}
?>