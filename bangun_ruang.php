<?php
    echo "<h3>3 Macam Volume Bangun Ruang</h3>";

    //menghitung volume kubus
    function volume_kubus($sisi){
        $volume = $sisi * $sisi * $sisi;
        return $volume;
    }
    //contoh penggunaan fungsi untuk menghitung volume kubus dengan sisi 6
    $sisi = 6;
    echo "<h4>Menghitung Volume Kubus</h4>";
    echo "Volume = s x s x s" . "<br>";
    echo "Volume = $sisi x $sisi x $sisi" . "<br>";
    echo "Volume = " . volume_kubus($sisi) . "<br>";

    //menghitung volume balok
    function volume_balok($panjang, $lebar, $tinggi){
        $volume = $panjang * $lebar * $tinggi;
        return $volume;
    }
    //contoh penggunaan fungsi untuk menghitung volume balok dengan panjang 7, lebar 5, dan tinggi 5
    $panjang = 7;
    $lebar = 5;
    $tinggi = 5;
    echo "<h4>Menghitung Volume Balok</h4>";
    echo "Volume = p x l x t" . "<br>";
    echo "Volume = $panjang x $lebar x $tinggi" . "<br>";
    echo "Volume = " . volume_balok($panjang, $lebar, $tinggi) . "<br>";

    //menghitung volume tabung
    function volume_tabung($jari_jari, $tinggi){
        $volume = 3.14 * $jari_jari * $jari_jari * $tinggi;
        return $volume;
    }  
    //contoh penggunaan fungsi untuk menghitung volume tabung
    $jari_jari = 10;
    $tinggi = 15;
    echo "<h4>Menghitung Volume Tabung</h4>";
    echo "Volume = 3.14 x r x r x t" . "<br>";
    echo "Volume = 3.14 x $jari_jari x $jari_jari x $tinggi" . "<br>";
    echo "Volume = " . volume_tabung($jari_jari, $tinggi) . "<br>";
?>