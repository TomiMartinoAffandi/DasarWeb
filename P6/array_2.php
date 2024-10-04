<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 10px;
            border: 1px solid #dddddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Data Dosen</h2>

<table>
    <tr>
        <th>Label</th>
        <th>Informasi</th>
    </tr>
    <?php
        $Dosen = [
            'Nama' => 'Elok Nur Hamdana',
            'Domisili' => 'Malang',
            'Jenis Kelamin' => 'Perempuan'
        ];
        
        foreach ($Dosen as $label => $informasi) {
            echo "<tr>";
            echo "<td>" . $label . "</td>";
            echo "<td>" . $informasi . "</td>";
            echo "</tr>";
        }
    ?>
</table>

</body>
</html>
