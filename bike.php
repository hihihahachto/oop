<?php
class bike {
    public $material;
    public $weight;
    public $diameter;
    public $spokes;
    public $length;
    public $lubrication;

    public function __construct($material, $weight, $diameter, $spokes, $length, $lubrication) {
        $this->material = $material;
        $this->weight = $weight;
        $this->diameter = $diameter;
        $this->spokes = $spokes;
        $this->length = $length;
        $this->lubrication = $lubrication;
    }

    public function assemble() { echo "Рама собрана из {$this->material} <br>"; }
    public function paint() { echo "Рама покрашена <br>"; }
    public function inflate() { echo "Колёса накачаны <br>"; }
    public function spin() { echo "Колёса крутятся. Диаметр: {$this->diameter} <br>"; }
    public function tighten() { echo "Цепь натянута. Длина: {$this->length} <br>"; }
    public function lubricate() { echo "Цепь смазана. Смазка: {$this->lubrication} <br>"; }
}

$myBike = new bike("Алюминий", 12, 26, 36, 110, "Силикон");
$myBike->assemble();
$myBike->inflate();
$myBike->lubricate();
?>