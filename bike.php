<?php
class bike {
    private $speed;
    private $frame;
    public $color;
    public $seat;
    public $basket;

    public function __construct($speed, $frame, $color, $seat, $basket) {
        $this->speed = $speed;
        $this->frame = $frame;
        $this->color = $color;
        $this->seat = $seat;
        $this->basket = $basket;
    }

    public function sitDown() 
    { echo "Сел на велосипед <br>"; }
    public function pedal() 
    { echo "Кручу педали <br>"; }
    public function steer() 
    { echo "Поворачиваю руль <br>"; }
    public function brake() 
    { echo "Нажал на тормоз <br>"; }
    public function getOff() 
    { echo "Слез с велосипеда <br>"; }

    public function ChangeSpeed($speedMy) {
        if (is_int($speedMy)) {
            $this->speed = $speedMy;
        } else {
            die('Скорость должна быть числом');
        }
    }
    public function DisplaySpeed() {
        return $this->speed;
    }
}

$myBike = new bike(0, "Алюминий", "Красный", "Мягкое", "Есть");
$myBike->ChangeSpeed(15);
echo "Скорость: " . $myBike->DisplaySpeed() . " км/ч<br>";

$myBike->sitDown();
$myBike->pedal();
$myBike->steer();
$myBike->brake();
$myBike->getOff(); 
