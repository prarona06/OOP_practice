<?php
//abstract
abstract class Vehicale{

    abstract public function Drive($name);
}

class Car extends Vehicale{
    public function Drive($name){
        echo "Driving a car:{$name}";
    }
}

$car = new Car();
$car->Drive("prity");


class Bike extends Vehicale{
    public function Drive($name){
        return "Riding a bike:{$name}";
    }
}
$bike = new Bike();
echo "<br>";
echo $bike->Drive("papai");