<?php

/*
 * File      : hello_service.php
 * Deskripsi : service pada web service yang dapat menyapa Hello !
 */
//definisi class Hello
class Hello {

    function sayHello() {
        return "Hello Web Services !";
    }

}

$server = new SoapServer(null, array("uri" => "urn://localhost/wshello"));
//register class yang akan menangani response
$server->setClass("Hello");
//handle soap request
$server->handle();
?>