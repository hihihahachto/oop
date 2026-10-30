<?php

class Animal{
    public $name;
    public $color;
    public function makeSound($sound){
        echo $sound;
    }
    public function move(){
    }
}
class Cat extends Animal{

}
$cat = new Cat();
$cat->makeSound ('мяу <br>');

class Dog extends Animal{

}
$dog = new Dog();
$dog->makeSound ('гав');
