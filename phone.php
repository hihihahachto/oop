<?php
class phone {
    public $size;
    public $resolution;
    public $capacity;
    public $charge;
    public $frequency;
    public $cores;

    public function __construct($size, $resolution, $capacity, $charge, $frequency, $cores) {
        $this->size = $size;
        $this->resolution = $resolution;
        $this->capacity = $capacity;
        $this->charge = $charge;
        $this->frequency = $frequency;
        $this->cores = $cores;
    }

    public function turnOn() { echo "Экран включен. Разрешение: {$this->resolution} <br>"; }
    public function turnOff() { echo "Экран выключен <br>"; }
    public function charge() { echo "Телефон заряжается. Емкость: {$this->capacity} <br>"; }
    public function discharge() { echo "Телефон разряжается. Заряд: {$this->charge} <br>"; }
    public function start() { echo "Процессор запущен. Ядра: {$this->cores} <br>"; }
    public function stop() { echo "Процессор остановлен <br>"; }
}

$myPhone = new phone("6.1", "1080x2400", 4000, "50%", 2.4, 8);
$myPhone->turnOn();
$myPhone->charge();
$myPhone->stop();
?>