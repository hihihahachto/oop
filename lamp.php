<?php
class lamp {
    public $wattage;
    public $socket;
    public $voltage;
    public $state;
    public $lifespan;

    public function glow() { echo "Лампа светит <br>"; }
    public function replace() { echo "Лампа заменена <br>"; }
    public function clamp() { echo "Лампа зажата в патроне <br>"; }
    public function connect() { echo "Ток подведен <br>"; }
    public function turnOn() { echo "Свет включен <br>"; }
    public function turnOff() { echo "Свет выключен <br>"; }
}

$myLamp = new lamp;
$myLamp->wattage = 60;
$myLamp->socket = "E27";
$myLamp->voltage = 220;
$myLamp->state = "Вкл";
$myLamp->lifespan = 1000;

$myLamp->connect();
$myLamp->clamp();
$myLamp->turnOn();
$myLamp->glow();
?>