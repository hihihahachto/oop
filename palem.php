<?php
//полефармизом

abstract class Animal {
    abstract function makeSound();
}

class Cat extends Animal {
    public function makeSound(){
        echo "кошка мяукает";
    }
}

class Dog extends Animal {
    public function makeSound(){
        echo "собака гавкает";
    }
}

class OwerAnimal {
    public function Sound(Animal $Animal){
        return $Animal->makeSound();
    }
}

$cat = new Cat();
$dog = new Dog();
$owerAnimal = new OwerAnimal();
$owerAnimal->Sound($cat);