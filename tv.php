<?php
class TV {
    public $resolution;
    public $diagonal;
    public $processor;
    public $ports;
    public $power;
    public $impedance;

    public function __construct($resolution, $diagonal, $processor, $ports, $power, $impedance) {
        $this->resolution = $resolution;
        $this->diagonal = $diagonal;
        $this->processor = $processor;
        $this->ports = $ports;
        $this->power = $power;
        $this->impedance = $impedance;
    }

    public function turnOn() { echo "Телевизор включен. Диагональ: {$this->diagonal} <br>"; }
    public function turnOff() { echo "Телевизор выключен <br>"; }
    public function process() { echo "Плата обрабатывает сигнал {$this->resolution} <br>"; }
    public function reboot() { echo "Плата перезагружается <br>"; }
    public function play() { echo "Динамики играют звук. Импеданс: {$this->impedance} <br>"; }
    public function mute() { echo "Звук выключен <br>"; }
}

$myTV = new TV("4K", 55, "Cortex", 4, 100, 8);
$myTV->turnOn();
$myTV->process();
$myTV->play();
?>