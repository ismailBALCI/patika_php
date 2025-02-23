<?php

    /* Static: Sınıf özelliklerinin ya da methodların static olarak tanımlanması, o özelliklerin ve yöntemlerin sınıfı başlatmadan kullanılabilmesini sağlar. */
    // Static methodlar Ram'de tutulur ve daha performaslıdır.
    class Kisi{
        public static $isim;
        public $soyisim;

        public static function setIsim($isim) {
            self::$isim = $isim;
        }

        public static function getIsim() {
            return self::$isim;
        }

        public function tamIsimYaz() {
            echo self::$isim . " " . $this->soyisim;
        }
    }

    Kisi::$isim = "İsmail";
    echo Kisi::$isim;
    echo "<br>";

    $kisi1 = new Kisi();
    $kisi1->soyisim = "BALCI";
    $kisi1->tamIsimYaz();
    echo "<br>";
    
    Kisi::setIsim("Fatma");
    echo Kisi::getIsim();
    echo "<br>";
    
    // Static methodlar Ram'de tutulduğu için sınıfı tekrar başlattığımızda statik olarak güncellenen verilere ulaşabiliriz.
    $kisi2 = new Kisi();
    echo $kisi2::$isim . " - " . $kisi2->soyisim;

?>