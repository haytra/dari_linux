<?php 
// aray
// aray adalah cara untuk menggabungkan banyak elemen supaya tidak banyak variable
// aray boleh menggabungkan sebuah elemen apa aja string,float,variabe
$minuman = ["es,batu", "es buah", "kolak"];
$makanan = ["pizza", "burger", "sosis", 808, false];
// menampilkan aray itu punya tersendiri
// menampilkan akan tetapi semua tipe datanyya muncul menggunakan var-dum
//klo menggunakan print_r itu lebih simpel cuman yang di tampilkanya key nya aja gk tipe datanya
//klo menggunakan echoo cuman bisa menampung satu saja ya dan tulisanya menggunakan variable dan key nya juga
// var_dump($makanan);
// echo "<br>";
// print_r($makanan);
// echo "<br>";
// echo $makanan[0];
// untuk menambahkan yg ada di variable
$minuman[] = "iniadalahtambahan";
var_dump($minuman);
?>