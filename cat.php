<?php

class Cat {
    public $name;
    private $age = 0;

    function setName($name){
        $this->name = $name;
    }


    function birthday(){
        $this->age++;
        return $this->age;
    }

    static function moew(){
        echo "moew!";
    }
}