<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus) . "<br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
    ['Frank', 8],
];

echo "Daftar semua karyawan beserta lama pengalaman kerja:<br>";
foreach ($daftarKaryawan as $karyawan) {
    echo $karyawan[0] . " - " . $karyawan[1] . " tahun<br>";
}

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);
echo "<br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

function tampilkanNilai($daftarNilai, $mataKuliah) {
    echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
    foreach ($daftarNilai[$mataKuliah] as $nilai) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }
    echo "<br>";
}

tampilkanNilai($daftarNilai, 'Matematika');
tampilkanNilai($daftarNilai, 'Fisika');
tampilkanNilai($daftarNilai, 'Kimia');

$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
$jumlahSiswa = count($daftarNilai);

foreach ($daftarNilai as $siswa) {
    $totalNilai += $siswa[1];
}

$rataRataNilai = $totalNilai / $jumlahSiswa;

echo "Rata-rata nilai kelas: " . $rataRataNilai . "<br><br>";

echo "Daftar siswa yang nilainya di atas rata-rata:<br>";
foreach ($daftarNilai as $siswa) {
    if ($siswa[1] > $rataRataNilai) {
        echo "Nama: " . $siswa[0] . ", Nilai: " . $siswa[1] . "<br>";
    }
}

?>