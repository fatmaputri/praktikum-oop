<?php

class Account {
    public string $owner;
    protected float $balance;
    private string $pin;

    public function __construct(string $owner, float $balance, string $pin) {
        $this->owner = $owner;
        $this->balance = $balance;
        $this->pin = $pin;
    }

    public function getBalance(string $pin): float {
        if ($pin === $this->pin) return $this->balance;
        throw new Exception("PIN salah");
    }
}

// SUBCLASS
class PremiumAccount extends Account {
    public function debugBalance() {
        return $this->balance; // boleh karena protected
    }
}

// Uji akses
$acc = new Account("Rani", 5000, "1234");
echo $acc->owner . PHP_EOL;              // boleh
echo $acc->getBalance("1234") . PHP_EOL; // boleh

$pacc = new PremiumAccount("Dina", 10000, "9999");
echo $pacc->debugBalance() . PHP_EOL;    // boleh
