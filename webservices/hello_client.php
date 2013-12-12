<?php

/*
 * File      : hello_client.php
 * Deskripsi : program untuk memanggil sayHello pada hello_service.php.
 */

$client = new SoapClient(null,
                array("location" => "http://localhost/tkh-1314/webservices/hello_service.php",
                           "uri" => "urn://localhost/wshello",
                            "trace"=>1));

$hasil = $client->__soapCall("sayHello",array());
echo $hasil;
?>
