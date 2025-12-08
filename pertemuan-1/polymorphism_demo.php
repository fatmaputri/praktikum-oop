<?php

// Class pertama
class Mobil {
    public function accelerate() {
        return "Mobil melaju dengan kecepatan stabil...";
    }
}

// Class kedua
class Motor {
    public function accelerate() {
        return "Motor ngebut dengan cepat!";
    }
}

// Fungsi umum untuk menunjukkan polymorphism
function testAcceleration($kendaraan) {
    echo $kendaraan->accelerate() . "\n";
}

// Buat object dari dua class
$mobil = new Mobil();
$motor = new Motor();

// Memanggil method yang sama, tapi hasilnya beda
testAcceleration($mobil);
testAcceleration($motor);
