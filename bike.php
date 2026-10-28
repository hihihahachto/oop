<?php
class bike {
    public $material;
    public $weight;
    public $diameter;
    public $spokes;
    public $length;
    public $lubrication;

    public function assemble() { echo "Рама собрана <br>"; }
    public function paint() { echo "Рама покрашена <br>"; }
    public function inflate() { echo "Колёса накачаны <br>"; }
    public function spin() { echo "Колёса крутятся <br>"; }
    public function tighten() { echo "Цепь натянута <br>"; }
    public function lubricate() { echo "Цепь смазана <br>"; }
}

$myBike = new bike;
$myBike->material = "Алюминий";
$myBike->weight = 12;
$myBike->diameter = 26;
$myBike->spokes = 36;
$myBike->length = 110;
$myBike->lubrication = "Силикон";

$myBike->assemble();
$myBike->inflate();
$myBike->lubricate();
?>