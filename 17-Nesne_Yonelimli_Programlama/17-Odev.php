
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
            $alan = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
        }

        return $alan;
    }
}

class Kare extends Sekil {
    public function cevre() {
        echo "Karenin Çevresi: " . parent::cevreHesapla() . "<br>";
    }

    public function alan() {
        echo "Karenin Alanı: " . parent::alanHesapla() . "<br>";
    }
}

class Dikdortgen extends Sekil {
    public function cevre() {
        echo "Dikdörgenin Çevresi: " . parent::cevreHesapla() . "<br>";
    }

    public function alan() {
        echo "Dikdörtgenin Alanı: " . parent::alanHesapla() . "<br>";
    }
}

class Ucgen extends Sekil {
    public function cevre() {
        echo "Üçgenin Çevresi: " . parent::cevreHesapla() . "<br>";
    }

    public function alan() {
        echo "Üçgenin Alanı: " . parent::alanHesapla() . "<br>";
    }
}

$kare = new Kare(5);
$kare->cevre();
$kare->alan();

$dikdortgen = new Dikdortgen(3,5);
$dikdortgen->cevre();
$dikdortgen->alan();

$ucgen = new Ucgen(3,4,5);
$ucgen->cevre();
$ucgen->alan();

?>
