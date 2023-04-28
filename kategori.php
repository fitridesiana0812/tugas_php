<?php
    // Membuat variabel dengan tipe data string yang berisi nama
    $nama = "Fitri Desiana Afani";
    // Membuat variabel dengan tipe data float yang berisi tinggi badan dalam satuan meter
    $tinggi_badan = 158;
    // Membuat variabel dengan tipe data float yang berisi berat badan dalam satuan kilogram
    $berat_badan = 50;

    // Menghitung nilai BMI dengan rumus berat badan dibagi tinggi badan kuadrat
    $bmi = $berat_badan / pow($tinggi_badan/100, 2);
    // Membulatkan nilai BMI menjadi dua angka di belakang koma
    $bmi = round($bmi, 2);

    // Menampilkan pesan berisi nama dan nilai BMI serta kategori berdasarkan nilai BMI
    echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk ";
    //jika nilai kurang dari 18.5, kategori "Kurus"
    if ($bmi < 18.5) {
        echo "Kurus.";
    //jika nilai kurang dari 25, kategori "Normal"
    } elseif ($bmi < 25) {
        echo "Normal.";
    //jika nilai kurang dari 30, kategori "Gemuk"
    } elseif ($bmi < 30) {
        echo "Gemuk.";
    //jika nilai lebih dari sama dengan 30, kategori "Obesitas"
    } else {
        echo "Obesitas.";
    }
?>