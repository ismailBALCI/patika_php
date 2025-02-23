<?php
    // Sınfı tanımlama
    class User {
        public $isim = "İsmail";
        public $soyisim = "BALCI";
        public $yas = 0;
        const DY = 1981;
        
        public function tam_isim() {
            return $this->isim . " " . $this->soyisim;
        }

        public function addUser($isim, $soyisim, $yas) {
            $this->$isim = $isim;            
            $this->$soyisim = $soyisim;
            $this->$yas = $yas;
        }
    }

    // Sınıf kullanımı
    $User = new User();
    echo $User->isim . "<br>";  // Özellik kullanımı
    echo $User->tam_isim() . "<br>";  // Metod kullanımı

    echo User::DY . "<br>"; // Sabit kullanımı

    $User = new User();
    $User->addUser("Fatma", "KÜÇÜK", 60);   /* ÇALIŞMADI */

    echo $User->isim . "<br>";
    echo $User->soyisim . "<br>";
    echo $User->yas . "<br>";
    echo $User->tam_isim();
    
?>