<?php

$veri = ['isim' => 'İsmail', 'soyisim' => 'BALCI', 'yas' => 44];

if (isset($_POST['kullanici'])) {
    echo json_encode($veri);
}