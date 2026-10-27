<?php
class fan {
    public $rpm;
    public $power;
    public $count;
    public $diameter;
    public $height;
    public $weight;

    public function __construct($rpm, $power, $count, $diameter, $height, $weight) {
        $this->rpm = $rpm;
        $this->power = $power;
        $this->count = $count;
        $this->diameter = $diameter;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function speedUp() { echo "Вентилятор ускоряется до {$this->rpm} <br>"; }
    public function slowDown() { echo "Вентилятор замедляется <br>"; }
    public function rotate() { echo "Лопасти вращаются. Количество: {$this->count} <br>"; }
    public function remove() { echo "Лопасти сняты <br>"; }
    public function place() { echo "Вентилятор установлен. Высота: {$this->height} <br>"; }
    public function tilt() { echo "Вентилятор наклонен <br>"; }
}

$myFan = new fan(1200, 50, 3, 40, 100, 5);
$myFan->place();
$myFan->rotate();
$myFan->speedUp();
?>