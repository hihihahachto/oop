<?php
class phone {
    private $screenSize;
    private $battery;
    public $color;
    public $storage;
    public $camera;

    public function __construct($screenSize, $battery, $color, $storage, $camera) {
        $this->screenSize = $screenSize;
        $this->battery = $battery;
        $this->color = $color;
        $this->storage = $storage;
        $this->camera = $camera;
    }

    public function takeOut() { echo "Достал телефон <br>"; }
    public function unlock() { echo "Разблокировал экран <br>"; }
    public function openApp() { echo "Открыл приложение <br>"; }
    public function call() { echo "Позвонил <br>"; }
    public function sendMessage() { echo "Отправил смс <br>"; }
    public function lock() { echo "Заблокировал <br>"; }
    public function putAway() { echo "Убрал в карман <br>"; }

    public function ChangeBattery($batteryMy) {
        if (is_int($batteryMy)) {
            $this->battery = $batteryMy;
        } else {
            die('Заряд должен быть числом');
        }
    }
    public function DisplayBattery() {
        return $this->battery;
    }
}

$myPhone = new phone("6.1", 50, "Черный", "128GB", "12MP");
$myPhone->ChangeBattery(80);
echo "Заряд: " . $myPhone->DisplayBattery() . "%<br>";

$myPhone->takeOut();
$myPhone->unlock();
$myPhone->call();
$myPhone->lock();
