<?php

class MyClass {
    public string $pub = 'Public';
    protected string $prot = 'Protected';
    private string $priv = 'Private';

    public function dump(): void {
        echo $this->pub . PHP_EOL;
        echo $this->prot . PHP_EOL;
        echo $this->priv . PHP_EOL;
    }
}

class MyChild extends MyClass {
    public function check(): void {
        echo $this->pub . PHP_EOL;
        echo $this->prot . PHP_EOL;
        // echo $this->priv; // ERROR
    }
}

$obj = new MyClass();
echo $obj->pub . PHP_EOL;
// echo $obj->prot; // ERROR
// echo $obj->priv; // ERROR
$obj->dump();
