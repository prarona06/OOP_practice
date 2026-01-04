<?php  
class person{

public $name;
public $age;

public function __construct($name,$age)
{
    $this-> name =$name;
    $this-> age =$age;

}
public function personDetails (){
    echo " His Name:" .$this-> name . ", His Age:" .$this->age;
}



}
$person = new person("John",30);
echo $person-> personDetails();





?>