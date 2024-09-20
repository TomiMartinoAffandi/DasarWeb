<?php
    $angka1 = 10;
    $angka2 = 20;
    $hasil = $angka1 + $angka2;
    echo "hasil penjumlahan $angka1 dan $angka2 adalah $hasil.<br>";

    $benar = true;
    $salah = false;
    echo "variable benar: $benar, variable salah: $salah.<br>"; 

    //mendefinisikan konstanta untuk tiap nilai tetap
    define("NAMA_SITUS"," WebsiteKu.com ");
    define("TAHUN_PENDIRIAN",2023);

    echo "Selemat datang di" . NAMA_SITUS . "situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".<br>";
?>
