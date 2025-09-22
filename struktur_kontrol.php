<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<hr>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan " . $hari . " hari untuk mencapai jarak 500 kilometer.";

echo "<hr>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: " . $jumlahBuah;

echo "<hr>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: " . $totalSkor;

echo "<hr>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: " . $nilai . " (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: " . $nilai . " (Lulus) <br>";
}
echo "<hr>";

echo "soal 4.6" . "<br>";
$nilai = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);
sort($nilai);
$total = 0;

for ($i = 0; $i < count($nilai); $i++) {
    if ($i >= 2 && $i < count($nilai) - 2) {
        $total += $nilai[$i];
    }
}

echo "Total nilai setelah mengabaikan 2 tertinggi & 2 terendah = " . $total;
echo "<br>" ,"<hr>";

echo "soal 4.7" . "<br>";
$harga = 120000;
$diskon = 0;

if ($harga > 100000) {
    $diskon = 0.2 * $harga;
}
$total_bayar = $harga - $diskon;

echo "Harga yang harus dibayar setelah diskon = Rp " . $total_bayar;
echo "<br>", "<hr>";

echo "soal 4.8" . "<br>";
$poin = 550;
echo "Total skor pemain adalah: " . $poin . "<br>";

if ($poin > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
echo "<br>", "<hr>";
?>