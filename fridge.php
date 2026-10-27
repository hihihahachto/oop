<?php
class fridge {
    public $power;
    public $pressure;
    public $volume;
    public $temperature;
    public $material;
    public $wear;

    public function __construct($power, $pressure, $volume, $temperature, $material, $wear) {
        $this->power = $power;
        $this->pressure = $pressure;
        $this->volume = $volume;
        $this->temperature = $temperature;
        $this->material = $material;
        $this->wear = $wear;
    }

    public function turnOn() { echo "Компрессор включен. Мощность: {$this->power} <br>"; }
    public function turnOff() { echo "Компрессор выключен <br>"; }
    public function cool() { echo "Камера охлаждается до {$this->temperature} <br>"; }
    public function defrost() { echo "Камера размораживается <br>"; }
    public function press() { echo "Дверь прижата <br>"; }
    public function replace() { echo "Уплотнитель заменен. Износ был: {$this->wear} <br>"; }
}

$myFridge = new fridge(220, 5, 300, -5, "Пластик", "10%");
$myFridge->turnOn();
$myFridge->cool();
$myFridge->turnOff();
?>