<?php

/*
 * File      : student-event.php
 * Deskripsi : membaca file xml menggunakan event based parser
 */
//init XML parser
$parser = xml_parser_create();

//mendefinisikan apa yang dilakukan kalau ketemu start tag
function startTag($parser, $element, $attribute) {
    switch ($element) {
        case "MAHASISWA":echo "<h3>Mahasiswa</h3>";
            break;
        case "NAMA" : echo "Nama : ";
            break;
        case "ALAMAT" : echo "Alamat : ";
            break;
    }
}

//mendefinisikan apa yg dilakukan kalau ketemu end tag
function endTag($parser, $element) {
    echo "<br />";
}

//mendefinisikan apa yang dilakukan ketika menemukan data karakter
function dataHandler($parser, $data) {
    echo $data;
}

//mendaftarkan setiap fungsi menangani start dan end tag
xml_set_element_handler($parser, "startTag", "endTag");

//mendaftarkan fungsi yang menangani data
xml_set_character_data_handler($parser, "dataHandler");

//buka file xml
$xml = fopen("mahasiswa.xml", "r");

//baca data
while ($data = fread($xml, 4096)) {
    xml_parse($parser, $data, feof($xml)) or die("XML Error");
}

//bebaskan sumber daya parser
xml_parser_free($parser);
?>
    