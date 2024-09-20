<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "{$a} + {$b} =  $hasilTambah <br>";
echo "{$a} - {$b} =  $hasilKurang <br>";
echo "{$a} x {$b} =  $hasilKali <br>";
echo "{$a} : {$b} =  $hasilBagi <br>";
echo "{$a} modulus {$b} =  $sisaBagi <br>";
echo "{$a} pangkat {$b} =  $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "{$a} hasil sama / tidak dengan {$b} = $hasilSama <br>";
echo "{$a} hasil sama / tidak dengan {$b} = $hasilTidakSama <br>";
echo "{$a} hasil lebih kecil / lebih besar {$b} = $hasilLebihKecil<br>";
echo "{$a} hasil lebih kecil / lebih besar {$b} = $hasilLebihBesar<br>";
echo "{$a} hasil lebih kecal sama dengan / lebih besar sama dengan {$b} = $hasilLebihKecilSama<br>";
echo "{$a} hasil lebih kecil sama dengan / lebih besar sama dengan {$b} = $hasilLebihBesarSama<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "true/false: $hasilAnd<br>";
echo "true/false: $hasilOr<br>";
echo "true/false: $hasilNotA<br>";
echo "true/false: $hasilNotB<br>";

$a += $b;
echo "Hasil dari \$a += \$b: " . $a . "<br>";
$a -= $b;
echo "Hasil dari \$a -= \$b: " . $a . "<br>";
$a *= $b;
echo "Hasil dari \$a *= \$b: " . $a . "<br>";
$a /= $b;
echo "Hasil dari \$a /= \$b: " . $a . "<br>";
$a %= $b;
echo "Hasil dari \$a %= \$b: " . $a . "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "{$a} identik/tidak identik dengan {$b}(jika identik return 1) = $hasilIdentik <br>";
echo "{$a} identik/tidak identik dengan {$b}(jika  tidak identik return 1) = $hasilTidakIdentik <br>";

$totalKursi = 45;    
$kursiTerisi = 28;    

$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi kosong: " . $kursiKosong . " kursi<br>";
echo "Persentase kursi kosong: " . round($persentaseKosong, 2) . "<br>";
?>


