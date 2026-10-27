<?php
class kettle {
    public $power;
    public $material;
    public $volume;
    public $threshold;
    public $type;

    public function __construct($power, $material, $volume, $threshold, $type) {
        $this->power = $power;
        $this->material = $material;
        $this->volume = $volume;
        $this->threshold = $threshold;
        $this->type = $type;
    }

    public function heat() { echo "Вода нагревается. Мощность: {$this->power} <br>"; }
    public function cool() { echo "Вода остывает <br>"; }
    public function fill() { echo "Чайник наполнен. Объем: {$this->volume} <br>"; }
    public function pour() { echo "Вода наливается <br>"; }
    public function enable() { echo "Термостат включен. Тип: {$this->type} <br>"; }
    public function disable() { echo "Термостат выключен <br>"; }
}

$myKettle = new kettle(2000, "Стекло", 1.5, 100, "Механический");
$myKettle->fill();
$myKettle->heat();
$myKettle->pour();
?>