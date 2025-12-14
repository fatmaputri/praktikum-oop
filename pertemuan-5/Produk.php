<?php

class Produk {
    protected string $nama;
    protected int $harga;

    public function __construct(string $nama, int $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getHarga(): int {
        return $this->harga;
    }
}

class ProdukDiskon extends Produk {
    private float $diskon;

    public function __construct(string $nama, int $harga, float $diskon) {
        parent::__construct($nama, $harga);
        $this->diskon = $diskon;
    }

    public function getHarga(): int {
        $hargaAsli = parent::getHarga();
        return (int) ($hargaAsli * (1 - $this->diskon));
    }
}

class ProdukDiskonBesar extends Produk {
    public function getHarga(): int {
        return (int)(parent::getHarga() * 0.7);
    }
}

class ProdukDiskonKecil extends Produk {
    public function getHarga(): int {
        return (int)(parent::getHarga() * 0.9);
    }
}

class ProdukPromo extends ProdukDiskon {
    private float $diskonTambahan = 0.05;

    public function getHarga(): int {
        $hargaDiskon = parent::getHarga();
        return (int) ($hargaDiskon * (1 - $this->diskonTambahan));
    }
}

$hp = new ProdukDiskonKecil("HP", 5000000);
echo "Harga HP Diskon Kecil: Rp" . $hp->getHarga() . "\n";

$laptop = new ProdukDiskon("Laptop", 10000000, 0.15);
echo "Harga Laptop setelah diskon: Rp" . $laptop->getHarga() . "\n";

$tv = new ProdukPromo("TV", 8000000, 0.1);
echo "Harga TV Promo: Rp" . $tv->getHarga() . "\n";

