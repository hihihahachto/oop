<?php
trait myGreeting{
    public function sayHello(){
        echo "привчик";
    }
    public function greet($person){
        echo "дарова<br>" . $person;
    }
}
class Person {
    use myGreeting;
    public function sayHello()
    {
        echo "гусыня ищет папика<br>";
    }
}
$person = new Person();
$person->sayHello();
$person->greet('ПОМОГИТЕЕЕЕЕ<br>');
class Person2{
    use myGreeting;
}
$person = new $person;