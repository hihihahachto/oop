<?php
class phone {
    public $size;
    public $resolution;
    public $capacity;
    public $charge;
    public $frequency;
    public $cores;

    public function turnOn() { echo "Экран включен <br>"; }
    public function turnOff() { echo "Экран выключен <br>"; }
    public function charge() { echo "Телефон заряжается <br>"; }
    public function discharge() { echo "Телефон разряжается <br>"; }
    public function start() { echo "Процессор запущен <br>"; }
    public function stop() { echo "Процессор остановлен <br>"; }
}

$myPhone = new phone;
$myPhone->size = "6.1";
$myPhone->resolution = "1080x2400";
$myPhone->capacity = 4000;
$myPhone->charge = "50%";
$myPhone->frequency = 2.4;
$myPhone->cores = 8;

$myPhone->turnOn();
$myPhone->charge();
$myPhone->stop();
?>