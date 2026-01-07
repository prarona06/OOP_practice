<?php
//Trait

trait Logger {
    public function log ($massage) {
        echo "LOG: " . $massage . "\n";
    }}


    class product{
       use Logger; 
       public function create () {
        $this -> log("Product created");
       }
    }
class order{
   use Logger;
    public function place () {
     $this -> log("Order placed");
    }
}
$product = new product();
$product -> create();
echo "<br>";

$order= new order();
$order -> place();