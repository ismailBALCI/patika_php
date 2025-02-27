<?php
require DIR.'/model/KulModel.php';

class Kullanici {

    public function Listele() {        
        $KulModel = new KulModel();
        $veri = $KulModel->kulListele();

        require DIR.'/view/KulListele.php';
    }

}