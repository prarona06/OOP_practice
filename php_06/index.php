<?php
//constants

class MyClass{
    const APP_Varsion ="1.0.0";

    public function showVersion(){
        return self::APP_Varsion; //jodi same class a hoy tahole self use korte hoy
    }
    
}

$obj = new MyClass();
echo "Application Version: " . $obj->showVersion();

//outer class theke constant access kora

echo "\nApplication Version : " . MyClass::APP_Varsion;

//constants in inheritance

class Dog{
    const TYPE = "Animal";

    
}
class Cow extends Dog{
    public function showType(){
        return self::TYPE; //jodi same class a hoy tahole self use korte hoy

    }}
$obj2 = new Cow();
echo "\nType: " . $obj2->showType();