<?php

class MyAccount {
    private $balance;
    function __construct($initialBalance = 0){
        $this-> balance = $initialBalance;
    }
    public function deposit($amount){
        $this->balance += $amount;
    }
    public function withdraw($amount){
        if($this->balance >= $amount){
            $this->balance -= $amount;
        } else {
            echo "You don't have enough balance, Please Deposit \n";
        }
    }
    public function newBalance(){
        echo "Balance: {$this->balance}\n";
    }
}


$myAccount = new MyAccount(1000);

$myAccount->deposit(1000);
$myAccount->newBalance();

$myAccount->withdraw(1110);
$myAccount->newBalance();
