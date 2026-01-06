<?php
//public assass modifirer
class user{
    public $name ="John Doe";


}
$user = new user ();
echo $user->name ."<br>";


//protected assass modifirer

class person{
    protected $name ="Prarona Dutta";

    protected function getName(){
        return $this->name;
    }
}
class employee extends person{
    public function displayName(){
        return $this->getName();
    }
}

$employee = new employee();
echo $employee->displayName();

//private assass modifirer
class BankAccount{
    private $balance = 10000;
    public function getBalance(){
        return $this->balance;
    }

    public function showBalance(){
        return $this->getBalance();
    }
}

$account = new BankAccount();
echo " <br>  Balance: " . $account->showBalance();
?>