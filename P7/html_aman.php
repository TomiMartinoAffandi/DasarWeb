<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
</head>
<body>

    <h2>Form Input PHP</h2>

    <?php
    // Inisialisasi variabel untuk input
    $input = "";

    // Pengecekan apakah form disubmit menggunakan metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['input'])) {
        // Ambil input dari pengguna dan amankan dari HTML injection
        $input = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');
        echo "<p>Input yang diamankan: " . $input . "</p>";
    }
    ?>

    <!-- Form HTML -->
    <form method="post" action="">
        <label for="input">Masukkan sesuatu:</label>
        <input type="text" name="input" id="input" value="<?php $input; ?>"><br><br>
        <input type="submit" value="Kirim">
    </form>

</body>
</html>
