<?php

class Person {
    public $name;

    function __construct( $name ) {
        $this->name = $name;
    }
};

$personName = new Person('James');
echo $personName->name;