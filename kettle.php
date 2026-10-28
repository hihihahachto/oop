<?php
class kettle {
    public $power;
    public $material;
    public $volume;
    public $threshold;
    public $type;

    public function heat() { echo "Вода нагревается <br>"; }
    public function cool() { echo "Вода остывает <br>"; }
    public function fill() { echo "Чайник наполнен <br>"; }
    public function pour() { echo "Вода наливается <br>"; }
    public function enable() { echo "Термостат включен <br>"; }
    public function disable() { echo "Термостат выключен <br>"; }
}

$myKettle = new kettle;
$myKettle->power = 2000;
$myKettle->material = "Стекло";
$myKettle->volume = 1.5;
$myKettle->threshold = 100;
$myKettle->type = "Механический";

$myKettle->fill();
$myKettle->heat();
$myKettle->pour();
?>