<?php
abstract class Electronics{
    abstract function getOn();
}

class TV extends Electronics{
    public function getOn(){
        echo "Пшшшшшш<br>";
    }
}

class Smartphone extends Electronics{
    public function getOn(){
        echo "Пилим пилим<br>";
    }
}

class OwerElectronics{
    public function include(Electronics $Electronics){
        return $Electronics->getOn();
    }

}

$myTV = new TV();
$mySmart = new Smartphone();
$owerElectronics = new OwerElectronics();
$owerElectronics->include($myTV);
$owerElectronics->include($mySmart);