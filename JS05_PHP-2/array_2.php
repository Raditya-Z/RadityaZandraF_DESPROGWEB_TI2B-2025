<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Array Asosiatif</title>
    <style>
        table { border-collapse: collapse; width: 40%;  }
        th, td { border: 1px solid black; padding: 6px; }
        th { background: lightblue; }
    </style>
</head>
<body>
<?php
$Dosen = [
    'Nama' => 'Elok Nur Hamdana',
    'Domisili' => 'Malang',
    'Jenis Kelamin' => 'Perempuan'
];

echo "<table>";
echo "<tr><th>Key</th><th>Value</th></tr>";
foreach ($Dosen as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";
?>
</body>
</html>
