<?php
class car {
    private $color;
    private $model;
    public $interior;
    public $climateControl;
    public $audioSystem;

    public function approach() 
        {
        echo "Ты подошел <br>"; 
        }
    public function openDoor() 
        {
        echo "Открыл дверь <br>"; 
        }
    public function sitDown() 
        {
        echo "Ты сел <br>"; 
        }
    public function fastenSeatbelt() 
        {
        echo "Пристегнул ремень <br>"; 
        }
    public function startEngine() 
        {
        echo "Завел машину <br>"; 
        }
    public function drive() 
        {
        echo "Поехалииии <br>"; 
        }
        public function park() 
        {
        echo "Вот и парковочка <br>"; 
        }
        public function getOut()
        {
        echo "Вышел из машины<br>"; 
        }
    function __construct($color, $model, $interior, $climateControl, $audioSystem)
        {
            $this->color = $color;
            $this->model = $model;
            $this->interior = $interior;
            $this->climateControl = $climateControl;
            $this->audioSystem = $audioSystem;
        }
    public function ChangeColor($colorMy)
    { 
        if (is_string($colorMy)){
            $this->color = $colorMy;
        }else
        die('Цвет должен быть строкой');
        
    }
    public function DisplayColor()
    {
        return $this->color ;
    }
}

$myCar = new car ("Белый","BMV","Кожанный","Прохладно","Работает");
$myCar->ChangeColor("Синий");
echo $myCar->DisplayColor();


$myCar->approach();
$myCar->openDoor();
$myCar->sitDown();
$myCar->fastenSeatbelt();
$myCar->startEngine();
$myCar->drive();
$myCar->park();
$myCar->getOut();
