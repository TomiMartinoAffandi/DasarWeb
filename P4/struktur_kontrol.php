<?php

$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
}elseif ($nilaiNumerik >= 80    ) {
    echo "Nilai huruf: B";
}elseif ($nilaiNumerik >= 70) {
    echo "Nilai huruf: C";
}elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo"<br>";
$jaraksaatini = 0;
$jaraktarget = 500;
$peningkatanhariini = 30;
$hari = 0;

while ($jaraksaatini < $jaraktarget) {
    $jaraksaatini += $peningkatanhariini;
    $hari++;
}

echo "atlet tersebut memerlukan $hari hari untuk mencapai 500km <br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah lahan: $jumlahLahan<br>";
echo "Tanaman per lahan: $tanamanPerLahan<br>";
echo "Buah per tanaman: $buahPerTanaman<br>";

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $index => $skor) {
    echo "Skor ujian ke-" . ($index + 1) . " adalah: $skor<br>";
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $index => $nilai) {
    echo "Nilai siswa ke-" . ($index + 1) . " adalah: $nilai ";

    if ($nilai < 60) {
        echo "(Tidak lulus) <br>";
    } else {
        echo "(Lulus) <br>";
    }
}

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$nilaiSiswaTersaring = array_slice($nilaiSiswa, 2, -2);

$totalNilai = array_sum($nilaiSiswaTersaring);

$rataRataNilai = $totalNilai / count($nilaiSiswaTersaring);

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan terendah adalah: $totalNilai <br>";
echo "Nilai rata-rata adalah: $rataRataNilai <br>";

$hargaProduk = 120000; 
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 20 / 100 * $hargaProduk; 
}

$hargaSetelahDiskon = $hargaProduk - $diskon; 

echo "Harga asli produk: Rp $hargaProduk <br>";
echo "Diskon: Rp $diskon <br>";
echo "Harga yang harus dibayar: Rp $hargaSetelahDiskon <br>";

$totalPoin = 520;
$hadiahTambahan = "TIDAK";

if ($totalPoin > 500) {
    $hadiahTambahan = "YA";
}

echo "Total skor pemain adalah: $totalPoin<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan <br>";
?>