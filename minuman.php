<?php

// Definisikan kelas Minuman
class Minuman {
    private $nama;
    private $asal;

    // Konstruktor untuk inisialisasi objek Minuman
    public function __construct($nama, $asal) {
        $this->nama = $nama;
        $this->asal = $asal;
    }

    // Getter untuk mendapatkan nama minuman
    public function getNama() {
        return $this->nama;
    }

    // Getter untuk mendapatkan Asal minuman
    public function getAsal() {
        return $this->asal;
    }
}

?>
