<?php
class fan {
    public $rpm;
    public $power;
    public $count;
    public $diameter;
    public $height;
    public $weight;

    public function speedUp() { echo "Вентилятор ускоряется <br>"; }
    public function slowDown() { echo "Вентилятор замедляется <br>"; }
    public function rotate() { echo "Лопасти вращаются <br>"; }
    public function remove() { echo "Лопасти сняты <br>"; }
    public function place() { echo "Вентилятор установлен <br>"; }
    public function tilt() { echo "Вентилятор наклонен <br>"; }
}

$myFan = new fan;
$myFan->rpm = 1200;
$myFan->power = 50;
$myFan->count = 3;
$myFan->diameter = 40;
$myFan->height = 100;
$myFan->weight = 5;

$myFan->place();
$myFan->rotate();
$myFan->speedUp();
?>