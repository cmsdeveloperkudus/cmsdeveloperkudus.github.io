<?php
// Data komentar
$komentar1 = array(
    'id' => 1,
    'komentar' => 'Ini adalah komentar pertama.',
    'tanggal' => '2023-08-04'
);

$komentar2 = array(
    'id' => 2,
    'komentar' => 'Ini adalah komentar kedua.',
    'tanggal' => '2023-08-04'
);

$komentar3 = array(
    'id' => 3,
    'komentar' => 'Ini adalah komentar ketiga.',
    'tanggal' => '2023-08-04'
);

// Array dari komentar
$komentarArr = array($komentar1, $komentar2, $komentar3);

// Convert ke JSON
$jsonData = json_encode($komentarArr, JSON_PRETTY_PRINT);

// Simpan ke file
$namaFile = 'komentar.json';
file_put_contents($namaFile, $jsonData);

echo "File JSON telah dibuat: $namaFile";
?>
