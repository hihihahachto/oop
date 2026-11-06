<?php
abstract class Transport{
    public function move(){
        echo "Транспорт движется <br>";
    }
    abstract public function getSpeed();
}

class Car extends Transport{
    public function  getSpeed(){
        echo "Скорость машины: 100 км/ч <br>";
    }
}

class Plane extends Transport{
    public function getSpeed(){
        echo "Скорость самолета: 800 км/ч <br>";
    }
}

$myCar = new Car();
$myPlane = new Plane();
$myCar->move();
$myCar->getSpeed();

$myPlane->getSpeed();
$myPlane->move();
