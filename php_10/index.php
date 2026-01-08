<?php
//static methods

class Myclass {

    public static $name = "John";
    public static function greatting(){
        echo " my class Hello World!";
    }
}
 echo Myclass::greatting();
echo "<br>";
echo Myclass::$name;



class Math {
public static function add($x, $y){
    return $x + $y;
}

public static function subtract($x, $y){
    return $x - $y;
}
}

echo Math::add(10, 5);
echo "<br>";
echo Math::subtract(10, 5);
