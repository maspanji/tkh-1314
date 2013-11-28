<?php
/*
 * File      : barang-simplexml.php
 * Deskripsi : membaca file xml menggunakan pustaka simplexml
 */
$barang = simplexml_load_file("barang.xml");
//menampilkan seluruh elemen barang
foreach ($barang as $b){
    echo $b->nama_barang."<br />";
}

?>
