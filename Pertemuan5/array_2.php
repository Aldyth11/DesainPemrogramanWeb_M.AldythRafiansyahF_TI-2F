<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampilan Dosen dengan Tabel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            width: 50%; 
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px 15px;
            text-align: left;
        }
        th {
            background-color: #4CAF50; 
            color: white;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
<?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan' 
    ];

    echo "<h2>Data Dosen</h2>";
    echo "<table>";
    echo "<thead><tr><th>Keterangan</th><th>Nilai</th></tr></thead>";
    echo "<tbody>";
    echo "<tr><td>Nama</td><td>{$Dosen ['nama']}</td></tr>";
    echo "<tr><td>Domisili</td><td>{$Dosen ['domisili']}</td></tr>";
    echo "<tr><td>Jenis Kelamin</td><td>{$Dosen ['jenis_kelamin']}</td></tr>";
    echo "</tbody>";
    echo "</table>";

?>
</body>
</html>
