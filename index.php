<?php
require_once "cat.php";
require_once "Dog.php";
require_once "Animal.php";
$cat = new Cat;

Dog::eat();
Cat::eat();

//require_once "Car.php";
//$car = new Car("Dacia", 19000);
//$car->makeNoise();

//$cat = new Cat;
//$cat->setName("Mincis - " . $cat->birthday(). "<br>");
//echo $cat->name;
//$cat->setName("Brincis - " . $cat->birthday(). "<br>");
//echo $cat->name;
//Cat::moew();
?>