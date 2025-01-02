<?php
class Account {
    private $id;
    private $accountNum;
    private $holderName;
    private $balance;

    public function __construct($accountNum, $holderName, $balance, $id = null) {
        $this->id = $id;
        $this->accountNum = $accountNum;
        $this->holderName = $holderName;
        $this->balance = $balance;
    }

    public function getId() {
        return $this->id;
    }

    public function getAccountNum() {
        return $this->accountNum;
    }

    public function getHolderName() {
        return $this->holderName;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function setAccountNum($accountNum) {
        $this->accountNum = $accountNum;
    }

    public function setHolderName($holderName) {
        $this->holderName = $holderName;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
    }
}
?>