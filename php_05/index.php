<?php

//inheritance Example
class Animal{
    public $name ="The Cat";
    public function eat(){
        echo $this->name . " is eating.";
    }
}
class Dog extends Animal{
    public function bark(){
        echo $this->name . " is barking.";
    }
}
$dog = new Dog();
$dog->eat();
$dog->bark();

//method overriding Example
class ParentClass{
    public function display(){
        echo "This is the parent class method.";
    }
}
class ChildClass extends ParentClass{
    public function display(){
        //echo "This is the child class method.";
        parent::display();
    }
}
$child = new ChildClass();
$child->display();