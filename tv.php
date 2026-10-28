<?php
class TV {
    public $resolution;
    public $diagonal;
    public $processor;
    public $ports;
    public $power;
    public $impedance;

    public function turnOn() { echo "Телевизор включен <br>"; }
    public function turnOff() { echo "Телевизор выключен <br>"; }
    public function process() { echo "Плата обрабатывает сигнал <br>"; }
    public function reboot() { echo "Плата перезагружается <br>"; }
    public function play() { echo "Динамики играют звук <br>"; }
    public function mute() { echo "Звук выключен <br>"; }
}

$myTV = new TV;
$myTV->resolution = "4K";
$myTV->diagonal = 55;
$myTV->processor = "Cortex";
$myTV->ports = 4;
$myTV->power = 100;
$myTV->impedance = 8;

$myTV->turnOn();
$myTV->process();
$myTV->play();
?>