<?php
class clock {
    public $movement;
    public $power_source; 
    public $diameter;
    public $markings;
    public $length;
    public $color;

    public function wind() { echo "Часы заведены <br>"; }
    public function stop() { echo "Часы остановились <br>"; }
    public function backlight() { echo "Подсветка включена <br>"; }
    public function wipe() { echo "Циферблат протерт <br>"; }
    public function move() { echo "Стрелки двигаются <br>"; }
    public function remove() { echo "Стрелки сняты <br>"; }
}

$myClock = new clock;
$myClock->movement = "Механический";
$myClock->power_source = "Пружина";
$myClock->diameter = 30;
$myClock->markings = "Римские";
$myClock->length = 10;
$myClock->color = "Черный";

$myClock->wind();
$myClock->move();
$myClock->stop();
?>