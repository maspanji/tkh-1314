<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Hello {

    private $nama;

    public function __construct() {
        echo "object hello dibuat";
    }

    public function sayHello($nama) {
        echo "Hello, " . $nama;
    }

    public function __destruct() {
        echo "object di-destroy";
    }

}

class Mobil {
    private $properties = array();
    public function __set($name, $value) {
        $this->properties[$name] = $value;
    }

    public function __get($name) {
        return $this->properties[$name];
    }
}
class Motor {
    private $properties = array();
    public function __set($name, $value) {
        $this->properties[$name] = $value;
    }

    public function __get($name) {
        return $this->properties[$name];
    }
}

?>
