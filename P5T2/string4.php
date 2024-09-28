<?php
$pesan = "saya arek malang";
# Ubah variabel $pesan menjadi array dengan memisahkan berdasarkan spasi
$pesanPerkata = explode(" ", $pesan);

# Ubah setiap kata dalam array menjadi kebalikannya
$pesanPerkata = array_map(fn($kata) => strrev($kata), $pesanPerkata);

# Gabungkan kembali array menjadi string dengan spasi sebagai pemisah
$pesan = implode(" ", $pesanPerkata);

echo $pesan . "<br>";
?>