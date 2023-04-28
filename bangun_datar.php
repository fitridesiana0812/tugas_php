<?php
    echo "<h3>5 Macam Luas Bangun Datar</h3>";

    //menghitung luas persegi
    function luas_persegi($sisi){
        $luas = $sisi * $sisi;
        return $luas;
    }
    //contoh penggunaan fungsi untuk menghitung luas dengan sisi 5
    $sisi = 5;
    echo "<h4>Menghitung Luas Persegi</h4>";
    echo "Luas = s x s" . "<br>";
    echo "Luas = $sisi x $sisi " . "<br>";
    echo "Luas = " . luas_persegi($sisi) . "<br>";

    //menghitung luas persegi panjang
    function luas_persegi_panjang($panjang, $lebar){
        $luas = $panjang * $lebar;
        return $luas;
    }
    //contoh penggunaan fungsi untuk menghitung luas persegi panjang dengan panjang 8 dan lebar 6
    $panjang = 8;
    $lebar = 6;
    echo "<h4>Menghitung Luas Persegi Panjang</h4>";
    echo "Luas = p x l" . "<br>";
    echo "Luas = $panjang x $lebar " . "<br>";
    echo "Luas = " . luas_persegi_panjang($panjang, $lebar) . "<br>";
    
    //menghitung luas segitiga
    function luas_segitiga($alas, $tinggi){
        $luas = 0.5 * $alas * $tinggi;
        return $luas;
    }
    //contoh penggunaan fungsi untuk menghitung luas segitiga dengan alas 10 dan tinggi 4
    $alas = 10;
    $tinggi = 4;
    echo "<h4>Menghitung Luas Segitiga</h4>";
    echo "Luas = 1/2 x a x t" . "<br>";
    echo "Luas = 1/2 x $alas x $tinggi " . "<br>";
    echo "Luas = " . luas_segitiga($alas, $tinggi) . "<br>";

    //menghitung luas trapesium
    function luas_trapesium($sisi_a, $sisi_b, $tinggi){
        $luas = 0.5 * ($sisi_a + $sisi_b) * $tinggi;
        return $luas;
    }
    //contoh penggunaan fungsi untuk menghitung luas trapesium dengan sisi atas 6, sisi bawah 8, dan tinggi 5
    $sisi_a = 6;
    $sisi_b = 8;
    $tinggi = 5;
    echo "<h4>Menghitung Luas Trapesium</h4>";
    echo "Luas = 1/2 x (a + b) x t" . "<br>";
    echo "Luas = 1/2 x ($sisi_a + $sisi_b) x $tinggi " . "<br>";
    echo "Luas = " . luas_trapesium($sisi_a, $sisi_b, $tinggi) . "<br>";

    //menghitung luas lingkaran
    function luas_lingkaran($jari_jari){
        $luas = 3.14 * $jari_jari * $jari_jari;
        return $luas;
    }
    //contoh penggunaan fungsi untuk menghitung luas lingkaran dengan jari-jari 7
    $jari_jari = 7;
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    echo "Luas = 3.14 x r x r" . "<br>";
    echo "Luas = 3.14 x $jari_jari x $jari_jari " . "<br>";
    echo "Luas = " . luas_lingkaran($jari_jari) . "<br>";   
?>