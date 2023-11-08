<?php

class Dog {
    public $name;
    private $age = 0;

    function __construct($n, $a){
        $this->name = $n;
        $this->age = $a;
    }


    function birthday(){
        $this->age++;
        return $this->age;
    }

    static function woof(){
        echo "woof!";
    }
}

