<?php
class clock {
    private $alarm;
    private $time;
    public $color;
    public $shape;

    public function __construct($alarm, $time, $color, $shape) {
        $this->alarm = $alarm;
        $this->time = $time;
        $this->color = $color;
        $this->shape = $shape;
    }

    public function checkTime() 
    { echo "Посмотрел на время <br>"; }
    public function setAlarm() 
    { echo "Поставил будильник <br>"; }
    public function sleep() 
    { echo "Сплю <br>"; }
    public function wakeUp() 
    {echo "Проснулся по будильнику <br>"; }

    public function ChangeTime($timeMy) {
        if (is_string($timeMy)) {
            $this->time = $timeMy;
        } else {
            die('Время должно быть строкой');
        }
    }
    public function DisplayTime() {
        return $this->time;
    }
}

$myClock = new clock("07:00", "12:00", "Черный", "Квадратные");
$myClock->ChangeTime("08:30");
echo "Время: " . $myClock->DisplayTime() . "<br>";

$myClock->checkTime();
$myClock->setAlarm();
$myClock->sleep();
$myClock->wakeUp();
