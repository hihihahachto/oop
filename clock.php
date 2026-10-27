<?php
class clock  {
    public $movement;
    public $power_source; 
    public $diameter;
    public $marking;
    public $length;
    public $color;

    public function __construct($movement, $power_source, $diameter, $markings, $length, $color) {
        $this->movement = $movement;
        $this->power_source = $power_source;
        $this->diameter = $diameter;
        $this->marking = $markings;
        $this->length = $length;
        $this->color = $color;
    }

    public function wind() { echo "Часы заведены. Механизм: {$this->movement} <br>"; }
    public function stop() { echo "Часы остановились <br>"; }
    public function backlight() { echo "Подсветка включена <br>"; }
    public function wipe() { echo "Циферблат протерт <br>"; }
    public function move() { echo "Стрелки двигаются. Длина: {$this->length} <br>"; }
    public function remove() { echo "Стрелки сняты <br>"; }
}

$myClock = new clock("Механический", "Пружина", 30, "Римские", 10, "Черный");
$myClock->wind();
$myClock->move();
$myClock->stop();
?>