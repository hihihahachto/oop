<?php
class bag {
    public $volume;
    public $material;
    public $length;
    public $strength;
    public $slider;
    public $length_zipper;

    public function put() { echo "Вещи положены <br>"; }
    public function take() { echo "Вещи взяты <br>"; }
    public function hold() { echo "Сумка держится за ручку <br>"; }
    public function replace() { echo "Ручка заменена <br>"; }
    public function open() { echo "Молния открыта <br>"; }
    public function close() { echo "Молния закрыта <br>"; }
}

$myBag = new bag;
$myBag->volume = 20;
$myBag->material = "Кожа";
$myBag->length = 30;
$myBag->strength = "Высокая";
$myBag->slider = "Металл";
$myBag->length_zipper = 40;

$myBag->open();
$myBag->put();
$myBag->hold();
$myBag->close();
?>