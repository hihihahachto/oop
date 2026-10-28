<?php
class car {
    public $power;
    public $volume;
    public $diameter;
    public $pressure;
    public $pedal_travel;
    public $wear;

    public function start() {
        echo "Двигатель завелся <br>"; 
        }
    public function stop() {
        echo "Двигатель заглох <br>"; 
        }
    public function inflate() {
        echo "Колёса накачаны <br>"; }
    public function replace() {
        echo "Колёса заменены <br>"; 
        }
    public function brake() {
        echo "Машина тормозит <br>"; 
        }
    public function check() {
        echo "Тормоза проверены <br>"; 
        }
}

$myCar = new car;
$myCar->power = 150;
$myCar->volume = 2.0;
$myCar->diameter = 17;
$myCar->pressure = 2.2;
$myCar->pedal_travel = 10;
$myCar->wear = "20%";

$myCar->start();
$myCar->inflate();
$myCar->brake();
$myCar->stop();
?>