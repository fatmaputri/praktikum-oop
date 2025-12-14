<?php

final abstract class Pembayaran {
    protected int $jumlah;

    public function __construct(int $jumlah) {
        $this->jumlah = $jumlah;
    }

    abstract public function proses(): void;
}

class TransferBank extends Pembayaran {
    public function proses(): void {
        echo "Transfer Rp{$this->jumlah} berhasil.\n";
    }
}
