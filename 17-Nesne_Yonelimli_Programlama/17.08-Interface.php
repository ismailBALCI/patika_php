<?php
    /*
    Interface Kullanımı
        // Arayüzler, soyut sınıflara benzer.
        // Arayüzler sadece sınıfta zorunlu olarak tanımlanması gereken metotları belirtmek için kullanılır.

    Özellikleri
        // Soyut methodlar ve sabitler içerebilir.
        // Sadece public method tanımı yapılabilir.
        // Aynı sınıf birden fazla interface kullanabilir.
    */

    interface Bir {
        public function metotBir($a);
    }

    interface Iki {
        public function metotIki($b);
    }

    class Sinif1 implements Bir {
        public function metotBir($a) {}
    }
    
    class Sinif2 implements Bir,Iki {
        public function metotBir($a) {}
        public function metotIki($b) {}
    }

?>