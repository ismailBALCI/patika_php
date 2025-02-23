<?php

    // final olarak tanımlanan sınıflar ve methodlar kalıtım yoluyla çoğaltılamaz.
    class Bir {
        public function metotBir(){
            echo "MetotBir ";
        }
    }

    /*final*/ class Iki extends Bir {
        /*final*/ public function metotIki(){
            echo "Metotİki ";
        }
    }

    class Uc extends Iki {
        public function metotUc(){
            echo "MetotÜç ";
        }
        public function metotIki(){
            echo "MetotİkiOverride ";
        }
    }

    $Uc = new Uc();

    $Uc->metotBir();
    $Uc->metotIki();
    $Uc->metotUc();

?>