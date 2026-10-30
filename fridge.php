<?php
class fridge {
    private $temperature;
    private $volume;
    public $color;
    public $model;
    public $freezer;

    public function __construct($temperature, $volume, $color, $model, $freezer) {
        $this->temperature = $temperature;
        $this->volume = $volume;
        $this->color = $color;
        $this->model = $model;
        $this->freezer = $freezer;
    }

    public function openDoor() 
    { echo "Открыл дверь <br>"; }
    public function putFood() 
    { echo "Положил продукты <br>"; }
    public function closeDoor() 
    { echo "Закрыл дверь <br>"; }
    public function takeFood() 
    { echo "Достал еду <br>"; }
    public function defrost() 
    { echo "Разморозил <br>"; }

    public function ChangeTemperature($tempMy) {
        if (is_int($tempMy)) {
            $this->temperature = $tempMy;
        } else {
            die('Температура должна быть числом');
        }
    }
    public function DisplayTemperature() {
        return $this->temperature;
    }
}

$myFridge = new fridge(-5, 300, "Белый", "LG", "Есть");
$myFridge->ChangeTemperature(-10);
echo "Температура: " . $myFridge->DisplayTemperature() . "<br>";

$myFridge->openDoor();
$myFridge->putFood();
$myFridge->closeDoor();
