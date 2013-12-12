<?php

/*
 * File : hello_service_wsdl.php
 * Deskripsi : program service web service menggunakan WSDL
 */
function sayHello($name){
    return "Hello, ".$name;
}
//init service
$server = new SoapServer("hello.wsdl");
//register fungsi
$server->addFunction("sayHello");
$server->handle();
?>
