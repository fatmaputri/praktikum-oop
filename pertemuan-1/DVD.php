<?php

require_once "Product.php";

class DVD extends Product {
    private int $duration;

    public function __construct(string $name, int $price, int $duration) {
        parent::__construct($name, $price);
        $this->duration = $duration;
    }

    // overriding getInfo()
    public function getInfo(): string {
        return "DVD: {$this->name}, Durasi: {$this->duration} menit, Harga: Rp {$this->price}";
    }
}
