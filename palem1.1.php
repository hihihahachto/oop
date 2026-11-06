<?php
abstract class Transport{
    abstract function go();
}

class Car extends Transport{
    public function go(){
        echo "Врууум<br>";
    }
}

class Bike extends Transport{
    public function go(){
        echo "ТРррррпрпрпрпрп<br>";
    }
}

class OwerTrans{
    public function drive(Transport $Transport){
        return $Transport->go();
    }

} 

$myCar = new Car();
$myBike = new Bike();
$owerTrans = new OwerTrans();
$owerTrans->drive($myCar);
$owerTrans->drive($myBike);