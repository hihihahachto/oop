<?php
class bag {
    private $volume;
    private $weight;
    public $color;
    public $material;

    public function __construct($volume, $weight, $color, $material) {
        $this->volume = $volume;
        $this->weight = $weight;
        $this->color = $color;
        $this->material = $material;
    }

    public function openZipper() 
    { echo "Открыл молнию <br>"; }
    public function putItems() 
    { echo "Положил вещи <br>"; }
    public function closeZipper() 
    { echo "Закрыл молнию <br>"; }
    public function wearOnShoulder() 
    { echo "Надел на плечо <br>"; }
    public function carry() 
    { echo "Несу сумку <br>"; }

    public function ChangeWeight($weightMy) {
        if (is_int($weightMy)) {
            $this->weight = $weightMy;
        } else {
            die('Вес должен быть числом');
        }
    }
    public function DisplayWeight() {
        return $this->weight;
    }
}

$myBag = new bag(20, 2, "Черный", "Кожа");
$myBag->ChangeWeight(5);
echo "Вес: " . $myBag->DisplayWeight() . " кг<br>";

$myBag->openZipper();
$myBag->putItems();
$myBag->closeZipper();
$myBag->wearOnShoulder();
$myBag->carry();
