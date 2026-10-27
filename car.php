<?php
class car {
    public $power;
    public $volume;
    public $diameter;
    public $pressure;
    public $pedal_travel;
    public $wear;

    public function __construct($power, $volume, $diameter, $pressure, $pedal_travel, $wear) {
        $this->power = $power;
        $this->volume = $volume;
        $this->diameter = $diameter;
        $this->pressure = $pressure;
        $this->pedal_travel = $pedal_travel;
        $this->wear = $wear;
    }

    public function start() { echo "Двигатель завелся. Мощность: {$this->power} <br>"; }
    public function stop() { echo "Двигатель заглох <br>"; }
    public function inflate() { echo "Колёса накачаны до {$this->pressure} <br>"; }
    public function replace() { echo "Колёса заменены <br>"; }
    public function brake() { echo "Машина тормозит. Износ: {$this->wear} <br>"; }
    public function check() { echo "Тормоза проверены <br>"; }
}

// Проверка
$myCar = new car(150, 2.0, 17, 2.2, 10, "20%");
$myCar->start();
$myCar->inflate();
$myCar->brake();
$myCar->stop();
?>