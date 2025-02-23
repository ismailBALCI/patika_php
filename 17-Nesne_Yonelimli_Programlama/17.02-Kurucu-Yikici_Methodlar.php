<?php

class User{
    private $isim;
    private $soyisim;

    public function __construct($isim, $soyisim) {
        echo "Kurucu metod çalıştı. <br>";
        $this->isim = $isim;
        $this->soyisim = $soyisim;
    }

    public function __destruct() {
        echo "Yıkıcı metod çalıştı. <br>";
        $this->isim = null;
        $this->soyisim = null;
    }

    public function selam() {
        echo "Selam $this->isim $this->soyisim nasılsın? <br>";
    }
}

$User = new User("İsmail", "BALCI");

$User->selam();
    
?>