<?php
/*
 * File      : hello_client_wsdl.php
 * Deskripsi : client untuk hello_service_wsdl
 */

$wsdl = "http://localhost/tkh-1314/webservices/hello_service_wsdl.php?wsdl";
$client = new SoapClient($wsdl,array("trace" => 1));
$nama = "Panji ";
//memanggil fungsi pada service
$hasil_hello = $client->__soapCall("sayHello", array($nama));
//tampilkan hasil
echo "<h1>Hasil</h1>";
echo $hasil_hello;

//Melihat mekanisme request - response web service :

//tampilkan request header
echo "<h1>Request</h1>";
echo "<h3>Header</h3>";
echo $client->__getLastRequestHeaders();
echo "<h3>Body</h3>";
echo htmlentities($client->__getLastRequest());

//tampilkan response header 
echo "<h1>Response</h1>";
echo "<h3>Header</h3>";
echo $client->__getLastResponseHeaders();
echo "<h3>Body</h3>";
echo htmlentities($client->__getLastResponse());

?>