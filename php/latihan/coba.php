<?php
$angka = [10, 20, 30, 40, 50]; // Array sederhana dengan indeks 0, 1, 2, ...
echo $angka[0]; // Output: 10
echo $angka[4]; // Output: 50

// Menampilkan semua elemen array dengan perulangan
foreach ($angka as $nilai) {
    echo $nilai . "\n";
}
?>
<?php
// Contoh nilai awal
$nilai = "42";

// Mengubah tipe data
$int_value = intval($nilai);   // jadi integer
$float_value = floatval($nilai); // jadi float
$string_value = strval($nilai); // jadi string

// Cetak hasil
echo "Integer: $int_value\n";  // Output: 42
echo "Float: $float_value\n";  // Output: 42
echo "String: $string_value\n"; // Output: "42"
?>