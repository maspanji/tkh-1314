<?php

/*
 * File         : students-xpath.php
 * Deskripsi    : program php untuk membaca file students.xml menggunakan xpath
 * 
 */

$xml = simplexml_load_file("barang.xml");
$barang = $xml->xpath("/daftar-barang/barang");
//mengambil nama pemasok barang elemen ke-0
echo "pemasok ke-0:".$barang[0]->pemasok."<br />";
//menampilkan seluruh node barang
foreach ($barang as $b){
    $pemasok = $b->pemasok;
    $nama_barang = $b->nama_barang;
    echo "Nama Barang : ".$nama_barang.", Pemasok : ".$pemasok."<br />";
}
//mengambil seluruh node pemasok
$pemasok = $xml->xpath("//pemasok");
//menampilkan pemasok [0]
print $pemasok[0];

?>