<?php
class lamp {
    public $wattage;
    public $socket;
    public $voltage;
    public $state;
    public $lifespan;

    public function __construct($wattage, $socket, $voltage, $state, $lifespan) {
        $this->wattage = $wattage;
        $this->socket = $socket;
        $this->voltage = $voltage;
        $this->state = $state;
        $this->lifespan = $lifespan;
    }

    public function glow() { echo "Лампа светит. Мощность: {$this->wattage} <br>"; }
    public function replace() { echo "Лампа заменена <br>"; }
    public function clamp() { echo "Лампа зажата в патроне {$this->socket} <br>"; }
    public function connect() { echo "Ток подведен. Напряжение: {$this->voltage} <br>"; }
    public function turnOn() { echo "Свет включен. Состояние: {$this->state} <br>"; }
    public function turnOff() { echo "Свет выключен <br>"; }
}

$myLamp = new lamp(60, "E27", 220, "Вкл", 1000);
$myLamp->connect();
$myLamp->clamp();
$myLamp->turnOn();
$myLamp->glow();
?>