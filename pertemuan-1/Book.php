<?php

require_once "Product.php";

class Book extends Product {
    private int $pages;

    public function __construct(string $name, int $price, int $pages) {
        parent::__construct($name, $price);
        $this->pages = $pages;
    }

    // overriding getInfo()
    public function getInfo(): string {
        return "Buku: {$this->name}, {$this->pages} halaman, Harga: Rp {$this->price}";
    }
}
