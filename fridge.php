<?php
class fridge {
    public $power;
    public $pressure;
    public $volume;
    public $temperature;
    public $material;
    public $wear;

    public function turnOn() { echo "Компрессор включен <br>"; }
    public function turnOff() { echo "Компрессор выключен <br>"; }
    public function cool() { echo "Камера охлаждается <br>"; }
    public function defrost() { echo "Камера размораживается <br>"; }
    public function press() { echo "Дверь прижата <br>"; }
    public function replace() { echo "Уплотнитель заменен <br>"; }
}

$myFridge = new fridge;
$myFridge->power = 220;
$myFridge->pressure = 5;
$myFridge->volume = 300;
$myFridge->temperature = -5;
$myFridge->material = "Пластик";
$myFridge->wear = "10%";

$myFridge->turnOn();
$myFridge->cool();
$myFridge->turnOff();
?>