<?php
class lamp {
    private $brightness;
    private $power;
    public $color;
    public $shape;

    public function __construct($brightness, $power, $color, $shape) {
        $this->brightness = $brightness;
        $this->power = $power;
        $this->color = $color;
        $this->shape = $shape;
    }

    public function pressSwitch() 
    { echo "Нажал на выключатель <br>"; }
    public function glow() 
    { echo "Лампа светит <br>"; }
    public function turnOff() 
    { echo "Выключил свет <br>"; }

    public function ChangeBrightness($brightnessMy) {
        if (is_int($brightnessMy)) {
            $this->brightness = $brightnessMy;
        } else {
            die('Яркость должна быть числом');
        }
    }
    public function DisplayBrightness() {
        return $this->brightness;
    }
}

$myLamp = new lamp(100, 60, "Белый", "Круглая");
$myLamp->ChangeBrightness(50);
echo "Яркость: " . $myLamp->DisplayBrightness() . "%<br>";

$myLamp->pressSwitch();
$myLamp->glow();
$myLamp->turnOff();
