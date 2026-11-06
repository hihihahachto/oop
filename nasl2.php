<?php
abstract class Animal{
    protected $name;
    abstract function makeSound();
    public function jump(){
        echo"Взлет";    }
}
class Cat extends Animal {
    public function makeSound()
    {
        echo 'Мур <br>';
    }
}
class Dog extends Animal{
    public function makeSound()
    {
        echo 'Аф <br>';
    }
}
$cat = new Cat();
$dog = new Dog();
$cat->makeSound();
$dog->makeSound();

