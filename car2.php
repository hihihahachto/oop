<?php
class car{
    public $color;
    public $year;
    public $izgotovitel;
    public $engine;
    public function __construct($color, $year, $izgotovitel ,Engine $newEngine)
    {
        $this->color = $color;
        $this->year = $year;
        $this->izgotovitel = $izgotovitel;
        $this->engine = $newEngine;
    }
    
    public function startEngine()
    {
        $this->engine->on();
        echo"Едеееем";
    }
    public function stopEngine(){
        $this->engine->off();
        echo"ТОРМОЗИИИИИ";
    }
}
    class Engine{
        public function on(){

        }
        public function off(){
            
        }
}
$engine = new Engine();
$myCar = new Car('Серая', 2009, 'Мицубиси', $engine);
$myCar->stopEngine();