<?php
class bag {
    public $volume;
    public $material;
    public $length;
    public $strength;
    public $slider;
    public $length_zipper;

    public function __construct($volume, $material, $length, $strength, $slider, $length_zipper) {
        $this->volume = $volume;
        $this->material = $material;
        $this->length = $length;
        $this->strength = $strength;
        $this->slider = $slider;
        $this->length_zipper = $length_zipper;
    }

    public function put() { echo "Вещи положены. Объем: {$this->volume} <br>"; }
    public function take() { echo "Вещи взяты <br>"; }
    public function hold() { echo "Сумка держится за ручку. Прочность: {$this->strength} <br>"; }
    public function replace() { echo "Ручка заменена <br>"; }
    public function open() { echo "Молния открыта. Бегунок: {$this->slider} <br>"; }
    public function close() { echo "Молния закрыта. Длина: {$this->length_zipper} <br>"; }
}

$myBag = new bag(20, "Кожа", 30, "Высокая", "Металл", 40);
$myBag->open();
$myBag->put();
$myBag->hold();
$myBag->close();
?>