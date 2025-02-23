<?php

// Temel Şekil sınıfı
class Sekil {
    protected $kenar = [];
    protected $kenarSayisi;

    public function __construct(...$kenar) {
        $this->kenar = $kenar;
        $this->kenarSayisi = count($kenar);
    }

    public function cevreHesapla() {
        if ($this->kenarSayisi == 1) {
            $cevre = 4 * $this->kenar[0];
        } elseif ($this->kenarSayisi == 2) {
            $cevre = 2 * ($this->kenar[0] + $this->kenar[1]);
        } elseif ($this->kenarSayisi == 3) {
            $cevre = $this->kenar[0] + $this->kenar[1] + $this->kenar[2];
        }

        return $cevre;
    }

    public function alanHesapla() {
        if ($this->kenarSayisi == 1) {
            $a = $this->kenar[0];
            $alan = $a * $a;
        } elseif ($this->kenarSayisi == 2) {
            $a = $this->kenar[0];
            $b = $this->kenar[1];
            $alan = $a * $b;
        } elseif ($this->kenarSayisi == 3) {
            $a = $this->kenar[0];
            $b = $this->kenar[1];
            $c = $this->kenar[2];

            $s = ($a + $b + $c) / 2;
            $alan = ($s * ($s - $a) * ($s - $b) * ($s - $c));
        }

        return $alan;
    }
}

class Kare extends Sekil { // Kare için bir kenar degeri girilemilidir.

    public function cevreHesapla() {
        echo "Karenin Çevresi: " . $this->cevreHesapla();
    }

    public function alanHesapla() {
        echo "Karenin Alanı: " . $this->alanHesapla();
    }
}

class Dikdortgen extends Sekil { // Dikdörgen için iki kenar degeri girilemilidir.

    public function cevreHesapla() {
        echo "Dikdörgenin Çevresi: " . $this->cevreHesapla();
    }

    public function alanHesapla() {
        echo "Dikdörtgenin Alanı: " . $this->alanHesapla();
    }
}

class Ucgen extends Sekil { // Üçgen için üç kenar degeri girilemilidir.

    public function cevreHesapla() {
        echo "Üçgenin Çevresi: " . $this->cevreHesapla();
    }

    public function alanHesapla() {
        echo "Üçgenin Alanı: " . $this->alanHesapla();
    }
}

// Kullanım: Kare için bir, dikdörtgen için iki, üçgen için üç kenar değeri girilmelidir.

$kare = new Kare(5);
$kare->cevreHesapla();
$kare->alanHesapla();

$dikdortgen = new Dikdortgen(3,5);
$dikdortgen->cevreHesapla();
$dikdortgen->alanHesapla();

$ucgen = new Ucgen(3,4,5);
$ucgen->cevreHesapla();
$ucgen->alanHesapla();

?>