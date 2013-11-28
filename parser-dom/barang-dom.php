<?php
/*
 * File      : barang-dom.php
 * Deskripsi : membaca file xml menggunakan DOM
 */
$xmldocument = new DOMDocument();
$xmldocument->load("barang.xml");
//mendapatkan elemen barang
$elemen_barang = $xmldocument->getElementsByTagName("barang");
//menampilkan seluruh pemasok
foreach ($elemen_barang as $barang){
    $pemasok = $barang->getElementsByTagName("pemasok");
    echo $pemasok->item(0)->nodeValue."<br />";
}
?>