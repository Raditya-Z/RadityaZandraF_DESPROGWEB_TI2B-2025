<?php

$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Penjumlahan: " . $hasilTambah . "<br>";
echo "Pengurangan: " . $hasilKurang . "<br>";
echo "Perkalian: " . $hasilKali . "<br>";
echo "Pembagian: " . $hasilBagi . "<br>";
echo "Sisa Bagi: " . $sisaBagi . "<br>";
echo "Pangkat: " . $pangkat . "<br>";
echo "<hr>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah a sama dengan b? " . ($hasilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a tidak sama dengan b? " . ($hasilTidakSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih kecil dari b? " . ($hasilLebihKecil ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih besar dari b? " . ($hasilLebihBesar ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih kecil atau sama dengan b? " . ($hasilLebihKecilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih besar atau sama dengan b? " . ($hasilLebihBesarSama ? 'Ya' : 'Tidak') . "<br>";
echo "<hr>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND (a && b): " . ($hasilAnd ? 'True' : 'False') . "<br>";
echo "Hasil OR (a || b): " . ($hasilOr ? 'True' : 'False') . "<br>";
echo "Hasil NOT a (!a): " . ($hasilNotA ? 'True' : 'False') . "<br>";
echo "Hasil NOT b (!b): " . ($hasilNotB ? 'True' : 'False') . "<br>";
echo "<hr>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$a += $b;
echo "Nilai a setelah penambahan (a += b): " . $a . "<br>";
$a = 10;
$a -= $b;
echo "Nilai a setelah pengurangan (a -= b): " . $a . "<br>";
$a = 10;
$a *= $b;
echo "Nilai a setelah perkalian (a *= b): " . $a . "<br>";
$a = 10;
$a /= $b;
echo "Nilai a setelah pembagian (a /= b): " . $a . "<br>";
$a = 10;
$a %= $b;
echo "Nilai a setelah sisa bagi (a %= b): " . $a . "<br>";
$a = 10;
echo "<hr>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Apakah a identik dengan b? " . ($hasilIdentik ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a tidak identik dengan b? " . ($hasilTidakIdentik ? 'Ya' : 'Tidak') . "<br>";
echo "<hr>";

echo "soal 3.6" . "<br>";
$kursi = 45;
$kursiTerpakai = 28;

$hasilKurang = $kursi - $kursiTerpakai;
$persentasesisakursi = ($hasilKurang / $kursi) * 100;
echo "Sisa kursi yang belum terpakai: " . $hasilKurang . "<br>";
echo "Persentase sisa kursi yang belum terpakai: " . $persentasesisakursi . "%<br>";
?>