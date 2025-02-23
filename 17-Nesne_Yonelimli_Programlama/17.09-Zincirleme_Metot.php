<?php

    class islem{
        public $sayi1, $sayi2;
        public $toplam, $carpim;
        
        public function topla() {
            $this->toplam = $this->sayi1 + $this->sayi2;
            return $this;
        }
        
        public function carp() {
            $this->carpim = $this->sayi1 * $this->sayi2;
            return $this;
        }

        public function goster() {
            echo $this->toplam."<br>";
            echo $this->carpim."<br>";
        }
    }

    $islem = new islem();

    $islem->sayi1 = 10;
    $islem->sayi2 = 5;

    $islem->topla()->carp()->goster();

?>