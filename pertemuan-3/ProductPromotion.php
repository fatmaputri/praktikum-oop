<?php

class ProductManual {
    public string $name;
    public int $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

$p = new ProductManual("Laptop", 15000);
echo $p->name . " - " . $p->price;
